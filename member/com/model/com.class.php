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
class com_controller extends company{
	function index_action(){
		include(CONFIG_PATH."db.data.php");
		$this->yunset("arr_data",$arr_data);
		$this->public_action();
		$statis = $this->company_satic();
		$urlarr=array("c"=>"com","page"=>"{{page}}");
		$pageurl=Url('member',$urlarr);
		if($statis['vip_etime']>time()){
			$statis['vip_time'] = date("Y年m月d日",$statis['vip_etime']);
		}else{
			$statis['vip_time'] = "已过期";
		} 
		$statis[integral]=number_format($statis[integral]);
		$this->yunset("statis",$statis);
		$rows = $this->get_page("company_order","uid='".$this->uid."' order by order_time desc",$pageurl,"10");
		$this->yunset("rows",$rows);
		$allprice=$this->obj->DB_select_once("company_pay","`com_id`='".$this->uid."' and `type`='1' and `order_price`<0","sum(order_price) as allprice"); 
		if($allprice['allprice']==''){$allprice['allprice']='0';}
		$this->yunset("integral",number_format(str_replace("-","", $allprice['allprice'])));
		$this->yunset("js_def",4);
		$this->com_tpl('com');
	}
}
?>