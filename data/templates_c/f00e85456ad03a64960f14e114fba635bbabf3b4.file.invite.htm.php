<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 17:07:59
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\invite.htm" */ ?>
<?php /*%%SmartyHeaderCode:6772959815ab0cf6fd8dc57-78871929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f00e85456ad03a64960f14e114fba635bbabf3b4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\invite.htm',
      1 => 1517660885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6772959815ab0cf6fd8dc57-78871929',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'joblist' => 0,
    'one' => 0,
    'com' => 0,
    'inviteinfo' => 0,
    'Info' => 0,
    'config' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0cf6fee9870_73704239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0cf6fee9870_73704239')) {function content_5ab0cf6fee9870_73704239($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 

<div class="post_content">
<div class="invite_jobadd">

<input name="uid" id="uid" value="<?php echo $_GET['uid'];?>
" type="hidden">

<form name="myform"  method="post" action="">

       <div class="com_box_yq" id='job_box' >
        <dl class="com_box_yq_dl">
          <dt>
			<span class="city_01">面试职位：</span>
		  </dt>
          <dd>
           <div class="yq_in_selectOption" style="width:99%">
           <select id='jobname'>
          	<?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['joblist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
##<?php echo $_smarty_tpl->tpl_vars['one']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['one']->value['id']==$_GET['jobid']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</option>
            <?php } ?>
          </select>
          </div>
          </dd>
        </dl>
		<dl class="com_box_yq_dl">
          <dt><span class="city_01">联系人：</span></dt>
          <dd> <input   id='linkman' value='<?php echo $_smarty_tpl->tpl_vars['com']->value['linkman'];?>
' class="job_invite_text"></dd>
        </dl>
        <dl class="com_box_yq_dl">
          <dt><span class="city_01">联系电话：</span></dt>
          <dd>  <input id='linktel' value='<?php echo $_smarty_tpl->tpl_vars['com']->value['linktel'];?>
' class="job_invite_text"></dd>
        </dl>
		<dl class="com_box_yq_dl">
          <dt><span class="city_01">面试时间：</span></dt>
          <dd><input id='intertime' value='<?php echo $_smarty_tpl->tpl_vars['inviteinfo']->value['intertime'];?>
' class="job_invite_text"></dd>
        </dl>
		<dl class="com_box_yq_dl">
          <dt><span class="city_01">面试地址：</span></dt>
		  <dd><input id='address' value='<?php echo $_smarty_tpl->tpl_vars['com']->value['address'];?>
' class="job_invite_text"></dd>
        </dl>
		<dl class="com_box_yq_dl">
			<dt><span class="city_01">面试备注：</span></dt>
			<dd><textarea id="content"  class="job_invite_textarea"><?php echo $_smarty_tpl->tpl_vars['inviteinfo']->value['content'];?>
</textarea></dd>
		</dl>
      <dl class="com_box_yq_dl" id="resume_job" style=" margin-top:0px;">
      <dd>  <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
" id="eid">
		<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['uid'];?>
" id="uid">
		<input type="hidden" id="username" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['name'];?>
"> 
		<input class="job_invite_bth" id="click_invite" type="button" value="邀请面试"  ></dd>
    </dl>
  
</div>
 
</form>
</div>
</div>
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
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/prefixfree.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mobiscroll/mobiscroll_002.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mobiscroll/mobiscroll.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mobiscroll/mobiscroll_003.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mobiscroll/css/animate.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mobiscroll/css/mobiscroll.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"> 

<?php echo '<script'; ?>
>
$(function () {
	var currYear = (new Date()).getFullYear();
	var opt = {
		preset: 'date', //日期
		theme: 'android-ics light', //皮肤样式
		display: 'modal', //显示方式 
		mode: 'scroller', //日期选择模式
		dateFormat: 'yy-mm-dd', // 日期格式
		setText: '确定', //确认按钮名称
		cancelText: '取消',//取消按钮名籍我
		dateOrder: 'yyyymmdd', //面板中日期排列式
		dayText: '日', monthText: '月', yearText: '年',
		startYear: currYear - 100, //开始年份
		endYear: currYear //结束年份
	};
	$("#intertime").mobiscroll('setDate', $("#intertime").val(), true).date(opt); 
	

});
<?php echo '</script'; ?>
> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
