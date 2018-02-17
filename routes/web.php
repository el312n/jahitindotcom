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
Route::get('/google873127db5330cb48.html', 'Umum\SimpleauthController@testgoogle');

Route::get('/', [
   'as' => 'index', 'uses' => 'Umum\HomeController@index'
]);

Route::get('auth/resend', 'Umum\SimpleauthController@getResend');

//UMUM
Route::get('password/reset/{token}', array(
  'uses' => 'Umum\PasswordController@reset',
  'as' => 'password.reset'
));
Route::post('/password/reset', 'Umum\PasswordController@postReset');

Route::get('/redirectFB', 'Umum\SocialAuthController@redirectFB');
Route::get('/callbackFB', 'Umum\SocialAuthController@callbackFB');
Route::get('/redirectGO', 'Umum\SocialAuthController@redirectGO');
Route::get('/callbackGO', 'Umum\SocialAuthController@callbackGO');

Route::get('/password/email', 'Umum\PasswordController@getEmail');
Route::post('/password/email', 'Umum\PasswordController@postEmail');

Route::get('/transaksi', [
  'as' => 'transaksi', 'uses' => 'Umum\HomeController@transaksi'
]);
Route::get('/transaksiSukses', [
  'as' => 'transaksiSukses', 'uses' => 'Umum\HomeController@transaksiSukses'
]);
//transaksiSukses

Route::get('/order', [
	'as' => 'order', 'uses' => 'Umum\OrderModel@order'
]);

Route::get('/register', [
   'as' => 'register', 'uses' => 'Umum\SimpleauthController@register'
]);
 
Route::post('/register', [
  'as' => 'post-registration', 'uses' =>   'Umum\SimpleauthController@doRegister'
]);

Route::get('/registerpenjahit', [
   'as' => 'registerpenjahit', 'uses' => 'Umum\SimpleauthController@registerpenjahit'
]);
 
Route::post('/registerpenjahit', [
  'as' => 'post-registrationpenjahit', 'uses' =>   'Umum\SimpleauthController@doRegisterPenjahit'
]);

Route::post('/login', [
	'as' => 'login', 'uses' => 'Umum\SimpleauthController@doLogin'
]);

Route::get('/login/{id}', [
	'as' => 'login-order', 'uses' => 'Umum\SimpleauthController@loginorder'
]);

Route::get('/login', [
	'as' => 'get-login', 'uses' => 'Umum\SimpleauthController@login'
]);

Route::get('/logout', [
	'as' => 'logout', 'uses' => 'Umum\SimpleauthController@logout'
]);

Route::get('/confrimation/{email}/{code}', [
	'as' => 'confirmaccount', 'uses' => 'Umum\SimpleauthController@confirmaccount'
]);

//ADMIN
Route::get('/controlweb', [
   'as' => 'admin', 'uses' => 'Admin\AdminController@index'
]);
Route::get('/controlweb/listPenjahit', [
   'as' => 'listPenjahit', 'uses' => 'Admin\AdminController@listPenjahit'
]);
Route::get('/controlweb/Ukuran', [
   'as' => 'Ukuran', 'uses' => 'Admin\AdminController@Ukuran'
]);

Route::post('/controlweb/Ukuran', [
   'as' => 'post-Ukuran', 'uses' => 'Admin\AdminController@doUkuran'
]);

Route::get('/controlweb/kategoriModel', [
  'as' => 'kategoriModel', 'uses' => 'Admin\AdminController@kategoriModel'
]);

Route::post('/controlweb/kategoriModel', [
   'as' => 'post-kategoriModel', 'uses' => 'Admin\AdminController@dokategoriModel'
]);