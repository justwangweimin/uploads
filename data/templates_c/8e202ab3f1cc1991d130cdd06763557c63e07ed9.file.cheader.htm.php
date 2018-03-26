<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 15:42:46
         compiled from "D:\xampp\htdocs\uploads\\app\template\wap\member\cheader.htm" */ ?>
<?php /*%%SmartyHeaderCode:8593572945ab0bb76ee3a72-88646770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e202ab3f1cc1991d130cdd06763557c63e07ed9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\\\app\\template\\wap\\member\\cheader.htm',
      1 => 1515035031,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8593572945ab0bb76ee3a72-88646770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'wap_style' => 0,
    'tplmoblie' => 0,
    'backurl' => 0,
    'guweninfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0bb7708de70_19052219',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0bb7708de70_19052219')) {function content_5ab0bb7708de70_19052219($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<title><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
 -  手机人才网</title>
<meta http-equiv="keywords" content="人才招聘,网络招聘,wap" />
<meta http-equiv="description" content="人才招聘网wap网站" />
<meta content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport" />
<meta name="MobileOptimized" content="240" />
<meta http-equiv="Expires" content="0" />
<meta http-equiv="Cache-Control" content="no-cache" />
<meta http-equiv="Pragma" content="no-cache" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1, maximum-scale=1, user-scalable=no" />
<meta name="format-detection" content="telephone=no,email=no"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/yun_wap_member.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/prefixfree.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/layer/layer.m.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> 
</head>
<body>


<header>
   <div class="header_bg <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {?>bg<?php echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>" > <a class="hd-lbtn" href="<?php if ($_smarty_tpl->tpl_vars['backurl']->value) {
echo $_smarty_tpl->tpl_vars['backurl']->value;
} else { ?>javascript:history.back();<?php }?>"><i class="header_top_l iconfont"></i></a>
    <div class="header_h1">企业用户中心</div>
    <i class="header_kf" onclick="gwshow()"></i>
  </div>
 </header>
<?php if ($_smarty_tpl->tpl_vars['guweninfo']->value['id']) {?>
<div style="display:none" id="gwshow" >
<div class="wap_gw_box" style="top:-150px;">
<div class="wap_gw_t">招聘顾问</div>
<div class="wap_gw">
<div class="wap_gw_pic"><img src="<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['logo'];?>
" style="width:50px;height:50px"></div>
<div class=""><?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['username'];?>
</div>
<div class=""><?php if ($_smarty_tpl->tpl_vars['guweninfo']->value['qq']) {?>
<a target="_blank" href="mqqwpa://im/chat?chat_type=wpa&uin=<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['qq'];?>
&Site=<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
&Menu=yes&version=1&src_type=web&web_src=http://m.haishiit.com/"><img border="0" src="http://wpa.qq.com/pa?p=1:<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['qq'];?>
:12" alt="点击这里给我发消息"></a>
<?php }?></div>
</div>
<div class="wap_gw_tel">
<div class="">手机：<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['mobile'];?>
</div>
<div class="">微信：<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['weixin'];?>
</div>
<div class="">Q &nbsp;Q：<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['qq'];?>
</div>
<a href="tel:<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
"><div class="wap_gw_tel_bd"><i class="wap_gw_tel_bd_icon"></i>拨打电话</div></a>
</div>
</div>
</div>
<?php } else { ?>
<!--顾问弹出框-->
<div style="display:none" id="gwshow" >
<div class="wap_gw_box" style="top:-150px;" >
<div class="wap_gw_t">招聘顾问</div>
<div class="wap_gw">
<div class="wap_gw_pic"><img src="<?php echo $_smarty_tpl->tpl_vars['guweninfo']->value['logo'];?>
" style="width:50px;height:50px"></div>
<div class="">网站客服</div>
<div class="" id="configqq"></div>
</div>
<div class="wap_gw_tel">
<div class="">电话：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
</div>
<div class="">手机：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webmoblie'];?>
</div>
<div class="">微信：<?php echo $_smarty_tpl->tpl_vars['config']->value['wx_name'];?>
</div>
<div class="">Q &nbsp;Q：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_qq'];?>
</div>
<a href="tel:<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
"><div class="wap_gw_tel_bd"><i class="wap_gw_tel_bd_icon"></i>拨打电话</div></a>
</div>
</div>
</div>
<?php }?>
<?php echo '<script'; ?>
>
<?php if (!$_smarty_tpl->tpl_vars['guweninfo']->value['qq']) {?>
var sy_qq='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_qq'];?>
';
var strs= new Array();
strs=sy_qq.split(",");
var qq=strs['0'];
$("#configqq").html("<a target='_blank' href='mqqwpa://im/chat?chat_type=wpa&uin="+qq+"&Site=<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
&Menu=yes&version=1&src_type=web&web_src=http://m.haishiit.com/'><img border='0' src='http://wpa.qq.com/pa?p=1:"+qq+":12' alt='点击这里给我发消息'></a>");
<?php }?>
function gwshow(){
	var gwshow=$("#gwshow").html(); 
	layer.open({
		type : 1,
		shadeClose :true,
		content:gwshow
	});
}
<?php echo '</script'; ?>
>
<div class="main_member_body">
<?php }} ?>
