<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome');
Route::view('/thankYou','confirmation')->name('thanks_for_shoping');
Route::view('/dashboard','user_dashboard')->name('user_dashboard');
Route::view('/cart','cart')->name('cart');
Route::view('/blog','blog')->name('blog');
Route::view('/addresses','addresses')->name('addresses');
Route::view('/order','orders')->name('order');
Route::view('/shop','shop')->name('shop');
Route::view('/checkout','checkout')->name('checkout');
Route::view('/about-us','about')->name('about_us');
Route::view('/profile','profile')->name('user_profile');
Route::view('/contact-us','contact_us')->name('contact_us');
Route::view('/faq','faq')->name('faq');
Route::view('/privacy','privacy')->name('privacy');


/*
 * Admin routes
 */
Route::view('/admin/dashboard','admin.dashboard ')->name('admin.dashboard');
Route::get('/admin/products',App\Http\Livewire\Admin\Product::class)->name('admin.products');
Route::view('/admin/category','admin.categories')->name('admin.category');
Route::get('/admin/orders',App\Http\Livewire\Admin\Orders::class)->name('admin.orders');
Route::get('/admin/contactMessages',App\Http\Livewire\Admin\ContactedMessages::class)->name('admin.messages');
Route::get('/admin/clients',App\Http\Livewire\Admin\Clients::class)->name('admin.clients');


Route::get('/contact/developer',function (){
    return "contact developer";
})->name('contact_developer');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
