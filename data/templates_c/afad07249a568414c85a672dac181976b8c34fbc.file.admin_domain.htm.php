<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-07 11:32:34
         compiled from "D:\xampp\htdocs\uploads\app\template\admin\admin_domain.htm" */ ?>
<?php /*%%SmartyHeaderCode:6738341825a9f5d52511566-32941949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afad07249a568414c85a672dac181976b8c34fbc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\admin\\admin_domain.htm',
      1 => 1517623480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6738341825a9f5d52511566-32941949',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'domain' => 0,
    'key' => 0,
    'one' => 0,
    'city_name' => 0,
    'industry_name' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a9f5d52616cc6_73855491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9f5d52616cc6_73855491')) {function content_5a9f5d52616cc6_73855491($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
> 
function check_type(id,value){
	if(value=="1"){
		var val = "0";
	}else{
		var val="1";
	}
	$.post("index.php?m=advertise&c=ajax_check",{id:id,val:val,pytoken:$('#pytoken').val()},function(data){
		html = "<a href=\"javascript:void(0);\" onClick=\"check_type("+id+","+val+");\" >"+data+"</a>";
		$("#"+id).html(html);
	});
}
<?php echo '</script'; ?>
>
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp"> 
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">页面提示</div>
</div>
</div>
<div class="clear"></div>
<div style="height:10px;"></div>


<div class="table-list">
<div class="admin_table_border">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
<form action="index.php" target="supportiframe" name="myform" method="get" id='myform'>
<input name="m" value="admin_domain" type="hidden"/>
<input name="c" value="allDelDomain" type="hidden"/>
<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
<table width="100%">
	<thead>
	<tr class="admin_table_top">
         <th width="60" align="center"><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
       	 <th align="left" width="150">标题</th>
			<th align="left" width="200">域名</th>
             <th align="left">城市</th>
             <th align="left" width="200">行业</th>
              <th align="left">风格目录</th>
              <th align="left" width="100">是否启用</th>
			<th align="center" width="150" class="admin_table_th_bg" >操作</th>
		</tr>
	</thead>
	<tbody>
    <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['domain']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['one']->key;
?>
    <tr align="left"<?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg"<?php }?> id="list<?php echo $_smarty_tpl->tpl_vars['one']->value['id'];?>
">
        <td align="center"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['one']->value['id'];?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
    	<td align="left" class="td1"><span><?php echo $_smarty_tpl->tpl_vars['one']->value['title'];?>
</span></td> 
        <td  align="left" class="ud"><?php echo $_smarty_tpl->tpl_vars['one']->value['domain'];?>
</td>
        <td  align="left" class="ud">
        <?php if ($_smarty_tpl->tpl_vars['one']->value['three_cityid']) {
echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['one']->value['three_cityid']];?>

        <?php } elseif ($_smarty_tpl->tpl_vars['one']->value['cityid']) {
echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['one']->value['cityid']];?>

        <?php } else {
echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['one']->value['province']];
}?> </td>
        <td  align="left" class="ud"><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['one']->value['hy']];?>
 </td>
         <td  align="left" class="ud"><?php echo $_smarty_tpl->tpl_vars['one']->value['style'];?>
 </td>
        <td class="ud" align="left"><?php if ($_smarty_tpl->tpl_vars['one']->value['type']=="1") {?><img src="../config/ajax_img/doneico.gif"><?php } else { ?><img src="../config/ajax_img/errorico.gif"><?php }?></td>
    	<td align="center">
        <a href="index.php?m=admin_domain&c=Modify&siteid=<?php echo $_smarty_tpl->tpl_vars['one']->value['id'];?>
"class="admin_new_c_bth">修改</a>
        <a href="javascript:void(0)" onclick="layer_del('确定要删除？','index.php?m=admin_domain&c=DelDomain&delid=<?php echo $_smarty_tpl->tpl_vars['one']->value['id'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a>
        </td>
  </tr>
  <?php } ?>
  <tr>
      <td align="left" colspan="3" style="padding-left:23px;">
      <input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /><label for="chkAll2">全选</label>&nbsp;
      <input class="admin_button"  type="button" name="delsub" value="删除所选" onClick="return really('del[]')" />
      </td>
  <td colspan="5" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td></tr>
  </tbody>
  </table>
</form>
</div>
</div>
</div>
</body>
</html><?php }} ?>
