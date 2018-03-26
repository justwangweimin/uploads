<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 15:43:59
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\member\com\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:5197111405ab0bbbf6d0df9-48956364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '547d3fe146a632d422a7ccfea45c10f5e8c49708' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\member\\com\\index.htm',
      1 => 1517970251,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5197111405ab0bbbf6d0df9-48956364',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'company' => 0,
    'username' => 0,
    'sqnum' => 0,
    'jobnum' => 0,
    'talent_pool_num' => 0,
    'member' => 0,
    'statis' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0bbbfbc54e5_06349094',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0bbbfbc54e5_06349094')) {function content_5ab0bbbfbc54e5_06349094($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/cheader.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<div class="com_index_box">
	<div class="com_index_logo">
		<a href="index.php?c=photo">
			<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['company']->value['logo'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
',2);">
		</a>
	</div>
	<div class="com_logo_icon_bg"><a href="index.php?c=photo"><i class="com_logo_icon"></i></a></div>
	<div class="com_index_box_hello">你好！<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</div>

	<div class="com_index_comname">
		<div class="com_index_comname_p">
			<?php if ($_smarty_tpl->tpl_vars['company']->value['name']) {?>
				<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'show','id'=>$_smarty_tpl->tpl_vars['company']->value['uid']),$_smarty_tpl);?>
" class=""><?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
</a>
			<?php } else { ?>
				<a href="index.php?c=info"><font color="red" size="3">未完善企业资料</font></a>
			<?php }?>
		</div>
	</div>
	
	<div class="com_index_comyl">
		<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'show','id'=>$_smarty_tpl->tpl_vars['company']->value['uid']),$_smarty_tpl);?>
" class="com_index_boxyl"><i class="com_index_boxyl_icon"></i>预览主页</a>
	</div>
</div>

<section>
	<div class="m_index_msg">
		<dl class="m_index_msg_list">
			<a href="index.php?c=hr"><dt><?php echo $_smarty_tpl->tpl_vars['sqnum']->value;?>
</dt><dd>应聘简历</dd></a>
		</dl>
		<dl class="m_index_msg_list">
			<a href="index.php?c=job"><dt><?php echo $_smarty_tpl->tpl_vars['jobnum']->value;?>
</dt><dd>职位管理</dd></a>
		</dl>
		<dl class="m_index_msg_list">
			<a href="index.php?c=talent_pool"><dt><?php echo $_smarty_tpl->tpl_vars['talent_pool_num']->value;?>
</dt><dd>简历收藏</dd></a>
		</dl>
	</div>
</section>
<div class="clear"></div>

 <div class="admin_new_tip_box ">
    <?php if ($_smarty_tpl->tpl_vars['member']->value['status']==0) {?>
    <div class="admin_new_tip ">
        <div class="admin_new_tit">操作提示</div>
        <div class="admin_new_tip_list_cont">
          <div class="admin_new_tip_list"> 您的帐号尚未通过审核，发布的职位信息将在审核通过后展示 </div>
                   
          <div id="forms" class="admin_new_tip_list">您暂时无法查看简历的联系方式，我们会24小时内进行审核请保持电话畅通，您可联系客服快速审核（<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
）</div>
           </div>
     </div>
      <?php }?>


