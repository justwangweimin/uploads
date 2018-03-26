<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-02 02:01:36
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\member\user\photo.htm" */ ?>
<?php /*%%SmartyHeaderCode:6418253265a984000d0cce2-71232021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '129abd75127f9012cee1671e344b5d03b757d6eb' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\member\\user\\photo.htm',
      1 => 1517817545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6418253265a984000d0cce2-71232021',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a98400114a901_01623020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a98400114a901_01623020')) {function content_5a98400114a901_01623020($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php echo '<script'; ?>
>     
function photo(){ 
	if($.trim($("#pic").val())==''&&$("#imghead")[0].src==''){
		layermsg('请上传头像！');return false;
	}
}	
<?php echo '</script'; ?>
>

<section class="resume_mangage"> 
<div class="clear"></div>
<div class="wap_member_comp_h1"><span>上传头像</span></div>
<div class="yun_wap_addresume_box">
	<form method="post" action=""  onsubmit="return photo();" enctype="multipart/form-data">
	    <div class="yun_wap_addresume_box_group">
	        <div class="yun_wap_addresume_box_label"><span class="resume-cont_wate_bj">*</span> 上传头像  </div>
	        <div class="yun_wap_addresume_box_control">
	          <input type="file" name="pic" id="pic" accept="image/*" >
	    	</div>
	    </div>
		<div class="yun_wap_addresume_box_group"<?php if (!$_smarty_tpl->tpl_vars['user']->value['resume_photo']) {?> style="display:none;"<?php }?>> 
      		<img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['resume_photo'];?>
" id="imghead" width="230" height="300"/>
      	</div>
      	<input type="hidden" id="img" value="1">
      	
      	<div class="yun_wap_addresume_box_group" style="background: transparent; border: none;">
        	<input type="submit" name="submit" value="保存" class="reinputText2">
      	</div>
    </form>
  </div>
</section>
<div class="clear"></div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
