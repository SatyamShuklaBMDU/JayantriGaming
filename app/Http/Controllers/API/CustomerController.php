<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class CustomerController extends Controller
{
    public function register(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'cin_no' => 'nullable|string',
                'name' => 'required|string',
                'phone_no' => 'required|string',
                'profile_image' => 'nullable|image',
                'email_id' => 'required|email|unique:customers,email_id',
                'password' => 'required|string',
                'status' => 'nullable|in:active,block,pending',
            ]);
            if ($request->hasFile('profile_image')) {
                $imageName = $request->file('profile_image')->getClientOriginalName();
                $request->file('profile_image')->move(public_path('profile_images'), $imageName);
                $validatedData['profile_image'] = 'profile_images/' . $imageName;
            }                                   
            $validatedData['password'] = Hash::make($validatedData['password']);
            $customer = Customer::create($validatedData);
            return response()->json(['message' => 'Registered successfully', 'customer' => $customer], 201);
        } catch (ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Server Error'], 500);
        }
    }
    public function update(Request $request)
    {
        // dd($request->all());
        try {
            $customer = Customer::find($request->id);
            $validatedData = $request->validate([
                'cin_no' => 'nullable|string',
                'name' => 'string',
                'phone_no' => 'string',
                'profile_image' => 'nullable|image',
                'email_id' => 'email|unique:customers,email_id,' . $customer->id,
                'password' => 'string',
                'status' => 'nullable|in:active,block,pending',
            ]);
            // dd($request->all());
            if ($request->hasFile('profile_image')) {
                $imageName = $request->file('profile_image')->getClientOriginalName();
                $request->file('profile_image')->move(public_path('profile_images'), $imageName);
                $validatedData['profile_image'] = 'profile_images/' . $imageName;
            }                                
            $customer->update($validatedData);
            return response()->json(['message' => 'Details Update successfully','customer' => $customer], 200);
        } catch (ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Customer not found'], 404);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Server Error'], 500);
        }
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('customer')->attempt($credentials)) {
            $customer = Auth::guard('customer')->user();
            $token = $customer->createToken('MyApp')->plainTextToken;
            return response()->json(['token' => $token], 200);
        }
        return response()->json(['message' => 'Unauthorized'], 401);
    }
}
