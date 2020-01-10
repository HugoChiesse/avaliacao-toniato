<?php

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/home', 'Admin\HomeController@index')->name('home');

    Route::prefix('admin')->group(function () {
        Route::prefix('client')->group(function () {
            Route::get('/', 'Admin\ClientController@index')->name('client');
            Route::get('autocomplete', 'Admin\ClientController@autocomplete')->name('client.autocomplete');
            Route::get('create', 'Admin\ClientController@create')->name('client.create');
            Route::post('store', 'Admin\ClientController@store')->name('client.store');
            Route::get('edit/{id}', 'Admin\ClientController@edit')->name('client.edit');
            Route::put('update/{id}', 'Admin\ClientController@update')->name('client.update');
            Route::get('destroy/{id}', 'Admin\ClientController@destroy')->name('client.destroy');
        });

        Route::prefix('product')->group(function () {
            Route::get('/', 'Admin\ProductController@index')->name('product');
            Route::get('autocomplete', 'Admin\ProductController@autocomplete')->name('product.autocomplete');
            Route::get('create', 'Admin\ProductController@create')->name('product.create');
            Route::post('store', 'Admin\ProductController@store')->name('product.store');
            Route::get('edit/{id}', 'Admin\ProductController@edit')->name('product.edit');
            Route::put('update/{id}', 'Admin\ProductController@update')->name('product.update');
            Route::get('destroy/{id}', 'Admin\ProductController@destroy')->name('product.destroy');
        });

        Route::prefix('rent')->group(function () {
            Route::get('/', 'Admin\RentController@index')->name('rent');
            Route::get('create', 'Admin\RentController@create')->name('rent.create');
            Route::post('store', 'Admin\RentController@store')->name('rent.store');
            Route::get('edit/{id}', 'Admin\RentController@edit')->name('rent.edit');
            Route::put('update/{id}', 'Admin\RentController@update')->name('rent.update');
            Route::get('destroy/{id}', 'Admin\RentController@destroy')->name('rent.destroy');
        });
    });
});
