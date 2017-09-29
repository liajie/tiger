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
        $msg['news_news'] = (new \yii\db\Query())->select(['news_id'])->where("new_addTime>$date")->from('live_news')->count();
        //新用户
        $msg['user_new'] = (new \yii\db\Query())->select(['u_id'])->where('user_addTime>'.$date)->from('user')->count();
        $msg['user_count'] = (new \yii\db\Query())->select(['u_id'])->from('user')->count();
        //节目预订数量
        $msg['noticeUser'] = (new \yii\db\Query())->select(['noticeUser_id'])->from('live_noticeuser')->count();
        //直播量统计
        $msg['live_notice'] = (new \yii\db\Query())->select(['notice_id'])->from('live_notice')->count();
        //访客统计
        $msg['log_new'] = (new \yii\db\Query())->select(['log_id'])->where("log_time>$date")->from('log')->count();
        $msg['log_count'] = (new \yii\db\Query())->select(['log_id'])->from('log')->count();
        //统计用户货币
        $money = (new \yii\db\Query())->select(['sum(a_money) as a_money','sum(b_money) as b_money'])->from('money')->one();
        $msg['a_money'] = $money['a_money'];
        $msg['b_money'] = $money['b_money'];
        $this->return = ['error'=>'200','msg'=>$msg];
    }

    //获取用户信息
    public function actionUser_data()
    {

        $this->return['msg'] = $this->session_find('user');
        $this->return['error'] = '200';
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