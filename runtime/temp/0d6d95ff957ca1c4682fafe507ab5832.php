<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"D:\phpStudy\WWW\feichangcelue/application/index\view\index\freetrial.html";i:1539832220;s:68:"D:\phpStudy\WWW\feichangcelue/application/index\view\public\top.html";i:1539830975;s:71:"D:\phpStudy\WWW\feichangcelue/application/index\view\public\footer.html";i:1539593722;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>尚牛在线配资</title>
</head>
<body class="buy_body">
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
                <a href="/">
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
<link rel="stylesheet" type="text/css" href="__STATIC__/home/css/freetrial.css"/>

<!--A股点买部分-->
<div class="br-content">
<div class="w1024">
<div class="stock-buy">
    <section class="play-area">
        <div class="nav-left">
            <a href="./freetrial.html" class="active" style="height: initial;">免费体验</a>
            <a href="./buy.html" >A股（T + 1）</a>
        </div>
        <nav>
            <ul class="clearfix">
                <li class="active"><a href="#"><em> 01 </em>| 点买区</a></li>
                <li class=""><a href="./freetrialSell.html"><em>02 </em>| 点卖区</a></li>
                <li class=""><a href="./freetrialHistory.html"><em>03 </em> | 结算区</a></li>
            </ul>
        </nav>
        <section class="clearfix">
            <div class="left-info">
                <header>
                	<div class="change-stock">
                        <input id="searchTxt1" class="search_txt" type="text" placeholder="请输入股票名称/代码/简拼">
                        <button id="searchCancel" class="cancel">取消</button>
                        <div id="search_history" class="hide">
                            <table border="0" cellspacing="0" cellpadding="0" class="c9">
                                <thead><tr><th class="nc">名称</th><th>代码</th><th>简拼</th></tr></thead>
                               <tbody><tr class="active"><td>平安银行</td><td>000001</td><td>payh</td></tr><tr><td>万科a</td><td>000002</td><td>wka</td></tr><tr><td>国农科技</td><td>000004</td><td>gnkj</td></tr><tr><td>世纪星源</td><td>000005</td><td>sjxy</td></tr><tr><td>深振业a</td><td>000006</td><td>szya</td></tr><tr><td>全新好<label style="background-color:red">[停牌股]</label></td><td>000007</td><td>qxh</td></tr><tr><td>神州高铁</td><td>000008</td><td>szgt</td></tr><tr><td>中国宝安</td><td>000009</td><td>zgba</td></tr><tr><td>美丽生态</td><td>000010</td><td>mlst</td></tr><tr><td>深物业a</td><td>000011</td><td>swya</td></tr></tbody>
                            </table>
                        </div>
                        <div id="search_cue" class="hide">
                            <table border="0" cellspacing="0" cellpadding="0" class="c9">
                                <thead><tr><th class="nc">名称</th><th>代码</th><th>简拼</th></tr></thead>
                                <tbody><tr class="active"><td>万科a</td><td>000002</td><td>wka</td></tr></tbody>
                            </table>
                        </div>
                    </div>
                    <div class="stock-name">
                        <!--<span id="stockName">招商银行(600036)</span>-->
                        <span id="stockName"><?php echo $info_arr[1]; ?>(<?php echo $info_arr[2]; ?>)</span>
                        <button id="changeStock" class="change_stock hide">选择股票</button>
                    </div>
                    
                </header>
                <section class="stock-detail clearfix" data-price="0">
                    <div class="stock-new row f-left">
                        <strong class="J_price" id="nowPrice"><?php echo $info_arr[3]; ?></strong><i class="icon stockicon"></i>
                        <span class="up-arrow-box" style="display: inline-block;">
                            <span class="top-part"></span>
                            <span class="bottom-part"></span>
                        </span>
                        <span class="down-arrow-box" style="display: none;">
                            <span class="top-part"></span>
                            <span class="bottom-part"></span>
                        </span>
                        
                        <i class="icon icon-refresh" id="refreshBtn"></i>
                         <span id="num1" class="color font14 J_num_1"><?php echo $info_arr[31]; ?>%</span>
						<span id="num2" class="color font14 J_num_2"><?php echo $info_arr[32]; ?>%</span>
                    </div>
                    <div class="stock-price f-right" id="stock-price">
                        <ul class="sell">
                            <li><em>卖⑤</em><b class="red info_27"><?php echo $info_arr[27]; ?></b><i class="info_28"><?php echo $info_arr[28]; ?></i></li>
                            <li><em>卖④</em><b class="red info_25"><?php echo $info_arr[25]; ?></b><i class="info_26"><?php echo $info_arr[26]; ?></i></li>
                            <li><em>卖③</em><b class="red info_23"><?php echo $info_arr[23]; ?></b><i class="info_24"><?php echo $info_arr[24]; ?></i></li>
                            <li><em>卖②</em><b class="red info_21"><?php echo $info_arr[21]; ?></b><i class="info_22"><?php echo $info_arr[22]; ?></i></li>
                            <li><em>卖①</em><b class="red info_19"><?php echo $info_arr[19]; ?></b><i class="info_20"><?php echo $info_arr[20]; ?></i></li>
                        </ul>
                        <ul class="buy">
                            <li><em>买①</em><b class="red info_9"><?php echo $info_arr[9]; ?></b><i class="info_10"><?php echo $info_arr[10]; ?></i></li>
                            <li><em>买②</em><b class="red info_11"><?php echo $info_arr[11]; ?></b><i class="info_12"><?php echo $info_arr[12]; ?></i></li>
                            <li><em>买③</em><b class="red info_13"><?php echo $info_arr[13]; ?></b><i class="info_14"><?php echo $info_arr[14]; ?></i></li>
                            <li><em>买④</em><b class="red info_15"><?php echo $info_arr[15]; ?></b><i class="info_16"><?php echo $info_arr[16]; ?></i></li>
                            <li><em>买⑤</em><b class="red info_17"><?php echo $info_arr[17]; ?></b><i class="info_18"><?php echo $info_arr[18]; ?></i></li>
                        </ul>
                    </div>
                </section>
                <section class="stock-figure">
                    <ul class="row">
                        <li class="active" id="chartContro">分时</li>
                        <li class="hide" id="chartKContro">k线</li>
                    </ul>
                    <!-- 为ECharts准备分时图 -->
   					<div class="figure active" id="chart" style="-webkit-tap-highlight-color:transparent;user-select:none;background:none;cursor:default;display:block;position:relative;overflow:hidden;width:520px;height:280px;">
                        <img class="time_img" src="<?php echo $time_img; ?>" alt="">
                    </div>
                    <!--<div class="figure " id="chart" _echarts_instance_="1498120573127" style="-webkit-tap-highlight-color: transparent; user-select: none; background: none; cursor: default; display: none;"><div style="position: relative; overflow: hidden; width: 520px; height: 240px;"><div data-zr-dom-id="bg" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 520px; height: 240px; user-select: none;"></div><canvas width="520" height="240" data-zr-dom-id="0" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 520px; height: 240px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="520" height="240" data-zr-dom-id="1" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 520px; height: 240px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="520" height="240" data-zr-dom-id="_zrender_hover_" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 520px; height: 240px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas></div></div>-->
   					<div class="figure hide" id="chartK" style="-webkit-tap-highlight-color:transparent;user-select:none;background:none;cursor:default;display:none;position:relative;overflow:hidden;width:520px;height:280px;">
                        <img class="day_img" src="<?php echo $day_img; ?>" alt="">
                    </div>
                    <!--<div class="figure hide" id="chartk" _echarts_instance_="1498120573128" style="-webkit-tap-highlight-color: transparent; user-select: none; background: none; display: block; cursor: default;"><div style="position: relative; overflow: hidden; width: 520px; height: 240px;"><div data-zr-dom-id="bg" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 520px; height: 240px; user-select: none;"></div><canvas width="520" height="240" data-zr-dom-id="0" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 520px; height: 240px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="520" height="240" data-zr-dom-id="1" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 520px; height: 240px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="520" height="240" data-zr-dom-id="_zrender_hover_" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 520px; height: 240px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><div class="echarts-tooltip zr-element" style="position: absolute; display: block; border-style: solid; white-space: nowrap; transition: left 0.1s, top 0.1s; background-color: rgb(255, 255, 255); border-width: 1px; border-color: rgb(204, 204, 204); border-radius: 4px; color: rgb(102, 102, 102); font-family: 微软雅黑; font-size: 11px; line-height: 17px; padding: 10px; left: 143.5px; top: 37px;">2017年04月17日<br>最高：<span style="color:#DD2200;">18.9</span><br>最低：<span style="color:#00A800;">18.6</span><br>收盘：<span style="color:#F96900;">18.88</span></div></div></div>-->
                	<!--loading-->
                	<div class="loading"></div>
                </section>
                <section class="stock-info" id="stock-info">
                    <h3>股票信息</h3>
                    <ul class="row">
                        <!--<li class="open"><span class="l">今开</span><span class="r">&#45;&#45;</span></li>-->
                        <!--<li class="amplitude"><span class="l">振幅</span><span class="r">&#45;&#45;</span></li>-->
                        <!--<li class="high"><span class="l">最高</span><span class="r">&#45;&#45;</span></li>-->
                        <!--<li class="low"><span class="l">最低</span><span class="r">&#45;&#45;</span></li>-->
                        <!--<li class="max"><span class="l">涨停价</span><span class="r">&#45;&#45;</span></li>-->
                        <!--<li class="min"><span class="l">跌停价</span><span class="r">&#45;&#45;</span></li>-->
                        <!--<li class="volume"><span class="l">成交量</span><span class="r">&#45;&#45;手</span></li>-->
                        <!--<li class="amount"><span class="l">成交额</span><span class="r">&#45;&#45;万</span></li>-->
                        <li class="open"><span class="l">今开</span><span class="r info_5"><?php echo $info_arr[5]; ?></span></li>
                        <li class="amplitude"><span class="l">振幅</span><span class="r info_43"><?php echo $info_arr[43]; ?></span></li>
                        <li class="high"><span class="l">最高</span><span class="r info_41"><?php echo $info_arr[41]; ?></span></li>
                        <li class="low"><span class="l">最低</span><span class="r info_42"><?php echo $info_arr[42]; ?></span></li>
                        <li class="max"><span class="l">涨停价</span><span class="r info_47"><?php echo $info_arr[47]; ?></span></li>
                        <li class="min"><span class="l">跌停价</span><span class="r info_48"><?php echo $info_arr[48]; ?></span></li>
                        <li class="volume"><span class="l">成交量</span><span class="r info_36"><?php echo $info_arr[36]; ?>手</span></li>
                        <li class="amount"><span class="l">成交额</span><span class="r info_37"><?php echo $info_arr[37]; ?>万</span></li>
                    </ul>
                </section>
            </div>
            <div class="right-buy">
                <div class="buy_price">
                    <p class="top">买入金额<em></em></p>
                    <ul id="buy_price_ul">
                        <li class="active">2000</li>
                        <li> 3000</li>
                        <li> 5000</li>
                        <li> 1W</li>
                    </ul>
                </div>
                <p class="price-warning free_blue">操作提示：免费体验限额2000元，更多金额请到A股点买区操作。</p>
                <p class="efficiency">资金使用率 可买入<span id="gu">-</span>股，资金利用率<span id="lyl">-</span></p>
                <div class="open-time">
                    <span>持&nbsp;仓&nbsp;时&nbsp;间</span>
                    <div class="delay_tip"><i class="icon icon-help"></i><div class="showtip">最短2天，最长20天，交易综合费按天支付，默认每天自动延期，自动从账户余额扣除交易综合费(余额不足时自动终止)</div></div>
                    <ul class="work-interval">
                        <li class="active">T+1|D</li>
                    </ul>
                </div>
                <div class="check-surplus">
                    <span>触&nbsp;发&nbsp;止&nbsp;盈</span>
                    <div class="delay_tip">
                        <i class="icon icon-help"></i><div class="showtip">当合作交易品种的浮动盈亏率达到特定数值时，投资人有权即时卖出交易品种全部持有数量进行止盈。</div>
                    </div>
                    <ul id="check-surplus_ul"><li class="active" data-val="20">20%</li></ul>
                </div>
                 <div class="open-time">
                    <span>盈&nbsp;利&nbsp;分&nbsp;配</span>
                    <div class="delay_tip"><i class="icon icon-help"></i><div class="showtip">当谋略盈利时，</br>谋略人将获得大部分盈利</div></div>
                    <ul class="work-interval">
                        <li class="active">90%</li>
                    </ul>
                </div>
                <div class="com_fee">
                    <span>交易综合费</span>
                    <div class="delay_tip"><i class="icon icon-help"></i><div class="showtip">交易综合费包含第一天的交易费，第二天的递延费，每万元点买金的交易综合费为45元，每万元点买金的递延费<?php echo $delayFee; ?>元/天。</div></div>
                    <span class="delete_price"><strong id="publicFee">1</strong>元（包括前两日）</span>
                    
                </div>
                <div class="perf_bond">
                    <span>履约保证金</span>
                    <div class="delay_tip"><i class="icon icon-help"></i><div class="showtip">履约保证金为点买人委托平台冻结用于履行交易亏损赔付义务的保证金，结束时根据谋略盈亏结算。保证金越低风险也越大，保证金越高抗风险也越高。</div></div>
                    <strong class="br-bz" id="guaranteeFee">0</strong>元
                </div>
                <div class="protocol_row">
                    <p><input type="checkbox" name="agree_pro" id="agree_pro" checked="">我已阅并签署以下协议</p>
                    <a href="/protocol_3.html" target="_blank">《非常谋略服务协议》</a>
                </div>
                <button id="btn_buy" >点买</button>
                <p id="su_sm_p" class="total hide">当前可点买总额：210万；单股点买金额不超过：50万。</p>
            </div>
        </section>
    </section>
