<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\welcomeController::class,'welcome'] );
Route::get('/category/{id}',[\App\Http\Controllers\welcomeController::class,'show_category_products'])->name('show_category_products');
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
Route::middleware(['auth','checksuperadmin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::view('dashboard','admin.dashboard ')->name('admin.dashboard');
        Route::get('category',App\Http\Livewire\admin\Category::class)->name('admin.category');
        Route::get('products',App\Http\Livewire\Admin\Product::class)->name('admin.products');
        // Route::get('/admin/orders',App\Http\Livewire\Admin\Orders::class)->name('admin.orders');
        // Route::get('/admin/contactMessages',App\Http\Livewire\Admin\ContactedMessages::class)->name('admin.messages');
        // Route::get('/admin/clients',App\Http\Livewire\Admin\Clients::class)->name('admin.clients');
    });
});


Route::get('/contact/developer',function (){
    return "contact developer";
})->name('contact_developer');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
