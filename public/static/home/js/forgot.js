(function ($) {
		    if (!$.setCookie) {
		        $.extend({
		            setCookie: function (c_name, value, exdays) {
		                try {
		                    if (!c_name) return false;
		                    var exdate = new Date();
		                    exdate.setDate(exdate.getDate() + exdays);
		                    var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
		                    document.cookie = c_name + "=" + c_value;
		                }
		                catch (err) {
		                    return '';
		                };
		                return '';
		            }
		        });
		    };
		    if (!$.getCookie) {
		        $.extend({
		            getCookie: function (c_name) {
		                try {
		                    var i, x, y,
		                        ARRcookies = document.cookie.split(";");
		                    for (i = 0; i < ARRcookies.length; i++) {
		                        x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
		                        y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
		                        x = x.replace(/^\s+|\s+$/g, "");
		                        if (x == c_name) return (y);
		                    };
		                }
		                catch (err) {
		                    return '';
		                };
		                return '';
		            }
		        });
		    };
})(jQuery);
var forgot={
	init:function(){
		this.eventsBind()
	},
	eventsBind:function(){
		var base=this;
		//step1页面
		$('#phone').on('keyup afterpaste change',function(){
			 $("#auth_reg_timerD").hide();
                var w = $("#auth_reg_smsA").parent();
                w.addClass("capcha-count-down");
                $("#auth_reg_smsA").removeClass("active");
                $('#phone_err1').hide();
                if ($("#phone").val().length == 11) {
                    w.removeClass("capcha-count-down");
                    $(".btn-get-capcha", w).addClass("active");
                    $("#auth_reg_timerD").hide();
            	}else{
            		$('#phone_err1').show();
            	}
			
		})
		$('#mobile_code').on('keyup afterpaste change',function(){
			$('#mobile_code_err1').hide()
			if($(this).val().length==0){
				$('#mobile_code_err1').show()
			}
		})
			//点击获取校验码
            $("#auth_reg_smsA").click(function () {
            	alert(111);
            		var phone=$("#phone").val();
            	// console.log(phone);
              $.ajax({
				    type:"post",                      //请求类型
				    url:"./sendMobileCode",           //URL
				    data:{
                        'mobile':phone
                    },   //传递的参数
				    dataType:"json",                 //返回的数据类型
				    success:function(data){          //data就是返回的json类型的数据
                        // console.log(data);
                        if(data.code ==0){
                          alert(data.msg);
                        }
                        if(data.status==1){
                            // alert("发送成功,请留意短信")
                            buttonCountdown($('#auth_reg_smsA'), 1000 * 60 * 1, "ss");
                        }

				    },
				    error:function(data){
				        console.log('失败');
				    }
				});
				
            });
		//下一步1
        $('#step2-btn').click(function() {
        	$('#phone,#mobile_code').trigger('keyup');
        	if($('#mobile_code').val().length!=0){
        		$.post("/index/index/checkForgotMobileCode", {mobile: $("#phone").val(), code:$('#mobile_code').val()}, function(data){
						$("#mobile_code").val('');
                      if(data.code != '0'){
                         tool.popup_err_msg(data.msg);
                      } else {
						  	window.location.href='/pass_reset.html';
                      }
                }, 'json');    
        	}
        });

 
        //step2页面
		$('#pwd').on('keyup afterpaste change',function(){
			$('#pwd_err1').hide()
			if($(this).val().length<6){
				$('#pwd_err1').show()
			}
		})
		$('#cpwd').on('keyup afterpaste change',function(){
			$('#cpwd_err1').hide()
			if($(this).val()!=$('#pwd').val()){
				$('#cpwd_err1').show()
			}
		})
		//下一步2
		$('#step3-btn').click(function(){
        	$('#pwd,#cpwd').trigger('keyup');
        	if($('#pwd').val().length!=0&&$('#cpwd').val()==$('#pwd').val()){
        		$.ajax({
           				type:"post",
           				url:"/index/index/updateNewPwd",
           				data:{
           					mobile:$("#phone").val(),
           					login_newPwd:$('#pwd').val(),
           				},
           				dataType:'json',
           				success:function(data){
	                        if(data.code != '0'){
	                            tool.popup_err_msg(data.msg);
	                        }else{
	                            window.location.href='/reset_result.html';
	                        }
           				}
           			});  
        	}
        });

        
		
	},
	
}
