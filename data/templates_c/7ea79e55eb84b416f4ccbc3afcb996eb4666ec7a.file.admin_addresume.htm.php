<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-25 00:18:11
         compiled from "D:\xampp\htdocs\uploads\app\template\admin\admin_addresume.htm" */ ?>
<?php /*%%SmartyHeaderCode:12671080125a91904303f157-47966428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ea79e55eb84b416f4ccbc3afcb996eb4666ec7a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\admin\\admin_addresume.htm',
      1 => 1518071012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12671080125a91904303f157-47966428',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'row' => 0,
    'arr_data' => 0,
    'j' => 0,
    'v' => 0,
    'userdata' => 0,
    'userclass_name' => 0,
    'user_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a9190430ede40_61990332',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9190430ede40_61990332')) {function content_5a9190430ede40_61990332($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
" rel="stylesheet">
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

<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
    <div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
    <div class="admin_new_tip_list_cont">
      <div class="admin_new_tip_list">该页面用来创建简历信息。</div>
    </div>
  </div>
  <div class="clear"></div>
  <div class="admin_add_box">
    <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
    <form class="layui-form" action=""  method="post" onSubmit="return addresume()"  target="supportiframe">
      <input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
      <div class="admin_add_box_c">
        <?php if ($_smarty_tpl->tpl_vars['row']->value['uid']=='') {?>
        <div class="admin_add_tit"><span class="admin_add_tit_s"><i class="admin_add_tit_s_icon admin_add_tit_s_icon_zh"></i>账户信息</span></div>
         <div class="admin_add_list"><div class="admin_add_list_name">登录账户</div><div class="admin_add_list_right"><input type="text" name="username" id="username" class="input-text" value="" onblur="check_username();"></div></div>
       <div class="admin_add_list"><div class="admin_add_list_name">密码</div><div class="admin_add_list_right"><input type="password" name="password" id="password" class="input-text" value=""></div></div>
      
       <div class="admin_add_list"><div class="admin_add_list_name">确认密码</div><div class="admin_add_list_right"><input type="password" name="passconfirm" id="passconfirm" class="input-text" value=""></div></div>
       
        <?php }?>
          <div class="admin_add_tit"><span class="admin_add_tit_s"><i class="admin_add_tit_s_icon admin_add_tit_s_icon_info"></i>基本资料</span></div>
       <div class="admin_add_list"><div class="admin_add_list_name">用户姓名</div><div class="admin_add_list_right"><input type="text" name="resume_name" id="resume_name" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
"></div></div>
     
        <div class="admin_add_list"><div class="admin_add_list_name">性 别</div><div class="admin_add_list_right"><div class="layui-form-item">
                  <div class="layui-input-block">
                    <div class="layui-input-inline">
					 <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_data']->value['sex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<input id="sex<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
" type="radio" <?php if ($_smarty_tpl->tpl_vars['row']->value['sex']==$_smarty_tpl->tpl_vars['j']->value) {?>checked="checked"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
"  title="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" name="sex">
					<?php } ?>
					
				
                    </div>
                  </div>
              </div>
 
           </div></div>
     <div class="admin_add_list"><div class="admin_add_list_name">教育程度</div><div class="admin_add_list_right"><div class="layui-form-item">
				 <div class="layui-input-block">
					<div class="layui-input-inline">
						<select name="edu" id="edu" lay-verify="" >
						<option>请选择</option>
						 <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
							<option  value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"
							 <?php if ($_smarty_tpl->tpl_vars['row']->value['edu']==$_smarty_tpl->tpl_vars['v']->value) {?>
							  selected
								  <?php }?>
								  > <?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>

								</option>
							  <?php } ?>
							</select>
						  </div>
						</div>
				  </div>
			</div></div>
       <div class="admin_add_list"><div class="admin_add_list_name">现居住地</div><div class="admin_add_list_right"><input type="text" name="living" id="living" class="input-text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['living'];?>
"></div></div>
        <div class="admin_add_list"><div class="admin_add_list_name">工作经验</div><div class="admin_add_list_right"><div class="layui-form-item">
				 <div class="layui-input-block">
					<div class="layui-input-inline">
						<select name="exp" id="exp" lay-verify="" >
						<option>请选择</option>
						 <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
							<option  value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"
							 <?php if ($_smarty_tpl->tpl_vars['row']->value['exp']==$_smarty_tpl->tpl_vars['v']->value) {?>
							  selected
								  <?php }?>
								  > <?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>

								</option>
							  <?php } ?>
							</select>
						  </div>
						</div>
				  </div>
		</div></div>
        <div class="admin_add_list"><div class="admin_add_list_name">出生日期</div><div class="admin_add_list_right"><input name="birthday" id="birthday"  type="text" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['birthday'];?>
" class="input-text" />
        </div></div>
        <div class="admin_add_list"><div class="admin_add_list_name">手机</div><div class="admin_add_list_right"><input type="text" name="moblie" id='telphone' onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['telphone'];?>
"></div></div>
        <div class="admin_add_list"><div class="admin_add_list_name">邮箱</div><div class="admin_add_list_right"><input type="text" name="email" id="email" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
"></div></div>
       <div class="admin_add_list"><div class="admin_add_list_name">自我评价</div><div class="admin_add_list_right"><textarea id="description" class="expect_text_textarea  " name="description" ><?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
</textarea></div></div>
        <div class="admin_add_list"><div class="admin_add_list_right"><input name='uid' type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
'>
            <input class="layui-btn layui-btn-normal" type="submit" name="next" value="&nbsp;下一步&nbsp;" /></div></div>
    </form>
  </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
  layui.use(['layer', 'form','laydate'], function(){
    var layer = layui.layer
    ,form = layui.form
    ,laydate = layui.laydate
    ,$ = layui.$;
	laydate.render({
		elem: '#birthday'
	});
  });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript"> 
var userstyle="<?php echo $_smarty_tpl->tpl_vars['user_style']->value;?>
";
var weburl="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";
function addresume(){
	var username=$.trim($("#username").val());
	var password=$.trim($("#password").val());
	var passconfirm=$.trim($("#passconfirm").val());
	var resume_name=$.trim($("#resume_name").val());
	var sex=$.trim($("input[name='sex']:checked").val());
	var living=$.trim($("#living").val());
	var birthday=$.trim($("#birthday").val());
	var telphone=$.trim($("#telphone").val());
	var email=$.trim($("#email").val());
	var description=$.trim($("#description").val());
	var reg= /^[1][3456789]\d{9}$/;
	var myreg = /^([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9\-]+@([a-zA-Z0-9\-]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;		
	'<?php if ($_smarty_tpl->tpl_vars['row']->value['uid']=='') {?>'
	if(username==''){parent.layer.msg("登录账户不能为空！",2,8);return false;}
	if(password.length<6){parent.layer.msg("密码长度错误！",2,8);return false;}
	if(password!=passconfirm){parent.layer.msg("两次密码不一致！",2,8);return false;}
	'<?php }?>'
	if(resume_name==''){parent.layer.msg("用户姓名不能为空！",2,8);return false;}
	if(sex==''){parent.layer.msg("性别不能为空！",2,8);return false;}
	if(living==''){parent.layer.msg("现居住地不能为空！",2,8);return false;}
	if(birthday==''){parent.layer.msg("出生日期不能为空！",2,8);return false;}
	if(telphone==''){parent.layer.msg("手机号码不能为空！",2,8);return false;}else if(!reg.test(telphone)){
		parent.layer.msg("手机号码格式错误！",2,8);return false;
	}
	if(email==''){parent.layer.msg("邮箱不能为空！",2,8);return false;}else if(!myreg.test(email)){
		parent.layer.msg("邮箱格式错误！",2,8);return false;
	}
	if(description==''){parent.layer.msg("自我评价不能为空！",2,8);return false;}
} 
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