</div>

</div>
</div>

<!--弹出层-->
<!--点买确认-->
<div class="popup popup-big" id="popup-buy" style="display: none; top: 0px;">
    <div class="popup-header group">
        <h2>点买确认</h2>
        <a href="javascript:;" class="js-close-popup"><i class="icon icon-close"></i></a>
    </div>
    <div class="popup-body group">
        <table border="0" cellspacing="0" cellpadding="0" class="popup-sell-tb">
            <tbody><tr>
                <td width="15%">交易品种：</td>
                <td width="35%" id="t_stock_name">-</td>
                <td width="15%">交易本金：</td>
                <td width="35%" class="c-red" id="t_principal">-</td>
            </tr>
            <tr>
                <td>持仓时间：</td>
                <td name="work-interval">截止至下个交易日 15:00:00</td>
                <td>交易数量：</td>
                <td id="t_shou">1手</td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;市价：</td>
                <td>五档最优成交</td>
                <td colspan="2"><a id="hmdA" href="javascript:void(window.open(&#39;/policy/restricted&#39;))" style="display:none;font-size:18px;color:red">该股票已被列入黑名单，点我查看全部</a></td>
            </tr>
        </tbody></table>
        <div class="btn-div">
            <button class="btn btn-pri" id="popup-confirm-btn" >确定</button>
            <a href="javascript:;" class="js-close-popup btn btn-grey">取消</a>
            <div class="f-right timer" style="display:none;"><b class="red">5秒</b>后自动返回</div>
        </div>
    </div>
