<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 16:37:14
         compiled from "D:\xampp\htdocs\uploads\app\template\admin\admin_consultant_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:5164692615ab0c83a37a7c2-23606831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b403ce84b6596991610163db8234a3728e6f31c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\admin\\admin_consultant_list.htm',
      1 => 1517736328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5164692615ab0c83a37a7c2-23606831',
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
  'unifunc' => 'content_5ab0c83a64f2e8_27143883',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0c83a64f2e8_27143883')) {function content_5ab0c83a64f2e8_27143883($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
 type="text/javascript" src="js/show_pub.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
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
>
$(document).ready(function() {
	$(".preview").hover(function(){  
		var pic_url=$(this).attr('url');
		layer.tips("<img src="+pic_url+" style='max-width:80px'>", this, {
			guide:2,
			style: ['background-color:#5EA7DC; color:#fff;top:-7px;left:-20px', '#5EA7DC']
		});
		$(".xubox_layer").addClass("xubox_tips_border");
	},function(){layer.closeAll('tips');});  
});
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
      <div class="admin_new_tip_list">该页面展示了网站所有的招聘顾问信息，可对招聘顾问进行编辑修改操作。</div>
      <div class="admin_new_tip_list">可输入关键字进行搜索，也可进行详细的高级搜索。</div>
    </div>
  </div>
  <div class="clear"></div>
  <div class="admin_new_search_box">
    <form action="index.php" name="myform" method="get" >
    <input type="hidden" name="m" value="admin_company_consultant"/>
<input type="hidden" name="c" value="index"/>
<input type="hidden" name="status" value="<?php echo $_GET['status'];?>
"/>
<input type="hidden" name="rec" value="<?php echo $_GET['rec'];?>
"/>
<input type="hidden" name="time" value="<?php echo $_GET['time'];?>
"/>
<input type="hidden" name="rating" value="<?php echo $_GET['rating'];?>
"/>
      <div class="admin_new_search_name">搜索类型：</div>
      <div class="admin_Filter_text formselect" did="dtype"> 
  <input type="button" <?php if ($_GET['type']=='1'||$_GET['type']=='') {?> value="顾问姓名" <?php } elseif ($_GET['type']=='2') {?> value="顾问手机" <?php } elseif ($_GET['type']=='3') {?> value="顾问QQ" <?php } elseif ($_GET['type']=='4') {?> value="顾问微信" <?php }?> class="admin_Filter_but" id="btype">
  		   <input type="hidden" name="com_type" id="type" value="<?php if ($_GET['type']) {
