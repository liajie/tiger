<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class File extends Controller
{

    public $user;
    public $name;
    public $enableCsrfValidation = false; //关闭原有的表单验证类

    //用户头像上传
    public function user_img()
    {
        $user = unserialize($_COOKIE['users']);
        $this->name('file1');
        $this->tmp('images/');
        $reg = DB::update('update user set u_img=? where u_id=?', ['/images/'.$this->user,$user['u_id']]);
        if($reg)
        {
            echo json_encode(['code'=>'0','msg'=>'ok','data'=>[['StoredIn'=>'ok']]]);
        }
    }

    #文件名字
    public function name($name){
        $this->name=$name;
        #定义一个字符串
        $str="1234ABCDEfmhnk";
        #将文件名变为数组
        $us=explode('.',$_FILES[$name]['name']);
        $this->user=time().str_shuffle($str).'.'.$us[count($us)-1];
        return $this->user;
    }
    #文件类型
    public function type(){
        $name=$this->name;
        $arr=array('image/jpg','image/jpeg','image/png','image/gif');
        if(in_array($_FILES[$name]['type'],$arr)){
            return 1;
        }else{
            return 0;die;
        }
    }
    #文件大小
    public function size(){
        $name=$this->name;
        $siz=2097152;
        if($_FILES[$name]['size']<$siz){
            return 1;
        }else{
            return 0;die;
        }
    }
    #保存文件
    public function tmp($list = false){
        $name=$this->name;
        if(!$list)
        {
            #创建目录
            $list=date('Y/m/d/');
            #$m=date('m');
            #$d=date('d');
            #目录路径
            #$list="$y/$m/$d/";
            if(!is_dir($list)){
                mkdir($list,0,true);
            }
        }
        //保存路径
        if(move_uploaded_file($_FILES[$name]['tmp_name'],$list.$this->user)){
            return $list.$this->user;
        }
    }
}











/**
 * File.php
 *
 * ...
 *
 * 2017 Copyright (c) http://note.hanfu8.top
 *
 * 修改历史
 * ----------------------------------------
 * 2017/10/12, 作者: 降省心(QQ:1348550820), 操作:创建
 **/