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
class YunQrcode {

	static function generatePng2($inputContent,$size){
		require_once LIB_PATH."phpqrcode.php";
		return QRcode::png($inputContent, false, QR_ECLEVEL_L, $size);
	}
}


?>