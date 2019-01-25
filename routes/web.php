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


Route::resource('/index', 'AccueilController');

Route::view('/politique-de-confidentialités', 'front.politique-de-confidentialite');
Route::view('/conditions-générales', 'front.cgv-cgu');
Route::view('/mentions-légales', 'front.mentions-legales');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