</div>
<!--非常谋略点买人参与沪深A股交易合作涉及费用及资费标准-->
<div class="popup popup-mbig popup-agree" id="popup-agree-btn1" style="display: none; top: 0px;">
    <div class="popup-body group">
        <div class="agree-main">
            <h1>非常谋略点买人参与沪深A股交易合作涉及费用及资费标准</h1>
            <div class="article">
                <p>点买人通过<label>非常谋略</label>参与沪深A股交易合作将涉及交易综合费和履约保证金的发生。如点买人参与持仓时间为T＋1｜D的交易合作还将涉及递延费的发生。</p>
                <p><strong>一、交易综合费</strong></p>
                <p>1、交易综合费为<label>非常谋略</label>向点买人收取的费用。交易综合费包含：1）<label>非常谋略</label>为点买人提供交易合作信息发布、交易合作撮合、交易指令通讯、交易风控管理与交易清结算等服务而收取的信息服务费；2）<label>非常谋略</label>代第三方支付平台收取用于第三方支付为点买人提供资金存取、冻结、解冻和支付等服务手续费。</p>
                <p>2、交易综合费以交易本金为计费基数，按每万元交易本金50元计费。计算公式：点买人支付交易综合费＝交易本金×50/10000。（下表数值仅为用户查询方便提供，交易综合费具体数值通过<label>非常谋略</label>点买页面公布，以点买人实际选择为准。）</p>
                <table border="1">
                    <tbody><tr>
                        <td>交易本金</td>
                        <td>计费标准</td>
                        <td>支付:交易综合费</td>
                    </tr>
                    <tr>
                        <td>1万元</td>
                        <td>50元/万元</td>
                        <td>50元</td>
                    </tr>
                    <tr>
                        <td>2万元</td>
                        <td>50元/万元</td>
                        <td>100元</td>
                    </tr>
                    <tr>
                        <td>3万元</td>
                        <td>50元/万元</td>
                        <td>150元</td>
                    </tr>
                    <tr>
                        <td>4万元</td>
                        <td>50元/万元</td>
                        <td>200元</td>
                    </tr>
                    <tr>
                        <td>5万元</td>
                        <td>50元/万元</td>
                        <td>250元</td>
                    </tr>
                    <tr>
                        <td>10万元</td>
                        <td>50元/万元</td>
                        <td>500元</td>
                    </tr>
                    <tr>
                        <td>20万元</td>
                        <td>50元/万元</td>
                        <td>1000元</td>
                    </tr>
                    <tr>
                        <td>30万元</td>
                        <td>50元/万元</td>
                        <td>1500元</td>
                    </tr>
                    <tr>
                        <td>40万元</td>
                        <td>50元/万元</td>
                        <td>2000元</td>
                    </tr>
                    <tr>
                        <td>50万元</td>
                        <td>50元/万元</td>
                        <td>2500元</td>
                    </tr>
                </tbody></table>
                <p>3、3、交易综合费于点买人签署《交易合作协议》时即支付。交易综合费一经支付不予退还。当且仅当因<label>非常谋略</label>原因导致系统故障，致使点买人和投资人交易合作失败时，点买人方可向<label>非常谋略</label>申请退还交易综合费。</p>
                <p><strong>二、履约保证金</strong></p>
                <p>1、履约保证金为点买人委托<label>非常谋略</label>平台冻结用于履行交易亏损赔付义务的保证金。点买人以冻结履约保证金之数额作为承担交易亏损赔付的上限。</p>
                <p>2、履约保证金以交易本金为计算基数，以触发止损为冻结系数，计算点买人应冻结履约保证金金额。计算公式：点买人冻结履约保证金＝交易本金×｜触发止损/0.8｜。（下表数值仅为用户查询方便提供，触发止损具体数值通过<label>非常谋略</label>点买页面公布，以点买人实际选择为准。）</p>
                <table border="1">
                    <tbody><tr>
                        <td rowspan="2" align="center">交易本金</td>
                        <td colspan="2">持仓时间T+1|D</td>
                    </tr>
                    <tr>
                        <td>触发止损率/万元</td>
                        <td>冻结:履约保证金</td>
                    </tr>
                    <tr>
                        <td>1万元</td>
                        <td>-1600</td>
                        <td>2000元</td>
                    </tr>
                    <tr>
                        <td>2万元</td>
                        <td>-3200</td>
                        <td>4000元</td>
                    </tr>
                    <tr>
                        <td>3万元</td>
                        <td>-4800</td>
                        <td>6000元</td>
                    </tr>
                    <tr>
                        <td>4万元</td>
                        <td>-6400</td>
                        <td>8000元</td>
                    </tr>
                    <tr>
                        <td>5万元</td>
                        <td>-8000</td>
                        <td>10000元</td>
                    </tr>
                    <tr>
                        <td>10万元</td>
                        <td>-16000</td>
                        <td>20000元</td>
                    </tr>
                    <tr>
                        <td>20万元</td>
                        <td>-32000</td>
                        <td>40000元</td>
                    </tr>
                    <tr>
                        <td>30万元</td>
                        <td>-48000</td>
                        <td>60000元</td>
                    </tr>
                    <tr>
                        <td>40万元</td>
                        <td>-64000</td>
                        <td>80000元</td>
                    </tr>
                    <tr>
                        <td>50万元</td>
                        <td>-80000</td>
                        <td>100000元</td>
                    </tr>
                </tbody></table>
                <p>3、交易合作结束，根据<label>非常谋略</label>清结算结果，如交易盈利，点买人冻结履约保证金全额解冻。如交易亏损，从点买人通过<label>非常谋略</label>平台冻结在汇潮支付的履约保证金中，扣减点买人所应承担亏损赔付额的数额，扣减后余额解冻。</p>
                <p><strong>三、递延费（仅在持仓时间为T＋1｜D的交易存在产生此费用</strong></p>
                <p>1、递延费为点买人通过<label>非常谋略</label>平台向投资人申请将交易品种持仓时间递延至下一交易日所支付的费用。递延费包含：1）<label>非常谋略</label>收取的信息服务费。2）<label>非常谋略</label>代投资人收取用于补偿投资人资金占用费。</p>
                <p>2、递延费以交易本金为计费基数，根据递延申请次数进行分档计费。具体为：第2至20次递延，单次递延按每万元交易本金22元计费。计算公式：点买人支付递延费＝交易本金×22/10000。</p>
                <table border="1">
                    <tbody><tr>
                        <td align="center" rowspan="2">交易本金</td>
                        <td colspan="2">第三个交易日起</td>
                    </tr>
                    <tr>
                        <td>计费标准</td>
                        <td>支付:递延费</td>
                    </tr>
                    <tr>
                        <td>1万元</td>
                        <td>22元/万元</td>
                        <td>22元</td>
                    </tr>
                    <tr>
                        <td>2万元</td>
                        <td>22元/万元</td>
                        <td>44元</td>
                    </tr>
                    <tr>
                        <td>3万元</td>
                        <td>22元/万元</td>
                        <td>66元</td>
                    </tr>
                    <tr>
                        <td>4万元</td>
                        <td>22元/万元</td>
                        <td>88元</td>
                    </tr>
                    <tr>
                        <td>5万元</td>
                        <td>22元/万元</td>
                        <td>110元</td>
                    </tr>
                    <tr>
                        <td>10万元</td>
                        <td>22元/万元</td>
                        <td>220元</td>
                    </tr>
                    <tr>
                        <td>20万元</td>
                        <td>22元/万元</td>
                        <td>440元</td>
                    </tr>
                    <tr>
                        <td>30万元</td>
                        <td>22元/万元</td>
                        <td>660元</td>
                    </tr>
                    <tr>
                        <td>40万元</td>
                        <td>22元/万元</td>
                        <td>880元</td>
                    </tr>
                    <tr>
                        <td>50万元</td>
                        <td>22元/万元</td>
                        <td>1100元</td>
                    </tr>
                </tbody></table>

                <p>3、递延费于点买人申请递延时即支付。递延申请成功则递延费不予退还，递延申请失败则递延费自动退还。当天14：50如点买人不主动卖出，且符合递延条件，则默认为点买人需要递延。</p>
                <p>本附件系点买人与投资人签署《交易合作协议》的重要组成部分，具有同等法律效力。</p>
                <p><strong>四、关于以上资费标准的声明</strong></p>
                <p>1、<label>非常谋略</label>平台声明，以上所有涉及资费标准的数据，均为平台根据市场行情阶段性调整的实时标准，该数据具有一定浮动性。</p>
                <p>2、<label>非常谋略</label>平台关于以上资费标准不做不予调整的承诺，平台将根据客观的市场行情对资费标准进行适时调整，关于调整结果将及时告知所有平台用户，并将一如既往地尊重用户在新的资费条件下是否选择继续与平台合作的权利。</p>
                <p>&nbsp;</p>
            </div>
        </div>
    </div>
    <div class="btn-div">
        <input id="cbip" type="checkbox" checked="checked">已阅读并同意协议
        <button class="btn btn-pri" id="popup-confirm-btn2">确定</button>
        <a href="javascript:;" class="js-close-popup btn btn-grey">取消</a>
    </div>
    <br>
