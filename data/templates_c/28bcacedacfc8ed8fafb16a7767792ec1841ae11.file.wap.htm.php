<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-24 20:38:50
         compiled from "D:\xampp\htdocs\uploads\app\template\default\index\wap.htm" */ ?>
<?php /*%%SmartyHeaderCode:6497903555a915a53ce92c8-30503740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28bcacedacfc8ed8fafb16a7767792ec1841ae11' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\default\\index\\wap.htm',
      1 => 1519475928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6497903555a915a53ce92c8-30503740',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a915a53d4ed71_65400784',
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'client' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a915a53d4ed71_65400784')) {function content_5a915a53d4ed71_65400784($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"/>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['client']->value;?>
/style/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/client_header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="wap_banner fl">
  <div class="wap_banner_img touch_banner touch_banner_wap">
    <div class="wap_iphoto"><img src="<?php echo $_smarty_tpl->tpl_vars['client']->value;?>
/images/yun_job_wap1.png" class="png"/></div>
    <div class="banner_biaoyu"><img src="<?php echo $_smarty_tpl->tpl_vars['client']->value;?>
/images/yun_job_wap2.png" class="png"/></div>
    <div class="banner_input fr"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/wap</div>
    <div class="wap_erweim_bg png"></div>
    <div class="wap_erweim"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wap_qcode'];?>
" class="png" width="132" height="132"/></div>
  </div>
</div>
<div class="body_bg fl">
  <div class="w980">
    <div class="touch fl">
      <div class="touch_size fl">
        <dl>
          <dt><img src="<?php echo $_smarty_tpl->tpl_vars['client']->value;?>
/images/touch_items_01.gif"/></dt>
          <dd>
            <div class="touch_h1 fl">会员中心</div>
            <div class="touch_items_text fl">职位信息、最新资讯、求职技巧进个人会员中心，轻松管理简历</div>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $_smarty_tpl->tpl_vars['client']->value;?>
/images/touch_items_02.gif"/></dt>
          <dd>
            <div class="touch_h1 fl">功能不打折</div>
            <div class="touch_items_text fl">方寸之间，有大乾坤，简约不简单！</div>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $_smarty_tpl->tpl_vars['client']->value;?>
/images/touch_items_03.gif"/></dt>
          <dd>
            <div class="touch_h1 fl">面试应聘</div>
            <div class="touch_items_text fl">即时简历投递，贴心面试通知。</div>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $_smarty_tpl->tpl_vars['client']->value;?>
/images/touch_items_04.gif"/></dt>
          <dd>
            <div class="touch_h1 fl">职场资讯</div>
            <div class="touch_items_text fl">带你看看招聘求职的那些事儿。</div>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <div class="index_list fl">
    <div class="index_list_one touch_h330 touch_bg fl">
      <div class="w980">
        <div class="index_phone fr"><img src="<?php echo $_smarty_tpl->tpl_vars['client']->value;?>
/images/touch_list01.gif"/></div>
        <dl class="index_list_text fl">
          <dt><img src="<?php echo $_smarty_tpl->tpl_vars['client']->value;?>
/images/tach_text01.gif"/></dt>
          <dd>海量招聘机会等着您，祝你找到好工作。</dd>
        </dl>
      </div>
    </div>
    <div class="index_list_one touch_h330 fl">
      <div class="w980">
        <div class="index_phone fl"><img src="<?php echo $_smarty_tpl->tpl_vars['client']->value;?>
/images/touch_list02.gif"/></div>
        <dl class="index_list_text wl90 fl">
          <dt><img src="<?php echo $_smarty_tpl->tpl_vars['client']->value;?>
/images/tach_text02.gif"/></dt>
          <dd>无需下载，没有平台、机型的限制，有手机就能求职招聘！机会不再稍纵即逝，它已在你轻盈的指尖上！</dd>
        </dl>
      </div>
    </div>
    <div class="index_list_one touch_h330 touch_bg fl">
      <div class="w980">
        <div class="index_phone fr"><img src="<?php echo $_smarty_tpl->tpl_vars['client']->value;?>
/images/touch_list03.gif"/></div>
        <dl class="index_list_text fl">
          <dt><img src="<?php echo $_smarty_tpl->tpl_vars['client']->value;?>
/images/tach_text03.gif"/></dt>
          <dd>采用HTML5+CSS3代码编写，更快的速度、更低的流量、更好的用户体验，真正让您随时随地轻松找工作。</dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<div style="clear:both"></div>
<!--[if IE 6]>
<?php echo '<script'; ?>
 src="js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
DD_belatedPNG.fix('.png,.pagination li a');
<?php echo '</script'; ?>
>
<![endif]-->
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/client_footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
