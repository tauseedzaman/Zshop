<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\welcomeController::class,'welcome'] );
Route::get('/search/{item}',[\App\Http\Controllers\welcomeController::class,'show_searched_items'])->name('show_searched_items');
Route::get('/category/{id}',[\App\Http\Controllers\welcomeController::class,'show_searched_item_by_category'])->name('show_searched_item_by_category');
Route::get('/product/{name}',[\App\Http\Controllers\welcomeController::class,'show_searched_item_by_name'])->name('show_searched_item_by_name');
Route::get('/show_product/{id}',[\App\Http\Controllers\welcomeController::class,'show_single_product'])->name('single_product');

Route::view('/thankYou','confirmation')->name('thanks_for_shoping');
Route::view('/addresses','addresses')->name('addresses');
Route::view('/order','orders')->name('order');
Route::view('/shop','shop')->name('shop');
Route::view('/checkout','checkout')->name('checkout');
Route::view('/about-us','about')->name('about_us');
Route::view('/contact-us','contact_us')->name('contact_us');
Route::view('/privacy','privacy')->name('privacy');

Route::get('/faq',[\App\Http\Controllers\welcomeController::class,'faq'])->name('faq');

Route::get('searchItem', function()
{
    return view('search',[
        'products' => $products,
        'searchItem' => $item
    ]);
});

/*
* Admin routes
*/
Route::middleware(['auth','checksuperadmin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::view('dashboard','admin.dashboard ')->name('admin.dashboard');
        Route::get('manage-category',App\Http\Livewire\admin\Category::class)->name('admin.category');
        Route::get('manage-products',App\Http\Livewire\Admin\Product::class)->name('admin.products');
        Route::get('manage-orders',App\Http\Livewire\Admin\Orders::class)->name('admin.orders');
        Route::get('manage-FAQ',App\Http\Livewire\Admin\faq::class)->name('admin.faq');
        Route::get('manage-customers',App\Http\Livewire\Admin\users::class)->name('admin.users');
        Route::get('show-customer/{id}',[App\Http\Controllers\adminHelperController::class,'showSingleCustomer'])->name('admin.user_details');
        // Route::get('/admin/contactMessages',App\Http\Livewire\Admin\ContactedMessages::class)->name('admin.messages');
        Route::get('manage-about-us-page',[App\Http\Controllers\adminHelperController::class,'manage_aboutUs_page'])->name('admin.aboutUs');
        Route::post('manage-about-us-page',[App\Http\Controllers\adminHelperController::class,'store'])->name('admin.aboutUs');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::get('/like/{id}',[\App\Http\Controllers\productLikeController::class,'like'])->name('like-product');
    Route::get('/add_to_cart/{id}',[\App\Http\Controllers\cartController::class,'store'])->name('add_product_to_cart');
    Route::view('/MyProfile','profile')->name('user_profile');
    Route::view('/MyCart','cart')->name('cart');
});




Route::get('/contact/developer',function (){
    return "contact developer";
})->name('contact_developer');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
