<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:86:"D:\phpStudy\PHPTutorial\WWW\feichangcelue/application/index\view\index\safeensure.html";i:1539334158;s:80:"D:\phpStudy\PHPTutorial\WWW\feichangcelue/application/index\view\public\top.html";i:1539679640;s:83:"D:\phpStudy\PHPTutorial\WWW\feichangcelue/application/index\view\public\footer.html";i:1539655516;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>尚牛在线</title>
</head>
<body class="mobile_body logged-in">
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
                <a href="/"><img src="__STATIC__/home/img/moblie/fcml2.png" style="height:80px; " /></a>
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
                    <li class="br-fl"><a href="./buy.html">A股点买</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>


<script src="__STATIC__/libs/jquery-2.2.0/jquery-2.2.0.min.js"></script>
<script src="__STATIC__/home/js/general.js"></script>

<script>
	$("#menu-ul li").on('click',function(){
			
             $(this).siblings().children('a').removeClass('active');
			$(this).children('a').addClass('active');
			console.log($(this).children('a'))
			
		});
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
<!--<link rel="stylesheet" type="text/css" href="public/static/home/css/buy.css"/>-->
<!--<style type="text/css">
    .weixin-section2{
        width: 100%;
        background: url(./public/static/home/img/banner.png) no-repeat center center;
        background-size: cover;
        /*font-size: 0;*/
        height: 520px;
    }
    .weixin-section2 .w1024{
        position: relative;
    }
    .text_r{
        width: 515px;
        float: right;
        text-align: left;
        position: relative;
        margin-top: 160px;
    }
    .text_r h1{
        font-size:34px;
        font-weight: normal;
        margin-bottom: 5px;
    }
    .text_r h1 span{
        color: #FE3333;
    }
    .titleP{
        font-size: 20px;
        margin-bottom: 40px;
    }
    .img_box{
        float: left;
        width:128px ;
        height: 180px;
        text-align: center;
        margin-right: 105px;
    }
</style>-->
<style>
    .pic{
        text-align: center;
        margin-bottom: 20px;
    }
    .content{
        width: 1024px;
        margin: 0 auto;
        padding: 50px;
        box-sizing: border-box;
        background-color: #fff;
    }
    .content dt,.content dd{
        margin-bottom: 15px;
    }
    .content dd{
        padding-left: 50px;
    }
    .content dl{
        margin-bottom: 50px;
    }
