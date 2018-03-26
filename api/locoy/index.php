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
include(dirname(dirname(dirname(__FILE__)))."/global.php");
if($_GET['m'] && !preg_match("/^[0-9a-zA-Z\_]*$/",$_GET['m'])){
	
	$_GET['m'] = 'index';
}
$model = $_GET['m'];
$action = $_GET['c'];
if($model=="")	$model="index";
if($action=="")	$action = "index";

require(APP_PATH.'app/public/common.php');
require("model/".$model.'.class.php');
$conclass=$model.'_controller';
$actfunc=$action.'_action';

$views=new $conclass($phpyun,$db,$db_config[def],"index");
if(!method_exists($views,$actfunc)){
	echo "您请求的页面不存在！";die;
}

$views->$actfunc();


?>