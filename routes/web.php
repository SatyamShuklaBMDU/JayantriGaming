<?php

use App\Http\Controllers\BettingController;
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
    Route::get('/betting-number',[BettingController::class,'bettingnumber'])->name('betting-number');
    // Route::get('/all-users',[UserControler::class,'allUser'])->name('all-user');
    Route::get('/all-users',[ConstrumerController::class,'allUser'])->name('all-user');
    Route::get('/active-users',[UserControler::class,'activeUser'])->name('active-user');
    Route::get('/block-users',[UserControler::class,'blockUser'])->name('block-user');
    Route::get('/payment-users',[PaymentController::class,'PaymentHistory'])->name('payment-user');
    Route::get('/winning-users',[UserControler::class,'winningUser'])->name('winning-user');
    Route::get('/withdraw-users',[UserControler::class,'userWithdraw'])->name('withdraw-user');
    Route::get('/logout',[UserControler::class,'logout'])->name('logout');
    Route::get('/betting-locations/{id}/edit', [BettingController::class, 'edit']);
});

require __DIR__.'/auth.php';
