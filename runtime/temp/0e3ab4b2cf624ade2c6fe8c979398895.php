<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:89:"D:\phpStudy\PHPTutorial\WWW\feichangcelue/application/index\view\index\mobile\invite.html";i:1532601786;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>尚牛在线</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <link href="./public/static/home/css/mui.min.css" rel="stylesheet" />
    <link href="./public/static/home/css/moblie/login.css" rel="stylesheet" />
</head>
<!--登录-->
<body class="reg_body">
<!--标题-->
<header class="ml_header mui-bar mui-bar-nav">
    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
    <h1 class="mui-title">邀请链接</h1>
</header>
<!--主体-->
<div class="mui-content">

    <form class="reg_form login_form mui-input-group" method="" action="">
        <div class="mui-input-row">
            <!--<input id="mobile" type="text" name="invite" value="<?php echo $share_url; ?>" class="mui-input-clear" placeholder="<?php echo $share_url; ?>">-->
            <textarea cols="30" rows="20" id="share_url"><?php echo $share_url; ?></textarea>
        </div>
        <button type="submit" onclick="copyUrl2()" id="reg_btn" class="ml_btn mui-btn mui-btn-block">一键复制</button>
    </form>
</div>
<script type="text/javascript">
    function copyUrl2()
    {
        var Url2=document.getElementById("share_url");
        Url2.select(); // 选择对象
        document.execCommand("Copy"); // 执行浏览器复制命令
        mui.alert("复制成功，可用于粘贴。");
    }
</script>
<script type="text/javascript">
    </script>

<script src="./public/static/libs/jquery-2.2.0/jquery-2.2.0.min.js"></script>
<script src="./public/static/home/js/moblie/mui.min.js"></script>
<script src="./public/static/home/js/moblie/reg.js"></script>
</body>
</html>