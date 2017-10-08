<?php


namespace frontend\controllers;


class ChannelController extends CommonController
{

    //查询直播频道    作废
    /*public function actionChannel_find()
    {
        $reg = (new \yii\db\Query())
            ->select(['channel_name','channel_id','channel_images','username','class_name','channel_start'])
            ->from('live_channel')
            ->where(['like','channel_name',$this->data['channel_name']])
            ->all();
        if($reg)
        {
            $this->return = ['error'=>'200','msg'=>$reg];
        }else
        {
            $this->return = ['error'=>'101','msg'=>'无数据'];
        }
    }*/

    //删除频道状态
    public function actionChannel_del()
    {
        $reg = \Yii::$app->db->createCommand()
            ->delete('live_channel',"channel_id={$this->data['channel_id']}")
            ->execute();
        if($reg)
        {
            $this->return = ['error'=>'200','msg'=>'删除成功'];
        }else
        {
            $this->return = ['error'=>'101','msg'=>'删除失败'];
        }
    }

    //修改频道状态
    public function actionChannel_start()
    {
        switch ($this->data['channel_start'])
        {
            case 0;
                $start = 1;
                $start_d = '正常';
            break;
            case 1;
                $start = 2;
                $start_d = '锁定';
            break;
            case 2;
                $start = 1;
                $start_d = '正常';
            break;
        }
        $reg = \Yii::$app->db->createCommand()
            ->update('live_channel',['channel_start'=>$start],['channel_id'=>$this->data['channel_id']])
            ->execute();
        if($reg)
        {
            $this->return = ['error'=>'200','msg'=>['msg'=>$start_d,'start'=>$start]];
        }else
        {
            $this->return = ['error'=>'101','msg'=>'修改失败'];
        }
    }
}











/**
 * ChannelController.php
 *
 * ...
 *
 * 2017 Copyright (c) http://note.hanfu8.top
 *
 * 修改历史
 * ----------------------------------------
 * 2017/10/1, 作者: 降省心(QQ:1348550820), 操作:创建
 **/