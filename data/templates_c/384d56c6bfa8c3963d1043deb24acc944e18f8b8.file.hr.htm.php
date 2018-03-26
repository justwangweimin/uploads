<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 17:07:56
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\member\com\hr.htm" */ ?>
<?php /*%%SmartyHeaderCode:16923428475ab0cf6c169d39-01202619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '384d56c6bfa8c3963d1043deb24acc944e18f8b8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\member\\com\\hr.htm',
      1 => 1517817545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16923428475ab0cf6c169d39-01202619',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'v' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0cf6c39fb68_46336137',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0cf6c39fb68_46336137')) {function content_5ab0cf6c39fb68_46336137($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/cheader.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<section class="wap_member">
	<div class="wap_member_comp_h1"><span>应聘简历</span></div>

	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	
		<div class="com_member_hr">
			<div class="com_member_hr_name">
				<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume','a'=>'show','id'=>$_smarty_tpl->tpl_vars['v']->value['eid']),$_smarty_tpl);?>
" class="wap_member_com_name com_member_hr_cblue">
					<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 
					<?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']=='1') {?>
						<i class="hr_rusume_new">新</i>
					<?php }?>
				</a> 
				
				<?php if ($_smarty_tpl->tpl_vars['v']->value['height_status']==2) {?><i class="hr_gj"></i><?php }?>
				<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume','a'=>'show','id'=>$_smarty_tpl->tpl_vars['v']->value['eid']),$_smarty_tpl);?>
" class="wap_member_com_lokr">查看简历</a> 
				
				<span class="com_member_hr_date"></span>
			</div>
			
			<div class="com_member_user_box">
				<div class="com_member_hr_tj">
					<div class="com_member_hr_p1">
						<span class="member_c9">性别：</span><?php echo $_smarty_tpl->tpl_vars['v']->value['sex'];?>
  &nbsp;&nbsp;&nbsp;
						<span class="member_c9">经验：</span><span class=""><?php echo $_smarty_tpl->tpl_vars['v']->value['exp'];?>
</span>   &nbsp;&nbsp;&nbsp;
						<span class="member_c9">学历：</span><span class=""><?php echo $_smarty_tpl->tpl_vars['v']->value['edu'];?>
</span>
					</div>
					<div class="com_member_hr_p1">
						<span class="member_c9">意向职位：</span>
						<em style="color:#C00"><?php echo $_smarty_tpl->tpl_vars['v']->value['jobname'];?>
</em>
					</div>
				</div>

				<div class="com_member_hr_p1">
					<span class="member_c9">申请职位：</span><?php echo $_smarty_tpl->tpl_vars['v']->value['job_name'];?>

				</div>

				<div class="com_member_hr_p1">
					<span class="member_c9">申请日期：</span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['datetime'],"%Y-%m-%d");?>

				</div>

				<div class="com_member_hr_p5">标记状态：
					<span class="com_member_hr_cz_zt" style="width:70px; vertical-align:middle">
						<em class="info_bh_box">
							<select onchange="layer_del('', 'index.php?c=hrset&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&browse=' + this.value);" class="info_selectname" >
								<?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']==1) {?>
								<option value="1" selected>未查看</option> 
								<?php }?>
								
								<?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']<3) {?>
								<option value="2" <?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']=='2') {?>selected<?php }?>>已查看  </option> 
								<?php }?>

								<?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']<4) {?>
								<option value="3" <?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']=='3') {?>selected<?php }?>>等待通知</option>   
								<?php }?>

								<?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']<5) {?>
								<option value="4" <?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']=='4') {?>selected<?php }?>>拒绝面试</option>  
								<?php }?>

								<?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']!=4) {?>
								<option value="5" <?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']=='5') {?>selected<?php }?>>无法联系</option> 
								<?php }?>
							</select>
						</em>
					</span>

					<?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']=='1') {?>
						<span class="wap_member_post_list_zt">未查看 </span>
					<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['is_browse']=='2') {?>
						<span class="wap_member_post_list_zt ap_member_post_list_zt_gq">已查看 </span>
					<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['is_browse']=='3') {?>
						<span class="wap_member_post_list_zt ap_member_post_list_zt_zt">等待通知 </span>
					<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['is_browse']=='4') {?>
						<span class="wap_member_post_list_zt ap_member_post_list_zt_bf">拒绝面试</span> 
					<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['is_browse']=='5') {?>
						<span class="wap_member_post_list_zt ap_member_post_list_zt_no">无法联系</span>
					<?php }?>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['v']->value['body']!='') {?><div class="com_member_hr_p5">已取消申请：<em style="color:#C00"><?php echo $_smarty_tpl->tpl_vars['v']->value['body'];?>
</em></div><?php }?>

				<div class="yun_member_bth">
					<a href="javascript:void(0)" onclick="layer_del('确定要删除？','index.php?c=delhr&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')" class="yun_member_sub  yun_member_bth1" style="width:32%" >删除</a>

					<?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']!=4) {?> 
						<?php if ($_smarty_tpl->tpl_vars['v']->value['userid_msg']!=1) {?>
							<a href="javascript:void(0)" onclick="invite('<?php echo smarty_function_url(array('m'=>'wap','c'=>'ajax','a'=>'indexajaxresume'),$_smarty_tpl);?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
')" class="yun_member_sub  yun_member_bth2" style="width:32%">邀请面试</a>
							<a href="javascript:void(0)" onclick="layer_del('', 'index.php?c=hrset&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&browse=4')" class="yun_member_sub  yun_member_bth3" style="width:32%">拒绝面试</a>
						<?php } else { ?>
                            <?php if ($_smarty_tpl->tpl_vars['v']->value['is_browse']==5) {?> 
                            <span class="job_hr_bth_bj">无法联系</span> 
                            <?php } else { ?>
                            <span class="job_hr_bth_bj">已邀请</span>
                            <?php }?>
                        <?php }?>
                    <?php } else { ?>
                    <span class="job_hr_job_cz_a">已拒绝</span>
					<?php }?>
					<input type="hidden" id="uid" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
">
				</div>
			</div>
		</div>
	
	<?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
		
		<div class="wap_member_no">
			您暂时还没有申请职位的人才
			<div><a class="wap_member_no_submit" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume'),$_smarty_tpl);?>
">去搜索人才</a></div>
		</div>

	<?php } ?>

</section>
<div class="pages"> <?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
