<?php


namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class News extends Controller
{
    //接值
    public $data;

    public function __construct(Request $request)
    {
        $this->data = $request->input();
    }

    //获取新闻列表
    public function news_list($num = 20)
    {
        $pa = isset($this->data['pa'])?$this->data['pa']:1;
        $newsClass_id = isset($this->data['newsClass_id'])?$this->data['newsClass_id']:1;
        //计算偏移量
        $offset = $pa*($pa-1);
        //列表
        $reg = DB::select("select news_id,news_name,newsClass_name,newsClass_id from live_news left join live_newsclass on live_news.news_classId=live_newsclass.newsClass_id limit {$offset},{$num}");
        //分类
        $class = DB::select("select * from live_newsclass");
        /*print_r($reg);
        print_r($this->data);*/
        return view('news/news_list',['reg'=>$reg,'class'=>$class]);
    }

}











/**
 * News.php
 *
 * ...
 *
 * 2017 Copyright (c) http://note.hanfu8.top
 *
 * 修改历史
 * ----------------------------------------
 * 2017/10/8, 作者: 降省心(QQ:1348550820), 操作:创建
 **/