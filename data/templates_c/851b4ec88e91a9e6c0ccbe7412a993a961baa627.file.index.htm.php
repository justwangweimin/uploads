<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-02 01:54:33
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\member\user\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:4785267845a983e59aa1819-48022045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '851b4ec88e91a9e6c0ccbe7412a993a961baa627' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\member\\user\\index.htm',
      1 => 1517970305,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4785267845a983e59aa1819-48022045',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'config' => 0,
    'username' => 0,
    'expect' => 0,
    'wkyqnum' => 0,
    'yqnum' => 0,
    'statis' => 0,
    'time' => 0,
    'resume' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a983e59e21f11_14115587',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a983e59e21f11_14115587')) {function content_5a983e59e21f11_14115587($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="user_index_bg">
<div class="user_index_photo">
<a href="index.php?c=photo"><?php if ($_smarty_tpl->tpl_vars['user']->value['sex']==1) {?><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value['photo'];?>
" border="0" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);"><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value['photo'];?>
" border="0" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_iconv'];?>
',2);"><?php }?></a>
</div>
<div class="user_index_photo_icon_bg"><a href="index.php?c=photo"><i class="user_index_photo_icon"></i></a></div>
<div class="user_index_name"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 </div>
<div class="user_index_resume">
      <?php if ($_smarty_tpl->tpl_vars['expect']->value['integrity']) {?>
      <div class="user_index_resume_box">
      <div class="user_index_resume_t">简历完整度：</div>
      <div class="container">
        <div class="progress">
          <div class="progress-bar" style="width:<?php echo $_smarty_tpl->tpl_vars['expect']->value['integrity'];?>
%"></div>
        </div>
        <span class="progress-bar-bf"><?php echo $_smarty_tpl->tpl_vars['expect']->value['integrity'];?>
%</span> </div>
        </div>
      <?php } else { ?>
     <div class="user_index_resume_no"> 暂无简历!<a href="index.php?c=addresume" class="user_index_resume_cj"><i class="user_index_resume_cj_icon"></i>创建简历</a></div> <?php }?>
</div>
</div>
<section>
  <div class="m_index_msg">
    <dl class="m_index_msg_list">
      <?php if ($_smarty_tpl->tpl_vars['wkyqnum']->value) {?><i class="m_index_msg_list_number"><?php echo $_smarty_tpl->tpl_vars['wkyqnum']->value;?>
</i><?php }?> <a href="index.php?c=invite">
      <dt><?php echo $_smarty_tpl->tpl_vars['yqnum']->value;?>
</dt>
      <dd>面试通知</dd>
      </a>
    </dl>
    <dl class="m_index_msg_list">
      <a href="index.php?c=sq">
      <dt><?php echo $_smarty_tpl->tpl_vars['statis']->value['sq_jobnum'];?>
</dt>
      <dd>申请记录</dd>
      </a>
    </dl>
    <dl class="m_index_msg_list">
      <a href="index.php?c=collect">
      <dt><?php echo $_smarty_tpl->tpl_vars['statis']->value['fav_jobnum'];?>
</dt>
      <dd>收藏记录</dd>
      </a>
    </dl>
  </div>
</section>
<div class="clear"></div>
<section>
<div class="user_nav_box">
<div class="user_nav_box_tit"><span class="user_nav_box_tit_s">求职管理</span></div>
<ul>
<li><a href="index.php?c=resume" ><i class="user_nav_box_icon user_nav_box_icon_jl"></i>简历管理</a></li>
<li><a href="index.php?c=invite" ><i class="user_nav_box_icon user_nav_box_icon_tz"></i>面试通知</a></li>
<li> <a href="index.php?c=sq"><i class="user_nav_box_icon user_nav_box_icon_sq"></i>申请的职位</a></li>
<li> <a href="index.php?c=collect" ><i class="user_nav_box_icon user_nav_box_icon_sc "></i>收藏的职位</a></li>
<li>  <a href="index.php?c=look_job"><i class="user_nav_box_icon user_nav_box_icon_eye"></i>浏览的职位</a></li>
<li> <a href="index.php?c=look"><i class="user_nav_box_icon user_nav_box_icon_look"></i>谁看过我</a></li>
<li><a href="index.php?c=partapply"><i class="user_nav_box_icon user_nav_box_icon_jz"></i>兼职报名</a></li>
<li> <a href="index.php?c=partcollect"><i class="user_nav_box_icon user_nav_box_icon_jzsc"></i>兼职收藏</a></li>
<li><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask'),$_smarty_tpl);?>
"><i class="user_nav_box_icon user_nav_box_icon_ask"></i>问大家</a></li>
<li> <a href="index.php?c=atncom"><i class="user_nav_box_icon user_nav_box_icon_sckc"></i>我的关注</a></li>

</ul>
</div>
</section>

<div class="clear"></div>

<div class="clear"></div>

<section>
<div class="user_nav_box">
<div class="user_nav_box_tit"><span class="user_nav_box_tit_s">账户管理</span></div>
<ul>
<li><a href="index.php?c=info"><i class="user_nav_box_icon user_nav_box_icon_info"></i>基本信息</a></li>
<li> <a href="index.php?c=paylog"><i class="user_nav_box_icon user_nav_box_icon_dg"></i>财务管理</a></li>
<li> <a href="index.php?c=reward_list"><i class="user_nav_box_icon user_nav_box_icon_dh"></i><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
兑换</a></li>
<li> <a href="index.php?c=binding" ><i class="user_nav_box_icon user_nav_box_icon_bd "></i>账户认证绑定</a></li>
<li>  <a href="index.php?c=password"  ><i class="user_nav_box_icon user_nav_box_icon_sz"></i>更改密码</a></li>
<li> <a href="javascript:;" onclick="islogout('<?php echo smarty_function_url(array('m'=>'wap','c'=>'loginout'),$_smarty_tpl);?>
','确认退出吗？');"><i class="user_nav_box_icon user_nav_box_icon_tc"></i>退出登录</a></li>
</ul>
</div>
</section>
<div class="clear"></div>
</div>
</div>
<!--编辑基本信息引导匡-->
<div id="yingdaoone" style="width:100%;height:100%; background:rgba(51,51,51,0.6); position:fixed;left:0px;top:0px; z-index:100000;<?php if ($_smarty_tpl->tpl_vars['user']->value['name']!='') {?>display:none;<?php }?>">
  <div style="width:100%; position:absolute;left:0px;top:140px;">
    <div style="padding:20px;">
      <div class="index_yd_box">
      <div class="index_yd_box_h1">亲，你还没有填写基本信息</div>
      <div class="user_resume_index_tip_p"><a href="index.php?c=info" class="user_resume_index_tip_sub">编辑</a></div>
      <div class="user_resume_index_tip_p2"><a href="javascript:Close_yd('yingdaoone');" class="user_resume_index_tip_p2_a">下次再说</a></div>
      </div>
    </div>
  </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['user']->value['name']!=''&&!$_smarty_tpl->tpl_vars['expect']->value['integrity']) {?>
<!--创建简历引导匡-->
<div id="yingdaofour" style="width:100%;height:100%; background:rgba(51,51,51,0.6); position:fixed;left:0px;top:0px; z-index:100000;<?php if ($_smarty_tpl->tpl_vars['expect']->value['integrity']) {?>display:none;<?php }?>">
  <div style="width:100%; position:absolute;left:0px;top:140px;">
    <div style="padding:20px;">
      <div class="user_resume_index_tit">亲，你还没有创建简历</div>
      <div class="user_resume_index_tip">为了更快的找到工作，创建属于自己的简历吧！</div>
      <div class="user_resume_index_tip_p"><a href="index.php?c=addresume" class="user_resume_index_tip_sub">创建简历</a></div>
      <div class="user_resume_index_tip_p2"><a href="javascript:Close_yd('yingdaofour');" class="user_resume_index_tip_p2_a">下次再说</a></div>
    </div>
  </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['expect']->value['integrity']&&$_smarty_tpl->tpl_vars['expect']->value['lastupdate']<$_smarty_tpl->tpl_vars['time']->value&&$_COOKIE['exprefresh']!='1'&&$_smarty_tpl->tpl_vars['config']->value['resume_sx']==2) {?>
<!--刷新简历引导匡-->
<div id="yingdaotwo" style="width:100%;height:100%; background:rgba(0,0,0,0.6); position:fixed;left:0px;top:0px; z-index:100000;<?php if ($_smarty_tpl->tpl_vars['user']->value['name']!=''&&$_smarty_tpl->tpl_vars['expect']->value['lastupdate']>$_smarty_tpl->tpl_vars['time']->value) {?>display:none;<?php }?>">
  <div style="width:100%; position:absolute;left:0px;top:140px;">
    <div style="padding:20px;">
    <div class="index_yd_box">
      <div class="index_yd_box_h1">亲，你还今天还没用刷新简历</div>
      <div class="user_resume_index_tip_p"><a href="javascript:void(0);"  onclick="layer_del('','index.php?c=resumeset&update=<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
');" class="user_resume_index_tip_sub">立即刷新</a></div>
      <div class="user_resume_index_tip_p2"><a href="javascript:Close_yd('yingdaotwo');" class="user_resume_index_tip_p2_a">取消</a></div>
    </div>   </div>
  </div>
</div>
<?php }?>
<?php echo '<script'; ?>
>
function Close_yd(id){
	$("#"+id).hide();
}
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
