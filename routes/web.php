<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', [HomeController::class, 'index'])->name('index');

Route::get('/login', [LoginController::class, 'show'])->name('auth.show');
Route::post('/login', [LoginController::class, 'login'])->name('auth.login');

Route::get('/register', [RegisterController::class, 'ShowRegister'])->name('auth.Register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/product', [HomeController::class, 'product'])->name('product');

