<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\clients\AccountController;
use App\Http\Controllers\clients\HomeController;
use App\Http\Controllers\clients\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RevalidateBackHistory;

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
Route::get('/product', [HomeController::class, 'searchProduct'])->name('searchproduct');
Route::get('/category/{category_parent?}/{category?}', [HomeController::class, 'category'])->name('categorypage');
Route::get('/category/{category_parent?}/{category?}', [HomeController::class, 'category'])->name('categorypage');
Route::get('/item-detail/{id?}', [HomeController::class, 'itemDetail'])->name('item-detail');
Route::get('/cart', [HomeController::class, 'cart'])->name('cartpage');
Route::get('add-cart/{id?}/{quantity?}', [HomeController::class, 'addToCart'])->name('addtocart');
Route::get('update-cart/{id?}/{quantity?}', [HomeController::class, 'updateCart'])->name('updatecart');
Route::get('del-cart/{id?}', [HomeController::class, 'removeFromCart'])->name('removefromcart');
Route::get('/blog', [HomeController::class, 'blog'])->name('blogpage');
Route::get('/detail-blog/{id?}', [HomeController::class, 'blogDetail'])->name('detailblog');
Route::get('/contact', [HomeController::class, 'contact'])->name('contactpage');
Route::get('/account', [AccountController::class, 'index'])->name('accountpage');
Route::post('/account', [AccountController::class, 'signIn'])->name('signin');
Route::post('/signup', [AccountController::class, 'signUp'])->name('signup');
Route::get('/signin', [AccountController::class, 'signOut'])->name('signout');
Route::get('/paid-bill', [HomeController::class, 'paidBill'])->name('paidbill');

Route::middleware(['preventBackHistory',
RevalidateBackHistory::class])->group(function () {
    //Admin Role
    Route::get('/admin/login', [AdminController::class, 'signInForm'])->name('loginpage');
    Route::post('/admin/login', [AdminController::class, 'signIn'])->name('adminsignin');
    Route::get('/admin/signout', [AdminController::class, 'signOut'])->name('adminsingout');
    Route::get('/list-employee', [AdminController::class, 'getListEmployee'])->name('listemployee');
    Route::post('/updagte-employee',[AdminController::class,'updateEmployee'])->name('updateemployee');
    Route::post('/del-employee',[AdminController::class,'delEmployee'])->name('delemployee');
    Route::get('/add-employee', [AdminController::class, 'getAddEmployee'])->name('addemployee');
    Route::post('/add-employee', [AdminController::class, 'addEmployee'])->name('addemployee');

    //Admin-Products
    Route::get('/admin', [AdminController::class, 'index'])->name('adminpage');
    Route::get('/list-products', [AdminController::class, 'getListProducts'])->name('listproducts');
    Route::get('/add-product', [AdminController::class, 'getAddView'])->name('addproduct');
    Route::post('/add-product', [AdminController::class, 'addProduct'])->name('showaddform');
    Route::post('/edit-product', [AdminController::class, 'editProduct'])->name('editproduct');
    Route::post('/del-product', [AdminController::class, 'delProduct'])->name('delproduct');
    Route::get('/import-cell',[AdminController::class,'getImportProduct'])->name('importproduct');
    Route::post('/import-cell',[AdminController::class,'importProducts'])->name('importproduct');

    //Admin-Blogs
    Route::get('/list-blogs', [AdminController::class, 'showListBlogs'])->name('showlistblog');
    Route::get('/add-blog', [AdminController::class, 'getAddBlog'])->name('showaddblog');
    Route::post('/add-blog', [AdminController::class, 'addBlog'])->name('addblog');
    Route::get('/edit-blog', [AdminController::class, 'getEditBlog'])->name('geteditblog');
    Route::post('/edit-blog', [AdminController::class, 'updateBlog'])->name('editblog');
    Route::post('/edit-blog-category', [AdminController::class, 'updateBlogCategory'])->name('editblogcategory');

    //Admin-Analysis
    Route::get('/analysis-product',[AdminController::class,'analysisProduct'])->name('analysisproduct');

});
//VNPay Payment
Route::post('/payment', [PaymentController::class, 'vn_payment'])->name('payment');