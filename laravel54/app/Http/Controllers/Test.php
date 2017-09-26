<?php


namespace App\Http\Controllers;


class Test extends Controller
{
    public function utf()
    {
        return view('test/index');
    }

    public function data()
    {

        $str = '{"status":1000,"result":{"ad":{"id":2125,"promotionType":4,"title":"S7\u5168\u7403\u603b
\u51b3\u8d5b","content":"","picUrl":"http:\/\/livewebbs2.msstatic.com\/huya_1506408249_content.jpg","link"
:"http:\/\/www.huya.com\/s7","linkText":"","link2":"http:\/\/www.huya.com\/s7","linkText2":"","clickCheckCode"
:"","viewCheckCode":"","showArea":5,"startTime":0,"endTime":0,"startDate":1506355200,"endDate":1509811199
,"startDailyTime":0,"endDailyTime":0,"createTime":1506408249},"hot":[{"host":"lol","name":"\u82f1\u96c4
\u8054\u76df","isHot":0},{"host":"wzry","name":"\u738b\u8005\u8363\u8000","isHot":0},{"host":"xingxiu"
,"name":"\u661f\u79c0","isHot":0},{"host":100032,"name":"\u4e3b\u673a\u6e38\u620f","isHot":0},{"host"
:"2836","name":"\u6237\u5916","isHot":0},{"host":"cf","name":"\u7a7f\u8d8a\u706b\u7ebf","isHot":0},{"host"
:"2793","name":"\u7edd\u5730\u6c42\u751f","isHot":0},{"host":"MC","name":"\u6211\u7684\u4e16\u754c","isHot"
:0},{"host":"dnf","name":"\u5730\u4e0b\u57ce\u4e0e\u52c7\u58eb","isHot":0}],"user":[{"host":"2683","name"
:"\u8ff7\u4f60\u4e16\u754c","isHot":0},{"host":"overwatch","name":"\u5b88\u671b\u5148\u950b","isHot"
:0},{"host":"qiuqiu","name":"\u7403\u7403\u5927\u4f5c\u6218","isHot":0},{"host":"2839","name":"\u6606
\u7279\u724c","isHot":0},{"host":"ttkp","name":"\u5929\u5929\u9177\u8dd1","isHot":0},{"host":"2350","name"
:"\u5192\u9669\u5c9b2","isHot":0},{"host":"2168","name":"\u989c\u503c","isHot":0},{"host":"2752","name"
:"\u7f8e\u98df","isHot":0},{"host":"2633","name":"\u4e8c\u6b21\u5143","isHot":0}]}}';
        $data= json_decode($str);
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