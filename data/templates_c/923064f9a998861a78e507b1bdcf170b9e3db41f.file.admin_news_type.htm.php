<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 16:39:31
         compiled from "D:\xampp\htdocs\uploads\app\template\admin\admin_news_type.htm" */ ?>
<?php /*%%SmartyHeaderCode:4482721135ab0c8c38e0388-40423503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '923064f9a998861a78e507b1bdcf170b9e3db41f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\admin\\admin_news_type.htm',
      1 => 1517041899,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4482721135ab0c8c38e0388-40423503',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'property' => 0,
    'key' => 0,
    'v' => 0,
    'pagenav' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0c8c3ad15a7_23287574',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0c8c3ad15a7_23287574')) {function content_5ab0c8c3ad15a7_23287574($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.searchurl.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/show_pub.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
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
 type="text/javascript">

function showdiv(div){
	$("#upid").val("");
	$("#nameid").val("");
	$("#valueid").val("");
	$.layer({
		type : 1,
		title :'属性管理',  
		offset: ['100px', ''],
		closeBtn : [0 , true], 
		area : ['470px','auto'],
		page : {dom :"#"+div}
	}); 
} 
function update(id,name,value){
	$("#upid").val(id);
	$("#nameid").val(name);
	$("#valueid").val(value);
	$("#submit").val('修改');
	$.layer({
		type : 1,
		title :'属性管理',  
		offset: ['100px', ''],
		closeBtn : [0 , true], 
		area : ['470px','auto'],
		page : {dom :"#houtai_div"}
	});
}
function check_form(myform){
	if (myform.name.value==""){ 
		parent.layer.msg('请填写名称！', 2, 8); 
		myform.name.focus();
		return (false);
	}	
	if (myform.value.value==""){
		parent.layer.msg('请填写标识符！', 2, 8); 
		myform.name.focus();
		return (false);
	}	
}
<?php echo '</script'; ?>
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
<div class="admin_new_tip_list">新闻属性主要用于新闻的调用位置，根据属性标识符进行调用。</div>
</div>
</div>
<div class="clear"></div>
<div style="height:10px;"></div>
<div class="admin_new_search_box"> 
 <form action="index.php" name="myform" method="get" >
      <input name="m" value="admin_news" type="hidden"/>
       <input name="c" value="type" type="hidden"/>
      <input name="cate" value="<?php echo $_GET['cate'];?>
" type="hidden"/>
	<div class="admin_new_search_name">搜索类型：</div>
     <div class="admin_Filter_text formselect"  did='dtype'>
        <input type="button" value="<?php if ($_GET['type']=='1'||$_GET['type']=='') {?>名称<?php } else { ?>标识符<?php }?>" class="admin_Filter_but"  id="btype">
        <input type="hidden" id='type' value="<?php if ($_GET['type']) {
echo $_GET['type'];
} else { ?>1<?php }?>" name='type'>
        <div class="admin_Filter_text_box" style="display:none" id='dtype'>
          <ul>
            <li><a href="javascript:void(0)" onClick="formselect('1','type','名称')">名称</a></li>
            <li><a href="javascript:void(0)" onClick="formselect('2','type','标识符')">标识符</a></li>
          </ul>
        </div>
      </div>
      <input class="admin_Filter_search" placeholder="输入你要搜索的关键字" type="text" name="keyword"  size="25" style=" float:left">
      <input class="admin_Filter_bth"  type="submit" name="news_search" value="检索"/>
     <a href="javascript:;" onClick="showdiv('houtai_div')" class="admin_new_cz_tj">+ 添加属性</a>
    </form>
  </div>
<div class="clear"></div> 


  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php" target="supportiframe" name="myform" method="get" id='myform'>
        <input name="m" value="admin_news" type="hidden"/>
        <input name="c" value="delpro" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall">
                  <input type="checkbox" id='chkAll' value="" onclick='CheckAll(this.form)'/>
                </label></th>
              <th width="70"> <?php if ($_GET['t']=="id"&&$_GET['order']=="asc") {?> <a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'id','m'=>'admin_news','c'=>'type','untype'=>'order,t'),$_smarty_tpl);?>
">编号<img src="images/sanj.jpg"/></a> <?php } else { ?> <a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'id','m'=>'admin_news','c'=>'type','untype'=>'order,t'),$_smarty_tpl);?>
">编号<img src="images/sanj2.jpg"/></a> <?php }?> </th>
              <th width="130">名称</th>
              <th width="350">调用标识</th>
              <th  width="80" class="admin_table_th_bg">操作</th>
            </tr>
          </thead>
          <tbody>
          
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['property']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
          <tr align="center"<?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg"<?php }?> id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
            <td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"  class="check_all" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td align="left" class="td1" style="text-align:center;" width="70"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</span></td>
             <td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['value'];?>
</td>
			  <td class="od"><a href="javascript:;" onClick="update('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['value'];?>
');" class="admin_new_c_bth">修改</a> 
			  | <a href="javascript:layer_del('确定要删除？','index.php?m=admin_news&c=delpro&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a></td>
        </tr>
          <?php } ?>
            <td align="center"><input type="checkbox" id='chkAll2' value='' onclick='CheckAll2(this.form)' /></td>
            <td colspan="3"><label for="chkAll2">全选</label>
              &nbsp;
              <input class="admin_button"  type="button" name="delsub" value="删除所选" onClick="return really('del[]')" />
               </td>
            <td colspan="6" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
          </tr>
            </tbody>
        </table>
        <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
      </form>
    </div>
  </div>
</div>
<div id="houtai_div" style=" width:470px; display:none;">
  <div class="subnav">
    <div class="content-menu ib-a blue line-x">
      <form name="myform" action="index.php?m=admin_news&c=property" target="supportiframe" method="post" onSubmit="return check_form(this);" style="">
        <div class="new_dd_but fl">
             <span class="news_dd_nm fl" style="color:#555">名称：</span>
             <input type="text" class="new_dd_mc fl" id="nameid" name="name" class="input-text">
             <span class="news_dd_nm fl" style="color:#555;padding-left:10px;">调用标识：</span>
             <input type="text" id="valueid" name="value" class="new_dd_mc fl" size="10">
        </div>
        <input type="hidden" id="upid" name="id" value="">
        <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
        <input class="admin_button" style="float:right;" name="submit" id="submit" type="submit" value="添加">
      </form>
    </div>
  </div>
</div>
<style>
.admin_compay_fp{width:340px; margin-top:10px;}
.admin_compay_fp_s{width:100px; text-align:right; font-weight:bold; display:inline-block}
.admin_compay_fp_sub{width:140px;height:25px;border:1px solid #ddd;}
.admin_compay_fp_sub1{width:40px;height:27px; background:#3692cf;color:#fff;border:none; cursor:pointer}
.table_dd tr th{border-right:none;border-bottom:1px solid #e6e6e6;}
.line-x{border:none;}
.new_dd_but{margin-bottom:15px;}
.news_dd_nm{height:30px;line-height:30px;}
.new_dd_mc{width:110px;height:30px;line-height:30px;border:1px solid #ccc;}

</style>
<?php echo '<script'; ?>
>
 layui.use(['layer', 'form'], function(){
    var layer = layui.layer
    ,form = layui.form
    ,$ = layui.$;
  });
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
