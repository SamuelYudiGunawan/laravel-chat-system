<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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


// ::, accessing static method or variable (scope resolution)
// ->, access method or variable (arrow function)

Route::get('/', [AuthController::class, 'index'])->name('index');
Route::get('/login', [AuthController::class, 'loginPage'])->name('loginPage');


Route::post('/login/auth', [AuthController::class, 'login'])->name('login');


Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::post('/home/logout', [AuthController::class,'logout'])->name('logout');


Route::get('/home/admin', [AuthController::class, 'admin'])->name('admin')->middleware('security');


Route::post('/home/chat', [ChatController::class, 'chat'])->name('chat');
