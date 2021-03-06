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
//トップページを標示
Route::get('/','App\Http\Controllers\SiteController@showIndex')->name('index');

//商品詳細を表示する
Route::get('/detail/{id}', 'App\Http\Controllers\SiteController@showDetail')->name('detail');

//新商品一覧画面を表示
Route::get('/new', 'App\Http\Controllers\SiteController@showNewproducts')->name('new');

//ウェア一覧画面を表示
Route::get('/wear', 'App\Http\Controllers\SiteController@showWear')->name('wear');

//シューズ一覧画面を表示
Route::get('/shoes', 'App\Http\Controllers\SiteController@showShoes')->name('shoes');

//ザック一覧画面を表示
Route::get('/backpack', 'App\Http\Controllers\SiteController@showBackpacks')->name('bag');

//その他商品一覧画面を表示
Route::get('/tent', 'App\Http\Controllers\SiteController@showVariousItems')->name('tent');

//カート画面を表示する
Route::get('/confirm/{id}', 'App\Http\Controllers\SiteController@showConfirm')->name('confirm');

//セッションを解除する
Route::get('/sessionout', 'App\Http\Controllers\SiteController@sessionOut')->name('sessionOut');

//カートの注文数に変化があった場合の処理
Route::post('/orderNumChange', 'App\Http\Controllers\SiteController@orderNumChange')->name('change');

//検索機能の実装
Route::get('/search', 'App\Http\Controllers\SiteController@search')->name('search');

//カート画面を表示する
Route::view('/cart','yamadogu.confirm')->name('cart');

//管理者画面に遷移する
Route::view('/Admin/admin','yamadogu.Admin.admin')->name('admin');

//商品アップロード画面に遷移する
Route::get('/Admin/create','App\Http\Controllers\AdminController@showCreate')->name('create');

Route::get('/Admin/admin','App\Http\Controllers\AdminController@index');

Route::match(['GET','POST'],'/Admin/admin','App\Http\Controllers\AdminController@create');

Route::match(['GET','POST'],'/Admin/test','App\Http\Controllers\AdminController@test');