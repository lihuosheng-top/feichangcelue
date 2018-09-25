<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"D:\phpStudy\PHPTutorial\WWW\feichangcelue/application/index\view\index\index.html";i:1536637716;s:80:"D:\phpStudy\PHPTutorial\WWW\feichangcelue/application/index\view\public\top.html";i:1536287824;s:83:"D:\phpStudy\PHPTutorial\WWW\feichangcelue/application/index\view\public\footer.html";i:1536287824;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body class="index_body">
<title>首页</title>

<meta name="keywords" content="<?php echo config('web_site_keywords'); ?>">
<meta name="description" content="<?php echo config('web_site_description'); ?>">
<link rel="stylesheet" type="text/css" href="./public/static/home/css/common.css"/>
<!--头部-->
<header class="ml_header br-w100">
    <div class="h_top br-w100">
        <div class="w1024 br-clearfix">
            <div class="h_topL br-fl">
                服务热线：<?php echo $phone; ?>
            </div>


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
                <a href="/"><img src="./public/static/home/img/moblie/fcml2.png" style="height:80px; " /></a>
            </div>
            <div class="h_botR br-fr">
                <ul class="br-clearfix" id="menu-ul">
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
                </ul>
            </div>
        </div>
    </div>
</header>


<script src="./public/static/libs/jquery-2.2.0/jquery-2.2.0.min.js"></script>
<script src="./public/static/home/js/general.js"></script>

<script>
    //自动选中active
    $(function(){
        var menuArr = [];
        menuArr[0] = ["index.html"  ];
        menuArr[1] = ["buy.html", "sell.html", "history.html" ];
        menuArr[2] = ["freetrial.html", "freetrialSell.html", "freetrialHistory.html"  ];
        menuArr[3] = ["mobile.html",  ];
        menuArr[4] = [ "guild.html" ,"help.html" ];
        for(var i = 0 ; i < menuArr.length; i++ ){
            for(var j = 0 ; j < menuArr[i].length; j++){
                if(location.href.indexOf(menuArr[i][j]) > 0){
                    $("#menu-ul > li a").removeClass("active");
                    $("#menu-ul > li").eq(i).find("a").eq(0).addClass("active");
                    $("#menu-ul > li").eq(i).find("a").eq(j+1).addClass("active");
                    //console.log(i+'------'+j);
                    return;
                }
            }
        }


    });


</script>
<link href="./public/static/libs/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="./public/static/home/css/index.css"/>
<link rel="stylesheet" type="text/css" href="./public/static/home/css/buy.css"/>
<link rel="stylesheet" type="text/css" href="__STATIC__/home/css/index_information.css"/>
<!--banner-->
<div class="banner_login br-w100">
    <div class="bBanner br-w100">

        <!--<div class="w1024">-->
                <!--<div class="login_main" <?php if($_SESSION['member'] != ''): ?> style="display: none;" <?php endif; ?>>-->
                <!--<p>用户登录</p>-->
                <!--<from>-->
                    <!--<input type="text" name="" id="username" placeholder="用户名"/>-->
                    <!--<div id="err1" class="err">请输入正确用户名</div>-->
                    <!--<input type="password" name="" id="password" placeholder="密码"/>-->
                    <!--<div id="err2" class="err">请输入正确密码</div>-->
                    <!--<div class="login_box">-->
                        <!--<a href="./index.html" class="btn_login">登录</a>-->
                        <!--<a href="./reg.html" class="btn_reg">注册</a>-->
                    <!--</div>-->
                    
                <!--</from>-->
            <!--</div>-->
        <!--</div>-->

        <!--轮播图-->
        <div class="home_banner">
            <div id="myCarousel" class="carousel slide">
                <!-- 轮播（Carousel）指标 -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- 轮播（Carousel）项目 -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="carImg"></div>
                    </div>
                    <div class="item">
                        <div class="carImg2"></div>
                    </div>
                    <div class="item">
                        <div class="carImg3"></div>
                    </div>
                </div>
                <!-- 轮播（Carousel）按钮导航 -->
                <a class="carousel-control left" href="#myCarousel"
                   data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#myCarousel"
                   data-slide="next">&rsaquo;</a>
            </div>
        </div>

    </div>
