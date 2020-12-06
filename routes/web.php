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

// ユーザー認証画面
Route::get('/register' , 'UserController@register');
Route::post('/register', 'UserController@signup');
Route::get('/login'    , 'UserController@login')->name('login');
Route::post('/login'   , 'UserController@signin');
Route::get('/logout'   , 'UserController@logout')->name('logout');

// デフォルトログイン処理停止
// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

// ルートの保護
Route::middleware('auth')->group(function(){
  // トップ(はがき作成)画面
  Route::get('/', 'TopController@index');
  
  // マイページ画面
  Route::get('/mypage', 'MypageController@index');
});