<?php


namespace frontend\controllers;


class IndexController extends CommonController
{
    //首页获取系统参数
    public function actionIndex()
    {
        $date = strtotime(date('Y-m-d',time()));
        //获取新闻总条数
        $msg['news_count'] = (new \yii\db\Query())->select(['news_id'])->from('live_news')->count();
        $msg['news_news'] = (new \yii\db\Query())->select(['*'])->where("new_addTime>$date")->from('live_news')->count();
        $this->return = ['error'=>'200','msg'=>$msg];
    }
}











/**
 * IndexController.php
 *
 * ...
 *
 * Copyright (c)2017 http://note.hanfu8.top
 *
 * 修改历史
 * ----------------------------------------
 * 2017/9/28, 作者: 降省心(QQ:1348550820), 操作:创建
 **/