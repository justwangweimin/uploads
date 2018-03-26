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
class search_controller extends ask_controller{ 
	function index_action(){
		
		$M=$this->MODEL('ask'); 
 		$hotuser=$M->GetHotUser(array("`add_time`>'".strtotime("-30 day")."'"),array('groupby'=>"uid","orderby"=>'num',"desc"=>'desc',"limit"=>10,"field"=>"uid,count(id) as num,sum(support) as support,nickname,pic"));
		foreach($hotuser as $k=>$v){
			if($v['pic']){
				$hotuser[$k]['pic']=$this->config['sy_weburl'].'/'.$v['pic'];
			}else{
				$hotuser[$k]['pic']=$this->config['sy_weburl'].'/'.$this->config['sy_friend_icon'];
			}
		}
		if(trim($_GET['keyword'])){$this->addkeywords(12,trim($_GET['keyword']));}
 		$this->atnask($M);
 		$this->hotclass();
		$this->yunset("getinfo",$_GET);   
		$this->yunset("hotuser",$hotuser);   
		$this->yunset("navtype","topic");
		$this->seo('ask_search');
		$this->ask_tpl('search');
	}
}
?>