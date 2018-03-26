<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 16:37:09
         compiled from "D:\xampp\htdocs\uploads\app\template\admin\admin_company_pic.htm" */ ?>
<?php /*%%SmartyHeaderCode:12389342625ab0c83505d869-19114554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40a4d0c0e4f1c394d3ec6d4e3bcb57f5a211b791' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\admin\\admin_company_pic.htm',
      1 => 1517899885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12389342625ab0c83505d869-19114554',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'rows' => 0,
    'list' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0c8351a8fc7_18409638',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0c8351a8fc7_18409638')) {function content_5ab0c8351a8fc7_18409638($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
<div class="tabs_info">
	<ul>
		<li class="curr"><a href="index.php?m=admin_company_pic">企业LOGO</a></li> 
		<li><a href="index.php?m=admin_company_pic&c=show">企业环境</a></li> 
		<li><a href="index.php?m=admin_company_pic&c=banner">企业横幅</a></li>  
	</ul>
</div>
    
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">该页面展示了网站全部企业logo管理</div>
<div class="admin_new_tip_list">您可以对企业上传的logo进行修改删除操作</div>
</div>
</div>
<div class="clear"></div>
<div class="main_tag mt10">
<div class="admin_new_search_box">
<div class="admin_new_search_name">搜索类型：</div>
 <form action="index.php" name="myform" method="get" >
 <input type="hidden" name="m" value="admin_company_pic"/>
  <div class="admin_Filter_text formselect" did="dcom_type"> 
  <input type="button" <?php if ($_GET['type']=='1'||$_GET['type']=='') {?> value="企业全称" <?php } elseif ($_GET['type']=='2') {?> value="用户ID" <?php }?> class="admin_new_select_text" id="bcom_type">
  		   <input type="hidden" name="type" id="com_type" value="<?php if ($_GET['type']) {
echo $_GET['type'];
} else { ?>1<?php }?>"/><div class="admin_Filter_text_box" style="display:none" id="dcom_type">
			  <ul>
				  <li><a href="javascript:void(0)" onClick="formselect('1','com_type','企业名称')">企业名称</a></li>
				  <li><a href="javascript:void(0)" onClick="formselect('2','com_type','用户ID')">用户ID</a></li>
			  </ul>  
		  </div>
    </div>
<input type="text" placeholder="输入你要搜索的关键字" name="keyword" class="admin_new_text">
	<input type="submit" name='news_search' value="搜索" class="admin_new_bth"/>
</form>
 
 </div>
<div class="tag_box" style="border:none; background:none;">
	<div class="clear"></div>
	<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
	  <form action="index.php" target="supportiframe" name="myform" id='myform' method="get">
     <input type="hidden" name="pytoken"  id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
        <input name="m" value="admin_company_pic" type="hidden"/>
        <input name="c" value="del" type="hidden"/>
        <input name="type" value="logo" type="hidden"/>
		<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
			<div class="admin_com_img">
				<div class="admin_com_img_box">
					<div class="admin_com_img_box_img">
					<img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['logo'];?>
" id="pix<?php echo $_smarty_tpl->tpl_vars['list']->value['uid'];?>
" width="140" height="140"  onclick="show_pic('<?php echo $_smarty_tpl->tpl_vars['list']->value['logo'];?>
','<?php echo $_smarty_tpl->tpl_vars['list']->value['uid'];?>
')">	
					
					<input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['uid'];?>
"   name='del[]' onclick='unselectall()' rel="del_chk" class="admin_com_img_checkbox check_all">
					
					<div class="admin_zph_img_box_img_p"><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</div></div>
			
					<div class="admin_com_img_box_p">
						<a href="javascript:addImg('<?php echo $_smarty_tpl->tpl_vars['list']->value['uid'];?>
','<?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
')" class="admin_new_c_bth">修改</a>
						<a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=admin_company_pic&c=del&type=logo&delid=<?php echo $_smarty_tpl->tpl_vars['list']->value['uid'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a>
					</div>
				</div>
			</div>
		<?php } ?>
		<div class="clear"></div>
	<div  class="admin_com_img_box_digg">
	<span class="admin_com_img_box_qx">
	<?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
	<input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)'><label for="chkAll2">全选</label>
	<input type="button" name="delsub" value="删除所选" onClick="return really('del[]')"  value="批量删除" class="admin_button">
	<?php }?>
	 </span>
	 
	 <div  class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
	 </div>
	 </form>
</div>
<div class="clear"></div>
	  
	
	<div class="subnav" id="addImage" style="display:none">
		<div class="">
			<form name="myform" target="supportiframe" action="index.php?m=admin_company_pic&c=uploadsave" method="post" encType="multipart/form-data" onsubmit="return ckform()">
				
				<input class="input-text" name="type" type="hidden" value="logo" />
				<input type="hidden" name="pytoken" id="pytoken"  value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
				
 				<div class="zph_tjlist"><em class="zph_tjlist_s">企业全称：</em>
				<input class="input-text"  id="comname" type="text" value="" disabled /> 
                    </div>
				<div class="zph_tjlist"><em class="zph_tjlist_s">上传图片：</em>
					<button type="button" class="yun_bth_pic" id="noupload">选择图片</button>
					<input type="hidden" id="laynoupload" value="1"/>
				</div>
 				<div class="zph_tjlist">
				<input class="admin_button" type="hidden" name="id" value=""/>
				
				<input class="admin_button" type="submit" name="update" value="修改">
				</div>	
			</form>
		</div>
	</div>
	<div id="preview"  style="display:none; width:400px; "> 
		<div style="height:300px; overflow:auto; width:auto; " > 
			<div class="job_box_div" style="text-align:center;margin-top:10px;"></div>
		</div>	
	</div>  

</div>

<?php echo '<script'; ?>
>
var weburl = '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
';
function show_pic(url,id){
	if($("#pic_"+id).width()&&$("#pic_"+id).width()>380){
		var width=$("#pic_"+id).width();
		$(".job_box_div").html("<img id='pic_show' src='"+url+"' style='width:380px;height:auto; ' />");
	}else{
		$(".job_box_div").html("<img id='pic_show' src='"+url+"' style='max-width:380px;height:auto; ' />");
	}
	 
	var i = $.layer({
		type : 1,
		offset: ['100px', ''],
		title : '查看图片',
		closeBtn : [0 , true], 
		fix : false, 
		area : ['400px','auto'],
		page : {dom : '#preview'}
	});
}

function ckform(){
	if($("input[name=id]").val() != ''){
		var pic = $("input[name=file]").val();
		if(!pic){
			layer.msg('请上传图片！',2,8);return false;
		}
	}
}

function addImg(id,name){
	$("#comname").val(name);
	$("input[name=id]").val(id);
	
	$.layer({
		type : 1,
		title :'修改logo',
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['400px','250px'],
		page : {dom :"#addImage"}
	});
}
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui.upload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type='text/javascript'><?php echo '</script'; ?>
>
</div>
</body>
</html><?php }} ?>
