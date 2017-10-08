<?php


namespace frontend\controllers;


class LiveController extends CommonController
{
    //删除频道分类
    public function actionLive_class_del()
    {
        $reg = \Yii::$app->db->createCommand()->delete('live_class',['class_id'=>$this->data['class_id']])->execute();
        if($reg)
        {
            $this->return = ['error'=>'200','msg'=>'删除成功'];
        }else
        {
            $this->return = ['error'=>'104','msg'=>'删除失败'];
        }
    }

    //修改频道分类
    public function actionLive_class_upd()
    {
        $reg = \Yii::$app->db
            ->createCommand()
            ->update('live_class',['class_name'=>$this->data['class_name']],['class_id'=>$this->data['class_id']])
            ->execute();
        if($reg)
        {
            $this->return = ['error'=>'200','msg'=>'修改成功'];
        }else
        {
            $this->return = ['error'=>'104','msg'=>'修改失败'];
        }
    }
}











/**
 * LiveController.php
 *
 * ...
 *
 * 2017 Copyright (c) http://note.hanfu8.top
 *
 * 修改历史
 * ----------------------------------------
 * 2017/10/1, 作者: 降省心(QQ:1348550820), 操作:创建
 **/