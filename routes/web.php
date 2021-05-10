<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
// 	return view('welcome');
// });

Route::get('/', 'FrontController@index')->name('home');
Route::get('/home', 'FrontController@index')->name('home');
Route::get('/contact-us', 'ContactController@contact')->name('contact');
Route::post('/contactus', 'ContactController@contactSubmit')->name('contact.submit');
Route::get('/logout', 'HomeController@logout');

// Route::group(['prefix' => 'admin'], function () {
// 	Route::get('login', 'AdminControllers\AuthController@initContent');
// });

// Auth::routes();
// Route::prefix('admin')->middleware('auth:web')->group(function () {
Route::group(['prefix' => 'admin'], function () {
	Route::get('/login', 'AdminControllers\AuthController@initContent');

	Route::get('/', 'HomeController@index')->name('home');
	Route::get('/dashboard', 'HomeController@index')->name('home');

	Route::get('/logout', 'HomeController@logout');

	Route::resource('products', 'ProductController');
	// Route::resource('project', 'ProjectController');
	Route::resource('category', 'CategoryController');
	Route::resource('projects', 'ProjectController');
	Route::resource('banner', 'BannerController');
	Route::resource('about', 'AboutController');
	Route::resource('service', 'ServiceController');
	Route::resource('general', 'GeneralController');
});
