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
!defined('P_W') && exit('Forbidden');


class Msg {

	var $base;
	var $db;

	function Msg($base) {
		$this->base = $base;
		$this->db = $base->db;
	}

	function send($uids, $fromUid, $subject, $content) {
		$userService = $this->_getUserService();

		$uids = is_numeric($uids) ? array($uids) : explode(',',$uids);
		$userNames = $userService->getUserNamesByUserIds($uids);

		M::sendNotice(
			$userNames,
			array(
				'title' => Char_cv(stripslashes($subject)),
				'content' => Char_cv(stripslashes($content))
			),'notice_apps', 'notice_apps'
		);

		return new ApiResponse(true);
	}

	function SendAppmsg ($toname, $fromname, $subject, $content) {
		$userService = $this->_getUserService();

		M::sendNotice(
			array($toname),
			array(
				'title' => Char_cv(stripslashes($subject)),
				'content' => Char_cv(stripslashes($content))
			),'notice_apps', 'notice_apps'
		);

		return new ApiResponse(true);
	}

	/**
	 * @return PW_UserService
	 */
	function _getUserService() {
		return L::loadClass('UserService', 'user');
	}
}
?>