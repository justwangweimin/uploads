<?php
/*
 * @作者：王卫民
 * @官网： www.just.edu.cn
 * @版权：2018-2028 王卫民所有，并保留所有权利。
 * @软件声明：未经授权，不得用于商业运营、二次开发以及任何形式的再次发布。
 */
header("Content-Type: text/html; charset=utf-8");
ob_start();//打开输出缓冲，控制浏览器cache
error_reporting(0);
$i_model = 1;
//__FILE__:当前的文件名
define('APP_PATH',dirname(dirname(__FILE__)).'/');  //APP_PATH:APP的根路经
define('S_ROOT', dirname(__FILE__).DIRECTORY_SEPARATOR);
define('VERSION', '1.0');
define('YEAR', '2018');
if (substr(PHP_VERSION, 0, 1) == '7') {
	$installDir = 'php7';
}else{
	$installDir = 'php5';
}
define('INS_DIR',$installDir.'/'); 
require_once 'install_lang.php';
require_once $installDir.'/install_function.php';
require_once $installDir.'/install_mysql.php';
require_once $installDir.'/install_var.php';
include $installDir.'/install.php';
?>