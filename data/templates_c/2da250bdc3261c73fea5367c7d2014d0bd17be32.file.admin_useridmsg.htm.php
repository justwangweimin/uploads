<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 15:54:07
         compiled from "D:\xampp\htdocs\uploads\app\template\admin\admin_useridmsg.htm" */ ?>
<?php /*%%SmartyHeaderCode:19517411115ab0be1f2b49a5-63493611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2da250bdc3261c73fea5367c7d2014d0bd17be32' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\admin\\admin_useridmsg.htm',
      1 => 1518177992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19517411115ab0be1f2b49a5-63493611',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'list' => 0,
    'key' => 0,
    'v' => 0,
    'pagenav' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0be1f4f6d64_17795792',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0be1f4f6d64_17795792')) {function content_5ab0be1f4f6d64_17795792($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.searchurl.php';
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
<title>后台管理</title>
</head>
<body class="body_ifm" style="font-size:12px; line-height:20px;">
<div class="infoboxp">
<div class="tabs_info">
		<ul>
		<li <?php if ($_GET['c']=='') {?>class="curr"<?php }?>><a href="index.php?m=admin_comlog" >职位申请记录</a></li>
		<li <?php if ($_GET['c']=="useridmsg") {?>class="curr"<?php }?>><a href="index.php?m=admin_comlog&c=useridmsg">邀请面试记录</a></li>
		<li <?php if ($_GET['c']=="lookjob") {?>class="curr"<?php }?>><a href="index.php?m=admin_comlog&c=lookjob">职位浏览记录</a></li>
		<li <?php if ($_GET['c']=="partapply") {?>class="curr"<?php }?>><a href="index.php?m=admin_comlog&c=partapply">兼职报名</a></li>
		</ul>
	</div>
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">该页面展示了网站所有的邀请面试记录，可对邀请面试记录进行删除操作。</div>
<div class="admin_new_tip_list">可输入名称关键字进行搜索，也可进行详细的高级搜索。</div>
</div>
</div>

<div class="clear"></div>

<div class="admin_new_search_box"> 
  <form action="index.php" name="myform" method="get">
        <input name="m" value="admin_comlog" type="hidden"/>
        <input name="c" value="useridmsg" type="hidden"/>
	<div class="admin_new_search_name">搜索类型：</div>
 
      <div class="admin_Filter_text formselect"  did='dtype'>
		  <input type="button" value="<?php if ($_GET['type']=='1'||$_GET['type']=='') {?>被邀请人<?php } elseif ($_GET['type']=='2') {?>公司名称<?php } elseif ($_GET['type']=='3') {?>邀请标题<?php } else { ?>邀请内容<?php }?>" class="admin_new_select_text"  id="btype">
		  <input type="hidden" id='type' value="<?php if ($_GET['type']) {
echo $_GET['type'];
} else { ?>1<?php }?>" name='type'>
		  <div class="admin_Filter_text_box" style="display:none" id='dtype'>
			  <ul>
			  <li><a href="javascript:void(0)" onClick="formselect('1','type','被邀请人')">被邀请人</a></li>
			  <li><a href="javascript:void(0)" onClick="formselect('2','type','公司名称')">公司名称</a></li> 
			  <li><a href="javascript:void(0)" onClick="formselect('3','type','邀请标题')">邀请标题</a></li> 
			  <li><a href="javascript:void(0)" onClick="formselect('4','type','邀请内容')">邀请内容</a></li> 
			  </ul>  
		  </div>
		</div> 
	
	<input type="text" value="" placeholder="请输入你要搜索的关键字" name='keyword'class="admin_new_text">
	<input type="submit" value="搜索" name='search'  class="admin_new_bth">
	<a  href="javascript:void(0)" onclick="$('.admin_screenlist_box').toggle();"   class="admin_new_search_gj">高级搜索</a></form>


  
  <?php echo $_smarty_tpl->getSubTemplate ("admin/admin_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </div>
<div class="clear"></div> 



  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php" name="myform" id="myform" method="get" target="supportiframe">
        <input name="m" value="admin_comlog" type="hidden"/>
        <input name="c" value="deluseridmsg" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall">
                  <input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/>
                </label></th>
              <th>
			  <?php if ($_GET['t']=="id"&&$_GET['order']=="asc") {?>
			  <a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'id','m'=>'admin_comlog','c'=>'useridmsg','untype'=>'order,t'),$_smarty_tpl);?>
">编号<img src="images/sanj.jpg"/></a>
              <?php } else { ?>
              <a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'id','m'=>'admin_comlog','c'=>'useridmsg','untype'=>'order,t'),$_smarty_tpl);?>
">编号<img src="images/sanj2.jpg"/></a>
              <?php }?>
			  </th>
              <th align="left">被邀请人</th>
              <th align="left">公司名称</th>
              <th align="left">邀请标题</th>
              <th align="left" width="400">邀请内容</th>
              <th align="center">是否查看</th>
              <th>
			   <?php if ($_GET['t']=="datetime"&&$_GET['order']=="asc") {?>
			  <a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'datetime','m'=>'admin_comlog','c'=>'useridmsg','untype'=>'order,t'),$_smarty_tpl);?>
">邀请时间<img src="images/sanj.jpg"/></a>
              <?php } else { ?>
              <a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'datetime','m'=>'admin_comlog','c'=>'useridmsg','untype'=>'order,t'),$_smarty_tpl);?>
">邀请时间<img src="images/sanj2.jpg"/></a>
              <?php }?>
			  </th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
          <tr align="center"<?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg"<?php }?> id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
            <td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"  name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td align="left" class="td1" style="text-align:center;"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</span></td>
            <td align="left"><a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','uid'=>'`$v.uid`','look'=>'admin'),$_smarty_tpl);?>
" target="_blank" class="admin_cz_sc"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</a></td>
            <td align="left"><a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>'`$v.fid`'),$_smarty_tpl);?>
" target="_blank" class="admin_cz_sc"><?php echo $_smarty_tpl->tpl_vars['v']->value['fname'];?>
</a></td>
            <td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
            <td align="left"><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['content'],0,30,'utf-8');?>
</td>
            <td align="center">
              <?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']==1) {?>
                未查看
              <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['is_browse']==2) {?>
                <span style="color:#5FB878;">已查看</span>
              <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['is_browse']==3) {?>
                <span style="color:#1E9FFF;">已同意</span>
              <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['is_browse']==4) {?>
                <span style="color:#FF5722;">已拒绝</span>
              <?php }?>
            </td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['datetime'],"%Y-%m-%d");?>
</td>
            <td><a href="javascript:void(0)" onClick="layer_del('确定要删除？','index.php?m=admin_comlog&c=deluseridmsg&del=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a></td>
          </tr>
          <?php } ?>
          <tr style="background:#f1f1f1;">
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="2" >
            <label for="chkAll2">全选</label>&nbsp;
            <input class="admin_button" type="button" name="delsub" value="删除所选" onClick="return really('del[]')" /></td>
            <td colspan="6" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
          </tr>
            </tbody>
        </table>
		<input type="hidden" name="pytoken" id="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
      </form>
    </div>
  </div>
</div>
</body>
</html><?php }} ?>
