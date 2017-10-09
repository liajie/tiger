<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use yii\data\Pagination;
class ConController extends CommonController
{
	public $data;
	//获取贡献榜列表
	public function actionCon_list()
	{
		$this->data = \Yii::$app->request->get();
		 if(isset($this->data['pa']))
        {
        	//计算偏移量
            $offset = 6*($this->data['pa']-1); 
       	//三表联查
        	$posts = Yii::$app->db->createCommand("SELECT con_id,channel_name,con_statu,con_money,username,sex FROM  live_con  INNER JOIN live_channel  on live_con.channel_id = live_channel.channel_id  INNER JOIN user on live_channel.user_id = user.u_id LIMIT $offset,6")
            ->queryAll();
            //查询总共多少页数据
            $sum = Yii::$app->db->createCommand("SELECT con_id,channel_name,con_statu,con_money,username,sex FROM  live_con  INNER JOIN live_channel  on live_con.channel_id = live_channel.channel_id  INNER JOIN user on live_channel.user_id = user.u_id")->query()->rowCount;
            $this->return = ['error'=>'200','msg'=>$posts,'sum'=>ceil($sum/6)];
            //echo $this->data['callback'].'('.json_encode($this->return).')';
            // echo $sum;
            // echo "<pre>";
            // print_r($posts);die;
        }
		
		
       	
	
	}
}