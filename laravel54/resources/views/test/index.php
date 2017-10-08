<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="/js/jquery-1.7.2.min.js"></script>
</head>
<body>
<textarea id="text" style="width: 80%; height: 30%"></textarea>
<input type="button" id="click" value="转换">
<textarea id="add" style="width: 80%; height: 30%"></textarea>
</body>
<script>
    $('#click').click(function () {

        var str = '' +
            '\u82f1\u96c4\u8054\u76df' +
            '';
        $('#add').html(str);
    })
</script>
</html>