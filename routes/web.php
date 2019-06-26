<?php
use App\Http\Controllers\AdminController;

// Website
Route::get('/', 'PageController@index')->name('home');

// Authentication
Auth::routes();

// User account
Route::prefix('user')->group(function () {
    Route::get('/', 'UserController@index')->name('user');
});

// Admin
Route::prefix('admin')->group(function () {

    // Dashboard
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('/prod', 'ProductController@index')->name('products');

    // Users
    Route::prefix('users')->group(function () {
        Route::get('/create', 'Admin\UserController@show')->name('users.create');
        Route::post('/', 'Admin\UserController@store')->name('users.store');
        Route::delete('/{user}', 'AdminController@destroy')->name('users.destroy');
        Route::get('/{user}/edit', 'Admin\UserController@edit')->name('users.edit');
        Route::post('/{user}', 'Admin\UserController@update')->name('users.update');
    });
    Route::prefix('products')->group(function () {
        Route::get('/', 'ProductController@index')->name('products.index');
        Route::get('/create', 'ProductController@create')->name('products.create');
        Route::post('/', 'ProductController@store')->name('products.store');
        Route::delete('/{product}', 'ProductController@destroy')->name('products.destroy');
        Route::get('/{product}/edit', 'ProductController@edit')->name('products.edit');
        Route::post('/{product}', 'ProductController@update')->name('products.update');
    });

});

// Route::middleware(['auth'])->prefix('admin')->name('admin')->group(function(){
//     Route::ressources('admin', 'AdminController@index');
// });
