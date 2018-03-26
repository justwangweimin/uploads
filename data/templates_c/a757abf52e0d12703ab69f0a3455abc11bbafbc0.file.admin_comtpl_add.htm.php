<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-25 09:53:11
         compiled from "D:\xampp\htdocs\uploads\app\template\admin\admin_comtpl_add.htm" */ ?>
<?php /*%%SmartyHeaderCode:16387644585a921707d1a2f7-14579323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a757abf52e0d12703ab69f0a3455abc11bbafbc0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\admin\\admin_comtpl_add.htm',
      1 => 1517561936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16387644585a921707d1a2f7-14579323',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a921707d9e847_76584966',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a921707d9e847_76584966')) {function content_5a921707d9e847_76584966($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<title>后台管理</title>
</head>
<body class="body_ifm">
<div id="subboxdiv" style="width:100%;height:100%;display:none;position:absolute;"></div>
<div class="infoboxp">
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">修改企业模板，可以自由设置企业模板“模板名称、路径、出售积分、模板缩略图和指定用户使用”功能 。</div>
</div>
</div>

<div class="clear"></div>

  <div class="table-list mt10">
    <div class="admin_table_border">
	<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
    <form action="index.php?m=admin_tpl&c=comptplsave" method="post" class="layui-form" enctype="multipart/form-data" target="supportiframe">
    <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
    <table width="100%" class="table_form">
    	<tr class="admin_table_trbg">
            <th width="140">模板名称：</th>
            <td><input class="input-text" type="text" name="name" id="sy_qqappid" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" size="30" maxlength="255"/><span class="admin_web_tip">如：经典红色</span></td>
        </tr>
        <tr>
          <th width="140">状态：</th>
          <td>
            <div class="layui-form-item">
              <div class="layui-input-inline">
                <input lay-skin="switch" name="status_switch" lay-filter="status" lay-text="开启|关闭"
                 <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=="1") {?> checked <?php }?>
                 type="checkbox"/>
                <input type="hidden" name="status" id="status" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['status'];?>
"/>
              </div>
            </div>
          </td>
        </tr>
        <tr class="admin_table_trbg">
            <th width="140">模板路径：</th>
            <td><input class="input-text" type="text" name="url" id="sy_qqappid" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
" size="30" maxlength="255" <?php if ($_smarty_tpl->tpl_vars['row']->value['url']) {?>readonly<?php }?>/><span class="admin_web_tip">如：default。注意：企业模板放在app/template/company下面，不存在系统将自动建立</span></td>
        </tr> 
        <tr >
            <th width="140"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：</th>
            <td><input class="input-text" type="text" name="price" id="sy_qqappid" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
" size="30" maxlength="255"/><span class="admin_web_tip">如：100，0或空为免费</span></td>
        </tr>
        <tr class="admin_table_trbg">
            <th width="140">缩略图：</th>
            <td>
			<button type="button" class="yun_bth_pic adminupload" lay-data="{name: 'pic',imgid: 'imgcomtpl'}">上传图片</button>
			<input type="hidden" id="layupload_type" value="2"/>
			<input type="hidden" id="upload_path" value="company"/>
			<input type="hidden" name="pic" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
"/>
			<img id="imgcomtpl" src="../<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
" style="max-width:350px;_width:350px;" <?php if (!$_smarty_tpl->tpl_vars['row']->value['pic']) {?>class="none"<?php }?>>

			</td>
        </tr>
        <tr>
            <th width="140">针对用户：</th>
            <td><input class="input-text" type="text" name="service_uid" id="service_uid" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['service_uid'];?>
" size="30" maxlength="255"/><span class="admin_web_tip">可以直接填写用户ID，多个以（半角逗号,）隔开</span></td>
        </tr>
        <tr class="admin_table_trbg">
            <td colspan="2" align="center">
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" name="id">
            <input class="admin_button" id="qqconfig" type="submit" name="msgconfig" value="提交" />&nbsp;&nbsp;
            <input class="admin_button" type="reset" value="重置" /></td>
        </tr>

    </table>
    </form>
</div>
</div>
    </div>

<?php echo '<script'; ?>
 type="text/javascript">
var weburl = '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
';
  layui.use(['form'], function(){
    var form = layui.form,
      $ = layui.$;

    form.on('switch(status)', function(data){
      var v = this.checked ? 1 : 0;
      $("#status").val(v);
    });
  });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui.upload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type='text/javascript'><?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
