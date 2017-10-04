<?php


namespace frontend\controllers;


use yii\db\Query;

class NewController extends CommonController
{
    //添加添加
    public function actionNew_add()
    {
        $this->return = $this->data;
    }

    //获取新闻分类
    public function actionClass_find()
    {
        $reg = (new Query())->select(['*'])->from('live_newsclass')->all();
        if($reg)
        {
            $this->return = ['error'=>'200','msg'=>$reg];
        }else
        {
            $this->return = ['error'=>'101','msg'=>'没有分类/获取失败'];
        }
    }
}











/**
 * NewController.php
 *
 * ...
 *
 * 2017 Copyright (c) http://note.hanfu8.top
 *
 * 修改历史
 * ----------------------------------------
 * 2017/10/4, 作者: 降省心(QQ:1348550820), 操作:创建
 **/