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

Route::redirect('/', 'articles.index')->middleware('admin.auth');

Route::group(['prefix' => 'admin'], function () {
    Route::get('login', 'AdminController@loginView')->name('login');
    Route::post('login', 'AdminController@login');

    Route::group(['middleware' => ['admin.auth']], function () {
        Route::get('logout', 'AdminController@logout');
        Route::get('articles', 'AdminController@index')->name('admin.articles');
        Route::get('articles/{article}/delete', 'ArticlesController@destroy');
        Route::resource('articles', 'ArticlesController')->only(['show', 'create' , 'store', 'edit', 'update']);
    });
});
