<?php

use App\Http\Controllers\AdminManageController;
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
    Route::middleware(['auth', 'permission:allusers'])->group(function () {
    Route::get('/all-users',[ConstrumerController::class,'allUser'])->name('all-user');
    Route::post('/update-user-status', [ConstrumerController::class,'updateStatus']);
    });
    Route::middleware(['auth', 'permission:adminmanages'])->group(function () {
    Route::match(['get', 'post'], '/adminmanages', [AdminManageController::class, 'index'])->name('admin-manages');
    Route::get('/fetch-user-permissions/{userId}', [AdminManageController::class, 'fetchUserPermissions']);
    Route::post('/users/{user}/update-permissions', [AdminManageController::class, 'updatePermissions'])->name('update.permissions');
    });
    Route::middleware(['auth', 'permission:activeusers'])->group(function () {
    Route::get('/active-users',[ConstrumerController::class,'activeUser'])->name('active-user');
    Route::post('/filter-active-customer', [ConstrumerController::class, 'filterActive'])->name('filter-active-customer');
    });
    Route::middleware(['auth', 'permission:betting_location'])->group(function () {
    Route::get('/block-users',[ConstrumerController::class,'blockUser'])->name('block-user');
    Route::post('/filter-block-customer', [ConstrumerController::class, 'filter'])->name('filter-block-customer');

    });
    Route::middleware(['auth', 'permission:paymenthistory'])->group(function () {
    Route::get('/payment-users',[PaymentController::class,'PaymentHistory'])->name('payment-user');
    });
    Route::middleware(['auth', 'permission:winninghistory'])->group(function () {
    Route::get('/winning-users',[UserControler::class,'winningUser'])->name('winning-user');
    });
    Route::middleware(['auth', 'permission:withdrawhistory'])->group(function () {
    Route::get('/withdraw-users',[UserControler::class,'userWithdraw'])->name('withdraw-user');
    });
    Route::get('/logout',[UserControler::class,'logout'])->name('logout');
    Route::middleware(['auth', 'permission:betting_location'])->group(function () {
    Route::get('/betting-location',[BettingController::class,'bettinglocation'])->name('betting-location');
    Route::post('/betting-location',[BettingController::class,'store'])->name('betting-location-store');
    Route::get('/betting-locations/{id}/edit', [BettingController::class, 'edit']);
    Route::delete('/delete-betting-location/{id}', [BettingController::class, 'destroy'])->name('delete-betting-location');
    Route::post('/update-betting-location-status', [BettingController::class, 'updatestatus']);
    Route::put('/betting-locations/{id}', [BettingController::class, 'update']);
    Route::post('/betting-locations-filter', [BettingController::class, 'filter'])->name('filter-batting-location');
    });
    Route::middleware(['auth', 'permission:betting_number'])->group(function () {
    Route::post('/betting-number',[BettingNumberController::class,'store'])->name('betting-number-store');
    Route::get('/betting-number',[BettingNumberController::class,'bettingnumber'])->name('betting-number');
    Route::get('/betting-number/{id}/edit', [BettingNumberController::class, 'edit']);
    Route::delete('/delete-betting-number/{id}', [BettingNumberController::class, 'destroy'])->name('delete-betting-number');
    Route::post('/update-betting-number-status', [BettingNumberController::class, 'updatestatus']);
    Route::put('/betting-number/{id}', [BettingNumberController::class, 'update']);
    Route::post('/betting-number-filter', [BettingNumberController::class, 'filter'])->name('filter-batting-number');
    });
});

require __DIR__.'/auth.php';
