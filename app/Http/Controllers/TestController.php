<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function alipay()
    {
        $url="https://openapi.alipay.com/gateway.do"; //支付宝网关

        $app_id="2016101400681519";
        $method="alipay.trade.page.pay";
        $charset="utf8";
        $sing_type="RSA2";
        $sing='';
        $timestamp=date("Y-m-d H:i:s");
        $version="1.0";
        $return_url = 'http://1905api.comcto.com/test/alipay/return';       // 支付宝同步通知
        $notify_url = 'http://1905api.comcto.com/test/alipay/notify';        // 支付宝异步通知地址
        $biz_content = '';

        // 请求参数
        $out_trade_no = time() . rand(1111,9999);       //商户订单号
        $product_code = 'FAST_INSTANT_TRADE_PAY';
        $total_amount = 0.01;
        $subject = '测试订单' . $out_trade_no;

    }
}