</div>
<!--点买A股-->
<div class="AS_box br-w100">
    <!--3个盒子-->
    <div class="three_box w1024 br-clearfix">
        <div class="three_item br-fl"><a href="javascript:void(0);" style="display: block;"><img src="./public/static/home/img/p (3).png"/></a>
            <p class="tit">一分钟了解尚牛在线</p>
            <p class="tib">全新的投资人策略匹配平台</p>
        </div>
        <div class="three_item br-fl"><a href="javascript:void(0);" style="display: block; height: 192.02px;"><img src="./public/static/home/img/p (2).png"/></a>
            <p class="tit">用心服务</p>
            <p class="tib">一对一专业客服（电话 微信 QQ）</br>全程指导</p>
        </div>
        <div class="three_item br-fl"><a href="javascript:void(0);" style="display: block;"><img src="./public/static/home/img/p (1).png"/></a>
            <p class="P_block" style="float: left;">累计匹配策略 </br><span><?php echo $count + 256; ?></span>条</p>
            <p class="P_block" style="float: right;">累计盈利</br><span><?php echo round($earnSum + 5758000, 2 ); ?></span>元</p>
        </div>
    </div>
    <div class="w pz-type-swith" style="display: none;">
    	<ul  class="userMenu">
        <li  data-id="index_informatiom_one"><a class="on dianji current">免息配资</a></li>
        <li data-id="index_informatiom_two"><a class=" dianji" >按月配资</a></li>
        <li data-id="index_informatiom_three"><a class=" dianji" >按天配资</a></li>
    </ul>
    <div class="pz-day-content-all" id="content">
    </div>
    </div>
    <div class="AS_box_cont w1024 br-text-center">
        <h1 class="br-ml-title">POINT TO BUY A SHARES</h1>
        <div class="br-ml-line"></div>
        <p class="br-ml-bt">点买A股</p>
        <div class="AS_contImg br-clearfix">
            <div class="three_item br-fl">
                <div class="ASitem_top"><img src="./public/static/home/img/01.png"/></div>
                <div class="ASitem_bot br-clearfix">
                    <span class="ASbot_l br-fl"><img src="./public/static/home/img/num (1).png"/></span>
                    <p class="ASbot_r br-fl">点买人只需冻结最低1250元履<br>约保证金支付45元交易综合费</p>
                </div>
            </div>
            <div class="three_item br-fl">
                <div class="ASitem_top"><img src="./public/static/home/img/02.png"/></div>
                <div class="ASitem_bot br-clearfix">
                    <span class="ASbot_l br-fl"><img src="./public/static/home/img/num (2).png"/></span>
                    <p class="ASbot_r br-fl">即刻提交谋略系统智能匹<br>配投资人，投资人实施买入</p>
                </div>
            </div>
            <div class="three_item br-fl">
                <div class="ASitem_top"><img src="./public/static/home/img/03.png"/></div>
                <div class="ASitem_bot br-clearfix">
                    <span class="ASbot_l br-fl"><img src="./public/static/home/img/num (3).png"/></span>
                    <p class="ASbot_r br-fl">谋略到期后单笔1万元交<br>易本金获得90%交易盈利</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--获得更高收益-->
<div class="highYields br-w100">
    <div class="w1024 br-clearfix">
        <div class="high_l br-fl ">
            <h1>获得更高收益</h1>
            <p>提供投资谋略金和投资人分享高额回报</p>
            <!--<a href="javascript:void(0);" class="">进入点买A股</a>-->
        </div>
        <div class="high_r br-fr ">
            <!--<table>
                <?php if(is_array($buyList) || $buyList instanceof \think\Collection || $buyList instanceof \think\Paginator): $i = 0; $__LIST__ = $buyList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td class="nickname"><?php echo $vo['mobile']; ?></td>
                    <td class="time"><?php echo $vo['time']; ?></td>
                    <td class="celue">尚牛</td>
                    <td class="stockNumber"><?php echo $vo['stockName']; ?>[<?php echo $vo['stockCode']; ?>]</td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </table>-->
            <img src="./public/static/home/img/ewm1.jpg" width="180" height="180" style="margin-top:5px;">
        </div>
    </div>