<div class="clear"></div>
<section>
	<div class="user_nav_box ">
		
		<div class="user_nav_box_tit"><span class="user_nav_box_tit_s">职位管理</span></div>
		<ul>
		
			<li><a href="index.php?c=job"><i class="user_nav_box_icon  wap_member_nav_icon_zw"></i>职位管理</a></li>
			
			<li>
				<a href="javascript:void(0)" onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['statis']->value['addjobnum'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
','job','<?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
');" >
					<i class="user_nav_box_icon  wap_member_nav_icon_fb"></i>发布职位
				</a>
			</li>
			

			<li><a href="index.php?c=part"><i class="user_nav_box_icon  wap_member_nav_icon_jz"></i>兼职管理</a></li>
			
			<li><a  href="index.php?c=partapply"><i class="user_nav_box_icon  wap_member_nav_icon_jzbm"></i>兼职报名</a></li>
			
			<li><a href="index.php?c=info"><i class="user_nav_box_icon  wap_member_nav_icon_info"></i>企业资料</a></li>
			
			
			
			<li><a href="index.php?c=zhaopinhui" ><i class="user_nav_box_icon  wap_member_nav_icon_zph"></i>招聘会记录</a></li>
            <li><a href="index.php?c=special"><i class="user_nav_box_icon  wap_member_nav_icon_zt"></i>专题招聘</a></li>
             <li><a href="index.php?c=map"><i class="user_nav_box_icon  wap_member_nav_icon_map"></i>设置位置</a></li>
		</ul>
	</div>
</section>

<div class="clear"></div>
<section>
	<div class="user_nav_box ">
		<div class="user_nav_box_tit"><span class="user_nav_box_tit_s">简历管理</span></div>
		<ul>
			<li><a href="index.php?c=hr"><i class="user_nav_box_icon  wap_member_nav_icon_sq"></i>应聘简历</a></li>
			<li><a href="index.php?c=invite"><i class="user_nav_box_icon  wap_member_nav_icon_tz"></i>面试邀请</a></li>
			<li><a href="index.php?c=look_resume"><i class="user_nav_box_icon  user_nav_box_icon_eye"></i>浏览简历</a></li>
			<li><a href="index.php?c=look_job"><i class="user_nav_box_icon  wap_member_nav_icon_look"></i>被浏览的职位 </a></li>
			<li><a href="index.php?c=talent_pool"><i class="user_nav_box_icon  wap_member_nav_icon_sc"></i>收藏简历</a></li>
			<li><a href="index.php?c=down" ><i class="user_nav_box_icon  wap_member_nav_icon_xz"></i>下载简历</a></li>
		</ul>
	</div>
</section>


<div class="clear"></div>
<section>
	<div class="user_nav_box ">
		<div class="user_nav_box_tit"><span class="user_nav_box_tit_s">会员服务</span></div>
		<ul>
			<li><a href="index.php?c=com" ><i class="user_nav_box_icon  wap_member_nav_icon_hy"></i>我的会员</a></li>
			<li><a href="index.php?c=rating" ><i class="user_nav_box_icon  wap_member_nav_icon_hyfw"></i>会员服务</a></li>
			<li><a href="index.php?c=paylog"><i class="user_nav_box_icon  wap_member_nav_icon_dg"></i>订单管理</a></li>
			<li><a href="index.php?c=pay" ><i class="user_nav_box_icon  wap_member_nav_icon_zhcz"></i>账户充值</a></li>
			<li><a href="index.php?c=reward_list" ><i class="user_nav_box_icon  wap_member_nav_icon_dh"></i><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
兑换</a></li>
			<li><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask'),$_smarty_tpl);?>
"><i class="user_nav_box_icon  wap_member_nav_icon_ask"></i>我的问答</a></li>
			<li><a href="index.php?c=binding" ><i class="user_nav_box_icon  user_nav_box_icon_bd"></i>账户认证绑定</a></li>
			<li><a href="index.php?c=password"><i class="user_nav_box_icon  wap_member_nav_icon_sz"></i>更改密码</a></li>
			
			<li>
				<a href="javascript:;" onclick="islogout('<?php echo smarty_function_url(array('m'=>'wap','c'=>'loginout'),$_smarty_tpl);?>
','确认退出吗？');" >
					<i class="user_nav_box_icon wap_member_nav_icon_tc"></i>退出登录
				</a>
			</li>
		</ul>
	</div>
</section>

<div class="clear"></div>

<div class="index_section">
	<section class="wap_member">
		<div class="wap_member_mrecord">
		</div>
	</section>
</div>

<!--编辑基本信息引导匡-->
<div id="yingdaoone" style="width:100%;height:100%; background:rgba(51,51,51,0.6); position:fixed;left:0px;top:0px; z-index:100000;<?php if ($_smarty_tpl->tpl_vars['company']->value['name']!=''||$_smarty_tpl->tpl_vars['company']->value['hy']!='') {?>display:none;<?php }?>">
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

<?php if ($_smarty_tpl->tpl_vars['company']->value['name']!=''||$_smarty_tpl->tpl_vars['company']->value['hy']!='') {?>
	<!--上传LOGO引导匡-->
	<div id="yingdaotwo" style="width:100%;height:100%; background:rgba(51,51,51,0.6); position:fixed;left:0px;top:0px; z-index:100000;<?php if ($_smarty_tpl->tpl_vars['company']->value['logo']!='') {?>display:none;<?php }?>">
		<div style="width:100%; position:absolute;left:0px;top:140px;">
			<div style="padding:20px;">
				<div class="index_yd_box">
					<div class="index_yd_box_h1">亲，你还没有上传LOGO</div>
					<div class="user_resume_index_tip_p"><a href="index.php?c=photo" class="user_resume_index_tip_sub">上传LOGO</a></div>
					<div class="user_resume_index_tip_p2"><a href="javascript:Close_yd('yingdaotwo');" class="user_resume_index_tip_p2_a">下次再说</a></div>
				</div>
			</div>    
		</div>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['company']->value['logo']!='') {?>
<!--验证营业执照引导匡-->
<div id="yingdaothree" style="width:100%;height:100%; background:rgba(51,51,51,0.6); position:fixed;left:0px;top:0px; z-index:100000;<?php if ($_smarty_tpl->tpl_vars['company']->value['yyzz_status']==1||$_smarty_tpl->tpl_vars['company']->value['yyzz_status']==0) {?>display:none;<?php }?>">
	<div style="width:100%; position:absolute;left:0px;top:140px;">
		<div style="padding:20px;">
			<div class="index_yd_box">
				<div class="index_yd_box_h1">亲，你还没有验证营业执照</div>
				<div class="user_resume_index_tip_p"><a href="index.php?c=comcert" class="user_resume_index_tip_sub">验证</a></div>
				<div class="user_resume_index_tip_p2"><a href="javascript:Close_yd('yingdaothree');" class="user_resume_index_tip_p2_a">下次再说</a></div>
			</div>
		</div>    
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
