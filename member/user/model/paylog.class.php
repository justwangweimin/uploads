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
class paylog_controller extends user
{
	function index_action(){
		include(CONFIG_PATH."db.data.php");
		$this->yunset("arr_data",$arr_data);
		$this->public_action(); 
		$urlarr=array("c"=>"paylog","page"=>"{{page}}");
		$pageurl=Url('member',$urlarr);
		$where="`com_id`='".$this->uid."'";

		$where.="  order by pay_time desc";
		$rows = $this->get_page("company_pay",$where,$pageurl,"10");
		if(is_array($rows)){
			foreach($rows as $k=>$v)
			{
				$rows[$k]['pay_time']=date("Y-m-d H:i:s",$v['pay_time']);
			}
		}
		$this->yunset("rows",$rows);
		$this->yunset("ordertype","ok");  
		$this->user_tpl('paylog');
	} 
	
}
?>