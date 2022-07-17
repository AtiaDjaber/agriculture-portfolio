<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/admin/login', function () {
    return view("admin.login");
})->name("login");

Route::get('/admin/dashboard', ['App\Http\Controllers\DashboardController', "index"])->name('home')->middleware('auth');;
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {
    Route::prefix('products')->group(function () {
        Route::get('/', ['App\Http\Controllers\ProductAdminController', "index"])->name('product.index');
        Route::get('/create', ['App\Http\Controllers\ProductAdminController', "create"]);
        Route::post('/', ['App\Http\Controllers\ProductAdminController', "store"]);
        Route::put('/{id}', ['App\Http\Controllers\ProductAdminController', "update"])->name('admin.product.update');
        Route::get('/edit/{id}', ['App\Http\Controllers\ProductAdminController', 'edit']);
        Route::delete('/delete', ['App\Http\Controllers\ProductAdminController', 'destroy']);
    });
    Route::prefix('categories')->group(function () {
        Route::get('/', ['App\Http\Controllers\CategoryController', "index"])->name('admin.categories.index');
        Route::get('/create', ['App\Http\Controllers\CategoryController', "create"]);
        Route::post('/', ['App\Http\Controllers\CategoryController', "store"]);
        Route::put('/{id}', ['App\Http\Controllers\CategoryController', "update"])->name('admin.categories.update');
        Route::get('/edit/{id}', ['App\Http\Controllers\CategoryController', 'edit']);
        Route::delete('/delete', ['App\Http\Controllers\CategoryController', 'destroy']);
    });
    Route::post('upload', ['App\Http\Controllers\AttachmentController', "upload"])->name("admin.upload");
});

Route::get('/products', [ProductController::class, "index"])->name('products');
Route::get('/product/{id}', [ProductController::class, "getById"])->name('product.detail');

Auth::routes();
