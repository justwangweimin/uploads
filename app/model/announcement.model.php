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
class announcement_model extends model{
    function UpdateAnnouncement($Values=array(),$Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        $ValuesStr=$this->FormatValues($Values);
        return $this->DB_update_all('admin_announcement',$ValuesStr,$WhereStr);
    }
    function AddAnnouncement($Values=array()){
        return $this->insert_into('admin_announcement',$Values);
    }
    function GetAnnouncementOne($Where=array(),$Options=array('field'=>null)){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_once('admin_announcement',$WhereStr,$FormatOptions['field']);
    }
    function DeleteAnnouncement($Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        return $this->DB_delete_all('admin_announcement',$WhereStr,"");
    }
}
?>