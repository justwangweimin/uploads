<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 17:06:48
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\member\user\collect.htm" */ ?>
<?php /*%%SmartyHeaderCode:2315734515ab0cf28c25f41-46488528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17e869ad321610b2505560206baf80590966bf57' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\member\\user\\collect.htm',
      1 => 1517930223,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2315734515ab0cf28c25f41-46488528',
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
  'unifunc' => 'content_5ab0cf28d21224_64708053',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0cf28d21224_64708053')) {function content_5ab0cf28d21224_64708053($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="main_member_cot_box">
  <div class="wap_member_comp_h1"><span>收藏的职位</span></div>
  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
  <div class="com_member_hr">
    <div class="com_member_hr_name"> 
    	
    		<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'view','id'=>$_smarty_tpl->tpl_vars['v']->value['job_id']),$_smarty_tpl);?>
" class="wap_member_com_name  com_member_hr_cblue"><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['job_name'],0,16,'utf-8');?>
</a> 
     </div>
    <div class="user_member_box">
      <aside><?php echo $_smarty_tpl->tpl_vars['v']->value['com_name'];?>
</aside>
      <div class="com_member_hr_p1"><span class="member_c9">收藏时间：</span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['datetime'],"%Y-%m-%d");?>
</div>
    </div>
    <div class="com_member_hr_cz"> <a href="javascript:void(0)" onclick="isdel('index.php?c=collect&del=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')" class="yun_member_hr_bth">删除</a> 
    	<?php if ($_smarty_tpl->tpl_vars['v']->value['type']==1) {?> 
    		<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'view','id'=>$_smarty_tpl->tpl_vars['v']->value['job_id']),$_smarty_tpl);?>
" class="yun_member_hr_bth">查看详情</a> 
    	<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type']==2) {?> 
    		<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ltjob','a'=>'recshow','id'=>$_smarty_tpl->tpl_vars['v']->value['job_id']),$_smarty_tpl);?>
" class="yun_member_hr_bth">查看详情 </a> 
    	<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type']==3) {?> 
    		<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ltjob','a'=>'show','id'=>$_smarty_tpl->tpl_vars['v']->value['job_id']),$_smarty_tpl);?>
" class="yun_member_hr_bth">查看详情 </a> 
    	<?php }?> 
    </div>
  </div>
  <?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
  <div class="wap_member_no">
    <div class="wap_member_no_p1">
	<div>没有收藏过职位</div>
	<div><a class="wap_member_no_search" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job'),$_smarty_tpl);?>
">去搜索相关职位</a></div>
	</div>
  </div>
  <?php } ?> </div>
<div class="pages"> <?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
 <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
