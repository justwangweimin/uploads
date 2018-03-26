<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 15:45:17
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\member\com\job.htm" */ ?>
<?php /*%%SmartyHeaderCode:7397884555ab0bc0d2afa69-97703857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b1a3a9e0f593263db5fe22b71b4183071e3cb47' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\member\\com\\job.htm',
      1 => 1517041849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7397884555ab0bc0d2afa69-97703857',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'v' => 0,
    'pagenav' => 0,
    'statis' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0bc0d4eca93_74613052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0bc0d4eca93_74613052')) {function content_5ab0bc0d4eca93_74613052($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/cheader.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<section class="wap_member">
	<div class="wap_member_comp_h1" style="position:relative"><span>职位管理</span></div>
	
	<?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
		<div class="wap_member_job_show">
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
				<div class="wap_member_msg ">
					<div class="wap_member_date">
						
						<span class="yun_m_job_date_n">&nbsp;
							<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'view','id'=>$_smarty_tpl->tpl_vars['v']->value['id']),$_smarty_tpl);?>
" class="job_list_jobname com_member_hr_cblue"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>
						</span>

						<div class="wap_member_date_r">
							<?php if ($_smarty_tpl->tpl_vars['v']->value['edate']<time()) {?>
								<span class="wap_member_ygq">已过期<span>
							<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['state']==1) {?>
								已审核
							<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['state']==3) {?>
								<span class="wap_member_wtg" onclick="layermsg('<?php echo $_smarty_tpl->tpl_vars['v']->value['statusbody'];?>
');return false;">未通过</span>
							<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['state']==0) {?>
								<em>未审核</em>
							<?php }?>
						</div>

					</div>

					<div class="yun_m_job_list_zt">
						应聘简历：<?php echo $_smarty_tpl->tpl_vars['v']->value['snum'];?>
  
						<span class="wap_member_msg_job_s">浏览量：<?php echo $_smarty_tpl->tpl_vars['v']->value['jobhits'];?>
 </span>
					</div>

					<div class="yun_m_job_list_zt">更新时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['lastupdate'],"%Y-%m-%d");?>
</div>

					<?php if ($_smarty_tpl->tpl_vars['v']->value['state']==1) {?>
						<div class="yun_m_job_list_tg">
							<a href="javascript:void(0)" onclick="showserver('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')">我要推广</a>
						</div>
					<?php }?>

					<div class="yun_m_job_list_zt">
						<?php if ($_smarty_tpl->tpl_vars['v']->value['xsdate']>time()) {?>
							<span class="yun_m_job_list_fw">已置顶</span>
						<?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['v']->value['rec_time']>time()&&$_smarty_tpl->tpl_vars['v']->value['rec']==1) {?>
							<span class="yun_m_job_list_fw">已推荐</span>
						<?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['v']->value['urgent_time']>time()&&$_smarty_tpl->tpl_vars['v']->value['urgent']==1) {?>
							<span class="yun_m_job_list_fw">已紧急</span>
						<?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['v']->value['autotime']>time()) {?>
							<span class="yun_m_job_list_fw">自动刷新</span>
						<?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['v']->value['rewardpack']==1) {?>
							<span class="yun_m_job_list_fw">悬赏</span>
						<?php }?>
					</div>

					<div class="yun_member_bth">

						<a href="javascript:layer_del('确定要删除？','index.php?c=jobdel&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');"class="yun_member_sub  yun_member_bth1">删除</a>

						<a href="javascript:void(0)" class="yun_member_sub  yun_member_bth1" onclick="refreshJobWap('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')">刷新</a> 
		
						<a href="index.php?c=jobadd&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="yun_member_sub yun_member_bth2">修改</a>
						
						<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==1) {?>
							<a href="javascript:void(0)" onclick="layer_del('','index.php?c=jobset&status=2&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')"class="yun_member_sub yun_member_bth3" >
								<span class="yun_member_yzt">已下架</span>上架招聘
							</a>
						<?php } else { ?>
							<a href="javascript:void(0)" onclick="layer_del('','index.php?c=jobset&status=1&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')"class="yun_member_sub yun_member_bth3">下架</a>
						<?php }?>

					</div>
				
				</div>

			<?php } ?>

			<div class="pages" style="margin-top:10px;"> <?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
		</div>

	<?php } else { ?>
		<div class="wap_member_no">您还没有发布职位。</div>
		
	<?php }?>
		<em class="wap_memberjob_fabu ">
			<a href="javascript:void(0)" onclick="jobadd_url('<?php echo $_smarty_tpl->tpl_vars['statis']->value['addjobnum'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_job'];?>
','job','<?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
');" style="width:100%;height:43px; line-height:43px; font-size:16px; margin-top:10px; background:#F90;color:#fff; display:inline-block; text-align:center">发布职位</a>
		</em>

	<!--没有职位提示-->
</section>

<!--推广弹出框-->
<div style="width:100%;height:100%; background:rgba(51,51,51,0.5); position:fixed;left:0px;top:0px;z-index:1000000;display:none" id="jobserver">
	<div style="width:100%; position:absolute;left:0px;top:40px;">
		<div style=" padding:20px;">  
			<div class="job_extension_tck" style="display:block">
				
				<div class="job_extension_tck_tit">职位推广<span onclick="$('#jobserver').hide();" style="float:right">关闭</span></div>
				
				<ul class="serverul">
					<li onclick="ckserver('1');" class="server1 job_extension_tck_yse"><a href="javascript:void(0)"><i class="job_extension_tck_icon "></i>自动刷新</a></li>
					
					<li onclick="ckserver('2');" class="server2"><a href="javascript:void(0)"><i class="job_extension_tck_icon "></i>职位置顶</a></li>
					
					<li onclick="ckserver('3');" class="server3"><a href="javascript:void(0)"><i class="job_extension_tck_icon "></i>推荐职位</a></li>
					
					<li onclick="ckserver('4');" class="server4"><a href="javascript:void(0)"><i class="job_extension_tck_icon "></i>紧急招聘</a></li>

					<li onclick="ckserver('5');" class="server5"><a href="javascript:void(0)"><i class="job_extension_tck_icon "></i>悬赏招聘</a></li>
				</ul>

				<input id="server" value='1' type="hidden" />
				<input id="jobid" value='' type="hidden" />
				
				<div class="job_extension_tck_bth">
					<a href="javascript:void(0)" onclick="forserver()" class="job_extension_tck_sub">确定</a>
				</div>

			</div> 
		</div> 
	</div>
</div> 
<?php echo '<script'; ?>
> 
function showserver(id){
	$('#jobid').val(id);
	$('#jobserver').show();
}
function ckserver(type){
	$("#server").val(type);
	$(".serverul li").removeClass("job_extension_tck_yse");
	$(".server"+type).addClass("job_extension_tck_yse");
}
function forserver(){
	var server=$("#server").val();
	var jobid=$("#jobid").val();
	if(server=='5'){
		window.location.href="index.php?c=addreward&jobid="+jobid;
		
	}else{
		window.location.href="index.php?c=getserver&id="+jobid+"&server="+server;
	}
	
}

function refreshJobWap(jobId){
	var weburl = '<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
';
	var integral = '<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_jobefresh'];?>
';
	var ajaxUrl = weburl+"member/index.php?c=ajax_refresh_job";

	$.post(ajaxUrl, {jobid:jobId},function(data){
		data = eval('(' + data + ')');
		
		if(data.error == 1){
			layermsg(data.msg, 2,9,function(){
				window.location.href='';
			});
		}else if(data.error == 2){
			layer.open({
				content: "您的等级特权已用完，继续操作将消费"+integral+"元，是否继续？",
				btn: ['继续', '取消'],
				shadeClose: false,
				yes: function () {
					window.location.href="index.php?c=getserver&id="+jobId+"&server="+5;;
				}
			});
		}else{
			layermsg(data.msg, 2,8);
		}
		 
	});
}
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
