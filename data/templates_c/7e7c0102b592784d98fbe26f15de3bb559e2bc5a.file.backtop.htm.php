<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-24 20:04:22
         compiled from "D:\xampp\htdocs\uploads\\app\template\default\backtop.htm" */ ?>
<?php /*%%SmartyHeaderCode:6325452745a9154c6d0a199-15149965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e7c0102b592784d98fbe26f15de3bb559e2bc5a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\\\app\\template\\default\\backtop.htm',
      1 => 1519059405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6325452745a9154c6d0a199-15149965',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a9154c6d19ae7_93789942',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9154c6d19ae7_93789942')) {function content_5a9154c6d19ae7_93789942($_smarty_tpl) {?><style>
#goTopBtn {
	POSITION: fixed; 
	TEXT-ALIGN: center; 
	WIDTH: 47px; 
	BOTTOM:3px; 
	HEIGHT: 78px; 
	FONT-SIZE: 12px; 
	CURSOR: pointer; 
	RIGHT:  40px; 
	_position: absolute; 
	_right: 40;
	_position:absolute;
	_bottom:auto;
	/*_top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||15)-(parseInt(this.currentStyle.marginBottom,10)||15)));*/
	_background:url(<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/lanren_top.png) no-repeat
}
html{
background-image:url(about:blank);
background-attachment:fixed;
}
</style>
<?php echo '<script'; ?>
>
	function goTopEx(){
        var obj=document.getElementById("goTopBtn");
        function getScrollTop(){
                return document.documentElement.scrollTop;
            }
        function setScrollTop(value){
                document.documentElement.scrollTop=value;
            }    
        window.onscroll=function(){getScrollTop()>0?obj.style.display="":obj.style.display="none";}
        obj.onclick=function(){
            var goTop=setInterval(scrollMove,10);
            function scrollMove(){
                    setScrollTop(getScrollTop()/1.1);
                    if(getScrollTop()<1)clearInterval(goTop);
                }
        }
    }
<?php echo '</script'; ?>
>
<div class="clear"></div>
<div id="goTopBtn" class="png none" ><img  border=0 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/lanren_top.png" class="png"></div>
<?php echo '<script'; ?>
 type=text/javascript>goTopEx();<?php echo '</script'; ?>
>
<?php }} ?>
