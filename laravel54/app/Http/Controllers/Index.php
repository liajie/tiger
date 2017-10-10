<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class Index extends Controller
{
    //首页
    public function index()
    {
        $news_list = $this->news_list(6);
        //预订列表
        $notice_list = $this->notice_list();
        $data = isset($_COOKIE['users'])?$_COOKIE['users']:false;
        if($data)
        {
            $user = unserialize($data);
            $notice_s = DB::select('select notice_id_d from live_noticeuser where notice_user_id=?',[$user['u_id']]);
            $notice_id_d = [];
            foreach ($notice_s as $v)
            {
                $notice_id_d[] = $v->notice_id_d;
            }
        }else
        {
            $user = false;
            $notice_s = [];
        }
        //$game_classify = DB::select();
        return view('index/index',['news_list'=>$news_list,'notice_list'=>$notice_list,'user'=>$user,'notice_id_d_s'=>$notice_id_d]);
    }

    //预订列表
    public function notice_list()
    {
        $notice_list = DB::table('live_notice')->orderBy('notice_id','desc')->limit(6)->get();
        return json_decode($notice_list,true);
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