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
  
  // ユーザー情報画面
  // 差出人管理画面
  Route::get('/from', 'FromController@index')->name('from');
  Route::post('/from/create', 'FromController@create');
  // 宛先人管理画面
  Route::get('/destination', 'DestinationController@index')->name('destination');
  Route::post('/destination/create', 'DestinationController@create');
  // 送付履歴管理画面

  // 都道府県
  Route::get('/prefecture/json', 'PrefectureController@json');
  // 市町村
  Route::get('/city/json/{id}', 'CityController@json');
});