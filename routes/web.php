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

Route::get('/', 'IndexController@index');
Route::get('/solmaforo', 'IndexController@solma');
Route::get('/info', 'IndexController@info');
Route::get('/galeria', 'IndexController@galeria');
Route::get('/docs', 'IndexController@docs');
Route::get('/database', 'IndexController@database');
Route::get('/nosotros', 'IndexController@nosotros');
