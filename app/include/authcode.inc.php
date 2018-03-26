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

error_reporting(0);

include(dirname(dirname(dirname(__FILE__)))."/data/plus/config.php");

include(dirname(dirname(dirname(__FILE__)))."/app/include/verify.class.php");

$capth = new verify($config['code_width'],$config['code_height'],$config['code_strlength'],$config['code_filetype'],$config['code_type']);

$capth->entry(); 

?>