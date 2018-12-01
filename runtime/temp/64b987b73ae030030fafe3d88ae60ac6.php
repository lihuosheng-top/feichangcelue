<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:73:"D:\phpStudy\WWW\feichangcelue/application/index\view\ucenter\payment.html";i:1543647728;s:68:"D:\phpStudy\WWW\feichangcelue/application/index\view\public\top.html";i:1543634244;s:76:"D:\phpStudy\WWW\feichangcelue/application/index\view\public\member_left.html";i:1543645380;s:71:"D:\phpStudy\WWW\feichangcelue/application/index\view\public\footer.html";i:1543641251;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>尚牛在线</title>
</head>
<body class="membercenter logged-in">
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
                    <li class="br-fl"><a href="./ucenter/index.html">个人中心</a></li>
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
<link rel="stylesheet" type="text/css" href="__STATIC__/home/css/buy.css"/>
<link rel="stylesheet" type="text/css" href="__STATIC__/home/css/member.css"/>

	<style type="text/css">/*offline-wrap*/

.offline-wrap {
	margin-left: 15px;
	font-size: 14px;
	background-color: #fff;
}

.offline-wrap input {
	border: none;
}

.offline-wrap .each-line {
	color: #333;
	padding: 15px;
	padding-left: 0;
	border-bottom: 1px solid #E5E5E5;
}

.offline-wrap .each-line li {
	float: left;
	width: 50%;
}

.offline-wrap .each-line li input {
	text-align: right;
	width: 100%;
}

.offline-wrap .each-line span.tip {
	font-size: 12px;
	color: #E5E5E5;
}

.offline-wrap .each-line .zz-tip {
	padding-bottom: 7px;
}

.offline-wrap .zzpz-tip {
	padding: 30px;
	text-align: center;
	color: #3483E9;
}

.offline-wrap .zzpz-tip .offline-form {
	position: relative;
	display: block;
	width: 133px;
	height: 40px;
	top: -25px;
	margin: auto auto;
	background-color: transparent;
	font-size: 0;
}

.offline-wrap .zzpz-tip .offline-form input {
	line-height: normal;
	width: 133px;
	height: 40px;
	display: inline-block;
	opacity: 0;
	cursor: pointer;
}

.select-options {
	float: right;
}

.select-options select {
	-webkit-appearance: none;
	border: none;
	direction: rtl;
}

.offline-pic {
	margin-top: 15px;
}

.offline-pic img.delete {
	width: 20px;
	top: -10px;
	position: relative;
	left: 114px;
	float: left;
}

.offline-pic #cId img {
	width: 100px;
}

.offline-tip {
	margin: 15px 15px 55px 15px;
	color: #999;
	font-size: 12px;
}

.offline-kf {
	text-align: center;
	margin-top: 20px;
	color: #333;
	font-size: 14px;
}

.offline-kf a {
	color: #3483E9;
}

.tab-item {
	width: 50%;
	margin: 10px auto;
	border: solid #EFEFF4 3px;
}

.btn-full {
	height: 48px;
	line-height: 48px;
	width: 90%;
	color: #FFF;
	font-size: 18px;
	text-decoration: none;
	display: inline-block;
	text-align: center;
	cursor: pointer;
	border: none;
	border-radius: 7px;
}

.btn-orange {
	background: #FF8C19;
}

.form-list li span {
	display: inline-block;
	color: #333;
	font-size: 14px;
}

.form-list li input {
	display: inline-block;
	color: #333;
	font-size: 14px;
	height: 36px;
}

.form-list li .title {
	width: 22%;
	text-align: right;
}

.form-list li .content {
	width: 60%;
}

#submit{
	margin-top: 20px;
	width: 100px;
	height: 50px;
	color: #fff;
	border: 1px solid #007aff;
	background-color: #007aff;
}

#wxsubmit {
	margin-top: 20px;
	width: 100px;
	height: 50px;
	color: #fff;
	border: 1px solid #007aff;
	background-color: #007aff;
}

.re_p {
	margin-bottom: 20px;
	margin-top: 5px;
	color: #8f8f94;
	text-align: center;
}

