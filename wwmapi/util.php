<?php
/*
 * @作者：王卫民
 * @官网： www.just.edu.cn
 * @版权：2018-2028 王卫民所有，并保留所有权利。
 * @软件声明：未经授权，不得用于商业运营、二次开发以及任何形式的再次发布。
 */
/**
 * 是否是AJAx提交的
 * @return bool
 */
function isAjax(){
  if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
    return true;
  }else{
    return false;
  }
}
/**
 * 是否是GET提交的
 */
function isGet(){
  return $_SERVER['REQUEST_METHOD'] == 'GET' ? true : false;
}
/**
 * 是否是POST提交
 * @return int
 */
function isPost() {
  return ($_SERVER['REQUEST_METHOD'] == 'POST' && checkurlHash($GLOBALS['verify']) && (empty($_SERVER['HTTP_REFERER']) || preg_replace("~https?:\/\/([^\:\/]+).*~i", "\\1", $_SERVER['HTTP_REFERER']) == preg_replace("~([^\:]+).*~", "\\1", $_SERVER['HTTP_HOST']))) ? 1 : 0;
}


