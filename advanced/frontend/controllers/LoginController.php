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
        // TODO: Implement __destruct() method.
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
                ->select(['u_id','username','password'])
                ->from('user')
                ->where(['username'=>$this->data['username']])
                ->one();
            if($db)
            {
                if($db['password']==$this->data['password'])
                {
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