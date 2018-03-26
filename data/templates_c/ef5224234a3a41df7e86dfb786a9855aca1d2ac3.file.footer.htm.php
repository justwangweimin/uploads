<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-07 12:24:39
         compiled from "D:\xampp\htdocs\uploads\\app\template\wap\footer.htm" */ ?>
<?php /*%%SmartyHeaderCode:14025910655a915b14b538c9-73981421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef5224234a3a41df7e86dfb786a9855aca1d2ac3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\\\app\\template\\wap\\footer.htm',
      1 => 1520396676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14025910655a915b14b538c9-73981421',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a915b14cc0409_88389594',
  'variables' => 
  array (
    'username' => 0,
    'layer' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a915b14cc0409_88389594')) {function content_5a915b14cc0409_88389594($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_function_baidu')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.baidu.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/nativeshare.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<footer>
  <div class="clear"></div>
  <div class="footer_box_bot"></div>
  <div class="footer_sum">
    <div class="bottom_sum">
      <div class="bottom_con">
        <div class="classify "> 
          <a href="<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
" id="indexclick" class="fotter_nav_link"> 
            <i class="footer_icon iconfont_home"></i> 
            <span class="fotter_nav_span">首页</span>
          </a> </div>
        <div class="classify"  >
          <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job'),$_smarty_tpl);?>
"  class="fotter_nav_link">      
            <em class="fotter_nav_link"> 
              <i class="footer_icon iconfont_jobhome"></i> 
              <span class="fotter_nav_span">找工作</span> 
            </em></a>
        </div>
        <div class="classify footer_nav_cur"> 
          <a href="javascript:void(0);" id="jobclick" class="fotter_nav_link"> 
            <i class="iconfont_homemore"></i> 
            <span class="iconfont_homemore_bg"></span>   <span class="fotter_nav_span">&nbsp;</span>      
          </a> 
        </div>
        <div class="classify"> 
          <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume'),$_smarty_tpl);?>
"  id="resumeclick<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume'),$_smarty_tpl);?>
" class="fotter_nav_link"> 
            <em class="fotter_nav_link"> 
              <i class="footer_icon iconfont_userhome"></i> <span class="fotter_nav_span">找人才</span> 
            </em> </a>           
        </div>
        <?php if (!$_smarty_tpl->tpl_vars['username']->value) {?>
        <div class="classify"> <a href="javascript:void(0);" id="reg_mune_box" class="fotter_nav_link"> <i class="footer_icon iconfont_myhome"></i> <span class="fotter_nav_span">我的</span> </a>
        </div>
        <?php } else { ?>
        <div class="classify"> <a href="<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
member" id="memberclick" class="fotter_nav_link"> <i class="footer_icon iconfont_myhome"></i> <span class="fotter_nav_span">我的</span> </a> </div>
        <?php }?>
      </div>
    </div>
  </div> 
  <div style="width:100%;height:100%; background:rgba(0,0,0,0.9); position:fixed;left:0px;right:0px;bottom:0px;top:0px ; z-index:10000;display:none" id="footerjob"> 
    <div class="foot_nav_close" style="bottom:220px;"></div>
    <div class="foot_nav_box" style="width:100%; position:absolute;"> 
      <ul class="foot_nav_box_list">
        <li><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'part'),$_smarty_tpl);?>
" class="foot_nav_box_a"><span class="foot_nav_box_list_icon cor_3"><i class="nav_icon iconfont_part "></i></span><div class="foot_nav_box_name">找兼职</div></a> </li>   
        <li>  <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'tiny'),$_smarty_tpl);?>
" class="foot_nav_box_a"><span class="foot_nav_box_list_icon cor_7"><i class="nav_icon iconfont_tiny "></i></span><div class="foot_nav_box_name">普工专区</div></a> </li>
        <li><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'once'),$_smarty_tpl);?>
" class="foot_nav_box_a"><span class="foot_nav_box_list_icon cor_4"><i class="nav_icon iconfont_once "></i></span><div class="foot_nav_box_name">店铺招聘</div></a> </li>
        <li> <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'map'),$_smarty_tpl);?>
" class="foot_nav_box_a"><span class="foot_nav_box_list_icon cor_5"><i class="nav_icon iconfont_map "></i></span><div class="foot_nav_box_name">附近职位</div></a></li>
        <li> <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company'),$_smarty_tpl);?>
" class="foot_nav_box_a"><span class="foot_nav_box_list_icon cor_2"><i class="nav_icon iconfont_comp "></i></span><div class="foot_nav_box_name">找企业</div></a> </li>
        <li> <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'zph'),$_smarty_tpl);?>
" class="foot_nav_box_a"><span class="foot_nav_box_list_icon cor_6"><i class="nav_icon iconfont_zph "></i></span><div class="foot_nav_box_name">招聘会</div></a> </li>        
<!--        <li> <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'redeem'),$_smarty_tpl);?>
" class="foot_nav_box_a"><span class="foot_nav_box_list_icon cor_jf"><i class="nav_icon iconfont_jf "></i></span><div class="foot_nav_box_name">商城</div></a> </li>
        <li> <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask'),$_smarty_tpl);?>
" class="foot_nav_box_a"><span class="foot_nav_box_list_icon cor_wd"><i class="nav_icon iconfont_ask "></i></span><div class="foot_nav_box_name">互动问答</div></a> </li>
        <li> <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'advice'),$_smarty_tpl);?>
" class="foot_nav_box_a"><span class="foot_nav_box_list_icon cor_yj"><i class="nav_icon iconfont_yj "></i></span><div class="foot_nav_box_name">意见反馈</div></a> </li>-->
        <li> <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'special'),$_smarty_tpl);?>
" class="foot_nav_box_a"><span class="foot_nav_box_list_icon cor_1"><i class="nav_icon iconfont_zt "></i></span><div class="foot_nav_box_name">专题招聘</div></a> </li>
        <li> <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','type'=>'tj'),$_smarty_tpl);?>
" class="foot_nav_box_a"><span class="foot_nav_box_list_icon cor_8"><i class="nav_icon iconfont_news "></i></span><div class="foot_nav_box_name">周边资讯</div></a> </li>
      </ul>
    </div>
  </div>
</footer>
<div class="yunwap_reg" id="reg_mune" style="display:none">
  <div class="yunwap_close"></div>
  <ul>
    <li><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register','usertype'=>2),$_smarty_tpl);?>
"><i class="yunwap_reg_icon yunwap_reg_icon_bg1"><em class="yunwap_reg_icon_bg1p"></em></i>企业注册</a></li> 
    <li><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register'),$_smarty_tpl);?>
" ><i class="yunwap_reg_icon yunwap_reg_icon_bg2"><em class="yunwap_reg_icon_bg2p"></em></i>个人注册</a></li>
  </ul>
  <div class="yunwap_login"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
" class="">会员登录</a></div>
</div>  
<?php if ($_smarty_tpl->tpl_vars['layer']->value) {?>
<input id="layermsg" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value['msg'];?>
" type="hidden">
<input id="layerurl" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value['url'];?>
" type="hidden">
<?php echo '<script'; ?>
>$(document).ready(function(){
    islayer();
  });<?php echo '</script'; ?>
>
<?php }?>
<?php echo '<script'; ?>
>
  var wapurl="<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
",weburl="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
",pricename="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
",integral_pricename="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
",code_web='<?php echo $_smarty_tpl->tpl_vars['config']->value['code_web'];?>
',code_kind='<?php echo $_smarty_tpl->tpl_vars['config']->value['code_kind'];?>
';
  $(document).ready(function(){
    $('#jobclick').click('click',function(){
      $('#footerjob').toggle();
      $('#footerresume').hide();
    });
    $('#footerjob').click('click',function(){
      $('#footerjob').hide();
    });
    $('#reg_mune_box').click('click',function(){
      $('#reg_mune').toggle();
      $('#footerresume').hide();
    });
    $('#reg_mune').click('click',function(){
      $('#reg_mune').hide();
    });
    $('#reg_mune_boxs').click('click',function(){
      $('#reg_mune').toggle();
      $('#footerresume').hide();
    });
    $('#reg_mune').click('click',function(){
      $('#reg_mune').hide();
    });
  });

<?php echo '</script'; ?>
>
<?php echo smarty_function_baidu(array(),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['config']->value['sy_wx_sharelogo']) {?>
<!--微信分享专用-->
<div style='margin:0 auto;width:0px;height:0px;overflow:hidden;'><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_sharelogo'];?>
"></div>
<?php }?>
</body>
</html><?php }} ?>
