<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-25 09:34:41
         compiled from "D:\xampp\htdocs\uploads\app\template\admin\admin_link_add.htm" */ ?>
<?php /*%%SmartyHeaderCode:17124137405a9154850614f9-14607636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '122b1c19811619ae5959ba585047430db3c7a987' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\admin\\admin_link_add.htm',
      1 => 1519522470,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17124137405a9154850614f9-14607636',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a91548514cdd8_40699745',
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'info' => 0,
    'Dname' => 0,
    'key' => 0,
    'dlist' => 0,
    'lasturl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a91548514cdd8_40699745')) {function content_5a91548514cdd8_40699745($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
>
function photo_change(id){
  if(id==1){ 
    $("#image1").show();
    $("#image2").hide();
  }
  if(id==2){ 
    $("#image1").hide();
    $("#image2").show();
  }   
}
function checkform(myform){
  if (myform.type.value==""){ 
    parent.layer.msg('请选择链接类型！', 2, 8);
    myform.type.focus();
    return (false);
  }
  if (myform.title.value=="") { 
    parent.layer.msg('请填写链接标题！', 2,8); 
      return (false);
  } 
  if (myform.url.value=="") { 
    parent.layer.msg('请填写链接地址！', 2, 8);  
      return (false);
  } 
  if (myform.tem_type.value==""){ 
    parent.layer.msg('请选择站点下使用范围！', 2, 8);
    myform.tem_type.focus();
    return (false);
  }
}
<?php echo '</script'; ?>
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
<div class="infoboxp"> 
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">添加链接时，请正确选择链接类型。</div>
</div>
</div>
<div class="clear"></div>
<div style="height:10px;"></div>

  <div class="infoboxp_top">
    <span class="complay_top_span fl">添加链接</span>
  </div>
  <div class="admin_table_border">
    <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
    <form name="myform" target="supportiframe" action="index.php?m=link&c=save" method="post"  encType="multipart/form-data"  onSubmit="return checkform(this);" class="layui-form">
      <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
      <table width="100%" class="table_form" style="background:#fff;">
        <tr>
          <th width="120">链接类型：</th>
          <td>
            <div class="layui-form-item">
              <div class="layui-input-inline">
                <select name="type" lay-filter="type">
                  <option value="">请选择</option>
                  <option value="1" 
                    <?php if ($_smarty_tpl->tpl_vars['info']->value['link_type']==1) {?> selected<?php }?>
                    >文字链接</option>
                  <option value="2" 
                    <?php if ($_smarty_tpl->tpl_vars['info']->value['link_type']==2) {?> selected<?php }?>
                    >图片链接</option>
                </select>
              </div>
            </div>
          </td>
        </tr>
        <tr class="admin_table_trbg" >
          <th width="120">链接标题：</th>
          <td><input class="input-text" type="text" name="title" size="40" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['link_name'];?>
" />
            <span class="admin_web_tip">例：搜狐</span></td>
        </tr>
        <tr>
          <th width="120">链接地址：</th>
          <td><input class="input-text" type="text" name="url" size="30" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['link_url'];?>
" />
            <span class="admin_web_tip">例：http://www.sohu.com</span></td>
        </tr>
        <tr class="admin_table_trbg">
          <th width="200">显示站点：</th>
          <td>
            <div class="layui-form-item">
              <div class="layui-input-inline">
                <select name="did" lay-filter="did" lay-search>
                  <option value="">请选择</option>
                  <?php  $_smarty_tpl->tpl_vars['dlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dlist']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Dname']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dlist']->key => $_smarty_tpl->tpl_vars['dlist']->value) {
$_smarty_tpl->tpl_vars['dlist']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['dlist']->key;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
                    <?php if ($_smarty_tpl->tpl_vars['info']->value['did']==$_smarty_tpl->tpl_vars['key']->value) {?> selected<?php }?>
                    ><?php echo $_smarty_tpl->tpl_vars['dlist']->value;?>
</option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <th width="120">站点下使用范围：</th>
          <td>
            <div class="layui-form-item">
              <div class="layui-input-inline">
                <select name="tem_type" lay-filter="tem_type" lay-search>
                  <option value="">请选择</option>
                  <option value="1"
                    <?php if ($_smarty_tpl->tpl_vars['info']->value['tem_type']==1) {?> selected<?php }?>
                    >全站使用</option>
                  <option value="2"
                    <?php if ($_smarty_tpl->tpl_vars['info']->value['tem_type']==2) {?> selected<?php }?>
                    >仅在首页使用</option>
                 
                </select>
              </div>
            </div>
          </td>
        </tr>
        <tr id="photo" <?php if ($_smarty_tpl->tpl_vars['info']->value['link_type']!=2) {?>style="display:none;"<?php }?>>
          <th width="120">缩 略 图：</th>
          <td>
            <div class="layui-form-item">
              <div class="layui-input-inline">
                <input name="phototype" lay-filter="phototype" value="1" title="上传图片" 
                 <?php if ($_smarty_tpl->tpl_vars['info']->value['img_type']=='1') {?> checked <?php }?>
                 type="radio"/>
                <input name="phototype" lay-filter="phototype" value="2" title="远程图片" 
                 <?php if ($_smarty_tpl->tpl_vars['info']->value['img_type']=='2') {?> checked <?php }?>
                 type="radio"/>
              </div>
            </div>
            <div id="image1" <?php if ($_smarty_tpl->tpl_vars['info']->value['img_type']!="1") {?>style="display:none"<?php }?>>
				<div class="yun_file_box">
				上传图片
				<input  type="file" size="45" name="uplocadpic"class="yun_file_bth">
				</div>
                <span class="admin_web_tip">尺寸：160*50px</span>
            </div>
            <div id="image2" <?php if ($_smarty_tpl->tpl_vars['info']->value['img_type']!="2") {?>style="display:none"<?php }?>>
              <input name="uplocadpic" type="text" size="40" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['pic'];?>
"  class="input-text"/>
              <span class="admin_web_tip">网站提示</span>
            </div>
          </td>
        </tr>
        <?php if ($_smarty_tpl->tpl_vars['info']->value['link_type']==2) {?>
        <?php if ($_smarty_tpl->tpl_vars['info']->value['img_type']==1) {?>
        <tr class="pic">
          <th width="120">图片预览：</th>
          <td><img src="../<?php echo $_smarty_tpl->tpl_vars['info']->value['pic'];?>
" width="160" height="50" /></td>
        </tr>
        <?php } elseif ($_smarty_tpl->tpl_vars['info']->value['img_type']==2) {?>
        <tr class="pic">
          <th width="120">图片预览：</th>
          <td><img src="<?php echo $_smarty_tpl->tpl_vars['info']->value['pic'];?>
" width="160" height="50" /></td>
        </tr>
        <?php }?>
        <?php }?>
        <tr class="admin_table_trbg" >
          <th width="120">排序：</th>
          <td><input class="input-text" type="text" name="sorting" size="20" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['link_sorting'];?>
" />
            <span class="admin_web_tip">例：大前小后</span></td>
        </tr>
        <tr>
          <td align="center" colspan="2"> <?php if (is_array($_smarty_tpl->tpl_vars['info']->value)) {?>
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" />
            <input type="hidden" name="lasturl" value="<?php echo $_smarty_tpl->tpl_vars['lasturl']->value;?>
">
            <input class="admin_button" type="submit" name="link_update" value="&nbsp;修 改&nbsp;" />
            <?php } else { ?>
            <input class="admin_button" type="submit" name="link_add" value="&nbsp;添 加&nbsp;" />
            <?php }?>
            <input class="admin_button" type="reset" name="reset" value="&nbsp;重 置 &nbsp;" /></td>
        </tr>
      </table>
    </form>
  </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
  layui.use(['form'], function(){
    var form = layui.form
      ,$ = layui.$;

    form.on('select(type)', function(data){
      if(data.value == 1){
        select_new('type','1','文字链接');
      }
      else if(data.value == 2){
        select_new('type','2','图片链接');
      }
    });

    form.on('radio(phototype)', function(data){
      photo_change(data.value);
    });

  });
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
