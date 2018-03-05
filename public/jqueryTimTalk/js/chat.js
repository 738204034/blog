  //获取好友网名
  $('.conLefts li').on('click',function(){
		$(this).addClass('bg').siblings().removeClass('bg');
		var data=$(this).children('.liRight').children('.intername');
		var intername=data.html();
		var type=data.attr('type');
		var group_id=data.attr('group_id');
		var uid=data.attr('uid');
		$('.headName').html(intername);
		$('.newsList').html('');
	});
  //发送消息
	$('.sendBtn').on('click',function(){
		var username=$(this).attr('user_name');
        var date=Date.parse(new Date());
		var news=$('#dope').val();
		if(news==''){
			alert('不能为空');
		}else{
			$('#dope').val('');
		var str='';
		str+='<li>'+
				'<div class="nesHead"><img src="./jqueryTimTalk/img/6.jpg"/></div>'+
            '<div style="position: relative"><div style="position: absolute;left: 389px;top: -17px"><b style="color: #0000F0">'+username+'</b><i style="margin-left: 10px">'+formatDateTime(date)+'</i></div></div>'+
				'<div class="news"><img class="jiao" src="./jqueryTimTalk/img/talk.jpg">'+news+'</div>'+
			'</li>';

            $.get('/blog/public/send', {
                receive_id:'1',
            	type:'all',
            	group_id:'11111',
				message:news
            }, function(data){
                if(data){

				}
            });
            $('.newsList').append(str);
		// setTimeout(answers,1000);
		$('.conLeft').find('li.bg').children('.liRight').children('.infor').text(news);
		//将滚动条始终保持在底部
		$('.RightCont').scrollTop($('.RightCont')[0].scrollHeight );
	}

	});
	//随机产生一条回复
	function answers(user_name,message){
		// var arr=["你好","今天天气很棒啊","你吃饭了吗？","我最美我最美","我是可爱的僵小鱼","你们忍心这样子对我吗？","spring天下无敌，实习工资850","我不管，我最帅，我是你们的小可爱","段友出征，寸草不生","一入段子深似海，从此节操是路人","馒头：嗷","突然想开个车：www.jq22.com","段子界混的最惨的两个狗：拉斯，普拉达。。。","<img src='./jqueryTimTalk/img/15.gif'>","<img src='./jqueryTimTalk/img/13.gif'>","<img src='./jqueryTimTalk/img/9.gif'>","<img src='./jqueryTimTalk/img/25.gif'>","<img src='./jqueryTimTalk/img/38.gif'>","<img src='./jqueryTimTalk/img/46.gif'>","<img src='./jqueryTimTalk/img/51.gif'>","<img src='./jqueryTimTalk/img/68.gif'>","<img src='./jqueryTimTalk/img/38.gif'>","<img src='./jqueryTimTalk/img/84.gif'>","<img src='./jqueryTimTalk/img/33.gif'>","<img src='./jqueryTimTalk/img/66.gif'>","<img src='./jqueryTimTalk/img/22.gif'>","<img src='./jqueryTimTalk/img/16.gif'>","<img src='./jqueryTimTalk/img/86.gif'>","<img src='./jqueryTimTalk/img/91.gif'>","<img src='./jqueryTimTalk/img/73.gif'>","<img src='./jqueryTimTalk/img/49.gif'>"];
		// var aa=Math.floor((Math.random()*arr.length));
		var answer='';
        var date=Date.parse(new Date());
		answer+='<li>'+
					'<div class="answerHead"><img src="./jqueryTimTalk/img/tou.jpg"/></div>'+
					'<div style="position: relative"><div style="position: absolute;left: 60px;top: -12px"><b style="color: #0000F0">'+user_name+'</b><i style="margin-left: 10px">'+formatDateTime(date)+'</i></div></div>'+
					'<div style="height: 37px;margin-top: 10px" class="answers"><img class="jiao" src="./jqueryTimTalk/img/TIM图片20170926103645_03_02.jpg">'+message+'</div>'+
				'</li>';
		$('.newsList').append(answer);	
		$('.RightCont').scrollTop($('.RightCont')[0].scrollHeight );
		//历史消息的展现与隐藏
	var newlen=$('.newsList li').length;
	var lis=$('.newsList li:last').index();
	var maxlen=newlen-5;
			if(newlen%10>5){
				$('.ChatRecord').show();
				$('.newsList li:lt('+maxlen+')').hide();
			}
	}
	//表情包的展现与隐藏
	$('.ExP').on('click',function(){
		if($('.emjon').css('display')=='none'){
			$('.emjon').show();
		}else{
			$('.emjon').hide();
		}
	});
	
	//发送表情
	$('.emjon li').on('click',function(){
		var imgSrc=$(this).children('img').attr('src');
		var str="";
		str+='<li>'+
				'<div class="nesHead"><img src="./jqueryTimTalk/img/6.jpg"/></div>'+
				'<div class="news"><img class="jiao" src="./jqueryTimTalk/img/talk.jpg"><img class="Expr" src="'+imgSrc+'"></div>'+
			'</li>';
		$('.newsList').append(str);
		setTimeout(answers,1000);
		$('.emjon').hide();
		$('.RightCont').scrollTop($('.RightCont')[0].scrollHeight );
	});
	//展开历史消息
	$('.RightCont').on('click','.ChatRecord',function(){
		$('.newsList li:eq(0),li:gt(0)').show();
		$('.ChatRecord').hide();
	});


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
      return m + '-' + d+' '+h+':'+minute+':'+second;
  }
	
	