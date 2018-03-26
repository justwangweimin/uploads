<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-07 12:16:48
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\once.htm" */ ?>
<?php /*%%SmartyHeaderCode:11722895115a9f67b002f8f0-95854452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '070f313359f0b67af707a66906c7805a451a3e1c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\once.htm',
      1 => 1517900585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11722895115a9f67b002f8f0-95854452',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'num' => 0,
    'config' => 0,
    'once' => 0,
    'total' => 0,
    'pagenav' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a9f67b0282a61_73219023',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9f67b0282a61_73219023')) {function content_5a9f67b0282a61_73219023($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php $once=array();global $db,$db_config,$config;eval('$paramer=array("item"=>"\'once\'","ispage"=>"1","limit"=>"20","keyword"=>"\'auto.keyword\'","islt"=>"4","nocache"=>"")
;');
	
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where = "`status`='1'  and `edate`>".time();
		if($config[did]){
			$where.=" AND `did`='".$config['did']."'";
		}
        if($paramer['add_time']>0){
			$time=time()-$paramer['add_time']*86400;
			$where.=" and `ctime`>".$time;
		}
	
		if($paramer[keyword]){
			$where.=" AND (`title` LIKE '%".$paramer[keyword]."%' or `companyname` LIKE '%".$paramer[keyword]."%')";
		}
		if($paramer['delid']){
			$where.=" AND `id`<>'".$paramer['delid']."'";
		}
		
		if($paramer[order]){
			$order = " ORDER BY `".str_replace("'","",$paramer[order])."`";
		}else{
			$order = " ORDER BY ctime ";
		}
	
		if($paramer[sort]){
			$sort = $paramer[sort];
		}else{
			$sort = " DESC";
		}
		
		if($paramer[limit]){
			$limit=" LIMIT ".$paramer[limit];
		}else{
			$limit=" LIMIT 20";
		}
	
		if($paramer[where]){
			$where = $paramer[where];
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"once_job",$where,$Purl,'','0',$_smarty_tpl);
		}
		$where.=$order.$sort.$limit;
		$once=$db->select_all("once_job",$where);
		if(is_array($once)){
			foreach($once as $key=>$value){
				$time=time()-$value['ctime'];
				if($time>86400 && $time<604800){
					$once[$key]['ctime'] = ceil($time/86400)."天前";
				}elseif($time>3600 && $time<86400){
					$once[$key]['ctime'] = ceil($time/3600)."小时前";
				}elseif($time>60 && $time<3600){
					$once[$key]['ctime'] = ceil($time/60)."分钟前";
				}elseif($time<60){
					$once[$key]['ctime'] = "刚刚";
					$once[$key]['redtime'] =1;
				}else{
					$once[$key]['ctime'] = date("Y-m-d",$value['ctime']);
				}
			}
			if($paramer[keyword]!=""&&!empty($once)){
				addkeywords('1',$paramer[keyword]);
			}
		} ?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="once_fb">
<?php if ($_smarty_tpl->tpl_vars['num']->value>0||$_smarty_tpl->tpl_vars['config']->value['sy_once']==0) {?> 
<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'once','a'=>'add'),$_smarty_tpl);?>
" class="once_fb_a"> <span class="once_fb_a_s">发布</span>招聘</a> 
   <?php } else { ?> 
<a href="javascript:void(0);" onclick="layermsg('一天内只能发布<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_once'];?>
次！')" class="once_fb_a">  <span class="once_fb_a_s">发布</span>招聘</a> 
   <?php }?> 
   </div>
<section>
  <div class="warp_content clear"> <?php  $_smarty_tpl->tpl_vars['once'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['once']->_loop = false;
$once = $once; if (!is_array($once) && !is_object($once)) { settype($once, 'array');}
foreach ($once as $_smarty_tpl->tpl_vars['once']->key => $_smarty_tpl->tpl_vars['once']->value) {
$_smarty_tpl->tpl_vars['once']->_loop = true;
?>
    <div class="list_once_box">
     <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'once','a'=>'show','id'=>$_smarty_tpl->tpl_vars['once']->value['id']),$_smarty_tpl);?>
">
      <div class="list_once_name"><?php echo $_smarty_tpl->tpl_vars['once']->value['title'];?>
</div>
     <span class="list_once_xz"><?php if ($_smarty_tpl->tpl_vars['once']->value['salary']) {?>￥<?php echo $_smarty_tpl->tpl_vars['once']->value['salary'];
} else { ?>面议<?php }?></span>
        <div class="list_once_name_P"><?php echo mb_substr($_smarty_tpl->tpl_vars['once']->value['require'],0,100,'utf-8');?>
</div>
      <div class="list_once_name_P_tel">
      <?php if ($_smarty_tpl->tpl_vars['config']->value['user_wzp_link']=='1'&&!$_COOKIE['uid']) {?> 
      <a href='<?php echo smarty_function_url(array('m'=>'wap','c'=>'login','usertype'=>2),$_smarty_tpl);?>
'><font color='red'>登录后查看联系电话</font></a> 
      <?php } else { ?>
         <span class="list_once_touch"> 电话： <?php echo $_smarty_tpl->tpl_vars['once']->value['phone'];?>
 (<?php echo $_smarty_tpl->tpl_vars['once']->value['linkman'];?>
)</span>
		 <a href="tel:<?php echo $_smarty_tpl->tpl_vars['once']->value['phone'];?>
">
         <div class="list_once_touch_tel"><i class="list_once_touch_tel_icon"></i><span class="list_once_touch_tel_p">拨打</span></div>
		 </a>
		 <?php if ($_smarty_tpl->tpl_vars['once']->value['address']) {?>
         <div class="list_once_touch_add">地址：<?php echo $_smarty_tpl->tpl_vars['once']->value['address'];?>
</div>
         <?php }?>
      <?php }?>
     
      
      <div class="list_once_gxtime"> 更新于： <?php if ($_smarty_tpl->tpl_vars['once']->value['redtime']==1||$_smarty_tpl->tpl_vars['once']->value['ctime']<60) {?> <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['once']->value['ctime'];?>
</span> <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['once']->value['ctime'];?>

                <?php }?> </div>
      </div>
     </div>
    <?php } ?> 
    <?php if ($_smarty_tpl->tpl_vars['total']->value<=0) {?>
    <?php if ($_GET['keyword']!='') {?>
    <div class="wap_member_no">没有搜索到店铺招聘<div><a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'once'),$_smarty_tpl);?>
">重新搜索</a></div></div>
    <?php } else { ?>
    <div class="wap_member_no">暂无店铺招聘<div><a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'once'),$_smarty_tpl);?>
">重新搜索</a></div></div>
    <?php }?>
    <?php } else { ?>
    <div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
    <?php }?> </div>
</section>
<!--功能条-->
<!--<div id="yun_cz" class="fn-dbox center">
  <div id="resumeBtn" class="deep fn-dbox-flex fn-dbox-flex-flex1">
   <?php if ($_smarty_tpl->tpl_vars['num']->value>0) {?> <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'once','a'=>'add'),$_smarty_tpl);?>
" class="once_t_fb"> <i class="fa fa-pencil-square-o"></i> 发布招聘</a> 
   <?php } else { ?> <a href="javascript:void(0);" onclick="layermsg('一天内只能发布<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_once'];?>
次！')" class="once_t_fb"> 
   <i class="fa fa-pencil-square-o"></i> 我要发布招聘信息</a> 
   <?php }?> 
   </div>
</div>-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/prefixfree.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/layer/layer.m.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
