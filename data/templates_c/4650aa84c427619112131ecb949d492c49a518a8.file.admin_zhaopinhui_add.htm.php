<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-25 12:09:21
         compiled from "D:\xampp\htdocs\uploads\app\template\admin\admin_zhaopinhui_add.htm" */ ?>
<?php /*%%SmartyHeaderCode:15979342345a9236f153fb04-01774251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4650aa84c427619112131ecb949d492c49a518a8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\admin\\admin_zhaopinhui_add.htm',
      1 => 1517900584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15979342345a9236f153fb04-01774251',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'info' => 0,
    'space' => 0,
    'v' => 0,
    'Dname' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a9236f165e6c3_01532344',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9236f165e6c3_01532344')) {function content_5a9236f165e6c3_01532344($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
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
>var weburl = '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
';<?php echo '</script'; ?>
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
 language="javascript">

function checkform(){
	if($("#title").val()=="") { 
      	parent.layer.msg('请填写招聘会标题！', 2, 8);
      	return (false);
      }		
	var time = $("#time").val();
	if(time==""){
		parent.layer.msg('举办时间不能为空！', 2, 8);
		return false
	}
	$("#zphform").submit();
}
function setStandaside(){
	var zid='<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
';
	var sid=$("#sid").val();
	var pytoken=$("#pytoken").val();
	if(sid==""){
		parent.layer.msg("请先选择场地！",2,8);
	}else{
		$.post("index.php?m=zhaopinhui&c=getzhanwei",{sid:sid,zid:zid,pytoken:pytoken},function(data){
			$("#zhanwei").html(data);
			$.layer({
				type : 1,
				title : '设置预留展位',
				offset: ['100px', ''],
				closeBtn : [0 , true], 
				border : [10 , 0.3 , '#000', true],
				area : ['400px','320px'],
				page : {dom : '#Standaside'}
			});
		})

	}
}
function check_zhanwei(){
	var chk_value =[];    
	$('input[name="zhanwei"]:checked').each(function(){
		chk_value.push($(this).val());   
	}); 
	$("#reserved").val(chk_value);  
	layer.closeAll();
}
function news_preview(url){
	$(".job_box_div").html("<img src='"+url+"' style='max-width:500px' />");//
 	$.layer({
		type : 1,
		title : '查看图片',
		closeBtn : [0 , true],
		offset : ['20%' , '30%'],
		border : [10 , 0.3 , '#000', true],
		area : ['560px','auto'],
		page : {dom : '#news_preview'}
	}); 
}
<?php echo '</script'; ?>
>
 
<style>
* {margin: 0 ;padding: 0;}
body,div{ margin: 0 ;padding: 0;}
</style>
<title>后台管理</title>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/ueditor/ueditor.config.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/ueditor/ueditor.all.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
</head>
<body class="body_ifm">
<div class="infoboxp"> 

<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">管理员根据自己需求，填写该场招聘会常规设置！招聘会名称、日期、举办方、招聘会地址和参与说明等设置。还可以上传招聘会的现场图片等个性化设置。</div>
</div>
</div>
<div class="clear"></div>


 <div class="tag_box mt10"> 
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
<form id="zphform" name="myform" target="supportiframe" action="index.php?m=zhaopinhui&c=save" method="post"  encType="multipart/form-data" class="layui-form">
<table width="100%" class="table_form" style="background:#fff;">
 <tr class="admin_table_trbg">
          <th colspan="4" bgcolor="#f0f6fb"><span class="admin_bold">添加招聘会信息</span></th>
    </tr>
	<tr>
		<th width="120">招聘会标题：</th>
		<td>
		  <div class="layui-form-item">
            <div class="layui-input-block">
            <div class="layui-input-inline">
              <input type="text" name="title" id="title"  lay-verify="required" placeholder="请输入招聘会标题" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
" size="60" autocomplete="off" class="layui-input input-text">
              </div>
            </div>
          </div>
		</td>
	</tr>
	<tr class="vip_type_2 admin_table_trbg" >
		<th width="120">举办场地：</th>
		<td>
		<?php if ($_smarty_tpl->tpl_vars['space']->value) {?>
		
		
		<div class="layui-input-inline" style='float:left'>
	      <select name="sid" id='sid'>
		    <?php if ($_smarty_tpl->tpl_vars['info']->value['sid']) {?>
	 		  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['space']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['v']->value['id']==$_smarty_tpl->tpl_vars['info']->value['sid']) {?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
                    <?php } else { ?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
                    <?php }?>
                <?php } ?>
            <?php } else { ?>
                <option value="">请选择</option>
            <?php }?>
	        
	        <?php if (!$_smarty_tpl->tpl_vars['info']->value['sid']) {?>
		        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['space']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                	<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
                <?php } ?>
            <?php }?>
            
	      </select>
	    </div>
        <a href="javascript:void(0);" onClick="setStandaside()" class="zph_sz_b">设置预留展位</a>
        <a href="index.php?m=zph_space"  class="zph_sz_b_tjcd">添加场地</a>
        
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['reserved'];?>
" id="reserved" name="reserved">
        <?php } else { ?>
        <span class="admin_web_tip">
      当前暂无可选场地
   </span>
    
        <a href="index.php?m=zph_space" class="zph_sz_b_tjcd">添加场地</a>
        <?php }?>
        </td>
	</tr>
   
    <tr>
        <th>使用范围：</th>
        <td><input type="button" value="<?php if ($_smarty_tpl->tpl_vars['info']->value['did']) {
echo $_smarty_tpl->tpl_vars['Dname']->value[$_smarty_tpl->tpl_vars['info']->value['did']];
} else { ?>总站<?php }?>" class="city_news_but" onClick="add_site('<?php echo $_smarty_tpl->tpl_vars['info']->value['did'];?>
','<?php echo $_smarty_tpl->tpl_vars['Dname']->value[$_smarty_tpl->tpl_vars['info']->value['did']];?>
');">
        <input id="did" type="hidden" name="did" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['did'];?>
" />
        </td>
      </tr> 
	<tr  class="admin_table_trbg">
		<th width="120">举办时间：</th>
		<td>
		
        <div class="layui-inline">
	      <div class="layui-input-inline">
	        <input type="text" class="layui-input input-text" id="time" name="time" value="<?php if ($_smarty_tpl->tpl_vars['info']->value['starttime']||$_smarty_tpl->tpl_vars['info']->value['endtime']) {
echo $_smarty_tpl->tpl_vars['info']->value['starttime'];?>
 ~ <?php echo $_smarty_tpl->tpl_vars['info']->value['endtime'];
}?>" placeholder="yyyy-MM-dd HH:mm:ss ~ yyyy-MM-dd HH:mm:ss" lay-key="6" size="60">
	      </div>
	    </div>
        
        </td>
	</tr>
    <tr>
		<th width="120">举办会场：</th>
		<td>
		  <div class="layui-form-item">
	        <div class="layui-input-block">
            <div class="layui-input-inline">
	          <input type="text" name="address" id="address"  lay-verify="required" placeholder="请输入举办会场" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['address'];?>
" size="60"  autocomplete="off" class="layui-input input-text">
              </div>
	        </div>
	      </div>
		</td>
	</tr>
 	<tr  class="admin_table_trbg">
		<th width="120">交通路线：</th>
		<td>
		
		<div class="layui-form-item">
		  <div class="layui-input-block">
          <div class="layui-input-inline">
			<textarea name="traffic" cols="59" rows="3" placeholder="请输入交通路线"   lay-verify="required" class="layui-input input-text"autocomplete="off"><?php echo $_smarty_tpl->tpl_vars['info']->value['traffic'];?>
</textarea>
            </div>
		  </div>
		</div>
		
		</td>
	</tr>
    <tr>
		<th width="120">联系电话：</th>
		<td>
			
			<div class="layui-form-item">
		        <div class="layui-input-block">
                <div class="layui-input-inline">
		          <input type="text" name="phone" id="phone"  lay-verify="required" placeholder="请输入联系电话" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['phone'];?>
" size="60" autocomplete="off" class="layui-input input-text" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')">
                  </div>
		        </div>
	     	 </div>
			
			</td>
	</tr>
   	<tr  class="admin_table_trbg">
		<th width="120">主办方：</th>
		<td>
		
		  <div class="layui-form-item">
	        <div class="layui-input-block">
            <div class="layui-input-inline">
	          <input type="text" name="organizers" id="organizers"  lay-verify="required" placeholder="请输入主办方" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['organizers'];?>
" size="60" autocomplete="off" class="layui-input input-text">
              </div>
	        </div>
	      </div>
		
		</td>
	</tr>
    <tr>
		<th width="120">联系人：</th>
		<td>
		
		
		<div class="layui-form-item">
	        <div class="layui-input-block">
            <div class="layui-input-inline">
	          <input type="text" name="user" id="user"  lay-verify="required" placeholder="请输入联系人" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['user'];?>
" size="60" autocomplete="off" class="layui-input input-text">
              </div>
	        </div>
	      </div>
		
		</td>
	</tr>
   
	<tr>	
		<th width="120">缩略图：</th>
			<td>
				<button type="button" class="yun_bth_pic adminupload" lay-data="{name: 'is_themb',imgid: 'imgicon'}">上传图片</button>
				<input type="hidden" id="layupload_type" value="2"/>
				<input type="hidden" id="upload_path" value="zhaopinhui"/>
				<input type="hidden" name="is_themb" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['is_themb'];?>
"/>
				<img id="imgicon" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['is_themb'];?>
" style="width:200px;height:150px;" <?php if (!$_smarty_tpl->tpl_vars['info']->value['is_themb']) {?>class="none"<?php }?>>
			  </td>
			</tr>
    <tr>
		<th width="120">招聘会介绍：</th>
		<td>
 		<?php echo '<script'; ?>
 id="content" name="body" type="text/plain" style="width:820px;height:300px;"><?php echo $_smarty_tpl->tpl_vars['info']->value['body'];?>
<?php echo '</script'; ?>
>
		</td>
	</tr>
	<tr  class="admin_table_trbg">
		<th width="120">媒体宣传：</th>
		<td>
		<?php echo '<script'; ?>
 id="media" name="media" type="text/plain" style="width:820px;height:300px;"><?php echo $_smarty_tpl->tpl_vars['info']->value['media'];?>
<?php echo '</script'; ?>
>
		</td>
	</tr>
    <tr>
		<th width="120">服务套餐：</th>
		<td>
 		<?php echo '<script'; ?>
 id="packages" name="packages" type="text/plain" style="width:820px;height:300px;"><?php echo $_smarty_tpl->tpl_vars['info']->value['packages'];?>
<?php echo '</script'; ?>
>
		</td>
	</tr>
 	<tr  class="admin_table_trbg">
		<th width="120">展位设置方案：</th>
		<td>
 		<?php echo '<script'; ?>
 id="booth" name="booth" type="text/plain" style="width:820px;height:300px;"><?php echo $_smarty_tpl->tpl_vars['info']->value['booth'];?>
<?php echo '</script'; ?>
>
		</td>
	</tr>
    <tr>
		<th width="120">参与办法：</th>
		<td>
 		<?php echo '<script'; ?>
 id="participate" name="participate" type="text/plain" style="width:820px;height:300px;"><?php echo $_smarty_tpl->tpl_vars['info']->value['participate'];?>
<?php echo '</script'; ?>
>
		</td>
	</tr>

		<tr  class="admin_table_trbg">
		<td align="center" colspan="2">
        <?php if (is_array($_smarty_tpl->tpl_vars['info']->value)) {?>
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" />
        <input class="layui-btn layui-btn-normal" type="button" onclick="checkform()" value="&nbsp;修 改&nbsp;" />
        <?php } else { ?>
        <input class="layui-btn layui-btn-normal" type="button" onclick="checkform()" value="&nbsp;添 加&nbsp;" />
        <?php }?>
		<input class="layui-btn layui-btn-normal" type="reset" name="reset" value="&nbsp;重 置 &nbsp;" /></td>
	</tr>
</table>
<input type="hidden" name="pytoken"  id="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
</form>
</div></div>
<div id="news_preview"  style="display:none;width:560px ">
	<div style="height:300px; overflow:auto;width:560px;" >
		<div class="job_box_div" style="text-align:center;margin-top:10px;"></div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['adminstyle']->value)."/checkdomain.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="Standaside" style="display:none;">
	<div style=" margin-top:10px;">
    <div id="zhanwei"></div>
  </div>
</div>
<style>
.layui-form-item {
    margin-bottom: 0px;
    clear: both;
}
.layui-form-label {
    width: 60px;
    padding: 9px 1px;
}
</style>

<?php echo '<script'; ?>
 language="javascript">
	layui.use(['layer', 'form','element','laydate'], function(){
		var layer = layui.layer
		,form = layui.form
		,element = layui.element
		,$ = layui.$;
		var laydate = layui.laydate;
		  //时间选择器
		  laydate.render({
			elem: '#time'
			,type: 'datetime'
			,range:'~'
		});
	});
UE.getEditor('content',{
 	toolbars:[['FullScreen', 'Source','|', 'Undo', 'Redo','Bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'fontfamily', 'fontsize',  'forecolor', 'backcolor', 'removeformat', 'autotypeset', 'pasteplain', '|','insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|','simpleupload', '|','link', 'unlink', 'indent', '|','justifyleft', 'justifycenter', 'justifyright', 'justifyjustify']],
	wordCount:false,
	elementPathEnabled:false,
	initialFrameHeight:300
});
UE.getEditor('booth',{
 	toolbars:[['FullScreen', 'Source','|', 'Undo', 'Redo','Bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'fontfamily', 'fontsize',  'forecolor', 'backcolor', 'removeformat', 'autotypeset', 'pasteplain', '|','insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|','simpleupload', '|','link', 'unlink', 'indent', '|','justifyleft', 'justifycenter', 'justifyright', 'justifyjustify']],
	wordCount:false,
	elementPathEnabled:false,
	initialFrameHeight:300
});
UE.getEditor('media',{
 	toolbars:[['FullScreen', 'Source','|', 'Undo', 'Redo','Bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'fontfamily', 'fontsize',  'forecolor', 'backcolor', 'removeformat', 'autotypeset', 'pasteplain', '|','insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|','simpleupload', '|','link', 'unlink', 'indent', '|','justifyleft', 'justifycenter', 'justifyright', 'justifyjustify']],
	wordCount:false,
	elementPathEnabled:false,
	initialFrameHeight:300
});
UE.getEditor('packages',{
 	toolbars:[['FullScreen', 'Source','|', 'Undo', 'Redo','Bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'fontfamily', 'fontsize',  'forecolor', 'backcolor', 'removeformat', 'autotypeset', 'pasteplain', '|','insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|','simpleupload', '|','link', 'unlink', 'indent', '|','justifyleft', 'justifycenter', 'justifyright', 'justifyjustify']],
	wordCount:false,
	elementPathEnabled:false,
	initialFrameHeight:300
});
UE.getEditor('participate',{
 	toolbars:[['FullScreen', 'Source','|', 'Undo', 'Redo','Bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'fontfamily', 'fontsize',  'forecolor', 'backcolor', 'removeformat', 'autotypeset', 'pasteplain', '|','insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|','simpleupload', '|','link', 'unlink', 'indent', '|','justifyleft', 'justifycenter', 'justifyright', 'justifyjustify']],
	wordCount:false,
	elementPathEnabled:false,
	initialFrameHeight:300
});
 
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui.upload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type='text/javascript'><?php echo '</script'; ?>
> 
</body>
</html><?php }} ?>