</div>
<!--5重保障-->
<div class="guarantee br-w100">
    <div class="w1024 br-text-center">
        <h1 class="br-ml-title">WE WILL ENSURE YOUR BEST INTEREST</h1>
        <div class="br-ml-line"></div>
        <p class="br-ml-bt">5重保障最大力度保障您的利益</p>
        <div class="guarantee_botBox br-clearfix">
            <div class="guarantee_item bg1">网站安全</div>
            <div class="guarantee_item bg1">风控<br>保险体质</div>
            <div class="guarantee_item bg1">第三方<br>资金托管</div>
            <div class="guarantee_item bg1">资金<br>安全保障</div>
            <div class="guarantee_item bg1">和投资人<br>收益共享<br>风险共担</div>

        </div>
    </div>
</div>
<!--点买人盈利亏损-->
<div class="PAL br-w100 br-text-center">
    <div class="w1024 br-clearfix">
        <div class="PAL_item br-fl">
            <div class="item_img"></div>
            <p>点买人获得90%的交易盈利，系统自动<br>划入点买人的尚牛在线账户</p>
        </div>
        <div class="PAL_item br-fr">
            <div class="item_img"></div>
            <p>点买人承担冻结履约保证金以内的亏损<br>超出部分由投资人承担</p>
        </div>
    </div>
</div>
<!--service-->
<div class="service br-text-center br-w100">
    <div class="w1024">
        <h1 class="br-ml-title">OUR SERVICE</h1>
        <div class="br-ml-line"></div>
        <p class="br-ml-bt">我们的服务</p>
        <div class="service_box br-clearfix">
            <h1>A股点买去<span>尚牛在线</span></h1>
            <p class="sp1">“股票点买最安全平台”</p>
            <p class="sp2">急速撮合<br>仅需填写简单资料<br>提交谋略<br>就能马上提交投资人赚钱</p>
            <!--<a href="javascript:void(0);">立即注册</a>-->
        </div>
    </div>
</div>
<!--微信交易-->
<div class="weChatDeal br-w100">
    <div class="w1024">
        <div class="weChatDeal_box">
            <h1>微信端交易更加方便</span></h1>
            <p class="sp1">“下单 持仓 结算 一目了然”</p>
            <p class="sp2">更多优惠活动等着您</p>
        </div>
    </div>
</div>
<!--合作伙伴-->
<div class="companion br-w100 br-text-center">
    <div class="w1024">
        <h1 class="br-ml-title">PARTNERS</h1>
        <div class="br-ml-line"></div>
        <p class="br-ml-bt">合作伙伴</p>
        <div class="companion_box br-clearfix">
            <div class="cp_item"></div>
            <div class="cp_item"></div>
            <div class="cp_item"></div>
            <div class="cp_item"></div>
            <div class="cp_item"></div>
            <div class="cp_item"></div>
            <div class="cp_item"></div>
            <div class="cp_item"></div>
        </div>
    </div>
</div>

<!--底部-->
<footer class="br-w100">
    <div class="footer_top">
        <a href="./company.html">关于我们</a>
        <a href="./contact.html">联系我们</a>
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
                    <span><a target="_blank" href="https://credit.cecdc.com"><img src="./public/static/home/img/cxwz.jpg"/></a></span>
                    <span class="br-fl"><a target="_blank" href="https://v.pinpaibao.com.cn/cert/site/?site=www.sm00009.com&at=business" ><img src="https://static.anquan.org/static/outer/image/aqkx_124x47.png"/></a></span>
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
                        <span>在线客服</span>
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
						<span>客服QQ</span>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);" onclick="jia_qq(910705652)">
						<i class="icon-qq"></i>
						<span>财务QQ</span>
					</a>
				</li>

				<li class="wechat">
					<i class="icon-wechat"></i>
					<span>公众号</span>
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

<script src="./public/static/libs/jquery-2.2.0/jquery-2.2.0.min.js"></script>
<script src="./public/static/home/js/moblie/mui.min.js"></script>
<script src="./public/static/home/js/moblie/reg.js"></script>


