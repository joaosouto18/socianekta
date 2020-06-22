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

//Route::get('/', function () {
//    return view('usuario-list');
//});


Route::get('/', 'MainController@index')->name('usuario-list');

Route::get('/create', 'MainController@create')->name('novo_usuario');

Route::post('/store', 'MainController@store');


Route::get('/edit/{id}','MainController@edit');


Route::post('/usuario/{id}', 'MainController@update');


Route::get('/deletar/{id}', 'MainController@destroy');
