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

// ログイン画面
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// トップ(はがき作成)画面
Route::get('/', 'TopController@index');
