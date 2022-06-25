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
    return view('welcome');
});
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
        Route::get('/edit', [ProductAdminController::class, 'edit']);
        Route::delete('/delete', [ProductAdminController::class, 'destroy']);
    });
});

Route::get('/products', [ProductController::class, "index"]);
Route::get('/product/{id}', [ProductController::class, "getById"]);

Auth::routes();
