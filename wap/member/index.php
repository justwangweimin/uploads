<?php
/* *
* @作者：王卫民
*
* @官网： www.just.edu.cn
*
* @版权：2018-2028 王卫民所有，并保留所有权利。
*
* @软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
*/

include(dirname(dirname(dirname(__FILE__)))."/global.php");
$pageType = 'wap';
$model = $_GET['m'];
$action = $_GET['c'];
if($model=="")	$model="index";
if($action=="")	$action = "index";

$usertype=$_COOKIE['usertype'];
if($usertype==2){
	$model="com";
}elseif($usertype==3){
	$model="lietou";
}else{
	$model="index";
}

require(APP_PATH.'app/public/common.php');
require('wap.controller.php');
require("model/".$model.'.class.php');

$conclass=$model.'_controller';
$actfunc=$action.'_action';
$views=new $conclass($phpyun,$db,$db_config["def"],"wap_member");
if(!method_exists($views,$actfunc)){
	$views->DoException();
}

$views->$actfunc();
?>