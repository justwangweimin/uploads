<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 15:41:09
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\member\user\reward_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:20159579725ab0bb15a4af95-60423832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5419c49b0651eb1ac036e6ff0f87806ba0c1e0b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\member\\user\\reward_list.htm',
      1 => 1518177991,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20159579725ab0bb15a4af95-60423832',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'rows' => 0,
    'v' => 0,
    'statis' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0bb15d1c644_04289408',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0bb15d1c644_04289408')) {function content_5ab0bb15d1c644_04289408($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<section class="wap_member">
<div class="wap_member_comp_h1"><span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
兑换</span></div>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?> 
<div class="integral_list">
      <div class="integral_list_top">
           <div class="integral_list_top_nm"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</div>
           <?php if ($_smarty_tpl->tpl_vars['v']->value['status']=="0") {?>
            <div class="integral_list_top_no">未审核</div>            
            <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']=="1") {?> 
            <div class="integral_list_top_ok">已审核</div>
           <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']=="2") {?> 
           <div class="integral_list_top_sh">未通过</div>
            <?php }?>
      </div>
      <div class="integral_list_ct">
           <div class="integral_list_ct_img"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'redeem','a'=>'show','id'=>$_smarty_tpl->tpl_vars['v']->value['gid']),$_smarty_tpl);?>
"><img width="80px" height="80px" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
"/></a></div>
           <div class="integral_list_ct_rt">
                 <div class="integral_list_ct_rt_m">会员：<?php echo $_smarty_tpl->tpl_vars['v']->value['linkman'];?>
</div>
                 <div class="integral_list_ct_rt_m">联系方式：<?php echo $_smarty_tpl->tpl_vars['v']->value['linktel'];?>
</div>
                 <div class="integral_list_ct_rt_m">兑换时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['ctime'],"%Y-%m-%d %H:%M");?>
</div>
                 <div class="integral_list_ct_rt_m">数量：<?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
（件） <?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
：<span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['v']->value['integral'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
</span></div>
              <?php if ($_smarty_tpl->tpl_vars['v']->value['expnum']) {?>   <div class="integral_list_ct_rt_m">物流：<?php echo $_smarty_tpl->tpl_vars['v']->value['express'];?>
 <?php echo $_smarty_tpl->tpl_vars['v']->value['expnum'];?>
</div><?php }?>
                 <div class="integral_list_ct_rt_m"><?php echo $_smarty_tpl->tpl_vars['v']->value['body'];?>
</div>
                  <?php if ($_smarty_tpl->tpl_vars['v']->value['status']=="2") {?> 
                 <div class="integral_list_ct_rt_z"><a  href="javascript:void(0)"  onclick="layer.open({title:'查看原因',content: '<?php echo $_smarty_tpl->tpl_vars['v']->value['statusbody'];?>
'});">查看原因</a></div>
                  <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']=="0") {?> 
                  <div class="integral_list_ct_rt_z"><a href="javascript:void(0)" onclick="layer_del('确定要取消兑换？','index.php?c=delreward&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')">取消兑换</a></div>
                   <?php }?> 
           </div>
      </div>
</div>
<br>
<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'redeem'),$_smarty_tpl);?>
" class="wap_member_no_submit" style="width:100%">我要兑换</a>
<?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
<div class="wap_member_no">您共有<span class="f60" ><font color="orange"><?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
</font></span><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_priceunit'];
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
还没有在商城兑换礼品，快去商城兑换礼品吧！<br><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'redeem'),$_smarty_tpl);?>
" class="wap_member_no_submit">我要兑换</a></div>
 
   
<?php } ?> 
</section>
<div class="pages"> <?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
</div></div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
