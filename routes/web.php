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

//商品詳細を標示する
Route::get('/items/{id}', 'App\Http\Controllers\SiteController@showDetail')->name('detail');

Route::get('/confirm', function () {
    return view('yamadogu.confirm');
});

//新商品一覧画面を表示
Route::get('/new', 'App\Http\Controllers\SiteController@showNewproducts')->name('new');
