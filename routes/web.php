<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\NewProductController;
use App\Http\Controllers\Backend\UserBackController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\AdminLoginController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\RegisterController;
use App\Http\Controllers\Frontend\FrontendProductsController;
use App\Http\Controllers\Frontend\SingleProductDetailsController;
use App\Http\Controllers\Frontend\UserAccountDetailsController;
use Illuminate\Support\Facades\Route;

//backend route start:

//main slider
Route::get('/sliders',[SliderController::class,'sliderList'])->name('slider.list'); 



//route for admin login
Route::get('/admin/login',[AdminLoginController::class,'login'])->name('admin.login');
Route::post('/admin/login/post',[AdminLoginController::class,'loginPost'])->name('admin.login.post');

Route::group(['prefix'=>'admin','middleware'=>['auth','role']],function(){
    Route::get('/admin/logout',[HomeController::class,'logout'])->name('admin.logout');
    Route::get('/',[HomeController::class,'home']);
    Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');
    Route::get('/ershop',[HomeController::class,'ershop'])->name('ershop');

//category route
    Route::get('/category/list/',[CategoryController::class,'CategoryList'])->name('category.list');
    Route::post('/category/store/',[CategoryController::class,'CategoryStore'])->name('category.store');

//product route
    Route::get('/product/list',[ProductController::class,'list'])->name('product.list');
    Route::post('/products/store',[ProductController::class,'store'])->name('product.store');

//product edit & delete
    Route::get('/product/edit/{id}',[ProductController::class,'ProductEdit'])->name('Product.edit');
    Route::post('/product/update/{id}',[ProductController::class,'ProductUpdate'])->name('Product.update');
    Route::get('/product/delete/{id}',[ProductController::class,'ProductDelete'])->name('Product.delete');

    Route::get('/product/new_product',[NewProductController::class,'new_product'])->name('new.product');

    Route::get('/coupon',[CouponController::class,'coupon'])->name('coupon');
    Route::get('/create/coupon',[CouponController::class,'create'])->name('create.coupon');

    Route::get('/category/{id}/products',[CategoryController::class,'allProduct'])->name('category.product');
    Route::get('/category/edit/{id}',[CategoryController::class,'CategoryEdit'])->name('category.edit');
    Route::post('/category/update/{id}',[CategoryController::class,'CategoryUpdate'])->name('category.update');
    Route::get('/category/delete/{id}',[CategoryController::class,'CategoryDelete'])->name('category.delete');

    Route::get('/customers',[UserBackController::class,'customer_list'])->name('customer.list');
    Route::get('/users',[UserBackController::class,'user_list'])->name('user.list');
    Route::post('/users/create/store',[UserBackController::class,'create_user_store'])->name('create.user.store');
});







//frontend route:
Route::get('/',[IndexController::class,'index'])->name('home');
Route::get('/home',[IndexController::class,'ershopHome'])->name('ershop.home');
Route::get('/checkout',[IndexController::class,'checkout'])->name('checkout');
Route::get('/cart',[IndexController::class,'cart'])->name('cart');

Route::get('/products',[FrontendProductsController::class,'products'])->name('products.view');
Route::get('/product/details/{id}',[SingleProductDetailsController::class,'singleProductDetails'])->name('single.products.details');

Route::get('/signin',[RegisterController::class,'login'])->name('frontend.login');
Route::post('/signin/store',[RegisterController::class,'signinstore'])->name('frontend.signin.store');

Route::get('/signup',[RegisterController::class,'signup'])->name('frontend.signup');
Route::post('/signup/store',[RegisterController::class,'signupstore'])->name('frontend.signup.store');

Route::group(['prefix'=>'customer','middleware'=>'auth'],function (){
    Route::get('/logout',[RegisterController::class,'logout'])->name('customer.logout');
});

Route::get('/category/product/{cat_id}',[IndexController::class,'CategoriesProduct'])->name('category.frontend.product');

//user account details
Route::get('/my-account',[UserAccountDetailsController::class,'accountDetails'])->name('account.details');
Route::get('/wishlist',[UserAccountDetailsController::class,'wishlist'])->name('wishlist');



 