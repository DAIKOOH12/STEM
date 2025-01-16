<?php

use App\Http\Controllers\clients\AccountController;
use App\Http\Controllers\clients\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/category/{category_parent?}/{category?}', [HomeController::class, 'category'])->name('categorypage');
Route::get('/category/{category_parent?}/{category?}', [HomeController::class, 'category'])->name('categorypage');

Route::get('/item-detail/{id?}', [HomeController::class, 'itemDetail'])->name('item-detail');
Route::get('/cart', [HomeController::class, 'cart'])->name('cartpage');
Route::get('/blog', [HomeController::class, 'blog'])->name('blogpage');
Route::get('/detail-blog', [HomeController::class, 'blogDetail'])->name('detail-blog');
Route::get('/contact', [HomeController::class, 'contact'])->name('contactpage');
Route::get('/account', [AccountController::class, 'index'])->name('accountpage');
