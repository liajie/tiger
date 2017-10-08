<?php


namespace frontend\controllers;


use yii\db\Query;

class NewController extends CommonController
{

    //新闻详情页
    public function actionNews_details()
    {
        return $this->renderPartial('news_details');
    }

    //获取新闻列表
    public function actionNew_list()
    {
        $pa = isset($this->data['pa'])?$this->data['pa']:1;
        //计算偏移量
        $offset = 10*($pa-1);
        $reg = (new Query())
            ->select(['newsClass_name','news_id','news_name','new_addTime','new_tmp','new_start'])
            ->limit(10)
            ->offset($offset)
            ->from('live_news')
            ->leftJoin('live_newsclass','live_news.news_classId=live_newsclass.newsClass_id')
            ->orderBy(['new_addTime'=>'desc'])
            ->all();
        if($reg)
        {
            foreach ($reg as &$v)
            {
                $v['new_addTime'] = date('Y-m-d H:i:s',$v['new_addTime']);
                $v['start'] = $v['new_start']==1?'正常':'锁定';
            }
            $this->return = ['error'=>'200','msg'=>$reg];
        }else
        {
            $this->return = ['error'=>'101','msg'=>'没有数据'];
        }
    }

    //修改新闻分类
    public function actionClass_upd()
    {
        $reg = \Yii::$app->db->createCommand()
            ->update('live_newsclass',['newsClass_name'=>$this->data['newsClass_name']],['newsClass_id'=>$this->data['newsClass_id']])
            ->execute();
        if($reg)
        {
            $this->return = ['error'=>'200','msg'=>'修改成功'];
        }else
        {
            $this->return = ['error'=>'101','msg'=>'修改失败'];
        }
    }

    //删除新闻分类
    public function actionClass_del()
    {
        $reg = \Yii::$app->db->createCommand()
            ->delete('live_newsclass',['newsClass_id'=>$this->data['newsClass_id']])
            ->execute();
        if($reg)
        {
            $this->return = ['error'=>'200','msg'=>'删除成功'];
        }else
        {
            $this->return = ['error'=>'101','msg'=>'删除失败'];
        }
    }

    //添加添加
    public function actionNew_add()
    {
        if(isset($this->data['news_text']))
        {
            $file_tmp = 'public/news/'.date('y/m/d',time()).'/';
            $file_name = date('H_i_s',time()).str_shuffle('JiangShengXin').'.html';
            if(!file_exists($file_tmp))
            {
                mkdir($file_tmp,0777,true);
            }
            file_put_contents($file_tmp.$file_name,$this->data['news_text']);
            $reg = \Yii::$app->db->createCommand()
                ->insert('live_news',[
                    'news_name'=>$this->data['news_name'],
                    'news_classId'=>$this->data['news_classId'],
                    'new_tmp'=>$file_tmp.$file_name,
                    'new_addTime'=>time()])
                ->execute();
            if($reg)
            {
                $this->return = ['error'=>'200','msg'=>'添加成功'];
            }else
            {
                unlink($file_tmp.$file_name);
                $this->return = ['error'=>'101','msg'=>'添加失败'];
            }
        }else
        {
            $this->return = ['error'=>'101','msg'=>'参数有误'];
        }
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