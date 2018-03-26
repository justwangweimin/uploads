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
class qqconfig_controller extends adminCommon{
    function index_action(){
        $this->yunset("config",$this->config);
        $this->yuntpl(array('admin/admin_qq_config'));
    }
    function save_action(){
        if($_POST['config']){
            unset($_POST['config']);
            foreach($_POST as $key=> $v){
                $config=$this->obj->DB_select_num("admin_config","`name`='".$key."'");
                if($config==false){
                    $this->obj->DB_insert_once("admin_config","`name`='".$key."',`config`='".$v."'");
                }else{
                    $this->obj->DB_update_all("admin_config","`config`='".$v."'","`name`='".$key."'");
                }
            }
            $this->web_config();
            $this->ACT_layer_msg("快捷登录参数配置修改成功！",9,1,2,1);
        }
    }
}
?>