.font12 {
	font-size: 12px;
}

.color_red {
	color: #e60012;
}

.wx_p1 {
	padding-top: 20px;
	margin-bottom: 25px;
}

p {
	font-size: 14px;
	margin-top: 0;
	margin-bottom: 10px;
	color: #8f8f94;
	text-align: center;
}

.wx_img {
	width: 150px;
	margin: 0 auto;
	display: block;
	}

</style>

<!--个人中心-充值-->
<div class="br-content">
<div class="w1200">
	<!--主体-->
<section class="page-main page-personal">
    <div class="container clearfix">
    	<!--public左边-->
    	
        <aside class="col-left">
            <div class="userinfo">
            	<form name="user_head" id="user_head">
					<input type="file" name="myfile222" id="img_upload" />
					<div class="img_download">
						<!--<img class="user-pic" id="headImg" src="<?php echo (isset($member['headImg']) && ($member['headImg'] !== '')?$member['headImg']:'/public/static/home/img/user.png'); ?>" >-->
						<img class="user-pic"  src="__STATIC__/home/img/user.png" >
					</div>
				</form>
                <!--<img src="/public/static/home/img/user.png" alt="" class="user-pic">-->
                <p class="user-info">Hi，<strong id="shared_layout_mem_lnm"><?php echo $_SESSION['member']['username']; ?></strong></p>
                <div class="iconrow">
                   <a href="./security.html"><span class="user-2"></span></a>
                    <a href="./security.html"><span class="user-3"></span></a>
                    <a href="./security.html"><span class="user-4"></span></a>
                </div>
            </div>
            <h4 class="new-head-line"><span class="user-5"></span>会员中心</h4>
            <nav id="personal-nav" class="left-nav">
                <ul>

                    <li class=""><a href="./index.html">我的首页&nbsp;<span class="mem_gt">&gt;</span></a></li>
                    <li class=""><a href="./bankcards.html">银行卡管理&nbsp;<span class="mem_gt">&gt;</span></a></li>
                    <li class=""><a href="./security.html">账户安全&nbsp;<span class="mem_gt">&gt;</span></a></li>
					<li class=""><a href="./payment.html">充值&nbsp;<span class="mem_gt">&gt;</span></a></li>
					<li class=""><a href="./withdraw.html">提现&nbsp;<span class="mem_gt">&gt;</span></a></li>
                    <li class=""><a href="./agent.html" style="display: none;">推广赚钱&nbsp;<span class="mem_gt">&gt;</span></a></li>
                </ul>
            </nav>
        </aside>


<script src="__STATIC__/home/js/moblie/jquery.ajaxfileupload.js"></script>
<!--<script type="text/javascript">-->
	<!---->
	<!--$(function() {-->
		<!--/**-->
		 <!--* active-->
		 <!--*/-->
			<!--//console.log(window.location.pathname)-->
		<!--$('#personal-nav li').removeClass('active');-->

		<!--//遍历-->
		<!--$('#personal-nav li>a').each(function () {-->
			<!--if ($($(this))[0].getAttribute('href') == String(window.location.pathname)) {-->
				<!--$(this).parent().addClass('active');-->
			<!--}-->
		<!--});-->
		<!---->
		<!---->
		<!--/**-->
		 <!--* 上传头像-->
		 <!--*/-->
        <!--$('#img_upload').AjaxFileUpload({-->
			<!--//处理文件上传操作的服务器端地址-->
			<!--//上传图片，返回图片地址-->
			<!--action: './index/index/doImgUpload',-->
			<!--onComplete: function(filename, resp) { //服务器响应成功时的处理函数-->
				<!--if(resp.code == '0') {-->
					<!--$('#headImg').attr('src', resp.data);-->
					<!--var params = {};-->
					<!--params['headImg'] = resp.data;-->
					<!--//保存图片到数据库，分两个地址是为了在很多地方公用-->
					<!--$.post("./index/ucenter/savePeopleImg", params, function(data) {-->
						<!--if(data.code == '0') {-->
							<!--tool.popup_err_msg("修改成功");-->
						<!--} else {-->
							<!--tool.popup_err_msg(data.msg);-->
						<!--}-->
					<!--}, 'json');-->
				<!--} else {-->
					<!--tool.popup_err_msg(resp.msg );-->
				<!--}-->
			<!--}-->
		<!--});-->
		<!---->
		<!---->
		<!---->
	<!--});-->

