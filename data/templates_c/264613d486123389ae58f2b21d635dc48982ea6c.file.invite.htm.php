<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 17:08:08
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\member\com\invite.htm" */ ?>
<?php /*%%SmartyHeaderCode:8513602215ab0cf78ecd534-78182275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '264613d486123389ae58f2b21d635dc48982ea6c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\member\\com\\invite.htm',
      1 => 1513145435,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8513602215ab0cf78ecd534-78182275',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'job' => 0,
    'user' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0cf79135b06_49976119',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0cf79135b06_49976119')) {function content_5ab0cf79135b06_49976119($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/cheader.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section class="wap_member">
  <div class="wap_member_comp_h1"><span>面试邀请</span></div>
  <?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
  <?php  $_smarty_tpl->tpl_vars['job'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['job']->key => $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['job']->_loop = true;
?>
  <div class="com_member_hr">
    <div class="com_member_hr_name"> <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume','a'=>'show','id'=>$_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->tpl_vars['job']->value['uid']]['eid']),$_smarty_tpl);?>
" class="wap_member_com_name com_member_hr_cblue"><?php echo $_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->tpl_vars['job']->value['uid']]['name'];?>
</a> <span class="com_member_hr_date"> <?php if ($_smarty_tpl->tpl_vars['job']->value['is_browse']=='1') {?> <span class="wap_member_post_list_zt ap_member_post_list_zt_zt">未查看</span> <?php } elseif ($_smarty_tpl->tpl_vars['job']->value['is_browse']=='2') {?> <span class="wap_member_post_list_zt ap_member_post_list_zt_gq">已查看</span> <?php } elseif ($_smarty_tpl->tpl_vars['job']->value['is_browse']=='3') {?> <span class="wap_member_post_list_zt ap_member_post_list_zt_no">已同意</span> <?php } elseif ($_smarty_tpl->tpl_vars['job']->value['is_browse']=='4') {?> <span class="wap_member_post_list_zt ap_member_post_list_zt_bf">已拒绝</span> <?php }?> </span> </div>
    <div class="com_member_user_box">
      <div class="com_member_hr_tj">
        <div class="com_member_hr_p1"> <span class="member_c9">性别：</span><?php echo $_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->tpl_vars['job']->value['uid']]['sex'];?>
 &nbsp;&nbsp;&nbsp; <span class="member_c9">经验：</span><?php echo $_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->tpl_vars['job']->value['uid']]['exp'];?>
   &nbsp;&nbsp;&nbsp; <span class="member_c9">学历：</span><?php echo $_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->tpl_vars['job']->value['uid']]['edu'];?>

          <div class="com_member_hr_p1"> <span class="member_c9">意向职位：</span><?php echo $_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->tpl_vars['job']->value['uid']]['jobname'];?>
 </div>
        </div>
      </div>
      <div class="com_member_hr_p1"> <span class="member_c9"> 面试职位： </span><?php echo $_smarty_tpl->tpl_vars['job']->value['jobname'];?>
 </div>
      <?php if ($_smarty_tpl->tpl_vars['job']->value['linkman']) {?><div class="com_member_hr_p1"> <span class="member_c9"> 联&nbsp;系&nbsp;人： </span><?php echo $_smarty_tpl->tpl_vars['job']->value['linkman'];?>
 </div><?php }?>
      <?php if ($_smarty_tpl->tpl_vars['job']->value['linktel']) {?><div class="com_member_hr_p1"> <span class="member_c9"> 联系电话： </span><?php echo $_smarty_tpl->tpl_vars['job']->value['linktel'];?>
 </div><?php }?>
      <div class="com_member_hr_p1"> <span class="member_c9">邀请时间：</span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value['datetime'],'%Y-%m-%d');?>
</div>
      <?php if ($_smarty_tpl->tpl_vars['job']->value['intertime']) {?><div class="com_member_hr_p1"> <span class="member_c9">面试时间：</span><?php echo $_smarty_tpl->tpl_vars['job']->value['intertime'];?>
</div><?php }?>
      <?php if ($_smarty_tpl->tpl_vars['job']->value['address']) {?><div class="com_member_hr_p1"> <span class="member_c9">面试地址：</span><?php echo $_smarty_tpl->tpl_vars['job']->value['address'];?>
</div><?php }?>
      <?php if ($_smarty_tpl->tpl_vars['job']->value['content']) {?><div class="com_member_hr_p1"> <span class="member_c9">面试备注：</span><?php echo $_smarty_tpl->tpl_vars['job']->value['content'];?>
</div><?php }?>
    </div>
    <div class="com_member_hr_cz"> <a href="javascript:void(0)" onclick="layer_del('确定要删除？','index.php?c=invite_del&id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
')"  class="yun_member_hr_bth">删除</a> <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume','a'=>'show','id'=>$_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->tpl_vars['job']->value['uid']]['eid']),$_smarty_tpl);?>
"  class="yun_member_hr_bth">简历详细</a> </div>
  </div>
  <?php } ?>
  <div class="wap_member_Receive_list">
    <div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
  </div>
  <?php } elseif ($_GET['keyword']!='') {?>
  <div class="wap_member_no">没有搜索邀请记录。
  <div>
  <a class="wap_member_no_submit" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume'),$_smarty_tpl);?>
">去搜索人才</a>
  </div>
  </div>
  <?php } else { ?>
  <div class="wap_member_no">您还没有邀请记录。
  <div>
  <a class="wap_member_no_submit" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume'),$_smarty_tpl);?>
">去搜索人才</a>
  </div>
  </div>
  <?php }?>
</section>
<div class="clear"></div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
