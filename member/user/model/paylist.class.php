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
class paylist_controller extends user{
	function index_action(){
		include(CONFIG_PATH."db.data.php");
		$this->yunset("arr_data",$arr_data);
		$this->public_action();
		$urlarr=array("c"=>"paylog","page"=>"{{page}}");
		$pageurl=Url('member',$urlarr);
		$where.="`uid`='".$this->uid."' and `order_price`>0  order by order_time desc";
		$this->get_page("company_order",$where,$pageurl,"10");
		$this->user_tpl('paylist');
	}
	function del_action(){
		if($_GET['id']){
			$id=$this->obj->DB_delete_all("company_order","`id`='".(int)$_GET['id']."' and `uid`='".$this->uid."'");
			if($id){
				$this->obj->member_log("取消订单");
				$this->layer_msg('订单取消成功！',9,0,$_SERVER['HTTP_REFERER']);
			}else{
				$this->layer_msg('订单取消失败！',8,0,$_SERVER['HTTP_REFERER']);
			}
		}
	}
}
?>