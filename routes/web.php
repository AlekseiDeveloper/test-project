<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::prefix('/article')->group(function () {
    Route::get('/{id}','Site\Article\ArticleController@show')->name('show-article');

});

Route::group([
    "prefix" => "/cabinet",
    "namespace" => "Cabinet",
    "as" => "cabinet.",
    "middleware" => ["auth"]
],function () {
    Route::resource('articles', 'Article\ArticleResourceController')->except([
        'destroy'
    ]);
});

Route::group([
    "prefix" => "/admin",
    "namespace" => "Admin",
    "as" => "admin.",
    "middleware" => ["auth" =>"can:admin.panel"]
],function () {

    Route::resource('articles', 'ArticleResourceController');
});


Auth::routes();
Route::get('/','Site\MainController@index')->name('main');