<!--</script>-->
        <!--右边-->
<div id="page_member_payment" class="col-main page-member-payment">
    <div class="tabs-wrapper" id="pay-method-tabs">
        <nav>
            <ul class="clearfix">
                <li class="active"><a href="javascript:;" id="pm4">银行转账</a></li>
                <li><a href="javascript:;" id="pm3">支付宝转账</a></li>
                <li><a href="javascript:;" id="pm2">微信转账</a></li>
            </ul>
        </nav>
        <div class="tabs">
            
            
            <div class="tab-item hide" id="tab-pm3">
              <div class="mui-content">
		    <div class="pay_title">第一步：请复制或牢记我们的支付宝账号</div>
		  
				<section>
					<div style="width: 70%; margin: 0 auto;">
					<img src="__STATIC__/home/img/moblie/Apay1.jpg" alt="" width="100%">
					</div>
			
						<p style="text-align: center; color: #333;">（或选择）
							<br>
							支付宝财务代收款账号：13013462819     罗蓉</p>
					
				</section>

				<ul class="form-list" style="margin-top: 20px;">
					<li>
						<span class="title">金额:</span>
						<span class="content"><input type="text" name="amount" id="amount" value=""></span>
					</li>
					<li>
						<span class="title" style="vertical-align: 40px;">说明:</span>
						<span class="content"><textarea rows="2" cols="20" name="instructions" id="instructions" style="border: solid 1px #A9A9A9;"></textarea></span>
					</li>
					<li>
						 <span class="title">支付宝账号:</span>
						 <span class="content"><input type="text" name="alipay" id="alipay" value=""></span>
					</li>
				</ul>
				<!-- <div class="upload_img">
                    <p>截图凭证：</p>
                    <ul>
                        <li class="upload_input">
                            <a href="javascript:;">
                                <img src="/feichangcelue/public/static/index/image/icon-cam.png">
                            </a>
                            <input type="file" id="myfile" enctype="multipart/form-data"  multiple accept="image/jpeg, image/jpg, image/png" name="credentials">
                        </li>
                    </ul>
                </div> -->
				<div class="buts" style="text-align: center;">
					<input type="button" value="确认提交" id="submit">
				</div>



			 <!--<div class="pay_title">第二步：手机打开支付宝，快速转账</div>-->
		    <!--<section class="sec2 bg_fff">-->
		    	<!--<img src="../public/static/home/img/moblie/ali-pay.png"/>-->
		    <!--</section>-->
		    <!--<p class="over_p mui-text-center bg_fff">完成后，请到个人中心查看<a href="../ucenter/home.html">账户余额</a></p>-->
			<!--<a type="button" class="ml_btn mui-btn mui-btn-block" href="https://ds.alipay.com/?from=mobilecodec&scheme=alipays%3A%2F%2Fplatformapi%2Fstartapp%3FsaId%3D10000007%26clientVersion%3D3.7.0.0718%26qrcode%3Dhttps%253A%252F%252Fqr.alipay.com%252Fa6x061714walnkq3lfptl18%253F_s%253Dweb-other">去转账</a>-->

			<p class="mui-text-center font12 re_p">请在上方填写对应的凭证</p>
			<p class="mui-text-center re_p">到账时间</p>
			<p class="mui-text-center re_p ">08：45-17:00（30分钟内到账） 17:00以后（次日09:30到账）<br> 如急需到账，请电话 <a href="javascript:void(0);" target="_blank">联系客服</a></p>
		
		
		
		
		</div>
            </div>
            <!--/.tab-item -->
            <div class="tab-item hide" id="tab-pm2">
            	<div class="mui-content">
		  <div class="wx_top">
		  	<p class="color_red wx_p">请扫码充值，并务必在转账备注中填写注册手机号 这样方便我们多重信息确认你的汇款</p>
		  	<!--<img class="wx_img" src="/feichangcelue/public/static/home/img/wxpay.png"/>-->
		  	<img class="wx_img" src="/feichangcelue/public/static/home/img/wxpay3.png">
		  	<p class="wx_p">请用微信扫描二维码</p>
		  	<!--<p class="wx_p3" style="color: #e60012">因对公帐户核对帐目，现由子公司代收，给您造成不便 我们深表谦意！如您需要其他支付方式请联系在线客服，谢谢！</p>-->
		  	<p class="wx_p">转账成功后，请在下方填写对应的凭证，请拨打客服热线4001665652以便我们及时帮您处理</p>
			<!--<p class="wx_p3">账户：赵金霞</p>-->
			<div class="ball ball_l"></div>
			<div class="ball ball_r"></div>
			<!--<form action="aaa" method="post">-->
				<ul class="form-list">
					<li>
						<span class="title">金额:</span>
						<span class="content"><input type="text" name="amount" id="wxamount" value=""></span>
					</li>
					<li>
						<span class="title" style="vertical-align: 40px;">说明:</span>
						<span class="content"><textarea rows="2" cols="20" name="instructions" id="wxinstructions" style="border: solid 1px #a9a9a9;"></textarea></span>
					</li>
					<li>
						<span class="title">微信号:</span>
						<span class="content"><input type="text" name="alipay" id="wxalipay" value=""></span>
					</li>
				</ul>
				<!-- <div class="upload_img">
					<p>截图凭证：</p>
					<ul>
						<li class="upload_input">
							<a href="javascript:;">
								<img src="/feichangcelue/public/static/index/image/icon-cam.png">
							</a>
							<input type="file" id="myfile" enctype="multipart/form-data"  multiple accept="image/jpeg, image/jpg, image/png" name="credentials">
						</li>
					</ul>
				</div> -->
				<div class="buts" style="text-align: center;">
					<input type="button" value="确认提交" id="wxsubmit">
				</div>
				
			</for/m>
		  </div>
			
		</div>
               </div>
            <!--/.tab-item -->
            <div class="tab-item " id="tab-pm4">
             <form action="bbb" id="payForm" >
                    
					<input type="hidden" value="1" name="pay_type">
				<div style="background-color:#fff">
					<div class="offline-wrap">
						<ul class="each-line clearfix">
							<li style="    width: 100%;"> 你可以通过网上银行、银行柜台、ATM等方式向转账 <span style="color: #f70909;">(提示：必须先转账 后填写此凭证提交)</span></li>
						</ul>
					

						<ul class="each-line clearfix">
							<li style="width: 100%;">
								<span style="color: red;">
									<!--因对公帐户对帐，目前由财务代入款，给您造成不便抱歉！建设银行帐户：6236683200000984199姓名：梁欣茵，如您需要其他支付方式请联系在线客服，谢谢！-->
									<!--因对公帐户核对帐目，现由子公司代收，给您造成不便 我们深表谦意!-->
									<br>
									入款帐户：755928537410701
									<br>
									单位名称：深圳市尚美时尚产业投资管理有限公司
									<br>
									开 户 行：招商银行股份有限公司深圳中心城支行


								</span>
							</li>
						</ul>

						<ul class="each-line clearfix">
							<li>
								<span>建设银行财务帐户帐号：</span>
							</li>
							<li>
								<span style="color: red;float: right">6236 6832 0000 0984 199</span>
							</li>
						</ul>

						<ul class="each-line clearfix">
							<li>
								<span>账户名称：</span>
							</li>
							<li>
								<span style="color: red;float: right">梁欣茵</span>
							</li>
						</ul>





	<ul class="each-line clearfix">
							<li>
								<span>充值金额</span>
							</li>
							<li>
								<input type="number" placeholder="请输入充值金额" id="paymoney" name="pay_money">
							</li>
						</ul>
						<ul class="each-line clearfix">
							<li>
								<span>我的充值银行卡号：</span>
							</li>
							<li>
								<input type="text" value="" placeholder="请填写充值的银行卡号进行核对" id="bank_num" name="bank_num">
							</li>
						</ul>

						<ul class="each-line clearfix">
							<li>
								<span>转账备注</span>
							</li>
							<li>
								<input type="text" value="本人确认该笔款项用于股票配资之用" placeholder="本人确认该笔款项用于股票配资之用" id="remark" name="remark">
							</li>
						</ul>

						<div class="zzpz-tip" id="upbutton">
							<label>
                     </label>

						</div>

					</div>
