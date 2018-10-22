<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"D:\phpStudy\WWW\feichangcelue/application/index\view\index\news_t.html";i:1540198300;s:68:"D:\phpStudy\WWW\feichangcelue/application/index\view\public\top.html";i:1539832463;s:77:"D:\phpStudy\WWW\feichangcelue/application/index\view\public\PcPublicFoot.html";i:1540193277;}*/ ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Title</title>

		<link href="__STATIC__/libs/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="__STATIC__/home/css/index.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/home/css/buy.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/home/css/index_information.css" />
	</head>
	<body>
		<title>首页</title>

<meta name="keywords" content="<?php echo config('web_site_keywords'); ?>">
<meta name="description" content="<?php echo config('web_site_description'); ?>">
<link rel="stylesheet" type="text/css" href="__STATIC__/home/css/common.css"/>

<!--头部-->
<header class="ml_header br-w100">
    <div class="h_top br-w100">
        <div class="w1024 br-clearfix">
            <div class="h_topL br-fl">
                服务热线：<?php echo $phone; ?>
            </div>
              <div class="h_topLL br-fl" style="padding-left: 10px;color: red;">
                   深圳市尚美时尚产业投资管理有限公司
            </div>
         
                <?php if(!empty($_SESSION['member'])): ?>
            <div   style="text-align: right;" >
                <?php if(!empty($_SESSION['member']['username'])): ?>
                用户：<?php echo $_SESSION['member']['username']; else: ?>
                用户信息：<?php echo $_SESSION['member']['mobile']; endif; ?>
                <span class="loginout"><a href="<?php echo url('index/index/logout'); ?>">退出登录</a></span>
            </div>
                <?php endif; ?>


           <!-- <div id="page_shared_layout_login" class="h_topR br-fr" <?php if($_SESSION['member'] != ''): ?> style="display: none;" <?php endif; ?> >
                <a class="login" href="javascript:void(0);">登录</a>
                <a class="register" href="./reg.html">注册</a>
            </div>

            <ul id="page_shared_layout_unlogin" class="top-links f-right" <?php if($_SESSION['member'] == ''): ?> style="display: none;" <?php endif; ?>>
            <li class="show-logout" style="display: list-item;"><a href="javascript:_hmt.push(['_trackEvent', 'login', 'click', 'head-login',1]);" name="popup-user-login-click">登录</a></li>
            <li class="show-logout sep" style="display: list-item;">|</li>
            <li class="show-logout" style="display: list-item;"><a href="/user/reg">注册</a></li>
            <li class="show-login" style="display: block;">您好，&nbsp;</li>
            <li class="show-login top-user-wrapper" style="display: block;">
                    <span class="top-username">
                    	<a id="page_shared_layout_login_name" href="./ucenter/index"><?php echo $_SESSION['member']['username']; ?></a>
                    	<i class="icon icon-arrow-drop-down"></i>
                    </span>
                <div class="overlay-account">
                    <div class="group account-group">
                        <span class="f-left">可用<b class="account-val" id="shared_header_mb"><?php echo $usableSum; ?></b></span>
                        <a name="realnameAuth" class="f-right" href="./ucenter/payment.html">充值</a>
                    </div>
                    <div class="account-links group">
                        <a class="f-left" href="./ucenter/index.html">个人中心</a>
                        <span class="f-left sep">|</span>


                        <a class="f-right js-logout" href="<?php echo url('index/index/logout'); ?>">安全退出</a>
                    </div>
                </div>
                /.overlay-account
            </li>
            </ul>-->
    </div>
</div>
    <div class="h_bot br-w100">
        <div class="w1024 br-clearfix">
            <div class="h_botL br-fl">
                <a href="./">
                	<img src="__STATIC__/home/img/moblie/fcml2.png" style="height:80px; " />
                	<span style="color: #FF3439;">深圳市尚美时尚产业投资管理有限公司</span>
                </a>
            </div>
            <div class="h_botR br-fr">
                    <!--<li class="br-fl"><a href="<?php echo url('index'); ?>" class="active">首页</a></li>-->
                    <li class="br-fl"><a href="./index.html" class="active">首页</a></li>
                    <!-- <li class="br-fl"><a href="./buy2.html">A股点买</a></li>
                     <li class="br-fl"><a href="./freetrial2.html">免费体验</a></li>-->
                    <li class="br-fl"><a href="./safeensure.html">安全保障</a></li>
                    <li class="br-fl help_box">
                    	<a href="./guild.html">帮助中心</a>
                    	<ul class="new-sub-nav hide">
                            <li class=""><a href="./guild.html">新手教学</a></li>
                            <li class=""><a href="./help.html">常见问题</a></li>
                        </ul>
                    </li>
                    <li class="br-fl"><a href="./company.html">关于我们</a></li>
                    <li class="br-fl"><a href="./buy.html">A股点买</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>


<script src="__STATIC__/libs/jquery-2.2.0/jquery-2.2.0.min.js"></script>
<script src="__STATIC__/home/js/general.js"></script>

<script>

