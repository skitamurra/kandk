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

Route::get('/', 'HomeController@home');

Route::get('/outline', 'HomeController@outline')->name('outline');

Route::get('/contact', 'ContactController@index')->name('contact.index');

Route::put('/contact', 'ContactController@send');

Route::put('/contact/confirm', 'ContactController@confirm')->name('contact.confirm');

Route::put('/contact/thanks', 'ContactController@send')->name('contact.send');

Route::get('/governance', 'HomeController@governance');

Route::get('/access', 'HomeController@access');
