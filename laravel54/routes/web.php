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

$ROUTES = isset($_GET['r'])?$_GET['r']:false;
if($ROUTES)
{
    $ROUTES = explode('/',$ROUTES);
    Route::get('/',ucfirst($ROUTES[0]).'@'.$ROUTES[1]);
}else
{

    //首页路由
    Route::get('/', 'Index@index');
    Route::get('index/index', 'Index@index');
    //header头部
    Route::get('index/header', 'Index@header');

    //视频列表
    Route::get('live/live_list', 'Live@live_list');
    //成为主播
    Route::get('live/live_add', 'Live@live_add');
    //主播注册
    Route::get('live/live_sign', 'Live@live_sign');
    //直播列表
    Route::get('live/live_list', 'Live@live_list');

}
