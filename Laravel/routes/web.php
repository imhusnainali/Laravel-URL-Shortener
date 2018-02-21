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

// [*] = Route is linked to a view

// [*] home
Route::get('/', 'HomeController@getHome')->name('home');

// [*] auth.register
Route::get('/auth/register', 'AuthController@getRegister')->name('auth.register');
Route::post('/auth/register', 'AuthController@postRegister');
// [*] auth.email.verification
Route::get('/auth/email/verification/{email}/{token}', 'AuthController@getEmailVerification')->name('auth.email.verification');
Route::post('/auth/email/verification/{email}/{token}', 'AuthController@postEmailVerification');
// [*] auth.login
Route::get('/auth/login', 'AuthController@getLogin')->name('auth.login');
Route::post('/auth/login', 'AuthController@postLogin');
// auth.logout
Route::get('/auth/logout', 'AuthController@getLogout')->name('auth.logout');
Route::post('/auth/logout', 'AuthController@postLogout');
// [*] auth.password.forgot
Route::get('/auth/password/forgot', 'AuthController@getForgotPassword')->name('auth.password.forgot');
Route::post('/auth/password/forgot', 'AuthController@postForgotPassword');
// [*] auth.password.reset
Route::get('/auth/password/reset/{email}/{token}', 'AuthController@getResetPassword')->name('auth.password.reset');
Route::post('/auth/password/reset/{email}/{token}', 'AuthController@postResetPassword');

// shorten.url
Route::get('/shorten/url', 'ShortenUrlController@getShortenUrl')->name('shorten.url');
Route::post('/shorten/url', 'ShortenUrlController@postShortenUrl');

// redirect
Route::get('/{token}', 'RedirectController@getRedirect')->name('redirect');

// [*] account
Route::get('/account', 'AccountController@getAccount')->name('account');
// [*] account.email
Route::get('/account/email', 'AccountController@getEmail')->name('account.email');
Route::post('/account/email', 'AccountController@postEmail');
// [*] account.password
Route::get('/account/password', 'AccountController@getPassword')->name('account.password');
Route::post('/account/password', 'AccountController@postPassword');
