<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 15:41:35
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\asktopic.htm" */ ?>
<?php /*%%SmartyHeaderCode:1444942775ab0bb2f481774-14624178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ea007cd3b5a89475b87b32a2dd511ab04d834cc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\asktopic.htm',
      1 => 1517646951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1444942775ab0bb2f481774-14624178',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'cache' => 0,
    'qindex' => 0,
    'qlist' => 0,
    'uid' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0bb2f5a9e51_83288320',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0bb2f5a9e51_83288320')) {function content_5ab0bb2f5a9e51_83288320($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php global $db,$db_config,$config;eval('$paramer=array("classid"=>"\'auto.pid\'","limit"=>"1","item"=>"\'cache\'","name"=>"\'cache_one\'","nocache"=>"")
;');$cache=array();
		$ParamerArr = GetSmarty($paramer,$_GET);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;

		include(PLUS_PATH.'/ask.cache.php');
		
		if(!$paramer[classid])
		{
			$askArr = $ask_index;

		}else{
			$askArr = @explode(',',$paramer[classid]);
		}
		$i=0;
		foreach($askArr as $key=>$value)
		{
			$i++;
			$askArray['key'] = $i;
			$askArray['id'] = $value;
			$askArray['name'] = $ask_name[$value];
			$askArray['pic'] = $ask_pic[$value]; 
			$askArray['intro'] = $ask_intro[$value];
			$cache[] = $askArray;
			if($paramer[limit] && $i>=$paramer[limit])
			{
				break;
			} 
		}
		if($paramer[son]){
			foreach($cache as $key=>$val){ 
				foreach($ask_type[$val['id']] as $v){
					$cache[$key][son][]=array('name'=>$ask_name[$v],"id"=>$v);
				} 
			}
		}  
		 ?>
<?php global $db,$db_config,$config;eval('$paramer=array("limit"=>"16","son"=>"1","item"=>"\'qindex\'","nocache"=>"")
;');$qindex=array();
		$ParamerArr = GetSmarty($paramer,$_GET);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;

		include(PLUS_PATH.'/ask.cache.php');
		
		if(!$paramer[classid])
		{
			$askArr = $ask_index;

		}else{
			$askArr = @explode(',',$paramer[classid]);
		}
		$i=0;
		foreach($askArr as $key=>$value)
		{
			$i++;
			$askArray['key'] = $i;
			$askArray['id'] = $value;
			$askArray['name'] = $ask_name[$value];
			$askArray['pic'] = $ask_pic[$value]; 
			$askArray['intro'] = $ask_intro[$value];
			$qindex[] = $askArray;
			if($paramer[limit] && $i>=$paramer[limit])
			{
				break;
			} 
		}
		if($paramer[son]){
			foreach($qindex as $key=>$val){ 
				foreach($ask_type[$val['id']] as $v){
					$qindex[$key][son][]=array('name'=>$ask_name[$v],"id"=>$v);
				} 
			}
		}  
		 ?>
<?php global $db,$db_config,$config;eval('$paramer=array("classid"=>"\'auto.pid\'","order"=>"\'atn\'","item"=>"\'qlist\'","name"=>"\'qlist_one\'","nocache"=>"")
;');$qlist_one=array();
		$ParamerArr = GetSmarty($paramer,$_GET);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }

		$where=1;
		include(PLUS_PATH.'/ask.cache.php');

		
		
		if(is_array($ask_type[$paramer[classid]]) && !empty($ask_type[$paramer[classid]]))
		{ 
			$Count = $ask_type[$paramer[classid]];
		}else{
			$aList = $db->select_all("q_class","`pid` IN (".@implode(',',$ask_index).")","id");
			foreach($aList as $v){
				$aid[] =$v[id]; 
			} 
			$Count = $aid; 
		}
		if(is_array($Count)){
			if($_COOKIE['uid']){$atn=$db->DB_select_once("attention","`uid`='".$_COOKIE['uid']."' and `type`='2'","`ids`");} 
			$ids=@explode(',',$atn['ids']);
			foreach($Count as $value){
				$QclassInfo=array();
				if(in_array($value,$ids)){
					$QclassInfo['isatn']='1';
				}
				$QclassInfo['id'] = $value;
				$QclassInfo['name'] = $ask_name[$value];
				$QclassInfo['pic'] = $ask_pic[$value];
				$QclassInfo['atnnum'] = $ask_atnnum[$value];
				$QclassInfo['qusnum'] = $ask_qusnum[$value];
				$QclassInfo['intro'] = strip_tags($ask_intro[$value]);
				$QclassInfo['list'] = $QusList[$value];				
				$qlist_one[] = $QclassInfo;
			}
			
		}
		 ?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 <?php if ($_GET['pid']) {?>
<!--top-->
<?php  $_smarty_tpl->tpl_vars['cache'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cache']->_loop = false;
$cache = $cache; if (!is_array($cache) && !is_object($cache)) { settype($cache, 'array');}
foreach ($cache as $_smarty_tpl->tpl_vars['cache']->key => $_smarty_tpl->tpl_vars['cache']->value) {
$_smarty_tpl->tpl_vars['cache']->_loop = true;
?>
<div class="asktoppic_tt">
     <div class="asktopic_tt_img"><img style="width:50px;height:50px;" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['cache']->value['pic'];?>
"></div>
     <div class="asktopic_tt_wr"># <?php echo $_smarty_tpl->tpl_vars['cache']->value['name'];?>
 #</div>
     <div class="asktopic_tt_ct"><?php echo $_smarty_tpl->tpl_vars['cache']->value['intro'];?>
</div>
</div>
<?php } ?>
  <?php } else { ?>
  <!--msg-->
  <div class="ask_topic_lb">
   
      <?php  $_smarty_tpl->tpl_vars['qindex'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['qindex']->_loop = false;
$qindex = $qindex; if (!is_array($qindex) && !is_object($qindex)) { settype($qindex, 'array');}
foreach ($qindex as $_smarty_tpl->tpl_vars['qindex']->key => $_smarty_tpl->tpl_vars['qindex']->value) {
$_smarty_tpl->tpl_vars['qindex']->_loop = true;
?>
      <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'topic','pid'=>'`$qindex.id`'),$_smarty_tpl);?>
">
      <?php echo $_smarty_tpl->tpl_vars['qindex']->value['name'];?>

        </a> 
      <?php } ?>
  
  </div>
  <?php }?>
  
  <div class="ask_topic_ct fl">

    <div class="clear"></div>
    <?php  $_smarty_tpl->tpl_vars['qlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['qlist']->_loop = false;
$qlist_one = $qlist_one; if (!is_array($qlist_one) && !is_object($qlist_one)) { settype($qlist_one, 'array');}
foreach ($qlist_one as $_smarty_tpl->tpl_vars['qlist']->key => $_smarty_tpl->tpl_vars['qlist']->value) {
$_smarty_tpl->tpl_vars['qlist']->_loop = true;
?>
    <div class="toppic_newlist">
    <div class="toppic_newpic"><img style="width:50px;height:50px;" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['qlist']->value['pic'];?>
"/></div>
    <div class="toppic_newname"> <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'list','cid'=>'`$qlist.id`'),$_smarty_tpl);?>
" class="toppic_name_a"><?php echo $_smarty_tpl->tpl_vars['qlist']->value['name'];?>
</a></div>
   <div class="toppic_p"><?php echo $_smarty_tpl->tpl_vars['qlist']->value['intro'];?>
</div>
    <div class="toppic_newpic_gz">
      <?php if ($_smarty_tpl->tpl_vars['qlist']->value['isatn']=='1') {?> 
      <a href="javascript:void(0)" onclick="attention('<?php echo $_smarty_tpl->tpl_vars['qlist']->value['id'];?>
','2','<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'attention'),$_smarty_tpl);?>
');" class="toppic_newpic_qxgz" title="取消关注">取消关注</a> 
      <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?> 
            <a href="javascript:void(0)" class="toppic_newpic_gz_a" onclick="attention('<?php echo $_smarty_tpl->tpl_vars['qlist']->value['id'];?>
','2','<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'attention'),$_smarty_tpl);?>
');">+  关注</a> <?php } else { ?> <a href="javascript:void(0)"  onclick="showlogins('1');" class='toppic_newpic_gz_a'>+  关注</a> <?php }?>
            <?php }?></div>
            
    </div>
    <?php } ?> </div>
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
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/prefixfree.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