</style>
<!--点卖区-->
<div class="br-content">
    <!--<section class="weixin-section2">
        <div class="w1024 br-clearfix">
            <div class="text_r ">
                <h1><span>微信端</span>&nbsp;<span>手机端</span>APP全面上线</h1>
                <p class="titleP">A股点买交易更加轻松、便捷</p>
                &lt;!&ndash;<div class="img_box">
                    <img src="./public/static/home/img/ewm1.jpg" style="width: 122px;"height="122px">
                    <p>用微信扫描二维码<br>关注官方公众号</p>
                </div>
                <div class="img_box">
                    <img src="./public/static/home/img/android.png" style="width: 122px;"height="122px">
                    <p>扫描二维码即可<br>下载APP</p>
                </div>&ndash;&gt;
            </div>
        </div>
    </section>-->
    <div class="content">
        <div class="pic"><img src="public/static/home/img/tree.jpg" ></div>
        <dl>
            <dt>资金保障 </dt>
            <dd>1、资金安全</dd>
            <dd>尚牛在线只做安全保障的配资平台，真正采用第三方资金存管，用户的配资资金由第三方进行全程存管，
                尚牛在线全程不碰资金，专款专用不停留，能有效避免平台挪用用户资金，提供银行级别的资金安全保障。</dd>
            <dd>2、提现安全</dd>
            <dd>平台要求每位用户进行手机号注册、实名身份证验证、本人银行卡绑定验证，用户提现仅限本人绑定的本人银行卡，
                确保用户资金万无一失。</dd>
            <dd>3、担保机制</dd>
            <dd>“第三方担保专款”是为保护用户的配资权益而建立的资金安全保障机制。“第三方担保专款”账户资金由第三方公司提供，
                会根据平台每月收入的增加或减少而动态调整。若用户工作时间提现有延期时，
                根据垫付规则及时启用“第三方担保专款”进行垫付。保障配资人员提现资金及时到账。</dd>
            <dd>4、风控体制</dd>
            <dd>券商全程监管交易，尚牛在线平台控制风险，并设置警戒线（本金亏损50%）和平仓线（本金亏损80%），
                让客户及早的预知风险，严格执行警戒线和平仓线，为客户做好风险管理。</dd>
        </dl>
        <dl>
            <dt>法律保障  </dt>
            <dd>关于尚牛在线提供配资中介服务的法律基础及互联网个人借贷合同的合法性，请参阅下文：</dd>
            <dd>1、关于配资合法性</dd>
            <dd>配资属于民间借贷的一种形式，《合同法》和《最高人民法院关于人民法院审理借贷案件的若干意见》
                从法律上肯定了民间借贷行为的合法性，同时，可以采用第三方对借款提供担保的方式，
                保障出借人收回借款本金、利息的权利。 因此，配资行为受法律保护。
                依据《最高人民法院关于人民法院审理借贷案件的若干意见》的规定，公民之间、公民与法人之间、
                公民与其他组织之间的借贷属于民间借贷。 因此配资行为作为一种民事法律行为，在行为人具有完全民事行为能力（
                年满18周岁，且不存在足以影响自身行为的精神疾病的情形）、 意思表示真实且不违反法律、行政法规禁止性规定的情况下，
                受到法律的保护。</dd>
            <dd>2、关于利率的规定</dd>
            <dd>《合同法》第二百一十一条：自然人之间的借款合同对支付利息没有约定或者约定不明确的，视为不支付利息。
                自然人之间的借款合同约定支付利息的，借款的利率不得违反国家有关限制借款利率的规定。
                《最高人民法院关于人民法院审理借贷案件的若干意见》第六条：民间借贷的利率可以适当高于银行的利率，
                各地人民法院可根据本地区的实际情况具体掌握，但最高不得超过银行同类贷款利率的四倍（包含利率本数）。
                超出此限度的，超出部分的利息不予保护。</dd>
            <dd>3、关于借款协议的规定</dd>
            <dd>《最高人民法院关于人民法院审理借贷案件的若干意见》第十条：一方以欺诈、胁迫等手段或者乘人之危，
                使对方在违背真实意思的情况下所形成的借贷关系，应认定为无效。
                《最高人民法院关于人民法院审理借贷案件的若干意见》第十一条：出借人明知借款人是为了进行非法活动而借款的，
                其借贷关系不予保护。</dd>
            <dd>4、关于对借款提供担保的规定</dd>
            <dd>《合同法》第一百九十八条订立借款合同，贷款人可以要求借款人提供担保。担保依照《中华人民共和国担保法》的规定。
                《最高人民法院关于人民法院审理借贷案件的若干意见》第十三条： 在借贷关系中，仅起联系、介绍作用的人，
                不承担保证责任。对债务的履行确有保证意思表示的，应认定为保证人，承担保证责任。</dd>
        </dl>
        <dl>
            <dt>技术保障</dt>
            <dd>尚牛在线在任何时候都将竭力保证用户的个人信息不被擅自或意外取得、处理或删除。
                采取各种实际措施保证个人信息不会被保管超过合理的期限，尚牛在线将严格遵守所有关于可辨识个人信息保存的法规要求。</dd>
            <dd>数据安全承诺</dd>
            <dd>采取各种合适的物理、电子和管理方面的措施来保护数据，以实现对数据安全的承诺，有效避免被篡改以及删除。
                采用集中的影像存储服务来保证合同等文件信息的存储，有效避免被篡改以及删除，并可以实现永久保存。</dd>
            <dd>数字签名技术</dd>
            <dd>网站之间的页面跳转以及数据的发送采用数字签名技术来保证信息以及来源的不可否认性。银行级别的系统安全，充分的数据加密及容灾备份。</dd>
            <dd>网络安全</dd>
            <dd>三层防火墙隔离系统的访问层、应用层和数据层集群；数据流的完全监控、过滤、记录和报告。</dd>
            <dd>应用及数据库集群</dd>
            <dd>分布式服务器集群、应用及数据库服务逻辑集群实现系统的高可用性，提供高效的容灾机制，在多点故障的严重情况下自动完成服务器、应用或数据库服务的自动切换。</dd>
            <dd>集中监控</dd>
            <dd>自动报警功能的集中监控系统可对系统软硬件故障和异常进行智能分析；并根据故障和异常的严重程度对不同级别的管理人员发出短信报警。</dd>
            <dd>内控流程</dd>
            <dd>设立专职系统安全运维岗位，保护系统硬件、软件及数据不受偶然或恶意的原因而遭到破坏、更改、泄露，保障系统连续、可靠、正常地运行。</dd>
            <dd>容灾备份</dd>
            <dd>实时将系统产生的数据与容灾存储进行同步，及时验证备份数据源的定期可用性，确保系统历史数据的永久保存和绝对安全。</dd>
        </dl>
        <dl>
            <dt>隐私保密 </dt>
            <dd>尚牛在线隐私权保护声明系尚牛在线保护用户个人隐私的承诺。</dd>
            <dd>鉴于网络的特性，尚牛在线将无可避免地与您产生直接或间接的互动关系，故特此说明尚牛在线对用户个人信息所采取的收集、使用和保护政策，请您务必仔细阅读：</dd>
            <dd>1、使用者非个人化信息</dd>
            <dd>尚牛在线将通过您的 IP 地址来收集非个人化的信息，例如您的浏览器性质、操作系统种类、服务的 ISP 的域名等，
                以优化在您计算机屏幕上显示的页面。 通过收集上述信息，尚牛在线亦进行客流量统计，从而改进网站的管理和服务。</dd>
            <dd>2、个人资料</dd>
            <dd>2.1 当您在尚牛在线进行用户注册登记、股票配资等活动时，在您的同意及确认下，尚牛在线将通过注册表格、订单等形式要求您提供一些个人资料。 这些个人资料包括：</dd>
            <dd>2.1.1 个人识别资料：如姓名、身份证号码（或护照号码）、电话、电子邮件地址等情况。</dd>
            <dd>2.2 在未经您同意及确认之前，尚牛在线不会将您为参加本网站之特定活动所提供的资料利用于其它目的。
                惟按下列第 6 条规定应政府及法律要求披露时不在此限。</dd>
            <dd>3、信息安全</dd>
            <dd>3.1 尚牛在线将对您所提供的资料进行严格的管理及保护，尚牛在线将使用相应的技术，防止您的个人资料丢失、被盗用或遭篡改。</dd>
            <dd>3.2 尚牛在线在必要时委托专业技术人员代为对该类资料进行电脑处理，以符合专业分工时代的需求。
                如尚牛在线将电脑处理之通知送达予您，而您未在通知规定的时间内主动明示反对， 尚牛在线将推定您已同意。
                惟在其后您仍然有权如下述第 4.1.4 条之规定，请求停止电脑处理。</dd>
            <dd>4、用户权利</dd>
            <dd>4.1 您对于自己的个人资料享有以下权利：</dd>
            <dd>4.1.1 随时查询及请求阅览；</dd>
            <dd>4.1.2 随时请求补充或更正；</dd>
            <dd>4.1.3 随时请求删除；</dd>
            <dd>4.1.4 请求停止电脑处理及利用。</dd>
            <dd>4.2 针对以上权利，本网站为您提供相关服务，同时如果您有疑问，可咨询官方客服。</dd>
            <dd>5、限制利用原则</dd>
            <dd>尚牛在线惟在符合下列条件之一，方对收集之个人资料进行必要范围以外之利用：</dd>
            <dd>5.1 已取得您的书面同意；</dd>
            <dd>5.2 为免除您在生命、身体或财产方面之急迫危险；</dd>
            <dd>5.3 为防止他人权益之重大危害；</dd>
            <dd>5.4 为增进公共利益，且无害于您的重大利益。</dd>
            <dd>6、个人资料之披露</dd>
            <dd>当政府机关依照法定程序要求尚牛在线披露个人资料时，尚牛在线将根据执法单位之要求或为公共安全之目的提供个人资料。
                在此情况下之任何披露，尚牛在线均得免责。</dd>
            <dd>7、未成年人隐私权的保护</dd>
            <dd>为保护尚牛在线用户的安全和隐私，尚牛在线不支持18岁以下的未成年参与网站内的金融类相关活动。</dd>
            <dd>8、Cookies</dd>
            <dd>8.1 Cookies 是指一种互联网技术，当使用者访问设有 Cookies 装置的本网站时，
                尚牛在线之服务器会自动发送 Cookies 至阁下浏览器内， 并储存到您的电脑硬盘内，
                此 Cookies 便负责记录日后您到访尚牛在线的种种活动、个人资料、浏览习惯、消费习惯甚至信用记录。</dd>
            <dd>8.2 运用 Cookies 技术，尚牛在线能够为您提供更加周到的个性化服务。
                尚牛在线将会运用 Cookies 追访您的购物喜好，从而向您提供感兴趣的信息资料或储存密码，以便您造访尚牛在线时不必每次重复输入密码。</dd>
            <dd>9、免责</dd>
            <dd>除上述第 6 条规定属免责外，发生下列情况时尚牛在线无需承担任何责任：</dd>
            <dd>9.1 由于您将用户密码告知他人或与他人共享注册帐户，由此导致的任何个人资料泄露。</dd>
            <dd>9.2 任何由于黑客攻击、计算机病毒侵入或发作、因政府管制而造成的暂时性关闭等影响网络正常经营之不可抗力而造成的个人资料泄露、丢失、被盗用或被窜改等。</dd>
            <dd>9.3 由于与尚牛在线链接的其它网站所造成之个人资料泄露及由此而导致的任何法律争议和后果。
                本网站之保护隐私声明的修改及更新权均属于尚牛在线网。</dd>

        </dl>
    </div>
