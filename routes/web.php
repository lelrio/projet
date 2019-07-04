<?php
use App\Http\Controllers\AdminController;

// Website
Route::get('/', 'PageController@index')->name('home');

// Authentication
Auth::routes();

// User account
Route::prefix('user')->group(function () {
    Route::get('/', 'UserController@show')->name('user');
});

Route::get('account', 'Admin\UserController@account')->name('account');

Route::get('shop', 'ShopController@index')->name('shop');
// Admin
Route::prefix('admin')->group(function () {

    // Dashboard
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('/prod', 'ProductController@index')->name('products');
    
    //Panier
    Route::get('/cart', 'CartController@index')->name('cart.index');
    Route::get('/cart/pushProduct/{slug}/{quantity}', 'CartController@pushProduct')->name('cart.pushProduct');
    Route::post('/cart/updateProduct/{slug}', 'CartController@updateProduct')->name('cart.updateProduct');
    
    Route::get('/order', 'OrderController@index')->name('order.index');
    Route::post('/order', 'OrderController@create')->name('order.create');
    Route::get('/order/{hash}', 'OrderController@show')->name('order.show');

    // Users
    Route::prefix('users')->group(function () {
        Route::get('/create', 'Admin\UserController@show')->name('users.create');
        Route::post('/', 'Admin\UserController@store')->name('users.store');
        Route::delete('/{user}', 'AdminController@destroy')->name('users.destroy');
        Route::get('/{user}/edit', 'Admin\UserController@edit')->name('users.edit');
        Route::post('/{user}', 'Admin\UserController@update')->name('users.update');
    });
    // Products
    Route::prefix('products')->group(function () {
        Route::get('/', 'ProductController@index')->name('products.index');
        Route::get('/products/{slug}', 'ProductController@showProduct')->name('product.showProductPage');
        Route::get('/create', 'ProductController@create')->name('products.create');
        Route::post('/', 'ProductController@store')->name('products.store');
        Route::get('/{product}', 'ProductController@destroy')->name('products.destroy');
        Route::get('/{product}/edit', 'ProductController@edit')->name('products.edit');
        Route::post('/{product}', 'ProductController@update')->name('products.update');
    });
    

});