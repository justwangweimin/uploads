<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 15:49:52
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\member\user\rinfo.htm" */ ?>
<?php /*%%SmartyHeaderCode:11677646835ab0bd20036698-35614250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68029bea9b6a3b1b549b82de80ff73c961ae3f77' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\member\\user\\rinfo.htm',
      1 => 1513145435,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11677646835ab0bd20036698-35614250',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'rows' => 0,
    'v' => 0,
    'config' => 0,
    'eid' => 0,
    'userclass_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0bd2051ac15_36294719',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0bd2051ac15_36294719')) {function content_5ab0bd2051ac15_36294719($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 

<style>
.resume-cont_wate_list dd{ padding-left:0px;}
.resume_xg_a{ padding:5px 30px; display:inline-block;color:#fff;}
</style>
<?php if ($_smarty_tpl->tpl_vars['type']->value=='skill') {?>

<div class="resume-cont">  
 <div class="wap_member_comp_h1"><span>职业技能</span></div>

	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
    <div class="add_resume_box">
     <ul class="add_resume_list">
      <li>技能名称：<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</dd></li>
      <li>掌握时间：<?php echo $_smarty_tpl->tpl_vars['v']->value['longtime'];?>
年</li>
      <?php if ($_smarty_tpl->tpl_vars['v']->value['pic']) {?>
      <li>技能证书：<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
" width="95" height="70"></li>
      <?php }?>
     </ul>
     
     <div class="add_resume_list_opt">
    <a class="resume_xg_a resume_xg" href="index.php?c=addresumeson&type=skill&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</a>
        <a class="resume_xg_a resume_sc" href="javascript:void(0);" onclick="isdel('index.php?c=rinfo&type=skill&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')">删除</a> 
      </div>  
    </div>
    <?php } ?>

    
        <div class="add_resume_cz">
    <div class="add_resume_cz_a"><a class="add_resume_cz_a_tj" href="index.php?c=addresumeson&type=skill&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
">+ 添加职业技能</a></div>
    <div class="add_resume_cz_fh"> <a href="index.php?c=modify&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
">完成并返回 >></a></div>
    </div>
    
</div>

<?php } elseif ($_smarty_tpl->tpl_vars['type']->value=='work') {?>
<div class="resume-cont">  
 <div class="wap_member_comp_h1"><span>工作经历</span></div>

	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
  <div class="add_resume_box">
       <ul class="add_resume_list">
    <li>单位名称：<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</li>
      <li>工作时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['sdate'],"%Y-%m");?>
 至 <?php if ($_smarty_tpl->tpl_vars['v']->value['edate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['edate'],"%Y-%m");
} else { ?>至今<?php }?></li> 
      <?php if ($_smarty_tpl->tpl_vars['v']->value['title']) {?>  
      <li>担任职位：<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</li>   
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['v']->value['content']) {?>  
      <li>工作内容：<?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</li>
      <?php }?>
      </ul>
      <div class="add_resume_cz"> <a class="resume_xg_a resume_xg" href="index.php?c=addresumeson&type=work&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</a>
        <a class="resume_xg_a resume_sc" href="javascript:void(0);" onclick="isdel('index.php?c=rinfo&type=work&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')">删除</a> 
    </div>
    </div>
    <?php } ?>
    <div class="add_resume_cz">
    <div class="add_resume_cz_a"><a class="add_resume_cz_a_tj" href="index.php?c=addresumeson&type=work&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
">+ 添加工作经历</a></div>
    <div class="add_resume_cz_fh"> <a href="index.php?c=modify&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
">完成并返回>></a></div>
    </div>
   
   
</div>

<?php } elseif ($_smarty_tpl->tpl_vars['type']->value=='project') {?>
<div class="resume-cont">  
 <div class="wap_member_comp_h1"><span>项目经历</span></div>

	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
     <div class="add_resume_box">
     <ul class="add_resume_list">
     <li>项目名称：<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</li>
     <?php if ($_smarty_tpl->tpl_vars['v']->value['title']) {?>
	<li>担任职位：<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</li>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['v']->value['content']) {?>
    <li>项目内容：<?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</li>
    <?php }?>
     <li>项目时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['sdate'],"%Y-%m");?>
 至 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['edate'],"%Y-%m");?>
</li>
     <ul>
          <div class="add_resume_cz"> 
     <a class="resume_xg_a resume_xg" href="index.php?c=addresumeson&type=project&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</a>
        <a class="resume_xg_a resume_sc" href="javascript:void(0);" onclick="isdel('index.php?c=rinfo&type=project&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')">删除</a> 
      </div>
    </div>
    <?php } ?>
     <div class="add_resume_cz">
    <div class="add_resume_cz_a"><a class="add_resume_cz_a_tj" href="index.php?c=addresumeson&type=project&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
">+ 添加项目经历</a></div>
    <div class="add_resume_cz_fh"> <a href="index.php?c=modify&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
">完成并返回>></a></div>
    </div>

</div>

<?php } elseif ($_smarty_tpl->tpl_vars['type']->value=='training') {?>
<div class="resume-cont">  
 <div class="wap_member_comp_h1"><span>培训经历</span></div>

	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
     <div class="add_resume_box">
     <ul class="add_resume_list">
        <li>培训中心：<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</li>
       <li>培训时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['sdate'],"%Y-%m");?>
 至 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['edate'],"%Y-%m");?>
</li>
       <?php if ($_smarty_tpl->tpl_vars['v']->value['title']) {?>
       <li>培训方向：<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
 </li>
       <?php }?>
       <?php if ($_smarty_tpl->tpl_vars['v']->value['content']) {?>
      <li>培训描述：<?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</li>
      <?php }?>
  </ul>
         <div class="add_resume_cz"> 
      <a class="resume_xg_a resume_xg" href="index.php?c=addresumeson&type=training&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</a>
        <a class="resume_xg_a resume_sc" href="javascript:void(0);" onclick="isdel('index.php?c=rinfo&type=training&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')">删除</a> 
      </div>
    </div>
    <?php } ?>

     <div class="add_resume_cz">
    <div class="add_resume_cz_a"><a class="add_resume_cz_a_tj" href="index.php?c=addresumeson&type=training&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
">+ 添加培训经历</a></div>
    <div class="add_resume_cz_fh"> <a href="index.php?c=modify&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
">完成并返回>></a></div>
    </div>

</div>

<?php } elseif ($_smarty_tpl->tpl_vars['type']->value=='edu') {?>
<div class="resume-cont">  
 <div class="wap_member_comp_h1"><span>教育经历</span></div>

	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
    <div class="add_resume_box">
     <ul class="add_resume_list">
       <li>学校名称：<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</li>
     <li>在校时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['sdate'],"%Y-%m");?>
 至 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['edate'],"%Y-%m");?>
</li>
     <?php if ($_smarty_tpl->tpl_vars['v']->value['specialty']) {?>
     <li>所学专业：<?php echo $_smarty_tpl->tpl_vars['v']->value['specialty'];?>
</li>
     <?php }?>
     <?php if ($_smarty_tpl->tpl_vars['v']->value['title']) {?>
     <li>班级职务：<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</li>
     <?php }?>
     <?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value['education']]) {?>
     <li>最高学历：<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value['education']];?>
</li>
     <?php }?>
      </ul>
          <div class="add_resume_cz"> 
          <a class="resume_xg_a resume_xg" href="index.php?c=addresumeson&type=edu&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</a>
        <a class="resume_xg_a resume_sc" href="javascript:void(0);" onclick="isdel('index.php?c=rinfo&type=edu&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')">删除</a> </div>
    </div>
    <?php } ?>

 <div class="add_resume_cz">
    <div class="add_resume_cz_a"><a class="add_resume_cz_a_tj" href="index.php?c=addresumeson&type=edu&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
">+ 添加教育经历</a></div>
    <div class="add_resume_cz_fh"> <a href="index.php?c=modify&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
">完成并返回>></a></div>
    </div>

</div>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value=='other') {?>
<div class="resume-cont">  
 <div class="wap_member_comp_h1"><span>其他信息</span></div>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
      <div class="add_resume_box">
     <ul class="add_resume_list">
     <li>其他标题：<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</li>
     <li>其他描述：<?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</li>
      </ul>
     
          <div class="add_resume_cz"> 
          <a class="resume_xg_a resume_xg" href="index.php?c=addresumeson&type=other&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</a>
        <a class="resume_xg_a resume_sc" href="javascript:void(0);" onclick="isdel('index.php?c=rinfo&type=other&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')">删除</a> 
      </div>
    </div>
    <?php } ?>
     <div class="add_resume_cz">
    <div class="add_resume_cz_a"><a class="add_resume_cz_a_tj"  href="index.php?c=addresumeson&type=other&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
">+ 添加其他信息</a></div>
    <div class="add_resume_cz_fh"> <a href="index.php?c=modify&eid=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
">完成并返回>></a></div>
    </div>

</div>
<?php }?>
 </div> </div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
