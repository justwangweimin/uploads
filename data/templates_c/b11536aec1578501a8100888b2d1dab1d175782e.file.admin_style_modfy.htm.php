<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-25 09:52:48
         compiled from "D:\xampp\htdocs\uploads\app\template\admin\admin_style_modfy.htm" */ ?>
<?php /*%%SmartyHeaderCode:8711940655a9216f0d01e75-92866848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b11536aec1578501a8100888b2d1dab1d175782e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\admin\\admin_style_modfy.htm',
      1 => 1517319678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8711940655a9216f0d01e75-92866848',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'style_info' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a9216f0d7b215_93892421',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9216f0d7b215_93892421')) {function content_5a9216f0d7b215_93892421($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
<div class="admin_new_tip_list">操作提示</div>
    
</div>
</div>
<div class="mt10"></div>


<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
<form name="myform" target="supportiframe" action="index.php?m=admin_tpl&c=stylesave" method="post" encType="multipart/form-data">
	<table width="100%" class="table_form">
		<tr >
			<td colspan="2"> <img id="imgicon" width="225" height="136" border="1" style="border: #ddd;" src="<?php echo $_smarty_tpl->tpl_vars['style_info']->value['img'];?>
">
            </td>
         </tr>
          <tr >
			<th width="170" align="left">更换预览图：</th>
			<td>
			<button type="button" class="yun_bth_pic adminupload" lay-data="{name: 'img',imgid: 'imgicon'}">上传图片</button>
			<input type="hidden" id="layupload_type" value="2"/>
			<input type="hidden" id="upload_path" value="user"/>
			<input type="hidden" name="img" value="<?php echo $_smarty_tpl->tpl_vars['style_info']->value['img'];?>
"/>
			</td>
         </tr>
        <tr >
			<th align="left">风格名称：</th>
			<td><input name="name" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['style_info']->value['name'];?>
"></td>
         </tr>
         <tr>
			<th align="left">风格目录：</th>
			<td><input readonly type="text" value="<?php echo $_smarty_tpl->tpl_vars['style_info']->value['dir'];?>
" class="input-text" name="dir"></td>
         </tr>
    		<tr>
			<th align="left">风格作者：</th>
			<td>
			 <input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['style_info']->value['author'];?>
" name="author">
			</td>
		</tr>
		<tr>
			<td align="center" colspan="2">
        	<input class="admin_button" type="submit" name="submit" value="&nbsp;提  交&nbsp;"/>
     		<input class="admin_button" type="reset" name="reset" value="&nbsp;重 置 &nbsp;" />
			</td>
		</tr>
	</table>
<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">	
</form>
</div>
<?php echo '<script'; ?>
>var weburl = '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
';<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui.upload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type='text/javascript'><?php echo '</script'; ?>
> 
</body>
</html><?php }} ?>
