<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 17:06:54
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\member\user\invite.htm" */ ?>
<?php /*%%SmartyHeaderCode:4684492355ab0cf2eb8dfa2-16206854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a7cfc0b79c01f29980d34db013d2b463e3abba9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\member\\user\\invite.htm',
      1 => 1513145435,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4684492355ab0cf2eb8dfa2-16206854',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'v' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0cf2ec60f48_79253188',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0cf2ec60f48_79253188')) {function content_5ab0cf2ec60f48_79253188($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<div class="main_member_cot_box">
<section>
<div class="wap_member_comp_h1"><span>面试通知</span></div>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<div class="wap_member_Receive">

<div class="wap_member_in_msg  wap_member_msg_after">
<a href="index.php?c=invitecont&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="wap_member_link">
<span class="wap_member_msg_name wap_member_msg_name_blod"><?php echo $_smarty_tpl->tpl_vars['v']->value['fname'];?>
</span>
<div class="wap_member_msg_ms">邀请你 <?php echo $_smarty_tpl->tpl_vars['v']->value['intertime'];?>
  面试：【<?php echo $_smarty_tpl->tpl_vars['v']->value['jobname'];?>
】</div>
<div class="wap_member_msg_ms ">
我的操作： <?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']=="1") {?>
<font color="#f60">尚未回复</font>
<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['is_browse']=="2") {?>
<font color="#666">已查看</font>
<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['is_browse']=="3") {?> 
	<font color="#008000">已同意</font>
<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['is_browse']=="4") {?>
	<font color="#FF00000">已拒绝</font>
<?php }?> 
</div>
</a>
</div>


</div>
<?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
<div class="wap_member_no">
  <div class="wap_member_no_p1">
  目前您暂未收到面试通知<div><a class="wap_member_no_submit" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job'),$_smarty_tpl);?>
">立即投简历</a></div>
  </div>


</div>
<?php } ?>
</section>
<div class="pages"> <?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
