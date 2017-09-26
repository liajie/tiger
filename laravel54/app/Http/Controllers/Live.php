<?php


namespace App\Http\Controllers;


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

    //主播注册页
    public function live_sign()
    {
        return view('live/live_sign');
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