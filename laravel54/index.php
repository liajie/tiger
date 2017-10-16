<?php

header("content-type:text/html;charset=utf-8");

/*
 * 创建一个WebSocket服务器
 * */
new WebSocket();

class WebSocket
{
    #已建立连接的用户
    public static $connect_fd;

    public function __construct()
    {
        $server = new swoole_websocket_server('0.0.0.0',9501);
        #当WebSocket客户端与服务器建立连接并完成握手后会回调此函数
        #$req 是一个Http请求对象，包含了客户端发来的握手请求信息
        $server->on('open',function ($server,$request){
            $this->server = $server;
            echo "服务器:与客户端握手成功,fd:{$request->fd}\n";
            #加入已连接用户组
            self::$connect_fd[$request->fd] = $request->fd;
        });
        #调用回复方法
        $this->message($server);
        #调用客户端断开连接事件
        $this->close($server);
        #启动
        $server->start();
    }

    #回复客户端消息
    public function message($server)
    {
        #客户端消息
        $server->on('message',function ($server,$frame){

            echo "收到{$frame->fd}:{$frame->data},指令:{$frame->opcode},目的:{$frame->finish}\n";
            #向客户端发送消息
            foreach (self::$connect_fd as $k=>$v)
            {
                $server->push($v,"{$frame->fd}说:{$frame->data}");
            }
        });
    }

    #客户端断开连接
    public function close($server)
    {
        $server->on('close',function($ser,$fd) {
            unset(self::$connect_fd[$fd]);
            echo "客户端:{$fd}下线\n";
        });
    }
}



/**
 * index.php
 *
 * ...
 *
 * Copyright (c)2017 http://note.hanfu8.top
 *
 * 修改历史
 * ----------------------------------------
 * 2017/6/25, 作者: 降省心(QQ:1348550820), 操作:创建
 **/
