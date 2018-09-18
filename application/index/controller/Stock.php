<?php
/**
 * Created by PhpStorm.
 * User: 李火生
 * Date: 2018/9/18
 * Time: 10:17
 */

namespace app\index\controller;

use think\Controller;

class  Stock extends  Controller{

    /**
     **************李火生*******************
     * @return \think\response\View
     * 按天配资
     **************************************
     */
    public function  stock_day(){
      return  view('index/mobile/stock_day');
    }

    /**
     **************李火生*******************
     * @return \think\response\View
     * 按月配资
     **************************************
     */
    public function  stock_week(){
        return  view('index/mobile/stock_week');
    }

    /**
     **************李火生*******************
     * @return \think\response\View
     * 按周配资
     **************************************
     */
    public function  stock_month(){
        return  view('index/mobile/stock_month');
    }

    /**
     **************李火生*******************
     * @return \think\response\View
     * 免息配资
     **************************************
     */
    public function  stock_free(){
        return  view('index/mobile/stock_free');
    }



}