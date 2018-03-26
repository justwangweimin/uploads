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
class wxredpack_model extends model{
	
	function GetOne($Where=array(),$Options=array('field'=>null)){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_once('wxredpack',$WhereStr,$FormatOptions['field']);
    }

    function GetNum($Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        return $this->DB_select_num('wxredpack',$WhereStr);
    }

    function GetList($Where=array(),$Options=array('field'=>null,'orderby'=>null,'groupby'=>null,'limit'=>null)){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
		return $this->DB_select_all('wxredpack',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
	function AddWxRedPack($Values=array()){
	
        return $this->insert_into('wxredpack',$Values);
    }
	function UpdateWxRedPack($Values=array(),$Where=array()){
	
         $WhereStr=$this->FormatWhere($Where);
        $ValuesStr=$this->FormatValues($Values);
        return $this->DB_update_all('wxredpack',$ValuesStr,$WhereStr);
    }
}
?>