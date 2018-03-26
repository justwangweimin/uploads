<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-07 11:33:48
         compiled from "D:\xampp\htdocs\uploads\app\template\admin\admin_navigation_add.htm" */ ?>
<?php /*%%SmartyHeaderCode:6549879145a9f5d9c8462d5-31251243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e514845b905e83a6115b6077dbef8a7de51a65ed' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\admin\\admin_navigation_add.htm',
      1 => 1519457203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6549879145a9f5d9c8462d5-31251243',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'type' => 0,
    'v' => 0,
    'types' => 0,
    'lasturl' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a9f5d9cadfa48_59778819',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9f5d9cadfa48_59778819')) {function content_5a9f5d9cadfa48_59778819($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jscolor/jscolor.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript">
function checkform(myform){
  if (myform.name.value=="") {
    parent.layer.msg('请填写导航名称！', 2,8); 
      myform.name.focus();
      return (false);
  }
   if (myform.url.value=="") { 
    parent.layer.msg('请填写链接地址！', 2,8); 
      myform.url.focus();
      return (false);
  }
  if (myform.sort.value=="") { 
     parent.layer.msg('请填写导航排序！', 2,8); 
      myform.sort.focus();
      return (false);
  }
}
<?php echo '</script'; ?>
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
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">该页面展示了导航添加修改。</div>
</div>
</div>

<div class="infoboxp_top mt10">
  <span class="complay_top_span fl">添加导航</span>
	<a href=" javascript:history.back(-1);" class="admin_infoboxp_tj admin_infoboxp_xwlb">导航列表</a> 
</div>
  <div class="admin_table_border">
    <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
    <form name="myform" target="supportiframe" action="index.php?m=navigation&c=save" method="post" encType="multipart/form-data"  onSubmit="return checkform(this);" class="layui-form">
      <table width="100%" class="table_form" style="background:#fff;">
        <tr >
          <th width="120">导航类别：</th>
          <td>
            <div class="layui-form-item">
              <div class="layui-input-inline">
                <select name="nid" lay-filter="nid">
                  <option value="">请选择</option>
                  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"
                    <?php if ($_smarty_tpl->tpl_vars['types']->value['nid']&&$_smarty_tpl->tpl_vars['v']->value['id']==$_smarty_tpl->tpl_vars['types']->value['nid']) {?>
                     selected
                    <?php }?>
                     ><?php echo $_smarty_tpl->tpl_vars['v']->value['typename'];?>
</option>
                  <?php } ?>
                </select>
              </div>
              <a href="index.php?m=navigation&c=group" class="admin_nav_fl">添加分类</a>
            </div>            
          </td>
        </tr>
        <tr class="admin_table_trbg" >
          <th>导航名称：</th>
          <td><input class="input-text" type="text" name="name" size="40" value="<?php echo $_smarty_tpl->tpl_vars['types']->value['name'];?>
"/>
          <input type="hidden" name='color' id="color" value="" /></td>
        </tr>
        <tr class="admin_table_trbg" >
          <th>导航链接：</th>
          <td><input class="input-text" type="text" name="url" size="50" value="<?php echo $_smarty_tpl->tpl_vars['types']->value['url'];?>
"/>
            <span class="admin_web_tip"></span></td>
        </tr>
        <tr >
          <th>伪静态链接：</th>
          <td><input class="input-text" type="text" name="furl" size="50" value="<?php echo $_smarty_tpl->tpl_vars['types']->value['furl'];?>
"/>
            <span class="admin_web_tip"></span>
            </td>
        </tr>
        <tr class="admin_table_trbg" >
          <th>导航类型：</th>
          <td>
            <div class="layui-form-item">
              <div class="layui-input-inline">
                <select name="type" lay-filter="type">
                  <option value="1" <?php if ($_smarty_tpl->tpl_vars['types']->value['type']==1) {?> selected <?php }?> >站内链接</option>
                  <option value="2" <?php if ($_smarty_tpl->tpl_vars['types']->value['type']==2) {?> selected <?php }?> >外部链接</option>
                </select>
              </div>
             <span class="admin_web_tip">
                站内链接如：job/  外部链接如：http://www.sohu.com/
              </span>
            </div>
          </td>
        </tr>
        <tr >
          <th>排　　序：</th>
          <td><input class="input-text" type="text" name="sort" size="5" value="<?php echo $_smarty_tpl->tpl_vars['types']->value['sort'];?>
"/></td>
        </tr>
        <tr class="admin_table_trbg" >
          <th>弹出窗口：</th>
          <td>
            <div class="layui-form-item">
              <div class="layui-input-block">
                  <input name="eject" value="1" title="新窗口"
                    <?php if ($_smarty_tpl->tpl_vars['types']->value['eject']=="1") {?>
                     checked 
                    <?php }?>
                     type="radio"/>
                  <input name="eject" value="0" title="原窗口"
                    <?php if ($_smarty_tpl->tpl_vars['types']->value['eject']!="1") {?>
                     checked 
                    <?php }?>
                   type="radio"/>
              </div>
            </div>
          </td>
        </tr>
        <tr >
          <th>状　　态：</th>
          <td>
            <div class="layui-form-item">
              <div class="layui-input-block">
                  <input name="model" value="hot" title="热"
                    <?php if ($_smarty_tpl->tpl_vars['types']->value['model']=="hot") {?>
                     checked 
                    <?php }?>
                     type="radio"/>
                  <input name="model" value="new" title="新"
                    <?php if ($_smarty_tpl->tpl_vars['types']->value['model']=="new") {?>
                     checked 
                    <?php }?>
                   type="radio"/>
                  <input name="model" value="" title="无"
                    <?php if ($_smarty_tpl->tpl_vars['types']->value['model']=='') {?>
                     checked 
                    <?php }?>
                   type="radio"/>
              </div>
            </div>
          </td>
        </tr>
        <!-- <tr >
          <th>加　　粗：</th>
          <td>
          <div class="iradio_flat_height">
          <input type="radio" name="bold" value="1" id="bold_y" <?php if ($_smarty_tpl->tpl_vars['types']->value['bold']=='1') {?>checked=checked<?php }?>>
            <span class="iradio_flat_left"><label for="bold_y">是</label>&nbsp;&nbsp;</span>
            <input type="radio" name="bold" value="0" id="bold_n" <?php if ($_smarty_tpl->tpl_vars['types']->value['bold']!='1') {?>checked=checked<?php }?>>
            <span class="iradio_flat_left"><label for="bold_n">否</label>&nbsp;&nbsp;</span>
            </div>
            </td>
        </tr> -->
        <tr >
          <th>显　　示：</th>
          <td>
            <div class="layui-form-item">
              <div class="layui-input-block">
                  <input name="display" value="1" title="是"
                    <?php if ($_smarty_tpl->tpl_vars['types']->value['display']=="1") {?>
                     checked 
                    <?php }?>
                     type="radio"/>
                  <input name="display" value="0" title="否"
                    <?php if ($_smarty_tpl->tpl_vars['types']->value['display']!="1") {?>
                     checked 
                    <?php }?>
                   type="radio"/>
              </div>
            </div>
          </td>
        </tr>
        <tr class="admin_table_trbg" >
          <td align="center" colspan="2"> <?php if ($_smarty_tpl->tpl_vars['types']->value['id']) {?>
            <input type="hidden" name="id" size="40" value="<?php echo $_smarty_tpl->tpl_vars['types']->value['id'];?>
"/>
            <input type="hidden" name="lasturl" value="<?php echo $_smarty_tpl->tpl_vars['lasturl']->value;?>
">
            <input class="admin_button" type="submit" name="update" value="&nbsp;更 新&nbsp;"  />
            <?php } else { ?>
            <input class="admin_button" type="submit" name="add" value="&nbsp;添 加&nbsp;"  />
            <?php }?>
            <input class="admin_button" type="reset" name="reset" value="&nbsp;重 置 &nbsp;" /></td>
        </tr>
      </table>
    <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
    </form>
  </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
  layui.use(['layer', 'form'], function(){
    var layer = layui.layer
    ,form = layui.form
    ,$ = layui.$;
  });
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
