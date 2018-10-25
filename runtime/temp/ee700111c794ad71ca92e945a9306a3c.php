<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"D:\phpStudy\WWW\feichangcelue/application/index\view\index\index_information_first.html";i:1540174824;}*/ ?>
<!--按月-->
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>Title</title>
		<link rel="stylesheet" type="text/css" href="__STATIC__/home/css/index_information.css" />
	</head>

	<body>

		<div class="pz-day-content">
			<div class="pz-day-public pzdaymoney">
				<h2>保证金</h2>
				<!-- <h2>保证金 100-15000000元</h2> -->
				<input type="text" id="deposite_money" value="200">
			</div>
			<div class="pz-day-public pzdaytimes">
				<h2>选择杠杆率</h2>
				<div class="pz-select">
					<div class="nav_listdown" id="nav_listdown">
						<p class="set_listdown"><span class="j-num" id="num">3</span>倍</p>
						<ul class="new_listdown">
							<!--<li class="j-multiple-item" data-multiple="1" data-rate="1.00">-->
								<!--<span class="multiple">1</span>倍-->
							<!--</li>-->
							<!--<li class="j-multiple-item" data-multiple="2" data-rate="1.00">-->
								<!--<span class="multiple">2</span>倍-->
							<!--</li>-->
							<li class="j-multiple-item" data-multiple="3" data-rate="0.9">
								<span class="multiple">3</span>倍
							</li>
							<li class="j-multiple-item" data-multiple="4" data-rate="0.9">
								<span class="multiple">4</span>倍
							</li>
							<li class="j-multiple-item" data-multiple="5" data-rate="0.8">
								<span class="multiple">5</span>倍
							</li>
							<li class="j-multiple-item" data-multiple="6" data-rate="0.8">
								<span class="multiple">6</span>倍
							</li>
							<li class="j-multiple-item" data-multiple="7" data-rate="0.7">
								<span class="multiple">7</span>倍
							</li>
							<li class="j-multiple-item" data-multiple="8" data-rate="0.7">
								<span class="multiple">8</span>倍
							</li>
							<li class="j-multiple-item" data-multiple="9" data-rate="0.65">
								<span class="multiple">9</span>倍
							</li>
							<li class="j-multiple-item" data-multiple="10" data-rate="0.6">
								<span class="multiple">10</span>倍
							</li>
						</ul>
						<input type="hidden" id="multiple" value="2">
					</div>
				</div>
			</div>
			<div class="pz-day-public pzdaynumber">
				<h2>我需要操盘的月数？</h2>

				<div class="pz-select">
					<div class="nav_listdown" id="nav_listdown2">
						<p class="set_listdown"><span class="j-num" id="num_day">1</span>月</p>
						<ul class="new_listdown">
							<li class="j-duration-item" data-duration="1"><span>1</span>月</li>
							<li class="j-duration-item" data-duration="1"><span>2</span>月</li>
							<li class="j-duration-item" data-duration="1"><span>3</span>月</li>
							<li class="j-duration-item" data-duration="1"><span>4</span>月</li>
							<li class="j-duration-item" data-duration="1"><span>5</span>月</li>
							<li class="j-duration-item" data-duration="1"><span>6</span>月</li>
							<li class="j-duration-item" data-duration="1"><span>7</span>月</li>
							<li class="j-duration-item" data-duration="1"><span>8</span>月</li>
							<li class="j-duration-item" data-duration="1"><span>9</span>月</li>
							<li class="j-duration-item" data-duration="1"><span>10</span>月</li>
							<li class="j-duration-item" data-duration="1"><span>11</span>月</li>
							<li class="j-duration-item" data-duration="1"><span>12</span>月</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
		<div class="pz-day-content1">
			<h2>您需要准备的资金：</h2>
			<div class="pz-detail-count">
				<div class="pz-day-bond">
					<h3><span id="deposit_money">200</span>元</h3>
					<p>保证金</p>
				</div>
				<div style="position:absolute;margin-left: 265px;margin-top: 40px;"><img src="img/plus.png" width="28" height="28"></div>
				<div class="pz-day-bond">
					<h3><span id="rateFee"><?php echo $res_bei; ?></span>元*<span class="use_day"></span>月</h3>
					<p>月利息（元）*月数</p>
				</div>
				<div style="position:absolute;margin-left: 630px;margin-top: 40px;"><img src="img/equal.png" width="30" height="28"></div>
				<div class="pz-day-bond" style="margin-right:0px;">
					<h3><span id="borrow_fee"><?php echo $res_money; ?></span>元</h3>
					<p>准备资金（元）</p>
				</div>
			</div>
		</div>

		<div class="pz-day-form">
			<table>
				<tbody>
					<tr>
						<td style="background-color:#fcfcfc;">总操盘资金</td>
						<td width="300" style="background-color:#fcfcfc;">
							<div style="width:250px; margin:0 auto 0 16px;"><span id="borrow_money">600</span>元</div>
						</td>
						<td>获得资金</td>
						<td><span id="gain_money">600</span>元</td>

					</tr>
					<tr>
						<td style="background-color:#fcfcfc;">亏损警戒线：</td>
						<td width="300" style="background-color:#fcfcfc;">
							<span id="loss_warn">-<?php echo $cordon_line; ?></span>元<br>
							<span class="explain">(获得资金 + 保证金 X 0.5 )</span>
						</td>
						<td style="background-color:#fcfcfc;">亏损平仓线：</td>
						<td style="background-color:#fcfcfc;">
							<span id="loss_close">-<?php echo $loss_line; ?></span>元 <br>
							<span class="explain">(获得资金 + 保证金 X 0.2 )</span>
						</td>

					</tr>
					<tr>
						<!--<td>资金月利率：</td>-->
						<!--<td>-->
							<!--<span class="monthRateValue" id="RateValue">1</span>%-->
							<!--<br>-->
							<!--<span class="explain">(利息先付后用)</span>-->
						<!--</td>-->
						<td>资金使用期：</td>
						<td><span class="monthUse" id="monthUse">1</span>月</td>
					</tr>
					<tr>
						<td style="background-color:#fcfcfc;">交易时间:</td>
						<td colspan="3" style="text-align: center;text-indent: 57px; background-color:#fcfcfc;padding-left:69px;">
							<label><input type="radio" name="dealtime" class="start-date" value="1" checked="checked"> 今日</label>
							<!--<label><input type="radio" name="dealtime" class="start-date" value="2"> 下个交易日</label>-->
						</td>

					</tr>
					<tr>
						<td>操盘须知</td>
						<td colspan="3">投资沪深A股，<span class="position">仓位不限制</span>，收益全归您。</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="pz-agmt-btn">
			<label>
					<input type="checkbox" checked="checked" id="agreementCheckbox"> 我已阅读并同意
					<a style="color:#f00;" target="_blank" href="<?php echo url('index/index/EntrustmentAgreement'); ?>">《尚牛在线操盘协议》</a>
				</label>
			<a href="javascript:;" class="pz-me" onclick="applyFinancingQy()">我要配资</a>
		</div>

		<script type="text/javascript">
			var stopLossRate = parseFloat("<?php echo $stopLossRate; ?>");
			var lossLine = parseFloat("<?php echo $lossLine; ?>");
			//按月杠杆倍率1到10倍
