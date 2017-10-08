<?php

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
class ProfileController extends Controller
{
	public $http;//域名调用
	public $return;//返回值
	public $data;
	//判断是否是post请求注：只允许post 传值：
	public function init(){
		$this->data = Yii::$app->request->get();
		if(empty($this->data['profile']) or empty($this->data['callback'])or empty($this->data['_'])) {
			$this->return=['error'=>'404','msg'=>'页面不存在'];
			echo $this->return['error'],$this->return['msg'];die;
		}
		
	}
	

	public function __destruct(){
		if ($this->return['error']!=404) {
			echo $this->data['callback'].'('.json_encode($this->return).')';
		}
	}
	public function actionProfile()
	{
		
		 $db = (new \yii\db\Query())
                ->select(['u_id','username','u_img','sign','sex','birthday','home','mynum','nickname','tel'])
                ->from('user')
                ->one();
				$this->return=['error'=>'1','u_id'=>$db['u_id'],'username'=>$db['username'],'u_img'=>$db['u_img'],'sign'=>$db['sign'],'sex'=>$db['sex'],'birthday'=>$db['birthday'],'home'=>$db['home'],'mynum'=>$db['mynum'],'nickname'=>$db['nickname'],'tel'=>$db['tel']];
				               
	}
}





?>
