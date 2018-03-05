@extends('layouts.app')

@section('content')
    <link rel="stylesheet" type="text/css" href="./jqueryliaotian/chat.css" />
    <script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
    <script src="./jqueryliaotian/js/flexible.js"></script>
    <script src="./jqueryliaotian/js/chat.js" type="text/javascript" charset="utf-8"></script>
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">聊天室</div>--}}
                {{--<div class="panel-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}
                        {{--{{ Auth::user()->name }}您已登录！--}}


                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

    <script type="text/javascript">
        window.onload = function () {

            var ws = new WebSocket("ws://3s.net579.com:16301");
            ws.onopen = function () {
                ws.send('login:'+'{{ Auth::user()->name }}');
            };
            document.getElementById("send").onclick = function () {
                var msg = document.getElementById("msg").value;
                ws.send('msg:'+'{{ Auth::user()->name }}'+':'+msg);
            };
            ws.onmessage = function (e) {
                var data=e.data.split(':');
                $('.scrollTop').animate({scrollTop:"500000px"},0);
                console.log(data);
                if(data[0]=='login'){
                    upView('<div style="font-size: 20px;text-align: center"><i style="color: #00dd1c">'+data[1]+'</i>进来了</div>')
                    $('.people').html(data[2])
                }else if(data[0]=='users'){
                    var html='';
                    var getMsg = e.data;
                    getMsg = getMsg.replace('users:','');
                    getMsg= eval('('+getMsg+')'); //转json
                    console.log(getMsg);
                    $.each(getMsg,function (i,n) {
                        html+='<li style="line-height: 15px;margin-left: 40px;color: #00dd1c">'+n+'</li>';
                    });
                    $('.select').html(html);
                }else if(data[0]=='msg'){
                    if(data[1]=='{{ Auth::user()->name }}'){
                        show("./jqueryliaotian/images/touxiangm.png",data[1]+':'+data[2]);
                    }else {
                        send("./jqueryliaotian/images/touxiangm.png",data[1]+':'+data[2]);
                    }
                }else if(data[0]=='logout'){

                    upView('<div style="text-align: center;font-size: 20px"><i style="color: red">'+data[1]+'</i>走了</div>')
                    $('.people').html(data[2])
                }
        };
        };
    </script>
    <div class="scrollTop" style="position:absolute; height:770px; width:100%; overflow:auto">
        <header class="header">
            <a class="back" href="javascript:history.back()"></a>
            <h5 class="tit">追星星的人(<span class="people" style="color: #00dd1c"></span>)</h5>
            <span style="line-height: 20px;position: fixed">在线用户：
            <ul style="line-height: 20px" class="select">
            </ul>
            </span>
        </header>
        <div  class="message" style="max-width: 720px;font-size: 0.26rem;">
        </div>
        <div class="footer">
            <img src="./jqueryliaotian/images/hua.png" alt="" />
            <img src="./jqueryliaotian/images/xiaolian.png" alt="" />
            <input id="msg" type="text"  />
            <b id="send">发送</b>
        </div>
    </div>
@endsection
