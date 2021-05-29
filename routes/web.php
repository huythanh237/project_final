<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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
    return view('login.index1');
});


Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('show');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login');

Route::middleware(['auth'])->group(function (){
    Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('admin.index');
    Route::get('/member', [HomeController::class, 'member'])->name('member');
    Route::get('/delete-member/{id}', [HomeController::class, 'DeleteMember'])->name('del-member');


    Route::get('/category', [HomeController::class, 'category'])->name('category');
    Route::get('/create-category', [HomeController::class, 'ShowCreateCate'])->name('form-create-cate');
    Route::post('/create-category', [HomeController::class, 'CreateCate'])->name('create-cate');
    Route::get('/edit-category/{category_id}', [HomeController::class, 'ShowEditCate'])->name('form-edit-cate');
    Route::post('/edit-category/{category_id}', [HomeController::class, 'EditCate'])->name('edit-cate');
    Route::get('/delete-category/{category_id}', [HomeController::class, 'DeleteCate'])->name('del-cate');

    Route::get('/product', [HomeController::class, 'product'])->name('product');
    Route::get('/create-product', [HomeController::class, 'ShowCreatePro'])->name('form-create-pro');
    Route::post('/create-product', [HomeController::class, 'CreatePro'])->name('create-pro');
    Route::get('/edit-product/{product_id}', [HomeController::class, 'ShowEditPro'])->name('form-edit-pro');
    Route::post('/edit-product/{product_id}', [HomeController::class, 'EditPro'])->name('edit-pro');
    Route::get('/delete-product/{product_id}', [HomeController::class, 'DeletePro'])->name('del-pro');
});








