<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 15:42:05
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\reg_com.htm" */ ?>
<?php /*%%SmartyHeaderCode:18935430115ab0bb4d306416-17084194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca2df4e461cc2ccc5c10ae3c386303cc5dd51ca5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\reg_com.htm',
      1 => 1517990420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18935430115ab0bb4d306416-17084194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wxid' => 0,
    'wxnickname' => 0,
    'wxpic' => 0,
    'config' => 0,
    'type' => 0,
    'config_wapdomain' => 0,
    'content' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0bb4d59bcb7_99107870',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0bb4d59bcb7_99107870')) {function content_5ab0bb4d59bcb7_99107870($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
  
<style>
.regtab li{
  margin: 0 5px !important;
}
</style>
<div class="yunwapreg_box">
<section class="list">
  <article>
	
    <?php if ($_smarty_tpl->tpl_vars['wxid']->value&&($_smarty_tpl->tpl_vars['wxnickname']->value||$_smarty_tpl->tpl_vars['wxpic']->value)) {?>
     <div class="lg_at">
        <dl>
            <dt><img style="width:75px;height:75px;border-radius:50px;" src="<?php echo $_smarty_tpl->tpl_vars['wxpic']->value;?>
"/></dt>
            <dd class="lg_at_tit"><?php echo $_smarty_tpl->tpl_vars['wxnickname']->value;?>
</dd>
            <dd class="lg_at_cr">您已登录微信账号</dd>
        </dl>
     </div>
	  <?php }?>
    
  <div class="regform">
    <ul class="regtab">
      <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_moblie']=='1') {?>
      <li class="<?php if ($_smarty_tpl->tpl_vars['type']->value!=1&&$_smarty_tpl->tpl_vars['type']->value!=3) {?>current<?php }?>"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register','usertype'=>2,'type'=>2),$_smarty_tpl);?>
" style="display:block;">手机注册</a></li>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_email']=='1') {?>
      <li class="<?php if ($_smarty_tpl->tpl_vars['type']->value==3) {?>current<?php }?>"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register','usertype'=>2,'type'=>3),$_smarty_tpl);?>
" style="display:block;">邮箱注册</a></li>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_user']=='1') {?>
      <li class="<?php if ($_smarty_tpl->tpl_vars['type']->value==1) {?>current<?php }?>"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register','usertype'=>2,'type'=>1),$_smarty_tpl);?>
" style="display:block;">用户名注册</a></li>
      <?php }?>
    </ul>

    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/index.php?c=register" onsubmit="return checkRegUser(this);" autocomplete="off">  
      <input name="regway" id="regway" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"/>
      <input name="usertype" id="usertype" type="hidden" value="2"/>

      <dl class="forminputitem">

      <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_email']=='1'&&$_smarty_tpl->tpl_vars['type']->value==3) {?>
        <dd >
          <div class="c ico_name inputitem_w">
                 <i class="reg_icon_font login_icon_n3 "></i>
              <input class="inputitemtxt" placeholder="填写邮箱" name="email" id="email" type="text" onBlur="check_email();">
            </div>
        </dd>
        
        <?php if (strpos($_smarty_tpl->tpl_vars['config']->value['code_web'],"注册会员")!==false) {?>
        <dd>
         <?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']==3) {?>  
          <!-- geetest -->
          <div id="mask"></div>
          <div id="popup-captcha-mobile" data-id='subreg' data-type='click'></div>
          <input type='hidden' id="popup-submit">
          <?php } else { ?>
              <div class="c ico_name inputitem_w">
                    <i class="reg_icon_font login_icon_n8 "></i>
                <input class="inputitemtxt" placeholder="填写验证码" name="checkcode" id="checkcode" type="text" maxlength="4"/>
                   <div class="rg_img">
                   <img id="vcodeimg" class="authcode" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wapdomain'];?>
/authcode.inc.php" onclick="checkCode('vcodeimg');"/>
                   <input type="hidden" id="code_kind" value="1" />
                   </div>
              </div>
          <?php }?>
        </dd>
        <?php }?>

        <dd>
          <div class="c ico_pwd2 inputitem_w">
            <i class="reg_icon_font login_icon_n2"></i>
            <input class="inputitemtxt" onfocus="this.type='password'" placeholder="填写密码" name="password" id="password" type="text">
            <em class="viewpwd"></em></div>
        </dd>

  		  <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_passconfirm']=='1') {?>
  		  <dd>
          <div class="c ico_pwd2 inputitem_w">
               <i class="reg_icon_font login_icon_n2_1 "></i>
            <input class="inputitemtxt" onfocus="this.type='password'" placeholder="确认密码" name="passconfirm" id="passconfirm"  type="text">
            <em class="viewpwd"></em></div>
        </dd>
	      <?php }?>
		 
        <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_comname']=='1') {?>
        <dd >
          <div class="c ico_name inputitem_w">
               <i class="reg_icon_font login_icon_n5 "></i>
            <input class="inputitemtxt" placeholder="企业名称" name="comname" id="comname" type="text">
          </div>
        </dd>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_comaddress']=='1') {?>
        <dd>
          <div class="c inputitem_w ico_email">
             <i class="reg_icon_font login_icon_n7 "></i>
            <input class="inputitemtxt"  placeholder="填写企业地址" name="address" id="address" type="text">
          </div>
        </dd>
        <?php }?>

  			<?php if ($_smarty_tpl->tpl_vars['config']->value['reg_comlink']=='1'||$_smarty_tpl->tpl_vars['config']->value['reg_real_name_check']==1) {?>
			  <dd >
				<div class="c ico_name inputitem_w">
				  <i class="reg_icon_font login_icon_n6 "></i>
				  <input class="inputitemtxt" placeholder="联系人真实姓名" name="linkman" id="linkman" type="text">
				</div>
			  </dd>
			  
			  <dd >
				<div class="c ico_name inputitem_w">
					 <i class="reg_icon_font login_icon_n4 "></i>
				  <input class="inputitemtxt" placeholder="填写手机号码" name="moblie" id="moblie" type="text" onblur="check_moblie()" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')">
				</div>
			  </dd>
			  <?php }?>
     
        <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_real_name_check']==1) {?>
			  <dd >
				<div class="c ico_name inputitem_w">
					<i class="reg_icon_font login_icon_n9 "></i>
					 <input class="inputitemtxt" placeholder="填写短信验证码" name="moblie_code" id="moblie_code" type="text"/>
					 <div class="rg_nmb">
						 <a class="rg_nmb_hq" href="javascript:void(0);" id="subreg" onclick="sendmsg('vcode_img');"><span id="time">获取验证码</span></a>
					 </div>
				</div>
			  </dd>
			  <?php }?>
	  
      <?php } elseif ($_smarty_tpl->tpl_vars['type']->value==2||$_smarty_tpl->tpl_vars['type']->value=='') {?>
        <dd >
          <div class="c ico_name inputitem_w">
           <i class="reg_icon_font login_icon_n4 "></i>
            <input class="inputitemtxt" placeholder="填写手机号码" name="moblie" id="moblie" type="text" onBlur="check_moblie();" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')">
          </div>
        </dd>
  
  			<?php if (strpos($_smarty_tpl->tpl_vars['config']->value['code_web'],"注册会员")!==false) {?>
			  <dd >
  			  <?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']==3) {?>	
  				<!-- geetest -->
  				<div id="mask"></div>
  				<div id="popup-captcha-mobile" data-id='subreg' data-type='click'></div>
  				<input type='hidden' id="popup-submit">

  				<?php } else { ?>
          <div class="c ico_name inputitem_w">
             <i class="reg_icon_font login_icon_n8 "></i>
            <input class="inputitemtxt" placeholder="填写验证码" name="checkcode" id="checkcode" type="text" maxlength="4"/>
               <div class="rg_img">
                    <img id="vcode_img" class="authcode" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wapdomain'];?>
/authcode.inc.php" onclick="checkCode('vcode_img');"/>
                    <input type="hidden" id="code_kind" value="1" />
               </div>
          </div>
  				<?php }?>
				</dd>
			  <?php }?>

		    <dd >
          <div class="c ico_name inputitem_w">
                <i class="reg_icon_font login_icon_n9 "></i>
               <input class="inputitemtxt" placeholder="填写短信验证码" name="moblie_code" id="moblie_code" type="text"/>
               <div class="rg_nmb">
                     <a class="rg_nmb_hq" href="javascript:void(0);" id="subreg" onclick="sendmsg('vcode_img');"><span id="time">获取验证码</span></a>
                 </div>
          </div>
        </dd>

        <dd>
          <div class="c ico_pwd2 inputitem_w">
             <i class="reg_icon_font login_icon_n2 "></i>
            <input class="inputitemtxt" onfocus="this.type='password'" placeholder="填写密码" name="password" id="password" type="text">
            <em class="viewpwd"></em></div>
        </dd>

        <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_passconfirm']=='1') {?>
        <dd>
          <div class="c ico_pwd2 inputitem_w">
             <i class="reg_icon_font login_icon_n2_1 "></i>
            <input class="inputitemtxt" onfocus="this.type='password'" placeholder="确认密码" name="passconfirm" id="passconfirm"  type="text">
            <em class="viewpwd"></em>
          </div>
        </dd>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_comname']=='1') {?>
        <dd >
          <div class="c ico_name inputitem_w">
               <i class="reg_icon_font login_icon_n5 "></i>
            <input class="inputitemtxt" placeholder="企业名称" name="comname" id="comname" type="text">
          </div>
        </dd>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_comaddress']=='1') {?>
        <dd>
          <div class="c inputitem_w ico_email">
             <i class="reg_icon_font login_icon_n7 "></i>
            <input class="inputitemtxt"  placeholder="填写企业地址" name="address" id="address" type="text">
          </div>
        </dd>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_comlink']=='1'||$_smarty_tpl->tpl_vars['config']->value['reg_real_name_check']==1) {?>
        <dd >
          <div class="c ico_name inputitem_w">
            <i class="reg_icon_font login_icon_n6 "></i>
            <input class="inputitemtxt" placeholder="联系人真实姓名" name="linkman" id="linkman" type="text">
          </div>
        </dd>
        <?php }?> 

        <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_comemail']=='1') {?>
        <dd>
          <div class="c inputitem_w ico_email">
            <i class="reg_icon_font login_icon_n3 "></i>
            <input class="inputitemtxt"  placeholder="填写邮箱地址" name="email" id="email" type="text" onblur="check_email()">
          </div>
        </dd>
        <?php }?>
			  	     
       <?php } elseif ($_smarty_tpl->tpl_vars['type']->value==1) {?>
         <dd >
            <div class="c ico_name inputitem_w">
              <i class="reg_icon_font login_icon_n1 "></i>
              <input class="inputitemtxt" placeholder="填写用户名" name="username" id="username" type="text" onblur="check_username();">
            </div>
          </dd>
		      
          <?php if (strpos($_smarty_tpl->tpl_vars['config']->value['code_web'],"注册会员")!==false) {?>
            <dd >
            <?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']==3) {?> 
              <!--geetest-->
              <div id="mask"></div>
              <div id="popup-captcha-mobile" data-id='subreg' data-type='click'></div>
              <input type='hidden' id="popup-submit">

              <?php } else { ?>
            
                  <div class="c ico_name inputitem_w">
                      <i class="reg_icon_font login_icon_n8 "></i>
                    <input class="inputitemtxt" placeholder="填写验证码" name="checkcode" id="checkcode" type="text" maxlength="4"/>
                    <div class="rg_img">
                    <img id="vcode_img" class="authcode" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wapdomain'];?>
/authcode.inc.php" onclick="checkCode('vcode_img');"/>
                    <input type="hidden" id="code_kind" value="1" />
                    </div>
                  </div>
          
            <?php }?>
            </dd>
           <?php }?>

          <dd>
            <div class="c ico_pwd2 inputitem_w">
              <i class="reg_icon_font login_icon_n2 "></i>
              <input class="inputitemtxt" onfocus="this.type='password'" placeholder="填写密码" name="password" id="password" type="text">
              <em class="viewpwd"></em></div>
          </dd>

    		  <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_passconfirm']=='1') {?>
    		  <dd>
            <div class="c ico_pwd2 inputitem_w">
               <i class="reg_icon_font login_icon_n2_1 "></i>
              <input class="inputitemtxt" onfocus="this.type='password'" placeholder="确认密码" name="passconfirm" id="passconfirm"  type="text">
              <em class="viewpwd"></em></div>
          </dd>
		      <?php }?>
			
		      <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_comname']=='1') {?>
          <dd >
            <div class="c ico_name inputitem_w">
                 <i class="reg_icon_font login_icon_n5 "></i>
              <input class="inputitemtxt" placeholder="企业名称" name="comname" id="comname" type="text">
            </div>
          </dd>
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_comaddress']=='1') {?>
          <dd>
            <div class="c inputitem_w ico_email">
               <i class="reg_icon_font login_icon_n7 "></i>
              <input class="inputitemtxt"  placeholder="填写企业地址" name="address" id="address" type="text">
            </div>
          </dd>
          <?php }?>

		      <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_comlink']=='1'||$_smarty_tpl->tpl_vars['config']->value['reg_real_name_check']==1) {?>
          <dd >
            <div class="c ico_name inputitem_w">
              <i class="reg_icon_font login_icon_n6 "></i>
              <input class="inputitemtxt" placeholder="联系人真实姓名" name="linkman" id="linkman" type="text">
            </div>
          </dd>
          <?php }?>	

          <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_comtel']=='1'||$_smarty_tpl->tpl_vars['config']->value['reg_real_name_check']==1) {?>
          <dd >
            <div class="c ico_name inputitem_w">
                 <i class="reg_icon_font login_icon_n4 "></i>
              <input class="inputitemtxt" placeholder="填写手机号码" name="moblie" id="moblie" type="text" onblur="check_moblie()" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')">
            </div>
          </dd>
          <?php }?>
		 
      		 <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_real_name_check']==1) {?>
      		 <dd >
      			<div class="c ico_name inputitem_w">
      				<i class="reg_icon_font login_icon_n9 "></i>
      				 <input class="inputitemtxt" placeholder="填写短信验证码" name="moblie_code" id="moblie_code" type="text"/>
      				 <div class="rg_nmb">
      					 <a class="rg_nmb_hq" href="javascript:void(0);" id="subreg" onclick="sendmsg('vcode_img');"><span id="time">获取验证码</span></a>
      				 </div>
      			</div>
      		  </dd>
      		 <?php }?>

           <?php if ($_smarty_tpl->tpl_vars['config']->value['reg_comemail']=='1') {?>
            <dd>
              <div class="c inputitem_w ico_email">
                <i class="reg_icon_font login_icon_n3 "></i>
                <input class="inputitemtxt"  placeholder="填写邮箱地址" name="email" id="email" type="text" onblur="check_email()">
              </div>
            </dd>
            <?php }?>
		 
        <?php }?>
     
          <dd>
            <span class="photochk" style="width:100%">
            <input id="xieyi" type="checkbox" name="xieyi" value="1" class="inputChk" checked="checked">
            <em style="width:100%">我已阅读并同意《<a href="javascript:void(0);" onclick="showservices()"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
注册协议</a>》</em></span>
          </dd>

          <dd>
            <input type="hidden" id="send" value="0" />
            <input type="hidden" id="isRealnameCheck" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['reg_real_name_check'];?>
"/>
            <input type="submit" name="submit" id="subreg" value="提交" class="inputSubmit">
          </dd>
        </dl>
      </form>
    </div>
    <div class="reg_other_tit"><span class="reg_other_tit_s">注册其他用户类型</span></div>
    <ul class="reg_other">
    <li><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register'),$_smarty_tpl);?>
">个人注册</a></li>
    </ul>
  </article>
</section>
<!--注册协议弹出框-->
<div style="width:100%;height:100%; background:rgba(51,51,51,0.5); position:fixed;left:0px;top:0px;z-index:1000000;display:none" id="services">
	<div style="width:100%; position:absolute;left:0px;top:40px;">
	 <div class="reg_xybox">
    <div class="reg_xybox_tit"><span class="reg_xybox_tit_s">注册协议</span><a href="javascript:void(0);" onclick="$('#services').hide();" class="reg_xybox_tit_a">关闭</a></div>
		<div class="reg_xybox_p">  
        <?php echo $_smarty_tpl->tpl_vars['content']->value['content'];?>

        </div> 
     </div> 
     </div>
</div> 
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/layer/layer.m.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/prefixfree.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/reg_ajax.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/geetest/gt.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/geetest/mobile.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
