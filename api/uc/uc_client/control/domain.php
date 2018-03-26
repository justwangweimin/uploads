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
/*
	[UCenter] (C)2001-2099 Comsenz Inc.
	This is NOT a freeware, use is subject to license terms

	$Id: domain.php 1059 2011-03-01 07:25:09Z monkey $
*/

!defined('IN_UC') && exit('Access Denied');

class domaincontrol extends base {

	function __construct() {
		$this->domaincontrol();
	}

	function domaincontrol() {
		parent::__construct();
		$this->init_input();
		$this->load('domain');
	}

	function onls() {
		return $_ENV['domain']->get_list(1, 9999, 9999);
	}
}

?>