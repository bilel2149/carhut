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
Route::get('category/{id}', 'CategoriesController@getSingle')->name('category');
Route::get('search/{s?}', 'SearchesController@getIndex')->where('s', '[\w\d]+');
Route::get('services', 'ServicesController@getIndex')->name('services.front');
Route::get('service/{slug}', 'ServicesController@getSingle')->name('service.single');

Route::get('/contact', 'ContactController@show')->name('contact');
Route::post('/contact',  'ContactController@mailToAdmin');
Route::get('/profile', 'usersController@getProfile')->name('profile');
Route::put('/profile/update', 'usersController@updateProfile')->name('profile.update');

//Login Admin
Route::prefix('admin')->group(function() {
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
  // Password reset routes
  Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});
//Back End
Route::group(['middleware' => ['auth:admin']], function () {
  Route::get('/admin', 'AdminController@index')->name('admin');
  Route::get('/admin/settings', 'SettingController@index')->name('settings');
  Route::put('/admin/settings', 'SettingController@update')->name('settings.update');
  Route::resource('/admin/posts', 'PostController');
  Route::resource('/admin/categories', 'CategoriesController');
  Route::resource('comments', 'CommentsController');
  Route::post('comments/{comment}/approve', 'CommentsController@approveComment')->name('comment.approve');
  Route::post('comments/{comment}/unapprove', 'CommentsController@unapproveComment')->name('comment.unapprove');
  Route::resource('/admin/services', 'ServicesController');
  Route::resource('/admin/sliders', 'SliderController');
  Route::resource('/admin/users', 'UsersController');
});
