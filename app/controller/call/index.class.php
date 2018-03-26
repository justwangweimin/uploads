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

class index_controller extends common{
	function index_action(){ 

		include LIB_PATH."datacall.class.php";
		$call= new datacall("data/plus/data/",$this->obj);
		$row=$call->get_data($_GET[id]);
		$row=str_replace("\n","",$row);
		$row=str_replace("\r","",$row);
		$row=str_replace("'","\'",$row);
		echo "document.write('$row');";
	}
	
}
?>