</div>
<!--温馨提示（协议）-->
<div class="popup popup-small popup-agree-tip" id="popup-agree-tip" style="display: none; top: 0px;">
    <div class="popup-header group">
        <h2>温馨提示</h2>
        <a href="javascript:;" class="js-close-popup"><i class="icon icon-close"></i></a>
    </div>
    <div class="popup-body group">
        <i class="icon icon-warning"></i>
        <div class="protocol-row">
            <a href="http://feichangcl.com/Policy/protocol_1" target="_blank">&gt;《非常谋略点买人参与沪深A股交易合作涉及费用及资费标准》</a>
            <a href="http://feichangcl.com/Policy/protocol_2" target="_blank">《非常谋略投资人与点买人参与沪深A股交易合作协议》</a>
            <a href="http://feichangcl.com/Policy/protocol_3" target="_blank">《非常谋略服务协议》</a>
        </div>
        <button class="js-close-popup">确定</button>
    </div>
</div>
<!--认证银行卡-->
<div class="popup" id="popup-id-verify" style="display: none; top: 0px;">
    <div class="popup-header group">
        <h2>认证银行卡</h2>
        <a href="javascript:;" class="js-close-popup"><i class="icon icon-close"></i></a>
    </div>
    <div class="popup-body group">
        <div class="field-row group" style="text-align:center">
            <ol class="popup-note">
                <li style="text-align:left;">提现和免费体验前必须先绑定一张银行卡</li>
                <li style="text-align:left;">请务必认真填写真实资料</li>
                <li style="text-align:left;">银行卡采用实名认证，一个身份证只能绑定一个账号</li>
                <li style="text-align:left;">如遇到问题，请联系客服 <label id="m_basic_mobile">021-80321818</label></li>
            </ol>
            <p>为了保障您的账户安全，请先绑定银行卡</p>
        </div>
        <div class="btn-row group">
            <a class="btn btn-pri" href="/ucenter/BankCards.html">去绑定</a>
            <a class="btn btn-pri js-close-popup" href="javascript:;">暂不绑定</a>
        </div>
    </div>
