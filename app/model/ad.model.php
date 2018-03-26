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
class ad_model extends model
{
    function GetAdClass($Where=array(),$Options=array()){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_all('ad_class',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
    function GetAd($Where=array(),$Options=array()){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_all('ad',$WhereStr.$FormatOptions['order'],$FormatOptions['field'],$FormatOptions['special']);
    }
    function AddAd($Values=array()){
        return $this->insert_into('ad',$Values);
    }
    function GetAdOne($Where=array(),$Options=array('field'=>null)){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_once('ad',$WhereStr,$FormatOptions['field']);
    }
    function UpdateAd($Values=array(),$Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        $ValuesStr=$this->FormatValues($Values);
        return $this->DB_update_all('ad',$ValuesStr,$WhereStr);
    }
    function DeleteAd($Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        return $this->DB_delete_all('ad',$WhereStr);
    }
    
}
?>