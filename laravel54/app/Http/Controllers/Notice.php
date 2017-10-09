<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Notice extends Controller
{

    //接值
    public $data;

    public function __construct(Request $request)
    {
        $this->data = $request->input();
    }

    //用户预订处理
    public function noticeuser_add()
    {
        //获取用户信息
        $users = isset($_COOKIE['users'])?$_COOKIE['users']:false;
        if(!$users)
        { $users_id = 3 ; }
        else
        {
            die('Notice/noticeuser_add请继续调试');
        }
        $reg = DB::insert("insert into live_noticeuser (notice_id_d,notice_user_id) VALUES (?,?)",[$this->data['notice_id_d'],$users_id]);
        if($reg)
        {
            die('预订成功');
        }
    }


}











/**
 * NoticeController.php
 *
 * ...
 *
 * 2017 Copyright (c) http://note.hanfu8.top
 *
 * 修改历史
 * ----------------------------------------
 * 2017/10/9, 作者: 降省心(QQ:1348550820), 操作:创建
 **/