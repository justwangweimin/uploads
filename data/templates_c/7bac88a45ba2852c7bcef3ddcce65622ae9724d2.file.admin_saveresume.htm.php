<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-25 09:57:21
         compiled from "D:\xampp\htdocs\uploads\app\template\admin\admin_saveresume.htm" */ ?>
<?php /*%%SmartyHeaderCode:8714435135a9218015cd6a6-82644916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bac88a45ba2852c7bcef3ddcce65622ae9724d2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\admin\\admin_saveresume.htm',
      1 => 1517623480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8714435135a9218015cd6a6-82644916',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'style' => 0,
    'uid' => 0,
    'pytoken' => 0,
    'row' => 0,
    'industry_index' => 0,
    'v' => 0,
    'industry_name' => 0,
    'job_classname' => 0,
    'city_index' => 0,
    'city_name' => 0,
    'city_type' => 0,
    'userdata' => 0,
    'userclass_name' => 0,
    'work' => 0,
    'work_l' => 0,
    'edu' => 0,
    'edu_l' => 0,
    'training' => 0,
    'training_l' => 0,
    'skill' => 0,
    'skill_l' => 0,
    'project' => 0,
    'project_l' => 0,
    'other' => 0,
    'other_l' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a921801a853a7_29364473',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a921801a853a7_29364473')) {function content_5a921801a853a7_29364473($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/job.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/class.public.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/class.public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<!--
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/member_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/member/user/js/search.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/check_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
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

<?php echo '<script'; ?>
 language="javascript">
function saveexpect(){
	var pytoken = $.trim($("#pytoken").val());
	var name = $.trim($("#expect_name").val());
	var hy = $.trim($("#hy_val").val());
	var job_classid = $.trim($("#job_class").val());
	var provinceid = $.trim($("#provinceid").val());
	var cityid = $.trim($("#cityidid").val());
	var three_cityid = $.trim($("#three_cityid").val());
	var minsalary = $.trim($("#minsalary").val());
	var maxsalary = $.trim($("#maxsalary").val());
	var uid = $.trim($("#uid").val());
	var report = $.trim($("#user_report_val").val());
	var typeid = $.trim($("#user_type_val").val());
	var jobstatus = $.trim($("#user_jobstatus_val").val());
	var eid = $.trim($("#eid").val());
	if(name==""){parent.layer.msg('请填写期望岗位！', 2, 8);return false; }
	if(hy==""){parent.layer.msg('请选择从事行业！', 2, 8);return false;}
	if(job_classid==""){parent.layer.msg('请选择从事职位！', 2, 8);return false;}
	if(minsalary==""||minsalary=="0"){parent.layer.msg('请填写期望月薪！', 2, 8);return false;}
	if(maxsalary&&parseInt(maxsalary)<=parseInt(minsalary)){parent.layer.msg('最高薪资必须大于最低薪资！', 2, 8);return false;}
	if(provinceid==''){parent.layer.msg('请选择工作地点！', 2, 8);return false;}
	if(report==""){parent.layer.msg('请选择到岗时间！', 2, 8);return false;}
	if(jobstatus==""){parent.layer.msg('请选择求职状态！', 2, 8);return false;}
	parent.layer.load('执行中，请稍候...',0);
	$.post("index.php?m=admin_resume&c=saveexpect",{name:name,hy:hy,job_classid:job_classid,provinceid:provinceid,cityid:cityid,three_cityid:three_cityid,minsalary:minsalary,maxsalary:maxsalary,report:report,eid:eid,submit:"1",uid:uid,pytoken:pytoken,type:typeid,jobstatus:jobstatus},function(data){
		parent.layer.closeAll('loading');
		if(data==0){
			parent.layer.msg('操作失败！', 2, 8);return false;
		}else if(data==1){
			parent.layer.msg('简历数已经超过系统设置的简历数了！', 2, 8);return false;
		}else{
			data=eval('('+data+')');
			if(eid==""){
				window.location.href="index.php?m=admin_resume&c=saveresume&uid="+uid+"&e="+data.id;
			}else{
				$("#addresume").hide();
				if(three_cityid<1){
				    $("#cityshowth").addClass('dn');
				}
				$("#resume").show();
				$("#expect_name_html").html('<div class="admin_td_h">'+data.name+'</div>');
				$("#hy_html").html('<div class="admin_td_h">'+data.hy+'</div>');
				$("#job_class_html").html('<div class="admin_td_h">'+data.job_classname+'</div>');
				$("#salary_html").html('<div class="admin_td_h">￥'+data.minsalary+'-'+data.maxsalary+'</div>');
				$("#cityid_html").html('<div class="admin_td_h">'+data.city+'</div>');
				$("#report_html").html('<div class="admin_td_h">'+data.report+'</div>');
				$("#type_html").html('<div class="admin_td_h">'+data.type+'</div>');
				$("#jobstatus_html").html('<div class="admin_td_h">'+data.jobstatus+'</div>');
				$("#eid").val(data.id);
			}
		}
	});
}
function checkmore(type){
	$("#add"+type).show();
	$("#"+type).hide();
}
function layerClose(type){
	$("#add"+type).hide();
	$("#"+type).show();
	$("#"+type+"_add_button").show();
}
function savework(){
	var eid = $.trim($("#eid").val());
	var id = $.trim($("#workid").val());
	var date=$.trim($("#work_date").val()).split('~');
	var sdate = date[0];
	var edate = date[1];
	var name = $.trim($("#work_name").val());
	var department = $.trim($("#work_department").val());
	var title = $.trim($("#work_title").val());
	var salary = $.trim($("#work_salary").val());
	var content = $.trim($("#work_content").val());
	var pytoken = $.trim($("#pytoken").val());
	var uid = $.trim($("#uid").val());
	if(eid==""){
		parent.layer.msg('请先完善求职意向！', 2,8);
		return false;
	}
	if(name==""){
		parent.layer.msg('请填写单位名称！', 2,8);
		return false;
	}
	if(date==""){
		parent.layer.msg('工作时间不能为空！', 2,8);
		return false
	}
	parent.layer.load('执行中，请稍候...',0);
	$.post("index.php?m=admin_resume&c=work",{sdate:sdate,edate:edate,name:name,department:department,eid:eid,salary:salary,title:title,content:content,id:id,table:"resume_work",submit:"1",uid:uid,pytoken:pytoken},function(data){
		parent.layer.closeAll('loading');
		if(data!=0){
			data=eval('('+data+')');
			$("#work").show();
			$("#addwork").hide();
			if(id>0){
				var html='<div class="admin_saversume_pd"><i class="admin_saversume_pd_icon"></i><div class="admin_saversume_tit"><span class="admin_saversume_tit_b">'+data.name+'</span> 担任职位： <span class="admin_saversume_tit_b">'+data.title+'</span> </div><div>'+data.sdate+' - '+data.edate+'</div><div>'+data.content+'</div><div class="admin_saversume_cz"> <a href="javascript:void(0)" onclick="getresume(\'work\',\''+data.id+'\')" class="admin_new_c_bth">修改</a><a href="javascript:void(0)" onclick="resume_del(\'work\',\''+data.id+'\')"class="admin_new_c_bth admin_new_c_bth_sc">删除</a></div></div>';
				$("#work_"+id).html(html);
			}else{
				var html='<div class="admin_saversume_list" id="work_'+data.id+'"><div class="admin_saversume_pd"><i class="admin_saversume_pd_icon"></i><div class="admin_saversume_tit"><span class="admin_saversume_tit_b">'+data.name+'</span> 担任职位： <span class="admin_saversume_tit_b">'+data.title+'</span> </div><div>'+data.sdate+' - '+data.edate+'</div><div>'+data.content+'</div><div class="admin_saversume_cz"> <a href="javascript:void(0)" onclick="getresume(\'work\',\''+data.id+'\')" class="admin_new_c_bth">修改</a><a href="javascript:void(0)" onclick="resume_del(\'work\',\''+data.id+'\')" class="admin_new_c_bth admin_new_c_bth_sc">删除</a></div></div></diov>';
				$("#work_list").append(html);
			}
			$("#work_add_button").show();
		}else{
			parent.layer.msg('操作失败！', 2,8);
		}
	});
}
function saveedu(){
	var eid = $.trim($("#eid").val());
	var id = $.trim($("#eduid").val());
	var date=$.trim($("#edu_date").val()).split('~');
	var sdate = date[0];
	var edate = date[1];
	var name = $.trim($("#edu_name").val());
	var title = $.trim($("#edu_title").val());
	var education = $.trim($("#user_education_val").val());
	var specialty = $.trim($("#edu_specialty").val());
	var uid = $.trim($("#uid").val());
	var pytoken = $.trim($("#pytoken").val());
	if(eid==""){
		parent.layer.msg('请先完善求职意向！', 2,8);
		return false;
	}
	if(name==""){
		layer.msg('请填写学校名称！', 2,8);
		return false;
	}
	if(date==""){
		parent.layer.msg('在校时间不能为空！', 2,8);
		return false
	}
	parent.layer.load('执行中，请稍候...',0);
	$.post("index.php?m=admin_resume&c=edu",{sdate:sdate,edate:edate,name:name,education:education,specialty:specialty,eid:eid,title:title,id:id,table:"resume_edu",submit:"1",uid:uid,pytoken:pytoken},function(data){
		parent.layer.closeAll('loading');
		if(data!=0){
			data=eval('('+data+')');
			$("#edu").show();
			$("#addedu").hide();
			if(id>0){
				var html='<div class="admin_saversume_pd"><i class="admin_saversume_pd_icon"></i><div class=\"admin_saversume_tit\"><span class=\"admin_saversume_tit_b\">'+data.name+'</span> 班级职务： <span class=\"admin_saversume_tit_b\">'+data.title+'</span></div><div>'+data.sdate+' - '+data.edate+'</div><div> 最高学历：'+data.educationval+' 所学专业：'+data.specialty+'</div><div class=\"admin_saversume_cz\"><a href="javascript:void(0)" onclick="getresume(\'edu\',\''+data.id+'\')" class=\"admin_new_c_bth\">修改</a><a href=\"javascript:void(0)\" onclick=\"resume_del(\'edu\',\''+data.id+'\')\"class=\"admin_new_c_bth admin_new_c_bth_sc\">删除</a></div></div>';
				$("#edu_"+id).html(html);
			}else{
				var html='<div class=\"admin_saversume_list\" id="edu_'+data.id+'"><div class="admin_saversume_pd"><i class="admin_saversume_pd_icon"></i><div class=\"admin_saversume_tit\"><span class=\"admin_saversume_tit_b\">'+data.name+'</span> 班级职务： <span class=\"admin_saversume_tit_b\">'+data.title+'</span></div><div>'+data.sdate+' - '+data.edate+'</div><div> 最高学历：'+data.educationval+' 所学专业：'+data.specialty+'</div><div class=\"admin_saversume_cz\"><a href="javascript:void(0)" onclick="getresume(\'edu\',\''+data.id+'\')"class=\"admin_new_c_bth\">修改</a><a href=\"javascript:void(0)\" onclick=\"resume_del(\'edu\',\''+data.id+'\')\"class=\"admin_new_c_bth admin_new_c_bth_sc\">删除</a></div></div></div>';
				$("#edu").append(html);
			}
			$("#edu_add_button").show();
		}else{
			parent.layer.msg('操作失败！', 2,8);
		}
	});
}
function savetraining(){
	var eid = $.trim($("#eid").val());
	var id = $.trim($("#trainingid").val());
	var date=$.trim($("#training_date").val()).split('~');
	var sdate = date[0];
	var edate = date[1];
	var name = $.trim($("#training_name").val());
	var title = $.trim($("#training_title").val());
	var content = $.trim($("#training_content").val());
	var uid = $.trim($("#uid").val());
	var pytoken = $.trim($("#pytoken").val());
	if(eid==""){
		parent.layer.msg('请先完善求职意向！', 2,8);
		return false;
	}
	if(name==""){
		parent.layer.msg('请填写培训中心！', 2,8);
		return false;
	}
	if(date==""){
		parent.layer.msg('培训时间不能为空！', 2,8);
		return false
	}
	parent.layer.load('执行中，请稍候...',0);
	$.post("index.php?m=admin_resume&c=training",{sdate:sdate,edate:edate,name:name,eid:eid,title:title,content:content,id:id,table:"resume_training",submit:"1",uid:uid,pytoken:pytoken},function(data){
		parent.layer.closeAll('loading');
		if(data!=0){
			data=eval('('+data+')');
			$("#training").show();
			$("#addtraining").hide();
			if(id>0){
				var html='<div class="admin_saversume_pd"><i class="admin_saversume_pd_icon"></i><div class="admin_saversume_tit"><span class="admin_saversume_tit_b">'+data.name+'</span> 培训方向： <span class="admin_saversume_tit_b">'+data.title+'</span> </div><div>'+data.sdate+' - '+data.edate+'</div><div>'+data.content+'</div><div class="admin_saversume_cz"><a href="javascript:void(0)" onclick="getresume(\'training\',\''+data.id+'\')"class=\"admin_new_c_bth\">修改</a><a href=\"javascript:void(0)\" onclick=\"resume_del(\'training\',\''+data.id+'\')\"class=\"admin_new_c_bth admin_new_c_bth_sc\">删除</a></div></div>';
				$("#training_"+id).html(html);
			}else{
				var html='<div class="admin_saversume_list" id="training_'+data.id+'"><div class="admin_saversume_pd"><i class="admin_saversume_pd_icon"></i><div class="admin_saversume_tit"><span class="admin_saversume_tit_b">'+data.name+'</span> 培训方向： <span class="admin_saversume_tit_b">'+data.title+'</span> </div><div>'+data.sdate+' - '+data.edate+'</div><div>'+data.content+'</div><div class="admin_saversume_cz"><a href="javascript:void(0)" onclick="getresume(\'training\',\''+data.id+'\')"class=\"admin_new_c_bth\">修改</a><a href=\"javascript:void(0)\" onclick=\"resume_del(\'training\',\''+data.id+'\')\"class=\"admin_new_c_bth admin_new_c_bth_sc\">删除</a></div></div></div>';
				$("#training_list").append(html);
			}
			$("#training_add_button").show();
		}else{
			parent.layer.msg('操作失败！', 2,8);
		}
	});
}
function saveproject(){
	var eid = $.trim($("#eid").val());
	var id = $.trim($("#projectid").val());
	var date=$.trim($("#project_date").val()).split('~');
	var sdate = date[0];
	var edate = date[1];
	var name = $.trim($("#project_name").val());
	var sys = $.trim($("#project_sys").val());
	var title = $.trim($("#project_title").val());
	var content = $.trim($("#project_content").val());
	var uid = $.trim($("#uid").val());
	var pytoken = $.trim($("#pytoken").val());
	if(eid==""){
		parent.layer.msg('请先完善求职意向！', 2,8);
		return false;
	}
	if(name==""){
		parent.layer.msg('请填写项目名称！', 2,8);
		return false;
	}
	if(date==""){
		parent.layer.msg('项目时间不能为空！', 2,8);
		return false
	}
	parent.layer.load('执行中，请稍候...',0);
	$.post("index.php?m=admin_resume&c=project",{sdate:sdate,edate:edate,name:name,sys:sys,eid:eid,title:title,content:content,id:id,table:"resume_project",submit:"1",uid:uid,pytoken:pytoken},function(data){
		parent.layer.closeAll('loading');
		if(data!=0){
			data=eval('('+data+')');
			$("#project").show();
			$("#addproject").hide();
			if(id>0){
				var html='<div class="admin_saversume_pd"><i class="admin_saversume_pd_icon"></i><div class="admin_saversume_tit"><span class=\"admin_saversume_tit_b\">'+data.name+'</span> 担任职位 <span class=\"admin_saversume_tit_b\">'+data.title+'</span></div><div>'+data.sdate+'-'+data.edate+'</div><div>'+data.content+'</div><div class="\admin_saversume_cz\"><a href="javascript:void(0)" onclick="getresume(\'project\','+data.id+')"class=\"admin_new_c_bth\">修改</a></th><td><a href=\"javascript:void(0)\" onclick=\"resume_del(\'project\','+data.id+')\"class=\"admin_new_c_bth admin_new_c_bth_sc\">删除</a></div>';
				$("#project_"+id).html(html);
			}else{
				var html='<div class=\"admin_saversume_list\"id="project_'+data.id+'"><div class="admin_saversume_pd"><i class="admin_saversume_pd_icon"></i><div class="admin_saversume_tit"><span class=\"admin_saversume_tit_b\">'+data.name+'</span> 担任职位 <span class=\"admin_saversume_tit_b\">'+data.title+'</span></div><div>'+data.sdate+'-'+data.edate+'</div><div>'+data.content+'</div><div class="\admin_saversume_cz\"><a href="javascript:void(0)" onclick="getresume(\'project\','+data.id+')"class=\"admin_new_c_bth\">修改</a></th><td><a href=\"javascript:void(0)\" onclick=\"resume_del(\'project\','+data.id+')\"class=\"admin_new_c_bth admin_new_c_bth_sc\">删除</a></div></div></div>';
				$("#project_list").append(html);
			}

			$("#project_add_button").show();

		}else{
			parent.layer.msg('操作失败！', 2,8);
		}
	});
}
function saveother(){
	var eid = $.trim($("#eid").val());
	var id = $.trim($("#otherid").val());
	var name = $.trim($("#other_name").val());
	var content = $.trim($("#other_content").val());
	var uid = $.trim($("#uid").val());
	var pytoken = $.trim($("#pytoken").val());
	if(eid==""){
		parent.layer.msg('请先完善求职意向！', 2,8);
		return false;
	}
	if(name==""){
		parent.layer.msg('请填写其他标题！', 2,8);
		return false;
	}
	parent.layer.load('执行中，请稍候...',0);
	$.post("index.php?m=admin_resume&c=other",{eid:eid,name:name,content:content,id:id,table:"resume_other",submit:"1",uid:uid,pytoken:pytoken},function(data){
		parent.layer.closeAll('loading');
		if(data!=0){
			data=eval('('+data+')');
			$("#other").show();
			$("#addother").hide();
			if(id>0){
				var html='<div class="admin_saversume_pd"><i class="admin_saversume_pd_icon"></i><div  class="admin_saversume_tit"><span class="admin_saversume_tit_b">'+data.name+'</span></div><div ></th><td style="width:320px"><em>'+data.content+'</em></div> <div class="admin_saversume_cz"><a href="javascript:void(0)" onclick="getresume(\'other\','+data.id+')"class=\"admin_new_c_bth\">修改</a><a href=\"javascript:void(0)\" onclick=\"resume_del(\'other\','+data.id+')\"class=\"admin_new_c_bth admin_new_c_bth_sc\">删除</a></div></div>';
				$("#other_"+id).html(html);
			}else{
				var html='<div class="admin_saversume_list"  id="other_'+data.id+'"><div class="admin_saversume_pd"><i class="admin_saversume_pd_icon"></i><div  class="admin_saversume_tit"><span class="admin_saversume_tit_b">'+data.name+'</span></div><div ></th><td style="width:320px"><em>'+data.content+'</em></div> <div class="admin_saversume_cz"><a href="javascript:void(0)" onclick="getresume(\'other\','+data.id+')"class=\"admin_new_c_bth\">修改</a><a href=\"javascript:void(0)\" onclick=\"resume_del(\'other\','+data.id+')\"class=\"admin_new_c_bth admin_new_c_bth_sc\">删除</a></div></div></div>';
				$("#other_list").append(html);
			}
			$("#other_add_button").show();
		}else{
			parent.layer.msg('操作失败！', 2, 8);
		}
	});
}
function checkClose(type){
	$("#add"+type).hide();
	$("#"+type).show();
}

function getresume(type,id){ 
	$("#add"+type+" .admin_save_sub").val("修 改");
	var pytoken = $.trim($("#pytoken").val());
	$("#add"+type).show();
	parent.layer.load('执行中，请稍候...',0);
	$.post("index.php?m=admin_resume&c=resume_ajax",{type:type,id:id,pytoken:pytoken},function(data){
		parent.layer.closeAll('loading');
		var data=eval('('+data+')');
		if(type=="skill"){
			$("#skill_name").val(data.name);
			$("#skill_longtime").val(data.longtime);
			$("#skillid").val(data.id);
			if(data.pic!=''){
				$("#skill_pic").val(data.pic);
				$("#imgskill").attr('src','.'+data.pic);
				$("#imgskill").removeClass('none');
			}else{
				$("#imgskill").addClass('none');
			}
		}
		if(type=="work"){
			$("#work_name").val(data.name);
			$("#work_date").val(data.sdate+' ~ '+data.edate);
			$("#work_department").val(data.department);
			$("#work_title").val(data.title);
			$("#work_salary").val(data.salary);
			$("#work_content").val(data.content);
			$("#workid").val(data.id);
		}
		if(type=="project"){
			$("#project_name").val(data.name);
			$("#project_date").val(data.sdate+' ~ '+data.edate);
			$("#project_sys").val(data.sys);
			$("#project_title").val(data.title);
			$("#project_content").val(data.content);
			$("#projectid").val(data.id);
		}
		if(type=="edu"){
			$("#edu_name").val(data.name);
			$("#edu_date").val(data.sdate+' ~ '+data.edate);
			$("#user_education_val").val(data.education);	
			$("#user_education_name").val(data.educationval);	
			$("#edu_title").val(data.title);	
			$("#edu_specialty").val(data.specialty);						
			$("#eduid").val(data.id);
			layui.use(['form'], function(){
				var form = layui.form;
				form.render();
			});
		}
		if(type=="training"){
			$("#training_name").val(data.name);
			$("#training_sdate").val(data.sdate+' ~ '+data.edate);
			$("#training_title").val(data.title);
			$("#training_content").val(data.content);
			$("#trainingid").val(data.id);
		}
		if(type=="other"){
			$("#other_name").val(data.name);
			$("#other_content").val(data.content);
			$("#otherid").val(data.id);
		}
		$("#"+type+"_add_button").hide();
	});
}
function checkmore2(type){
	var eid=$.trim($("#eid").val());
	$("#add"+type+" .admin_save_sub").val("添 加");
	if(eid==""){
		parent.layer.msg('请先完善求职意向！', 2, 8);return false;
	} 
	$("#"+type+"_add_button").hide();
	$("#"+type+"_botton").attr("class","jianli_list_noadd");
	$("#"+type+"_botton").html('<em>暂不填写</em>');
	$("#"+type+"_botton").attr("onclick","checkClose2('"+type+"');");
	$("#add"+type).show();
	if(type=="skill"){
		$("#skill_name").val('');
		$("#skill_longtime").val('');
		$("#skillid").val('');
		$("#skill_pic").val('');
	}
	if(type=="work"){
		$("#work_name").val('');
		$("#work_date").val('');
		$("#work_department").val('');
		$("#work_title").val('');
		$("#work_content").val('');
		$("#workid").val('');
	}
	if(type=="project"){
		$("#project_name").val('');
		$("#project_date").val('');
		$("#project_sys").val('');
		$("#project_title").val('');
		$("#project_content").val('');
		$("#projectid").val('');
	}
	if(type=="edu"){
		$("#edu_name").val('');
		$("#edu_date").val('');
		$("#educationcid").val('');
		$("#educationc").val('请选择最高学历');
		$("#edu_title").val('');
		$("#edu_specialty").val('');
		$("#eduid").val('');
	}
	if(type=="training"){
		$("#training_name").val('');
		$("#training_date").val('');
		$("#training_title").val('');
		$("#training_content").val('');
		$("#trainingid").val('');
	}
	if(type=="other"){
		$("#other_name").val('');
		$("#other_content").val('');
		$("#otherid").val('');
	}
}
function checkClose2(type){
	$("#"+type).hide();
	$("#"+type+"_botton").attr("class","jianli_list_add");
	$("#"+type+"_botton").html('<em>添加</em>');
	$("#"+type+"_botton").attr("onclick","checkmore2('"+type+"');");
	$("#Add"+type).show();
}
function toDate(str){
    var sd=str.split("-");
    return new Date(sd[0],sd[1],sd[2]);
}
function resume_del(table,id){
	var eid = $.trim($("#eid").val());
	var uid = $.trim($("#uid").val());
	var pytoken = $.trim($("#pytoken").val());
	parent.layer.confirm('确定要删除该项内容？', function(){
		parent.layer.load('执行中，请稍候...',0);
		$.post("index.php?m=admin_resume&c=resume_del",{table:table,id:id,eid:eid,uid:uid,pytoken:pytoken},function(data){
			parent.layer.closeAll('loading');
			if(data!="0"){
				$("#"+table+'_'+id).remove();
				parent.layer.msg('删除成功！', 2,9);
			}else{
				parent.layer.msg('网络繁忙，请稍后！', 2,8);
			}
		});
	});
}
var weburl="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";
function showjob(id){
	$("#td"+id).attr("class","focusItemTop mOutItem");
	$("#span"+id).hide();
	$("#div"+id).show();
}
function guanbiselect(id){
   $("#td"+id).bind("mouseleave", function(){
	$("#td"+id).attr("class","blurItem");
	$("#span"+id).show();
	$("#div"+id).hide();
   });
}
function check_this(id){
	if($("#job_class_"+id).attr("disabled") != 'disabled'){
		if($("#job_class_"+id).attr("checked")!="checked"){
		 	var pid = $("#job_class_"+id).attr('data-pid');
			 $("#job_class_"+id).removeAttr("checked");
			 unsel(id,pid);
		}else{
			 var pid = $("#job_class_"+id).attr('data-pid');
			 $("#job_class_"+id).attr("checked","true");
			 addsel(id,pid);
		}
	}
}
function check_all(id){
	if($("#all"+id).attr("checked")!="checked"){
		$(".label"+id).removeAttr("disabled");
		$(".label"+id).removeAttr("checked");
		unsel(id);
	}else{
		$("#all"+id).attr("checked","true");
		$(".label"+id).attr("disabled","disabled");
		$(".label"+id).attr("checked","true");
		addsel(id);
	}
}
function addsel(id,pid){

	//判断数量
	var i=0;
	$(".selall").each(function(){
		i++;
	});
	if(parseInt(pid)>0){
		if(i>5){
			unsel(id,pid);
			parent.layer.msg('您最多只能选择五项！', 2,8);
			return false;
		}else{
			var name = $('#job_class_'+id).attr('data-name');
			html = '<li class="job_class_'+id+' parent_'+pid+'"><a class="clean g3 selall" href="javascript:void(0);" data-val="'+id+'+'+name+'"><span class="text">'+name+'</span><span class="delete" data-id="'+id+'" data-pid ="'+pid+'">移除</span></a></li>';
			$('.job_class_'+id).remove();
			$('.selected').append(html);
		}
	}else{
		if(i>4){
			unsel(id);
			parent.layer.msg('您最多只能选择五项！', 2,8);
			return false;
		}else{
			var name = $('#all'+id).attr('data-name');
			html = '<li class="all'+id+'"><a class="clean g3 selall" href="javascript:void(0);"  data-val="'+id+'+'+name+'"><span class="text">'+name+'</span><span class="delete" data-id="'+id+'">移除</span></a></li>';
			$('.parent_'+id).remove();
			$('.all'+id).remove();
			$('.selected').append(html);
		}
	}
}
function unsel(id,pid){
	if(parseInt(pid)>0){
		$('.job_class_'+id).remove();
		$('#job_class_'+id).removeAttr("checked","");
	}else{
		$('.all'+id).remove();
		$('#all'+id).removeAttr("checked","");
		$('.label'+id).removeAttr("disabled");
		$('.label'+id).removeAttr("checked");
	}
}
function determine(id){
	var check_val,name_val;
	$(".selall").each(function(){
		var info =$(this).attr("data-val").split("+");
		check_val+=","+info[0];
		name_val+="+"+info[1];
	});
	if(check_val){
		 check_val = check_val.replace("undefined,","");
	  $("#job_class").val(check_val);
	}
 	if(name_val){
		name_val = name_val.replace("undefined+","");
  		$("#workadds_job").val(name_val);
	}
	layer.closeAll();
} 
function checkskill(){
	var name = $.trim($("#skill_name").val());
	var longtime = $.trim($("#skill_longtime").val());
	if(name==""){
		parent.layer.msg('请填写技能名称！', 2, 8);
		return false;
	}
	if(longtime==""||longtime=="0"){
		parent.layer.msg('请填写掌握时间！', 2, 8);
		return false;
	}
	$("#skillbd").submit();
}
<?php echo '</script'; ?>
>
<style>
* {
	margin: 0;
	padding: 0;
}
body, div {
	margin: 0;
	padding: 0;
}
.no_border {
	border-bottom: medium none;
}
.table_form a {
	color: #3d84b8;
}
</style>
<title>后台管理</title>
</head>
<body class="body_ifm">
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/index_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="clear"></div>
<div class="infoboxp">
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">该页面展示了简历信息。</div>
</div>
</div>

  <div class="addresume_box mt10">
    <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
    <input type="hidden" name="uid" id='uid' value="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">
    <input type="hidden" name="pytoken" id="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
    <input type="hidden" name="eid" id='eid' <?php if ($_smarty_tpl->tpl_vars['row']->value['id']) {?>value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"<?php }?>>
    <div class="admin_add_tit"><span class="admin_add_tit_s"><i class="yun_resume_h1_icon yun_resume_h1_iconyx"></i>意向岗位</span></div>
    <div id="addresume" <?php if ($_smarty_tpl->tpl_vars['row']->value['id']) {?> style='display:none'<?php }?>>
    <form class="layui-form">
      <div class="admin_resume_box">
      <div class="admin_add_list">
        <div class="admin_add_list_name">简历名称</div>
        <div class="admin_add_list_right">
          <input type="text" name="name" id="expect_name" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
">
        </div>
      </div>
      <div class="admin_add_list">
        <div class="admin_add_list_name">期望从事行业</div>
        <div class="admin_add_list_right">
          <div class="layui-form-item">
            <div class="layui-input-block">
              <div class="layui-input-inline">
                <select name="hy" id="hy_val" >
                  <option>请选择</option>
                  
						 <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
							
                  <option  value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"
							 <?php if ($_smarty_tpl->tpl_vars['row']->value['hy']==$_smarty_tpl->tpl_vars['v']->value) {?>
							  selected
								  <?php }?>
								  ><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
 </option>
                  
							  <?php } ?>
							
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="admin_add_list">
        <div class="admin_add_list_name">期望从事职位</div>
        <div class="admin_add_list_right">
          <div class="admin_td_h">
            <input id="job_class" type="hidden" name='job_post' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['job_classid'];?>
" name="job_class">
            <input id="workadds_job" class="expect_text"  type="button" onclick="index_job(5, '#workadds_job', '#job_class','','<?php echo $_smarty_tpl->tpl_vars['row']->value['job_classid'];?>
');" style=" float:left;" value="<?php if ($_smarty_tpl->tpl_vars['job_classname']->value) {
echo $_smarty_tpl->tpl_vars['job_classname']->value;
} else { ?>请选择职位<?php }?>">
          </div>
        </div>
      </div>
      <div class="admin_add_list">
        <div class="admin_add_list_name">期望月薪</div>
        <div class="admin_add_list_right">
          <div>
            <input type="text" id="minsalary" name="minsalary" size="6" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['minsalary']) {
echo $_smarty_tpl->tpl_vars['row']->value['minsalary'];
}?>" class="admin_text_w70">
            -
            <input type="text" id="maxsalary" name="maxsalary" size="6" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['maxsalary']) {
echo $_smarty_tpl->tpl_vars['row']->value['maxsalary'];
}?>"class="admin_text_w70">
          </div>
        </div>
      </div>
      <div class="admin_add_list">
        <div class="admin_add_list_name">工作地点</div>
        <div class="admin_add_list_right">
          <div class="layui-form-item">
            <div class="layui-input-inline">
              <select name="provinceid" id="provinceid" lay-filter="citys">
                <option value="">请选择</option>
                
						  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						  
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['provinceid']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>
							><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
                
						  <?php } ?>
						
              </select>
            </div>
            <div class="layui-input-inline">
              <select name="cityid" lay-filter="citys" id="cityid">
                <option value="">请选择</option>
                
						  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['row']->value['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						  
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['cityid']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option><?php } ?>
						
              </select>
            </div>
            <div class="layui-input-inline">
              <select name="three_cityid" lay-filter="three_cityid" id="three_cityid">
                <option value="">请选择</option>
                
						  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['row']->value['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						  
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['three_cityid']==$_smarty_tpl->tpl_vars['v']->value) {?> selected<?php }?>
							><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
 </option>
                
						  <?php } ?>
						
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="admin_add_list">
        <div class="admin_add_list_name">到岗时间</div>
        <div class="admin_add_list_right">
          <div class="layui-form-item">
            <div class="layui-input-block">
              <div class="layui-input-inline">
                <select name="report" id="user_report_val" >
                  <option>请选择</option>
                  
						 <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
							
                  <option  value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"
							 <?php if ($_smarty_tpl->tpl_vars['row']->value['report']==$_smarty_tpl->tpl_vars['v']->value) {?>
							  selected
								  <?php }?>
								  > <?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
 </option>
                  
							  <?php } ?>
							
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="admin_add_list">
        <div class="admin_add_list_name">工作性质</div>
        <div class="admin_add_list_right">
          <div class="layui-form-item">
            <div class="layui-input-block">
              <div class="layui-input-inline">
                <select name="type" id="user_type_val" >
                  <option>请选择</option>
                  
						 <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
							
                  <option  value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"
							 <?php if ($_smarty_tpl->tpl_vars['row']->value['type']==$_smarty_tpl->tpl_vars['v']->value) {?>
							  selected
								  <?php }?>
								  > <?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
 </option>
                  
							  <?php } ?>
							
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="admin_add_list">
        <div class="admin_add_list_name">求职状态</div>
        <div class="admin_add_list_right">
          <div class="layui-form-item">
            <div class="layui-input-block">
              <div class="layui-input-inline">
                <select name="jobstatus" id="user_jobstatus_val" >
                  <option>请选择</option>
                  
						 <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_jobstatus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
							
                  <option  value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"
							 <?php if ($_smarty_tpl->tpl_vars['row']->value['jobstatus']==$_smarty_tpl->tpl_vars['v']->value) {?>
							  selected
								  <?php }?>
								  > <?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
 </option>
                  
							  <?php } ?>
							
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="admin_add_list">
        <input class="layui-btn layui-btn-normal" type="button" value="修 改" name="submit" onclick="saveexpect()"  >
        <input class="admin_save_sub_qx" type="button" value="取 消" name="submit"  onclick="checkClose('resume');"  >
      </div>
      </div>
    </form>
  </div>
</div>
<div id='resume' <?php if ($_smarty_tpl->tpl_vars['row']->value['id']=='') {?> style='display:none'<?php }?>>
  <div class="admin_saveresume_list">
    <div class="admin_saveresume_list_name">简历名称：</div>
    <div class="" id="expect_name_html">
      <div class="admin_td_h"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</div>
    </div>
  </div>
  <div class="admin_saveresume_list">
    <div class="admin_saveresume_list_name">期望从事行业：</div>
    <div id="hy_html">
      <div class="admin_td_h"><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['row']->value['hy']];?>
</div>
    </div>
  </div>
  <div class="admin_saveresume_list">
    <div class="admin_saveresume_list_name">期望从事职位：</div>
    <div id="job_class_html">
      <div class="" style="width:450px; line-height:36px;"><?php echo $_smarty_tpl->tpl_vars['job_classname']->value;?>
</div>
    </div>
  </div>
  <div class="admin_saveresume_list">
    <div class="admin_saveresume_list_name">期望月薪：</div>
    <div id="salary_html">
      <div class="admin_td_h"><?php if ($_smarty_tpl->tpl_vars['row']->value['maxsalary']) {?>￥<?php echo $_smarty_tpl->tpl_vars['row']->value['minsalary'];?>
-<?php echo $_smarty_tpl->tpl_vars['row']->value['maxsalary'];
} else { ?>￥<?php echo $_smarty_tpl->tpl_vars['row']->value['minsalary'];?>
以上<?php }?></div>
    </div>
  </div>
  <div class="admin_saveresume_list">
    <div class="admin_saveresume_list_name">工作地点：</div>
    <div id="cityid_html">
      <div class="admin_td_h"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['provinceid']];?>
 <?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['cityid']];?>
 <?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['row']->value['three_cityid']];?>
</div>
    </div>
  </div>
  <div class="admin_saveresume_list">
    <div class="admin_saveresume_list_name">到岗时间：</div>
    <div id="report_html">
      <div class="admin_td_h"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['report']];?>
</div>
    </div>
  </div>
  <div class="admin_saveresume_list">
    <div class="admin_saveresume_list_name">工作性质：</div>
    <div  id="type_html">
      <div class="admin_td_h"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['type']];?>
</div>
    </div>
  </div>
  <div class="admin_saveresume_list">
    <div class="admin_saveresume_list_name">求职状态：</div>
    <div id="jobstatus_html">
      <div class="admin_td_h"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['jobstatus']];?>
</div>
    </div>
  </div>
  <div  class="admin_add_pd">
    <input class="admin_save_sub" type="button" value="修 改" name="submit" onclick="checkmore('resume')" >
  </div>
</div>
<div id='work' >
  <div class="admin_add_tit"><span class="admin_add_tit_s"><i class="yun_resume_h1_icon yun_resume_h1_iconjl"></i>工作经历</span></div>
  <div id='work_list'> <?php if ($_smarty_tpl->tpl_vars['work']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['work_l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['work_l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['work']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['work_l']->key => $_smarty_tpl->tpl_vars['work_l']->value) {
$_smarty_tpl->tpl_vars['work_l']->_loop = true;
?>
    <div class="admin_saversume_list" id="work_<?php echo $_smarty_tpl->tpl_vars['work_l']->value['id'];?>
">
      <div class="admin_saversume_pd"> <i class="admin_saversume_pd_icon"></i>
        <div class="admin_saversume_tit"><span class="admin_saversume_tit_b"><?php echo $_smarty_tpl->tpl_vars['work_l']->value['name'];?>
</span> <?php if ($_smarty_tpl->tpl_vars['work_l']->value['title']) {?>担任职位： <span class="admin_saversume_tit_b"><?php echo $_smarty_tpl->tpl_vars['work_l']->value['title'];?>
</span><?php }?> </div>
        <div><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['work_l']->value['sdate'],"%Y-%m");?>
 - <?php if ($_smarty_tpl->tpl_vars['work_l']->value['edate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['work_l']->value['edate'],"%Y-%m");
} else { ?>至今<?php }?></div>
        <div><?php echo $_smarty_tpl->tpl_vars['work_l']->value['content'];?>
</div>
        <div class="admin_saversume_cz"> <a href="javascript:void(0)" onclick="getresume('work','<?php echo $_smarty_tpl->tpl_vars['work_l']->value['id'];?>
')"class="admin_new_c_bth">修改</a> <a href="javascript:void(0)" onclick="resume_del('work','<?php echo $_smarty_tpl->tpl_vars['work_l']->value['id'];?>
')" class="admin_new_c_bth admin_new_c_bth_sc">删除</a> </div>
      </div>
    </div>
    <?php } ?>
    <?php }?> </div>
  <div id='work_add_button' class="admin_add_pd">
    <input class="admin_save_sub" type="button" value="+ 添加工作经历" onclick="checkmore2('work');"name="com_update" >
  </div>
</div>
<div id='addwork' style="display:none">
  <div class="admin_resume_box">
    <div class="admin_add_list">
      <div class="admin_add_list_name">单位名称</div>
      <div class="admin_add_list_right">
        <input type="text" name="work_name" id="work_name" class="input-text"   size='40'>
      </div>
    </div>
    <div class="admin_add_list">
      <div class="admin_add_list_name">工作时间</div>
      <div class="admin_add_list_right">
        <input class="input-text  text_resume_date " type="text" name="date" value="" size="15"  id="work_date"/>
        时间格式：2014-07 
        <?php echo '<script'; ?>
 type="text/javascript">
		layui.use(['laydate'], function(){var laydate = layui.laydate,$ = layui.$;laydate.render({elem: '#work_date',type: 'month',range:'~'});});
        <?php echo '</script'; ?>
></div>
    </div>
    <div class="admin_add_list">
      <div class="admin_add_list_name">担任职位</div>
      <div class="admin_add_list_right">
        <input type="text" name="title" id="work_title" class="input-text"  >
      </div>
    </div>
    <div class="admin_add_list">
      <div class="admin_add_list_name">工作内容</div>
      <div class="admin_add_list_right">
        <textarea id="work_content" class="expect_text_textarea " ></textarea>
      </div>
    </div>
    <div class="admin_add_list">
      <div class="admin_add_list_right">
        <input type="hidden" id="workid" />
        <input class="layui-btn layui-btn-normal" type="button" value=" 添 加 " name="submit" onclick="savework();" >
        <input class="admin_save_sub_qx" type="button" value=" 取 消 " onclick="layerClose('work')" >
      </div>
    </div>
  </div>
</div>
<div id='edu' >
  <div class="admin_add_tit"><span class="admin_add_tit_s"><i class="yun_resume_h1_icon yun_resume_h1_iconjy"></i>教育经历</span></div>
  <?php if ($_smarty_tpl->tpl_vars['edu']->value) {?>
  <?php  $_smarty_tpl->tpl_vars['edu_l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['edu_l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['edu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['edu_l']->key => $_smarty_tpl->tpl_vars['edu_l']->value) {
$_smarty_tpl->tpl_vars['edu_l']->_loop = true;
?>
  <div class="admin_saversume_list" id="edu_<?php echo $_smarty_tpl->tpl_vars['edu_l']->value['id'];?>
">
    <div class="admin_saversume_pd"> 
     <i class="admin_saversume_pd_icon"></i>
      <div class="admin_saversume_tit"><span class="admin_saversume_tit_b"><?php echo $_smarty_tpl->tpl_vars['edu_l']->value['name'];?>
</span> <?php if ($_smarty_tpl->tpl_vars['edu_l']->value['title']) {?>班级职务： <span class="admin_saversume_tit_b"><?php echo $_smarty_tpl->tpl_vars['edu_l']->value['title'];?>
</span><?php }?> </div>
      <div><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['edu_l']->value['sdate'],"%Y-%m");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['edu_l']->value['edate'],"%Y-%m");?>
</div>
      <div> <?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['edu_l']->value['education']]) {?> 最高学历：<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['edu_l']->value['education']];
}?>
        <?php if ($_smarty_tpl->tpl_vars['edu_l']->value['specialty']) {?>所学专业：<?php echo $_smarty_tpl->tpl_vars['edu_l']->value['specialty'];
}?> </div>
    </div>
    
    <div class="admin_saversume_cz"> <a href="javascript:void(0)" onclick="getresume('edu','<?php echo $_smarty_tpl->tpl_vars['edu_l']->value['id'];?>
')"class="admin_new_c_bth">修改</a> <a href="javascript:void(0)" onclick="resume_del('edu','<?php echo $_smarty_tpl->tpl_vars['edu_l']->value['id'];?>
')" class="admin_new_c_bth admin_new_c_bth_sc">删除</a> </div>
    
  </div>
  <?php } ?>
  <?php }?> </div>
<div id='edu_add_button'  class="admin_add_pd">
  <input class="admin_save_sub" type="button" value="+ 添加教育经历" onclick="checkmore2('edu');"name="com_update" >
</div>
<div id='addedu' style="display:none">

  <div class="admin_resume_box">
  <form class="layui-form">
    <div class="admin_add_list">
      <div class="admin_add_list_name">学校名称</div>
      <div class="admin_add_list_right">
        <input type="text" name="name" id="edu_name" class="input-text"   size='40'>
      </div>
    </div>
    <div class="admin_add_list">
      <div class="admin_add_list_name">在校时间</div>
      <div class="admin_add_list_right">
        <input class="input-text text_resume_date " type="text" name="date" value="" size="15"  id="edu_date"/>
        时间格式：2014-07 
        <?php echo '<script'; ?>
 type="text/javascript">
		layui.use(['laydate'], function(){var laydate = layui.laydate,$ = layui.$;laydate.render({elem: '#edu_date',type: 'month',range:'~'});});
        <?php echo '</script'; ?>
></div>
    </div>
    <div class="admin_add_list">
      <div class="admin_add_list_name">最高学历</div>
      <div class="admin_add_list_right">
        <div class="layui-form-item">
          <div class="layui-input-block">
            <div class="layui-input-inline">
              <select name="user_education_name" id="user_education_val" >
                <option>请选择</option>
				 <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                <option  value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
			     <?php } ?>		
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="admin_add_list">
      <div class="admin_add_list_name">班级职务</div>
      <div class="admin_add_list_right">
        <input type="text" name="title" id="edu_title" class="input-text"  >
      </div>
    </div>
    <div class="admin_add_list">
      <div class="admin_add_list_name">所学专业</div>
      <div class="admin_add_list_right">
        <input type="text" name="specialty" id="edu_specialty" class="input-text"  >
      </div>
    </div>
    <div class="admin_add_list">
      <input type="hidden" id="eduid" />
      <input class="layui-btn layui-btn-normal" type="button" value=" 添 加 " name="submit" onclick="saveedu();" >
      <input class="admin_save_sub_qx" type="button" value=" 取 消 " onclick="layerClose('edu')" >
    </div>
  
  </form>
</div>
</div>
<div id='training' >
  <div class="admin_add_tit"><span class="admin_add_tit_s"><i class="yun_resume_h1_icon yun_resume_h1_iconpx"></i>培训经历</span></div>
  <div id="training_list"> <?php if ($_smarty_tpl->tpl_vars['training']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['training_l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['training_l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['training']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['training_l']->key => $_smarty_tpl->tpl_vars['training_l']->value) {
$_smarty_tpl->tpl_vars['training_l']->_loop = true;
?>
    <div class="admin_saversume_list" id="training_<?php echo $_smarty_tpl->tpl_vars['training_l']->value['id'];?>
">
      <div class="admin_saversume_pd"> <i class="admin_saversume_pd_icon"></i>
        <div class="admin_saversume_tit"><span class="admin_saversume_tit_b"><?php echo $_smarty_tpl->tpl_vars['training_l']->value['name'];?>
</span> <?php if ($_smarty_tpl->tpl_vars['training_l']->value['title']) {?>培训方向： <span class="admin_saversume_tit_b"><?php echo $_smarty_tpl->tpl_vars['training_l']->value['title'];?>
</span><?php }?> </div>
        <div><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['training_l']->value['sdate'],"%Y-%m");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['training_l']->value['edate'],"%Y-%m");?>
</div>
        <div><?php echo $_smarty_tpl->tpl_vars['training_l']->value['content'];?>
</div>
        <div class="admin_saversume_cz"> <a href="javascript:void(0)" onclick="getresume('training','<?php echo $_smarty_tpl->tpl_vars['training_l']->value['id'];?>
')"class="admin_new_c_bth">修改</a> <a href="javascript:void(0)" onclick="resume_del('training','<?php echo $_smarty_tpl->tpl_vars['training_l']->value['id'];?>
')"class="admin_new_c_bth admin_new_c_bth_sc">删除</a> </div>
      </div>
    </div>
    <?php } ?>
    <?php }?> </div>
  <div id='training_add_button' class="admin_add_pd">
    <input class="admin_save_sub" type="button" value="+ 添加培训经历" onclick="checkmore2('training');"name="com_update" >
  </div>
</div>
<div id='addtraining' style="display:none">
  <div class="admin_resume_box">
    <div class="admin_add_list">
      <div class="admin_add_list_name">培训中心</div>
      <div class="admin_add_list_right">
        <input type="text" name="name" id="training_name" class="input-text"   size='40'>
      </div>
    </div>
    <div class="admin_add_list">
      <div class="admin_add_list_name">培训时间</div>
      <div class="admin_add_list_right">
        <input class="input-text text_resume_date " type="text" name="date" value="" size="15"  id="training_date"/>
        时间格式：2014-07 
        <?php echo '<script'; ?>
 type="text/javascript">
		layui.use(['laydate'], function(){var laydate = layui.laydate,$ = layui.$;laydate.render({elem: '#training_date',type: 'month',range:'~'});});
        <?php echo '</script'; ?>
></div>
    </div>
    <div class="admin_add_list">
      <div class="admin_add_list_name">培训方向</div>
      <div class="admin_add_list_right">
        <input type="text" name="title" id="training_title" class="input-text"  >
      </div>
    </div>
    <div class="admin_add_list">
      <div class="admin_add_list_name">培训描述</div>
      <div class="admin_add_list_right">
        <textarea id="training_content" class="expect_text_textarea "></textarea>
      </div>
    </div>
    <div class="admin_add_list">
      <input type="hidden" id="trainingid" />
      <input class="layui-btn layui-btn-normal" type="button" value=" 添 加 " name="submit" onclick="savetraining();" >
      <input class="admin_save_sub_qx" type="button" value=" 取 消 " onclick="layerClose('training')" >
    </div>
  </div>
</div>
<div id='skill' >
  <div class="admin_add_tit"><span class="admin_add_tit_s"><i class="yun_resume_h1_icon yun_resume_h1_iconjn"></i>职业技能</span></div>
  <div id="skill_list"> <?php if ($_smarty_tpl->tpl_vars['skill']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['skill_l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['skill_l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['skill']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['skill_l']->key => $_smarty_tpl->tpl_vars['skill_l']->value) {
$_smarty_tpl->tpl_vars['skill_l']->_loop = true;
?>
    <div class="admin_saversume_list" id="skill_<?php echo $_smarty_tpl->tpl_vars['skill_l']->value['id'];?>
">
      <div class="admin_saversume_pd"> <i class="admin_saversume_pd_icon"></i>
        <div class="admin_saversume_tit"><span class="admin_saversume_tit_b"><?php echo $_smarty_tpl->tpl_vars['skill_l']->value['name'];?>
</span> 掌握时间 <span class="admin_saversume_tit_b"><?php echo $_smarty_tpl->tpl_vars['skill_l']->value['longtime'];?>
年</span> </div>
        <div> <?php if ($_smarty_tpl->tpl_vars['skill_l']->value['pic']) {?>
          技能证书： <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['skill_l']->value['pic'];?>
" width="95" height="70"> <?php }?></div>
        <div class="admin_saversume_cz"> <a href="javascript:void(0)" onclick="getresume('skill','<?php echo $_smarty_tpl->tpl_vars['skill_l']->value['id'];?>
')" class="admin_new_c_bth">修改</a> <a href="javascript:void(0)" onclick="resume_del('skill','<?php echo $_smarty_tpl->tpl_vars['skill_l']->value['id'];?>
')"class="admin_new_c_bth admin_new_c_bth_sc">删除</a> </div>
      </div>
    </div>
    <?php } ?>
    <?php }?> </div>
  <div id='skill_add_button' class="admin_add_pd">
    <input class="admin_save_sub" type="button" value="+ 添加技能" onclick="checkmore2('skill');" name="com_update" >
  </div>
</div>
<div id='addskill' style="display:none">
  <div class="admin_resume_box">
  <form id="skillbd" method="post" action="index.php?m=admin_resume&c=skill" target="supportiframe" enctype="multipart/form-data">
    <div class="admin_add_list">
      <div class="admin_add_list_name">技能名称</div>
      <div class="admin_add_list_right">
        <input type="text" name="name" id="skill_name" class="input-text" value="">
        例：英语、C语言、速记</div>
    </div>
    <div class="admin_add_list">
      <div class="admin_add_list_name">掌握时间</div>
      <div class="admin_add_list_right">
        <input type="text" name="longtime" id="skill_longtime" class="input-text" value="" size='5' onkeyup="this.value=this.value.replace(/[^0-9]/g,'')">
        年</div>
    </div>
    <div class="admin_add_list">
      <div class="admin_add_list_name">技能证书</div>
      <div class="admin_add_list_right">
		<button type="button" class="yun_bth_pic adminupload" lay-data="{name: 'pic',imgid: 'imgskill'}">上传图片</button>
		<input type="hidden" id="layupload_type" value="2"/>
		<input type="hidden" id="upload_path" value="user"/>
		<input type="hidden" id="skill_pic" name="pic" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
"/>
        <img id="imgskill" src="" width="60" height="60" class="none">
      </div>
    </div>
    <div class="admin_add_list">
      <input type="hidden" id="skillid" name="id"/>
      <input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">
      <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
      <input type="hidden" name="eid" <?php if ($_smarty_tpl->tpl_vars['row']->value['id']) {?>value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"<?php }?>>
      <input type="hidden" name="skilladd" value="1"/>
      <input class="layui-btn layui-btn-normal" type="button" onclick="checkskill()" value="添 加 ">
      <input type="button" class="admin_save_sub_qx" value=" 取 消 " onclick="layerClose('skill')" >
    </div>
    </form>
   </div>
</div>
<div id='project' >
  <div class="admin_add_tit"><span class="admin_add_tit_s"><i class="yun_resume_h1_icon yun_resume_h1_iconxm"></i>项目经历</span></div>
  <div id="project_list"> <?php if ($_smarty_tpl->tpl_vars['project']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['project_l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['project_l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['project']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['project_l']->key => $_smarty_tpl->tpl_vars['project_l']->value) {
$_smarty_tpl->tpl_vars['project_l']->_loop = true;
?>
    <div class="admin_saversume_list" id="project_<?php echo $_smarty_tpl->tpl_vars['project_l']->value['id'];?>
">
      <div class="admin_saversume_pd"> <i class="admin_saversume_pd_icon"></i>
        <div class="admin_saversume_tit"><span class="admin_saversume_tit_b"><?php echo $_smarty_tpl->tpl_vars['project_l']->value['name'];?>
</span> <?php if ($_smarty_tpl->tpl_vars['project_l']->value['title']) {?>担任职位 <span class="admin_saversume_tit_b"><?php echo $_smarty_tpl->tpl_vars['project_l']->value['title'];?>
</span><?php }?> </div>
        <div><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['project_l']->value['sdate'],"%Y-%m");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['project_l']->value['edate'],"%Y-%m");?>
</div>
        <div><?php echo $_smarty_tpl->tpl_vars['project_l']->value['content'];?>
</div>
        <div class="admin_saversume_cz"> <a href="javascript:void(0)" onclick="getresume('project','<?php echo $_smarty_tpl->tpl_vars['project_l']->value['id'];?>
')" class="admin_new_c_bth">修改</a> <a href="javascript:void(0)" onclick="resume_del('project','<?php echo $_smarty_tpl->tpl_vars['project_l']->value['id'];?>
')"class="admin_new_c_bth admin_new_c_bth_sc">删除</a> </div>
      </div>
    </div>
    <?php } ?>
    <?php }?> </div>
  <div id='project_add_button'class="admin_add_pd">
    <input class="admin_save_sub" type="button" value="+ 添加项目经历" onclick="checkmore2('project');"name="com_update">
  </div>
</div>
<div id='addproject' style="display:none">
  <div class="admin_resume_box">
    <div class="admin_add_list">
      <div class="admin_add_list_name">项目名称</div>
      <div class="admin_add_list_right">
        <input type="text" name="project_name" id="project_name" class="input-text"   size='40'>
      </div>
    </div>
    <div class="admin_add_list">
      <div class="admin_add_list_name">项目时间</div>
      <div class="admin_add_list_right">
        <input class="input-text text_resume_date " type="text" name="date" value="" size="15"  id="project_date"/>
        时间格式：2014-07 
        <?php echo '<script'; ?>
 type="text/javascript">
		layui.use(['laydate'], function(){var laydate = layui.laydate,$ = layui.$;laydate.render({elem: '#project_date',type: 'month',range:'~'});});
        <?php echo '</script'; ?>
></div>
    </div>
    <div class="admin_add_list">
      <div class="admin_add_list_name">担任职位</div>
      <div class="admin_add_list_right">
        <input type="text" name="title" id="project_title" class="input-text"  >
      </div>
    </div>
    <div class="admin_add_list">
      <div class="admin_add_list_name">项目内容</div>
      <div class="admin_add_list_right">
        <textarea id="project_content" class="expect_text_textarea " ></textarea>
      </div>
    </div>
    <div class="admin_add_list">
      <input type="hidden" id="projectid" />
      <input class="layui-btn layui-btn-normal" type="button" value=" 添 加 " name="submit" onclick="saveproject();" >
      <input class="admin_save_sub_qx" type="button" value=" 取 消 " onclick="layerClose('project')" >
    </div>
  </div>
</div>
<div id='other' >
  <div class="admin_add_tit"><span class="admin_add_tit_s"><i class="yun_resume_h1_icon yun_resume_h1_iconqt"></i>其他描述</span></div>
  <div id="other_list"> <?php if ($_smarty_tpl->tpl_vars['other']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['other_l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['other_l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['other']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['other_l']->key => $_smarty_tpl->tpl_vars['other_l']->value) {
$_smarty_tpl->tpl_vars['other_l']->_loop = true;
?>
    <div class="admin_saversume_list"  id="other_<?php echo $_smarty_tpl->tpl_vars['other_l']->value['id'];?>
">
      <div class="admin_saversume_pd"> <i class="admin_saversume_pd_icon"></i>
        <div class="admin_saversume_tit"><span class="admin_saversume_tit_b"><?php echo $_smarty_tpl->tpl_vars['other_l']->value['name'];?>
</span></div>
        <div><?php echo $_smarty_tpl->tpl_vars['other_l']->value['content'];?>
</div>
        <div class="admin_saversume_cz"> <a href="javascript:void(0)" onclick="getresume('other','<?php echo $_smarty_tpl->tpl_vars['other_l']->value['id'];?>
')" class="admin_new_c_bth">修改</a> <a href="javascript:void(0)" onclick="resume_del('other','<?php echo $_smarty_tpl->tpl_vars['other_l']->value['id'];?>
')"class="admin_new_c_bth admin_new_c_bth_sc">删除</a> </div>
      </div>
    </div>
    <?php } ?>
    <?php }?> </div>
  <div id='other_add_button'class="admin_add_pd">
    <input class="admin_save_sub" type="button" value="+ 添加其他" onclick="checkmore2('other');"name="com_update" >
  </div>
</div>
<div id='addother' style="display:none">
  <div class="admin_resume_box">
    <div class="admin_add_list">
      <div class="admin_add_list_name">其他标题</div>
      <div class="admin_add_list_right">
        <input type="text" name="name" id="other_name" class="input-text"   size='40'>
      </div>
    </div>
    <div class="admin_add_list">
      <div class="admin_add_list_name">其他描述</div>
      <div class="admin_add_list_right">
        <textarea id="other_content" class="expect_text_textarea "></textarea>
      </div>
    </div>
    <div class="admin_add_list">
      <input type="hidden" id="otherid" />
      <input class="layui-btn layui-btn-normal" type="button" value=" 添 加 " name="submit" onclick="saveother();" >
      <input class=" admin_save_sub_qx" type="button" value=" 取 消 " onclick="layerClose('other')" >
    </div>
  </div>
</div>
</div>
<div style="margin-top:30px"></div>
<style>
.admin_saveresume_list{border-bottom:1px solid #eee;}
</style>
<?php echo '<script'; ?>
 type="text/javascript">
var weburl="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";
var form ,url = weburl+"/index.php?m=ajax&c=get_city_option";

  layui.use(['layer', 'form'], function(){
   form = layui.form;
   var $ = layui.$;

   form.on('select(fz_type)', function(data){
      if(data.value == 1){
        $("#fz_type_1").show();
        $("#fz_type_2").hide();
      }else{
        $("#fz_type_2").show();
        $("#fz_type_1").hide();
      }
    });
  });//end layui.use()
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language=javascript src='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/city.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language=javascript src='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/city.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui.upload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type='text/javascript'><?php echo '</script'; ?>
> 
</body>
</html><?php }} ?>
