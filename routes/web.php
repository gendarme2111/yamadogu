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

Route::get('/detail', function () {
    return view('yamadogu.detail');
});

Route::get('/confirm', function () {
    return view('yamadogu.confirm');
});

//新商品一覧画面を表示
Route::get('/new', 'App\Http\Controllers\SiteController@showNewproducts')->name('new');
