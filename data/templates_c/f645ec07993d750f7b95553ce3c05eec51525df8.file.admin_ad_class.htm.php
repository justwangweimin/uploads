<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-26 12:48:25
         compiled from "D:\xampp\htdocs\uploads\app\template\admin\admin_ad_class.htm" */ ?>
<?php /*%%SmartyHeaderCode:20188354415a9391998facc2-23053933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f645ec07993d750f7b95553ce3c05eec51525df8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\admin\\admin_ad_class.htm',
      1 => 1517969212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20188354415a9391998facc2-23053933',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'ad_class_list' => 0,
    'key' => 0,
    'list' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a939199b680f7_14527286',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a939199b680f7_14527286')) {function content_5a939199b680f7_14527286($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
<?php echo '<script'; ?>
 src="js/show_pub.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
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

<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<div id="wname"  style="display:none; width:400px; "> 
	<div style="height: 260px;" class="job_box_div">  
	   <div class="job_box_inp">
		<table class="table_form "style="width:100%">
			<tr><td>
            <textarea name="position" id="copy_url" rows="3" cols="50" class="web_text_textarea" style="width:355px"></textarea>
            </td></tr>
            <tr class="ui_td_11">
            <td  class="ui_content_wrap" colspan='2'><input class="layui-btn layui-btn-normal" type="button" name="add" value=" 复制代码 " /></td>
          </tr>
            <tr><td><span class="admin_web_tip">复制内容并添加到模板中</span></td></tr> 
            <tr><td><span class="admin_web_tip">limit=5 为调用数量，可自行修改，如调用6条，为limit=6</span></td></tr>
		</table> 
	   </div>
	</div>
</div> 
<div id="houtai_div" style="display:none;"><form class="layui-form">
  <table class="admin_examine_table " style="width:100%; margin-top:10px; ">
    <tbody>
      <tr class="ui_td_11" >
        <th width="80">类别名称：</th>
        <td><div><input type="text" name="add_name" id="class_name" class="input-text" /></div></td>
      </tr>
      <tr class="ui_td_11">
        <th>排  序：</th>
        <td><input type="text" name="orders" id='orders' size='5' class="input-text" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"/></td>
      </tr>
      <input type="hidden" value='2'  name="type" id="type" />
      
      <tr class="ui_td_11">
        <th>演示地址：</th>
        <td><input id="href" class="input-text" type="text" value="" name="href"></td>
      </tr>
      <tr class="ui_td_11">
        <input name='id' value='' type='hidden' id='id'/>
        <td  class="ui_content_wrap" colspan='2'><input class="layui-btn layui-btn-normal" type="button" name="add" value=" 添加 " onClick="save_adclass()" /></td>
      </tr>
    </tbody>
  </table></form>
</div> 
<div class="infoboxp">
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">该页面展示了网站所有的广告分类信息，可对广告分类进行修改，删除操作。</div>
</div>
</div>

<div class="clear"></div>

<div class="admin_new_search_box"> 
 <a href="javascript:void(0)" onclick="add_industry('1')" class="admin_new_cz_tj" style="margin-left:0px;">+ 添加类别</a>


  </div>
<div class="clear"></div> 
<div class="table-list">
  <div class="admin_table_border">
    <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
    <form action="index.php" name="myform" method="get" target="supportiframe" id='myform'>
    <input type="hidden" name="pytoken" id="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
     <input name="m" value="advertise" type="hidden"/>
      <input name="c" value="delclass" type="hidden"/>   
      <table width="100%">
        <thead>
          <tr class="admin_table_top">
          <th><label for="chkall">
                <input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/>
              </label></th>
            <th>编号</th>
            <th align="left">分类名称</th>
            <th>演示地址</th>
            <th>排序</th>
            <th>调用代码</th>
            <th width="120" >操作</th>
          </tr>
        </thead>
        <tbody>
        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ad_class_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
       <tr align="center"<?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg"<?php }?> id="list<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
">
          <td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
          <td><span><?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
</span></td>
          <td align="left"><span><?php echo $_smarty_tpl->tpl_vars['list']->value['class_name'];?>
</span></td>
          <td class="ud" align="left"><?php echo $_smarty_tpl->tpl_vars['list']->value['href'];?>
</td>
          <td class="od"><?php echo $_smarty_tpl->tpl_vars['list']->value['orders'];?>
</td>
          <td class="ud"> 
        	<a href="javascript:void(0);" onClick="copy_adclass('内部调用','{yun\:}adlist classid=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
 limit=5 item=adlist_<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
{/yun}\r\n{yun\:}$adlist_<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
.html{/yun}\r\n{yun\:}/adlist{/yun}')" class="admin_cz_sc">内部调用</a>
        </td>
          <td><span style="cursor:pointer;" onClick="showdiv5('<?php echo $_smarty_tpl->tpl_vars['list']->value['class_name'];?>
','<?php echo $_smarty_tpl->tpl_vars['list']->value['orders'];?>
','<?php echo $_smarty_tpl->tpl_vars['list']->value['integral_buy'];?>
','<?php echo $_smarty_tpl->tpl_vars['list']->value['href'];?>
','<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['list']->value['type'];?>
');" class="admin_new_c_bth">修改</span> <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=advertise&c=delclass&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a></td>
        </tr>
        <?php } ?>
        <tr style="background:#f1f1f1;">
          <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
          <td colspan="2" ><label for="chkAll2">全选</label>
             
            <input class="admin_button"  type="button" name="delsub" value="删除所选" onClick="return really('del[]')"/></td>
          <td colspan="10" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
        </tr>
        </tbody>
      </table>
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
function add_industry(type){
	if(type=='1'){
		$("#class_name").val('');
		$("#orders").val('');
		$("#href").val('');
		$("#id").val('');
		$("#integral_buy").val('');
	} 
	$.layer({
		type : 1,
		title : '添加类别', 
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		offset: [($(window).height() - 320)/2 + 'px', ''],
		area : ['400px','350px'],
		page : {dom : '#houtai_div'}
	}); 
}
function save_adclass(){
	var id=$("#id").val(); 
	var class_name=$("#class_name").val(); 
	var orders=$("#orders").val();
	var pytoken=$("#pytoken").val();
	var integral_buy=$("#integral_buy").val();
	var type=$('#type').val();
	var href=$('#href').val();
	if($.trim(class_name)==''){
		parent.layer.msg('广告类别名称不能为空！', 2,8);return false;
	}
	if(type=='1'&&(integral_buy=='')){
		parent.layer.msg('请输入购买<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
！', 2,8);return false;
	} 
	loadlayer();
	$.post("index.php?m=advertise&c=class",{class_name:class_name,orders:orders,integral_buy:integral_buy,type:type,href:href,id:id,pytoken:pytoken},function(msg){
    parent.layer.closeAll('loading');
 		if(msg==1){
			parent.layer.msg('操作成功！', 2,9,function(){location=location ;});return false;
		}else{
			parent.layer.msg('操作失败！', 2,8,function(){location=location ;});return false;
		}
	});
}
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
