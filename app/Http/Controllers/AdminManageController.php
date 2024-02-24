<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminManageController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('get')) {
            $users = User::select('id', 'name', 'role', 'permissions')->whereNotNull('role')->get();
            $allPermissions = [];
            foreach ($users as $user) {
                $permissionsArray = json_decode($user->permissions, true);
                if ($permissionsArray) {
                    foreach ($permissionsArray as $permission) {
                        if (!in_array($permission, $allPermissions)) {
                            $allPermissions[] = $permission;
                        }
                    }
                }
            }
            return view('admin.admin_manages', ['users' => $users, 'allPermissions' => $allPermissions]);
        }
        if ($request->isMethod('post')) {
            $validate = Validator::make($request->all(), [
                'name' => ['required'],
                'email' => ['required', 'email', 'unique:users'],
                'password' => ['required'],
                'role' => ['required'],
            ]);
            if ($validate->fails()) {
                return back()->withErrors($validate)->withInput();
            }
            $permissions = json_encode($request->permission);
            $input = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role,
                'status' => '1',
                'permissions' => $permissions,
            ];
            $item = User::create($input);
            return back()->with('message', 'User Added Successfully');
        }
    }
    public function updatePermissions(Request $request, User $user)
    {
        $request->validate([
            'role' => 'required',
            'permissions' => 'required',
        ]);
        $user->update([
            'role' => $request->role,
            'permissions' => $request->permissions,
        ]);
        return back()->with('message', 'Permissions updated successfully.');
    }
    public function fetchUserPermissions($userId) {
        $user = User::findOrFail($userId);
        $permissions = json_decode($user->permissions);
        return response()->json(['permissions' => $permissions]);
    }
}
