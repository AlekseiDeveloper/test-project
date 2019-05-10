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

Route::prefix('article')->group(function () {

    //Route::get('profile', 'UserController@show')->middleware('auth');


});

Route::get('/','ArticleController@index')->name('main');

Route::match(['get', 'post'], '/add-article','IndexController@add')->name('add_article');

Route::match(['get', 'post'], '/create-article/{id}','IndexController@create')->name('create_article');

Route::match(['get', 'post'], '/update-article/{id}','IndexController@update')->name('update_article');

Route::delete('/delete-article/{id}', 'IndexController@delete')->name('delete_article');


/*Route::get('/', function () {
    return view('index');
});*/

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
