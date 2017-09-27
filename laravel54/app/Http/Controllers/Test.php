<?php


namespace App\Http\Controllers;


class Test extends Controller
{

    //去除原有样式
    public $layout = false;
    //关闭原有的表单验证类
    public $enableCsrfValidation = false;

    public function utf()
    {
        return view('test/index');
    }

    public function data()
    {

        $data = '';
        echo '<pre>';
        var_dump($data);die;
    }
}











/**
 * Test.php
 *
 * ...
 *
 * Copyright (c)2017 http://note.hanfu8.top
 *
 * 修改历史
 * ----------------------------------------
 * 2017/9/26, 作者: 降省心(QQ:1348550820), 操作:创建
 **/