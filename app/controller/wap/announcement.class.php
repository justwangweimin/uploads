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
class announcement_controller extends common{
	function index_action(){
		$id=(int)$_GET['id'];
		$M=$this->MODEL('announcement');
		$row=$M->GetAnnouncementOne(array("id"=>$id));
		$row['content']=str_replace(array("&nbsp;","&"),array(" ","&amp;"),$row['content']);
		$this->yunset("row",$row);
		
		$data['gg_title']=$row['title'];
		$data['gg_desc']=$this->GET_content_desc($row['description']);
		$this->data=$data;
	    $this->seo("announcement");

		$this->yunset("headertitle","网站公告");
		$this->yuntpl(array('wap/announcements'));
	}	
}
?>