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
class invoice_controller extends company
{
	function index_action(){
		include(CONFIG_PATH."db.data.php");
		$this->yunset("arr_data",$arr_data);
		$this->public_action();
		$this->company_satic();
		$urlarr=array("c"=>"invoice","page"=>"{{page}}");
		$pageurl=Url('member',$urlarr);
		$where="`uid`='".$this->uid."'  order by addtime desc";
		$rows=$this->get_page("invoice_record",$where,$pageurl,"10");		
		$this->yunset("rows",$rows);

		$this->yunset("js_def",4);
		$this->com_tpl('invoice');
	}
}
?>