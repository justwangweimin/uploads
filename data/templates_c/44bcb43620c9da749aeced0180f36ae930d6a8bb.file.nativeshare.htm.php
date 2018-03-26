<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-24 20:31:16
         compiled from "D:\xampp\htdocs\uploads\\app\template\wap\nativeshare.htm" */ ?>
<?php /*%%SmartyHeaderCode:4798668035a915b14cd0d08-24980030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44bcb43620c9da749aeced0180f36ae930d6a8bb' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\\\app\\template\\wap\\nativeshare.htm',
      1 => 1515035067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4798668035a915b14cd0d08-24980030',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wap_style' => 0,
    'config' => 0,
    'isweixin' => 0,
    'signPackage' => 0,
    'shareurl' => 0,
    'title' => 0,
    'description' => 0,
    'job' => 0,
    'Info' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a915b14df9c75_20845193',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a915b14df9c75_20845193')) {function content_5a915b14df9c75_20845193($_smarty_tpl) {?><!----如果是微信登录，引导微信自有分享------>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/nativeshare/nativeshare.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/nativeshare/nativeshare.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>


<?php if ($_smarty_tpl->tpl_vars['isweixin']->value) {?>

<?php if (strpos($_smarty_tpl->tpl_vars['config']->value['sy_wapdomain'],'https://')!==false) {?>
<?php echo '<script'; ?>
 src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php } else { ?>
<?php echo '<script'; ?>
 src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>

<?php }?>
<?php echo '<script'; ?>
>
	$(function(){
		$('#shareClick').click(function(){
			
			var url = $(this).attr('data-url');
			if(new RegExp('http://').test(url)){
				window.location.href=url;
			}else{
				$("#weixinBrowser").show();
			}
			
		});
		$('#weixinBrowser').click(function(){
			
			$(this).hide();
		});
	});
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['signPackage']->value) {?>
<?php echo '<script'; ?>
>
var shareurl = '<?php echo $_smarty_tpl->tpl_vars['shareurl']->value;?>
';
wx.config({
    appId: '<?php echo $_smarty_tpl->tpl_vars['signPackage']->value['appId'];?>
',
    timestamp: '<?php echo $_smarty_tpl->tpl_vars['signPackage']->value['timestamp'];?>
',
    nonceStr: '<?php echo $_smarty_tpl->tpl_vars['signPackage']->value['nonceStr'];?>
',
    signature: '<?php echo $_smarty_tpl->tpl_vars['signPackage']->value['signature'];?>
',
    jsApiList: [
        'onMenuShareTimeline',
        'onMenuShareAppMessage',
        'onMenuShareQQ',
        'onMenuShareWeibo',
		'onMenuShareQZone'
      ]
  });
	if(shareurl!=''){
		
		var link = shareurl;

		}else{
		
		var link = '<?php echo $_smarty_tpl->tpl_vars['signPackage']->value['url'];?>
';
	}
 wx.ready(function () {
  var shareData = {
  title: '<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
',
  desc: '<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
',
  link: link,
  imgUrl: '<?php if ($_smarty_tpl->tpl_vars['job']->value['com_logo']) {
echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['com_logo'];
} elseif ($_smarty_tpl->tpl_vars['Info']->value['resume_photo']) {
echo $_smarty_tpl->tpl_vars['Info']->value['resume_photo'];
} elseif ($_smarty_tpl->tpl_vars['row']->value['logo']) {
echo $_smarty_tpl->tpl_vars['row']->value['logo'];
} else {
echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_sharelogo'];
}?>',
	success: function () { 
		// 用户确认分享后执行的回调函数

	},
	cancel: function () { 
		// 用户取消分享后执行的回调函数
		
	}
  };
  wx.onMenuShareAppMessage(shareData);
  wx.onMenuShareTimeline(shareData);
  wx.onMenuShareQQ(shareData);
  wx.onMenuShareWeibo(shareData);
  wx.onMenuShareQZone(shareData);
  });
  wx.error(function (res) {
  console.log(res.errMsg);
  });
<?php echo '</script'; ?>
>
<?php }?>
<?php } else { ?>
<!----如果是UC QQ浏览器，弹出分享界面------>
<div id="nativeShare"></div>
<?php echo '<script'; ?>
>
	
	$(function(){
		
		$('#shareClick').click('click', function () {
			
			new nativeShare('nativeShare',config);	

		}); 
		$('#otherBrowser').click(function(){
			
			$(this).hide();
		});
		$('#nativeShare').click(function(evt){
		
			if($(evt.target).parents(".share_bgbox").length==0){
				
				$(this).hide();
			}
			
		});
	});
	
 <?php echo '</script'; ?>
>
<!----如果是其他浏览器分享，则弹出分享指引------>


<?php }?>

<!--微信分享公共代码--->


<!--分享-->

<div id="otherBrowser" style="width:100%;height:100%; background:rgba(51,51,51,0.9); position:fixed;left:0px;top:0px ; z-index:100000001;display:none" > 
 <div class="yun_wap_share_tip" style="width:100%; position:absolute; z-index:100000001;top:50%; margin-top:-90px;">
 
 <div class="yun_wap_share_tip_p"><i class="yun_wap_share_n">1.</i>点击浏览器顶部或底部的<i class="yun_wap_share_tip_i3"></i>或<i class="yun_wap_share_tip_i4"></i></div>
 <div class="yun_wap_share_tip_p"><i class="yun_wap_share_n">2.</i>然后点击分享按钮<i class="yun_wap_share_tip_i"></i>或<i class="yun_wap_share_tip_i2"></i></div>
 <div class="yun_wap_share_tip_p"><i class="yun_wap_share_n">3.</i>分享给朋友或者朋友圈</div>
</div>
</div>

<!--分享-->

<div id="weixinBrowser" style="width:100%;height:100%; background:rgba(51,51,51,0.9); position:fixed;left:0px;top:0px ; z-index:100000001;display:block;display:none" > 
 <div class="yun_wap_share_tip" style="width:100%; position:absolute; z-index:100000001;">
 <i class="yun_wap_share_tip_wxicon_more"></i>
<i class="yun_wap_share_tip_wxicon"></i>
</div>
</div><?php }} ?>
