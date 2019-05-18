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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/index', 'Site\RegistroController@index2')->name('index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/registro', 'site\RegistroController@index')->name('registro');

Route::get('/logout', 'site\RegistroController@logout')->name('sair');
