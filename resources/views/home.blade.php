
@extends('layouts.app')

@section('content')
    <link rel="stylesheet" type="text/css" href="./jqueryTimTalk/css/qq.css"/>

    <div class="qqBox">
        <div class="BoxHead">
            <div class="headImg">
                <img src="./jqueryTimTalk/img/6.jpg"/>
            </div>
            <div class="internetName">{{auth::user()->name}}</div>
        </div>
        <div class="context">
            <div class="conLeft">
                <ul class="conLefts" style="position:absolute;max-width: 25%; overflow:auto;max-height: 50%;height: 50%;border-bottom: solid 1px darkgrey">
                    <li>
                        <div class="liLeft"><img src="./jqueryTimTalk/img/TIM图片20170926103645_04.jpg"/></div>
                        <div class="liRight">
                            <span type="group" class="intername" group_id="12345">前端交流群(<b style="color: #0000C2">12345</b>)</span>
                            <span class="infor">厉害了</span>
                        </div>
                    </li>
                    <li class="bg">
                        <div class="liLeft"><img src="./jqueryTimTalk/img/TIM图片20170926103645_27.jpg"/></div>
                        <div class="liRight">
                            <span type="group" uid="" group_id="123"  class="intername">php交流群(<b style="color: #0000C2">123</b>)</span>
                            <span class="infor">[流泪]</span>
                        </div>
                    </li>
                    {{--<li>--}}
                        {{--<div class="liLeft"><img src="./jqueryTimTalk/img/TIM图片20170926103645_27.jpg"/></div>--}}
                        {{--<div class="liRight">--}}
                            {{--<span  class="intername">web交流群</span>--}}
                            {{--<span class="infor">666</span>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="liLeft"><img src="./jqueryTimTalk/img/TIM图片20170926103645_21.jpg"/></div>--}}
                        {{--<div class="liRight">--}}
                            {{--<span  class="intername">jquery插件库</span>--}}
                            {{--<span class="infor">这个群老开车</span>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="liLeft"><img src="./jqueryTimTalk/img/TIM图片20170926103645_23.jpg"/></div>--}}
                        {{--<div class="liRight">--}}
                            {{--<span  class="intername">我的phone</span>--}}
                            {{--<span class="infor">[文件]</span>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="liLeft"><img src="./jqueryTimTalk/img/TIM图片20170926103645_25.jpg"/></div>--}}
                        {{--<div class="liRight">--}}
                            {{--<span  class="intername">...</span>--}}
                            {{--<span class="infor">[么么哒]</span>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="liLeft"><img src="./jqueryTimTalk/img/TIM图片20170926103645_27.jpg"/></div>--}}
                        {{--<div class="liRight">--}}
                            {{--<span  class="intername">前端交流群</span>--}}
                            {{--<span class="infor">前端小黑：怎么才能</span>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    <li>
                        <div class="liLeft"><img src="./jqueryTimTalk/img/TIM图片20170926103645_29.jpg"/></div>
                        <div class="liRight">
                            <span type="group" uid="" group_id="321"  class="intername">前端交流群(<b style="color: #0000C2">321</b>)</span>
                            <span class="infor">大西瓜：差评，这个下面又</span>
                        </div>
                    </li>
                    {{--<li>--}}
                        {{--<div class="liLeft"><img src="./jqueryTimTalk/img/TIM图片20170926103645_54.jpg"/></div>--}}
                        {{--<div class="liRight">--}}
                            {{--<span  class="intername">前端交流群</span>--}}
                            {{--<span class="infor">[流泪]</span>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="liLeft"><img src="./jqueryTimTalk/img/TIM图片20170926103645_04.jpg"/></div>--}}
                        {{--<div class="liRight">--}}
                            {{--<span  class="intername">前端交流群</span>--}}
                            {{--<span class="infor">[流泪]</span>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="liLeft"><img src="./jqueryTimTalk/img/TIM图片20170926103645_19.jpg"/></div>--}}
                        {{--<div class="liRight">--}}
                            {{--<span  class="intername">赵鹏</span>--}}
                            {{--<span class="infor">[流泪]</span>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="liLeft"><img src="./jqueryTimTalk/img/TIM图片20170926103645_27.jpg"/></div>--}}
                        {{--<div class="liRight">--}}
                            {{--<span  class="intername">web交流群</span>--}}
                            {{--<span class="infor">[流泪]</span>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="liLeft"><img src="./jqueryTimTalk/img/TIM图片20170926103645_21.jpg"/></div>--}}
                        {{--<div class="liRight">--}}
                            {{--<span  class="intername">jquery插件库</span>--}}
                            {{--<span class="infor">[流泪]</span>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="liLeft"><img src="./jqueryTimTalk/img/TIM图片20170926103645_23.jpg"/></div>--}}
                        {{--<div class="liRight">--}}
                            {{--<span  class="intername">我的phone</span>--}}
                            {{--<span class="infor">[流泪]</span>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="liLeft"><img src="./jqueryTimTalk/img/TIM图片20170926103645_25.jpg"/></div>--}}
                        {{--<div class="liRight">--}}
                            {{--<span  class="intername">...</span>--}}
                            {{--<span class="infor">[流泪]</span>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="liLeft"><img src="./jqueryTimTalk/img/TIM图片20170926103645_27.jpg"/></div>--}}
                        {{--<div class="liRight">--}}
                            {{--<span  class="intername">前端交流群</span>--}}
                            {{--<span class="infor">[流泪]</span>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="liLeft"><img src="./jqueryTimTalk/img/TIM图片20170926103645_29.jpg"/></div>--}}
                        {{--<div class="liRight">--}}
                            {{--<span  class="intername">前端交流群</span>--}}
                            {{--<span class="infor">[流泪]</span>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="liLeft"><img src="./jqueryTimTalk/img/TIM图片20170926103645_54.jpg"/></div>--}}
                        {{--<div class="liRight">--}}
                            {{--<span  class="intername">前端交流群</span>--}}
                            {{--<span class="infor">[流泪]</span>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                </ul>
                <ul class="member" style="position:absolute;max-width: 25%;width:100%;; overflow:auto;max-height: 61.5%;height: 61.5%;top: 351px">
                    <li style="height: 30px">
                        <div class="liLeft" style="line-height: 32px;margin-left: 15px">群成员</div>
                        <div class="liRight">
                            <span  style="line-height: 32px">(<b class="count"> </b>)</span>
                        </div>
                    </li>

                    <li style="height: 30px">
                        <div class="liLeft" style="line-height: 30px"><img width="30px" style="margin: auto 2px;margin-left: 10px" src="./jqueryTimTalk/img/TIM图片20170926103645_23.jpg"></div>
                        <div class="liRight">
                            <span style="line-height: 30px" class="intername">jquery插件库</span>
                        </div>
                    </li>
                </ul>

            </div>
            <div class="conRight">
                <div class="Righthead">
                    <div class="headName" type="group" uid="" group_id="123">php交流群(<b style="color: #0000C2">123</b>)</div>
                    <div class="headConfig">
                        <ul>
                            <li><img src="./jqueryTimTalk/img/TIM图片20170926103645_06.jpg"/></li>
                            <li><img src="./jqueryTimTalk/img/TIM图片20170926103645_08.jpg"/></li>
                            <li><img src="./jqueryTimTalk/img/TIM图片20170926103645_10.jpg"/></li>
                            <li><img src="./jqueryTimTalk/img/TIM图片20170926103645_12.jpg"/></li>
                        </ul>
                    </div>
                </div>
                <div class="RightCont" style="height: 504px;max-height: 504px">
                    <div class="ChatRecord">查看更多消息</div>
                    <ul class="newsList">
                    {{--<li style="margin-top: 3px;height: 15px;text-align: center;">zhang加入了群聊</li>--}}
                    </ul>
                </div>
                <div class="RightFoot">
                    <div class="emjon">
                        <ul>
                            <li><img src="./jqueryTimTalk/img/1.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/2.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/3.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/4.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/5.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/6.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/7.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/8.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/9.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/10.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/11.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/12.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/13.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/14.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/15.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/16.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/17.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/18.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/19.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/20.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/21.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/22.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/23.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/24.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/25.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/26.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/27.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/28.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/29.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/30.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/31.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/32.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/33.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/34.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/35.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/36.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/37.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/38.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/39.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/40.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/41.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/42.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/43.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/44.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/45.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/46.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/47.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/48.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/49.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/50.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/51.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/52.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/53.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/54.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/55.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/56.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/57.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/58.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/59.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/60.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/50.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/51.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/52.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/53.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/54.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/55.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/56.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/57.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/58.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/59.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/60.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/61.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/62.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/63.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/64.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/65.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/66.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/67.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/68.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/69.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/70.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/71.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/72.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/73.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/74.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/75.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/76.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/77.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/78.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/79.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/80.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/81.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/82.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/83.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/84.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/85.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/86.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/87.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/88.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/89.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/90.gif"/></li>
                            <li><img src="./jqueryTimTalk/img/91.gif"/></li>
                        </ul>
                    </div>
                    <div class="footTop">
                        <ul>
                            <li><img src="./jqueryTimTalk/img/TIM图片20170926103645_31.jpg"/></li>
                            <li class="ExP"><img src="./jqueryTimTalk/img/TIM图片20170926103645_33.jpg"/></li>
                            <li><img src="./jqueryTimTalk/img/TIM图片20170926103645_35.jpg"/></li>
                            <li><img src="./jqueryTimTalk/img/TIM图片20170926103645_37.jpg"/></li>
                            <li><img src="./jqueryTimTalk/img/TIM图片20170926103645_39.jpg"/></li>
                            <li><img src="./jqueryTimTalk/img/TIM图片20170926103645_41.jpg" alt="" /></li>
                            <li><img src="./jqueryTimTalk/img/TIM图片20170926103645_43.jpg"/></li>
                            <li><img src="./jqueryTimTalk/img/TIM图片20170926103645_45.jpg"/></li>
                        </ul>
                    </div>
                    <div class="inputBox">
                        <textarea id="dope" style="width: 100%;height: 83px; border: none;outline: none;" name="" rows="" cols=""></textarea>
                        <button  user_name="{{ Auth::user()->name }}" class="sendBtn">发送(s)</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>
    <script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
    <script src="./jqueryTimTalk/js/chat.js"></script>

    <script>
        $(function () {
            var ws = new WebSocket("ws://127.0.0.1:8282");
            ws.onopen = function () {
                console.log('成功连接:{{ Auth::user()->name }}')
            };
            ws.onmessage = function(e){
                console.log(e.data);
                // json数据转换成js对象
                var data = eval("("+e.data+")");
                var user_name = data.user_name;
                var type = data.type || '';
                switch(type){
                    // Events.php中返回的init类型的消息，将client_id发给后台进行uid绑定
                    case 'login':
//                         利用jquery发起ajax请求，将client_id发给后端进行uid绑定
                        $.get('/blog/public/bind', {client_id: data.client_id}, function(data){
                        });
                        break;
                    case 'join':
                        if(data.user_name!='{{ Auth::user()->name }}'){
                        $('.newsList').append('<li style="margin-top: 3px;height: 15px;text-align: center;">'+data.user_name+'加入了群聊</li>');
                        }
                        $('.count').html(data.message);
                        break;
                    case 'count':
//
                        break;
                    // 当mvc框架调用GatewayClient发消息时直接alert出来
                    default :
                        answers(user_name,data.message)
                }
            };
        });
    </script>
@endsection