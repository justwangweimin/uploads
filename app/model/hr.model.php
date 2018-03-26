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
class hr_model extends model{
    function GetToolboxClassOne($Where=array(),$Options=array('field'=>null)){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_once('toolbox_class',$WhereStr,$FormatOptions['field']);
    }
    function GetToolboxClassAll($Where=array(),$Options=array('field'=>null)){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_all('toolbox_class',$WhereStr,$FormatOptions['field']);
    }
    function GetToolboxDocOne($Where=array(),$Options=array('field'=>null)){
        $WhereStr='';
        $WhereStr.=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_once('toolbox_doc',$WhereStr,$FormatOptions['field']);
    }
    function UpdateToolboxDoc($Values=array(),$Where=array()){
        $WhereStr='';
        $WhereStr.=$this->FormatWhere($Where);
        $ValuesStr.=$this->FormatValues($Values);
        return $this->DB_update_all('toolbox_doc',$ValuesStr,$WhereStr);
    }
}
?>