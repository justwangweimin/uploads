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
class sysnews_controller extends user{
	function index_action(){
		$where.= "`fa_uid`='".$this->uid."' order by id desc";
		$urlarr["c"] = $_GET["c"];
		$urlarr["page"] = "{{page}}";
		$pageurl = Url('member',$urlarr);
		$rows=$this->get_page("sysmsg",$where,$pageurl,"10");
		$this->public_action();
		$this->user_tpl('sysnews');
	}
	function del_action(){
		$nid = $this->obj->DB_delete_all("sysmsg","`id`='".(int)$_GET['id']."' and `fa_uid`='".$this->uid."'");
		if($nid){
			$this->obj->member_log("删除系统消息");
			$this->layer_msg('删除成功！',9);
		}else{
			$this->layer_msg('删除失败！',8);
		}
	}
	function set_action(){
		if(intval($_POST['id'])){
			$this->obj->DB_update_all("sysmsg","`remind_status`='1'","`id`='".intval($_POST['id'])."' and `fa_uid`='".$this->uid."' and `remind_status`='0'");
		}
	}
}
?>