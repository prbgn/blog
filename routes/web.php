<?php

Auth::routes();

Route::middleware('auth')->namespace('Admin')->prefix('/admin')->group(function(){
    Route::get('/categories', 'CategoriesController@index')
        ->name('admin.categories');

    Route::post('/category/add', 'CategoriesController@store')
        ->name('admin.category.store');

    Route::delete('/category/delete/{category}', 'CategoriesController@delete')
        ->name('admin.category.delete');

    Route::get('/article/compose/{article?}', 'ArticlesController@compose')
        ->name('admin.articles.compose');

    Route::post('/article/store', 'ArticlesController@store')
        ->name('admin.articles.store');

    Route::delete('/article/delete/{article}', 'ArticlesController@delete')
        ->name('admin.articles.delete');
});

Route::get('/', 'HomeController@index')->name('home');

Route::get('/{category}/{slug}', 'HomeController@article')
    ->name('article');
Route::get('/{slug}', 'HomeController@category')
    ->name('category');

