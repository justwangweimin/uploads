<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 16:40:19
         compiled from "D:\xampp\htdocs\uploads\app\template\admin\admin_special.htm" */ ?>
<?php /*%%SmartyHeaderCode:2257782215ab0c8f30596f0-73814153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '916b7b7df07dd9801a74e2f14fd9b8d5b9d23c25' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\admin\\admin_special.htm',
      1 => 1517041899,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2257782215ab0c8f30596f0-73814153',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'rows' => 0,
    'key' => 0,
    'v' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0c8f33c1c31_45664364',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0c8f33c1c31_45664364')) {function content_5ab0c8f33c1c31_45664364($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
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
<div class="admin_new_tip_list">该页面展示了网站所有的专题招聘信息，可对专题招聘进行编辑，删除操作。</div>
</div>
</div>
<div class="clear"></div>
<div class="admin_new_search_box">
<a href="index.php?m=special&c=add" class="admin_new_cz_tj" style=" margin-left:0px;">+ 添加专题</a>
</div>
<div class="clear"></div>

 <div class="table-list">
  <div class="admin_table_border">
    <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
    <form action="index.php" name="myform" method="get" id='myform' target="supportiframe">
            <input name="m" value="special" type="hidden"/>
        <input name="c" value="del" type="hidden"/>
    <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
      <table width="100%">
        <thead>
          <tr class="admin_table_top">
            <th style="width:20px;"><label for="chkall"><input type="checkbox" id='chkAll' onclick='CheckAll(this.form)' /></label></th>
            <th>编号</th>
            <th align="left">专题名称</th>
            <th align="left">企业数量</th>
            <th align="left">模板</th> 
            <th>状态</th>
            <th>排序</th>
            <th>待审核企业数/企业总数</th>
            <th width="180">操作</th>
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
        <tr align="center"<?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg"<?php }?> id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
          <td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
                
         <td><span><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</span></td>
          <td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
          <td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['limit'];?>
</td>
          <td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['tpl'];?>
</td> 
          <td>
             <div class="admin_new_t_j" id="rec_display<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
				<?php if ($_smarty_tpl->tpl_vars['v']->value['display']=="1") {?>
					<a href="javascript:void(0);" onClick="rec_display('index.php?m=special&c=recommend','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','0','rec_display');">
					<img src="../config/ajax_img/doneico.gif"></a>
				<?php } else { ?>
					<a href="javascript:void(0);" onClick="rec_display('index.php?m=special&c=recommend','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','1','rec_display');">
					<img src="../config/ajax_img/errorico.gif"></a>
				<?php }?>
			</div>
            <!--<?php if ($_smarty_tpl->tpl_vars['v']->value['display']==1) {?><font color="red">开启</font><?php } else { ?><font color="blue">关闭</font><?php }?>-->
            </td>
		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['sort'];?>
</td> 
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['booking'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['comnum'];?>
</td> 
        <td>
		<a href="index.php?m=special&c=com&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"class="admin_new_c_bth admin_new_c_bth_yl">查看</a> 
        <a href="index.php?m=special&c=add&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"class="admin_new_c_bth ">编辑</a>
        <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=special&c=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');"class="admin_new_c_bth admin_new_c_bth_sc"> 删除</a></td>
         
        </tr>
        <?php } ?>
        <tr style="background:#f1f1f1;">
            <td  align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td  >
            <label for="chkAll2">全选</label>&nbsp;
          <input class="admin_button"  type="button" name="delsub" value="删除所选"  onclick="return really('del[]')"/></td>
		  <td colspan="7" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
        </tr>
          </tbody>
        
      </table>
    </form>
  </div>
</div>
<?php echo '<script'; ?>
>
function rec_display(url,id,rec,type){
		var pytoken=$("#pytoken").val();
		$.get(url+"&id="+id+"&rec="+rec+"&type="+type+"&pytoken="+pytoken,function(data){
			if(data==1){
				if(rec=="1"){
					$("#"+type+id).html("<a href=\"javascript:void(0);\" onClick=\"rec_display('"+url+"','"+id+"','0','"+type+"');\"><img src=\"../config/ajax_img/doneico.gif\"></a>");
				}else{
					$("#"+type+id).html("<a href=\"javascript:void(0);\" onClick=\"rec_display('"+url+"','"+id+"','1','"+type+"');\"><img src=\"../config/ajax_img/errorico.gif\"></a>");
				}
			}
		});
}
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
