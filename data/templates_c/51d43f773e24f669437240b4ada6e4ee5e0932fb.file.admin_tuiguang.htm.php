<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 16:40:22
         compiled from "D:\xampp\htdocs\uploads\app\template\admin\admin_tuiguang.htm" */ ?>
<?php /*%%SmartyHeaderCode:4230413495ab0c8f67f6697-09581062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51d43f773e24f669437240b4ada6e4ee5e0932fb' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\admin\\admin_tuiguang.htm',
      1 => 1517227404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4230413495ab0c8f67f6697-09581062',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'birthday' => 0,
    'anniversary' => 0,
    'todaydue' => 0,
    'sevendue' => 0,
    'useradd' => 0,
    'userup' => 0,
    'addjob' => 0,
    'upjob' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0c8f6ac2440_10170617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0c8f6ac2440_10170617')) {function content_5ab0c8f6ac2440_10170617($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" /> 
<link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript">
function sendemail(type,emailtype,emailtpl,dayslimit){
	var sort=1;
	var pytoken=$("input[name='pytoken']").val();
	var i=layer.load('执行中，请稍候...',0);
	$.post('index.php?m=email&c=sendPromotion',{type:type,emailtype:emailtype,emailtpl:emailtpl,dayslimit:dayslimit,sort:sort,pytoken:pytoken},function(data){
		layer.close(i);
 		var data=JSON.parse(data);
		var status=data.status;
		if(status==0){
			layer.msg(data.msg,2,8);return false;
		}else if(status==1){
			layer.msg(data.msg,2,9,function(){location.reload();});
		} 
	})
}
$(document).ready(function(){ 
	
	$.get('index.php?m=email&c=getBirthday&type=email',{},function(data){
		
		var num=eval('('+data+')');
		$('#birthday').html(num.birthday_e);
		if(num.birthday_e==0){
			$("#bpost").attr("disabled",true);
			$("#bpost").attr("class","admin_unclick");
		}
		$('#anniversary').html(num.anniversary_e);
		if(parseInt(num.anniversary_e)==0){
			$("#apost").attr("disabled",true);
			$("#apost").attr("class","admin_unclick");
		}
		$('#todaydue').html(num.todaydue_e);
		if(num.todaydue_e==0){
			$("#tpost").attr("disabled",true);
			$("#tpost").attr("class","admin_unclick");
		} 
		$('#sevendue').html(num.sevendue_e);
		if(num.sevendue_e==0){
			$("#spost").attr("disabled",true);
			$("#spost").attr("class","admin_unclick");
		}
		$('#useradd').html(num.useradd_e);
		if(num.useradd_e==0){
			$("#useraddpost").attr("disabled",true);
			$("#useraddpost").attr("class","admin_unclick");
		}
		$('#userup').html(num.userup_e);
		if(num.userup_e==0){
			$("#useruppost").attr("disabled",true);
			$("#useruppost").attr("class","admin_unclick");
		}
		$('#addjob').html(num.addjob_e);
		if(num.addjob_e==0){
			$("#addjobpost").attr("disabled",true);
			$("#addjobpost").attr("class","admin_unclick");
		}
		$('#upjob').html(num.upjob_e);
		if(num.upjob_e==0){
			$("#upjobpost").attr("disabled",true);
			$("#upjobpost").attr("class","admin_unclick");
		}
	});
	
});
<?php echo '</script'; ?>
>
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="tabs_info">
    <ul>
      <li <?php if ($_GET['c']=='') {?>class="curr"<?php }?>><a  href="index.php?m=email">邮件推广</a></li>
      <li <?php if ($_GET['c']=='msgtg') {?>class="curr"<?php }?>><a href="index.php?m=email&c=msgtg">短信推广</a></li>
      <li <?php if ($_GET['c']=='tgresume') {?>class="curr"<?php }?> ><a href="index.php?m=email&c=tgresume">简历推广</a></li>
      <li <?php if ($_GET['c']=='tgjob') {?>class="curr"<?php }?> > <a href="index.php?m=email&c=tgjob">职位推广</a></li>
      <li <?php if ($_GET['c']=='email') {?>class="curr"<?php }?> ><a href="index.php?m=email&c=email">自定义邮件</a> </li>
      <li<?php if ($_GET['c']=='msg') {?>class="curr"<?php }?>><a  href="index.php?m=email&c=msg">自定义短信</a></li>
    </ul>
  </div>
  <div class="clear"></div>
  <div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
    <div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
    <div class="admin_new_tip_list_cont">
      <div class="admin_new_tip_list">发送短信时，请选择合适的时间进行发送</div>
    </div>
  </div>
  <div class="clear"></div>
  <div class="tag_box mt10">
	<table width="100%" class="table_form ">
       <tr >
       <tbody>
        <th bgcolor="#f0f6fb" colspan="2" ><span class="admin_bold">邮件推广</span></th>
       </tbody>
      </tr 
       ><tr>
        <th width="310">今天过生日的用户:</th>
        <td><div class="admin_msgtg_f">符合用户数：<font color="red" id="birthday">0</font> 位 <?php if ($_smarty_tpl->tpl_vars['birthday']->value['ctime']) {?>，上次发送时间：<font color="red"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['birthday']->value['ctime'],"%Y-%m-%d");?>
</font><?php }?>。</div><input class="<?php if ($_smarty_tpl->tpl_vars['birthday']->value['disabled']==1) {?>admin_unclick<?php } else { ?>admin_button<?php }?>" type="submit" id="bpost" onclick="sendemail('1','1','1')" value="&nbsp;发送邮件&nbsp;"  <?php if ($_smarty_tpl->tpl_vars['birthday']->value['disabled']==1) {?>disabled="disabled"<?php }?>/></td>
      </tr>
      <tr>
        <th>周年提醒（所有用户）:</th>
        <td><div class="admin_msgtg_f">符合用户数：<font color="red" id="anniversary">0</font> 位<?php if ($_smarty_tpl->tpl_vars['anniversary']->value['ctime']) {?>，上次发送时间：<font color="red"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['anniversary']->value['ctime'],"%Y-%m-%d");?>
</font><?php }?>。</div><input class="<?php if ($_smarty_tpl->tpl_vars['anniversary']->value['disabled']==1) {?>admin_unclick<?php } else { ?>admin_button<?php }?>" type="submit" id="apost" onclick="sendemail('2','2','1')" value="&nbsp;发送邮件&nbsp;"  <?php if ($_smarty_tpl->tpl_vars['anniversary']->value['disabled']==1) {?>disabled="disabled"<?php }?>/></td>
      </tr>
      <tr>
        <th>今日会员到期提醒（企业用户）:</th>
        <td><div class="admin_msgtg_f">符合用户数：<font color="red" id="todaydue">0</font> 位<?php if ($_smarty_tpl->tpl_vars['todaydue']->value['ctime']) {?>，上次发送时间：<font color="red"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['todaydue']->value['ctime'],"%Y-%m-%d");?>
</font><?php }?>。</div><input class="<?php if ($_smarty_tpl->tpl_vars['todaydue']->value['disabled']==1) {?>admin_unclick<?php } else { ?>admin_button<?php }?>" type="submit" id="tpost" onclick="sendemail('1','3','1','1')" value="&nbsp;发送邮件&nbsp;"  <?php if ($_smarty_tpl->tpl_vars['todaydue']->value['disabled']==1) {?>disabled="disabled"<?php }?>/></td>
      </tr>
      <tr>
        <th>7日会员到期提醒（企业用户）:</th>
        <td><div class="admin_msgtg_f">符合用户数：<font color="red" id="sevendue">0</font> 位<?php if ($_smarty_tpl->tpl_vars['sevendue']->value['ctime']) {?>，上次发送时间：<font color="red"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['sevendue']->value['ctime'],"%Y-%m-%d");?>
</font><?php }?>。</div><input class="<?php if ($_smarty_tpl->tpl_vars['sevendue']->value['disabled']==1) {?>admin_unclick<?php } else { ?>admin_button<?php }?>" type="submit" id="spost" onclick="sendemail('1','3','1','7')" value="&nbsp;发送邮件&nbsp;"  <?php if ($_smarty_tpl->tpl_vars['sevendue']->value['disabled']==1) {?>disabled="disabled"<?php }?>/></td>
      </tr>
      
	 <tr>
        <th >注册后7日内未发布简历（个人用户）:</th>
        <td><div class="admin_msgtg_f">符合用户数：<font color="red" id="useradd">0</font> 位<?php if ($_smarty_tpl->tpl_vars['useradd']->value['ctime']) {?>，上次发送时间：<font color="red"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['useradd']->value['ctime'],"%Y-%m-%d");?>
</font><?php }?>。</div><input class="<?php if ($_smarty_tpl->tpl_vars['useradd']->value['disabled']==1) {?>admin_unclick<?php } else { ?>admin_button<?php }?>" type="submit" id="useraddpost" onclick="sendemail('1','4','1','7')" value="&nbsp;发送邮件&nbsp;"  <?php if ($_smarty_tpl->tpl_vars['useradd']->value['disabled']==1) {?>disabled="disabled"<?php }?>/></td>
      </tr>
      <tr>
        <th>7日未刷新简历（个人用户）:</th>
        <td><div class="admin_msgtg_f">符合用户数：<font color="red" id="userup">0</font> 位<?php if ($_smarty_tpl->tpl_vars['userup']->value['ctime']) {?>，上次发送时间：<font color="red"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['userup']->value['ctime'],"%Y-%m-%d");?>
</font><?php }?>。</div><input class="<?php if ($_smarty_tpl->tpl_vars['userup']->value['disabled']==1) {?>admin_unclick<?php } else { ?>admin_button<?php }?>" type="submit" id="useruppost" onclick="sendemail('1','5','1','7')" value="&nbsp;发送邮件&nbsp;"  <?php if ($_smarty_tpl->tpl_vars['userup']->value['disabled']==1) {?>disabled="disabled"<?php }?>/></td>
      </tr>
      <tr>
        <th>7日未发布职位（企业用户）</th>
        <td><div class="admin_msgtg_f">符合用户数：<font color="red" id="addjob">0</font> 位<?php if ($_smarty_tpl->tpl_vars['addjob']->value['ctime']) {?>，上次发送时间：<font color="red"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['addjob']->value['ctime'],"%Y-%m-%d");?>
</font><?php }?>。</div><input class="<?php if ($_smarty_tpl->tpl_vars['addjob']->value['disabled']==1) {?>admin_unclick<?php } else { ?>admin_button<?php }?>" type="submit" id="addjobpost" onclick="sendemail('2','6','1','7')" value="&nbsp;发送邮件&nbsp;"  <?php if ($_smarty_tpl->tpl_vars['addjob']->value['disabled']==1) {?>disabled="disabled"<?php }?>/></td>
      </tr>
      <tr>
        <th >7日未刷新职位（企业用户）</th>
        <td><div class="admin_msgtg_f">符合用户数：<font color="red" id="upjob">0</font> 位<?php if ($_smarty_tpl->tpl_vars['upjob']->value['ctime']) {?>，上次发送时间：<font color="red"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['upjob']->value['ctime'],"%Y-%m-%d");?>
</font><?php }?>。</div><input class="<?php if ($_smarty_tpl->tpl_vars['upjob']->value['disabled']==1) {?>admin_unclick<?php } else { ?>admin_button<?php }?>" type="submit" id="upjobpsot" onclick="sendemail('2','7','1','7')" value="&nbsp;发送邮件&nbsp;"  <?php if ($_smarty_tpl->tpl_vars['upjob']->value['disabled']==1) {?>disabled="disabled"<?php }?>/></td>
      </tr>


		
	</table>
	<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
</div>
</div>
</body>
</html><?php }} ?>
