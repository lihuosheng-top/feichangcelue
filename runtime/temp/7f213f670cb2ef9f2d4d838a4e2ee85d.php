<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:100:"D:\phpStudy\PHPTutorial\WWW\feichangcelue/application/index\view\index\index_information_second.html";i:1539334158;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    
</head>
<body>

 <div class="pz-day-content">
            <div class="pz-day-public pzdaymoney">
                <h2>保证金</h2>
                <input type="text" id="deposite_money" value="100">
            </div>
            <div class="pz-day-public pzdaytimes">
                <h2>选择杠杆率</h2>
                <div class="pz-select">
                    <div class="nav_listdown" id="nav_listdown">
                        <p class="set_listdown"><span class="j-num">1</span>倍</p>
                        <ul class="new_listdown">
                            <li class="j-multiple-item" data-multiple="1" data-rate="0.10">
                                    <span class="multiple">1</span>倍
                                </li><li class="j-multiple-item" data-multiple="2" data-rate="0.10">
                                    <span class="multiple">2</span>倍
                                </li><li class="j-multiple-item" data-multiple="3" data-rate="0.09">
                                    <span class="multiple">3</span>倍
                                </li><li class="j-multiple-item" data-multiple="4" data-rate="0.09">
                                    <span class="multiple">4</span>倍
                                </li><li class="j-multiple-item" data-multiple="5" data-rate="0.08">
                                    <span class="multiple">5</span>倍
                                </li><li class="j-multiple-item" data-multiple="6" data-rate="0.08">
                                    <span class="multiple">6</span>倍
                                </li><li class="j-multiple-item" data-multiple="7" data-rate="0.07">
                                    <span class="multiple">7</span>倍
                                </li><li class="j-multiple-item" data-multiple="8" data-rate="0.07">
                                    <span class="multiple">8</span>倍
                                </li><li class="j-multiple-item" data-multiple="9" data-rate="0.065">
                                    <span class="multiple">9</span>倍
                                </li><li class="j-multiple-item" data-multiple="10" data-rate="0.06">
                                    <span class="multiple">10</span>倍
                                </li>                        </ul>
                        <input type="hidden" id="multiple" value="2">
                    </div>
                </div>
            </div>
            <div class="pz-day-public pzdaynumber">
                <h2>我需要操盘的天数？</h2>
                <div class="pz-select">
                    <div class="nav_listdown" id="nav_listdown2">
                        <p class="set_listdown"><span class="j-num">1</span>天</p>
                        <ul class="new_listdown">
                            <li class="j-duration-item" data-duration="2"><span>2</span>天</li>
                            <li class="j-duration-item" data-duration="3"><span>3</span>天</li>
                            <li class="j-duration-item" data-duration="3"><span>4</span>天</li>                    
                            <li class="j-duration-item" data-duration="3"><span>5</span>天</li>
                            <li class="j-duration-item" data-duration="3"><span>6</span>天</li>
                            <li class="j-duration-item" data-duration="3"><span>7</span>天</li>
                            <li class="j-duration-item" data-duration="3"><span>8</span>天</li>
                            <li class="j-duration-item" data-duration="3"><span>9</span>天</li>
                            <li class="j-duration-item" data-duration="3"><span>10</span>天</li>
                            <li class="j-duration-item" data-duration="3"><span>11</span>天</li>
                            <li class="j-duration-item" data-duration="3"><span>12</span>天</li>
                            <li class="j-duration-item" data-duration="2"><span>13</span>天</li>
                            <li class="j-duration-item" data-duration="3"><span>14</span>天</li>
                            <li class="j-duration-item" data-duration="3"><span>15</span>天</li>                    
                            <li class="j-duration-item" data-duration="3"><span>16</span>天</li>
                            <li class="j-duration-item" data-duration="3"><span>17</span>天</li>
                            <li class="j-duration-item" data-duration="3"><span>18</span>天</li>
                            <li class="j-duration-item" data-duration="3"><span>19</span>天</li>
                            <li class="j-duration-item" data-duration="3"><span>20</span>天</li>
                            <li class="j-duration-item" data-duration="3"><span>21</span>天</li>
                            <li class="j-duration-item" data-duration="3"><span>22</span>天</li>
                            <li class="j-duration-item" data-duration="3"><span>23</span>天</li>
                            <li class="j-duration-item" data-duration="2"><span>24</span>天</li>
                            <li class="j-duration-item" data-duration="3"><span>25</span>天</li>
                            <li class="j-duration-item" data-duration="3"><span>26</span>天</li>                    
                            <li class="j-duration-item" data-duration="3"><span>27</span>天</li>
                            <li class="j-duration-item" data-duration="3"><span>28</span>天</li>
                            <li class="j-duration-item" data-duration="3"><span>29</span>天</li>
                            <li class="j-duration-item" data-duration="3"><span>30</span>天</li>
                         
                            
                        </ul>
                    </div>
                    <input type="hidden" id="use_data" value="">
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
                    <h3><span id="rateFee">0.20</span>元</h3>
                    <p>日利息（元）*天数</p>
                </div>
                <div style="position:absolute;margin-left: 630px;margin-top: 40px;"><img src="img/equal.png" width="30" height="28"></div>
                <div class="pz-day-bond" style="margin-right:0px;">
                    <h3><span id="borrow_fee">100.20</span>元</h3>
                    <p>准备资金（元）</p>
                </div>
            </div>
        </div>
        <div class="pz-day-form">
            <table>
                <tbody><tr>
                    <td style="background-color:#fcfcfc;">总操盘资金：</td>
                    <td width="300" style="background-color:#fcfcfc;">
                        <div style="width:250px; margin:0 auto 0 16px;"><span id="total_money">200</span>元</div>
                    </td>
                    <td>获得资金</td>
                    <td><span id="gain_money">100</span>元</td>
                </tr>
                <tr>
                    <td style="background-color:#fcfcfc;">亏损警戒线：</td>
                    <td width="300" style="background-color:#fcfcfc;">
                        <span id="loss_warn">150</span>元
                        <br>
                        <span class="explain">(获得资金 + 保证金 X 0.5 )</span>
                    </td>
                    <td>亏损平仓线：</td>
                    <td>
                        <span id="loss_close">120</span>元
                        <br>
                        <span class="explain">(获得资金 + 保证金 X 0.2 )</span>
                    </td>
                </tr>
                <tr>
                    <td>资金天利率</td>
                    <td><span id="RateValue">0.1</span>%</td>
                    <td>资金使用期：</td>
                    <td><span id="duration">2</span>天</td>
                </tr>
                <tr>
                    <td style="background-color:#fcfcfc;">交易时间:</td>
                    <td colspan="3">
                        <label><input type="radio" name="dealtime" class="start-date" value="1" checked="checked"> 今日</label>
                        <label><input type="radio" name="dealtime" class="start-date" value="2"> 下个交易日</label>                    </td>
                </tr>
                <tr>
                    <td>操盘须知</td>
                    <td colspan="3">投资沪深A股，<span class="position">仓位不限制</span>，收益全归您。</td>
                </tr>
            </tbody></table>
        </div>
        <div class="pz-agmt-btn">
            <label>
                <input type="checkbox" checked="checked" id="agreementCheckbox"> 我已阅读并同意
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