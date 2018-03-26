<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-25 12:09:32
         compiled from "D:\xampp\htdocs\uploads\app\template\admin\admin_zhaopinhui_com.htm" */ ?>
<?php /*%%SmartyHeaderCode:9913023365a9236fc371658-39472428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c21ce82db5a36fddec4b7391bc4fdba3777eb12' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\admin\\admin_zhaopinhui_com.htm',
      1 => 1517816809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9913023365a9236fc371658-39472428',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'type' => 0,
    'k' => 0,
    'v' => 0,
    'rows' => 0,
    'key' => 0,
    'spacearr' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a9236fc42db56_32741825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9236fc42db56_32741825')) {function content_5a9236fc42db56_32741825($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
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
<?php echo '<script'; ?>
 language="javascript">
layui.use(['form'], function(){form = layui.form;});
$(function(){
	$(".status").click(function(){
		$("input[name=pid]").val($(this).attr("pid"));
		var id=$(this).attr("pid");
		var status=$(this).attr("status");
		var pytoken=$("#pytoken").val();
		$("#status"+status).attr("checked",true);
		layui.use(['form'], function(){form = layui.form;form.render();});
		$.post("index.php?m=zhaopinhui&c=sbody",{id:id,pytoken:pytoken},function(msg){
			$("#statusbody").val(msg);
			status_div('参展企业审核','380','240');
		});			
	});
}); 
function audall(){
	var codewebarr="";
	$(".check_all:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
		if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
	});
	if(codewebarr==""){
		parent.layer.msg('您还未选择任何信息！', 2, 8);	return false;
	}else{
		$("input[name=pid]").val(codewebarr);
 		$("#statusbody").val('');
		$("input[name='status']").attr('checked',false);
		status_div('参展企业审核','380','240');
	}
} 
<?php echo '</script'; ?>
> 
<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" /> 
<link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />

<title>后台管理</title>
</head>
<body class="body_ifm">
<div id="status_div"  style="display:none; width: 360px; ">
  <div class=""> 
      <form action="index.php?m=zhaopinhui&c=status" target="supportiframe" method="post" id="formstatus" class="layui-form">
         <table cellspacing='1' cellpadding='1' class="admin_examine_table">
  <tr>
    <th width="80">审核操作：</th>
      <td align="left">
        <div class="layui-form-item">
     	<!--<label for="status0"><span class="admin_examine_table_s"><input type="radio" name="status" value="0" id="status0" >未审核</span></label>
        	<label for="status1"><span class="admin_examine_table_s"><input type="radio" name="status" value="1" id="status1" >正常</span></label>
        	<label for="status2"><span class="admin_examine_table_s"><input type="radio" name="status" value="2" id="status2" >未通过</span></label>-->
        
    <div class="layui-input-block">
        <input type="radio" name="status" id="status3" value="0" title="未审核" ><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><span>未审核</span></div>
        <input type="radio" name="status" id="status1" value="1" title="正常"   ><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><span>正常</span></div>
        <input type="radio" name="status" id="status2" value="2" title="未通过" ><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><span>未通过</span></div>
    </div>
        
    </div>
         </td>
          </tr>
          <tr>
            <th>审核说明：</th>
   <td align="left"><textarea id="statusbody" name="statusbody" class="admin_explain_textarea"></textarea></td>
   </tr>
     <tr>
       <td colspan='2' align="center">
       <div class="admin_Operating_sub"> 
       <input name="pid" value="0" type="hidden">
       <input type="submit"  value='确认' class="admin_examine_bth"> 
       <input type="button" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'>
       </div>
       </td>
   </tr>
    </table>

		<input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
		<input name="pid" value="0" type="hidden">
      </form> 
  </div>
</div> 
<div class="infoboxp">
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">该页面展示了网站所有的招聘会参会企业信息，可对参会企业进行审核删除操作。</div>
<div class="admin_new_tip_list">可输入名称关键字进行搜索，也可进行详细的高级搜索。</div>
</div>
</div>

<div class="clear"></div>

<div class="admin_new_search_box"> 
  <form action="index.php" name="myform" method="get">
  <input name="m" value="zhaopinhui" type="hidden"/>
  <input name="c" value="com" type="hidden"/>
	<div class="admin_new_search_name">搜索类型：</div>
    <div class="admin_Filter_text formselect"  did='dtype'>
  <input type="button" value="<?php if ($_GET['type']) {
echo $_smarty_tpl->tpl_vars['type']->value[$_GET['type']];
} else { ?>请选择<?php }?>" class="admin_Filter_but"  id="btype"> 
  <input type="hidden" id='type' value="<?php echo $_GET['type'];?>
" name='type'>
  <div class="admin_Filter_text_box" style="display:none" id='dtype'>
	  <ul>
	  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
	  <li><a href="javascript:void(0)" onClick="formselect('<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
','type','<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
')"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a></li>
	  <?php } ?>
	  </ul>  
  </div>
  </div>
	<input class="admin_Filter_search" placeholder="输入你要搜索的关键字" type="text" name="keyword"  size="25" style="float:left"> 
	<input  class="admin_Filter_bth" type="submit" value="搜索"/>       
	<a  href="javascript:void(0)" onclick="$('.admin_screenlist_box').toggle();"   class="admin_new_search_gj">高级搜索</a></form>
    <?php echo $_smarty_tpl->getSubTemplate ("admin/admin_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </div>
<div class="clear"></div> 

 
<div class="table-list">
<div class="admin_table_border">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
<form action="index.php?m=zhaopinhui&c=delcom" name="myform" method="post" target="supportiframe" id='myform'>
<table width="100%">
	<thead>
		<tr class="admin_table_top">
			<th style="width:20px;"><label for="chkall"><input type="checkbox" id='chkAll' onclick='CheckAll(this.form)' /></label></th>
            <th align="left">招聘会名称</th>
			<th align="left">企业名称</th>
			<th width="300" align="left">参与职位</th>
			<th>场地</th>
			<th>区位</th>
			<th align="left">展位</th>
			<th>状态</th>
			<th width="100" class="admin_table_th_bg">操作</th>
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
			<td ><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" name='del[]' onclick='unselectall()' class="check_all" rel="del_chk" /></td>
			<td align="left" ><?php echo $_smarty_tpl->tpl_vars['v']->value['zphname'];?>
</td>
            <td align="left" ><?php echo $_smarty_tpl->tpl_vars['v']->value['comname'];?>
</td>
			<td align="left" ><?php echo $_smarty_tpl->tpl_vars['v']->value['jobname'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['spacearr']->value[$_smarty_tpl->tpl_vars['v']->value['sid']];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['spacearr']->value[$_smarty_tpl->tpl_vars['v']->value['cid']];?>
</td>
			<td align="left"><?php echo $_smarty_tpl->tpl_vars['spacearr']->value[$_smarty_tpl->tpl_vars['v']->value['bid']];?>
</td>
			<td><?php if ($_smarty_tpl->tpl_vars['v']->value['status']==1) {?><span class="admin_com_Audited">已审核</span><?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==0) {?><span class="admin_com_noAudited">未审核</span><?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==2) {?><span class="admin_com_tg">未通过</span><?php }?></td>
			<td>
			<a href="javascript:;" class="admin_new_c_bth admin_new_c_bthsh status" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" status="<?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
">审核</a>  <a href="javascript:void(0)" class="admin_new_c_bth admin_new_c_bth_sc mt5" onClick="layer_del('确定要删除？', 'index.php?m=zhaopinhui&c=delcom&delid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');">删除</a></td>
		</tr>
		<?php } ?>
		<tr style="background: #f1f1f1;">
       		<td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
			<td colspan="2"><label for="chkAll2">全选</label>&nbsp;
            <input class="admin_button" type="button" name="delsub" value="批量审核" onClick="audall();" />
            <input class="admin_button"  type="button" name="delsub" value="删除所选"  onclick="return really('del[]')"/></td>
			<td colspan="6" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
		</tr>
	</tbody>
</table>
<input type="hidden" name="pytoken" id="pytoken"  value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
</form>
</div><?php }} ?>
