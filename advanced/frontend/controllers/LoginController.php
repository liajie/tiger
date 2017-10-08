<?php


namespace frontend\controllers;


use yii\web\Controller;

class LoginController extends Controller
{
    public $data;
    public $return;

    //构造方法
    public function __construct($id,$module,$config = [])
    {
        parent::__construct($id, $module, $config);
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

    //用户登录
    public function actionLogin()
    {
        if(isset($this->data['username'])&&isset($this->data['password']))
        {
            $db = (new \yii\db\Query())
                ->select(['u_id','username','password','u_img'])
                ->from('user')
                ->where(['username'=>$this->data['username']])
                ->one();
            if($db)
            {
                if($db['password']==$this->data['password'])
                {
                    $this->session_set('user',$db);
                    $this->return = ['error'=>'200','msg'=>'ok'];
                }else
                {
                    $this->return = ['error'=>'002','msg'=>'密码错误'];
                }
            }else
            {
                $this->return = ['error'=>'001','msg'=>'用户名不存在'];
            }
        }else
        {
            $this->return = ['error'=>'404','msg'=>'参数错误'];
        }
    }

    //用户退出
    public function actionLogin_out()
    {
        $this->session_del('user');
        $this->return = ['error'=>'200','msg'=>'退出成功'];
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
 * LoginController.php
 *
 * ...
 *
 * Copyright (c)2017 http://note.hanfu8.top
 *
 * 修改历史
 * ----------------------------------------
 * 2017/9/28, 作者: 降省心(QQ:1348550820), 操作:创建
 **/