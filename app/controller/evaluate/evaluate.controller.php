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
class evaluate_controller extends common{ 
	function evaluate_tpl($tpl){
		$this->yuntpl(array('default/evaluate/'.$tpl));
	}
	
	function imgWebUrl($imgPath){
		return $this->config['sy_weburl']."/".$imgPath;
	}	
	
	function create_uuid($prefix = "yun"){    
		$str = md5(uniqid(mt_rand(), true));   
		$uuid  = substr($str,0,12);   
		return $prefix.$uuid; 
	}	
}
?>