</div>
<!--实名认证-->
<div class="popup" id="popup-realname-auth" style="display: none; top: 0px;">
    <div class="popup-header group">
        <h2>实名认证</h2>
        <a href="javascript:;" class="js-close-popup"><i class="icon icon-close"></i></a>
    </div>
    <div class="popup-body group">
        <div class="field-row group" style="text-align:center">
            <ol class="popup-note">
                <li style="text-align:left;">一个身份证对应一个账号</li>
                
                <li style="text-align:left;">如遇到问题，请联系客服 <label id="m_basic_mobile">021-80321818</label></li>
            </ol>
            <p>为了保障您的账户安全，请先进行实名认证</p>
        </div>
        <div class="field-row group">
            <label>真实姓名：</label>
            <div class="field-val"><input id="姓名i" type="text" class="text" onchange="user_updateid_zsxm_valid()"></div>
        </div>
        <div id="zsxm_err1" class="error-wrapper" style="margin-left:100px; display:none"><div><i class="icon icon-x-altx-alt"></i>未填写姓名</div></div>
        <div class="field-row group">
            <label>身份证号：</label>
            <div class="field-val">
                <div class="field-val">
                    <input id="身份证i" type="text" class="text" onchange="user_updateid_sfzh_valid()">
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

<!--  遮罩  -->
<div id="popBg" style="width:100%;height:100%;z-index: 0;background: #eee; opacity: 0.5;position: fixed;left: 0; top: 0;display: none"></div>

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

<script>
    var delayFee = parseInt("<?php echo $delayFee; ?>");
    var dealFee = parseInt("<?php echo $dealFee; ?>");
    var publicFee = parseInt("<?php echo $delayFee + $dealFee; ?>");
</script>
<script src="__STATIC__/home/js/echarts.min.js"></script>
<script src="__STATIC__/home/js/freetrial.js"></script>
</body>
</html>