</div>
				<div class="recharge-tip">
				<p>充值后，请在公众号留言或联系充值客服QQ：910605652，我们及时为您充值</p>
				</div>
					<div style="width: 100%">
						<!--<div class="btn-full btn-orange" style="margin-left: 5%;" onclick="charge();" id="on_buton">确认提交</div>-->
						<input type="button" name="" value="确认提交" class="btn-full btn-orange"  id="on_buton"/>
					</div>

                    	
                    </form>

            </div>
            <!--/.tab-item -->
            <!--/.tabs-->
        </div>
    </div>
</div>

    </div>
</section>





</div>
</div>


<!--底部-->
<footer class="br-w100">
    <div class="footer_top">
        <a href="<?php echo url('index/index/company'); ?>">关于我们</a>
        <a href="<?php echo url('index/index/contact'); ?>">联系我们</a>
    </div>
    <div class="footer_bot">
        <div class="w1024 br-clearfix">
            <div class="bot_l br-fl">
                <p>全国统一服务热线 ：4001665652<br>客服服务时间工作日：9:00-18:00</p></div>
            <div class="bot_r br-fr br-text-center">
                <div class="bot_r_img br-clearfix ">
                    <span><a target="_blank" href="https://qwrz.baidu.com/id/bcab3808e1be12501f0aa132a2b2b802"><img src="./public/static/home/img/bdxy.jpg"/></a></span>
                    <span id="kx_verify"></span><script type="text/javascript">(function (){var _kxs = document.createElement('script');_kxs.id = 'kx_script';_kxs.async = true;_kxs.setAttribute('cid', 'kx_verify');_kxs.src = ('https:' == document.location.protocol ? 'https://ss.knet.cn' : 'http://rr.knet.cn')+'/static/js/icon3.js?sn=e18053044030074109ys5u000000&tp=icon3';_kxs.setAttribute('size', 0);var _kx = document.getElementById('kx_verify');_kx.parentNode.insertBefore(_kxs, _kx);})();</script>
                    <span class="br-fl"><a target="_blank" href="https://v.pinpaibao.com.cn/cert/site/?site=www.sm00009.com&at=business" ><img src="https://static.anquan.org/static/outer/image/hy_124x47.png?id=www.221.com.cn?t=52"/></a></span>
                    <span><a id="jsl_speed_stat0" href="http://www.sm00009.com/" target="_blank">知道创宇云安全</a><script src="//static.yunaq.com/static/js/stat/picture_stat.js" charset="utf-8" type="text/javascript"></script></a></span>
                    <!--<span class="br-fl"><a target="_blank" href="https://v.pinpaibao.com.cn/cert/site/?site=www.sm00009.com&at=business" ><img src="https://static.anquan.org/static/outer/image/aqkx_124x47.png"/></a></span>-->
                    <span class="br-fl"><a target="_blank" href="http://www.cn-ecusc.org.cn/cert/aqkx/site/?site=www.sm00009.com" ><img src="https://static.anquan.org/static/outer/image/aqkx_124x47.png"/></a></span>

                </div>
                <p>版权所有 © 深圳尚美时尚产业投资管理有限公司  </p>
                <p>粤ICP备18060985号  投资有风险 入市需谨慎</p>
            </div>
        </div>
    </div>
