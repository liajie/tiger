<?php


namespace frontend\controllers;


use yii\db\Query;

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

    //获取频道分类
    public function actionLive_class()
    {
        $class = (new \yii\db\Query())->select(['*'])->from('live_class')->all();
        if($class)
        {
            foreach ($class as &$v)
            {
                $v['class_addTime'] = date('Y-m-d H:i:s',$v['class_addTime']);
            }
            $this->return = ['error'=>'200','msg'=>$class];
        }else
        {
            $this->return = ['error'=>'101','msg'=>'获取频道分类失败'];
        }
    }

    //删除频道分类
    public function actionLive_classDel()
    {
        $ids = explode($this->data['id']);
        var_dump($ids);die;
        $reg = \Yii::$app->db->createCommand()->delete('live_class',"class_id in ($ids)")->execute();
        var_dump($reg);
    }

    //获取频道列表
    public function actionLive_channel()
    {
        $pa = $this->data['pa'];
        $num = $this->data['num'];
        if($pa&&$num)
        {
            //计算偏移量
            $offset = $num*($pa-1);
            $data = (new \yii\db\Query())
                ->select(['channel_name','channel_id','channel_images','username','class_name','channel_start','GROUP_CONCAT(userid) as uids'])
                ->from('live_channel')
                ->where(['like','channel_name',isset($this->data['channel_name'])?$this->data['channel_name']:''])
                ->limit($num)
                ->offset($offset)//偏移量
                ->leftJoin('user','live_channel.user_id=user.u_id')
                ->leftJoin('live_class','live_class.class_id=live_channel.class_id')
                ->leftJoin('live_channeluser','live_channel.channel_id=live_channeluser.chid')
                ->orderBy(['channel_id'=>'desc'])
                ->groupBy('channel_id')
                ->all();
            $sum = (new \yii\db\Query())->select(['channel_id'])->from('live_channel')->count();
            foreach ($data as &$v)
            {
                if($v['uids'])
                {
                    $username = (new Query())->select(['GROUP_CONCAT(username) as username'])->from('user')->where("u_id in ({$v['uids']})")->one();
                    $v['username'] .= '->'.$username['username'];
                }
                switch ($v['channel_start'])
                {
                    case 0;
                        $v['channel_start_name'] = '待审核';
                    break;
                    case 1;
                        $v['channel_start_name'] = '正常';
                    break;
                    case 2;
                        $v['channel_start_name'] = '锁定';
                    break;
                }
            }
            $this->return = ['error'=>'200','msg'=>$data,'sum'=>$sum];
        }else
        {
            $this->return = ['error'=>'104','msg'=>'参数有误'];
        }
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