//	$("#menu-ul li").on('click',function(){
//
//             $(this).siblings().children('a').removeClass('active');
//			$(this).children('a').addClass('active');
//			console.log($(this).children('a'))
//
//		});

    //自动选中active
//  $(function(){
//      var menuArr = [];
//      menuArr[0] = ["index.html"  ];
//      menuArr[1] = ["buy.html", "sell.html", "history.html" ];
//      menuArr[2] = ["freetrial.html", "freetrialSell.html", "freetrialHistory.html"  ];
//      menuArr[3] = ["mobile.html",  ];
//      menuArr[4] = [ "guild.html" ,"help.html" ];
//      menuArr[5] = [ "safeensure.html"];
//      for(var i = 0 ; i < menuArr.length; i++ ){
//          for(var j = 0 ; j < menuArr[i].length; j++){
//              if(location.href.indexOf(menuArr[i][j]) > 0){
//                  $("#menu-ul > li a").removeClass("active");
//                  $("#menu-ul > li").eq(i).find("a").eq(0).addClass("active");
//                  $("#menu-ul > li").eq(i).find("a").eq(j+1).addClass("active");
//                    console.log(i+'------'+j);
//                  return;
//              }
//          }
//      }
//  });
    //退出登录



</script>
		<div id="" style="margin-top: 200px; ">

			<table style="margin: 100px auto; ">
				<tr>
					<td height="50" align="center" valign="middle" style="font-size:24px; color:#666; text-align: center" class="title" title="【尚牛配资】银行理财5%收益将近绝迹 理财资金入股市仍尚需时"></td>
				</tr>
				<tr>
					<td height="50" align="center" valign="middle" style="border-bottom:1px solid #dedede; text-align: center;" class="time"></td>
				</tr>
				<tr style="display: block;margin: 0 auto;width: 60%">
					<td class="content">

					</td>
				</tr>
				<tr>
					<td>
						<a href="/neican/index.html" class="blue float right">返回列表&gt;&gt;</a>
					</td>
				</tr>
			</table>
		</div>
		<div class="foot">
    <div class="wrapper clearfix">
    <div class="foots">
             <div class="footTel">
                <div class="footTel-top">
                    <img src="__STATIC__/home/img/foot-shares.png" alt="">
                    <span>股票配资</span>
                </div>
                <div class="footTel-links">
                    <p><a href="./PcBuyDay">按天配资申请</a></p>
                    <p><a href="./PcBuyMonth">按月配资申请</a></p>
                    <!-- <p><a href="./">按周配资申请</a></p> -->
                    <p><a href="./PcBuyFree">免息配资申请</a></p>
                </div>

            </div>
            <div class="footTel">
                <div class="footTel-top">
                    <img src="__STATIC__/home/img/foot-guide.png" alt="">
                    <span>配资利息讲解</span>
                </div>
                <div class="footTel-links">
                    <p><a href="./atlxjj">按天利息讲解</a></p>
                    <!-- <p><a href="/aboutus/azlxjj.html">按周利息讲解</a></p> -->
                    <p><a href="./aylxjj">按月利息讲解</a></p>
                    <p><a href="./mxlxjj">免息配资讲解</a></p>


                </div>

            </div>
            <div class="footTel">
                <div class="footTel-top">
                    <img src="__STATIC__/home/img/foot-offi.png" alt="">
                    <span>尚牛微信</span>
                </div>
                <div class="footTel-links">
                    <p></p><p><img style="float: none; margin: 0px" alt=""width="100%" src="__STATIC__/home/img/20170626180649.png"></p><p></p>
                </div>

            </div>
            <div class="footTel">
                <div class="footTel-top">
                    <img src="__STATIC__/home/img/foot-offi.png" alt="">
                    <span>尚牛公众号</span>
                </div>
                <div class="footTel-links">
                    <p></p><div><img style="float: none; margin: 0px" width="100% "alt="" src="__STATIC__/home/img/20170816183336.png"></div><p></p>
                </div>

            </div>
            <div class="footTel">
                <div class="footTel-top">
                    <img src="__STATIC__/home/img/foot-help.png" alt="">
                    <span>新手帮助中心</span>
                </div>
                <div class="footTel-links">
                    <p><a href="./rhzchy">如何注册会员</a></p>
                    <p><a href="./rhsmrz">如何实名认证</a></p>
                    <p><a href="./rhjxcz">如何进行充值</a></p>
                    <p><a href="./rhsqpz">如何申请配资</a></p>

                </div>

            </div>
          
        </div>
    </div>
</div>
	
		<script src="./public/static/libs/jquery-2.2.0/jquery-2.2.0.min.js"></script>
		<script src="./public/static/home/js/moblie/mui.min.js"></script>
		<script src="./public/static/home/js/moblie/reg.js"></script>
		<script>
			$.ajax({
				type: 'POST',
				url: '<?php echo url("index/index/news_t"); ?>',
				dataType: 'json',
				success: function(data) {
					console.log(data);
					// console.log(data.data.title);
					           $(".title").html(data.data.title);
					           $(".time").html(data.data.createTime);
					           $(".content").html(data.data.content);
				},
				error: function(data) {
					console.log("失败");
				},
			});
		</script>
	</body>
</html>
