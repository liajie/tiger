<?php


namespace frontend\controllers;


use yii\web\Controller;

class CommonController extends Controller
{
    //参数
    public $data;
    //返回值
    public $return;

    //构造方法
    public function __construct($id,$module,$config = [])
    {
        parent::__construct($id, $module, $config);
        $user = $this->session_find('user');
        if($user)
        {
            echo 123;die;
        }
        $this->data = \Yii::$app->request->get();
    }
    //析构
    public function __destruct()
    {
        if(isset($this->data['callback']))
        {
            echo $this->data['callback'].'('.json_encode($this->return).')';
        }else
        {
            echo '<pre>';
            var_dump($this->return);
        }
    }

    //session设置操作
    public function session_set($key = '',$val = false)
    {
        if(!$val){ return false; }else
        {
            $session = \Yii::$app->session;
            $session->set($key,$val);
            return true;
        }
    }

    //session 查询
    public function session_find($key = false)
    {
        if($key)
        {
            return \Yii::$app->session->get($key);
        }else
        {
            return false;
        }
    }

    //session 销毁
    public function session_del($key = false)
    {
        if($key)
        {
            return \Yii::$app->session->remove($key);
        }else
        {
            return false;
        }
    }

}











/**
 * CommonController.php
 *
 * ...
 *
 * Copyright (c)2017 http://note.hanfu8.top
 *
 * 修改历史
 * ----------------------------------------
 * 2017/9/28, 作者: 降省心(QQ:1348550820), 操作:创建
 **/