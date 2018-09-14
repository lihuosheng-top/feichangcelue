<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:93:"D:\phpStudy\PHPTutorial\WWW\feichangcelue/application/index\view\index\index_information.html";i:1536661917;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>


</head>
<body>

        <div class="pz-day-content">
            <div class="pz-day-public pzdaymoney">
                <h2>保证金</h2>
                <!-- <h2>保证金 <span> 100 - 500000元 </span></h2> -->
                <input type="text" id="pzTransTomoney" value="100">
            </div>
            <div class="pz-day-public pzdaytimes">
                <h2>配资杠杆</h2>
                <div class="pz-select">
                    <div class="nav_listdown" id="nav_listdown">
                        <p class="">5倍</p>
                        <input type="hidden" id="multiple" value="5">
                    </div>
                </div>
            </div>
            <div class="pz-day-public pzdaynumber">
                <h2>操盘天数</h2>
                <div class="pz-select">
                    <div class="nav_listdown2">
                        <p class="">20天</p>
                        <input type="hidden" id="use_data" value="20">
                    </div>
                </div>
            </div>
        </div>
        <div class="pz-day-content1">
            <h2>您需要准备的资金：</h2>
            <div class="pz-detail-count">
                <div class="pz-day-bond">
                    <h3><span id="deposit_money">100</span>元</h3>
                    <p>保证金</p>
                </div>
                <div style="position:absolute;margin-left: 265px;margin-top: 40px;"><img src="img/plus.png" width="28" height="28"></div>
                <div class="pz-day-bond">
                    <h3><span id="rateFee">0</span>元</h3>
                    <p>利息</p>
                </div>
                <div style="position:absolute;margin-left: 630px;margin-top: 40px;"><img src="img/equal.png" width="30" height="28"></div>
                <div class="pz-day-bond" style="margin-right:0px;">
                    <h3><span id="borrow_fee">100</span>元</h3>
                    <p>准备资金（元）</p>
                </div>
            </div>
        </div>

        <div class="pz-day-form">
            <table>
                <tbody><tr>
                    <td style="background-color:#fcfcfc;">总操盘资金：</td>
                    <td width="300" style="background-color:#fcfcfc;"><div style="width:250px; margin:0 auto 0 16px;"><span id="borrow_money">600</span>元</div></td>
                    <td>资金使用期：</td>
                    <td> 20 天</td>
                </tr>
                <tr>
                    <td style="background-color:#fcfcfc;">亏损警戒线：</td>
                    <td width="300" style="background-color:#fcfcfc;">
                        <span id="lose-warn">550</span>元 <br>
                        <span class="explain">(获得资金 + 保证金 X 0.5 )</span>
                    </td>
                    <td>亏损平仓线：</td>
                    <td>
                        <span id="lose-close">520</span>元
                        <br>
                        <span class="explain">(获得资金 + 保证金 X 0.2 )</span>
                    </td>

                </tr>
                <tr>
                    <td style="background-color:#fcfcfc;">交易时间:</td>
                    <td colspan="3" style="text-align: left;text-indent: 57px;background-color:#fcfcfc;padding-left:69px;">
                        <label><input type="radio" name="dealtime" class="start-date" value="1" checked="checked"> 今日</label>
                        <label><input type="radio" name="dealtime" class="start-date" value="2"> 下个交易日</label>
                    </td>
                </tr>
                <tr>
                    <td>操盘须知</td>
                    <td colspan="3">投资沪深A股，仓位不限制，收益盈利7成归您。如有疑问，请咨询：400-668-2979</td>
                </tr>
            </tbody></table>
        </div>

        <div class="pz-agmt-btn">
            <label>
                <input type="checkbox" checked="checked" id="agreementCheckbox">
                我已阅读并同意
              <a style="color:#f00;" target="_blank" href="#">《尚牛在线操盘协议》</a>
            </label>
            <a class="pz-me" onclick="applyFinancingQy()">我要配资</a>
        </div>

<script type="text/javascript">
	//  点击下拉
$(".nav_listdown").on("click",function(){
//	console.log(111);

if($(this).children("ul").css('display')=='none'){
	$(this).children("ul").show();
}
else{
		$(this).children("ul").hide();
}
	
});


$(".nav_listdown li").on("click",function(){
	$(this).parent().siblings("p").children("span").text($(this).children("span").text());

});


</script>
</body>
</html>