<?php
/*
* @作者：王卫民
*
* @官网： www.just.edu.cn
*
* @版权：2018-2028 王卫民所有，并保留所有权利。
*
* @软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
 */

error_reporting(0);
require_once("alipay.config.php");
require_once("lib/alipay_notify.class.php");
require_once(dirname(dirname(dirname(__FILE__)))."/global.php");



$alipayNotify = new AlipayNotify($aliapy_config);
$verify_result = $alipayNotify->verifyReturn();
if($verify_result) {
    $dingdan		= $_GET['out_trade_no'];	
    $trade_no		= $_GET['trade_no'];		
    $total_fee		= $_GET['price'];			
	if(!preg_match('/^[0-9]+$/', $_GET['out_trade_no'])){
		die;
	}
	
	require_once(APP_PATH.'app/public/common.php');
	require_once(LIB_PATH.'ApiPay.class.php');

	$apiPay = new apipay($phpyun,$db,$db_config['def'],'index');
	
	$apiPay->payAll($dingdan,$total_fee,'alipay');
	header("Location:".$config['sy_weburl']."/member/index.php?c=paylog");



	
}
else {
    
    echo "验证失败";
}
?>
