<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-25 12:09:16
         compiled from "D:\xampp\htdocs\uploads\app\template\admin\admin_evaluate_message.htm" */ ?>
<?php /*%%SmartyHeaderCode:13678670225a9236ec002f02-34027351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60c3975398b8ed9a3534a64a7ff52ddf8c7b7180' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\admin\\admin_evaluate_message.htm',
      1 => 1517041898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13678670225a9236ec002f02-34027351',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'rows' => 0,
    'key' => 0,
    'v' => 0,
    'pagenav' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a9236ec0af310_47029229',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9236ec0af310_47029229')) {function content_5a9236ec0af310_47029229($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
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
function showbox(title,msg){
	var pytoken=$("#pytoken").val();
	$.post("index.php?m=admin_evaluate&c=show",{id:msg,pytoken:pytoken},function(data){
		data=eval('('+data+')');
		$('#showboxmsg').html(data.message);
		$.layer({
			type : 1,
			title :title, 
			closeBtn : [0 , true],
			border : [10 , 0.3 , '#000', true],
			area : ['350px','230px'],
			page : {dom :"#showbox"}
		});
	});
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
<div class="admin_new_tip_list">该页面展示了网站所有的测评留言信息，可对测评留言进行审核删除操作。</div>
<div class="admin_new_tip_list">可输入名称关键字进行搜索，也可进行详细的高级搜索。</div>
</div>
</div>

<div class="clear"></div>

<div class="admin_new_search_box"> 
  <form action="index.php" name="myform" method="get" >
      <input name="m" value="admin_evaluate" type="hidden"/>
        <input name="c" value="message" type="hidden"/>
	<div class="admin_new_search_name">搜索类型：</div>
     <div class="admin_Filter_text formselect"  did='dtype'>
		  <input type="button" value="<?php if ($_GET['type']!='1') {?>用户名<?php } else { ?>留言内容<?php }?>" class="admin_Filter_but"  id="btype"> 
		  <input type="hidden" id='type' value="<?php echo $_GET['type'];?>
" name='type'>
		  <div class="admin_Filter_text_box" style="display:none" id='dtype'>
			  <ul>
			  <li><a href="javascript:void(0)" onClick="formselect('1','type','用户名')">用户名</a></li>
			  <li><a href="javascript:void(0)" onClick="formselect('2','type','留言内容')">留言内容</a></li> 
			  </ul>  
		  </div>
	  </div> 
      <input class="admin_Filter_search"  type="text" name="keyword"  size="25" style=" float:left">
      <input class="admin_Filter_bth"  type="submit" name="evaluate_search" value="检索"/>
	</form>
  
  </div>
<div class="clear"></div> 

  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php" target="supportiframe" name="myform" method="get" id='myform'>
        <input name="m" value="admin_evaluate" type="hidden"/>
        <input name="c" value="delmsg" type="hidden"/>
        <input name="examid" value="<?php echo $_GET['id'];?>
" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall">
                  <input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/>
                </label></th>
              <th width="70">编号</th>
              <th width="130" align="left">用户名</th>
              <th align="left">留言内容</th>
              <th width="130" >评论时间</th> 
              <th width="130" class="admin_table_th_bg">操作</th>
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
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <!--编号-->
            <td align="left" class="td1" style="text-align:center;" width="70"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</span></td>
            <!--测评类别-->
            <td class="ud" align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
            <!--试卷标题-->
            <td class="od" align="left"><?php echo mb_substr(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['v']->value['message']),0,50,'utf-8');
if (strlen($_smarty_tpl->tpl_vars['v']->value['message'])>50) {?> 
			<a href="javascript:void(0);" onclick="showbox('留言内容','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')" class="admin_cz_sc">[更多]</a>
			<?php }?></td>
            <!--发布时间-->
            <td class="td" width="130" ><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['ctime'],"%Y-%m-%d");?>
 </td> 
            <td><a href="javascript:void(0)" onClick="layer_del('确定要删除？','index.php?m=admin_evaluate&c=delmsg&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&examid=<?php echo $_smarty_tpl->tpl_vars['v']->value['examid'];?>
');"class="admin_new_c_bth admin_n_sc">删除</a></td>
          </tr>
          <?php } ?>
          
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="2"><label for="chkAll2">全选</label>
              &nbsp;
              <input class="admin_button"  type="button" name="delsub" value="删除所选" onClick="return really('del[]')" />
            <td colspan="4" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
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
<div id="showbox"  style="display:none; width: 340px; overflow:hidden "> 
    <div id="showboxmsg" style="width:320px; padding:10px;height:150px; line-height:25px; font-size:14px; overflow:auto"> </div>   
</div>
<style>
.admin_new_c_bth {color:#999;font-size:12px;}
</style>
</body>
</html>
<?php }} ?>
