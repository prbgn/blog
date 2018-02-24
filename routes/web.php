<?php

Auth::routes();

Route::middleware('auth')->namespace('Admin')->prefix('/admin')->group(function(){
    Route::get('/categories', 'CategoriesController@index')
        ->name('admin.categories');

    Route::post('/category/add', 'CategoriesController@store')
        ->name('admin.category.add');

    Route::delete('/category/delete/{category}', 'CategoriesController@delete')
        ->name('admin.category.delete');

    Route::get('/article/add', 'ArticlesController@compose')
        ->name('admin.articles.compose');

    Route::post('/article/add', 'ArticlesController@store')
        ->name('admin.articles.store');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/{category}/{slug}', 'HomeController@article')
    ->name('article');
Route::get('/{slug}', 'HomeController@category')
    ->name('category');

