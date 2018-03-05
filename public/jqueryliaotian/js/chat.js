/*发送消息*/
function send(headSrc,str){
    var date=Date.parse(new Date());
	var html="<div class='send'>" +
		"<div class='time'>"+formatDateTime(date)+"</div>" +
		"<div class='msg'><img src="+headSrc+" />"+
	"<p><i class='msg_input'></i>"+str+"</p></div></div>";
	upView(html);
}
/*接受消息*/
function show(headSrc,str){
    var date=Date.parse(new Date());
	var html="<div class='show'>" +
		"<div class='time'>"+formatDateTime(date)+"</div>" +
		"<div class='msg'><img src="+headSrc+" />"+
	"<p><i class='msg_input'></i>"+str+"</p></div></div>";
	upView(html);
}

function formatDateTime(inputTime) {
    var date = new Date(inputTime);
    var y = date.getFullYear();
    var m = date.getMonth() + 1;
    m = m < 10 ? ('0' + m) : m;
    var d = date.getDate();
    d = d < 10 ? ('0' + d) : d;
    var h = date.getHours();
    h = h < 10 ? ('0' + h) : h;
    var minute = date.getMinutes();
    var second = date.getSeconds();
    minute = minute < 10 ? ('0' + minute) : minute;
    second = second < 10 ? ('0' + second) : second;
    return y + '-' + m + '-' + d+' '+h+':'+minute+':'+second;
}
/*更新视图*/
function upView(html){
	$('.message').append(html);
	$('body').animate({scrollTop:$('.message').outerHeight()-window.innerHeight},200)
}
function sj(){
	return parseInt(Math.random()*10)
}
$(function(){
	$('.footer').on('keyup','input',function(){
		if($(this).val().length>0){
			$(this).next().css('background','#114F8E').prop('disabled',true);

		}else{
			$(this).next().css('background','#ddd').prop('disabled',false);
		}
	})
	// $('.footer p').click(function(){
		// show("./jqueryliaotian/images/touxiangm.png",$(this).prev().val());
		// test();
	// })
});

/*测试数据*/
// var arr=['我是小Q','好久没联系了！','你在想我么','怎么不和我说话','跟我聊会天吧'];
// var imgarr=['jqueryliaotian/images/touxiang.png','jqueryliaotian/images/touxiangm.png']
// test()
// function test(){
// 	$(arr).each(function(i){
// 		setTimeout(function(){
// 			send("jqueryliaotian/images/touxiang.png",arr[i])
// 		},sj()*500)
// 	})
// }
