<?php



Auth::routes();

Route::group(['prefix' => 'dashboard' , 'middleware' => 'auth'], function(){

    Route::get('/','Dashboard\AdminController@firstPage')->name('dashboard.index');
    Route::resource('users','Dashboard\AdminController');
    Route::resource('/products','Dashboard\ItemController');
    Route::resource('/categories','Dashboard\CategoryController');
    Route::resource('/subcategories','Dashboard\Sub_CategoryController');

});


Route::get('/categories/{id}/show','Website\ItemController@index')->name('categories.show');
Route::get('/items/{id}/show','Website\ItemController@show')->name('items.show');
Route::get('/','Website\IndexController@index')->name('index');
Route::get('/contact','Website\IndexController@contact')->name('contact');
Route::get('/about','Website\IndexController@about')->name('about');
Route::get('/categories/{category}','Website\IndexController@product')->name('products');



//Localization Lang changing
Route::get('/locale/{locale}', 'LocaleController@index')->name('lang');







