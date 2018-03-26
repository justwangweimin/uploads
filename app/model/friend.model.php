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
class friend_model extends model{
    function GetStateAll($Where=array(),$Options=array()){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_all('friend_state',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
    function GetStatePage($Where=array(),$Options=array("limit"=>11)){
        $WhereStr=$this->FormatWhere($Where);
        $num=$this->DB_select_num('friend_state',$WhereStr);
        return ceil($num/$Options['limit']);
    }
    function InsertFriendState($Values=array()){
        $ValuesStr=$this->FormatValues($Values);
        return $this->DB_insert_once('friend_state',$ValuesStr);
    }

}
?>