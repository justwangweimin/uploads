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



function Pcv($fileName, $ifCheck = true) {
	return S::escapePath($fileName, $ifCheck);
}

function pwConvert($str, $toEncoding,$fromEncoding, $ifMb = true) {
	if (strtolower($toEncoding) == strtolower($fromEncoding)) {return $str;}
	if (is_array($str)) {
		foreach ($str as $key => $value) {
			$str[$key] = pwConvert($value, $toEncoding, $fromEncoding, $ifMb);
		}
		return $str;
	} else {
		return mb_convert_encoding($str, $toEncoding, $fromEncoding);
	}
}

function pwCreditNames($creditType = null) {
	static $sCreditNames = null;
	if (!isset($sCreditNames)) {
			$sCreditNames['credit'] = '积分';
	}
	return isset($creditType) ? $sCreditNames[$creditType] : $sCreditNames;
}


?>