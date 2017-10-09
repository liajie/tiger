<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class User extends Controller
{

	public function __construct(){
		if (empty($_COOKIE['nickname'])) 
		{
			echo "<script>alert('请先登录');location.href='/'</script>";
		}
	}
	public function getuser()
	{
		$u_id = $_COOKIE['u_id'];
		  $users = DB::select('select * from user where u_id= :u_id ', ['u_id'=>$_COOKIE['u_id']]);
		  $data =array();
		  foreach ($users as $user) {
             $data['u_id'] =  $user->u_id;
             $data['username'] =  $user->username;
             $data['nickname'] =  $user->nickname;
             $data['u_img'] =  $user->u_img;
             $data['sign'] =  $user->sign;
             $data['sex'] =  $user->sex;
             $data['birthday'] =  $user->birthday;
             $data['home'] =  $user->home;
             $data['mynum'] =  $user->mynum;
             $data['tel'] =  $user->tel;
             $data['user_addTime'] =  date("Y-m-d H:i:s",$user->user_addTime);
        }
        $money = DB::select('select * from money where u_id= :u_id ', ['u_id'=>$data['u_id']]);
        $arr = array();
        foreach ($money as $mon) {
        	$arr['jin']=$mon->a_money;
        	$arr['yin']=$mon->b_money;
        }
		  // echo "<pre>";
		  // print_r($arr);die;
		  // 

		 return view('user/user_list',['users'=>$data,'money'=>$arr]);
	}

	public function nickname(){
		$nickname = $_GET['nickname'];
		$u_id = $_COOKIE['u_id'];
		$res = DB::update('update user set nickname = "'.$nickname.'" where u_id = ?', [$u_id]);
		$arr = array();
		if ($res) 
		{
			$arr['erro']=1;
			setcookie('nickname',$nickname,time()+3600*7,'/');
		}else
		{
			$arr['erro']=0;
		}
		echo json_encode($arr);

	}

	public function profileinfo(){
		return view('user/profileinfo');
	}

}



?>