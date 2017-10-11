<?php


namespace frontend\controllers;



use yii\db\Query;

class UserController extends CommonController
{

    //读取用户注册信息
    public function actionUser_echarts()
    {
        if(!empty($this->data['home']))
        {
            $time = empty(trim($this->data['user_addTime']))?date('Y-m-d H:i:s',time()):$this->data['user_addTime'];
            $date = strtotime(date('Y-m-d',strtotime($time)));
            $small = $date+3600*24*7;
            $where = "home like '%{$this->data['home']}%' and user_addTime<{$small} and user_addTime>{$date}";
            $select = ['u_id','user_addTime'];
            $data = (new Query())->select($select)
                ->where($where)
                ->from('user')
                ->all();
            $reg = [];
            for ($i=0;$i<7;$i++)
            {
                $date_key = date('d',$date+3600*24*$i);
                $reg[$date_key]['num'] = 0;
                $reg[$date_key]['home'] = date('Y-m-d',$date+3600*24*$i);;
            }
            foreach ($data as $k=>$v)
            {
                $key = date('d',$v['user_addTime']);
                $reg[$key]['num'] = isset($reg[$key]['num'])?$reg[$key]['num']+1:0;
                $reg[$key]['home'] = date('Y-m-d',$v['user_addTime']);
            }
        }else
        {
            $select = ["count(u_id) as num,home"];
            $reg = (new Query())->select($select)
                ->groupBy('home')
                ->from('user')
                ->all();
        }
        if($reg)
        {
            $this->return = ['error'=>'200','msg'=>$reg];
        }else
        {
            $this->return = ['error'=>'101','msg'=>'null'];
        }
    }

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