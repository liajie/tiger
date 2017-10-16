/**
 * Created by 降省新 on 2017/10/16.
 */
window.onload = function () {
    var ws = new WebSocket("ws://127.0.0.1:1234");

    document.getElementById("msg_send_bt_D").onclick = function () {
        var msg = document.getElementById("pub_msg_input").value;
        ws.send(msg);
        document.getElementById("pub_msg_input").value = '';
    };

    ws.onopen = function () {
        console.log("连接成功");
//            ws.send('raid');
    };
    ws.onmessage = function (e) {
        var obj = eval('(' + e.data + ')');
        console.log(obj)
        var data = '';
        var userID = '游客';
        switch (obj.newsType) {
            case 'online':
                data = obj.data;
                break;
            case 'offLine':
                data = obj.data;
                break;
            case 'news':
                data = obj.data;
                userID += obj.userId;
        }
        var data = '<li data-id="7" class="J_msg"><div class="msg-normal"><span class="msg-hd"><span class="labels"></span><span class="name-wrap"><span title="点击查看个人信息" class="name J_userMenu">' + userID + '</span> : </span></span><span class="text-content">' + data + '</span></div></li>';
        document.getElementById("chat-room__list").innerHTML += data;
    };


};