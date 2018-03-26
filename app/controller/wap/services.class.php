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
class services_controller extends common{
	function index_action(){
		$this->rightinfo();
		$this->get_moblie();
		$M=$this->MODEL('article');
		$row=$M->GetDescriptionOnce(array('id'=>'5'),array('field'=>'content'));
		$this->yunset("row",$row);
		$this->yunset("headertitle","服务协议"); 
		$this->yuntpl(array('wap/services'));
	}	
}
?>