<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
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
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('login-confirm', [CustomAuthController::class, 'loginConfirm'])->name('login.confirm'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');
