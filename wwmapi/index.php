<?php
/*
 * @作者：王卫民
 * @官网： www.just.edu.cn
 * @版权：2018-2028 王卫民所有，并保留所有权利。
 * @软件声明：未经授权，不得用于商业运营、二次开发以及任何形式的再次发布。
 */
error_reporting(0);
define('APP_PATH',dirname(__FILE__).'/'.'../');
define('LIB_PATH',APP_PATH.'/app/include/');
define('CONFIG_PATH',APP_PATH.'/config/');
//读入数据库配置
include(CONFIG_PATH.'db.config.php');//数据库配置
$starttime=time();
define('DEF_DATA',$db_config['def']);
//导入数据库操作类
if(substr(PHP_VERSION,0,1)=='7'){
  include_once(LIB_PATH."mysqli.class.php");
}else{
  include_once(LIB_PATH."mysql.class.php");
}
//定义数据库操作对象
$db=new mysql($db_config['dbhost'],$db_config['dbuser'],$db_config['dbpass'],$db_config['dbname'],ALL_PS,$db_config['charset'],$db_config['def']);
////必须是Ajax请求，才能往下继续处理
//if(!isAjax()){
//  echo 'error';
//  exit();
//}
////必须通过post方式提交，才能往下继续处理
//if(!isset($_POST) || !isset($_POST["sqlid"])){
//  echo 'error';
//  exit();
//}
include('sql.php');//数据库配置
$origin=isset($_SERVER['HTTP_ORIGIN'])?$_SERVER['HTTP_ORIGIN']:'';
$allow_origin=array(
  'http://localhost:3000',
  'http://localhost'
);
//返回响应的头
header('Content-Type: text/json; charset=UTF-8');

if(in_array($origin,$allow_origin)){
  //指定允许其他域名访问    
  header('Access-Control-Allow-Origin:'.$origin);
  // 响应类型
  header('Access-Control-Allow-Methods:POST');
  header('Access-Control-Allow-Headers:x-requested-with,content-type');
}
date_default_timezone_set($db_config['timezone']);
//获取action，根据action分别进行处理
$action=$_POST["action"];
$sql="";
switch($action){
  case 'select':  
    $tablename=$_POST["tablename"];
    $where=$_POST["where"];
    $where=isset($_POST["where"])?$_POST["where"]:1;
    $select=isset($_POST["select"])?$_POST["select"]:'*'; 
    $limit=$_POST["limit"];
    if(isset($limit))
      $result=$db->select($tablename,$where,$select,$limit);
    else
      $result=$db->select_all($tablename,$where,$select);
    break;
  case 'delete':
    $tablename=$_POST["tablename"];
    $where=isset($_POST["where"])?$_POST["where"]:0;
    $result=$db->delete($tablename,$where);
    break;
  case 'update':
    $tablename=$_POST["tablename"];
    $value=$_POST["value"];
    $where=isset($_POST["where"])?$_POST["where"]:0;
    $result=$db->update_all($tablename,$value,$where);
    break;
  case 'insert':
    $tablename=$_POST["tablename"];
    $value=$_POST["value"];
    $result=$db->insert_once($tablename,$value);
}
$json=json_encode($result);
echo $json;
?>