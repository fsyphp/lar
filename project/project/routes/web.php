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
Route::get('admin/index','admin\UserController@index');
Route::get('admin/indexs','admin\USerController@indexs');
Route::get('admin/add','admin\USerController@add');

// 分类管理
Route::resource('admin/cate','admin\CateController');

// 商品管理
Route::resource('admin/goods','admin\GoodsController');