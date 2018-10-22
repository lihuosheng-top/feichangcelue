<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"D:\phpStudy\PHPTutorial\WWW\feichangcelue/application/index\view\index\guild.html";i:1539832024;s:80:"D:\phpStudy\PHPTutorial\WWW\feichangcelue/application/index\view\public\top.html";i:1540180439;s:83:"D:\phpStudy\PHPTutorial\WWW\feichangcelue/application/index\view\public\footer.html";i:1539655517;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>尚牛在线</title>
    <style>
        .pic{
            text-align: center;
            margin-bottom: 20px;
        }
        .guide-section{
            width: 1024px;
            margin: 0 auto;
            padding:50px;
            box-sizing: border-box;
        }
        .content dt,.content dd{
            margin-bottom: 15px;
        }
        .content dl{
            margin-bottom: 50px;
        }
        .content dd{
            padding-left: 50px;
        }
        .content dd table{
            border-left: 1px solid #ccc;
            border-top: 1px solid #ccc;
        }
        .content dd table td{
            border-right: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="__STATIC__/home/css/buy.css"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/home/css/guide.css"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/home/css/common.css"/>
</head>
<body class="guild_body helpcenter logged-in">
<!--<title>首页</title>

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



</script>-->
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
                </a>            </div>
            <div class="h_botR br-fr">
                <ul class="br-clearfix" id="menu-ul">
                    <!--<li class="br-fl"><a href="<?php echo url('index'); ?>" class="active">首页</a></li>-->
                    <li class="br-fl"><a href="./index.html">首页</a></li>
                    <!-- <li class="br-fl"><a href="./buy2.html">A股点买</a></li>
                     <li class="br-fl"><a href="./freetrial2.html">免费体验</a></li>-->
                    <li class="br-fl"><a href="./safeensure.html" >安全保障</a></li>
                    <li class="br-fl help_box">
                        <a href="./guild.html" class="active">帮助中心</a>
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


<!--帮助区-新手教学-->
<div class="br-content">
<section class="guide-section">
<div class="content">
    <div class="pic"><img src="public/static/home/img/one.jpg" ></div>
    <dl>
        <dt>什么是股票配资？</dt>
        <dd>股票配资是一种创新的股票投资工具，通过股票配资，能有效的提高投资收益，堪称炒股利器。
            在系统性或确定性机会出现时，投资者运用配资工具，可以在尚牛在线获得自有资金3-10倍的实盘资金，
            能够将收益放大到10倍。投资者需要注意，配资工具在放大收益也会放大风险，
            投资者应在投资机会比较确定并管理好风险的前提下使用，选择相对稳健的品种。
        </dd>
    </dl>
    <dl>
        <dt>如何配资与交易？</dt>
        <dd>本平台与合作券商有签定合作协议，即您在本平台的账户成功注册后即为合作卷商的证券账户及证券密码，您可凭您的证券账户及证券密码在合作券商进行交易，请您
            务必确保您的信息如实准确，以免产生不必要麻烦。
        </dd>
    </dl>
    <dl>
        <dt>尚牛在线如何进行股票配资的风险管理？</dt>
        <dd>
            为了保护配资资金安全，同时帮您养成良好的投资习惯，交易账户会设置警戒线和平仓线。
            亏损警告线：当总操盘资金低于警戒线（亏损至本金*50%）以下时，系统会自动通知请及时进行补仓。
            亏损平仓线：当总操盘资金低于平仓线（亏损至本金*80%）以下时，系统将把您的股票进行平仓。
            为避免平仓发生，请时刻关注本金是否充足。由于客户持有当天新建仓股票，
            达到强平线时导致强平不成功，超过强平线后系统会短信通知用户及时进行补亏，
            倘若用户不补亏导致本金亏损至100%时，券商将有权强制收回交易账号进行结算（相当于券商回收），
            穿仓部分客户无需赔偿。
        </dd>
    </dl>
    <dl>
        <dt>股票配资限制购买的股票有哪些？</dt>
        <dd>1、不得购买权证类可以T+0交易的证券；</dd>
        <dd>2、用户不得买入当天禁买股，禁买股包括但不仅限于：ST、*ST、SST、*SST、分级基金等被证券交易所特别处理的股票；</dd>
        <dd>3、不得购买首日上市新股（或复牌首日股票）等当日不设涨跌停板限制的股票；</dd>
        <dd>4、已发布停牌、退市公告或有潜在退市风险的股票； </dd>
        <dd>5、有可能导致结算日无法正常卖出或亏损超过保证金的股票； </dd>
        <dd>6、上市20日以内的新股； </dd>
        <dd>7、不得进行坐庄、对敲、接盘、大宗交易、内幕信息等违反股票交易法律法规及证券公司规定的交易。</dd>
    </dl>
    <dl>
        <dt>股票配资的注意事项有哪些？</dt>
        <dd>操盘前必读</dd>
        <dd>股票停牌处理 </dd>
        <dd>如果您买的股票遇到停牌，可选择以下方法：</dd>
        <dd>(1)按停牌股票市值追加20%作为停牌准备金，股票复牌后，如股票上涨，退还全部停牌保证金，下跌在停牌保证金里扣除下跌部分金额（剩余退还）</dd>
        <dd>(2)选择以停牌前一交易日收盘价作为结算价格对停牌股票进行清算。</dd>
        <dd>交易手续费</dd>
        <dd>其他注意事项</dd>
        <dd>1、交易盈利部分可在平仓结算后随时提现，申请结算（工作时间内）及时到达您账户，如您申请提款到银行卡，工作时间及时到账（节假日无休）；</dd>
        <dd>2、按天配资支付管理费，如1月10日15:00前配资，系统当天扣除第1天管理费，1月11日自动（08:30分）扣除第二天管理费，以此类推；</dd>
        <dd>3、按月配资支付利息，如1月10日配资，当天扣除第1个月利息，2月11日支付第2个月利息，以此类推；</dd>
        <dd>4、配资到期前一个交易日，应将股票账号平仓，进行结算。如到期未结算，系统将自动延期收取对应费用。</dd>
    </dl>
    <dl>
        <dt>配资与融资融券业务的区别是什么？</dt>
        <dd>股票配资业务与融资融券业务从本质上讲都是增加投资者的操盘资金，但两者又有着很大的差别。
             股票配资是股民在一定本金的情况下，提供放大资金比例操盘，然后支付一定的利息；
            融资融券则是投资者向具有上海证券交易所或深圳证券交易所会员资格的证券公司提供担保物，
            借入资金买入本所上市证券或借入本所上市证券并卖出的行为。但是在融资融券实际操作中存在着诸多的限制，
            以下对两项业务做个对比：</dd>
        <dd>
            <table>
                <tr><td>融资融券</td><td>股票配资</td></tr>
                <tr><td>开户必须满6个月</td><td>无限制</td></tr>
                <tr><td>资金要求最低10万</td><td>100元起</td></tr>
                <tr><td>标地股少（可交易的股票少）</td><td>可交易的股票多</td></tr>
                <tr><td>融资额度低（一般50%）</td><td>配资额度高（1-10倍杠杆）</td></tr>
                <tr><td>交易佣金高（通常在千分之1以上）</td><td>交易佣金低（万分之2）</td></tr>
                <tr><td>融资最长期限6个月</td><td>配资期限无限制</td></tr>
                <tr><td>需要足额的担保物</td><td>不需要</td></tr>
            </table>
        </dd>
    </dl>
</div>
</section>
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

<script src="./public/static/home/js/help.js"></script>
</body>
</html>
