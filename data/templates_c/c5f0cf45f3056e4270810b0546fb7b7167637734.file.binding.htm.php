<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 15:40:43
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\member\user\binding.htm" */ ?>
<?php /*%%SmartyHeaderCode:909752585ab0bafb5731b6-97324578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5f0cf45f3056e4270810b0546fb7b7167637734' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\member\\user\\binding.htm',
      1 => 1517799420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '909752585ab0bafb5731b6-97324578',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'setname' => 0,
    'resume' => 0,
    'member' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0bafba34283_03366275',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0bafba34283_03366275')) {function content_5ab0bafba34283_03366275($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<section class="wap_member">
<div class="wap_member_comp_h1"><span>账户认证绑定</span></div>
<div class="wap_member_Receive">
    <div class="pinless" style="width:100%;padding:0px;">
	<?php if ($_smarty_tpl->tpl_vars['setname']->value==1) {?>
	<div class="alter_account">
		<span>您有一次修改账户名和重置一次密码的机会<b>（仅限一次）</b></span>
		<a href="index.php?c=setname">立即修改</a>
    </div>
    <?php }?>
	<div class="prinless_mail">
        <div class="bingding_yx <?php if ($_smarty_tpl->tpl_vars['resume']->value['idcard_status']==1) {?> bingding_yx_g<?php }?>"><i class="binding_sf_icon"></i></div>    
		<div class="prin_wr">
        <h4>身份认证</h4> 
        <?php if ($_smarty_tpl->tpl_vars['resume']->value['idcard_status']==1) {?> 
		<p>当前身份证已验证：<b><?php echo $_smarty_tpl->tpl_vars['resume']->value['idcard'];?>
</b></p>
		<a href="index.php?c=idcard" class="binding_qx">重新上传</a>
        <?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['resume']->value['idcard_pic']!='') {?>
				<?php if ($_smarty_tpl->tpl_vars['resume']->value['idcard_status']==2) {?>
				<a href="index.php?c=idcard"class="binding_qx">重新上传</a>
				<p><div>审核未通过 原因：</div><div class="prinless_mail_yy"><?php echo $_smarty_tpl->tpl_vars['resume']->value['statusbody'];?>
</div></p>  
				<?php } else { ?> 
				<a href="index.php?c=idcard" class="binding_qx">重新上传</a>
				<p>身份认证已上传，请等待管理员审核。</p> 
				<?php }?>
			<?php } else { ?>
				<a href="index.php?c=idcard">立即绑定</a>
				<p>身份认证增加企业对你的信任度。</p> 
			<?php }?> 
        <?php }?>
		</div>
	</div>
    </div>
	<div class="prinless_mail">
        <div class="bingding_yx <?php if ($_smarty_tpl->tpl_vars['resume']->value['email_status']==1) {?>bingding_yx_g<?php }?>"><i class="binding_yx_icon"></i></div>    
		<div class="prin_wr">
		<h4>绑定邮箱</h4>
        <?php if ($_smarty_tpl->tpl_vars['resume']->value['email_status']==1) {?>
		<a href="javascript:void(0)" onclick="layer_del('确定要取消绑定？','index.php?c=binding&type=email')" class="binding_qx">取消绑定</a>
		<p>当前邮箱已验证：<b><?php echo $_smarty_tpl->tpl_vars['member']->value['email'];?>
</b></p>
        <?php } else { ?>
		<a href="index.php?c=bindingbox&type=email">立即绑定</a>
		<p>当前邮箱未验证：<b><?php echo $_smarty_tpl->tpl_vars['member']->value['email'];?>
</b>邮箱验证后，可以通过邮箱随时取回账户密码</p>
        <?php }?>
        </div>
	</div>
	<div class="prinless_mail">
        <div class="bingding_yx <?php if ($_smarty_tpl->tpl_vars['resume']->value['moblie_status']==1) {?>bingding_yx_g<?php }?>"><i class="binding_sj_icon"></i></div>    
		<div class="prin_wr" style="position:relative;">
		<h4>绑定手机</h4>
        <?php if ($_smarty_tpl->tpl_vars['resume']->value['moblie_status']==1) {?>
		<a href="javascript:void(0)" onclick="layer_del('确定要取消绑定？','index.php?c=binding&type=moblie')" class="binding_qx">取消绑定</a>
		<p>当前手机已绑定：<b><?php echo $_smarty_tpl->tpl_vars['member']->value['moblie'];?>
</b></p>
        <?php } else { ?>
		<a href="index.php?c=bindingbox&type=moblie">立即绑定</a>
		<p>绑定后可使用该手机登录账号或者找回密码</p>
        <?php }?>
        </div>
	</div>
	<div class="prinless_mail">
        <div class="bingding_yx <?php if ($_smarty_tpl->tpl_vars['member']->value['qqid']!='') {?>bingding_yx_g<?php }?>"><i class="binding_qq_icon"></i></div>    
		<div class="prin_wr">
		<h4>绑定QQ</h4>
        <?php if ($_smarty_tpl->tpl_vars['member']->value['qqid']!='') {?>
		<a href="javascript:void(0)" onclick="layer_del('确定要取消绑定？','index.php?c=binding&type=qqid')" class="binding_qx">取消绑定</a>
		<p>已绑定QQ号</p>
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_qqlogin']!='1') {?>
            <div class="Binding_oper">
                <a href="javascript:void(0)" onclick="layermsg('对不起，QQ绑定已关闭！');return false;">立即绑定</a>
            </div>
            <?php } else { ?>
            <div class="Binding_oper">
                <a href="<?php echo smarty_function_url(array('m'=>'qqconnect','login'=>1),$_smarty_tpl);?>
">立即绑定</a>
            </div>
            <?php }?>
		<p>未绑定QQ号</p>
        <?php }?>
        </div>
	</div>
    <div class="prinless_mail">
        <div class="bingding_yx <?php if ($_smarty_tpl->tpl_vars['member']->value['sinaid']!='') {?>bingding_yx_g<?php }?>"><i class="binding_xl_icon"></i></div>    
		<div class="prin_wr">
		<h4>绑定新浪微博</h4>
        <?php if ($_smarty_tpl->tpl_vars['member']->value['sinaid']!='') {?>
		<a href="javascript:void(0)" onclick="layer_del('确定要取消绑定？','index.php?c=binding&type=sinaid')" class="binding_qx">取消绑定</a>
		<p>已绑定，可使用新浪微博快速登录</p>
        <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_sinalogin']!='1') {?>
            <a href="javascript:void(0)" onclick="layermsg('对不起，新浪绑定已关闭！');return false;">立即绑定</a>
        <?php } else { ?>
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'sinaconnect','login'=>1),$_smarty_tpl);?>
" >立即绑定</a>
        <?php }?>
		<p>授权绑定后，可使用新浪微博快速登录</p>
        <?php }?>
        </div>
	</div>
</div>
</section>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