</footer>
<!--Start Pop-ups-->
<!--遮罩层-->
<!--<div class="mask"></div>-->
<!--确认，取消提示框-->
<!--<div class="popup" id="popup-p-confirm">
    <div class="popup-header group">
        <h2>提示</h2>
    </div>
    <div class="popup-body group">
        <div class="btn-row group">
            <a class="btn btn-pri js-close-popup" href="javascript:popup_confirm_go()">确定</a>
            <a class="btn btn-pri js-close-popup" href="javascript:;">取消</a>
        </div>
    </div>
</div>-->
<!--开设账户提示-->
<!--<div class="popup" id="popup-yeepay">
    <div id="yeepayPopupContent" class="popup-header group">
        <h2>提示</h2>
    </div>
    <div class="popup-body group">
        <div class="btn-row group">
            <a id="yeepayNextLink" target="_blank" class="btn btn-pri" href="javascript:;">开设账户</a>
            <a class="btn btn-pri js-close-popup" href="javascript:;">暂不充值</a>
        </div>
    </div>
</div>-->
<!--是，否提示框-->
<!--<div class="popup" id="popup-yeepay-confirm" >
    <div id="yeepayConfirmContent" class="popup-header group">
        <h2>提示</h2>
    </div>
    <div class="popup-body group">
        <div class="btn-row group">
            <a class="btn btn-pri js-close-popup" href="javascript:;">是</a>
            <a class="btn btn-pri js-close-popup" href="javascript:;">否</a>
        </div>
    </div>
