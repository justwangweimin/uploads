<?php
/* *
* @作者：王卫民
*
* @官网： www.just.edu.cn
*
* @版权：2018-2028 王卫民所有，并保留所有权利。
*
* @软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
*/
class up_msg_controller extends user{
	function index_action(){
		$id=(int)$_POST['id'];
		$u_id=$this->obj->update_once('userid_msg',array('is_browse'=>'2'),array('id'=>$id,'uid'=>$this->uid));
		if($u_id){
			echo 1;die;
		}else{
			echo 0;die;
		}
	}
}
?>