<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-02 01:59:41
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\zph.htm" */ ?>
<?php /*%%SmartyHeaderCode:6533239085a983f8da6eea4-87148588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe18e91c0e61c2d76c99ecefd339cccb37545cc0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\zph.htm',
      1 => 1515035027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6533239085a983f8da6eea4-87148588',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'zphs' => 0,
    'usertype' => 0,
    'uid' => 0,
    'zph' => 0,
    'pagenav' => 0,
    'total' => 0,
    'wap_style' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a983f8dcdbc09_66607387',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a983f8dcdbc09_66607387')) {function content_5a983f8dcdbc09_66607387($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php $zphs=array();$time=time();eval('$paramer=array("limit"=>"1","item"=>"\'zphs\'","nocache"=>"")
;');
		global $db,$db_config,$config;
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where = "1";
		if($config['did']){
			$where.=" and `did`='".$config['did']."'";
		}
		
        $time = time();
	
		if($paramer[state]=='1'){
			$where .=" AND unix_timestamp(`starttime`)>'$time'";
		}elseif($paramer[state]=='2'){
			$where .=" AND unix_timestamp(`starttime`)<'$time' AND unix_timestamp(`endtime`)>'$time'";
		}elseif($paramer[state]=='3'){
			$where .=" AND unix_timestamp(`endtime`)<'$time'";
		}else{
        	
			$where .=" AND unix_timestamp(`endtime`)>'$time'";
		}
		
		
		
		if($paramer[limit]){
			$limit=" LIMIT ".$paramer[limit];
		}else{
			$limit=" LIMIT 20";
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"zhaopinhui",$where,$Purl,"",6,$_smarty_tpl);
		}
	
		if($paramer[order]){
			$where .= " ORDER BY $paramer[order] ";
		}else{
			$where .= " ORDER BY unix_timestamp(`starttime`) ";
		}
		
		if($paramer[sort]){
			$where .= " $paramer[sort]";
		}else{
			$where .= " asc ";
		}
		$zphs=$db->select_all("zhaopinhui",$where.$limit);
		if(is_array($zphs)){
			foreach($zphs as $key=>$v){
				$array_zid[]=$v[id];
			}
			$rows=$db->select_all("zhaopinhui_com","`zid` in (".implode(',',$array_zid).") and `status`=1","`uid`,`zid`,`jobid`");
			$zph_com=array();
			foreach($rows as $key=>$v){ 
				$jobarr=explode(',',$v[jobid]);
				$zph_com[$v[zid]][comnum]++;
				$zph_com[$v[zid]][jobnum]=$zph_com[$v[zid]][jobnum]+count($jobarr);
			}
			
			foreach($zphs as $key=>$v){
				$zphs[$key]["starttime_n"]=date('Y',strtotime($v[starttime])).'年'.date('n',strtotime($v[starttime]))."月";
				$zphs[$key]["stime"]=strtotime($v[starttime])-mktime();
				
				$comnum=$zph_com[$v[id]][comnum]?$zph_com[$v[id]][comnum]:0;
				$jobnum=$zph_com[$v[id]][jobnum]?$zph_com[$v[id]][jobnum]:0;
				
				$zphs[$key]["comnum"]=$comnum;
				$zphs[$key]["jobnum"]=$jobnum;
				
				$zphs[$key]["etime"]=strtotime($v[endtime])-mktime();
				if($paramer[len]){
					$zphs[$key]["title"]=mb_substr($v['title'],0,$paramer[len],"utf-8");
				}
				$zphs[$key]["url"]=Url("zph",array("c"=>'show',"id"=>$v['id']),"1");
				 $weekarray=array("日","一","二","三","四","五","六",);            
                $zphs[$key]["week"] = $weekarray[date('w',strtotime($v['starttime']))];		
			}
		} ?>
<?php $zph=array();$time=time();eval('$paramer=array("ispage"=>"1","limit"=>"5","item"=>"\'zph\'","nocache"=>"")
;');
		global $db,$db_config,$config;
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where = "1";
		if($config['did']){
			$where.=" and `did`='".$config['did']."'";
		}
		
        $time = time();
	
		if($paramer[state]=='1'){
			$where .=" AND unix_timestamp(`starttime`)>'$time'";
		}elseif($paramer[state]=='2'){
			$where .=" AND unix_timestamp(`starttime`)<'$time' AND unix_timestamp(`endtime`)>'$time'";
		}elseif($paramer[state]=='3'){
			$where .=" AND unix_timestamp(`endtime`)<'$time'";
		}else{
        	
			$where .=" AND unix_timestamp(`endtime`)>'$time'";
		}
		
		
		
		if($paramer[limit]){
			$limit=" LIMIT ".$paramer[limit];
		}else{
			$limit=" LIMIT 20";
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"zhaopinhui",$where,$Purl,"",6,$_smarty_tpl);
		}
	
		if($paramer[order]){
			$where .= " ORDER BY $paramer[order] ";
		}else{
			$where .= " ORDER BY unix_timestamp(`starttime`) ";
		}
		
		if($paramer[sort]){
			$where .= " $paramer[sort]";
		}else{
			$where .= " asc ";
		}
		$zph=$db->select_all("zhaopinhui",$where.$limit);
		if(is_array($zph)){
			foreach($zph as $key=>$v){
				$array_zid[]=$v[id];
			}
			$rows=$db->select_all("zhaopinhui_com","`zid` in (".implode(',',$array_zid).") and `status`=1","`uid`,`zid`,`jobid`");
			$zph_com=array();
			foreach($rows as $key=>$v){ 
				$jobarr=explode(',',$v[jobid]);
				$zph_com[$v[zid]][comnum]++;
				$zph_com[$v[zid]][jobnum]=$zph_com[$v[zid]][jobnum]+count($jobarr);
			}
			
			foreach($zph as $key=>$v){
				$zph[$key]["starttime_n"]=date('Y',strtotime($v[starttime])).'年'.date('n',strtotime($v[starttime]))."月";
				$zph[$key]["stime"]=strtotime($v[starttime])-mktime();
				
				$comnum=$zph_com[$v[id]][comnum]?$zph_com[$v[id]][comnum]:0;
				$jobnum=$zph_com[$v[id]][jobnum]?$zph_com[$v[id]][jobnum]:0;
				
				$zph[$key]["comnum"]=$comnum;
				$zph[$key]["jobnum"]=$jobnum;
				
				$zph[$key]["etime"]=strtotime($v[endtime])-mktime();
				if($paramer[len]){
					$zph[$key]["title"]=mb_substr($v['title'],0,$paramer[len],"utf-8");
				}
				$zph[$key]["url"]=Url("zph",array("c"=>'show',"id"=>$v['id']),"1");
				 $weekarray=array("日","一","二","三","四","五","六",);            
                $zph[$key]["week"] = $weekarray[date('w',strtotime($v['starttime']))];		
			}
		} ?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 <?php  $_smarty_tpl->tpl_vars['zphs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zphs']->_loop = false;
$zphs = $zphs; if (!is_array($zphs) && !is_object($zphs)) { settype($zphs, 'array');}
foreach ($zphs as $_smarty_tpl->tpl_vars['zphs']->key => $_smarty_tpl->tpl_vars['zphs']->value) {
$_smarty_tpl->tpl_vars['zphs']->_loop = true;
?>
<div class="wap_zph_banner">
     <div class="wap_zph_ct">
          <div class="wap_zph_ct_tit"><?php echo $_smarty_tpl->tpl_vars['zphs']->value['title'];?>
</div>
          <div class="wap_zph_ct_job">已有 <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'zph','a'=>'com','id'=>$_smarty_tpl->tpl_vars['zphs']->value['id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['zphs']->value['jobnum'];?>
</a> 个职位 共有 <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'zph','a'=>'com','id'=>$_smarty_tpl->tpl_vars['zphs']->value['id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['zphs']->value['comnum'];?>
</a> 家企业参会</div>
          <div class="wap_zph_ct_tm">[ <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['zphs']->value['starttime'],"%Y-%m-%d");?>
 至 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['zphs']->value['endtime'],"%Y-%m-%d");?>
 ]</div>
          <div class="wap_zph_ct_but">
               <?php if ($_smarty_tpl->tpl_vars['zphs']->value['stime']<'0'&&$_smarty_tpl->tpl_vars['zphs']->value['etime']>'0') {?>
               <a class="wap_zph_ct_but_zx" style="background-color:#999">停止预订</a>
               <?php } else { ?>
                   <?php if ($_smarty_tpl->tpl_vars['usertype']->value==2) {?>
                   <a class="wap_zph_ct_but_zx" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'zph','a'=>'reserve','id'=>'`$zphs.id`'),$_smarty_tpl);?>
">在线预订</a>
                   <?php } else { ?>
                   <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?>
                    <a class="wap_zph_ct_but_zx" href="javascript:void(0);" onclick="layermsg('只有企业用户才能预定')">在线预订</a>
                    <?php } else { ?>
                    <a class="wap_zph_ct_but_zx" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
">在线预订</a>
                    <?php }?>
                    <!--<a class="wap_zph_ct_but_zx" href="javascript:void(0);" onclick="return zxyd();">在线预订</a>-->
                   <?php }?>
               <?php }?>
               <a class="wap_zph_ct_but_ck" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'zph','a'=>'show','id'=>'`$zphs.id`'),$_smarty_tpl);?>
">查看详情 &gt;&gt;</a>
          </div>
     </div>
   
</div>
 <?php } ?>

<section>
  <div class="warp_content clear">

        <div class="job_list_content">
      <?php  $_smarty_tpl->tpl_vars['zph'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zph']->_loop = false;
$zph = $zph; if (!is_array($zph) && !is_object($zph)) { settype($zph, 'array');}
foreach ($zph as $_smarty_tpl->tpl_vars['zph']->key => $_smarty_tpl->tpl_vars['zph']->value) {
$_smarty_tpl->tpl_vars['zph']->_loop = true;
?>
           <div class="job_list_box job_fair_state_ov" style="padding:15px 10px;"> 
           <?php if ($_smarty_tpl->tpl_vars['zph']->value['stime']<'0'&&$_smarty_tpl->tpl_vars['zph']->value['etime']>'0') {?>
           <div class="job_fair_state ">已开始</div>
         <?php } elseif ($_smarty_tpl->tpl_vars['zph']->value['stime']>'0') {?>
         <div class="job_fair_state job_fair_state_yd">预定中</div>      
         <?php }?>
         <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'zph','a'=>'show','id'=>'`$zph.id`'),$_smarty_tpl);?>
">
         <div class="zphname"><?php echo $_smarty_tpl->tpl_vars['zph']->value['title'];?>
</div>
         <div class="zphtime"><i class="zphtime_icon"></i><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['zph']->value['starttime'],"%Y-%m-%d");?>
 至 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['zph']->value['endtime'],"%Y-%m-%d");?>
</div>
         <div class="zphadd"><i class="zphadd_icon"></i><?php echo $_smarty_tpl->tpl_vars['zph']->value['address'];?>
</div>
         </a>
         </div>  
          <?php } ?>
          <div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
      <div class="clear"></div>
      </div>
  </div>
</section>
<section>
<?php if (!$_smarty_tpl->tpl_vars['total']->value) {?>
  <div class="wap_member_no">很抱歉，还没有发布招聘会的相关信息</div>
<?php }?>
</section>
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