</div>-->
<!--提示信息提示框-->
<!--<div id="popup-p-error" class="popup">
    <div class="popup-header group">
        <h2>提示</h2>
        <a href="javascript:;" class="js-close-popup"><i class="icon icon-close"></i></a>
    </div>
    <div class="popup-body group">
        <p id="popup-p-error-msg">提示信息</p>
    </div>
</div>-->
<!--意见反馈提示框-->
<!--<div class="popup" id="popup-feedback">
    <div class="popup-header group">
        <h2>意见反馈</h2>
        <a href="javascript:;" class="js-close-popup"><i class="icon icon-close"></i></a>
    </div>
    <div class="popup-body group">
        <form action="#">
            <div class="field-row group">
                <label>留言类型：</label>
                <div class="field-val">
                    <select id="留言类型s">
                        <option value="">请选择留言类型</option>
                        <option value="1">交易问题</option>
                        <option value="2">充值/提款问题</option>
                        <option value="3">交易问题</option>
                        <option value="4">我要投诉</option>
                        <option value="5">意见反馈</option>
                        <option value="6">其它</option>
                    </select>
                </div>
            </div>
            <div class="field-row group show-logout">
                <label>手机/邮箱：</label>
                <div class="field-val"><input type="text" class="text" placeholder="请输入手机号或邮箱"></div>
            </div>
            <div class="field-row group">
                <label>&nbsp;</label>
                <div class="field-val">
                    <textarea id="留言内容i" placeholder="请填写留言内容" class="textarea"></textarea>
                </div>
            </div>
            <div class="btn-row group">
                <a class="btn btn-pri" href="javascript:feedback_Insert()">提交</a>
            </div>
        </form>
    </div>
</div>-->
<!--账户登录提示框-->
<!--<div class="popup popup-small" id="popup-user-login">
    <div class="popup-header group">
        <h2>账户登录</h2>
        <a href="javascript:;" class="js-close-popup"><i class="icon icon-close"></i></a>
    </div>
    <div class="popup-body group" style="padding-bottom:10px">
        <div class="group section-form" style="margin: 0px;" id="popup-login-section">
            <div class="form">
                <div class="field-wrapper">
                    <input type="text" class="text" placeholder="用户名/手机号" name="phone" id="popup_user_login_name">
                </div>
                <div id="error_name" class="error-wrapper" style="display:none; margin-top:5px;"><div>用户名不能为空！</div></div>
                <div class="field-wrapper">
                    <input type="password" class="text" placeholder="请输入密码" name="pwd" id="popup_user_login_pwd">
                </div>
                <div id="error_psw" class="error-wrapper" style="display:none; margin-top:5px;"><div>密码不能为空！</div></div>
                <div class="field-wrapper" id="popup-user-login-valid-img" style="display:none;">
                    <input type="text" class="text" style="width:100px; margin-right:5px; float: left;" placeholder="4位验证码" name="txt_valid_code">
                    <img name="img-block" class="captcha-img" alt="">
                    <a name="btn-change-img" style="font-size:13px; line-height:45px;" href="javascript:void(0)">看不清楚？</a>
                </div>
                <div class="error-wrapper" style="display:none; margin-top:5px;"><div>验证码错误！</div></div>

                &lt;!&ndash;<div class="error-wrapper" style="display:none;  margin-top:5px;"><div></div></div>&ndash;&gt;

                <div class="btn-wrapper">
                    <a href="javascript:void(0);" id="popup_user_login_submit" class="btn btn-pri">登录</a>
                </div>
                <div class="link-wrapper group clearfix" style="margin-top:10px;">
                    <a href="/forgot_pass.html" class="f-left">忘记密码</a><a href="/reg.html" class="f-right">马上注册</a>
                </div>
            </div>


        </div>
    </div>
