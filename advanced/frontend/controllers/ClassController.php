<?php


namespace frontend\controllers;


class ClassController extends CommonController
{
    //直播分类添加
    public function actionClass_live_add()
    {
        if(isset($this->data['class_name']) && isset($this->data['class_parent']))
        {
            $reg = \Yii::$app->db->createCommand()
                ->insert('live_class',['class_name'=>$this->data['class_name'],'class_parent'=>array_pop($this->data['class_parent']),'class_addTime'=>time()])
                ->execute();
            if($reg)
            {
                $this->return = ['error'=>'200','msg'=>'添加成功'];
            }else
            {
                $this->return = ['error'=>'101','msg'=>'添加失败'];
            }
        }else
        {
            $this->return = ['error'=>'101','msg'=>'参数有误'];
        }
    }
}











/**
 * ClassController.php
 *
 * ...
 *
 * 2017 Copyright (c) http://note.hanfu8.top
 *
 * 修改历史
 * ----------------------------------------
 * 2017/10/4, 作者: 降省心(QQ:1348550820), 操作:创建
 **/