</div>
<!--认证银行卡-->
<!--<div class="popup" id="popup-id-verify">-->
    <!--<div class="popup-header group">-->
        <!--<h2>认证银行卡</h2>-->
        <!--<a href="javascript:;" class="js-close-popup"><i class="icon icon-close"></i></a>-->
    <!--</div>-->
    <!--<div class="popup-body group">-->
        <!--<div class="field-row group" style="text-align:center">-->
            <!--<ol class="popup-note">-->
                <!--<li style="text-align:left;">提现和免费体验前必须先绑定一张银行卡</li>-->
                <!--<li style="text-align:left;">请务必认真填写真实资料</li>-->
                <!--<li style="text-align:left;">银行卡采用实名认证，一个身份证只能绑定一个账号</li>-->
                <!--<li style="text-align:left;">如遇到问题，请联系客服 <label id="m_basic_mobile">021-80321818</label></li>-->
            <!--</ol>-->
            <!--<p>为了保障您的账户安全，请先绑定银行卡</p>-->
        <!--</div>-->
        <!--<div class="btn-row group">-->
            <!--<a class="btn btn-pri" href="./ucenter/bankCards.html">去绑定</a>-->
            <!--<a class="btn btn-pri js-close-popup" href="javascript:;">暂不绑定</a>-->
        <!--</div>-->
    <!--</div>-->
<!--</div>-->
<!--实名认证-->
<!--<div class="popup" id="popup-realname-auth">
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
</div>-->


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

<!--<script src="/public/static/home/js/buy.js"></script>-->
</body>
</html>