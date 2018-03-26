<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-25 12:10:02
         compiled from "D:\xampp\htdocs\uploads\app\template\admin\admin_warning.htm" */ ?>
<?php /*%%SmartyHeaderCode:2738199715a92371a537688-99134296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76fda4a633b3c4adc2327ec3e7fa3a66f4f4eea7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\admin\\admin_warning.htm',
      1 => 1517041898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2738199715a92371a537688-99134296',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'list' => 0,
    'key' => 0,
    'v' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a92371a5d6678_19522003',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a92371a5d6678_19522003')) {function content_5a92371a5d6678_19522003($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
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
<title>后台管理</title>
</head>
<?php echo '<script'; ?>
>
layui.use(['laydate'], function(){
    var laydate = layui.laydate
    ,$ = layui.$;
	laydate.render({
		elem: '#date'
		,range:'~'
	});
});
function ckmobliemsg(){
	var sdate=$("#sdate").val();
	var edate=$("#edate").val(); 
	if(sdate&&edate&&toDate(edate)<toDate(sdate)){
		layer.msg("结束时间必须大于开始时间！",2,8);return false;
	}
}
<?php echo '</script'; ?>
>
<body class="body_ifm">
<div class="infoboxp">
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">该页面展示了网站预警设置信息，可对预警设置操作。</div>
</div>
</div>

<div class="clear"></div>

<div class="admin_new_search_box"> 
  <form action="index.php" name="myform" method="get" style="float:left"  onsubmit="return ckmobliemsg()">
    <input name="m" value="warning" type="hidden"/>
	<div class="admin_new_search_name">搜索类型：</div>
 <input class="admin_Filter_search" type="text" name="date" id="date" style="float:left;" value="<?php echo $_GET['date'];?>
">
    <input class="admin_Filter_bth" type="submit" name="news_search" value="搜索"/>
   <a href="index.php?m=warning&c=config" class="admin_new_cz_tj">预警配置</a> 
    </form>


  </div>
<div class="clear"></div> 

  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php" name="myform" method="get" target="supportiframe" id='myform'>
        <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
        <input name="m" value="warning" type="hidden"/>
        <input name="c" value="del" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th width="5%"><label for="chkall">
                  <input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/>
                </label></th>
              <th width="5%">编号</th>
              <th align="left" width="15%">用户名</th>
              <th align="left">预警原因</th>
              <th width="15%">操作时间</th>
              <th class="admin_table_th_bg" width="10%">操作</th>
            </tr>
          </thead>
          <tbody>         
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
          <tr align="center"<?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg"<?php }?> id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
            <td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="check_all"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
            <td class="ud" align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
            <td class="td" align="left"><?php if ($_smarty_tpl->tpl_vars['v']->value['type']==1) {?>发布职位<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type']==2) {?>下载简历<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type']==3) {?>发布简历<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type']==3) {?>充值<?php }?>超过预警设置</td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['ctime'],"%Y-%m-%d %H:%M:%S");?>
</td>
            <td><a href="javascript:;" onclick="layer_del('确定要删除？','?m=warning&c=del&del=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a></td>
          </tr>
          <?php } ?>
          <tr style="background:#f1f1f1;">
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="2" ><label for="chkAll2">全选</label>
              &nbsp;
              <input class="admin_button"  type="button"  name="delsub" value="删除所选" onclick="return really('del[]');" /></td>
            <td colspan="3" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
          </tr>
            </tbody>          
        </table>
      </form>
    </div>
  </div>
</div>
</body>
</html><?php }} ?>
