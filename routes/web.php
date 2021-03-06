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

// CORS
header('Access-Control-Allow-Origin: http://localhost:8000');
header('Access-Control-Allow-Credentials: true');

Auth::routes();

//Front end
Route::get('/', 'HomeController@index')->name('home');
Route::get('article/{slug}', 'ArticlesController@getSingle')->name('single');
Route::get('articles', 'ArticlesController@getIndex')->name('articles.index');
Route::get('page/{slug}', 'PageController@getPage')->name('page');
Route::get('category/{id}', 'CategoriesController@getSingle')->name('category');
Route::get('search/{s?}', 'SearchesController@getIndex')->where('s', '[\w\d]+');
Route::get('services', 'ServicesController@getIndex')->name('services.front');
Route::get('service/{slug}', 'ServicesController@getSingle')->name('service.single');
Route::get('shop', 'ProductsController@getIndex')->name('shop');
Route::get('shop/{slug}', 'ProductsController@getSingle');
Route::get('shopsearch/{s?}', 'SearchesController@searchProducts')->where('s', '[\w\d]+');
Route::get('shopcategory/{category_id}', 'ProductsController@getCategory');
Route::get('shopfilter', 'ProductsController@getFilter');

Route::get('/contact', 'ContactController@show')->name('contact');
Route::post('/contact',  'ContactController@mailToAdmin');
Route::get('/profile', 'usersController@getProfile')->name('profile');
Route::put('/profile/update', 'usersController@updateProfile')->name('profile.update');

//API
Route::group(['prefix' => 'api'], function() {
    Route::post('login', 'API\UserController@login');
    Route::post('register', 'API\UserController@register');
    Route::get('/user', 'API\UserController@getUser');

    Route::resource('services','API\ServicesController', ['only' => [
       'index', 'show'
    ]]);
    Route::resource('posts','API\PostsController', ['only' => [
       'index', 'show'
    ]]);
    Route::get('post/{slug}', 'API\PostsController@getSingle');
    Route::post('auth', 'API\UserController@checkAuth');
});

Route::group(['middleware' => 'auth:api', 'prefix' => 'api'], function(){
	Route::post('details', 'API\UserController@details');
});

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
  Route::resource('/admin/pages', 'PageController');
  Route::resource('/admin/categories', 'CategoriesController');
  Route::resource('/admin/tags', 'TagsController');
  Route::resource('comments', 'CommentsController');
  Route::post('comments/{comment}/approve', 'CommentsController@approveComment')->name('comment.approve');
  Route::post('comments/{comment}/unapprove', 'CommentsController@unapproveComment')->name('comment.unapprove');
  Route::resource('/admin/services', 'ServicesController');
  Route::resource('/admin/sliders', 'SliderController');
  Route::resource('/admin/users', 'UsersController');
  Route::resource('/admin/admins', 'AdminController');
  Route::resource('/admin/products', 'ProductsController');
  Route::resource('/admin/categoriesshop', 'CategoriesShopController');
});