echo $_GET['type'];
} else { ?>1<?php }?>"/><div class="admin_Filter_text_box" style="display:none" id="dtype">
			  <ul>
				  <li><a href="javascript:void(0)" onClick="formselect('1','type','顾问姓名')">顾问姓名</a></li>
				  <li><a href="javascript:void(0)" onClick="formselect('2','type','顾问手机')">顾问手机</a></li>
				   <li><a href="javascript:void(0)" onClick="formselect('3','type','顾问QQ')">顾问QQ</a></li>
				   <li><a href="javascript:void(0)" onClick="formselect('4','type','顾问微信')">顾问微信</a></li>
			  </ul>  
		  </div>
    </div>	
    <input type="text" placeholder="输入你要搜索的关键字" name="keyword" class="admin_Filter_search">
	<input type="submit" value="搜索" class="admin_Filter_bth"/>
      <a  href="javascript:void(0)" onclick="$('.admin_screenlist_box').toggle();"   class="admin_new_search_gj">高级搜索</a>
       <a href="index.php?m=admin_company_consultant&c=show"  class="admin_new_cz_tj">+ 添加顾问</a> 
    </form>
    <?php echo $_smarty_tpl->getSubTemplate ("admin/admin_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 </div>
  <div class="clear"></div>
  

  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
    	<form action="index.php" name="myform" method="get" id='myform' target="supportiframe">
        <input name="m" value="admin_company_consultant" type="hidden"/>
        <input name="c" value="del" name="c" type="hidden"/>
        <input type="hidden" name="pytoken" id="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th width="20"><label for="chkall">
                <input type="checkbox" id='chkAll' onclick='CheckAll(this.form)'/>
                </label></th>
              <th width="80"> <?php if ($_GET['t']=="id"&&$_GET['order']=="asc") {?> <a href="index.php?m=admin_company_consultant&order=desc&t=id">顾问编号<img src="images/sanj.jpg"/></a> <?php } else { ?> <a href="index.php?m=admin_company_consultant&order=asc&t=id">顾问编号<img src="images/sanj2.jpg"/></a> <?php }?> </th>
              <th align="left">顾问姓名</th>
              <th align="left">顾问QQ</th>
              <th align="left">顾问微信</th>
              <th>顾问手机</th>
              <!--<th>QQ</th>-->
              <th> <?php if ($_GET['t']=="adtime"&&$_GET['order']=="asc") {?> <a href="index.php?m=admin_company_consultant&order=desc&t=adtime">发布时间<img src="images/sanj.jpg"/></a> <?php } else { ?> <a href="index.php?m=admin_company_consultant&order=asc&t=adtime">添加时间<img src="images/sanj2.jpg"/></a> <?php }?> </th>
              <th>顾问头像</th>
			   <th align="left">公司数量</th>
			   <th align="left">值班时间</th>
			   <th align="center">业务员绑定</th>
              <th class="admin_table_th_bg">操作</th>
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
          <tr align="center" <?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg"<?php }?> id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
            <td><input type="checkbox" class="check_all" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" name='del[]' onclick='unselectall()' rel="del_chk"/></td>
            <td align="center" class="td1" width="80"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</span></td>
            <td class="ud" align="left"><a href="index.php?m=admin_company_consultant&c=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="admin_cz_sc"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</a></td>
            <td class="od" align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['qq'];?>
</td>
            <td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['weixin'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['mobile'];?>
</td>
            <td><?php echo date("Y-m-d",$_smarty_tpl->tpl_vars['v']->value['adtime']);?>
</td>
			<td><div class="admin_table_w84"><?php if ($_smarty_tpl->tpl_vars['v']->value['logo']) {?><a href="javascript:void(0)" class="preview admin_n_img" url="<?php echo $_smarty_tpl->tpl_vars['v']->value['logo'];?>
"></a><?php } else { ?>无<?php }?></div></td>
			<td align="left">  
			<?php if ($_smarty_tpl->tpl_vars['v']->value['num']) {?>
			 <?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
&nbsp;<a href="index.php?m=admin_company_consultant&c=comlist&conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="admin_cz_sc">查看</a>
			<?php } else { ?>
			 未分配
			<?php }?>
			</td>
			<td align="left">
				<?php if ($_smarty_tpl->tpl_vars['v']->value['zbstatus']) {
echo $_smarty_tpl->tpl_vars['v']->value['zbstatus'];
} else { ?>未安排<?php }?>
			</td>
			<td align="center">
				<?php if ($_smarty_tpl->tpl_vars['v']->value['crm_uid']!=0) {?>
					<div><?php echo $_smarty_tpl->tpl_vars['v']->value['crmusername'];?>
</div>
					<div>
						<a href="javascript:;" onclick="checkcrm('<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','index.php?m=admin_company_consultant&c=checkcrmid');" class="admin_company_xg_icon">重新绑定</a>
					</div>
				<?php } else { ?>
					<a href="javascript:;" onclick="checkcrm('<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','index.php?m=admin_company_consultant&c=checkcrmid');" class="admin_company_xg_icon">绑定</a>
				<?php }?>
 			</td>
			<td> 
				<a href="index.php?m=admin_company_consultant&c=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="admin_new_c_bth">修改</a>
                
            	<a href="javascript:void(0)"  onclick="layer_del('确定要删除？', 'index.php?m=admin_company_consultant&c=del&del=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a>
          </tr>
           <?php } ?>
          <tr style="background:#f1f1f1;">
            <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
            <td colspan="6" ><label for="chkAll2">全选</label>
            	&nbsp;
              	<input class="admin_button" type="button" name="delsub" value="删除所选" onClick="return really('del[]')" />
            </td>
            <td colspan="5" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
          </tr>
          </tbody>   
        </table>
		</form>
    </div>
  </div>
  </div>

<?php echo '<script'; ?>
>
	layui.use(['layer', 'form'], function(){
		var layer = layui.layer,
			form = layui.form,
			$ = layui.$;
	});
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['adminstyle']->value)."/checkdomain.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
