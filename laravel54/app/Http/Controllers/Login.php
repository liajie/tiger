<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class Login extends Controller
{
    public function disanfang()
    {
    	
        include '/disanfang/openqq.class.php';
		$open = new openqq();
		$code = $_GET['code'];
		$data = $open->me($code);
        setcookie('nickname',$data['name'],time()+3600*7,'/');
        echo "<script>location.href='/'</script>";

    }
//退出登录
    public function loginout()
    {
        setcookie("nickname","",time()-3600,"/");
        setcookie("users","",time()-3600,"/");
        echo "<script>location.href='/'</script>";
    }
//注册功能
    public function add()
    {
        $data = $_POST;
        //print_r($data);die;
       $res =  DB::insert('insert into user (username, tel ,password) values (?, ?, ?)', [$data['zhuce_user'], $data['zhuce_tel'],$data['zhuce_pwd']]);
       if ($res) 
       {
           echo 1;
       }
       else
       {
        echo 0;
       }
    }


    public function login()
    {
        $data = $_POST;
        $users = DB::select('select * from user where password= :pwd and username = :username or tel= :tel ', ['pwd'=>$data['pwd'],'username'=>$data['username'],'tel'=>$data['username']]);
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
        foreach ($money as $mon) {
            $data['jin']=$mon->a_money;
            $data['yin']=$mon->b_money;
        }

        if (!empty($data['u_id'])) 
        {
            $lize_user =serialize($data);       
            if (!empty($data['nickname'])) {
                setcookie('nickname',$data['nickname'],time()+3600*7,'/');
                setcookie('u_id',$data['u_id'],time()+3600*7,'/');
                setcookie('users',$lize_user,time()+3600*7,'/');
            }
            else
            {
                setcookie('nickname',$data['username'],time()+3600*7,'/');
            }
            
            $data['error']=1;
        }else
        {
            $data['error']=0;
        }
      echo json_encode($data);

    }
}
