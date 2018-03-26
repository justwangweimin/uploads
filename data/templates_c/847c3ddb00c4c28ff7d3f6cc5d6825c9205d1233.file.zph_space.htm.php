<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-25 12:09:34
         compiled from "D:\xampp\htdocs\uploads\app\template\admin\zph_space.htm" */ ?>
<?php /*%%SmartyHeaderCode:6065610095a9236fec05339-91710930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '847c3ddb00c4c28ff7d3f6cc5d6825c9205d1233' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\admin\\zph_space.htm',
      1 => 1517041899,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6065610095a9236fec05339-91710930',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'id' => 0,
    'position' => 0,
    'key' => 0,
    'v' => 0,
    'onejob' => 0,
    'two' => 0,
    'twojob' => 0,
    'two_class_id' => 0,
    'threejob' => 0,
    'three' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a9236fed86977_20983991',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9236fed86977_20983991')) {function content_5a9236fed86977_20983991($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
>  
function checkprice(id){
	$("#price"+id).hide();
	$("#inputprice"+id).show();
	$("#inputprice"+id).focus();
}	
function subprice(id){
	var price=$("#inputprice"+id).val();
	if($.trim(price)==""){
		parent.layer.msg("请输入展位价格！",2,8,function(){location.reload();});return false;
	}
	var pytoken=$("#pytoken").val();
	$.post("index.php?m=zph_space&c=ajax",{id:id,price:price,pytoken:pytoken},function(data){
		$("#price"+id).html(price);
		$("#price"+id).show();
		$("#inputprice"+id).hide();
		if(data!='1'){config_msg(data);}else{location.reload();}
	})
}
function clickname(id){
	if(document.getElementById('msg'+id).style.display=='none'){
		document.getElementById('msg'+id).style.display='block';
		$("#msg"+id).attr("class","open");
		}else{
		document.getElementById('msg'+id).style.display='none';
		$("#msg"+id).attr("msg","close");
	}
}
function showclassall(id,type){
	if(type==1){
		$("#img"+id).html('<a href="javascript:;" onclick="showclassall(\''+id+'\',\'2\');"><img src="images/iconv/jian.png"></a>');
		$(".class"+id).show();
	}else{
		$("#img"+id).html('<a href="javascript:;" onclick="showclassall(\''+id+'\',\'1\');"><img src="images/iconv/jia.png"></a>');
		$(".class"+id).hide();
	}
}
<?php echo '</script'; ?>
>
<title>后台管理</title>
</head>
<body class="body_ifm">
<span id="temp"></span>

<div class="infoboxp"> 

<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">管理员添加招聘会场后招聘会可以实现“区域、展位”进行自主设置，展位设置积分！设置完成后企业可在线付费报名参加招聘会等操作。</div>
</div>
</div>
<div class="clear"></div>
<div class="admin_new_search_box">
<a href="index.php?m=zph_space&c=classadd" class="admin_new_cz_tj" style="margin-left:0px;">+ 添加区域</a>
</div>
<div class="clear"></div>



<div class="table-list">
  <div class="admin_table_border">
  <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
  <form action="index.php?m=zph_space&c=del" method="post" id='myform' target="supportiframe">   
  <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
<table width="100%">
	<thead>
	<tr class="admin_table_top">
		<th width="50"><label for="chkall"> <input type="checkbox" id='chkAll' onclick='CheckAll(this.form)' /></label></th>
		<th>编号</th>
		<th align="left">名称<span class="clickup">(点击修改)</span></th>
		<?php if ($_GET['c']=='up') {?>
        <th width="100">展位价格</th>
		<?php }?>
        <th width="100">排序</th>
		<th width="220" class="admin_table_th_bg">操作</th>
	</tr>
	</thead>
	<tbody>	
    <?php if (empty($_smarty_tpl->tpl_vars['id']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['position']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
	<tr align="center" <?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg"<?php }?> id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
   		<td width="50"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
		<td class="ud"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
		<td  align="left" >一级分类：
        <span onClick="checkname('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" id="name<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" style="cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</span>
        <input class="input-text hidden" type="text" id="inputname<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"value="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" onBlur="subname('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','index.php?m=zph_space&c=ajax');"/>
		<img class="" style="padding-left:5px;cursor:pointer;" title="" src="images/xg.png" onClick="checkname('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');"/>
		</td>
        <td><span onClick="checksort('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" id="sort<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" style="cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['v']->value['sort'];?>
</span>
        <input class="input-text hidden" type="text" id="input<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" size="10" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['sort'];?>
" onBlur="subsort('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','index.php?m=zph_space&c=ajax');" style="width:80px;"/>
		<img class="" style="padding-left:5px;cursor:pointer;" title="" src="images/xg.png" onClick="checksort('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');"/>
		</td>
		<td class="ud">
			<A href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
" class="admin_new_c_bth admin_new_c_bth_yl" target="_blank">预览</A> 
        	<A href="index.php?m=zph_space&c=classadd&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="admin_new_c_bth">修改</A>
            <A href="index.php?m=zph_space&c=up&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="admin_new_c_bth ">位置</A> 
            <A href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=zph_space&c=del&delid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc ">删除</a>
        </td>
	</tr>
	
    <?php } ?>
    <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
	<tr align="center" id="list<?php echo $_smarty_tpl->tpl_vars['onejob']->value['id'];?>
">
   		<td width="50"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['onejob']->value['id'];?>
" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
		<td class="ud" width="60"><?php echo $_smarty_tpl->tpl_vars['onejob']->value['id'];?>
</td>
		<td class="ud"  align="left" colspan="2">一级分类：<span onClick="checkname('<?php echo $_smarty_tpl->tpl_vars['onejob']->value['id'];?>
');" id="name<?php echo $_smarty_tpl->tpl_vars['onejob']->value['id'];?>
" style="cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['onejob']->value['name'];?>
</span><input class="input-text hidden" type="text" id="inputname<?php echo $_smarty_tpl->tpl_vars['onejob']->value['id'];?>
"value="<?php echo $_smarty_tpl->tpl_vars['onejob']->value['name'];?>
" onBlur="subname('<?php echo $_smarty_tpl->tpl_vars['onejob']->value['id'];?>
','index.php?m=zph_space&c=ajax');">
        <b id="img<?php echo $_smarty_tpl->tpl_vars['two']->value['id'];?>
"><a href="javascript:;" onclick="showclassall('<?php echo $_smarty_tpl->tpl_vars['two']->value['id'];?>
','1');"><img src="images/iconv/jia.png"></a></b>
        </td>
        <td><span onClick="checksort('<?php echo $_smarty_tpl->tpl_vars['onejob']->value['id'];?>
');" id="sort<?php echo $_smarty_tpl->tpl_vars['onejob']->value['id'];?>
" style="cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['onejob']->value['sort'];?>
</span><input class="input-text hidden" type="text" id="input<?php echo $_smarty_tpl->tpl_vars['onejob']->value['id'];?>
" size="10" value="<?php echo $_smarty_tpl->tpl_vars['onejob']->value['sort'];?>
" onBlur="subsort('<?php echo $_smarty_tpl->tpl_vars['onejob']->value['id'];?>
','index.php?m=zph_space&c=ajax');"></td>
		<td class="ud" width="180"><A href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=zph_space&c=del&delid=<?php echo $_smarty_tpl->tpl_vars['onejob']->value['id'];?>
');" class="admin_cz_sc">删除</a></td>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['two'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['two']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['twojob']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['two']->key => $_smarty_tpl->tpl_vars['two']->value) {
$_smarty_tpl->tpl_vars['two']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars["two_class_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['two']->value['id'], null, 0);?>
	<tr align="center" id="list<?php echo $_smarty_tpl->tpl_vars['two']->value['id'];?>
">
    	<td width="50"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['two']->value['id'];?>
" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
		<td class="ud" ><?php echo $_smarty_tpl->tpl_vars['two']->value['id'];?>
</td>
		<td   align="left" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;
        二级分类：┗<span onClick="checkname('<?php echo $_smarty_tpl->tpl_vars['two']->value['id'];?>
');" id="name<?php echo $_smarty_tpl->tpl_vars['two']->value['id'];?>
" style="cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['two']->value['name'];?>
</span>
        <input class="input-text hidden" type="text" id="inputname<?php echo $_smarty_tpl->tpl_vars['two']->value['id'];?>
"value="<?php echo $_smarty_tpl->tpl_vars['two']->value['name'];?>
" onBlur="subname('<?php echo $_smarty_tpl->tpl_vars['two']->value['id'];?>
','index.php?m=zph_space&c=ajax');">
		<b id="img<?php echo $_smarty_tpl->tpl_vars['two']->value['id'];?>
"><a href="javascript:;" onclick="showclassall('<?php echo $_smarty_tpl->tpl_vars['two']->value['id'];?>
','1');"><img src="images/iconv/jia.png"></a></b>
        </td>
        <td><span onClick="checksort('<?php echo $_smarty_tpl->tpl_vars['two']->value['id'];?>
');" id="sort<?php echo $_smarty_tpl->tpl_vars['two']->value['id'];?>
" style="cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['two']->value['sort'];?>
</span>
        <input class="input-text hidden" type="text" id="input<?php echo $_smarty_tpl->tpl_vars['two']->value['id'];?>
" size="10" value="<?php echo $_smarty_tpl->tpl_vars['two']->value['sort'];?>
" onBlur="subsort('<?php echo $_smarty_tpl->tpl_vars['two']->value['id'];?>
','index.php?m=zph_space&c=ajax');"></td>
		<td class="ud"><A href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=zph_space&c=del&delid=<?php echo $_smarty_tpl->tpl_vars['two']->value['id'];?>
');"class="admin_cz_sc">删除</a></td>
	</tr>
    <?php  $_smarty_tpl->tpl_vars['three'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['three']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['threejob']->value[$_smarty_tpl->tpl_vars['two_class_id']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['three']->key => $_smarty_tpl->tpl_vars['three']->value) {
$_smarty_tpl->tpl_vars['three']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars["three_class_arr"] = new Smarty_variable($_smarty_tpl->tpl_vars['threejob']->value[$_smarty_tpl->tpl_vars['two_class_id']->value], null, 0);?>
	<tr align="center" id="list<?php echo $_smarty_tpl->tpl_vars['three']->value['id'];?>
" class="class<?php echo $_smarty_tpl->tpl_vars['two']->value['id'];?>
" style="display:none;">
    	<td width="50"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['three']->value['id'];?>
" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
		<td class="ud"><?php echo $_smarty_tpl->tpl_vars['three']->value['id'];?>
</td>
		<td class="ud"  align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         ┗<span onClick="checkname('<?php echo $_smarty_tpl->tpl_vars['three']->value['id'];?>
');" id="name<?php echo $_smarty_tpl->tpl_vars['three']->value['id'];?>
" style="cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['three']->value['name'];?>
</span>
        <input class="input-text hidden" type="text" id="inputname<?php echo $_smarty_tpl->tpl_vars['three']->value['id'];?>
"value="<?php echo $_smarty_tpl->tpl_vars['three']->value['name'];?>
" onBlur="subname('<?php echo $_smarty_tpl->tpl_vars['three']->value['id'];?>
','index.php?m=zph_space&c=ajax');"></td>
        <td><span onClick="checkprice('<?php echo $_smarty_tpl->tpl_vars['three']->value['id'];?>
');" id="price<?php echo $_smarty_tpl->tpl_vars['three']->value['id'];?>
" style="cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['three']->value['price'];?>
</span>
        <input class="input-text hidden" type="text" id="inputprice<?php echo $_smarty_tpl->tpl_vars['three']->value['id'];?>
" size="10" value="<?php echo $_smarty_tpl->tpl_vars['three']->value['price'];?>
" onBlur="subprice('<?php echo $_smarty_tpl->tpl_vars['three']->value['id'];?>
');"></td>
        <td><span onClick="checksort('<?php echo $_smarty_tpl->tpl_vars['three']->value['id'];?>
');" id="sort<?php echo $_smarty_tpl->tpl_vars['three']->value['id'];?>
" style="cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['three']->value['sort'];?>
</span>
        <input class="input-text hidden" type="text" id="input<?php echo $_smarty_tpl->tpl_vars['three']->value['id'];?>
" size="10" value="<?php echo $_smarty_tpl->tpl_vars['three']->value['sort'];?>
" onBlur="subsort('<?php echo $_smarty_tpl->tpl_vars['three']->value['id'];?>
','index.php?m=zph_space&c=ajax');"></td>
		<td class="ud"><A href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=zph_space&c=del&delid=<?php echo $_smarty_tpl->tpl_vars['three']->value['id'];?>
');"class="admin_cz_sc">删除</a></td>
	</tr>
	
    <?php } ?>
	<?php } ?>
	<?php }?>
  <tr style="background:#f1f1f1;">
    <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
    <td colspan="5" >
    <label for="chkAll2">全选</label>&nbsp;
    <input class="admin_button"  type="button" name="delsub" value="删除所选"  onclick="return really('del[]')"/></td>
    </tr>
	</tbody>
</table>
</form>
</div>
</div>
</div> 
</body>
</html><?php }} ?>