<!--认证银行卡-提示绑定-->
<div class="popup" id="popup-id-verify">
    <div class="popup-header group">
        <h2>认证银行卡</h2>
        <a href="javascript:;" class="js-close-popup"><i class="icon icon-close"></i></a>
    </div>
    <div class="popup-body group">
        <!--<div class="field-row group" style="text-align:center">
            <ol class="popup-note">
                <li style="text-align:left;">提现和免费体验前必须先绑定一张银行卡</li>
                <li style="text-align:left;">请务必认真填写真实资料</li>
                <li style="text-align:left;">银行卡采用实名认证，一个身份证只能绑定一个账号</li>
                <li style="text-align:left;">如遇到问题，请联系客服 <label id="m_basic_mobile">021-80321818</label></li>
            </ol>
            <p>为了保障您的账户安全，请先绑定银行卡</p>
        </div>-->
        <div class="btn-row group">
            <a class="btn btn-pri" href="./ucenter/bankCards.html">去绑定</a>
            <a class="btn btn-pri js-close-popup" href="javascript:;">暂不绑定</a>
        </div>
    </div>
</div>
<!--实名认证-->
<div class="popup" id="popup-realname-auth">
    <div class="popup-header group">
        <h2>实名认证</h2>
        <a href="javascript:;" class="js-close-popup"><i class="icon icon-close"></i></a>
    </div>
    <div class="popup-body group">
        <!--<div class="field-row group" style="text-align:center">
            <ol class="popup-note">
                <li style="text-align:left;">一个身份证对应一个账号</li>
                <li style="text-align:left;">如遇到问题，请联系客服 <label id="m_basic_mobile">021-80321818</label></li>
            </ol>
            <p>为了保障您的账户安全，请先进行实名认证</p>
        </div>-->
        <div class="field-row group">
            <label>真实姓名：</label>
            <div class="field-val"><input id="姓名i" type="text" class="text"></div>
        </div>
        <div id="zsxm_err1" class="error-wrapper" style="margin-left:100px; display:none"><div><i class="icon icon-x-altx-alt"></i>未填写姓名</div></div>
        <div class="field-row group">
            <label>身份证号：</label>
            <div class="field-val">
                <div class="field-val">
                    <input id="身份证i" type="text" class="text">
                </div>
            </div>
        </div>
        <div id="sfzh_err1" class="error-wrapper" style="margin-left:100px; display:none"><div><i class="icon icon-x-altx-alt"></i>请填写准确的身份证</div></div>
        <div class="btn-row group">
            <a id="user_UpdateSelfIdA" class="btn btn-pri" href="javascript:void(0)">确认</a>
            <a class="btn btn-sec js-close-popup" href="javascript:;">取消</a>
        </div>
    </div>
</div>
<script src="./public/static/libs/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="./public/static/home/js/index.js"></script>
<script>
    (function(){
        $.ajax({
            type:"post",
            url:"<?php echo url('index/index/pc_broadcast'); ?>",
            dataType:'json',
            success:function(data){
//                console.log(data);
                var img_car =data.data[0].src;
                $('.carImg').css('background','url('+'"'+img_car+'"'+')');
                var img_car2 =data.data[1].src;
                $('.carImg2').css('background','url('+'"'+img_car2+'"'+')');
                var img_car3 =data.data[2].src;
                $('.carImg3').css('background','url('+'"'+img_car3+'"'+')');
            },
            error:function (data) {
                console.log("错误");
            }
        });
    })();
</script>
<!--局部刷新-->
<script type="text/javascript">
 $(".userMenu").on("click", "li", function(){
// 	console.log($(this).children("a"));
        $(this).children("a").addClass("on")
        $(this).siblings().children("a").removeClass("on");
        var sId = $(this).data("id");  //获取data-id的值
        window.location.hash = sId;  //设置锚点
        loadInner(sId);
    });
    function loadInner(sId){
        var sId = window.location.hash;
        var pathn, i;
        switch(sId){
            case "#index_informatiom_one": pathn = "index_information.html"; i = 0; break;
　　　　　　　case "#index_informatiom_two": pathn = "index_information_first.html"; i = 1; break;
            case "#index_informatiom_three": pathn = "index_information_second.html"; i = 2; break;
　　　　　　  default: pathn = "index_information.html"; i = 0; break;
        }
        $("#content").load(pathn); //加载相对应的内容
        $(".userMenu li").eq(i).addClass("current").siblings().removeClass("current"); //当前列表高亮
    }
    var sId = window.location.hash;
    loadInner(sId);
    
    

</script>

</body>
</html>