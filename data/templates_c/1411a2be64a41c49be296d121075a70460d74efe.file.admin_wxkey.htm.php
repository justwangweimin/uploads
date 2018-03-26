<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-25 12:08:19
         compiled from "D:\xampp\htdocs\uploads\app\template\admin\admin_wxkey.htm" */ ?>
<?php /*%%SmartyHeaderCode:8866539335a9236b3575813-64517862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1411a2be64a41c49be296d121075a70460d74efe' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\admin\\admin_wxkey.htm',
      1 => 1517041898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8866539335a9236b3575813-64517862',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'keyList' => 0,
    'v' => 0,
    'pagenav' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a9236b35f8016_60018948',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9236b35f8016_60018948')) {function content_5a9236b35f8016_60018948($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
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
<div class="admin_new_tip_list">搜索关健词主要记录微信用户通过微信公众号发送“关健词”系统会一一记录网站所有微信用户发送的关健词。</div>
</div>
</div>
<div class="clear"></div>
  <div class="admin_new_search_box">
 <form action="index.php" name="myform" method="get">
      <div class="admin_new_search_name">搜索类型：</div>
      <input name="m" value="wx" type="hidden"/>
        <input name="c" value="keyword" type="hidden"/>
        <input class="admin_Filter_search" type="text" name="keyword"  size="25" style="float:left"/>
        <input class="admin_Filter_bth"  type="submit" name="news_search" value="搜索" >
    </form>
    </div>
  <div class="clear"></div>

  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php?m=admin_keyword&c=del" target="supportiframe" name="myform" id='myform' method="post"> 
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th><label for="chkall">
                  <input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/>
                </label></th>
              <th>编号</th>
              <th align="left">关键字</th>
              <th align="left">搜索次数</th>
              <th align="left">最近搜索用户</th>
              <th align="left">绑定ID（OpenId）</th>
              <th>搜索时间</th>
            </tr>
          </thead>
          <tbody>
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['keyList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
          <tr align="center">
            <td><input type="checkbox" class="check_all" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td align="left" class="td1" style="text-align:center;"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</span></td>
             <td class="ud" align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['key_name'];?>
</td>
            <td class="ud" align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
</td>
            <td class="ud" align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['wxuser'];?>
</td>
            <td class="od" align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['wxid'];?>
</td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['wxtime'],"%Y-%m-%d");?>
</td>          
          </tr>
          <?php } ?>
          <tr style="background:#f1f1f1;">
            <td colspan="3" ><input  class="admin_button" type="button" name="delsub" value="批量删除" onClick="return really('del[]')" />
             </td>
            <td colspan="4" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
          </tr>
            </tbody>
        </table>
		<input type="hidden" name="pytoken" id="pytoken"  value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
      </form>
    </div>
  </div>
</div>
</body>
</html><?php }} ?>
