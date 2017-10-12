/**
 * Created by 降省新 on 2017/10/12.
 */


var btn = document.getElementById('fileImg');//事件触发按钮
var token = document.getElementById("token");
var prs = document.getElementById("upload");//文件进度

btn.onclick = function(){
    myUpload({
        url: '/?r=file/user_img',//上传路径
        maxSize: 10,//上传文件最大(M)
        multiple: true,
        beforeSend: function(file){
            //bf.innerText = "开始上传...";
        },
        callback: function(res){//上传成功回调参数
            res = JSON.parse(res);
            if(res && res.code == '0'){
                alert("头像更换成功！");
                //bf.innerText = "上传成功!"
            }else{
                alert(res.msg);
            }
            /*var fileWrap  = document.getElementById('fileWrap');*/

            /*for(var i=0; i<res.data.length; i++){
                var p = document.createElement('p');
                var file = document.createElement('a');
                file.href = '//front-js.cc/test/fileupload/' + res.data[i].StoredIn;
                file.target = "_blank"
                file.innerText = "文件名：" + res.data[i].StoredIn;
                p.appendChild(file);
                fileWrap.appendChild(p);
            }*/
        },
        uploading: function(pre){
            prs.innerText = "当前上传进度为：" + pre + "%";
        }
    });
}

function myUpload(option){
    var fd = new FormData(),
        xhr = new XMLHttpRequest(),
        input;
    input = document.createElement('input');
    input.setAttribute('id', 'myUploadInput');
    input.setAttribute('type', 'file');
    input.setAttribute('name', 'file');
    if(option.multiple){
        input.setAttribute('multiple', true);
    }
    document.body.appendChild(input);
    input.style.display = 'none';
    input.click();
    var fileType = ['doc','docx','xls','xlsx','pdf','jpg','png','ppt','pptx'];
    input.onchange = function(){
        if(!input.value){return;}
        console.log(input.value)
        var type = input.value.split('.').pop();
        if(fileType.indexOf(type.toLocaleLowerCase()) == -1){
            alert("暂不支持该类型的文件，请重新选择!");
            return;
        }
        for(var i=0, file; file=input.files[i++];){
            if(option.maxSize &&  file.size > option.maxSize * 1024 * 1024){
                alert('请上传小于'+option.maxSize+'M的文件');
                return;
            }
        }
        if(option.beforeSend instanceof Function){
            if(option.beforeSend(input) === false){
                return false;
            }
        }
        for(var i=0, file; file=input.files[i++];){
            console.log(fd)
            fd.append('file'+i, file);
        }
        fd.append('_token',token.value);
        xhr.open('post', option.url);
        xhr.onreadystatechange = function(){
            if(xhr.status == 200){
                if(xhr.readyState == 4){
                    if(option.callback instanceof Function){
                        option.callback(xhr.responseText);
                    }
                }
            }else{
                alert("上传失败！");
            }
        }
        xhr.upload.onprogress = function(event){
            var pre = Math.floor(100 * event.loaded / event.total);
            if(option.uploading instanceof Function){
                option.uploading(pre);
            }
        }
        xhr.send(fd);
    }
}
