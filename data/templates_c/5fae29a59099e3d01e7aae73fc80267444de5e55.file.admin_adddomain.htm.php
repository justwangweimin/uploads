<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-07 11:32:35
         compiled from "D:\xampp\htdocs\uploads\app\template\admin\admin_adddomain.htm" */ ?>
<?php /*%%SmartyHeaderCode:14983774635a9f5d539dce35-39803875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fae29a59099e3d01e7aae73fc80267444de5e55' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\admin\\admin_adddomain.htm',
      1 => 1519522783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14983774635a9f5d539dce35-39803875',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'site' => 0,
    'city_index' => 0,
    'v' => 0,
    'city_name' => 0,
    'city_type' => 0,
    'industry_index' => 0,
    'industry_name' => 0,
    'list' => 0,
    'row' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a9f5d53d92953_71100632',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9f5d53d92953_71100632')) {function content_5a9f5d53d92953_71100632($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
 language="javascript">
var weburl="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";
function checkform(myform){
	if ($("#title").val()==""){
		parent.layer.msg('请填写域名备注！', 2, 8);
     	return (false);
  	}
	if($("#domain").val()==""){
		parent.layer.msg('请填写需绑定的域名！', 2, 8);
		return (false);
	}
    if ($("#province").val()=="" && $("#hy").val()==""){
	  parent.layer.msg('城市和行业最少选择一项！', 2, 8);
      return (false);
  	}
	$("#domainform").submit();
}
<?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet">
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp"> 
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">同一域名不得绑定多个城市，多个域名可以绑定同一城市，但是前台选择城市域名跳转会以最后添加域名为基准，外部访问则不作限制！</div>
<div class="admin_new_tip_list">域名绑定不支持2级目录</div>
<div class="admin_new_tip_list"><a href='http://localhost/uploads/bbs/thread-4218-1-1.html' target="_blank">点击查看教程</a></div>
</div>
</div>
<div class="clear"></div>


<div class="tag_box mt10">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
<form id="domainform" target="supportiframe" name="myform" action="index.php?m=admin_domain&c=save" method="post" encType="multipart/form-data" class="layui-form">
	<table width="100%" class="table_form">
   <tbody>
  <tr class="admin_table_trbg">
    <th width="160" bgcolor="#f0f6fb"><span class="admin_bold">参数说明</span></th>
    <td bgcolor="#f0f6fb"><span class="admin_bold">参数值</span></td>   
  </tr>
 </tbody>
    	<tr >
			<th>域名备注：</th>
			<td><input class="input-text" type="text" id="title" name="title" size="40" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['title'];?>
"/><span class="admin_web_tip">如：北京站</span></td>
		</tr>
		<tr class="admin_table_trbg" >
			<th>绑定域名：</th>
			<td><input class="input-text" type="text" id="domain" name="domain" size="40" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['domain'];?>
"/><span class="admin_web_tip">如：bbs.sohu.com(不带http://)</span></td>
		</tr>
		<tr>
			<th>分站类型：</th>
			<td>
        <div class="layui-form-item">
          <div class="layui-input-inline">
            <select name="fz_type" lay-filter="fz_type">
              <option value="">请选择</option>
              <option value="1" <?php if ($_smarty_tpl->tpl_vars['site']->value['fz_type']==1) {?> selected<?php }?>>地区分站</option>
              <option value="2" <?php if ($_smarty_tpl->tpl_vars['site']->value['fz_type']==2) {?> selected<?php }?>>行业分站</option>
            </select>
          </div>
        </div>
      </td>
		</tr>
		<tr id='fz_type_1' <?php if ('2'==$_smarty_tpl->tpl_vars['site']->value['fz_type']) {?>style="display:none;"<?php }?>  class="admin_table_trbg">
			<th>地区分站：</th>
			<td>
        <div class="layui-form-item">
          <div class="layui-input-inline">
            <select id="province" name="provinceid" lay-filter="citys">
              <option value="">请选择</option>
              <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['site']->value['province']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>
                ><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>

              </option>
              <?php } ?>
            </select>
          </div>
          <div class="layui-input-inline">
            <select name="cityid" lay-filter="citys" id="cityid">
              <option value="">请选择</option>
              <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['site']->value['province']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['site']->value['cityid']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>
                ><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>

              </option>
              <?php } ?>
            </select>
          </div>
          <div class="layui-input-inline">
            <select name="three_cityid" lay-filter="three_cityid" id="three_cityid">
              <option value="">请选择</option>
              <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['site']->value['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['site']->value['three_cityid']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>
                ><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>

              </option>
              <?php } ?>
            </select>
          </div>
        </div>  
      </td>
		</tr>

		<tr id='fz_type_2' <?php if ($_smarty_tpl->tpl_vars['site']->value['fz_type']!='2') {?>style="display:none;"<?php }?>  class="admin_table_trbg">
			<th>行业分站：</th>
			<td>
        <div class="layui-form-item">
          <div class="layui-input-inline">
            <select id="hy" name="hy" lay-filter="hy">
              <option value="">请选择</option>
              <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['site']->value['hy']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>
                ><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>

              </option>
              <?php } ?>
            </select>
          </div>
        </div>   
      </td>
		</tr>

   	<tr>
			<th>风格分站：</th>
			<td>
        <div class="layui-form-item">
          <div class="layui-input-inline">
            <select name="style">
              <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['dir'];?>
" 
                <?php if ($_smarty_tpl->tpl_vars['site']->value['style']==$_smarty_tpl->tpl_vars['row']->value['dir']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value['dir'];?>
</option>
              <?php } ?>
            </select>
          </div>
          <span class="admin_web_tip">
            选择您需要绑定的模板风格目录，绑定成功后通过该域名访问人才网会自动进入到该风格下
          </span>
        </div>
      </td>
		</tr>
    
    <tr class="admin_table_trbg">
			<th>首页模板：</th>
			<td><input class="input-text" type="text" name="tpl" size="40" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['tpl'];?>
"/><span class="admin_web_tip">如：index.htm(后缀是.htm 不填则是默认index.htm模板)</span></td>
		</tr>
         
    <tr >
			<th>是否启用该域名：</th>
			<td>
        <div class="layui-form-item">
          <div class="layui-input-inline">
            <input name="type_switch" lay-filter="type_switch" lay-skin="switch" lay-text="启用|停用"
             <?php if ($_smarty_tpl->tpl_vars['site']->value['type']=="1") {?> checked<?php }?>
             type="checkbox">
            <input type="hidden" name="type" id="type" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['type'];?>
"/>
          </div>
          <span class="admin_web_tip">提示：停用该域名则不在前台选择城市处显示并且外部访问不对该域名进行解析</span>
        </div>
      </td>
		</tr>

    <tr class="admin_table_trbg">
		<th width="160">分站首页标题：</th>
		<td class="y-bg"><textarea name="webtitle" id="webtitle" rows="3" cols="50" class="text tips_class"><?php echo $_smarty_tpl->tpl_vars['site']->value['webtitle'];?>
</textarea></td>
	</tr>

    <tr>
		<th width="160">分站首页关键词：</th>
		<td class="y-bg"><textarea name="webkeyword" id="webkeyword" rows="3" cols="50" class="text tips_class"><?php echo $_smarty_tpl->tpl_vars['site']->value['webkeyword'];?>
</textarea></td>
	</tr>
	<tr class="admin_table_trbg">
		<th width="160">分站首页描述：</th>
		<td><textarea name="webmeta" id="webmeta" rows="3" cols="50" class="text"><?php echo $_smarty_tpl->tpl_vars['site']->value['webmeta'];?>
</textarea></td>
	</tr>
    <tr> <th width="160">分站LOGO：</th>
		 <td>
			 <button type="button" class="yun_bth_pic adminupload" lay-data="{name: 'weblogo',imgid: 'imgicon'}">上传图片</button>
			<input type="hidden" id="layupload_type" value="2"/>
			<input type="hidden" id="upload_path" value="logo"/>
			<input type="hidden" name="weblogo" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['weblogo'];?>
"/>
			<img id="imgicon" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['site']->value['weblogo'];?>
" style="max-width:300px;_width:300px" <?php if (!$_smarty_tpl->tpl_vars['site']->value['weblogo']) {?>class="none"<?php }?>>
			<span class="admin_web_tip">提示：默认为空则调用网站LOGO</span>
          </td>
		</tr>
		<tr class="admin_table_trbg" >
			<td align="center" colspan="2">
            <input type="hidden" name="pytoken" id='pytoken'value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
			<?php if (is_array($_smarty_tpl->tpl_vars['site']->value)) {?>
        	<input type="hidden" name="id" size="40" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['id'];?>
"/>
        	<input class="admin_button" type="button" onclick="checkform()" name="update" value="&nbsp;更 新&nbsp;"  />
        	<?php } else { ?>
    		<input class="admin_button" type="button" onclick="checkform()" value="&nbsp;添 加&nbsp;"  />
     		<?php }?>
     		<input class="admin_button" type="reset" name="reset" value="&nbsp;重 置 &nbsp;" />
			</td>
		</tr>
	</table>
</form>
</div>
</div>
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
<?php echo '<script'; ?>
 language=javascript src='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/city.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
'>
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language=javascript src='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/city.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
'>
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
var weburl = '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
';
  layui.use(['form'], function(){
    var form = layui.form
      ,$ = layui.$;  

    form.on('select(fz_type)', function(data){
      if(data.value == 1){
        $("#fz_type_1").show();
        $("#fz_type_2").hide();
      }else{
        $("#fz_type_2").show();
        $("#fz_type_1").hide();
      }
    });

    form.on('switch(type_switch)', function(data){
      var v = this.checked ? 1 : 2;
      $("#type").val(v);
    });

  });//end layui.use()

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui.upload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type='text/javascript'><?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
