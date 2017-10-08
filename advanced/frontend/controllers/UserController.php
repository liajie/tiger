<?php


namespace frontend\controllers;


class UserController extends CommonController
{
    //用户列表获取
    public function actionUser_list()
    {
        if(isset($this->data['pa']))
        {
            //计算偏移量
            $offset = 6*($this->data['pa']-1);
            $reg = (new \yii\db\Query())->select(['u_id','username','user_addTime','nickname','mynum','sex','user_start'])
                ->from('user')
                ->limit(6)
                ->offset($offset)
                ->all();
            //查询总共多少页数据
            $sum = (new \yii\db\Query())->select(['u_id'])->from('user')->count();
            if($reg)
            {
                foreach ($reg as &$v)
                {
                    $v['sex'] = $v['sex']=='1'?'男':'女';
                    $v['user_addTime'] = date('Y-m-d H:i:s',$v['user_addTime']);
                    $v['user_start'] = $v['user_start']==1?'正常':'锁定';
                }
                $this->return = ['error'=>'200','msg'=>$reg,'sum'=>ceil($sum/6)];
            }else
            {
                $this->return = ['error'=>'101','msg'=>'没有数据'];
            }
        }else
        {
            $this->return = ['error'=>'101','msg'=>'参数有误'];
        }
    }

    //用户锁定
    public function actionUser_start()
    {
        $user_start = $this->data['user_start'];
        $reg = \Yii::$app->db->createCommand()
            ->update('user',['user_start'=>$user_start=='正常'?2:1],['u_id'=>$this->data['u_id']])
            ->execute();
        if($reg)
        {
            $user_start_str = $user_start=='正常'?'锁定':'正常';
            $this->return = ['error'=>'200','msg'=>$user_start_str];
        }else
        {
            $this->return = ['error'=>'101','msg'=>'修改失败'];
        }
    }

}











/**
 * UserController.php
 *
 * ...
 *
 * 2017 Copyright (c) http://note.hanfu8.top
 *
 * 修改历史
 * ----------------------------------------
 * 2017/10/3, 作者: 降省心(QQ:1348550820), 操作:创建
 **/