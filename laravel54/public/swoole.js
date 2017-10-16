/**
 * Created by 降省新 on 2017/10/16.
 */
    //与服务器建立通信
var socket = new WebSocket('ws://101.200.32.183:9501');
//连接状态
//console.log(socket.readyState);


document.getElementById("msg_send_bt_D").onclick = function () {
    var msg = document.getElementById("pub_msg_input").value;
    socket.send(msg);
    document.getElementById("pub_msg_input").value = '';
};

//接收数据
socket.onmessage = function (e) {
    var obj = eval('(' + e.data + ')');
    var data = obj.data;
    var userID = '游客'+obj.userId;
    var data = '<li data-id="7" class="J_msg"><div class="msg-normal"><span class="msg-hd"><span class="labels"></span><span class="name-wrap"><span title="点击查看个人信息" class="name J_userMenu">' + userID + '</span> : </span></span><span class="text-content">' + data + '</span></div></li>';
    document.getElementById("chat-room__list").innerHTML += data;
}