</div>-->
 <!--浮窗 -->
<ul class="side-pannel">
                <li>
                    <a href="http://chat.livechatvalue.com/chat/chatClient/chatbox.jsp?companyID=1037386&configID=75734&jid=5421328761" target="_blank">
                        <i class="icon-qq"></i>
                        <span style="color:#E01923">在线客服</span>
                    </a>
                </li>
    <!-- Live800在线客服图标:默认图标[浮动图标]开始-->
    <div style='display:none;'>
        <a href='http://www.live800.com'>网页聊天</a>
    </div>
    <div style='display:none;'>
        <a href='http://en.live800.com'>livechat</a>
    </div>


    <!-- 在线客服图标:默认图标结束-->
				<li>
					<a href="javascript:void(0);" onclick="jia_qq(910605652)">
						<i class="icon-qq"></i>
						<span style="color:#E01923">客服QQ</span>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);" onclick="jia_qq(810705652)">
						<i class="icon-qq"></i>
						<span style="color:#E01923">财务QQ</span>
					</a>
				</li>

				<li class="wechat">
					<i class="icon-wechat"></i>
					<span style="color:#E01923">公众号</span>
					<div class="wechat" style="display: none;">
						<i class="tb2"><em></em></i>
						 <img src="./public/static/home/img/ewm1.jpg" width="180" height="180" style="margin-top:5px;">
					</div>
				</li>

</ul>

<script language="javascript" src="http://chat.livechatvalue.com/chat/chatClient/floatButton.js?jid=5421328761&companyID=1037386&configID=75734&codeType=custom">
</script>
<!-- Live800默认功能代码: 开始-->
<script language="javascript" src="http://chat.livechatvalue.com/chat/chatClient/monitor.js?jid=5421328761&companyID=1037386&configID=75733&codeType=custom"></script>
<!-- Live800默认功能代码: 结束-->
<script>
    $(".side-pannel>li.wechat").hover(function(){
        $(this).children("div.wechat").show();
    },function(){
        $(this).children("div.wechat").hide();
    });
</script>
<script type="text/javascript">
    var qq_jia = true;
    function jia_qq(data) {
        if (qq_jia) {
            var sUserAgent = navigator.userAgent.toLowerCase();
            var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
            var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
            var bIsMidp = sUserAgent.match(/midp/i) == "midp";
            var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
            var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
            var bIsAndroid = sUserAgent.match(/android/i) == "android";
            var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
            var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
            if (!(bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM)) {
                popwin = window.location.href = "tencent://AddContact/?fromId=45&fromSubId=1&subcmd=all&uin=" + data;
            } else {
                // popwin = window.location.href = "mqqwpa://im/chat?chat_type=wpa&uin=1061525487&version=1&src_type=web&web_src=oicqzone.com"
                popwin = window.location.href = "mqqwpa://im/chat?chat_type=wpa&uin="+data+"&version=1&src_type=web&web_src=bjhuli.com"
                // popwin="mqqwpa://im/chat?chat_type=wpa&uin="+datas;
                // startActivity(new Intent(Intent.ACTION_VIEW, Uri.parse(popwin)));
                // try{
                //     Intent intent =getPackManager().getLaunchIntentForpacKage("com.tencent.mobileqq");
                // }catch(Exception e){
                //     eprintStackTrace();
                //     ToastUtil.makeshortText(LeagueCreateActivity.this,"请检查是否安装QQ");
                // }

            }
        }
        setTimeout("CloseWebPage()", 3000)
    };
    function CloseWebPage() {
        if (navigator.userAgent.indexOf("MSIE") > 0) {
            if (navigator.userAgent.indexOf("MSIE 6.0") > 0) {
                window.opener = null;
                window.close()
            } else {
                window.open('', '_top');
                window.top.close()
            }
        } else if (navigator.userAgent.indexOf("Firefox") > 0) {
            window.location.href = 'about:blank '
        } else {
            window.opener = null;
            window.open('', '_self', '');
            window.close()
        }
    }
