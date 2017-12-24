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


Auth::routes();

//Front end
Route::get('/', 'HomeController@index')->name('home');
Route::get('article/{slug}', 'ArticlesController@getSingle')->name('single');
Route::get('articles', 'ArticlesController@getIndex')->name('articles.index');
Route::get('search/{s?}', 'SearchesController@getIndex')->where('s', '[\w\d]+');

//Back End
Route::get('/admin', 'AdminController@index');
Route::get('/admin/settings', 'SettingController@index')->name('settings');
Route::put('/admin/settings', 'SettingController@update')->name('settings.update');
Route::resource('/admin/posts', 'PostController');
Route::resource('/admin/categories', 'CategoriesController');
Route::resource('comments', 'CommentsController');
Route::post('comments/{comment}/approve', 'CommentsController@approveComment')->name('comment.approve');
Route::post('comments/{comment}/unapprove', 'CommentsController@unapproveComment')->name('comment.unapprove');
