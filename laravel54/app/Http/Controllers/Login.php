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
        $users = DB::select('select u_id,nickname from user where password= :pwd and username = :username or tel= :tel ', ['pwd'=>$data['pwd'],'username'=>$data['username'],'tel'=>$data['username']]);
        foreach ($users as $user) {
             $success =  $user->u_id;
             $nickname = $user->nickname;
        }
        if (!empty($success)) 
        {
            if (!empty($nickname)) {
                setcookie('nickname',$nickname,time()+3600*7,'/');
                setcookie('u_id',$success,time()+3600*7,'/');
            }
            else
            {
                setcookie('nickname',$data['username'],time()+3600*7,'/');
            }
            
            $arr['error']=1;
        }else
        {
            $arr['error']=0;
        }
        echo $arr['error'];

    }
}
