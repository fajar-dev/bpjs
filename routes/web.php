<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JPController;
use App\Http\Controllers\JHTController;
use App\Http\Controllers\JKKController;
use App\Http\Controllers\JKPController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\DashboardController;

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

Route::get('/jkk', [JKKController::class, 'index'])->name('jkk')->middleware('auth');
Route::get('/jkk/add', [JKKController::class, 'add'])->name('jkk_add')->middleware('auth');
Route::post('/jkk/update', [JKKController::class, 'update'])->name('jkk_update')->middleware('auth');
Route::get('/jkk/delete/{id}', [JKKController::class, 'delete'])->name('jkk_delete')->middleware('auth');

Route::get('/jht', [JHTController::class, 'index'])->name('jht')->middleware('auth');
Route::get('/jht/add', [JHTController::class, 'add'])->name('jht_add')->middleware('auth');
Route::post('/jht/submit', [JHTController::class, 'submit'])->name('jht_submit')->middleware('auth');
Route::post('/jht/update', [JHTController::class, 'update'])->name('jht_update')->middleware('auth');
Route::get('/jht/delete/{id}', [JHTController::class, 'delete'])->name('jht_delete')->middleware('auth');

Route::get('/jp', [JPController::class, 'index'])->name('jp')->middleware('auth');
Route::post('/jp/add', [JPController::class, 'add'])->name('jp_add')->middleware('auth');
Route::post('/jp/update', [JPController::class, 'update'])->name('jp_update')->middleware('auth');
Route::get('/jp/delete/{id}', [JPController::class, 'delete'])->name('jp_delete')->middleware('auth');

Route::get('/jkp', [JKPController::class, 'index'])->name('jkp')->middleware('auth');
Route::post('/jkp/add', [JKPController::class, 'add'])->name('jkp_add')->middleware('auth');
Route::post('/jkp/update', [JKPController::class, 'update'])->name('jkp_update')->middleware('auth');
Route::get('/jkp/delete/{id}', [JKPController::class, 'delete'])->name('jkp_delete')->middleware('auth');

Route::get('/account', [AccountController::class, 'index'])->name('account')->middleware('auth');
Route::post('/account/update', [AccountController::class, 'update'])->name('account_update')->middleware('auth');
Route::post('/account/change', [AccountController::class, 'change'])->name('account_change')->middleware('auth');


Route::get('/user', [UserController::class, 'index'])->name('user')->middleware('auth');
Route::post('/user/add', [UserController::class, 'add'])->name('user_add')->middleware('auth');
Route::post('/user/update', [UserController::class, 'update'])->name('user_update')->middleware('auth');
Route::post('/user/change_password', [UserController::class,'change'])->name('change_pass')->middleware('auth');
Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user_delete')->middleware('auth');


