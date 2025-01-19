<?php

use App\Http\Controllers\admin\AdminController;
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
//Clients
Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/category/{category_parent?}/{category?}', [HomeController::class, 'category'])->name('categorypage');
Route::get('/category/{category_parent?}/{category?}', [HomeController::class, 'category'])->name('categorypage');
Route::get('/item-detail/{id?}', [HomeController::class, 'itemDetail'])->name('item-detail');
Route::get('/cart', [HomeController::class, 'cart'])->name('cartpage');
Route::get('add-cart/{id?}', [HomeController::class, 'addToCart'])->name('addtocart');
Route::get('del-cart/{id?}', [HomeController::class, 'removeFromCart'])->name('removefromcart');
Route::get('/blog', [HomeController::class, 'blog'])->name('blogpage');
Route::get('/detail-blog', [HomeController::class, 'blogDetail'])->name('detail-blog');
Route::get('/contact', [HomeController::class, 'contact'])->name('contactpage');
Route::get('/account', [AccountController::class, 'index'])->name('accountpage');
Route::post('/account', [AccountController::class, 'signIn'])->name('signin');
Route::post('/signup', [AccountController::class, 'signUp'])->name('signup');
Route::get('/signin', [AccountController::class, 'signOut'])->name('signout');



//Admin
Route::get('/admin',[AdminController::class,'index'])->name('adminpage');
Route::get('/list-products',[AdminController::class,'getListProducts'])->name('listproducts');
Route::get('/add-product',[AdminController::class,'getAddView'])->name('addproduct');
Route::post('/add-product',[AdminController::class,'addProduct'])->name('showaddform');
Route::post('/edit-product',[AdminController::class,'editProduct'])->name('editproduct');
Route::post('/del-product',[AdminController::class,'delProduct'])->name('delproduct');