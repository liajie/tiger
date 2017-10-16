<?php


namespace App\Http\Controllers;

use Illuminate\Alioss\Oss;
use Illuminate\Dysms\api_demo\SmsDemo;
use Illuminate\Http\Request;
use Illuminate\Mongodb\M;
use Illuminate\Support\Facades\DB;

class Login extends Controller
{

    //阿里云OSS授权
    public function Response()
    {
        $oss = new Oss();
        echo $oss->Response();
    }

    //阿里文件上传页
    public function upload()
    {
        return view('login/upload');
    }

    //阿里文件上传成功记录日志
    public function ossLog(Request $request)
    {
        $data = $request->input();
        unset($data['r']);
        $data['u_id'] = $_COOKIE['u_id'];
        $data['fileTime'] = date('Y-m-d H:i:s',time());
        $M = new M('file_log');
        $reg = $M->insert($data);
        if($reg['ok'])
        {
            echo json_encode(['error'=>'200','msg'=>'上传日志生成']);
        }else
        {
            echo json_encode(['error'=>'404']);
        }
    }

    //找回密码
    public function loginpassword_forget(Request $request)
    {
        $data = $request->input();
        $Reg = DB::select("select u_id,username,tel,password from user where username=? limit 1",[$data['username']]);
        if($Reg)
        {
            $Reg = array_pop($Reg);
            //引入阿里短信
            $SmsDemo = new SmsDemo();
            $response = $SmsDemo->sendSms(
                "降省心", // 短信签名
                "SMS_103885015", // 短信模板编号
                $Reg->tel, // 短信接收者
                Array(  // 短信模板中字段的值
                    "code"=>$Reg->password,
                    "product"=>"dsd"
                ),
                "111"
            );
            if($response->Message=='OK')
            {
                $Sms_Log = [
                    'phoneNumbers'=>$Reg->tel,
                    'User_Id'=>$Reg->u_id,
                    'UserName'=>$Reg->username,
                    'RequestId'=>$response->RequestId,
                    'BizId'=>$response->BizId,
                    'Message'=>$response->Message,
                    'Code'=>$response->Code,
                    'Send_Time'=>date('Y-m-d H:i:s',time())
                ];
            }else
            {
                $Sms_Log = [
                    'phoneNumbers'=>$Reg->tel,
                    'User_Id'=>$Reg->u_id,
                    'UserName'=>$Reg->username,
                    'Event'=>'短信发送失败',
                    'Send_Time'=>date('Y-m-d H:i:s',time())
                ];
            }
            $M = new M('user_log');
            $M->insert($Sms_Log);
            echo json_encode(['error'=>'200','msg'=>'密码已发送至手机']);
        }
    }

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
        $users = DB::select('select * from user where password= :pwd and username = :username or tel= :tel limit 1', ['pwd'=>$data['pwd'],'username'=>$data['username'],'tel'=>$data['username']]);
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
             $data['jin'] =  $user->jin;
             $data['yin'] =  $user->yin;
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
