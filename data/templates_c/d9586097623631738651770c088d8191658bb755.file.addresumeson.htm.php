<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 15:50:07
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\member\user\addresumeson.htm" */ ?>
<?php /*%%SmartyHeaderCode:12958735345ab0bd2f93fe00-29763180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9586097623631738651770c088d8191658bb755' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\member\\user\\addresumeson.htm',
      1 => 1517476099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12958735345ab0bd2f93fe00-29763180',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wap_style' => 0,
    'config' => 0,
    'row' => 0,
    'userclass_name' => 0,
    'userdata' => 0,
    'v' => 0,
    'description' => 0,
    'arrayTag' => 0,
    'tv' => 0,
    'resume' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0bd2fc914d2_17846302',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0bd2fc914d2_17846302')) {function content_5ab0bd2fc914d2_17846302($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/resume.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mobiscroll/mobiscroll_002.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mobiscroll/mobiscroll.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mobiscroll/mobiscroll_003.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mobiscroll/css/animate.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mobiscroll/css/mobiscroll.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/ueditor/ueditor.config.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/ueditor/ueditor.all.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(function () {
	var currYear = (new Date()).getFullYear();
	var opt = {
		preset: 'date', //日期
		theme: 'android-ics light', //皮肤样式
		display: 'modal', //显示方式 
		mode: 'scroller', //日期选择模式
		dateFormat: 'yy-mm', // 日期格式
		setText: '确定', //确认按钮名称
		cancelText: '取消',//取消按钮名籍我
		dateOrder: 'yyyymm', //面板中日期排列式
		dayText: '日', monthText: '月', yearText: '年',
		startYear: currYear - 100, //开始年份
		endYear: currYear //结束年份
	};
	$("#sdate").mobiscroll('setDate', $("#sdate").val(), true).date(opt);
	$("#edate").mobiscroll('setDate', $("#edate").val(), true).date(opt); 
});
<?php echo '</script'; ?>
>  
 <style>
	   .yun_wap_addresume_box_control_text{border:1px solid #ddd;}
	   .yun_wap_addresume_texttextAreaMsg{width:100%;height:60px;border:none; margin:0; padding:0;outline: none;;}
	   </style>
<div class="resume-cont">
  <div class=""> <?php if ($_GET['type']=="skill") {?>
    <div class="wap_member_comp_h1"><span>填写职业技能</span></div>
    <div class="yun_wap_addresume_box">
      <form id="skillInfo" method="post" action="index.php?c=addresumeson&eid=<?php echo $_GET['eid'];?>
&type=skill" enctype="multipart/form-data" onsubmit="return checkskill(this)">
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label"> 技能名称 <span class="resume-cont_wate_bj">*</span> </div>
          <div class="yun_wap_addresume_box_control">
            <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" placeholder=" 例：IT开发" class="yun_wap_addresume_text">
          </div>
        </div>
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label"> 掌握时间  </div>
          <div class="yun_wap_addresume_box_control">
            <input type="text" name="longtime" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['longtime'];?>
" placeholder="年" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')" class="yun_wap_addresume_text">
          </div>
        </div>
       <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label"> 技能证书 </div>
          <div class="yun_wap_addresume_box_control">
             <input name="file" type="file" accept="image/*">
          </div>
        </div>
        <div class="yun_wap_addresume_box_group" style="background: transparent; border: none;">
          <input type="hidden" name="table" value="skill" />
          <input type="hidden" name="eid" value="<?php echo $_GET['eid'];?>
" />
          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" /> 
          <input type="submit" name="submit" value="保存" class="reinputText2">
        </div>
      </form>
    </div>
    <?php } elseif ($_GET['type']=="work") {?>
    <div class="wap_member_comp_h1"><span>填写工作经历</span></div>
    <div class="yun_wap_addresume_box">
      <form id="workInfo" method="post" action="index.php?c=saveresumeson&eid=<?php echo $_GET['eid'];?>
" onsubmit="return checkwork(this)">
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label">单位名称 <span class="resume-cont_wate_bj">*</span> </div>
          <div class="yun_wap_addresume_box_control">
            <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" class="yun_wap_addresume_text" placeholder="请填写单位名称">
          </div>
        </div>
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label">入职时间 <span class="resume-cont_wate_bj">*</span> </div>
          <div class="yun_wap_addresume_box_control">
			<input id="sdate" name="sdate" class="yun_wap_addresume_text_tm" type="text" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['sdate'],'%Y-%m');?>
"> 
          </div>
        </div>
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label">离职时间 <span class="resume-cont_wate_bj">*</span> </div>
          <div class="yun_wap_addresume_box_control">
               <div style="position:relative;width:120px;display:inline-block;">
                   <input id="edate" name="edate" class="yun_wap_addresume_text_tt" type="text" <?php if ($_smarty_tpl->tpl_vars['row']->value['edate']!=0) {?>value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['edate'],'%Y-%m');?>
"<?php }?>>  
		       </div>
           <input name='ckendday' id='ckendday' onclick="ckenddays('edate')" value='1' type='checkbox' <?php if ($_smarty_tpl->tpl_vars['row']->value['edate']<1&&$_smarty_tpl->tpl_vars['row']->value['id']>0) {?>checked<?php }?> />至今
          </div>
        </div>       
        <div style="clear:both"></div>
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label">担任职位 </div>
          <div class="yun_wap_addresume_box_control">
            <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
" class="yun_wap_addresume_text" placeholder="请填写担任职位">
          </div>
        </div>
      
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label">工作描述</div>
          <div class="yun_wap_addresume_box_control">
          <div class="yun_wap_addresume_box_control_text">
            <textarea name="content" class="yun_wap_addresume_texttextAreaMsg"><?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
</textarea>
          </div>
          </div>
        </div>
        <div class="yun_wap_addresume_box_group" style="background: transparent; border: none;">
          <input type="hidden" name="table" value="work" />
          <input type="hidden" name="eid" value="<?php echo $_GET['eid'];?>
" /> 
          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" />
          <input type="submit" name="submit" value="保存" class="reinputText2">
        </div>
      </form></div>
    <?php } elseif ($_GET['type']=="project") {?>
    <div class="wap_member_comp_h1"><span>填写项目经历</span></div>
    <div class="yun_wap_addresume_box">
      <form id="projectInfo" method="post" action="index.php?c=saveresumeson&eid=<?php echo $_GET['eid'];?>
" onsubmit="return checkproject(this)">
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label"> 项目名称 <span class="resume-cont_wate_bj">*</span> </div>
          <div class="yun_wap_addresume_box_control">
            <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" placeholder="请填写项目名称" class="yun_wap_addresume_text">
          </div>
        </div>
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label">开始时间 <span class="resume-cont_wate_bj">*</span> </div>
          <div class="yun_wap_addresume_box_control">
            <i class="yun_wap_addresume_box_control_date"></i>
			<input id="sdate" name="sdate" class="yun_wap_addresume_text" type="text" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['sdate'],'%Y-%m');?>
">  
            </div>
         </div>       
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label">结束时间 <span class="resume-cont_wate_bj">*</span> </div>
          <div class="yun_wap_addresume_box_control">
            <i class="yun_wap_addresume_box_control_date"></i>
			<input id="edate" name="edate" class="yun_wap_addresume_text" type="text" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['edate'],'%Y-%m');?>
">  
          </div>
        </div>       
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label"> 担任职位 </div>
          <div class="yun_wap_addresume_box_control">
            <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
"  placeholder="请填写担任职位" class="yun_wap_addresume_text">
          </div>
        </div>
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label"> 项目内容</div>
          <div class="yun_wap_addresume_box_control">
            <div class="yun_wap_addresume_box_control_text">  <textarea name="content" class="yun_wap_addresume_texttextAreaMsg"><?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
</textarea></div>
          </div>
        </div>
        <div class="yun_wap_addresume_box_group" style="background: transparent; border: none;">
          <input type="hidden" name="table" value="project" />
          <input type="hidden" name="eid" value="<?php echo $_GET['eid'];?>
" /> 
          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" />
          <input type="submit" name="submit" value="保存" class="reinputText2">
        </div>
      </form>
    </div>
    <?php } elseif ($_GET['type']=="edu") {?>
    <div class="wap_member_comp_h1"><span>填写教育经历</span></div>
    <div class="yun_wap_addresume_box">
      <form id="eduInfo" method="post" action="index.php?c=saveresumeson&eid=<?php echo $_GET['eid'];?>
" onsubmit="return checkedu(this)">
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label"> 学校名称 <span class="resume-cont_wate_bj">*</span> </div>
          <div class="yun_wap_addresume_box_control">
            <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
"  placeholder="请填写学校名称" class="yun_wap_addresume_text">
          </div>
        </div>
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label">入学时间 <span class="resume-cont_wate_bj">*</span> </div>
          <div class="yun_wap_addresume_box_control">
            <i class="yun_wap_addresume_box_control_date"></i>
			<input id="sdate" name="sdate" class="yun_wap_addresume_text" type="text" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['sdate'],'%Y-%m');?>
"> 
			 
          </div>
        </div>
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label">离校时间 <span class="resume-cont_wate_bj">*</span> </div>
          <div class="yun_wap_addresume_box_control">
            <i class="yun_wap_addresume_box_control_date"></i>
            <input id="edate" name="edate" class="yun_wap_addresume_text" type="text" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['edate'],'%Y-%m');?>
"> 
          </div>
        </div>
         <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label">所学专业</div>
          <div class="yun_wap_addresume_box_control">
            <input type="text" name="specialty" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['specialty'];?>
" placeholder="请填写所学专业" class="yun_wap_addresume_text">
          </div>
        </div> 
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label"> 班级职务</div>
          <div class="yun_wap_addresume_box_control">
            <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
" placeholder="请填写班级职务" class="yun_wap_addresume_text">
          </div>
        </div>  
       <div class="yun_wap_addresume_box_group">
	    <div class="yun_wap_addresume_box_label"> 最高学历 </div>
	    <div class="yun_wap_addresume_box_control">
	      <div class="select"> <span class="txt education">
	      <?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['education']]) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['education']];
} else { ?>请选择<?php }?></span>
	        <select id="education" name="education" class="textval" onchange="ckresume('education')">
	        <option value="">请选择</option>
	           <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	          <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
	           <?php } ?>
	        </select>
	      </div>
	    </div>
	  </div>
        <div class="yun_wap_addresume_box_group" style="background: transparent; border: none;">
          <input type="hidden" name="table" value="edu" />
          <input type="hidden" name="eid" value="<?php echo $_GET['eid'];?>
" /> 
          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" />
          <input type="submit" name="submit" value="保存" class="reinputText2">
        </div>
      </form>
    </div>
    <?php } elseif ($_GET['type']=="training") {?>
    <div class="wap_member_comp_h1"><span>填写培训经历</span></div>
    <div class="yun_wap_addresume_box">
      <form id="trainingInfo" method="post" action="index.php?c=saveresumeson&eid=<?php echo $_GET['eid'];?>
" onsubmit="return checktraining(this)">
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label"> 培训中心 <span class="resume-cont_wate_bj">*</span> </div>
          <div class="yun_wap_addresume_box_control">
            <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" placeholder=" 请填写培训中心名称" class="yun_wap_addresume_text">
          </div>
        </div>
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label">开始时间 <span class="resume-cont_wate_bj">*</span> </div>
          <div class="yun_wap_addresume_box_control">
            <i class="yun_wap_addresume_box_control_date"></i>
			<input id="sdate" name="sdate" class="yun_wap_addresume_text" type="text" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['sdate'],'%Y-%m');?>
">  
          </div>
		 
        </div>
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label">结束时间 <span class="resume-cont_wate_bj">*</span> </div>
          <div class="yun_wap_addresume_box_control">
            <i class="yun_wap_addresume_box_control_date"></i>
            <input id="edate" name="edate" class="yun_wap_addresume_text" type="text" <?php if ($_smarty_tpl->tpl_vars['row']->value['edate']>1) {?>value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['edate'],'%Y-%m');?>
"<?php }?>> 
          </div>
		  
        </div>
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label"> 培训方向 </div>
          <div class="yun_wap_addresume_box_control">
            <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
"  placeholder=" 请填写培训方向" class="yun_wap_addresume_text">
          </div>
        </div>
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label"> 培训描述 </div>
          <div class="yun_wap_addresume_box_control">
               <div class="yun_wap_addresume_box_control_text">  <textarea name="content" class="yun_wap_addresume_texttextAreaMsg"><?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
</textarea></div>
          </div>
        </div>
         <div class="yun_wap_addresume_box_group" style="background: transparent; border: none;">
            <input type="hidden" name="table" value="training" />
            <input type="hidden" name="eid" value="<?php echo $_GET['eid'];?>
" /> 
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" />
            <input type="submit" name="submit" value="保存" class="reinputText2">
      </div>
      </form>
    </div>
    <?php } elseif ($_GET['type']=="cert") {?>
    <div class="wap_member_comp_h1"><span>填写证书</span></div>
    <div class="yun_wap_addresume_box">
      <form id="certInfo" method="post" action="index.php?c=saveresumeson&eid=<?php echo $_GET['eid'];?>
" onsubmit="return checkcert(this)">
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label"> 证书全称 <span class="resume-cont_wate_bj">*</span> </div>
          <div class="yun_wap_addresume_box_control">
            <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
"   placeholder=" 请填写证书全称" class="yun_wap_addresume_text">
          </div>
        </div>
         <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label">颁发时间 <span class="resume-cont_wate_bj">*</span> </div>
          <div class="yun_wap_addresume_box_control">
            <i class="yun_wap_addresume_box_control_date"></i>
			<input id="sdate" name="sdate" class="yun_wap_addresume_text" type="text" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['sdate'],'%Y-%m-%d');?>
">           </div>
        </div>
      
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label"> 颁发单位 <span class="resume-cont_wate_bj">*</span> </div>
          <div class="yun_wap_addresume_box_control">
            <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
"    placeholder=" 请填写颁发单位" class="yun_wap_addresume_text">
          </div>
        </div>
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label"> 证书描述 <span class="resume-cont_wate_bj">*</span> </div>
          <div class="yun_wap_addresume_box_control">
            <div class="yun_wap_addresume_box_control_text">  <textarea name="content" class="yun_wap_addresume_texttextAreaMsg"><?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
</textarea></div>
          </div>
        </div>
           <div class="yun_wap_addresume_box_group" style="background: transparent; border: none;">
            <input type="hidden" name="table" value="cert" />
            <input type="hidden" name="eid" value="<?php echo $_GET['eid'];?>
" /> 
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" />
            <input type="submit" name="submit" value="保存" class="reinputText2">
         </div>
      </form>
    </div>
    <?php } elseif ($_GET['type']=="other") {?>
    <div class="wap_member_comp_h1"><span>附加信息</span></div>
    <div class="yun_wap_addresume_box">
      <form id="otherInfo" method="post" action="index.php?c=saveresumeson&eid=<?php echo $_GET['eid'];?>
" onsubmit="return checkother(this)">
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label"> 其他标题 <span class="resume-cont_wate_bj">*</span> </div>
          <div class="yun_wap_addresume_box_control">
            <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
"   placeholder=" 请填写" class="yun_wap_addresume_text">
          </div>
        </div>
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label"> 其他描述  </div>
          <div class="yun_wap_addresume_box_control">
            <div class="yun_wap_addresume_box_control_text">  <textarea name="content" class="yun_wap_addresume_texttextAreaMsg"><?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
</textarea></div>
          </div>
        </div
  
        >
        <dl class="resume-cont_wate_list">
          <dt>&nbsp;</dt>
          <dd>
            <input type="hidden" name="table" value="other" />
            <input type="hidden" name="eid" value="<?php echo $_GET['eid'];?>
" /> 
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" />
            <input type="submit" name="submit" value="保存" class="reinputText2">
          </dd>
        </dl>
      </form>
    </div>
    <?php } elseif ($_GET['type']=="desc") {?>
    <div class="wap_member_comp_h1"><span>自我评价</span></div>
    <div class="yun_wap_addresume_box">
      <form id="descInfo" method="post" action="index.php?c=saveresumeson&eid=<?php echo $_GET['eid'];?>
" onsubmit="return checkdesc(this)">
        <div class="yun_wap_addresume_box_group" style="background: transparent; border: none;">
           <div class="yun_wap_addresume_box_control_text">   <textarea name="description" id="description" class="yun_wap_addresume_texttextAreaMsg"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</textarea></div>
         </div>
		<div class="wap_member_comp_h1"><span>个人标签</span></div>
		 <div class="yun_wap_addresume_box"> 
		 <div class="resume_pop_bq">
		 <ul>
		  <?php  $_smarty_tpl->tpl_vars['tv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tv']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arrayTag']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tv']->key => $_smarty_tpl->tpl_vars['tv']->value) {
$_smarty_tpl->tpl_vars['tv']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tv']->key;
?>
		 <li class="changetag resume_pop_bq_cur" data-tag="<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
" tag-class="2"><em><?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
&nbsp;</em></li> 
		 <?php } ?>

		 <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_tag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			 <?php if (!in_array($_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value],$_smarty_tpl->tpl_vars['arrayTag']->value)) {?>
				<li class="changetag " data-tag="<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" tag-class="1"><em><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</em></li> 
			 <?php }?>
		 
		 <?php } ?>
		 </ul>
	
		 <div class="yun_resume_tjbq_bth"><input class="yun_resume_tjbq" type="inputText" tabindex="1000" id="addfuli" ><a class="checkboxAddBton">添加标签</a></div>
		 <input type="hidden" name="tag" id="tag" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['tag'];?>
">
		 </div>	 </div>
           <div class="yun_wap_addresume_box_group" style="background: transparent; border: none;">
            <input type="hidden" name="table" value="resume" />
            <input type="hidden" name="eid" value="<?php echo $_GET['eid'];?>
" />
            <input type="submit" name="submit" value="保存" class="reinputText2">
          </div>
      </form>
    </div>
    <?php } elseif ($_GET['type']=="doc") {?>
    <div class="wap_member_comp_h1"><span>黏贴简历内容</span></div>
    <div class="yun_wap_addresume_box">
      <form id="docInfo" method="post" action="index.php?c=saveresumeson&eid=<?php echo $_GET['eid'];?>
" onsubmit="return checkdoc(this)">
        <div class="yun_wap_addresume_box_group">
           <div class="yun_wap_addresume_box_control_text">   <textarea name="doc" id="doc" class="yun_wap_addresume_texttextAreaMsg"><?php echo $_smarty_tpl->tpl_vars['row']->value['doc'];?>
</textarea></div>
         </div>
         <div class="yun_wap_addresume_box_group" style="background: transparent; border: none;">
            <input type="hidden" name="table" value="doc" />
            <input type="hidden" name="eid" value="<?php echo $_GET['eid'];?>
" />
            <input type="submit" name="submit" value="保存" class="reinputText2">
          </div>
      </form>
    </div>
    <?php }?> </div>
</div>
 </div> </div>
<?php echo '<script'; ?>
 type="text/javascript">
var ue = UE.getEditor('doc',{
	toolbars: false,elementPathEnabled:false,wordCount:false,autoHeightEnabled:false
}); 
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
