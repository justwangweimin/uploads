<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-25 12:10:00
         compiled from "D:\xampp\htdocs\uploads\app\template\admin\admin_regset.htm" */ ?>
<?php /*%%SmartyHeaderCode:3395233955a923718444706-84826720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7ef23d6028636df4702719b238662e392ccfb79' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\admin\\admin_regset.htm',
      1 => 1517982039,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3395233955a923718444706-84826720',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a9237185162b5_09937293',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9237185162b5_09937293')) {function content_5a9237185162b5_09937293($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
 src="../js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
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
<form class="layui-form">
<div class="infoboxp"> 
  <div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
    <div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
    <div class="admin_new_tip_list_cont">
      <div class="admin_new_tip_list">该页面展示了网站的注册设置信息，可对注册设置操作。</div>
    </div>
  </div>
  <div class="clear"></div>
  <div style="height:10px;"></div>
  <div class="main_tag" >
    <div class="tag_box">
      <div> 
        <table width="100%" class="table_form">
          <tr>
            <th width="160" bgcolor="#f0f6fb"><span class="admin_bold">参数说明</span></th>
            <td bgcolor="#f0f6fb"><span class="admin_bold">参数值</span></td>
          </tr>

      		<tr class="admin_table_trbg">
        		<th width="160">手机注册：</th>
        		<td>
              <div class="layui-form-item">
                <div class="layui-input-block">
                  <input name="reg_moblie"
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_moblie']=="1") {?>
                    checked
                    <?php }?>
                   lay-skin="switch" lay-text="开启|关闭" type="checkbox"/>
                </div>
              </div>
      		  </td>
      		</tr>

      		<tr>
        		<th width="160">邮箱注册：</th>
        		<td>
              <div class="layui-form-item">
                <div class="layui-input-block">
                  <input name="reg_email"
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_email']=="1") {?>
                    checked
                    <?php }?>
                   lay-skin="switch" lay-text="开启|关闭" type="checkbox"/>
                </div>
              </div>
        	  </td>
      		</tr>

          <tr>
            <th width="160">用户名注册：</th>
            <td>
              <div class="layui-form-item">
                <div class="layui-input-block">
                  <input name="reg_user"
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_user']=="1") {?>
                    checked
                    <?php }?>
                   lay-skin="switch" lay-text="开启|关闭" type="checkbox"/>
                </div>
              </div>
            </td>
          </tr>

		      <tr class="admin_table_trbg">
		        <th width="160">密码确认：</th>
		        <td>
              <div class="layui-form-item">
                <div class="layui-input-block">
                  <input name="reg_passconfirm"
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_passconfirm']=="1") {?>
                    checked
                    <?php }?>
                   lay-skin="switch" lay-text="开启|关闭" type="checkbox"/>
                </div>
              </div>
      		  </td>
      		</tr>

      		<tr>
        		<th width="160">个人姓名：</th>
        		<td>
              <div class="layui-form-item">
                <div class="layui-input-block">
                  <input name="reg_username"
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_username']=="1") {?>
                    checked
                    <?php }?>
                   lay-skin="switch" lay-text="开启|关闭" type="checkbox"/>
                </div>
              </div>
      		  </td>
      		</tr>

      		<tr class="admin_table_trbg">
        		<th width="160">个人邮箱：</th>
        		<td>
              <div class="layui-form-item">
                <div class="layui-input-block">
                  <input name="reg_useremail"
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_useremail']=="1") {?>
                    checked
                    <?php }?>
                   lay-skin="switch" lay-text="开启|关闭" type="checkbox"/>
                </div>
              </div>
      		  </td>
      		</tr>

      		<tr>
        		<th width="160">个人手机：</th>
        		<td>
              <div class="layui-form-item">
                <div class="layui-input-block">
                  <input name="reg_usertel"
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_usertel']=="1") {?>
                    checked
                    <?php }?>
                   lay-skin="switch" lay-text="开启|关闭" type="checkbox"/>
                </div>
              </div>
      		  </td>
      		</tr>

      		<tr class="admin_table_trbg">
        		<th width="160">企业邮箱：</th>
        		<td>
              <div class="layui-form-item">
                <div class="layui-input-block">
                  <input name="reg_comemail"
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_comemail']=="1") {?>
                    checked
                    <?php }?>
                   lay-skin="switch" lay-text="开启|关闭" type="checkbox"/>
                </div>
              </div>
      		  </td>
      		</tr>

      		<tr>
        		<th width="160">企业联系人：</th>
        		<td>
              <div class="layui-form-item">
                <div class="layui-input-block">
                  <input name="reg_comlink"
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_comlink']=="1") {?>
                    checked
                    <?php }?>
                   lay-skin="switch" lay-text="开启|关闭" type="checkbox"/>
                </div>
              </div>
      		  </td>
      		</tr>

      		<tr  class="admin_table_trbg">
        		<th width="160">企业联系人手机：</th>
        		<td>
              <div class="layui-form-item">
                <div class="layui-input-block">
                  <input name="reg_comtel"
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_comtel']=="1") {?>
                    checked
                    <?php }?>
                   lay-skin="switch" lay-text="开启|关闭" type="checkbox"/>
                </div>
              </div>
      		  </td>
      		</tr>

      		<tr>
        		<th width="160">企业名称：</th>
        		<td>
              <div class="layui-form-item">
                <div class="layui-input-block">
                  <input name="reg_comname"
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_comname']=="1") {?>
                    checked
                    <?php }?>
                   lay-skin="switch" lay-text="开启|关闭" type="checkbox"/>
                </div>
              </div>
      		  </td>
      		</tr>

      		<tr class="admin_table_trbg">
        		<th width="160">企业地址：</th>
        		<td>
              <div class="layui-form-item">
                <div class="layui-input-block">
                  <input name="reg_comaddress"
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_comaddress']=="1") {?>
                    checked
                    <?php }?>
                   lay-skin="switch" lay-text="开启|关闭" type="checkbox"/>
                </div>
              </div>
      		  </td>
      		</tr>

          <tr>
        		<th width="160"><font color="red">网站开启注册</font>：</th>
        		<td>
              <div class="layui-form-item">
                <div class="layui-input-block">
                  <input name="reg_user_stop"
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_user_stop']=="1") {?>
                    checked
                    <?php }?>
                   lay-skin="switch" lay-text="开启|关闭" type="checkbox"/>
                </div>
              </div>
      		  </td>
      		</tr>

      		<tr>
      			<th width="160">实名认证：</th>
      			<td>
              <div class="layui-form-item">
                <div class="layui-input-block">
                  <input name="reg_real_name_check"
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_real_name_check']=="1") {?>
                    checked
                    <?php }?>
                   lay-skin="switch" lay-text="开启|关闭" type="checkbox"/>
                </div>
              </div>
    		  	</td>
      		</tr>

        	<tr class="admin_table_trbg">
		<th width="220">同一IP注册间隔：</th>
		<td>
         <div class="layui-form-item">
  <div class="layui-input-block">
    <div class="layui-input-inline">
      <input name="sy_reg_interval" id="sy_reg_interval" autocomplete="off" class="layui-input" type="text" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_reg_interval'];?>
" size="63" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" style="display:inline;width:180px;"> 小时&nbsp;&nbsp;&nbsp;  <span class="admin_web_tip">提示：0为不限，其他数字为间隔时间。</span>
    </div>
  </div>
</div>
        
        </td>
	</tr>
    		<tr>
            <th width="160">限制注册用户名：</th>
            <td><textarea name="sy_regname" id="sy_regname" rows="3" cols="50" class="admin_comdit_textarea web_text_textarea"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_regname'];?>
</textarea>
            <span class="admin_web_tip">多个请用,(半角逗号)隔开。</span></td>
        </tr>

	<tr>
		<th width="160" class="admin_table_trbg">邮件默认后缀：</th>
        <td><textarea name="sy_def_email" id="sy_def_email" rows="3" cols="50" class="admin_comdit_textarea web_text_textarea"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_def_email'];?>
</textarea>
        <span class="admin_web_tip">多个用|(竖线)隔开,例：@qq.com|@163.com</span>
        </td>
	</tr>
      <tr>
		<th width="160" class="admin_table_trbg">限制会员手机号：</th>
        <td><textarea name="sy_web_mobile" id="sy_web_mobile" rows="3" cols="50" class="admin_comdit_textarea web_text_textarea"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_web_mobile'];?>
</textarea>
        <span class="admin_web_tip">会员手机号(恶意攻击)用分号隔开,例:13141589203;18261151514</span>
        </td>
	</tr>
        <tr>
         <th>&nbsp;</th>
          <td align="left">
            <input class="admin_button admin_buttonpz" id="regconfig" type="button" name="mapconfig" value="提交" />&nbsp;&nbsp;
            <input class="admin_button admin_buttonpz" type="reset" value="重置" /></td>
        </tr>
    </table>  
		<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
</div>
</div>
</div>
<?php echo '<script'; ?>
>
layui.use(['form'], function(){
  var form = layui.form
  ,$ = layui.$;
});

$(function(){   
	var sy_email_set='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_email_set'];?>
';
	$("#regconfig").click(function(){
		if($("input[name=reg_moblie]").is(":checked") ){
			if(!"<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_msguser'];?>
"||!"<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_msgpw'];?>
"||!"<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_msgkey'];?>
"||"<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_msg_isopen'];?>
"!='1'){
				layer.msg("还没有配置短信，请先配置！",2,8,function(){location.reload();});return false;
			}
		}
		if($("input[name=reg_email]").is(":checked")){
			if(sy_email_set!='1'){
				layer.msg("还没有配置邮箱，请先配置！",2,8,function(){location.reload();});return false;
			}
		}

    var reg_mobile = $("input[name=reg_moblie]").is(":checked") ? 1 : 0,
      reg_email = $("input[name=reg_email]").is(":checked") ? 1 : 0,
      reg_user = $("input[name=reg_user]").is(":checked") ? 1 : 0,
      reg_user_stop = $("input[name=reg_user_stop]").is(":checked") ? 1 : 0;
    if(reg_user_stop == 1 && reg_user == 0 && reg_mobile == 0 && reg_email == 0){
      layer.msg('开启网站注册时，‘手机注册’、‘email注册’、‘用户名注册’最少应开启一项!', 5 , 8);
      return false;
    }

		loadlayer();
		$.post("index.php?m=config&c=save",{
			reg_moblie : $("input[name=reg_moblie]").is(":checked") ? 1 : 0,
			reg_email : $("input[name=reg_email]").is(":checked") ? 1 : 0,
      reg_user : $("input[name=reg_user]").is(":checked") ? 1 : 0,
			reg_passconfirm : $("input[name=reg_passconfirm]").is(":checked") ? 1 : 0,
			reg_username : $("input[name=reg_username]").is(":checked") ? 1 : 0,
			reg_useremail : $("input[name=reg_useremail]").is(":checked") ? 1 : 0,
			reg_usertel : $("input[name=reg_usertel]").is(":checked") ? 1 : 0,
			reg_comemail : $("input[name=reg_comemail]").is(":checked") ? 1 : 0,
			reg_comlink : $("input[name=reg_comlink]").is(":checked") ? 1 : 0,
			reg_comtel : $("input[name=reg_comtel]").is(":checked") ? 1 : 0,
			reg_comname : $("input[name=reg_comname]").is(":checked") ? 1 : 0,
			reg_comaddress : $("input[name=reg_comaddress]").is(":checked") ? 1 : 0,
			reg_user_stop : $("input[name=reg_user_stop]").is(":checked") ? 1 : 0,
			reg_real_name_check : $("input[name=reg_real_name_check]").is(":checked") ? 1 : 0,

      sy_regname : $("#sy_regname").val(),
      sy_def_email : $("#sy_def_email").val(),
      sy_web_mobile:$("#sy_web_mobile").val(),
      sy_reg_interval : $("#sy_reg_interval").val(),
      config : $("#regconfig").val(),
			pytoken : $("#pytoken").val()
		},function(data,textStatus){ 
      parent.layer.closeAll('loading');
			config_msg(data); 
		});
	});
	
});
<?php echo '</script'; ?>
>
</div>
</form>
</body>
</html><?php }} ?>
