<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MobilController;

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


Route::get('/', [HomeController::class, 'redirect']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/loginaksi', [LoginController::class, 'loginaksi']);
Route::get('/logoutaksi', [LoginController::class, 'logoutaksi'])->middleware('auth');

Route::resource('pengguna', PenggunaController::class);

Route::resource('mobil', MobilController::class);