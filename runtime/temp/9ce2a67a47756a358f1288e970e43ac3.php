<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"D:\phpStudy\WWW\feichangcelue/application/index\view\ucenter\mobile\wechatpay.html";i:1539064450;}*/ ?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>尚牛在线</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link href="../public/static/home/css/mui.min.css" rel="stylesheet" />
		<link href="../public/static/home/css/moblie/mobliecom.css" rel="stylesheet" />
	</head>
<!--个人中心-充值-支付宝-->
	<body class="quick_body payment_body">
		<header class="bg_fff mui-bar mui-bar-nav">
		    <a class="color_red mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
		    <h1 class="mui-title">微信转账</h1>
		</header>
		<div class="mui-content">
		  <div class="wx_top">
		  	<p class="color_red wx_p1">请扫码充值，并务必在转账备注中填写注册手机号 这样方便我们多重信息确认你的汇款</p>
		  	<img class="wx_img" src="../public/static/home/img/wxpay.png"/>
		  	<p class="wx_p2">请用微信扫描二维码,加好友</p>
		  	<p class="wx_p3">转账成功后，请拨打客服热线4001665652以便我们及时帮您处理</p>
			<p class="wx_p3">账号：尚牛在线商贸有限公司</p>
			<div class="ball ball_l"></div>
			<div class="ball ball_r"></div>
		  </div>
		</div>




		<!---js---->
		<script src="../public/static/home/js/moblie/mui.min.js"></script>
		<script type="text/javascript">
			mui.init({
				swipeBack: true //启用右滑关闭功能
			})
		</script>
	</body>
</html>