//			var levers_month_1 = parseFloat("<?php echo $levers_month_1; ?>");
//			var levers_month_2 = parseFloat("<?php echo $levers_month_2; ?>");
			var levers_month_3 = parseFloat("<?php echo $levers_month_3; ?>");
			var levers_month_4 = parseFloat("<?php echo $levers_month_4; ?>");
			var levers_month_5 = parseFloat("<?php echo $levers_month_5; ?>");
			var levers_month_6 = parseFloat("<?php echo $levers_month_6; ?>");
			var levers_month_7 = parseFloat("<?php echo $levers_month_7; ?>");
			var levers_month_8 = parseFloat("<?php echo $levers_month_8; ?>");
			var levers_month_9 = parseFloat("<?php echo $levers_month_9; ?>");
			var levers_month_10 = parseFloat("<?php echo $levers_month_10; ?>");

			//  点击下拉
			$(".nav_listdown").on("click", function() {
				//	console.log(111);

				if($(this).children("ul").css('display') == 'none') {
					$(this).children("ul").show();
				} else {
					$(this).children("ul").hide();
				}

			});

			/*倍率*/

			$("#nav_listdown li").on("click", function() {
				$(this).parent().siblings("p").children("span").text($(this).children("span").text());
				var bao = parseInt($("#deposite_money").val());
				//倍率
				var a = parseFloat($("#num").text());
               //月数
				var c = parseFloat($("#num_day").text());
				
				//倍率小数
				var b;
					switch(a) {

//					case 1:
//						b = levers_month_1;
//						break;
//					case 2:
//						b = levers_month_2;
//						break;
					case 3:
						b = levers_month_3;
						break;
					case 4:
						b = levers_month_4;
						break;
					case 5:
						b = levers_month_5;
						break;
					case 6:
						b = levers_month_6;
						break;
					case 7:
						b = levers_month_7;
						break;
					case 8:
						b = levers_month_8;
						break;
					case 9:
						b = levers_month_9;
						break;
					case 10:
						b = levers_month_10;
						break;
				}
			
				var all = a*b*c*bao/100;


//				console.log(a);
//				console.log(b);
//				console.log(c);
				all = all.toFixed(2)
				$("#rateFee").text(all);
				
				all = parseFloat(all);
				var allnum = all + bao;
				$("#borrow_fee").text(allnum);

//                总操盘资金：（倍数a*保证金bao）
				var preparation_money =a*bao;

//				总操盘资金：
				$("#borrow_money").text(preparation_money);
//				获得资金
				$("#gain_money").text(preparation_money);
//				亏损警戒线：
                var loss_warn=stopLossRate*bao+preparation_money;
				$("#loss_warn").text(-loss_warn);
				//               亏损平仓线
				 var loss_close=lossLine*bao+preparation_money;
				$("#loss_close").text(-loss_close);
                //天数改变
                $('#monthUse').text(c);

				

			});

			/*月*/
			$("#nav_listdown2 li").on("click", function() {

				$(this).parent().siblings("p").children("span").text($(this).children("span").text());
				var bao = parseInt($("#deposite_money").val());
				
				//倍率
				var a = parseFloat($("#num").text());
               //天数
				var c = parseFloat($("#num_day").text());
				
				//倍率小数
				var b;
				switch(a) {

					case 1:
						b = levers_month_1;
						break;
					case 2:
						b = levers_month_2;
						break;
					case 3:
						b = levers_month_3;
						break;
					case 4:
						b = levers_month_4;
						break;
					case 5:
						b = levers_month_5;
						break;
					case 6:
						b = levers_month_6;
						break;
					case 7:
						b = levers_month_7;
						break;
					case 8:
						b = levers_month_8;
						break;
					case 9:
						b = levers_month_9;
						break;
					case 10:
						b = levers_month_10;
						break;
				}
				
				var all = a * b * c*bao/100;

				all = all.toFixed(2)
				$("#rateFee").text(all);
				
				all = parseFloat(all);
				var allnum = all + bao;
				$("#borrow_fee").text(allnum);

//                总操盘资金：（倍数a*保证金bao）
				var preparation_money =a*bao;
//				总操盘资金：
				$("#borrow_money").text(preparation_money);
//				获得资金
				$("#gain_money").text(preparation_money);
//				亏损警戒线：
                var loss_warn=stopLossRate*bao+preparation_money;
				$("#loss_warn").text(-loss_warn);
				//               亏损平仓线
				 var loss_close=lossLine*bao+preparation_money;
				$("#loss_close").text(-loss_close);
                //天数改变
                $('#monthUse').text(c);
				
			});

			//  保证金改变
			$("#deposite_money").on('input',function() {
//				保证金
			 var bao = parseInt($("#deposite_money").val());
			 $("#deposit_money").text(bao);
				//倍率
				var a = parseFloat($("#num").text());
               //天数
				var c = parseFloat($("#num_day").text());
				
				//倍率小数
				var b;
					switch(a) {

					case 1:
						b = levers_month_1;
						break;
					case 2:
						b = levers_month_2;
						break;
					case 3:
						b = levers_month_3;
						break;
					case 4:
						b = levers_month_4;
						break;
					case 5:
						b = levers_month_5;
						break;
					case 6:
						b = levers_month_6;
						break;
					case 7:
						b = levers_month_7;
						break;
					case 8:
						b = levers_month_8;
						break;
					case 9:
						b = levers_month_9;
						break;
					case 10:
						b = levers_month_10;
						break;
				}
			
				var all = a * b * c*bao/100;
				all = all.toFixed(2)
				$("#rateFee").text(all);
				all = parseFloat(all);
				var allnum = all + bao;
				$("#borrow_fee").text(allnum);

//                总操盘资金：（倍数a*保证金bao）
				var preparation_money =a*bao;
//				总操盘资金：
				$("#borrow_money").text(preparation_money);
//				获得资金
				$("#gain_money").text(preparation_money);
//				亏损警戒线：
                var loss_warn=stopLossRate*bao+preparation_money;
				$("#loss_warn").text(-loss_warn);
				//               亏损平仓线
				 var loss_close=lossLine*bao+preparation_money;
				$("#loss_close").text(-loss_close);
                //天数改变
                $('#monthUse').text(c);
				
			});

 //按月配资
		function applyFinancingQy() {
        	var month_select=$("#num_day").text();//选中的月数的值
            var ajax_html = $("#borrow_money").text(); //总配资的值
            var yuebeishu =$("#num").text();
//          $(".box").css("display","block");
            $.ajax({
                type: 'POST',
                url: "<?php echo url('index/index/ajax_yue'); ?>",
                data: {'ajax_html':ajax_html,'yuebeishu':yuebeishu,'month_select':month_select},
                dataType: 'json',
                success: function (data) {
                  window.location.href = "./month_buy";
                },
                fail: function (err, status) {
                    console.log(3)
                }
            })
        };
		</script>

	</body>

</html>