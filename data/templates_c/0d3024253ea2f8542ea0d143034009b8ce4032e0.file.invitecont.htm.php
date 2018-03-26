<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 17:09:12
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\member\user\invitecont.htm" */ ?>
<?php /*%%SmartyHeaderCode:1446024395ab0cfb83282b7-04453630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d3024253ea2f8542ea0d143034009b8ce4032e0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\member\\user\\invitecont.htm',
      1 => 1518069218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1446024395ab0cfb83282b7-04453630',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0cfb84b4701_01813138',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0cfb84b4701_01813138')) {function content_5ab0cfb84b4701_01813138($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<div class="main_member_cot_box">
<div class="wap_member_comp_h1"><span>面试邀请</span></div>
<div class="wap_member_Receive">
<?php if ($_smarty_tpl->tpl_vars['info']->value['type']=='3') {?>
<div class="member_invite_c"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'ltjob','id'=>$_smarty_tpl->tpl_vars['info']->value['jobid']),$_smarty_tpl);?>
"><span class="member_c9">职位：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['jobname'];?>
</a></div>
<div class="member_invite_c"><span class="member_c9">公司：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['fname'];?>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['info']->value['type']=='2') {?>
<div class="member_invite_c"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'ltjob','id'=>$_smarty_tpl->tpl_vars['info']->value['jobid']),$_smarty_tpl);?>
"><span class="member_c9">职位：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['jobname'];?>
</a></div>
<div class="member_invite_c"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'show','id'=>$_smarty_tpl->tpl_vars['info']->value['fid']),$_smarty_tpl);?>
"><span class="member_c9">公司：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['fname'];?>
</a></div>
<?php } else { ?>
<div class="member_invite_c"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'view','id'=>$_smarty_tpl->tpl_vars['info']->value['jobid']),$_smarty_tpl);?>
"><span class="member_c9">职位：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['jobname'];?>
</a></div>
<div class="member_invite_c"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'show','id'=>$_smarty_tpl->tpl_vars['info']->value['fid']),$_smarty_tpl);?>
"><span class="member_c9">公司：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['fname'];?>
</a></div>
<?php }?>
<div class="member_invitecont_list"><span class="member_invitecont_list_s">面试时间：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['intertime'];?>
&nbsp; </div>
<div class="member_invitecont_list"><span class="member_invitecont_list_s">联 系 人：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['linkman'];?>
&nbsp; </div>
<div class="member_invitecont_list"><span class="member_invitecont_list_s">联系电话：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['linktel'];?>
&nbsp; </div>
<div class="member_invitecont_list"><span class="member_invitecont_list_s">面试地点：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['address'];?>
&nbsp; </div>
<?php if ($_smarty_tpl->tpl_vars['info']->value['content']) {?><div class="member_invitecont_list"><span class="member_invitecont_list_s">备 注：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['content'];?>
&nbsp; </div><?php }?>
<div class="member_invite_bth">
	<?php if ($_smarty_tpl->tpl_vars['info']->value['is_browse']=='4') {?>
      <div class="invitecont_jbox">
	<a href="javascript:void(0)" class="">您已拒绝面试！</a>
    </div>
	<?php } elseif ($_smarty_tpl->tpl_vars['info']->value['is_browse']=='3') {?>
    <div class="invitecont_linebox">
	<a href="javascript:void(0)" class="member_invite_ty">您已同意面试</a>
     </div>
	<?php } else { ?> 
    <a href="javascript:void(0)" onclick="layer_del('您确定要屏蔽该公司并删除该邀请？','index.php?c=invite&id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
')" class="member_invite_sub member_invite_bth1">屏蔽企业</a>
	<a href="javascript:void(0)" onclick="layer_del('确定要拒绝面试邀请？','index.php?c=inviteset&id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
&browse=4')" class="member_invite_sub member_invite_bth1">拒绝面试</a>
	<a href="javascript:void(0)" onclick="layer_del('确定要同意面试邀请？','index.php?c=inviteset&id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
&browse=3')" class="member_invite_sub member_invite_bth2">同意面试</a>
	<?php }?>
</div> 
</div>
</div>
<!-----------屏蔽企业弹出框-------------------->
<div class="layermbox layermbox0 layermshow" index="2" style="display:none;">
<div class="laymshade"></div>
<div class="layermmain">
<div class="section">
<div class="layermchild  layermanim">
<div class="layermcont">您确定要屏蔽该公司并删除该邀请？</div>
<div class="layermbtn"><span type="0">取消</span><span type="1">确认</span></div>
</div></div></div></div>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
