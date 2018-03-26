<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 15:49:54
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\member\user\modify.htm" */ ?>
<?php /*%%SmartyHeaderCode:1382072965ab0bd229170e8-29590366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e576ade17123acf08cb9f2cd54cb73ee2cc662f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\member\\user\\modify.htm',
      1 => 1517314073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1382072965ab0bd229170e8-29590366',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'config' => 0,
    'expect' => 0,
    'resume' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0bd22c39010_83605382',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0bd22c39010_83605382')) {function content_5ab0bd22c39010_83605382($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php echo '<script'; ?>
>
function show_name(){
	$(".resume_top_name_left").hide();
	$(".resume-rename").show();
}
function hide_name(){
	$(".resume_top_name_left").show();
	$(".resume-rename").hide();
}
<?php echo '</script'; ?>
>
<div class="index_section">
<div class="main_member_cot_box">
<div class=" modify_tx_pd">
<div class="modify_tx_box"><a href="index.php?c=photo"><?php if ($_smarty_tpl->tpl_vars['user']->value['sex']==1) {?><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value['photo'];?>
" border="0" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);"><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value['photo'];?>
" border="0" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_iconv'];?>
',2);"z><?php }?></a></div>
<div class="resume_top_name_left"> 
<span>简历名称：<?php echo $_smarty_tpl->tpl_vars['expect']->value['name'];?>
 </span> </div>
<div class="resume-rename" style="display:none;">

</div>
<div class="list_box_wz">简历完整度：
<div class="per"><div class="papic" style="width:<?php echo $_smarty_tpl->tpl_vars['expect']->value['integrity'];?>
%"></div></div>
<span class="corg"><?php echo $_smarty_tpl->tpl_vars['expect']->value['integrity'];?>
%</span>

</div>
<div class="modify_yl"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'photo','index'=>'member'),$_smarty_tpl);?>
">修改个人头像</a><span class="modify_yl_line">|</span><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume','a'=>'show','id'=>$_smarty_tpl->tpl_vars['expect']->value['id']),$_smarty_tpl);?>
" class="">预览简历</a></div>
</div>
<div class="listBox">
  <div class="listBox-title fn-dbox" onclick="document.location.href='index.php?c=info&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
';"> 
	  <span class="fn-dbox-flex fn-dbox-flex-flex1"><a href="index.php?c=info&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
">基本信息</a> <i class="list_box_b">+20%</i></span>
	  <em class="listBox-r_right">
      <a href="index.php?c=info&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
"> 
		 <font color="#FF7201 ">完整</font>
	  </a> 
	</em>
   </div>
  <?php if ($_smarty_tpl->tpl_vars['expect']->value['doc']) {?>
    <div class="listBox-title fn-dbox" onclick="document.location.href='index.php?c=addexpect&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
';"> 
	  <span class="fn-dbox-flex fn-dbox-flex-flex1"> 求职意向 <i class="list_box_b">+35%</i></span>
       <em class="listBox-r_right">
	   <font color="#FF7201">完整</font>
	</em>
  </div>
  <div class="listBox-title fn-dbox" onclick="document.location.href='index.php?c=addresumeson&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=doc';"> 
	  <span class="fn-dbox-flex fn-dbox-flex-flex1">黏贴简历内容 <?php if ($_smarty_tpl->tpl_vars['expect']->value['doc']) {?><i class="list_box_b">+45%</i><?php } else { ?>+10%<?php }?></span>
       <em class="listBox-r_right">
       <a href="index.php?c=addresumeson&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=doc">
	   <?php if ($_smarty_tpl->tpl_vars['expect']->value['doc']) {?>
	   <font color="#FF7201 ">完整</font>
	   <?php } else { ?>未填写<?php }?> 
	   </a>
	</em>
  </div>
  <?php } else { ?>
    <div class="listBox-title fn-dbox" onclick="document.location.href='index.php?c=addexpect&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
';"> 
	  <span class="fn-dbox-flex fn-dbox-flex-flex1"> 求职意向 <?php if ($_smarty_tpl->tpl_vars['resume']->value['expect']) {?><i class="list_box_b">+35%</i><?php } else { ?>+35%<?php }?></span>
       <em class="listBox-r_right">
	   <?php if ($_smarty_tpl->tpl_vars['resume']->value['expect']) {?>
	   <font color="#FF7201">完整</font>
	   <?php } else { ?>未填写<?php }?> 
	</em>
  </div>
  <div class="listBox-title fn-dbox" onclick="document.location.href='index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=work';"> 
	  <span class="fn-dbox-flex fn-dbox-flex-flex1">工作经历 <?php if ($_smarty_tpl->tpl_vars['resume']->value['work']) {?><i class="list_box_b">+10%</i><?php } else { ?>+10%<?php }?></span>
       <em class="listBox-r_right">
       <a href="index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=work">
	   <?php if ($_smarty_tpl->tpl_vars['resume']->value['work']) {?>
	   <font color="#FF7201 ">完整</font>
	   <?php } else { ?>未填写<?php }?> 
	   </a>
	</em>
  </div>
	<div class="listBox-title fn-dbox" onclick="document.location.href='index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=edu';"> 
        <span class="fn-dbox-flex fn-dbox-flex-flex1"> 教育经历 <?php if ($_smarty_tpl->tpl_vars['resume']->value['edu']) {?><i class="list_box_b">+10%</i><?php } else { ?>+10%<?php }?></span>
   <em class="listBox-r_right">
    <?php if ($_smarty_tpl->tpl_vars['resume']->value['edu']) {?><font color="#FF7201 ">完整</font><?php } else { ?>未填写<?php }?></em>
    </div>
  <div class="listBox-title fn-dbox" onclick="document.location.href='index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=project';">
   <span class="fn-dbox-flex fn-dbox-flex-flex1"> 
  项目经历  <?php if ($_smarty_tpl->tpl_vars['resume']->value['project']) {?><i class="list_box_b">+8%</i><?php } else { ?>+8%<?php }?></span>
  <em class="listBox-r_right">
   <?php if ($_smarty_tpl->tpl_vars['resume']->value['project']) {?><font color="#FF7201 ">完整</font><?php } else { ?>未填写<?php }?>
  </em>
  </div>
    <div class="listBox-title fn-dbox" onclick="document.location.href='index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=training';">
   <span class="fn-dbox-flex fn-dbox-flex-flex1"> 
  培训经历  <?php if ($_smarty_tpl->tpl_vars['resume']->value['training']) {?><i class="list_box_b">+7%</i><?php } else { ?>+7%<?php }?></span>
  <em class="listBox-r_right">
   <?php if ($_smarty_tpl->tpl_vars['resume']->value['training']) {?><font color="#FF7201 ">完整</font><?php } else { ?>未填写<?php }?>
  </em>
  </div>
  <div class="listBox-title fn-dbox" onclick="document.location.href='index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=skill';"> 
  <span class="fn-dbox-flex fn-dbox-flex-flex1"> 
  职业技能 <?php if ($_smarty_tpl->tpl_vars['resume']->value['skill']) {?><i class="list_box_b">+10%</i><?php } else { ?>+10%<?php }?>  
  </span>
   <em class="listBox-r_right">
  <?php if ($_smarty_tpl->tpl_vars['resume']->value['skill']) {?><font color="#FF7201 ">完整</font><?php } else { ?>未填写<?php }?> 
  </em>
  </div>  
  <!--  <div class="listBox-title fn-dbox" onclick="document.location.href='index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=cert';"> 
    <span class="fn-dbox-flex fn-dbox-flex-flex1"> <a href="index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=cert"> 证书</a> +7%</span>
   <em class="listBox-r_right">
    <?php if ($_smarty_tpl->tpl_vars['resume']->value['cert']) {?><font color="#FF7201 ">完整</font><?php } else { ?>未填写<?php }?></em> </div>-->
  <div class="listBox-title fn-dbox" onclick="document.location.href='index.php?c=rinfo&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=other';"> 
    <span class="fn-dbox-flex fn-dbox-flex-flex1">  其他信息 <?php if ($_smarty_tpl->tpl_vars['resume']->value['other']) {?><i class="list_box_b">+0%</i><?php } else { ?>+0%<?php }?></span>
   <em class="listBox-r_right"> <?php if ($_smarty_tpl->tpl_vars['resume']->value['other']) {?><font color="#FF7201 ">完整</font><?php } else { ?>未填写<?php }?> </em></div>
<div class="listBox-title fn-dbox" onclick="document.location.href='index.php?c=addresumeson&eid=<?php echo $_smarty_tpl->tpl_vars['expect']->value['id'];?>
&type=desc';">
    <span class="fn-dbox-flex fn-dbox-flex-flex1"> 自我评价 <?php if ($_smarty_tpl->tpl_vars['user']->value['description']) {?><i class="list_box_b">+0%</i><?php } else { ?>+0%<?php }?></span>
    <em class="listBox-r_right">
        <?php if ($_smarty_tpl->tpl_vars['user']->value['description']) {?>
        <font color="#FF7201 ">完整</font>
        <?php } else { ?>未填写<?php }?>
    </em>
</div>
<?php }?> 
</div>
<div class="listBox" style="margin-top:10px;">
 <a  href="index.php?c=resume" >  <div class="listBox-title fn-dbox"> <span class="fn-dbox-flex fn-dbox-flex-flex1">返回简历管理</span>   
    <em class="listBox-r_right" style="top:25px;"></em> </div></a>
 </div>
 </div> </div>
  </div> </div>
 <div class="clear"></div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
