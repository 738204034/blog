<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title></title>
</head>
<style type="text/css">
    .login{top:200px;left:200px;position:absolute;}
</style>
<body>
<div style="width: 450px;height: 800px;margin: 90px auto">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form method="post" action="/blog/public/store">
    <input type="hidden" id="_token" name="_token" value="<?php echo csrf_token(); ?>">
    <div class='form-group'>
        <label for="">用户名：</label>
        <input type="text" id="name" name="name" class="form-control" placeholder='username'>
    </div>
    <div class='form-group'>
        <label for="">密码：</label>
        <input type="password" id="password" name="password" class="form-control" placeholder='code'>
    </div>
    <div class='from-group'>
        <label>留言:</label>
        <textarea name="textarea" id="textarea" class='form-control'></textarea>
    </div>
    <!-- 下拉框 -->
    <div class='form-group'>
        <label >城市：</label>
        <select name="chengshi" id="chengshi" class='form-control'>
            <option>北京</option>
            <option>福建</option>
            <option>厦门</option>
        </select>
    </div>
    <!-- 一种横排选择框 -->
    {{--<div class='form-group'>--}}
        {{--<label >旅游地点：</label>--}}
        {{--<input type="checkbox" name="quanzhou">泉州--}}
        {{--<input type="checkbox" name="dezhou">德州--}}
        {{--<input type="checkbox" name="guangzhou">广州--}}
    {{--</div>--}}

    <!-- 文件上传框 -->
    <div class='form-group'>
        <label>文件上传框</label>
        <input type="file" id="file" name="file" >
    </div>

    <!-- 按钮 -->
    <div class='form-group'>
        <button type='submit' {{--onclick="submit()"--}} class='btn btn-primary' value='ok'>提交</button>
        <button type='reset' class='btn btn-danger' value='cancel'>取消</button>
    </div>
</form>
    <script>
            function submit() {
                var _token=$('#_token').val();
                var name=$('#name').val();
                var password=$('#password').val();
                var textarea=$('#textarea').val();
                var chengshi=$('#chengshi').val();
                var file=$('#file').val();
                var url='/blog/public/store';
//                console.log(_token,name,password,textarea,chengshi,file);

                $.post(url,{
                    _token:_token,
                    name:name,
                    password:password,
                    textarea:textarea,
                    chengshi:chengshi,
                    file:file
                },function (data) {
                    console.log(data);
                    if(data.result=='ok'){
                        alert('验证成功')
                    }else {
                        alert(data.result)
                    }
                });
            }
    </script>

</div>
</body>
</html>


