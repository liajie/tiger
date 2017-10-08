<?php


namespace App\Http\Controllers;


class Index extends Controller
{
    //首页
    public function index()
    {
        //$game_classify = DB::select();
        return view('index/index');
    }



    //header头部
    public function header()
    {
        return view('index/header');
    }


}











/**
 * Index.php
 *
 * ...
 *
 * Copyright (c)2017 http://note.hanfu8.top
 *
 * 修改历史
 * ----------------------------------------
 * 2017/9/25, 作者: 降省心(QQ:1348550820), 操作:创建
 **/