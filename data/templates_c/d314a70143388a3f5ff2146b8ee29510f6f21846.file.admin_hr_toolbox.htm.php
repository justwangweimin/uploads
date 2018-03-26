<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 16:37:48
         compiled from "D:\xampp\htdocs\uploads\app\template\admin\admin_hr_toolbox.htm" */ ?>
<?php /*%%SmartyHeaderCode:2454570665ab0c85cdbfde5-97605818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd314a70143388a3f5ff2146b8ee29510f6f21846' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\admin\\admin_hr_toolbox.htm',
      1 => 1517041898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2454570665ab0c85cdbfde5-97605818',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'get_type' => 0,
    'rows' => 0,
    'v' => 0,
    'pagenav' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0c85d0bd976_54517634',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0c85d0bd976_54517634')) {function content_5ab0c85d0bd976_54517634($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.searchurl.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
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
<body class="body_ifm">
<div class="infoboxp">  
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">该页面展示了网站所有的工具箱信息，可对工具箱进行添加，编辑，删除操作。</div>
<div class="admin_new_tip_list">可输入名称关键字进行搜索，也可进行详细的高级搜索。</div>
</div>
</div>

<div class="clear"></div>

<div class="admin_new_search_box"> 
  <form action="index.php" name="myform" method="get">
        <input name="m" value="hr" type="hidden"/>
	<div class="admin_new_search_name">搜索类型：</div>
   <div class="admin_Filter_text formselect"  did='dtype'>
		  <input type="button" value="<?php if ($_GET['type']=='1'||$_GET['type']=='') {?>文档名<?php } else { ?>类别名<?php }?>" class="admin_Filter_but"  id="btype">
		  <input type="hidden" id='type' value="<?php if ($_GET['type']) {
echo $_GET['type'];
} else { ?>1<?php }?>" name='type'>
		  <div class="admin_Filter_text_box" style="display:none" id='dtype'>
			  <ul>
			  <li><a href="javascript:void(0)" onClick="formselect('1','type','文档名')">文档名</a></li>
			  <li><a href="javascript:void(0)" onClick="formselect('2','type','类别名')">类别名</a></li> 
			  </ul>  
		  </div>
		</div>
        <input class="admin_Filter_search" type="text" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['get_type']->value['keyword'];?>
" size="25"/>
        <input  class="admin_Filter_bth" type="submit" name="comsearch" value="搜索"/>
	<a  href="javascript:void(0)" onclick="$('.admin_screenlist_box').toggle();"   class="admin_new_search_gj">高级搜索</a>
       <a href="index.php?m=hr&c=add" class="admin_new_cz_tj"> 上传文档</a>
       </form>
    <?php echo $_smarty_tpl->getSubTemplate ("admin/admin_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </div>
<div class="clear"></div> 

  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php"  target="supportiframe" name="myform" method="get" id='myform'>
      <input type="hidden" name="m" value="hr">
      <input type="hidden" name="c" value="del">
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall"><input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/></label></th>
              <th align="center"> <?php if ($_GET['t']=="id"&&$_GET['order']=="asc") {?> <a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'id','m'=>'hr','untype'=>'order,t'),$_smarty_tpl);?>
">编号<img src="images/sanj.jpg"/></a> <?php } else { ?> <a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'id','m'=>'hr','untype'=>'order,t'),$_smarty_tpl);?>
">编号<img src="images/sanj2.jpg"/></a> <?php }?> </th>
              <th align="left">文档名</th>
              <th align="left">类别名</th>
              <th align="center">前台显示</th>
              <th align="center"> <?php if ($_GET['t']=="add_time"&&$_GET['order']=="asc") {?> <a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'add_time','m'=>'hr','untype'=>'order,t'),$_smarty_tpl);?>
">上传日期<img src="images/sanj.jpg"/></a> <?php } else { ?> <a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'add_time','m'=>'hr','untype'=>'order,t'),$_smarty_tpl);?>
">上传日期<img src="images/sanj2.jpg"/></a> <?php }?> </th>
              <th class="admin_table_th_bg">操作</th>
            </tr>
          </thead>
          <tbody>
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
          <tr align="center" id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
            <td width="20"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"  name='del[]' onclick='unselectall()' rel="del_chk"/></td>
            <td align="left" class="td1" style="text-align:center; width:60px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</span></td>
            <td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
            <td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</td>
            <td class="od" align="center" id="is_show<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php if ($_smarty_tpl->tpl_vars['v']->value['is_show']=='1') {?><a href="javascript:void(0);" onClick="rec_up('index.php?m=hr&c=show','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','0','is_show');"><img src="../config/ajax_img/doneico.gif"></a><?php } else { ?><a href="javascript:void(0);" onClick="rec_up('index.php?m=hr&c=show','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','1','is_show');"><img src="../config/ajax_img/errorico.gif"></a><?php }?></td>
            <td class="gd" align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['add_time'],"%Y-%m-%d");?>
 </td>
            <td><a href="?m=hr&c=add&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="admin_new_c_bth admin_n_sc">编辑</a>  <a href="javascript:void(0)" onClick="layer_del('确定要删除？','?m=hr&c=del&del=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');"class="admin_new_c_bth admin_new_c_bth_sc">删除</a> </td>
          </tr>
          <?php } ?>
          <tr style="background:#f1f1f1;">
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="2"><label for="chkAll2">全选</label>
              &nbsp;
              <input class="admin_button" type="button" name="delsub" value="删除所选"  onclick="return really('del[]')"/>
            </td>
            <td colspan="4" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
          </tr>
          </tbody>
          
        </table>
        <input type="hidden" name="pytoken" id="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
      </form>
    </div>
  </div>
</div>
<style>
.admin_new_c_bth {color:#999;font-size:12px;}
</style>
</body>
</html>
<?php }} ?>
