<?php

use App\Http\Controllers\BettingController;
use App\Http\Controllers\BettingNumberController;
use App\Http\Controllers\ConstrumerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserControler;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    Auth::logout();
    session()->invalidate();
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/betting-location',[BettingController::class,'bettinglocation'])->name('betting-location');
    Route::post('/betting-location',[BettingController::class,'store'])->name('betting-location-store');
    Route::post('/betting-number',[BettingNumberController::class,'store'])->name('betting-number-store');
    Route::get('/betting-number',[BettingNumberController::class,'bettingnumber'])->name('betting-number');
    // Route::get('/all-users',[UserControler::class,'allUser'])->name('all-user');
    Route::get('/all-users',[ConstrumerController::class,'allUser'])->name('all-user');
    Route::get('/active-users',[UserControler::class,'activeUser'])->name('active-user');
    Route::get('/block-users',[UserControler::class,'blockUser'])->name('block-user');
    Route::get('/payment-users',[PaymentController::class,'PaymentHistory'])->name('payment-user');
    Route::get('/winning-users',[UserControler::class,'winningUser'])->name('winning-user');
    Route::get('/withdraw-users',[UserControler::class,'userWithdraw'])->name('withdraw-user');
    Route::get('/logout',[UserControler::class,'logout'])->name('logout');
    Route::get('/betting-locations/{id}/edit', [BettingController::class, 'edit']);
    Route::delete('/delete-betting-location/{id}', [BettingController::class, 'destroy'])->name('delete-betting-location');
    Route::post('/update-betting-location-status', [BettingController::class, 'updatestatus']);
    Route::put('/betting-locations/{id}', [BettingController::class, 'update']);
    Route::post('/betting-locations-filter', [BettingController::class, 'filter'])->name('filter-batting-location');
    Route::get('/betting-number/{id}/edit', [BettingNumberController::class, 'edit']);
    Route::delete('/delete-betting-number/{id}', [BettingNumberController::class, 'destroy'])->name('delete-betting-number');
    Route::post('/update-betting-number-status', [BettingNumberController::class, 'updatestatus']);
    Route::put('/betting-number/{id}', [BettingNumberController::class, 'update']);
    Route::post('/betting-number-filter', [BettingNumberController::class, 'filter'])->name('filter-batting-number');
});

require __DIR__.'/auth.php';
