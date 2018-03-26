<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 16:37:57
         compiled from "D:\xampp\htdocs\uploads\app\template\admin\admin_announcement_add.htm" */ ?>
<?php /*%%SmartyHeaderCode:3976020945ab0c8658fc2e4-61790727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d0a568ac70cbc4625c2b2807c512f6b2b01a30d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\admin\\admin_announcement_add.htm',
      1 => 1517915376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3976020945ab0c8658fc2e4-61790727',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'info' => 0,
    'Dname' => 0,
    'pytoken' => 0,
    'lasturl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0c865a1dda5_65350379',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0c865a1dda5_65350379')) {function content_5ab0c865a1dda5_65350379($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/ueditor/ueditor.config.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/ueditor/ueditor.all.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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

<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp"> 
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">添加公告主要满足运营者发布网站公告需求，针对网站大记事或优惠活动都是可以通过公告形式发布！让用户了解到网站动态！</div>
</div>
</div>
<div class="clear"></div>

<div class="tag_box mt10">  
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
<form name="myform" target="supportiframe" action="index.php?m=admin_announcement&c=save" method="post" encType="multipart/form-data"  onSubmit="return checkform(this);">
	<table width="100%" class="table_form" style="background:#fff;">
     <tr class="admin_table_trbg">
          <th colspan="4" bgcolor="#f0f6fb"><span class="admin_bold">添加公告</span></th>
    </tr>
		<tr >
			<th>公告标题：</th>
			<td>
			
			
			<div class="layui-form-item">
				<div class="layui-input-block">
				  <input type="text" name="title" id="title"  lay-verify="required" placeholder="请输入公告标题" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
" size="40" style="width:227px;" autocomplete="off" class="layui-input input-text">
				</div>
			</div>
			
			</td>
		</tr>
     	<tr>
        <th>使用范围：</th>
        <td><input type="button" value="<?php if ($_smarty_tpl->tpl_vars['info']->value['did']) {
echo $_smarty_tpl->tpl_vars['Dname']->value[$_smarty_tpl->tpl_vars['info']->value['did']];
} else { ?>总站<?php }?>" class="city_news_but" onClick="add_site('<?php echo $_smarty_tpl->tpl_vars['info']->value['did'];?>
','<?php echo $_smarty_tpl->tpl_vars['Dname']->value[$_smarty_tpl->tpl_vars['info']->value['did']];?>
');">
        <input type="hidden" id="did" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['did'];?>
" name="did">
        </td>
      </tr> 
	   	<tr class="admin_table_trbg" >
			<th>关 键 词：</th>
			<td>
			 <div class="layui-form-item">
				<div class="layui-input-block">
				  <input type="text" name="keyword" id="keyword"  lay-verify="required" placeholder="请输入关键词" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['keyword'];?>
" size="50" style="display:inline;width:227px;" autocomplete="off" class="layui-input input-text"> (多关键字，请用，隔开，请不要为空)
				</div>
			</div>
			</td>
		</tr>
    		<tr >
			<th>描　　述：</th>
			<td>
			<div class="layui-form-item">
			  <div class="layui-input-block">
			 	<textarea name="description" cols="55" rows="3" placeholder="请输入描述"   lay-verify="required" class="layui-input input-text"  style="display:inline;width:452px;padding-left:10px;" autocomplete="off"><?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
</textarea>
			  </div>
			</div>
			</td>
		</tr>
    	   	<tr class="admin_table_trbg" >
			<th>公告内容： </th>
			<td>
 			<?php echo '<script'; ?>
 id="myEditor" name="content" type="text/plain" style="width:700px;height:300px;"><?php echo $_smarty_tpl->tpl_vars['info']->value['content'];?>
<?php echo '</script'; ?>
>
			</td>
		</tr>

		<tr>
			<td align="center" colspan="2">
            <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
			<?php if ($_smarty_tpl->tpl_vars['info']->value['id']) {?>
        	<input type="hidden" name="id" size="40" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
"/>
            <input type="hidden" name="lasturl" value="<?php echo $_smarty_tpl->tpl_vars['lasturl']->value;?>
">
        	<input class="layui-btn layui-btn-normal" type="submit" name="update" value="&nbsp;更 新&nbsp;"  />
        	<?php } else { ?>
    		<input class="layui-btn layui-btn-normal" type="submit" name="add" value="&nbsp;添 加&nbsp;"  />
     		<?php }?>
     		<input class="layui-btn layui-btn-normal" type="reset" name="reset" value="&nbsp;重 置 &nbsp;" />
			</td>
		</tr>
        
	</table>
	
</form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['adminstyle']->value)."/checkdomain.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<style>
.layui-form-item {
    margin-bottom: 0px;
    clear: both;
}
</style>
<?php echo '<script'; ?>
 language="javascript">
  layui.use(['layer', 'form','element'], function(){
    var layer = layui.layer
    ,form = layui.form
	,element = layui.element
    ,$ = layui.$;
  });
 
function checkform(myform)
{
  if (myform.title.value=="") 
  { 
	  parent.layer.msg('请填写公告标题！', 2,8);
      myform.title.focus();
      return (false);
  }

  if (myform.keyword.value=="") 
  { 
	   parent.layer.msg('请填写公告关键字！', 2,8);
      myform.keyword.focus();
      return (false);
  } 
    if (myform.description.value=="") 
  { 
	  parent.layer.msg('请填写公告描述！', 2,8);
      myform.description.focus();
      return (false);
  }
}
 <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
UE.getEditor('myEditor',{
	toolbars:[['Source','|','Bold', 'italic', 'underline', 'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright','insertorderedlist', 'insertunorderedlist','emotion','simpleupload']],
	wordCount:false,
    elementPathEnabled:false,
    initialFrameHeight:300
});
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
