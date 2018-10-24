<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"D:\phpStudy\WWW\feichangcelue/application/index\view\index\index.html";i:1540347593;s:68:"D:\phpStudy\WWW\feichangcelue/application/index\view\public\top.html";i:1539832463;s:77:"D:\phpStudy\WWW\feichangcelue/application/index\view\public\PcPublicFoot.html";i:1540193277;s:71:"D:\phpStudy\WWW\feichangcelue/application/index\view\public\footer.html";i:1539593722;}*/ ?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">

	</head>

	<body class="index_body">
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
		<link href="__STATIC__/libs/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="__STATIC__/home/css/index.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/home/css/buy.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/home/css/index_information.css" />
		<style type="text/css">
			.item a {
				display: block;
				overflow: hidden;
			}
			.bd_cid{
				width: 300px;
				white-space: nowrap;
				overflow: hidden;
				text-overflow: ellipsis;
				display: inline-block;
			}
			/*隐藏*/
			/*.pz-type-swith{*/
			/*display: none;*/
			/*}*/
		</style>
		<style type="text/css">

		</style>
		<!--banner-->
		<div class="banner_login br-w100">
			<div class="bBanner br-w100">

				<div class="w1024">
					<div class="login_main" <?php if($_SESSION['member'] != ''): ?> style="display: none;" <?php endif; ?>>
						<p>用户登录</p>

						<input type="text" name="" id="username" placeholder="用户名" />
						<div id="err1" class="err">请输入正确用户名</div>
						<input type="password" name="" id="password" placeholder="密码" />
						<div id="err2" class="err">请输入正确密码</div>
						<a href="./forgot_pass.html" style="color:#E01923 ">忘记密码</a>
						<div class="login_box">
							<a href="javascript:viod()" class="btn_login">登录</a>
							<a href="./reg.html" class="btn_reg">注册</a>
						</div>

					</div>
				</div>

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
								<a href="">
									<div class="carImg"></div>
								</a>

							</div>
							<div class="item">
								<a href="">
									<div class="carImg2"></div>
								</a>

							</div>
							<div class="item">
								<a href="">
									<div class="carImg3"></div>
								</a>

							</div>
						</div>
						<!-- 轮播（Carousel）按钮导航 -->
						<a class="carousel-control left" href="#myCarousel" data-slide="prev" style="z-index: 99999;">&lsaquo;</a>
						<a class="carousel-control right" href="#myCarousel" data-slide="next" style="z-index: 99999;">&rsaquo;</a>
					</div>
				</div>

			</div>
		</div>
		<!--点买A股-->
		<div class="AS_box br-w100">
			<!--3个盒子-->
			<div class="three_box w1024 br-clearfix">
				<div class="three_item br-fl">
					<a href="javascript:void(0);" style="display: block;"><img src="./public/static/home/img/p (3).png" /></a>
					<p class="tit">一分钟了解尚牛在线</p>
					<p class="tib">全新的投资人策略匹配平台</p>
				</div>
				<div class="three_item br-fl">
					<a href="javascript:void(0);" style="display: block; height: 192.02px;"><img src="./public/static/home/img/p (2).png" /></a>
					<p class="tit">用心服务</p>
					<p class="tib">一对一专业客服（电话 微信 QQ）</br>全程指导</p>
				</div>
				<div class="three_item br-fl">
					<a href="javascript:void(0);" style="display: block;"><img src="./public/static/home/img/p (1).png" /></a>
					<p class="P_block" style="float: left;">累计匹配策略 </br><span><?php echo $count + 502458; ?></span>条</p>
					<p class="P_block" style="float: right;">累计盈利</br><span><?php echo round($earnSum + 2662534560, 2 ); ?></span>元</p>
				</div>
			</div>
			<div class="w pz-type-swith" style="">
				<ul class="userMenu">
					<li data-id="index_informatiom_one">
						<a class="on dianji current">免息配资</a>
					</li>
					<li data-id="index_informatiom_two">
						<a class=" dianji">按月配资</a>
					</li>
					<li data-id="index_informatiom_three">
						<a class=" dianji">按天配资</a>
					</li>
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
						<div class="ASitem_top"><img src="./public/static/home/img/01.png" /></div>
						<div class="ASitem_bot br-clearfix">
							<span class="ASbot_l br-fl"><img src="./public/static/home/img/num (1).png"/></span>
							<p class="ASbot_r br-fl">点买人只需冻结最低1250元履<br>约保证金支付45元交易综合费</p>
						</div>
					</div>
					<div class="three_item br-fl">
						<div class="ASitem_top"><img src="./public/static/home/img/02.png" /></div>
						<div class="ASitem_bot br-clearfix">
							<span class="ASbot_l br-fl"><img src="./public/static/home/img/num (2).png"/></span>
							<p class="ASbot_r br-fl">即刻提交谋略系统智能匹<br>配投资人，投资人实施买入</p>
						</div>
					</div>
					<div class="three_item br-fl">
						<div class="ASitem_top"><img src="./public/static/home/img/03.png" /></div>
						<div class="ASitem_bot br-clearfix">
							<span class="ASbot_l br-fl"><img src="./public/static/home/img/num (3).png"/></span>
							<p class="ASbot_r br-fl">谋略到期后单笔1万元交<br>易本金获得90%交易盈利</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="wrapper">
			<!--行情中心-->
			<div class="pb4">
				<div class="index_mod4">
					<div class="mod_right" style="width: 300px;">
						<h3 class="right-tit">行情中心</h3>
						<div class="s_menu" id="menu_szzs">
							<ul>
								<li sv="0" class="current">
									<a>上证指数</a>
								</li>
								<li sv="1">
									<a>深证指数</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="mod_left">
						<div class="hq_con">
							<div class="hq_txt" id="a0001_bnt">
								<a class="cur" sv="0" href="javascript:;">分时线</a>
								<a sv="1" href="javascript:;">日K线</a>
								<a sv="2" href="javascript:;">周K线</a>
								<a sv="3" href="javascript:;">月K线</a>
							</div>
							<div class="hq_img">
								<img src="http://image.sinajs.cn/newchart/min/n/sh000001.gif" width="500" height="300" id="a0001_img">
							</div>
						</div>
						<div class="hq_con" style="display:none;">
							<div class="hq_txt" id="s0001_bnt">
								<a class="cur" sv="0" href="javascript:;">分时线</a>
								<a sv="1" href="javascript:;">日K线</a>
								<a sv="2" href="javascript:;">周K线</a>
								<a sv="3" href="javascript:;">月K线</a>
							</div>
							<div class="hq_img">
								<img src="http://image.sinajs.cn/newchart/min/n/sz399001.gif" width="450" height="320" id="s0001_img">
							</div>
						</div>
						<div class="hq_sv" style="width: 358px;">
							<div class="hq_st">
								<div class="hq_a1" id="a0001_v1">
									<li class="sv" style="color: rgb(255, 0, 0);">2550.47</li>
									<li class="ico"></li>
									<li class="icon-right">64.05</li>
									<li class="icon-right">2.58%</li>
								</div>
								<div class="hq_aq1_xq" id="a0001_detail">
									<p>
										<span> <span class="xq-color">今开：</span>
										<font color="#237c02">2460.08</font>
										</span>
										<span><span class="xq-color">成交量：</span>
										<font color="#237c02">1.47亿手</font>
										</span>
										<span><span class="xq-color">振幅：</span>
										<font color="#007cc8">2.58%</font>
										</span>
										<span><span class="xq-color">最高：</span>
										<font color="#237c02">2553.39</font>
										</span>
										<span><span class="xq-color">成交额：</span>
										<font color="#007cc8">2449.20</font>
										</span>
										<span><span class="xq-color">昨收：</span>
										<font color="#007cc8">1300.96亿</font>
										</span>
										<span><span class="xq-color">总市值：</span>
										<font color="#007cc8">2486.42</font>
										</span>
									</p>
								</div>
								<div class="gupiao">
									<table id="gpInfo" width="100%">
										<colgroup>
											<col style="width:80px">
											<col style="width:100px">
											<col style="width:70px">
											<col>
										</colgroup>
										<tbody>
											<tr class="title">
												<td style="color:#ff3646">领涨板块</td>
												<td></td>
												<td>
													<a style="color:#237c02">领跌板块</a>
												</td>
												<td class="text-right"></td>
											</tr>
											<tr>
												<td>
													<a>券商</a>
												</td>
												<td style="color:#ff3646">
													+1.32%
												</td>
												<td>
													<a>券商</a>
												</td>
												<td class="text-right" style="color:#237c02">
													-2.36%
												</td>
											</tr>
											<tr>
												<td>
													<a>环保行业</a>
												</td>
												<td style="color:#ff3646">
													+0.17%
												</td>
												<td>
													<a>环保行业</a>
												</td>
												<td class="text-right" style="color:#237c02">
													-2.28%
												</td>
											</tr>
											<tr>
												<td>
													<a>次新股</a>
												</td>
												<td style="color:#ff3646">
													+0.12%
												</td>
												<td>
													<a>次新股</a>
												</td>
												<td class="text-right" style="color:#237c02">
													-2.10%
												</td>
											</tr>
											<tr>
												<td>
													<a>酿酒行业</a>
												</td>
												<td style="color:#ff3646">
													+0.12%
												</td>
												<td>
													<a>酿酒行业</a>
												</td>
												<td class="text-right" style="color:#237c02">
													-2.10%
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--行情中心 end-->
			<div class="pb6">
		<!-- 		<div class="pb6-l">
					<ul>
						<li>
							<h3>交易软件下载</h3>
							<div class="det">新用户注册并实名认证后请下载安装此交易软件</div>
							<div class="icon icon-left"></div>
							<a href="/bangzhu/downloaded.html" target="_blank">电脑版下载</a>
						</li>
					</ul>
				</div> -->
				<div class="pb6-r">
					<div class="gonggaoBox">
						<div class="hd">
							<span id="hd-one">股票资讯 <a href="#" target="_blank" class="gg">更多...</a></span>
							<span id="hd-two">网站公告 <a href="#" target="_blank" class="gg">更多...</a></span>
						</div>
						<?php if(!empty($news_informations)): ?>
						<div class="bd">


							<span id="bd-one">
								<?php if(is_array($news_informations) || $news_informations instanceof \think\Collection || $news_informations instanceof \think\Paginator): $i = 0; $__LIST__ = $news_informations;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
								<li>
									<i class="dw_Cbg "></i>
									<span class="date"><?php echo $vo['createTime']; ?></span>
									<a id="bd_colors" class="bd_cid" data-id="bd_colors_<?php echo $vo['id']; ?>" href="#javascript:void(0)" >■ 【尚牛在线】<?php echo $vo['title']; ?></a>
							</li>
										<?php endforeach; endif; else: echo "" ;endif; ?>

							</span>

							<span id="bd-two">
								<?php if(is_array($news_informations_tow) || $news_informations_tow instanceof \think\Collection || $news_informations_tow instanceof \think\Paginator): $i = 0; $__LIST__ = $news_informations_tow;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?>
                            <li><i class="dw_Cbg  "></i><span class="date"><?php echo $value['createTime']; ?></span>
							<a id="bd_colors" href="#javascript:void(0)" class="bd_cid"  data-id="bd_colors_<?php echo $value['id']; ?>" >■ <?php echo $value['title']; ?></a>
							</li>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</span>

						</div>
						<?php endif; ?>
					</div>
					<!--切换 end-->
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
		<!-- <div class="PAL br-w100 br-text-center">
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

		<!--微信交易-->
		<!-- <div class="weChatDeal br-w100">
			<div class="w1024">
				<div class="weChatDeal_box">
					<h1>微信端交易更加方便</span></h1>
					<p class="sp1">“下单 持仓 结算 一目了然”</p>
					<p class="sp2">更多优惠活动等着您</p>
				</div>
			</div>
		</div> -->
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
<script src="__STATIC__/static/home/js/moblie/mui.min.js"></script>
<script src="__STATIC__/static/home/js/moblie/reg.js"></script>


		<!--认证银行卡-提示绑定-->
		<div class="popup" id="popup-id-verify">
			<div class="popup-header group">
				<h2>认证银行卡</h2>
				<a href="javascript:;" class="js-close-popup"><i class="icon icon-close"></i></a>
			</div>
			<div class="popup-body group">
				<!--<div class="field-row group" style="text-align:center">
            <ol class="popup-note">
                <li style="text-align:left;">提现和免息体验前必须先绑定一张银行卡</li>
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
				<div id="zsxm_err1" class="error-wrapper" style="margin-left:100px; display:none">
					<div><i class="icon icon-x-altx-alt"></i>未填写姓名</div>
				</div>
				<div class="field-row group">
					<label>身份证号：</label>
					<div class="field-val">
						<div class="field-val">
							<input id="身份证i" type="text" class="text">
						</div>
					</div>
				</div>
				<div id="sfzh_err1" class="error-wrapper" style="margin-left:100px; display:none">
					<div><i class="icon icon-x-altx-alt"></i>请填写准确的身份证</div>
				</div>
				<div class="btn-row group">
					<a id="user_UpdateSelfIdA" class="btn btn-pri" href="javascript:void(0)">确认</a>
					<a class="btn btn-sec js-close-popup" href="javascript:;">取消</a>
				</div>
			</div>
		</div>
		<div class="baoshang" data-id ="1">
			<i class="bsc" onclick="t()"></i>
			<div style="clear:both;"></div>
			<div style="width: 90%; margin: 0 auto;">
				<p style="text-align:center;"><strong style="color:rgb(255, 0, 0);font-family:Microsoft Yahei;font-size:20px;">紧急通知</strong></p>
				<p style="text-align:center;">&nbsp;</p>
				<p><strong style="font-size:18px;color:rgb(102, 102, 102);font-family:Microsoft Yahei;"><span style="font-size:16px;">&nbsp; &nbsp; &nbsp; &nbsp;尊敬的会员！</span></strong><strong style="color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 18px;"><span style="font-size:16px;">尚牛在线 新会员 关注尚牛在线公众号截图找客服领18元，注册送58元，充100元免息配资固定是500元20天，赢利7:3分，你得7我得3，输的算我们的，详询客服</span></strong></p>
				<p><span style="color:rgb(0, 0, 0);font-family:Microsoft Yahei, Arial;font-size:14px;background-color:rgb(245, 246, 247);">&nbsp; &nbsp; &nbsp; &nbsp; </span><br style="color:rgb(0, 0, 0);font-family:Microsoft Yahei, Arial;font-size:14px;background-color:rgb(245, 246, 247);"><span style="color:rgb(0, 0, 0);font-family:Microsoft Yahei, Arial;font-size:14px;background-color:rgb(245, 246, 247);"></span></p>
			</div>
		</div>
		<script src="__STATIC__/libs/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
		<script src="__STATIC__/home/js/index.js"></script>
		<script>
    function t(){
        $(".baoshang").hide(200);
    }

