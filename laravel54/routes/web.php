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
//file_put_contents('file.txt',json_encode($_FILES));

$ROUTES= isset($_GET['r' ])?$_GET['r' ]:false;
if($ROUTES)
{
	$ROUTES = explode('/',$ROUTES);
	if(IS_POST)
	{
        Route::post('/',ucfirst($ROUTES[0]).'@'.$ROUTES[1]);
	}else
	{
        Route::get('/',ucfirst($ROUTES[0]).'@'.$ROUTES[1]);
	}

}else{

    /*
     * 其它路由
     * Route::any('/login','Login@login')->name('login');
     * Route::match(['get','post'],'Login/login','Login@login');
     * */

	//首页路由
	Route::get('/', 'Index@index');
	Route::get('index/index', 'Index@index');

	//视频列表
	Route::get('live/live_list', 'Live@live_list');

	//登录验证页面
	Route::get('login/disanfang','Login@disanfang');
	//登录页面
	Route::post('login/login','Login@login');
	//退出登录页面
	Route::get('login/loginout','Login@loginout');
	//注册功能
	Route::post('login/add','Login@add');
	//获取用户详细信息
	Route::get('User/getuser','User@getuser');
	//ajax修改
	Route::get('User/nickname','User@nickname');
	//主播信息
	Route::get('User/profileinfo','User@ProfileInfo');

}







