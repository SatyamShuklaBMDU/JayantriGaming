<?php

use App\Http\Controllers\BettingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserControler;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('welcome');
});
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
Route::get('/betting-location',[BettingController::class,'bettinglocation'])->name('betting-location');
Route::get('/betting-number',[BettingController::class,'bettingnumber'])->name('betting-number');
Route::get('/all-users',[UserControler::class,'allUser'])->name('all-user');
Route::get('/active-users',[UserControler::class,'activeUser'])->name('active-user');
Route::get('/block-users',[UserControler::class,'blockUser'])->name('block-user');
Route::get('/payment-users',[PaymentController::class,'PaymentHistory'])->name('payment-user');
Route::get('/winning-users',[UserControler::class,'winningUser'])->name('winning-user');
Route::get('/withdraw-users',[UserControler::class,'userWithdraw'])->name('withdraw-user');
