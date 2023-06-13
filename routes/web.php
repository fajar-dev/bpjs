<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\SenderController;
use App\Http\Controllers\AgenciesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LettersoutController;
use App\Http\Controllers\DisposisiController;
use App\Http\Controllers\AccountController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('submit', [AuthController::class, 'submit'])->name('login_submit')->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/agency', [AgenciesController::class, 'index'])->name('agency')->middleware('auth');
Route::post('/agency_add', [AgenciesController::class, 'add'])->name('agency_add')->middleware('auth');
Route::post('/agency_update', [AgenciesController::class, 'update'])->name('agency_update')->middleware('auth');
Route::get('/agency_delete/{id}', [AgenciesController::class, 'delete'])->name('agency_delete')->middleware('auth');

Route::get('/account', [AccountController::class, 'index'])->name('account')->middleware('auth');
Route::post('/account/update', [AccountController::class, 'update'])->name('account_update')->middleware('auth');
Route::post('/account/change', [AccountController::class, 'change'])->name('account_change')->middleware('auth');


Route::get('/user', [UserController::class, 'index'])->name('user')->middleware('auth');
Route::post('/user/add', [UserController::class, 'add'])->name('user_add')->middleware('auth');
Route::post('/user/update', [UserController::class, 'update'])->name('user_update')->middleware('auth');
Route::post('/user/change_password', [UserController::class,'change'])->name('change_pass')->middleware('auth');
Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user_delete')->middleware('auth');


