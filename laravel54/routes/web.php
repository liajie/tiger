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

/*Route::get('/', function () {
    return view('welcome');
});*/





//首页路由
Route::get('/', 'Index@index');
Route::get('index/index', 'Index@index');

//视频列表
Route::get('live/live_list', 'Live@live_list');
//成为主播
Route::get('live/live_add', 'Live@live_add');
//主播注册
Route::get('live/live_sign', 'Live@live_sign');
//直播列表
Route::get('live/live_list', 'Live@live_list');