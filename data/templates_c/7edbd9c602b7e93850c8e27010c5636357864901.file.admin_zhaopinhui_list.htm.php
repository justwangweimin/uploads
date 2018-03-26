<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-25 12:09:19
         compiled from "D:\xampp\htdocs\uploads\app\template\admin\admin_zhaopinhui_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:8960720385a9236ef9f4926-00716626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7edbd9c602b7e93850c8e27010c5636357864901' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\admin\\admin_zhaopinhui_list.htm',
      1 => 1518069217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8960720385a9236ef9f4926-00716626',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'rows' => 0,
    'v' => 0,
    'Dname' => 0,
    'pagenav' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a9236efaacb38_33458484',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9236efaacb38_33458484')) {function content_5a9236efaacb38_33458484($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.url.php';
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
<body class="body_ifm">
<div class="infoboxp">
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">该页面展示了网站所有的招聘会信息，可对招聘会进行编辑，删除操作。</div>
<div class="admin_new_tip_list">可输入名称关键字进行搜索，也可进行详细的高级搜索。</div>
</div>
</div>

<div class="clear"></div>

<div class="admin_new_search_box"> 
  <form action="index.php" name="myform" method="get">
        <input name="m" value="zhaopinhui" type="hidden"/>
		<input type="hidden" name="status" value="<?php echo $_GET['status'];?>
"/>
	<div class="admin_new_search_name">搜索类型：</div>
    <div class="admin_Filter_text formselect"  did='dtype'>
		  <input type="button" value="<?php if ($_GET['type']=='1'||$_GET['type']=='') {?>招聘会标题<?php } else { ?>举办会场<?php }?>" class="admin_Filter_but"  id="btype">
		  <input type="hidden" id='type' value="<?php if ($_GET['type']) {
echo $_GET['type'];
} else { ?>1<?php }?>" name='type'>
		  <div class="admin_Filter_text_box" style="display:none" id='dtype'>
			  <ul>
			  <li><a href="javascript:void(0)" onClick="formselect('1','type','招聘会标题')">招聘会标题</a></li>
			  <li><a href="javascript:void(0)" onClick="formselect('2','type','举办会场')">举办会场</a></li> 
			  </ul>  
		  </div>
		</div> 
        <input class="admin_Filter_search" type="text" name="keyword" maxlength="25">
        <input class="admin_Filter_bth" type="submit" name="news_search" value="搜索"/> 
	<a  href="javascript:void(0)" onclick="$('.admin_screenlist_box').toggle();"   class="admin_new_search_gj">高级搜索</a>
     <a href="index.php?m=zhaopinhui&c=add"  class="admin_new_cz_tj">+ 添加招聘会</a>
     </form>
    <?php echo $_smarty_tpl->getSubTemplate ("admin/admin_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </div>
<div class="clear"></div> 

   
  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php?m=zhaopinhui&c=del" name="myform" method="post" target="supportiframe" id='myform'>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall">
                <input type="checkbox" id='chkAll' onclick='CheckAll(this.form)' />
                </label></th>
              <th>编号</th>
              <th align="left">招聘会标题</th>
              <th align="center">开始时间</th>
              <th align="center">结束时间</th>
              <th>参会企业</th>
              <th>分站</th>
               <th>招聘会图片</th>
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
          <tr align="center" id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
            <td style="width:20px;"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="check_all" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td class="ud"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
            <td class="ud" align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
 <div class="admin_hc mt10">会场：<?php echo $_smarty_tpl->tpl_vars['v']->value['address'];?>
</div></td>
            <td class="od" align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['starttime'];?>
</td>
            <td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['endtime'];?>
</td>
            <td>
            <div class="admin_zph_ch_p">
            <?php echo $_smarty_tpl->tpl_vars['v']->value['comnum'];?>
 
            <?php if ($_smarty_tpl->tpl_vars['v']->value['booking']!=0) {?><a href="index.php?m=zhaopinhui&c=com&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&status=3" class="admin_zph_ch_p_n" title="待审核企业"><?php echo $_smarty_tpl->tpl_vars['v']->value['booking'];?>
</a>
            <?php }?>
            </div>
             <div class="mt5"><a href='index.php?m=zhaopinhui&c=com&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
' class="admin_company_xg_icon">查看</a></div></td>
			<td>
			<div><?php echo $_smarty_tpl->tpl_vars['Dname']->value[$_smarty_tpl->tpl_vars['v']->value['did']];?>
</div>
			<div><a href="javascript:;" onclick="checksite('<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','index.php?m=zhaopinhui&c=checksitedid');" class="admin_company_xg_icon">重新分配</a></div>
			</td>
              <td>	<a href="index.php?m=zhaopinhui&c=upload&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="admin_cz_img"> 添加图片</a></td>
            <td>
            <a href="<?php echo smarty_function_url(array('m'=>'zph','c'=>'show','id'=>$_smarty_tpl->tpl_vars['v']->value['id']),$_smarty_tpl);?>
" target="_blank" class="admin_new_c_bth admin_new_c_bth_yl">预览</a> 
            
		
            <a href="index.php?m=zhaopinhui&c=add&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"class="admin_new_c_bth ">修改</a> 
             <a href="javascript:void(0)" onClick="layer_del('确定要删除？','index.php?m=zhaopinhui&c=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');"class="admin_new_c_bth admin_new_c_bth_sc">删除</a></td>
          </tr>
          <?php } ?>
          <tr style="background: #f1f1f1;">
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="2" >
            <label for="chkAll2">全选</label>&nbsp;
            <input class="admin_button"  type="button" name="delsub" value="删除所选"  onclick="return really('del[]')"/>
			<input class="admin_button" type="button" name="delsub" value="批量选择分站" onClick="checksiteall('index.php?m=zhaopinhui&c=checksitedid');" />
			</td>
            <td colspan="6" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
          </tr>
          </tbody>
          
        </table>
		<input type="hidden" name="pytoken"  id="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
      </form>
    </div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['adminstyle']->value)."/checkdomain.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 type="text/javascript">
  layui.use(['layer', 'form'], function(){
    var layer = layui.layer
    ,form = layui.form
    ,$ = layui.$;
  });

<?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
