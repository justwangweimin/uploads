<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 16:40:20
         compiled from "D:\xampp\htdocs\uploads\app\template\admin\admin_report_userlist.htm" */ ?>
<?php /*%%SmartyHeaderCode:9026642185ab0c8f4c686a3-95114682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9550e9446fb8f44a35a343b054c3c446e2090984' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\admin\\admin_report_userlist.htm',
      1 => 1517908182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9026642185ab0c8f4c686a3-95114682',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'type' => 0,
    'ut' => 0,
    'userrows' => 0,
    'user' => 0,
    'email_promiss' => 0,
    'pagenav' => 0,
    'q_report' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0c8f562b988_52769992',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0c8f562b988_52769992')) {function content_5ab0c8f562b988_52769992($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.searchurl.php';
if (!is_callable('smarty_function_url')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
<?php echo '<script'; ?>
 type="text/javascript">
function resultreport(pid,result){
	$("#result").val(result)
	$("#pid").val(pid);
	add_class('处理结果','350','200','#status_div','');
}
function showbox(title,msg){
	var pytoken=$("#pytoken").val();
	$.post("index.php?m=report&c=show",{id:msg,pytoken:pytoken},function(data){
		data=eval('('+data+')');
		$('#showboxmsg').html(data.r_reason);
		$.layer({
			type : 1,
			title :title, 
			closeBtn : [0 , true],
			border : [10 , 0.3 , '#000', true],
			area : ['350px','210px'],
			page : {dom :"#showbox"}
		});
	});
}
<?php echo '</script'; ?>
>
<title>后台管理</title> 
</head>
<body class="body_ifm">
	<div id="returndiv" style="display:none; width: 350px;"> 
	    <table cellspacing='1' cellpadding='1' class="admin_examine_table">
			<tr>
				<th width='80'>操作人：</th>
				<td align="left" id='returnadmin'></td>
			</tr> 
			<tr>
				<th width='80'>操作时间：</th>
				<td align="left" id='returnrtime'></td>
			</tr> 
			<tr>
				<th width='80'>处理结果：</th>
				<td align="left" id='returnresult'></td>
			</tr> 
	    </table> 
	</div>
	<div id="status_div" style="display:none; width: 350px; ">
		<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
	  	<form action="index.php?m=report&c=saveresult" target="supportiframe" method="post" id="formstatus" name="myform">
	  		<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
"> 
	    	<table cellspacing='1' cellpadding='1' class="admin_examine_table">
		  		<tr>
					<th width='80'>处理结果：</th>
					<td align="left"><textarea id="result" name="result" class="admin_explain_textarea"></textarea></td>
	   			</tr>
	    		<tr>
	       			<td colspan='2' align="center">
		       			<div class="admin_Operating_sub"> 
					       <input name="pid" value="0" id='pid' type="hidden">
					       <input type="submit"  value='确认' class="admin_examine_bth"> 
					       <input type="button" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'>
		      			</div>
	       			</td>
	  			</tr>
	    	</table>
	  </form> 
	</div>
	
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['adminstyle']->value)."/member_send_email.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="infoboxp">

<div class="tabs_info">
    <ul>
     <li <?php if ($_smarty_tpl->tpl_vars['type']->value!='1'&&$_smarty_tpl->tpl_vars['type']->value!='2'&&$_smarty_tpl->tpl_vars['type']->value!='3'&&$_smarty_tpl->tpl_vars['ut']->value!='2') {?> class="curr"<?php }?>> <a href="index.php?m=report">被举报职位</a> </li>
    	<li <?php if ($_smarty_tpl->tpl_vars['ut']->value=='2') {?> class="curr"<?php }?>><a href="index.php?m=report&ut=2">被举报简历</a> </li>
    	<li<?php if ($_smarty_tpl->tpl_vars['type']->value=='1') {?> class="curr"<?php }?>><a href="index.php?m=report&type=1" >被举报问答</a> </li>
    <li<?php if ($_smarty_tpl->tpl_vars['type']->value=='2') {?> class="curr"<?php }?>>	<a href="index.php?m=report&type=2" >被投诉顾问</a> </li>
        
    </ul>
  </div>


 
  <?php if ($_smarty_tpl->tpl_vars['type']->value!='1'&&$_smarty_tpl->tpl_vars['type']->value!='2') {?>
  
  <div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">该页面展示了被举报的<?php if ($_smarty_tpl->tpl_vars['ut']->value==2) {?>简历<?php } else { ?>职位<?php }?>。</div>
</div>
</div>
<div class="clear"></div>
<div class="admin_new_search_box">
 <form action="index.php" name="myform" method="get">
      <input name="m" value="report" type="hidden"/>
      <input name="ut" value="<?php echo $_smarty_tpl->tpl_vars['ut']->value;?>
" type="hidden"/>
<div class="admin_new_search_name">搜索类型：</div>
 <div class="admin_Filter_text formselect"  did='df_type'>
        <input type="button" value="<?php if ($_GET['f_type']=='1'||$_GET['f_type']=='') {
if ($_smarty_tpl->tpl_vars['ut']->value=='2') {?>姓名<?php } else { ?>公司名 <?php }
} elseif ($_GET['f_type']=='2') {?>举报人<?php } elseif ($_GET['f_type']=='3') {?>举报理由<?php }?>" class="admin_Filter_but"  id="bf_type">
        <input type="hidden" id='f_type' value="<?php if ($_GET['f_type']) {
echo $_GET['f_type'];
} else { ?>1<?php }?>" name='f_type'>
        <div class="admin_Filter_text_box" style="display:none" id='df_type'>
          <ul>
            <?php if ($_smarty_tpl->tpl_vars['ut']->value=='2') {?>
            <li><a href="javascript:void(0)" onClick="formselect('1','f_type','姓名')">姓名</a></li>
            <?php } else { ?>
            <li><a href="javascript:void(0)" onClick="formselect('1','f_type','公司名')">公司名</a></li>
            <?php }?>
            <li><a href="javascript:void(0)" onClick="formselect('2','f_type','举报人')">举报人</a></li>
            <li><a href="javascript:void(0)" onClick="formselect('3','f_type','举报理由')">举报理由</a></li>
          </ul>
        </div>
      </div>
      <input class="admin_Filter_search" placeholder="输入你要搜索的关键字" type="text" name="keyword"  size="25" style="float:left">
      <input  class="admin_Filter_bth"  type="submit" name="qysearch" value="搜索"/>
</form>


 
 </div>
<div class="clear"></div>

  <div class="table-list">
    <div class="admin_table_border">
      <form action="index.php" name="myform" method="get" target="supportiframe" id='myform'>
        <input name="m" value="report" type="hidden"/>
        <input name="c" value="del" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall"><input type="checkbox" id='chkAll' onclick='CheckAll(this.form)'/></label></th>
              <?php if ($_smarty_tpl->tpl_vars['ut']->value==2) {?>
              <?php if ($_GET['t']=="p_uid"&&$_GET['order']=="asc") {?>
              <th><a href="<?php echo smarty_function_searchurl(array('order'=>'desc','ut'=>$_smarty_tpl->tpl_vars['ut']->value,'t'=>'p_uid','m'=>'report','untype'=>'order,t,ut'),$_smarty_tpl);?>
">用户ID<img src="images/sanj.jpg"/></a></th>
              <?php } else { ?>
              <th><a href="<?php echo smarty_function_searchurl(array('order'=>'asc','ut'=>$_smarty_tpl->tpl_vars['ut']->value,'t'=>'p_uid','m'=>'report','untype'=>'order,t,ut'),$_smarty_tpl);?>
">用户ID<img src="images/sanj2.jpg"/></a></th>
              <?php }?>
              <?php } else { ?>
              <?php if ($_GET['t']=="c_uid"&&$_GET['order']=="asc") {?>
              <th><a href="<?php echo smarty_function_searchurl(array('order'=>'desc','ut'=>$_smarty_tpl->tpl_vars['ut']->value,'t'=>'c_uid','m'=>'report','untype'=>'order,t,ut'),$_smarty_tpl);?>
">用户ID<img src="images/sanj.jpg"/></a></th>
              <?php } else { ?>
              <th><a href="<?php echo smarty_function_searchurl(array('order'=>'asc','ut'=>$_smarty_tpl->tpl_vars['ut']->value,'t'=>'c_uid','m'=>'report','untype'=>'order,t,ut'),$_smarty_tpl);?>
">用户ID<img src="images/sanj2.jpg"/></a></th>
              <?php }?>
              <?php }?>
              <th align="left" width="160"><?php if ($_smarty_tpl->tpl_vars['ut']->value==2) {?>姓名<?php } else { ?>公司名<?php }?></th>
              <?php if ($_smarty_tpl->tpl_vars['ut']->value==2) {
} else { ?>
              <th align="left">职位</th>
              <?php }?>
              <th align="left">邮箱</th>
              <th align="left">举报人</th>
              <?php if ($_GET['t']=="inputtime"&&$_GET['order']=="asc") {?>
              <th><a href="<?php echo smarty_function_searchurl(array('order'=>'desc','ut'=>$_smarty_tpl->tpl_vars['ut']->value,'t'=>'inputtime','m'=>'report','untype'=>'order,t,ut'),$_smarty_tpl);?>
">举报时间<img src="images/sanj.jpg"/></a></th>
              <?php } else { ?>
              <th><a href="<?php echo smarty_function_searchurl(array('order'=>'asc','ut'=>$_smarty_tpl->tpl_vars['ut']->value,'t'=>'inputtime','m'=>'report','untype'=>'order,t,ut'),$_smarty_tpl);?>
">举报时间<img src="images/sanj2.jpg"/></a></th>
              <?php }?>
              <th align="left" style="width:230px;">举报理由</th>
              <th class="admin_table_th_bg">操作</th>
            </tr>
          </thead>
          <tbody>
          
          <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userrows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
          <tr align="center" id="list<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
            <td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['user']->value['c_uid'];?>
</td>
            <td class="ud" align="left"><?php if ($_smarty_tpl->tpl_vars['user']->value['usertype']=="2") {?><a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>'`$user.eid`'),$_smarty_tpl);?>
" target="_blank" class="admin_cz_sc"><?php echo $_smarty_tpl->tpl_vars['user']->value['r_name'];?>
</a><?php } else { ?><a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>'`$user.c_uid`'),$_smarty_tpl);?>
" target="_blank" class="admin_cz_sc"><?php echo $_smarty_tpl->tpl_vars['user']->value['r_name'];?>
</a><?php }?></td>
            <?php if ($_smarty_tpl->tpl_vars['user']->value['usertype']=="2") {
} else { ?>
            <td class="od" align="left"><a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>'`$user.eid`'),$_smarty_tpl);?>
" target="_blank" class="admin_cz_sc"><?php echo mb_substr($_smarty_tpl->tpl_vars['user']->value['name'],0,20,'utf-8');?>
</a></td>
            <?php }?>
            <td class="od" align="left"><?php if ($_smarty_tpl->tpl_vars['user']->value['email']) {?>
              <div  style="width:130px;"> <?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
<br>
                <?php if ($_smarty_tpl->tpl_vars['email_promiss']->value=='1') {?><span onClick="send_email('<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
');" style="color:green; cursor:pointer;">发邮件</span><?php }?></div>
              <?php }?></td>
            <td class="gd" align="left"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td>
            <td class="td"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value['inputtime'],"%Y-%m-%d");?>
</td>
            <td class="gd"><div style="width:230px; text-align:left"><?php echo $_smarty_tpl->tpl_vars['user']->value['r_reason'];?>
</div></td>
            <td> <?php if ($_smarty_tpl->tpl_vars['ut']->value==2) {?> <a href="javascript:void(0)" onClick="layer_del('确定要删除简历并删除该信息？', 'index.php?m=report&c=delresume&id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
&eid=<?php echo $_smarty_tpl->tpl_vars['user']->value['eid'];?>
&uid=<?php echo $_smarty_tpl->tpl_vars['user']->value['c_uid'];?>
');"class="admin_cz_sc">删除简历</a> <?php } else { ?> <a href="javascript:void(0)" onClick="layer_del('确定要删除职位并删除该信息？', 'index.php?m=report&c=deljob&id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
&eid=<?php echo $_smarty_tpl->tpl_vars['user']->value['eid'];?>
');"class="admin_new_c_bth admin_new_c_bth_sc">职位</a> <?php }?> 
             <a  href="javascript:void(0)" onclick="resultreport('<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['user']->value['result'];?>
')"  class="admin_new_c_bth">处理</a> 
             <a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=report&c=del&del=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a></td>
          </tr>
          <?php } ?>
          <tr style="background:#f1f1f1;">
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="2" ><label for="chkAll2">全选</label>
              <input class="admin_button" type="button" name="delsub" value="删除所选"  onclick="return really('del[]')"/></td>
            <td colspan="7" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
          </tr>
            </tbody>
          
        </table>
        <input type="hidden" name="pytoken"  id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
      </form>
    </div>
  </div>
  <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=='1') {?>
    <div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">该页面展示了被举报的问答。</div>
</div>
</div>
<div class="clear"></div>
  <div class="admin_new_search_box">
    <form action="index.php" name="myforms" method="get"  id='myforms'>
      <input name="m" value="report" type="hidden"/>
      <input name="type" value="1" type="hidden"/>
<div class="admin_new_search_name">搜索类型：</div>
   <div class="admin_Filter_text formselect"  did='dp_type'>
        <input type="button" value="<?php if ($_GET['p_type']=='1'||$_GET['p_type']=='') {?>被举报者<?php } else { ?>举报者<?php }?>" class="admin_Filter_but"  id="bp_type">
        <input type="hidden" id='p_type' value="<?php if ($_GET['p_type']) {
echo $_GET['p_type'];
} else { ?>1<?php }?>" name='p_type'>
        <div class="admin_Filter_text_box" style="display:none" id='dp_type'>
          <ul>
            <li><a href="javascript:void(0)" onClick="formselect('1','p_type','被举报者')">被举报者</a></li>
            <li><a href="javascript:void(0)" onClick="formselect('2','p_type','举报者')">举报者</a></li>
          </ul>
        </div>
      </div>
      <input class="admin_Filter_search" placeholder="输入你要搜索的关键字" type="text" name="keyword"  size="25" style="float:left">
      <input  class="admin_Filter_bth"  type="submit" name="comquestion" value="检索"/>
      <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
</form>


 
 </div>
<div class="clear"></div>




  <div class="admin_Filter">
   
  <div class="table-list">
    <div class="admin_table_border"> 
      <form action="index.php" name="myform" method="get" id='myform'  target="supportiframe" >
        <input name="m" value="report" type="hidden"/>
        <input name="c" value="del" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th><label for="chkall">
                  <input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/>
                </label></th>
              <th> <?php if ($_GET['t']=="id"&&$_GET['order']=="asc") {?> <a href="<?php echo smarty_function_searchurl(array('type'=>1,'order'=>'desc','t'=>'id','m'=>'report','untype'=>'order,t,type'),$_smarty_tpl);?>
">编号<img src="images/sanj.jpg"/></a> <?php } else { ?> <a href="<?php echo smarty_function_searchurl(array('type'=>1,'order'=>'asc','t'=>'id','m'=>'report','untype'=>'order,t,type'),$_smarty_tpl);?>
">编号<img src="images/sanj2.jpg"/></a> <?php }?> </th>
              <th align="left">被举报者</th>
              <th align="left">举报者</th> 
              <th align="left">举报问题</th>
              <th >是否处理</th>
              <th align="left">举报原因</th>
              <th> <?php if ($_GET['t']=="inputtime"&&$_GET['order']=="asc") {?> <a href="<?php echo smarty_function_searchurl(array('type'=>1,'order'=>'desc','t'=>'inputtime','m'=>'report','untype'=>'order,t,type'),$_smarty_tpl);?>
">举报时间<img src="images/sanj.jpg"/></a> <?php } else { ?> <a href="<?php echo smarty_function_searchurl(array('type'=>1,'order'=>'asc','t'=>'inputtime','m'=>'report','untype'=>'order,t,type'),$_smarty_tpl);?>
">举报时间<img src="images/sanj2.jpg"/></a> <?php }?> </th>
              <th class="admin_table_th_bg">操作</th>
            </tr>
          </thead>
          <tbody>
          
          <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['q_report']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
          <tr align="center" id="list<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
">
            <td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td align="left" class="td1"><span><?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
</span></td>
            <td align="left"><?php echo $_smarty_tpl->tpl_vars['r']->value['r_name'];?>
</td>
            <td align="left"><?php echo $_smarty_tpl->tpl_vars['r']->value['username'];?>
</td> 
            <td align="left"><?php if ($_smarty_tpl->tpl_vars['r']->value['is_del']) {?><font color="red"><?php echo $_smarty_tpl->tpl_vars['r']->value['is_del'];?>
</font><?php } elseif ($_smarty_tpl->tpl_vars['r']->value['status']!=1) {?> <a href="<?php echo $_smarty_tpl->tpl_vars['r']->value['url'];?>
" target="_blank"><?php echo mb_substr($_smarty_tpl->tpl_vars['r']->value['title'],0,20,'utf-8');?>
</a> <?php } else { ?>
              <a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'content','id'=>$_smarty_tpl->tpl_vars['r']->value['eid']),$_smarty_tpl);?>
" target="_blank"><?php echo mb_substr($_smarty_tpl->tpl_vars['r']->value['title'],0,20,'utf-8');?>
</a>
              <?php }?></td>
            <td id="status<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
"><?php if ($_smarty_tpl->tpl_vars['r']->value['is_del']) {?><font color="red"><?php echo $_smarty_tpl->tpl_vars['r']->value['is_del'];?>
</font><?php } elseif ($_smarty_tpl->tpl_vars['r']->value['status']=="1") {?><a href="javascript:void(0);" onClick="rec_up('index.php?m=report&c=recommend','<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
','0','status');"><img src="../config/ajax_img/doneico.gif"></a><?php } else { ?><a href="javascript:void(0);" onClick="rec_up('index.php?m=report&c=recommend','<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
','1','status');"><img src="../config/ajax_img/errorico.gif"></a><?php }?></td>
            <td align="left"><?php echo $_smarty_tpl->tpl_vars['r']->value['reason'];?>
</td>
            <td class="td"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['r']->value['inputtime'],"%Y-%m-%d %H:%M");?>
</td>
            <td>
            	<?php if (!$_smarty_tpl->tpl_vars['r']->value['is_del']) {?><a href="index.php?m=admin_question&c=<?php echo $_smarty_tpl->tpl_vars['r']->value['c'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['r']->value['eid'];?>
&back_url=1" class="admin_cz_sc"> 修改问答</a> |<?php }?> 
            	<a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=report&c=del&del=<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a> | 
            	<a href="javascript:void(0)" onclick="resultreport('<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['r']->value['result'];?>
')" class="admin_cz_sc">处理结果</a>   
            	<?php if (!$_smarty_tpl->tpl_vars['r']->value['is_del']) {?>|<a href="javascript:void(0)" onClick="layer_del('确定要删除问答？', 'index.php?m=report&c=delquestion&del=<?php echo $_smarty_tpl->tpl_vars['r']->value['eid'];?>
');" class="admin_cz_sc">删除问答</a><?php }?>
            </td>
          </tr>
          <?php } ?>
          <tr style="background:#f1f1f1;">
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="2" ><label for="chkAll2">全选</label>
              &nbsp;
              <input class="admin_button"   type="button" name="delsub" value="删除所选" onClick="return really('del[]')" /></td>
            <td colspan="7" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
          </tr>
            </tbody>
          
        </table>
        <input type="hidden" name="pytoken"  id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
      </form>
    </div>
  </div>
  <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=='2') {?>
    <div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">该页面展示了被投诉的顾问。</div>
</div>
</div>
<div class="clear"></div>
    <div class="admin_new_search_box">
     <form action="index.php" name="myforms" method="get"  id='myforms'>
      <input name="m" value="report" type="hidden"/>
      <input name="type" value="2" type="hidden"/>
<div class="admin_new_search_name">搜索类型：</div>
  <div class="admin_Filter_text formselect"  did='dp_type'>
        <input type="button" value="<?php if ($_GET['p_type']=='1'||$_GET['p_type']=='') {?>被投诉者<?php } else { ?>投诉者<?php }?>" class="admin_Filter_but"  id="bp_type">
        <input type="hidden" id='p_type' value="<?php if ($_GET['p_type']) {
echo $_GET['p_type'];
} else { ?>1<?php }?>" name='p_type'>
        <div class="admin_Filter_text_box" style="display:none" id='dp_type'>
          <ul>
            <li><a href="javascript:void(0)" onClick="formselect('1','p_type','被投诉者')">被投诉者</a></li>
            <li><a href="javascript:void(0)" onClick="formselect('2','p_type','投诉者')">投诉者</a></li>
          </ul>
        </div>
      </div>
      <input class="admin_Filter_search" placeholder="输入你要搜索的关键字" type="text" name="keyword"  size="25" style="float:left">
      <input  class="admin_Filter_bth"  type="submit" name="comquestion" value="检索"/>
      <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
</form>


 
 </div>
<div class="clear"></div>


  <div class="admin_Filter">
 
  <div class="table-list">
    <div class="admin_table_border"> 
      <form action="index.php" name="myform" method="get" id='myform'  target="supportiframe" >
        <input name="m" value="report" type="hidden"/>
        <input name="c" value="del" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th><label for="chkall">
                  <input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/>
                </label></th>
              <th> <?php if ($_GET['t']=="id"&&$_GET['order']=="asc") {?> <a href="<?php echo smarty_function_searchurl(array('type'=>2,'order'=>'desc','t'=>'id','m'=>'report','untype'=>'order,t,type'),$_smarty_tpl);?>
">编号<img src="images/sanj.jpg"/></a> <?php } else { ?> <a href="<?php echo smarty_function_searchurl(array('type'=>2,'order'=>'asc','t'=>'id','m'=>'report','untype'=>'order,t,type'),$_smarty_tpl);?>
">编号<img src="images/sanj2.jpg"/></a> <?php }?> </th>
              <th align="left">被投诉者</th>
              <th align="left">投诉者</th> 
              <th align="left">投诉内容</th>
              <th> <?php if ($_GET['t']=="inputtime"&&$_GET['order']=="asc") {?> <a href="<?php echo smarty_function_searchurl(array('type'=>2,'order'=>'desc','t'=>'inputtime','m'=>'report','untype'=>'order,t,type'),$_smarty_tpl);?>
">投诉时间<img src="images/sanj.jpg"/></a> <?php } else { ?> <a href="<?php echo smarty_function_searchurl(array('type'=>2,'order'=>'asc','t'=>'inputtime','m'=>'report','untype'=>'order,t,type'),$_smarty_tpl);?>
">投诉时间<img src="images/sanj2.jpg"/></a> <?php }?> </th>
              <th class="admin_table_th_bg">操作</th>
            </tr>
          </thead>
          <tbody>
          
          <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['q_report']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
          <tr align="center" id="list<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
">
            <td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td align="left" class="td1"><span><?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
</span></td>
            <td align="left"><?php echo $_smarty_tpl->tpl_vars['r']->value['r_name'];?>
</td>
            <td align="left"><?php echo $_smarty_tpl->tpl_vars['r']->value['username'];?>
</td> 
            <td align="left"><?php echo mb_substr($_smarty_tpl->tpl_vars['r']->value['r_reason'],0,45,"utf-8");
if (strlen($_smarty_tpl->tpl_vars['r']->value['r_reason'])>45) {?> 
			<a href="javascript:void(0);" onclick="showbox('评论内容','<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
')" class="admin_cz_sc">[更多]</a>
			<?php }?></td>
            <td class="td"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['r']->value['inputtime'],"%Y-%m-%d %H:%M");?>
</td>
            <td><a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=report&c=del&del=<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a> 
            <a href="javascript:void(0)" onclick="resultreport('<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['r']->value['result'];?>
')" class="admin_cz_sc">处理结果</a></td>
          </tr>
          <?php } ?>
          <tr style="background:#f1f1f1;">
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="2" ><label for="chkAll2">全选</label>
              &nbsp;
              <input class="admin_button"   type="button" name="delsub" value="删除所选" onClick="return really('del[]')" /></td>
            <td colspan="7" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
          </tr>
            </tbody>
          
        </table>
        <input type="hidden" name="pytoken"  id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
      </form>
    </div>
  </div>
  <?php }?> 
  </div> 
<div id="showbox"  style="display:none; width: 340px; overflow:hidden "> 
    <div id="showboxmsg" style="width:320px; padding:10px;height:150px; line-height:25px; font-size:14px; overflow:auto"> </div>   
</div>
</body>
</html>
<?php }} ?>
