<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-07 11:32:22
         compiled from "D:\xampp\htdocs\uploads\\app\template\default\make.htm" */ ?>
<?php /*%%SmartyHeaderCode:8217543495a9f5d46939c20-81817640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d341ee0037a5bf1c4ed84650d9bd7802b1bd952' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\\\app\\template\\default\\make.htm',
      1 => 1515034976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8217543495a9f5d46939c20-81817640',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'descclass' => 0,
    'row' => 0,
    'desclit' => 0,
    'id' => 0,
    'name' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a9f5d46b24ca4_12052320',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9f5d46b24ca4_12052320')) {function content_5a9f5d46b24ca4_12052320($_smarty_tpl) {?><?php if (!is_callable('smarty_function_desc')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.desc.php';
?><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" /><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<div class="clear"></div>
<div class="about_content">
<div class="about_left">
<div class="about_left_h1"><span class="about_left_h1_span">帮助中心</span></div>
<?php echo smarty_function_desc(array('assign_name'=>'descclass'),$_smarty_tpl);?>

<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['descclass']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<div class="about_left_list">
<div class="about_left_tit"><span class="bout_left_tit_span"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</span></div>
<ul class="about_left_ul">
<?php  $_smarty_tpl->tpl_vars['desclit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['desclit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['desclit']->key => $_smarty_tpl->tpl_vars['desclit']->value) {
$_smarty_tpl->tpl_vars['desclit']->_loop = true;
?>
<li <?php if ($_GET['id']==$_smarty_tpl->tpl_vars['desclit']->value['id']||$_smarty_tpl->tpl_vars['id']->value==$_smarty_tpl->tpl_vars['desclit']->value['id']) {?>class="about_left_ul_cur"<?php }?>><a  href="<?php echo $_smarty_tpl->tpl_vars['desclit']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['desclit']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['desclit']->value['name'];?>
</a></li>
<?php } ?>
</ul>
</div>
<?php } ?>


</div>
<div class="about_right">
<div class="about_right_h1"><span class="about_right_span"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span>
<em class="about_right_cur">当前位置：<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
</a> > <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</em>
</div>
<div class="about_right_p">
<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>
</div>
</div><?php }} ?>
