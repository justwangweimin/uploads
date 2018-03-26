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
require_once("class/alipay_notify.php");
require_once("alipay_config.php");
require_once(dirname(dirname(dirname(__FILE__)))."/global.php");

$alipay = new alipay_notify($partner,$security_code,$sign_type,$_input_charset,$transport);    
$verify_result = $alipay->notify_verify();  
if($verify_result) {
	if(!preg_match('/^[0-9]+$/', $_POST['out_trade_no'])){
		die;
	}

    $dingdan           = $_POST['out_trade_no'];	   
    $total_fee         = $_POST['total_fee'];	    


    if($_POST['trade_status'] == 'TRADE_FINISHED' ||$_POST['trade_status'] == 'TRADE_SUCCESS') {  


			if($sOld_trade_status < 1) {

				require_once(APP_PATH.'app/public/common.php');
				require_once(LIB_PATH.'ApiPay.class.php');

				$apiPay = new apipay($phpyun,$db,$db_config['def'],'index');
				
				$apiPay->payAll($dingdan,$total_fee,'alipay');
			}
			echo "success";


		 
	} else {
        echo "success";		

    }
}else {

    echo "fail";

}
?>