</script>
		<script>
			(function() {
				var  baoshang=$(".baoshang").data("id");
				// console.log(baoshang);
				if(baoshang==0){
					$(".baoshang").hide();
				}
// 				else{
// 					$(".baoshang").show();
// 				}
				// 紧急通知传值
// 						$.ajax({
// 									type: "post",
// 									url: "<?php echo url('index/index/pc_broadcast'); ?>",
// 									dataType: 'json',
// 									success: function(data) {
// 									if(data)
// 									},
// 									error: function(data) {
// 										console.log("错误");
// 									}
// 								});
				$.ajax({
					type: "post",
					url: "<?php echo url('index/index/pc_broadcast'); ?>",
					dataType: 'json',
					success: function(data) {
						//                console.log(data);
						//              console.log($(".item a")[0]);
						var img_car = data.data[0].src;
						var img_href = data.data[0].href;

						$('.carImg').css('background', 'url(' + '"' + img_car + '"' + ')');
						$(".item a")[0].href = img_href;
						var img_href2 = data.data[1].href;
						var img_car2 = data.data[1].src;
						$('.carImg2').css('background', 'url(' + '"' + img_car2 + '"' + ')');
						$(".item a")[1].href = img_href2;
						var img_href3 = data.data[2].href;
						var img_car3 = data.data[2].src;
						$('.carImg3').css('background', 'url(' + '"' + img_car3 + '"' + ')');
						$(".item a")[2].href = img_href3;

					},
					error: function(data) {
						console.log("错误");
					}
				});
				
			})();
		</script>
		<!--局部刷新-->
		<script type="text/javascript">
			$(".userMenu").on("click", "li", function() {
				// 	console.log($(this).children("a"));
				$(this).children("a").addClass("on")
				$(this).siblings().children("a").removeClass("on");
				var sId = $(this).data("id"); //获取data-id的值
				window.location.hash = sId; //设置锚点
				loadInner(sId);
			});

			function loadInner(sId) {
				var sId = window.location.hash;
				var pathn, i;
				switch(sId) {
					case "#index_informatiom_one":
						pathn = "index_information.html";
						i = 0;
						break;　　　　　　　
					case "#index_informatiom_two":
						pathn = "index_information_first.html";
						i = 1;
						break;
					case "#index_informatiom_three":
						pathn = "index_information_second.html";
						i = 2;
						break;　　　　　　
					default:
						pathn = "index_information.html";
						i = 0;
						break;
				}
				$("#content").load(pathn); //加载相对应的内容
				$(".userMenu li").eq(i).addClass("current").siblings().removeClass("current"); //当前列表高亮
			}
			var sId = window.location.hash;
			loadInner(sId);
		</script>

	

<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?f571b55302a951627ab98145b99cdaab";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
	<!--资讯点击进去传ID给后台进入详情页面-->
		<script >
            $(".bd_cid").click(function () {
                var article_id = $(this).data("id");
                var article_ids = article_id.split('_')[2];
                $.ajax({
                    type:'POST',
                    url:'<?php echo url("index/index/new_id"); ?>',
                    dataType: 'json',
                    data:{
                        "article_id":article_ids
                    },
                    success: function(data){
                        console.log(data);
                        window.location.href="./news_t";
                    },
                    error:function(data) {
                        console.log("获取失败");
                    },
                });

            });
		</script>
</body>
</html>