<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-02 01:58:48
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\member\user\resume.htm" */ ?>
<?php /*%%SmartyHeaderCode:5277782205a983f5827f524-33086566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9533ba550ae25d66c13a6107457e402f39de0c62' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\member\\user\\resume.htm',
      1 => 1517990420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5277782205a983f5827f524-33086566',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'resume' => 0,
    'defjob' => 0,
    'maxnum' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a983f585cbdf6_44536668',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a983f585cbdf6_44536668')) {function content_5a983f585cbdf6_44536668($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="wap_member_comp_h1"><span>简历管理</span></div>
<div class="rsm_box" style="padding:0px 10px 10px ;"> 


<?php  $_smarty_tpl->tpl_vars['resume'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resume']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resume']->key => $_smarty_tpl->tpl_vars['resume']->value) {
$_smarty_tpl->tpl_vars['resume']->_loop = true;
?>
  <div class="rsm_list">
  
    <div class="rsm_top"> 
    <i class="rsm_top_gjicon"></i>
     <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume','a'=>'show','id'=>$_smarty_tpl->tpl_vars['resume']->value['id']),$_smarty_tpl);?>
">
      <div class="rsm_name"><?php echo $_smarty_tpl->tpl_vars['resume']->value['name'];?>
</div> </a> 
      <div class=""><span class="rsm_name_s">刷新：</span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['resume']->value['lastupdate'],'%Y-%m-%d');?>
 <span class="rsm_name_s rsm_name_s_l">被浏览：</span><?php echo $_smarty_tpl->tpl_vars['resume']->value['hits'];?>
 </div>
    
      </div>
      
       <div class="rsm_sch">
       
      <div class="rsm_schedule"> <span class="rsm_schedule_wr">简历完整度：</span> <span class="rsm_schedule_b">
      <i style="width:<?php echo $_smarty_tpl->tpl_vars['resume']->value['integrity'];?>
%;"></i></span> <span class="rsm_schedule_s"><?php echo $_smarty_tpl->tpl_vars['resume']->value['integrity'];?>
%</span> 
      </div>
      
	  <?php if ($_smarty_tpl->tpl_vars['resume']->value['defaults']==1) {?> 
      <div class="rsm_state"> 
	  <span class="rsm_schedule_wr">简历状态：</span><a href="index.php?c=privacy">  <?php if ($_smarty_tpl->tpl_vars['defjob']->value['status']==2) {?> 保密<?php } else { ?>公开<?php }?><span class="rsm_schedule_set">设置</span></a>
      </div>
     <?php }?> 
     
     <?php if ($_smarty_tpl->tpl_vars['resume']->value['r_status']=='1') {?>
      
        <div class="rsm_state"> 
          
	   <span class="rsm_schedule_wr">相似职位：</span>
       
	    <a href="index.php?c=likejob&id=<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
" >查看详情</a> 
      </div>
       <?php }?> 
        <div class="rsm_state"> 
	   <span class="rsm_schedule_wr">审核状态：</span>
	    <?php if ($_smarty_tpl->tpl_vars['resume']->value['r_status']=='1') {?>
        <font color="#288ee0">已审核</font><?php } elseif ($_smarty_tpl->tpl_vars['resume']->value['r_status']=='0') {?>
        <font color="#FF0000">待审核</font><?php } elseif ($_smarty_tpl->tpl_vars['resume']->value['r_status']=='3') {?>
        <font color="#FF0000">审核不通过</font>
        <?php if ($_smarty_tpl->tpl_vars['resume']->value['statusbody']) {?>原因：<?php echo $_smarty_tpl->tpl_vars['resume']->value['statusbody'];
}
}?>
      </div>
     <?php if (($_smarty_tpl->tpl_vars['resume']->value['edu']==0||$_smarty_tpl->tpl_vars['resume']->value['training']==0||$_smarty_tpl->tpl_vars['resume']->value['skill']==0||$_smarty_tpl->tpl_vars['resume']->value['work']==0||$_smarty_tpl->tpl_vars['resume']->value['project']==0||$_smarty_tpl->tpl_vars['resume']->value['other']==0)&&!$_smarty_tpl->tpl_vars['resume']->value['doc']) {?>
      <div class="member_index_resume_msg">
      
        <div class="member_index_resume_msg_r">
          <div class="member_index_resume_msg_r_t"> 您还有以下资料没有填写 <span class="member_index_resume_msg_span">（为了更快的找到工作，建议您立即完善简历！）</span> </div>
		  <?php if ($_smarty_tpl->tpl_vars['resume']->value['work']==0) {?><a href="index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
&type=work" class="member_index_resume_msg_a">+ 工作经历</a><?php }?>
          <?php if ($_smarty_tpl->tpl_vars['resume']->value['edu']==0) {?><a href="index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
&type=edu" class="member_index_resume_msg_a">+ 教育经历</a><?php }?>
          <?php if ($_smarty_tpl->tpl_vars['resume']->value['training']==0) {?><a href="index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
&type=training" class="member_index_resume_msg_a">+ 培训经历</a><?php }?>
          <?php if ($_smarty_tpl->tpl_vars['resume']->value['skill']==0) {?><a href="index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
&type=skill" class="member_index_resume_msg_a">+ 职业技能</a><?php }?>
          <?php if ($_smarty_tpl->tpl_vars['resume']->value['project']==0) {?><a href="index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
&type=project" class="member_index_resume_msg_a">+ 项目经历</a><?php }?>
          <?php if ($_smarty_tpl->tpl_vars['resume']->value['other']==0) {?><a href="index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
&type=other" class="member_index_resume_msg_a">+ 其他信息</a><?php }?> 
		  <?php if ($_smarty_tpl->tpl_vars['defjob']->value['description']=='') {?><a href="index.php?c=addresumeson&eid=<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
&type=desc" class="member_index_resume_msg_a">+ 自我评价</a><?php }?></div>
      </div>
      
      <?php }?> 
       </div> 
       <?php if ($_smarty_tpl->tpl_vars['resume']->value['defaults']=="1"&&$_smarty_tpl->tpl_vars['resume']->value['r_status']=='1') {?>
		<ul class=" rsm_state_czbox"> 
			<li style="width:48%;"> 
			<a href="index.php?c=getserver&id=<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
&server=1"><?php if ($_smarty_tpl->tpl_vars['resume']->value['top']==1&&$_smarty_tpl->tpl_vars['resume']->value['topdatetime']>0) {?>已置顶 <?php } else { ?>简历置顶 <?php }?></a>
			</li>
	      
		</ul> <?php }?>
    <div class="rsm_cz">
      <dl onclick="layer_del('','index.php?c=resumeset&update=<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
');">
        <dt><i class="rsg_cion yun_iconfont_sx"></i></dt>
        <dd>刷新</dd>
      </dl>
      <dl>
        <a href="index.php?c=modify&eid=<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
" class="wap_member_msg_jl_sc">
        <dt><i class="rsg_cion yun_iconfont_xg"></i></dt>
        <dd>修改</dd>
        </a>
      </dl>
      <?php if ($_smarty_tpl->tpl_vars['resume']->value['defaults']!="1") {?>
      <dl onclick="layer_del('','index.php?c=resumeset&def=<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
');">
        <dt><i class="rsg_cion rsg_cion_mr yun_iconfont_mr"></i></dt>
        <dd>默认简历</dd>
      </dl>
      <?php } else { ?>
      <dl>
        <dt><i class="rsg_cion yun_iconfont_ymr"></i></dt>
        <dd>已默认</dd>
      </dl>
      <?php }?>
      <dl onclick="layer_del('确定要删除？','index.php?c=resumeset&del=<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
');">
        <dt><i class="rsg_cion yun_iconfont_sc"></i></dt>
        <dd>删除</dd>
      </dl>
    </div>
  </div>
  <?php } ?>
  <div class="mt10"><?php if ($_smarty_tpl->tpl_vars['maxnum']->value>0) {?><a href="index.php?c=addresume" class="rsm_cj">创建简历</a><?php } else { ?><a href="javascript:void(0)" onclick="layermsg('你的简历数已经达到系统设置的简历数了');return false;" class="rsm_cj">创建简历</a><?php }?></div>
</div>

<div id="showmsg" style="display:none; width: 400px;">
  <div id="infobox">
    <div class="admin_Operating_sh" style="padding:10px; ">
      <div class="admin_Operating_sh_h1" style="padding:5px;">审核说明：
        <div class="user_Audit_box" id="msgs"></div>
      </div>
      <div class="admin_Operating_sub" style="margin-top:10px;"> &nbsp;&nbsp;
        <input type="button" onclick="layer.closeAll();" class="com_pop_bth" value='确认'>
      </div>
    </div>
  </div>
</div>
<?php echo '<script'; ?>
>
function checkdef(eid){
	$.post("index.php?c=resume",{type:"def_job",eid:eid},function(data){ 
	})
}
function app_height_status(id) {
	$("#wname .job_box_botton").html("<a class=\"job_box_yes job_box_botton2\" href=\"javascript:void(0);\" onclick=\"layer_del('','index.php?c=resumeset&height=" + id + "');\">申请</a>");
	wnamehtml=$("#wname").html();
	$("#wname").html('');
	layer.open({
		type: 1,
		title: '申请高级简历',
		closeBtn: [0, true],
		border: [10, 0.3, '#000', true],
		area: ['300px', 'auto'],
		content:wnamehtml,
		cannel: $("#wname").html(wnamehtml)
	});
}
function showmsgs(msg) {
	$("#msgs").html(msg);
	showmsghtml=$("#showmsg").html();
	layer.open({
		type: 1,
		title: '查看原因',
		closeBtn: [0, true],
		border: [10, 0.3, '#000', true],
		area: ['300px', '200px'],
		content:showmsghtml
	})
} 

function entr_resume_free(id){
	$.post(wapurl+"/member/index.php?c=canceltrust",{id:id},function(data){
		var data=eval('('+data+')'); 
		if(data.url){
			layermsg(data.msg,Number(data.tm),function(){location.reload();});return false;	
		}else{
			layermsg(data.msg,Number(data.tm),function(){location.href=data.url;});return false;
		} 		
	});
}
function entrust(msg,id){
	
	if(msg){
		layer.open({
			content: msg,
			btn: ['确认', '取消'],
			shadeClose: false,
			yes: function(){
				layer.closeAll();
				layer_load('执行中，请稍候...');
				$.post(wapurl+"/member/index.php?c=canceltrust",{id:id},function(data){
					layer.closeAll();
					var data=eval('('+data+')');
					if(data.url=='1'){ 
						layermsg(data.msg,Number(data.tm),function(){location.reload();});return false;
					}else{
						layermsg(data.msg,Number(data.tm),function(){location.href=data.url;});return false;
					}
				});
			} 
		}); 
	}else{
		$.post(wapurl+"/member/index.php?c=canceltrust",{id:id},function(data){
			var data=eval('('+data+')'); 
			if(data.url){
				layermsg(data.msg,Number(data.tm),function(){location.reload();});return false;	
			}else{
				layermsg(data.msg,Number(data.tm),function(){location.href=data.url;});return false;
			} 		
		});
	} 
} 
<?php echo '</script'; ?>
> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
