<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"D:\phpStudy\WWW\feichangcelue/application/index\view\index\news_t.html";i:1540189608;s:77:"D:\phpStudy\WWW\feichangcelue/application/index\view\public\PcPublicFoot.html";i:1540180391;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
资讯详情页
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
                    <p><a href="/stock/monthfinancing">按月配资申请</a></p>
                    <p><a href="/stock/weekfinancing">按周配资申请</a></p>
                    <p><a href="/stock/freefee">免息配资申请</a></p>
                </div>

            </div>
            <div class="footTel">
                <div class="footTel-top">
                    <img src="__STATIC__/home/img/foot-guide.png" alt="">
                    <span>配资利息讲解</span>
                </div>
                <div class="footTel-links">
                    <p><a href="/aboutus/atlxjj.html">按天利息讲解</a></p>
                    <p><a href="/aboutus/azlxjj.html">按周利息讲解</a></p>
                    <p><a href="/aboutus/aylxjj.html">按月利息讲解</a></p>
                    <p><a href="/aboutus/mxpzjj.html">免息配资讲解</a></p>


                </div>

            </div>
            <div class="footTel">
                <div class="footTel-top">
                    <img src="__STATIC__/home/img/foot-offi.png" alt="">
                    <span>宝尚微信</span>
                </div>
                <div class="footTel-links">
                    <p></p><p><img style="float: none; margin: 0px" alt=""width="100%" src="__STATIC__/home/img/20170626180649.png"></p><p></p>
                </div>

            </div>
            <div class="footTel">
                <div class="footTel-top">
                    <img src="__STATIC__/home/img/foot-offi.png" alt="">
                    <span>宝尚公众号</span>
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
                    <p><a href="/rhzchy/index.html">如何注册会员</a></p>
                    <p><a href="/rhsmrz/index.html">如何实名认证</a></p>
                    <p><a href="/rhjxcz/index.html">如何进行充值</a></p>
                    <p><a href="/rhsqpz/index.html">如何申请配资</a></p>

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
        type:'POST',
        url:'<?php echo url("index/index/news_t"); ?>',
        dataType: 'json',
        success: function(data){
            console.log(data);
//            $(".article_title").html(data.data.title);
//            $(".article_create_time").html(data.data.createTime);
//            $(".contbox").html(data.data.content);
        },
        error:function(data) {
            console.log("失败");
        },
    });
</script>
</body>
</html>