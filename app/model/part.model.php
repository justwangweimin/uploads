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
class part_model extends model{
    function GetPartJobOne($Where=array(),$Options=array()){
		$WhereStr=$this->FormatWhere($Where);
		$FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_once('partjob',$WhereStr,$FormatOptions['field']);
    }
    function AddPartJobHits($id){
        $this->DB_update_all("partjob","`hits`=`hits`+1","`id`='".$id."'");
    }
    function GetPartCollectOne($Where=array(),$Options=array()){
		$WhereStr=$this->FormatWhere($Where);
		$FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_once('part_collect',$WhereStr,$FormatOptions['field']);
    }
    function AddPartCollect($Values=array()){
        return $this->insert_into('part_collect',$Values);
    }
    function GetPartApplyOne($Where=array(),$Options=array()){
		$WhereStr=$this->FormatWhere($Where);
		$FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_once('part_apply',$WhereStr,$FormatOptions['field']);
    }
    function AddPartApply($Values=array()){
        return $this->insert_into('part_apply',$Values);
    }
}
?>