<?php


return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
//前台路由定义
    'buy' => 'index/index/buy?code',				  	//A股购买
    'buy_entrust' => 'index/index/buy_entrust',	//购买委托
    'freetrial'=> 'index/index/freetrial?code',	    //1元模拟
    'freetrial1'=> 'index/index/freetrial1',
    'sell'=> 'index/ucenter/sell',       			//点卖区
    'history'=> 'index/ucenter/history',       	//结算区
    "ajax_html"=>"index/index/ajax_html",

    'freetrialSell'=> 'index/ucenter/freetrialSell',       			//点卖区 一元模拟
    'freetrialHistory'=> 'index/ucenter/freetrialHistory',       	//结算区 一元模拟


    /*配资几个页面开始*/
    "stock_day"=>"index/Stock/stock_day",
    "stock_week"=>"index/Stock/stock_week",
    "stock_month"=>"index/Stock/stock_month",
    "stock_free"=>"index/Stock/stock_free",
    "stock_day_return"=>"index/Stock/stock_day_return",//日利息数据返回到前台界面使用
    "stock_week_return"=>"index/Stock/stock_week_return",//周利息数据返回到前台界面使用
    "stock_month_return"=>"index/Stock/stock_month_return",//月利息数据返回到前台界面使用
    /*配资几个页面结束*/





    'detail'=> 'index/ucenter/detail',       		//结算区-单号详情
    'safeensure'=> 'index/index/safeensure',       		//安全保障
    'gift'=> 'index/index/gift',       			//协议
    'help'=> 'index/index/help',       			//帮助中心-常见问题
    'guild'=> 'index/index/guild',       		//帮助中心-新手教学

    'reg/:uid'=> ['index/index/reg', ['method' => 'get'] ],      			//注册(带参数)
    'reg'=> 'index/index/reg?uid',       			//注册(不带参数)

    'news'=>'index/index/news',                     //财经资讯
    'news_t'=>'index/index/news_t',                     //新闻内容
    'app_broadcast'=>'index/index/app_broadcast',   //手机端轮播图
    'stock_exponential_sh'=>'index/index/stock_exponential_sh', //手机端上证指数
    'stock_exponential_sz'=>'index/index/stock_exponential_sz', //手机端深证证指数
    'pc_broadcast'=>'index/index/pc_broadcast',     //pc端轮播图
    'index_information'=>'index/index/index_information', //pc端首页配资
    'index_information_first'=>'index/index/index_information_first', //pc端首页配资
    'index_information_second'=>'index/index/index_information_second', //pc端首页配资


	'qq_add'=>'index/index/qq_add',                 //qq客服
    'invite'=> 'index/index/invite',       			//邀请码
    'login'=> 'index/index/login',       		    //登录
    'reg_agree'=> 'index/index/reg_agree',      //服务协议
    'company'=> 'index/index/company',       	//关于我们
    'contact'=> 'index/index/contact',       	//联系我们
    'protocol_1'=> 'index/index/protocol_1',	    //协议1
    'protocol_2'=> 'index/index/protocol_2',	    //协议2
    'protocol_3'=> 'index/index/protocol_3',	    //协议3
    'download'=> 'index/index/download',	    //下载
    //手机
    'doLogin'=>'index/index/doLogin',           //登录
    'logout'=>'index/index/logout',             //退出
 //   "index"=>"index/index/index",               //首页
    'doReg'=>'index/index/doReg',               //注册
    'reg_agreement'=>'index/index/reg_agreement', //注册协议
    'sendMobileCode'=>'index/index/sendMobileCode',         //短信验证
    "stock"=>"index/index/stock",
    //"authllpay_wap"=>"index/lianlianauthpay/authllpay_wap",         //银行卡充值

    "updateNewPwd"=>"index/index/updateNewPwd",                         //密码修改
    "doReanNameAuth"=>"index/ucenter/doReanNameAuth",                   //认证信息
    "home"=>"ucenter/mobile/home",

    'forgot_pass'=> 'index/index/forgot_pass',  //忘记密码-01账户名
    'mobile_val'=> 'index/index/mobile_val',   	//忘记密码-02密码重置
    'pass_reset'=> 'index/index/pass_reset',   	//忘记密码-03密码找回
    'reset_result'=> 'index/index/reset_result',//忘记密码-04完成

    'ucenter/index'=> 'index/ucenter/member',   			//个人中心-首页
    'ucenter/payment'=> 'index/ucenter/payment',   			//个人中心-充值
    'ucenter/withdraw'=> 'index/ucenter/withdraw',   		//个人中心-充值
    'ucenter/bankcards'=> 'index/ucenter/bankcards',   		//个人中心-银行卡管理
    'ucenter/security'=> 'index/ucenter/security',   		//个人中心-账户安全
    'ucenter/agent'=> 'index/ucenter/agent',   				//个人中心-推广赚钱
//  手机
	'ucenter/home'=> 'index/ucenter/home',  				//个人中心-首页
    "ucenter/bank_transfer"=>"index/ucenter/bank_transfer",          //银行卡充值2
    'ucenter/dowithdraw'=>"index/ucenter/doWithdraw",       //银行卡体现
    'ucenter/alipay'=> 'index/ucenter/alipay',   			//个人中心-充值-支付宝
    'ucenter/re_tip'=> 'index/ucenter/re_tip',   			//个人中心-充值-支付宝-2
    'ucenter/wechatpay'=> 'index/ucenter/wechatpay',   		//个人中心-充值-微信
    'ucenter/quick_pay'=> 'index/ucenter/quick_pay',   		//个人中心-充值-银联支付
    'ucenter/user_info'=> 'index/ucenter/user_info',   		//个人中心-实名认证
    'ucenter/real_name'=> 'index/ucenter/real_name',   		//个人中心-实名认证2
    'ucenter/add_bankcard'=> 'index/ucenter/add_bankcard',  //个人中心-添加银行卡

    //后台路由设置
    'withdraw_finished'=> 'admin/member/withdraw_finished',  				//个人中心-首页
    'do_withdraw'=> 'admin/member/do_withdraw',  				//个人中心-首页
    'bank_apppay'=> 'admin/member/bank_apppay',  				//个人中心-首页
    'bank_app'=> 'admin/member/bank_app',  				//个人中心-首页
    'recharge_operation'=> 'admin/member/recharge_operation',  				//个人中心-首页
    'buylist'=> 'admin/order/buylist',  				//个人中心-首页
    'liquidation'=> 'admin/order/liquidation',  				//个人中心-首页
    'setStatus'=> 'admin//notemsg/setStatus',  				//个人中心-首页

];
