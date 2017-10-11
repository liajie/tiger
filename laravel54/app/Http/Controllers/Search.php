<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Search extends Controller
{
    //接值
    public $data;
    public function __construct(Request $request)
    {
        $this->data = $request->input();
    }

    //直播频道查询
    public function search_find()
    {
        $reg = DB::select("select channel_id,channel_images,channel_name,username,sign from live_channel left join user on live_channel.user_id=user.u_id where channel_name like '%{$this->data['name']}%'");
        $live_list = json_decode(json_encode($reg),true);

        $data = ['live_list'=>$live_list,'name'=>$this->data['name']];
        return view('search/search',$data);
    }

}











/**
 * Search.php
 *
 * ...
 *
 * 2017 Copyright (c) http://note.hanfu8.top
 *
 * 修改历史
 * ----------------------------------------
 * 2017/10/11, 作者: 降省心(QQ:1348550820), 操作:创建
 **/