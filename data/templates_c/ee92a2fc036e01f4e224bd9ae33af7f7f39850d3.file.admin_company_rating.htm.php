<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 16:37:15
         compiled from "D:\xampp\htdocs\uploads\app\template\admin\admin_company_rating.htm" */ ?>
<?php /*%%SmartyHeaderCode:12429148895ab0c83b732c90-47413139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee92a2fc036e01f4e224bd9ae33af7f7f39850d3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\admin\\admin_company_rating.htm',
      1 => 1518055069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12429148895ab0c83b732c90-47413139',
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
  'unifunc' => 'content_5ab0c83b86c707_47628641',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0c83b86c707_47628641')) {function content_5ab0c83b86c707_47628641($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
  <div class="tabs_info">
    <ul>
      <li class="curr"><a href="index.php?m=admin_comrating">等级设置</a></li>
      <li><a href="index.php?m=admin_comrating&c=server" class="report_uaer_list_on">增值服务</a> </li>
    </ul>
  </div>
  <div class="admin_new_tip">
  <a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
    <div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
    <div class="admin_new_tip_list_cont">
      <div class="admin_new_tip_list">可设置的等级包括：普通会员，高级会员，钻石会员等等，按照实际情况去设置等级的区分，会员等级需满足的条件和享受的优惠</div>
    </div>
  </div>
  <div class="clear"></div>
  <div class="admin_new_search_box"> <a href="index.php?m=admin_comrating&c=rating" class="admin_new_cz_tj" style="margin-left:0px;width:110px;"> 设置会员等级</a> </div>
  <div class="clear"></div>
  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php?m=admin_comrating&c=delrating" name="myform" method="post" id='myform' target="supportiframe">
        <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall">
                  <input type="checkbox" id='chkAll' onclick='CheckAll(this.form)' />
                </label></th>
              <th>编号</th>
              <th>会员名称</th>
              <th>会员模式</th>
              <th>购买金额</th>
              <th>服务时间</th>
              <th>购买状态</th>
              <th class="admin_table_th_bg" width="150">操作</th>
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
" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td><span><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</span></td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
            <td><?php if ($_smarty_tpl->tpl_vars['v']->value['type']==1) {?>套餐模式<?php } else { ?>时间模式<?php }?></td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['service_price'];?>
元</td>
            <td><?php if ($_smarty_tpl->tpl_vars['v']->value['service_time']!='') {
echo $_smarty_tpl->tpl_vars['v']->value['service_time'];?>
天<?php } else { ?>不限<?php }?></td>
            <td> <?php if ($_smarty_tpl->tpl_vars['v']->value['display']==1) {?>允许购买<?php } else { ?><font color="#f00">禁止购买</font><?php }?> </td>
            <td><a href="index.php?m=admin_comrating&c=rating&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"class="admin_new_c_bth ">编辑</a> <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=admin_comrating&c=delrating&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');"class="admin_new_c_bth admin_new_c_bth_sc"> 删除</a></td>
          </tr>
          <?php } ?>
          <tr style="background:#f1f1f1;">
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="3" ><label for="chkAll2">全选</label>
              &nbsp;
              <input class="admin_button"  type="button" name="delsub" value="删除所选"  onclick="return really('del[]')"/></td>
            <td colspan="5" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
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