</script>

<script src="__STATIC__/libs/jquery-2.2.0/jquery-2.2.0.min.js"></script>
<script src="__STATIC__/home/js/moblie/mui.min.js"></script>
<script src="__STATIC__/home/js/moblie/reg.js"></script>


	<script type="text/javascript">
		
			//支付宝提交
			  $('#submit').click(function() {
				var amount=$("#amount").val();
                  if(amount == '' || amount == 0 || amount == null){
                      alert("请输入充值金额");
                      return;
                  }
				var instructions=$("#instructions").val();
                  if(instructions =='' ||instructions == 0 || instructions == null){
                      alert("请输入说明信息");
                      return;
                  }

				var alipay=$("#alipay").val();
                  if(alipay =='' ||alipay == 0 || alipay == null){
                      alert("请输入使用的支付宝账号");
                      return;
                  }
				$.ajax({
					type: "post",
					url: "<?php echo url('index/Ucenter/getInformationAlipay'); ?>",
					dataType: 'JSON',
					data:{"amount":amount,"instructions":instructions,"alipay":alipay},

					success: function(data) {
					    if(data.status ==1){
                            alert(data.info);
                            setTimeout(function () {
                                window.location.href= './index.html';
                            },2000);
						}else {
                            alert('提交失败');
						}


					},
                    error: function(data) {
                    }
				});
			  });
//			  微信
			  
			$('#wxsubmit').click(function() {
                          var amount=$("#wxamount").val();
                          if(amount == '' || amount == 0 || amount == null){
                              alert("请输入充值金额");
                              return;
                          }
                          var instructions=$("#wxinstructions").val();
                          if(instructions =='' ||instructions == 0 || instructions == null){
                              alert("请输入说明信息");
                              return;
                          }

                          var alipay=$("#wxalipay").val();
                          if(alipay =='' ||alipay == 0 || alipay == null){
                              alert("请输入使用的微信账号");
                              return;
                          }
                          $.ajax({
                              type: "post",
                              url: "<?php echo url('index/Ucenter/getInformationWeChat'); ?>",
                              dataType: 'JSON',
                              data:{"amount":amount,"instructions":instructions,"alipay":alipay},

                              success: function(data) {
                                  if(data.status ==1){
                                      alert(data.info);
                                      setTimeout(function () {
                                          window.location.href= './index.html';
                                      },2000);
                                  }else {
                                     alert('提交失败');
                                  }


                              },
                              error: function(data) {
                              }
                          });
					  });

			$("#on_buton").click(function () {
                var pay_money = $("#paymoney").val();
                if(pay_money == '' || pay_money == 0 || pay_money == null){
                    alert("请输入充值金额");
                    return;
                }
                var beizhu =$('#remark').val();
                var bank_num =$('#bank_num').val();
                if(bank_num =='' ||bank_num == 0 || bank_num == null){
                    alert("请输入充值的银行卡号");
                    return;
				}

                $(function(){
                    $.ajax({
                        type:"post",
                        url:"<?php echo url('index/Ucenter/bank_transfer'); ?>",
                        data:{
                            'pay_money':pay_money,
							'beizhu':beizhu,
							'bank_num':bank_num
						},
                        dataType:'json',
                        success:function(data){
                            alert(data.msg+'请等待审核');
                            setTimeout(function () {
                                window.location.href= './index.html';
                            },2000);
                            console.log('成功');
                        },
                        error:function (data) {
                            console.log("错误");
                        }
                    })
                });

            });
		
	</script>

</body>
</html>
