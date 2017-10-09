<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class Index extends Controller
{
    //首页
    public function index()
    {
        $news_list = $this->news_list(6);
        //$game_classify = DB::select();
        return view('index/index',['news_list'=>$news_list]);
    }

    //获取新闻列表
    public function news_list($num = 20)
    {
        return DB::select("select news_id,news_name,newsClass_name,newsClass_id,new_tmp,new_addTime from live_news left join live_newsclass on live_news.news_classId=live_newsclass.newsClass_id order by news_id desc limit 0,6");
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