<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

class Live extends Controller
{

    //直播列表
    public function live_list()
    {
        return view('live/live_list');
    }


    //成为主播
    public function live_add()
    {
        return view('live/live_add');
    }

    //主播注册申请页
    public function live_sign()
    {
        $live_class = DB::select('select class_id,class_name from live_class where class_parent > :id',['id'=>0]);
        return view('live/live_sign',['live_class'=>$live_class]);
    }
    //主播注册信息获取
    public function ProfileAuth(Request $request)
    {
        $data = $request->input();
    }

    //主播注册页完毕跳转页
    public function live_sign_d()
    {
        return view('live/live_sign_d');
    }
}











/**
 * live.php
 *
 * ...
 *
 * Copyright (c)2017 http://note.hanfu8.top
 *
 * 修改历史
 * ----------------------------------------
 * 2017/9/25, 作者: 降省心(QQ:1348550820), 操作:创建
 **/