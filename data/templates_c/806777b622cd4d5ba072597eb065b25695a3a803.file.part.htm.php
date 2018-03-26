<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 16:46:56
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\part.htm" */ ?>
<?php /*%%SmartyHeaderCode:11700054645ab0ca80f1b3f3-62768124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '806777b622cd4d5ba072597eb065b25695a3a803' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\part.htm',
      1 => 1515035067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11700054645ab0ca80f1b3f3-62768124',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'city_name' => 0,
    'partclass_name' => 0,
    'searchurl' => 0,
    'partlist' => 0,
    'total' => 0,
    'pagenav' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0ca8131f8c3_19551688',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0ca8131f8c3_19551688')) {function content_5ab0ca8131f8c3_19551688($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php global $db,$db_config,$config;
		$time = time();


		
        eval('$paramer=array("item"=>"\'partlist\'","ispage"=>"1","limit"=>"10","cycle"=>"\'auto.cycle\'","provinceid"=>"\'auto.provinceid\'","cityid"=>"\'auto.cityid\'","three_cityid"=>"\'auto.three_cityid\'","type"=>"\'auto.type\'","keyword"=>"\'auto.keyword\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
        $Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }

		if($config[sy_web_site]=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config[cityid]>0 && $config[cityid]!=""){
				$paramer[cityid] = $config[cityid];
			}
			if($config[three_cityid]>0 && $config[three_cityid]!=""){
				$paramer[three_cityid] = $config[three_cityid];
			}
		}
		$where = "(`deadline`>'$time' or `deadline`=0) and `state`=1 and `r_status`<>2";
        
		if($paramer[noid]){
			$where.=" and `id`<>'".$paramer['noid']."'";
		}
		
		
		if($paramer[keyword]){
			$where .= " AND `name` LIKE '%".$paramer[keyword]."%'";
		}
	
		if($paramer[provinceid]){
			$where .= " AND `provinceid` = $paramer[provinceid]";
		}
	
		if($paramer['cityid']){
			$where .= " AND (`provinceid`=$paramer[cityid] or `cityid`=$paramer[cityid] or `three_cityid`=$paramer[cityid])";
		}
	
		if($paramer['three_cityid']){
			$where .= " AND (`three_cityid` IN ($paramer[three_cityid]))";
		}
		if($paramer['cityin']){
			$where .= " AND `three_cityid` IN ($paramer[cityin])";
		}
		
		if($paramer[rec]){
			$where.=" AND `rec_time`>".time();
		}
	
		if($paramer[type]){
			$where .= " AND `type` = $paramer[type]";
		}
		
		if($paramer[cycle]){
			$where .= " AND `billing_cycle` = $paramer[cycle]";
		}
		

		

		
		if($paramer[limit]){
			$limit = " limit ".$paramer[limit];
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"partjob",$where,$Purl,"",$paramer[limit]?$paramer[limit]:"6",$_smarty_tpl);
		}
		
		if($paramer[order] && $paramer[order]!="lastdate"){
			$order = " ORDER BY ".str_replace("'","",$paramer[order])."  ";
		}else{
			$order = " ORDER BY `lastupdate` ";
		}
	
		if($paramer[sort]){
			$sort = $paramer[sort];
		}else{
			$sort = " DESC";
		}
		$where.=$order.$sort;
		$partlist = $db->select_all("partjob",$where.$limit);
		if(is_array($partlist)){
			foreach($partlist as $v){
    			$comuids[]=$v['uid'];
    		}
			$comlist=$db->select_all("company","`uid` in(".@implode(',',$comuids).")","`uid`,`shortname`");
			foreach($partlist as $key=>$value){
				$partlist[$key] = $db->part_array_action($value,$cache_array);
				$partlist[$key][stime] = date("Y-m-d",$value[sdate]);
				$partlist[$key][etime] = date("Y-m-d",$value[edate]);
				$partlist[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
				$time=$value['lastupdate'];
			
				$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
			
				$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
			
				$week=strtotime(date("Y-m-d",strtotime("-1 week")));
				if($time>$week && $time<$beginYesterday){
					$partlist[$key]['time'] = "一周内";
				}elseif($time>$beginYesterday && $time<$beginToday){
					$partlist[$key]['time'] = "昨天";
				}elseif($time>$beginToday){
					$partlist[$key]['time'] = "今天";
				}else{
					$partlist[$key]['time'] = date("Y-m-d",$value['lastupdate']);
				}
				foreach($comlist as $v){
    				if($value[uid]==$v[uid]&&$v[shortname]){
    					$partlist[$key]['com_name'] = $v[shortname];
    				}
    			}
				//截取职位名称
				if($paramer[namelen]){
					$partlist[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
				}
				//构建职位伪静态URL
				$partlist[$key][job_url] = Url("part",array("c"=>"show","id"=>$value[id]),"1");
				if($paramer[keyword]){
					$partlist[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
					$partlist[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$partlist[$key][name_n]);
					$partlist[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
					/*$partlist[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);*/
				}
			}
			if(is_array($partlist)){
				if($paramer[keyword]!=""&&!empty($partlist)){
					addkeywords('2',$paramer[keyword]);
				}
			}
		} ?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/wap_tck.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
<section>
  <div class="searchOptions clearfix partwork_nav">
    <ul class="searchOptions_list ">
      <li class="grade popup" data-pop="grade"><a href="javascript:void(0);" class="searchOptions_list_a"><?php if ($_smarty_tpl->tpl_vars['city_name']->value[$_GET['cityid']]||$_smarty_tpl->tpl_vars['city_name']->value[$_GET['provinceid']]) {
echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['cityid']];
echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['provinceid']];
} elseif ($_smarty_tpl->tpl_vars['city_name']->value[$_GET['three_cityid']]) {
echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['three_cityid']];
} elseif ($_smarty_tpl->tpl_vars['config']->value['cityid']&&$_smarty_tpl->tpl_vars['config']->value['sy_web_site']=='1') {
echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['config']->value['cityid']];
} else { ?>兼职区域<?php }?><i class="searchOptions_icon"></i></a></li>
      <li class="Sorttype popup" data-pop="Sorttype"><a href="javascript:void(0);" class="searchOptions_list_a"><?php if ($_smarty_tpl->tpl_vars['partclass_name']->value[$_GET['type']]) {
echo $_smarty_tpl->tpl_vars['partclass_name']->value[$_GET['type']];
} else { ?>兼职类型<?php }?><i class="searchOptions_icon"></i></a></li>
      <li class="Sortcycle popup" data-pop="Sortcycle" style="border-right:none;"><a href="javascript:void(0);" class="searchOptions_list_a"><?php if ($_smarty_tpl->tpl_vars['partclass_name']->value[$_GET['cycle']]) {
echo $_smarty_tpl->tpl_vars['partclass_name']->value[$_GET['cycle']];
} else { ?>结算周期<?php }?><i class="searchOptions_icon"></i></a></li>
      <input type="hidden" id="searchurl" value="<?php echo $_smarty_tpl->tpl_vars['searchurl']->value;?>
" />
      <input type="hidden" id="waptype" value="1" />
      </ul>           
  </div>
</section>
<div class="clear"></div>
<section>
  <div class="warp_content clear">

        <div class="job_list_content">
        <ul class="part_box">
          <?php  $_smarty_tpl->tpl_vars['partlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['partlist']->_loop = false;
$partlist = $partlist; if (!is_array($partlist) && !is_object($partlist)) { settype($partlist, 'array');}
foreach ($partlist as $_smarty_tpl->tpl_vars['partlist']->key => $_smarty_tpl->tpl_vars['partlist']->value) {
$_smarty_tpl->tpl_vars['partlist']->_loop = true;
?>
          
           <li class="part_box_list"> 
           <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'part','a'=>'show','id'=>$_smarty_tpl->tpl_vars['partlist']->value['id']),$_smarty_tpl);?>
">
           <div class="part_box_list_pd">
            <span class="part_box_jobdate"><?php if ($_smarty_tpl->tpl_vars['partlist']->value['time']=='今天'||$_smarty_tpl->tpl_vars['partlist']->value['time']=='昨天') {?>
          <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['partlist']->value['time'];?>
</span>
          <?php } else { ?>
          <?php echo $_smarty_tpl->tpl_vars['partlist']->value['time'];?>

          <?php }?></span>
           <div class="part_box_list_bm">报名</div>
           
            <div class="part_box_jobname"><?php echo $_smarty_tpl->tpl_vars['partlist']->value['name'];
if ($_smarty_tpl->tpl_vars['partlist']->value['rec_time']>0) {?><i class="part_bax_tj"></i><?php }?></div>
            <div class="part_box_jobp">
            <span class="part_box_jobcity"><i class="part_box_jobiconcity"></i>
            	<?php if ($_smarty_tpl->tpl_vars['partlist']->value['job_city_three']) {?>
            		<?php echo $_smarty_tpl->tpl_vars['partlist']->value['job_city_two'];?>
-<?php echo $_smarty_tpl->tpl_vars['partlist']->value['job_city_three'];?>
-<?php echo $_smarty_tpl->tpl_vars['partlist']->value['com_name'];?>

            	<?php } elseif ($_smarty_tpl->tpl_vars['partlist']->value['job_city_two']) {?>
            		<?php echo $_smarty_tpl->tpl_vars['partlist']->value['job_city_one'];?>
-<?php echo $_smarty_tpl->tpl_vars['partlist']->value['job_city_two'];?>
-<?php echo $_smarty_tpl->tpl_vars['partlist']->value['com_name'];?>

            	<?php }?>
            </span> 
          
           
            </div>
             <div class="part_box_jobxz_box"><span class="part_box_jobxz"><i class="part_box_jobxz_fh">￥</i><?php echo $_smarty_tpl->tpl_vars['partlist']->value['salary'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['partlist']->value['job_salary_type'];?>

             <?php if ($_smarty_tpl->tpl_vars['partlist']->value['job_billing_cycle']) {?> <div class="Part_jsfs"><?php echo $_smarty_tpl->tpl_vars['partlist']->value['job_billing_cycle'];?>
</div><?php }?>
              </div>
            </div>
       
            </a>
           </li>           
           <?php } ?>
           </ul>
            <?php if ($_smarty_tpl->tpl_vars['total']->value<=0) {?>
            <?php if ($_GET['keyword']!='') {?>
            <div class="wap_member_no">没有搜索到兼职<div><a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'part'),$_smarty_tpl);?>
">重新搜索</a></div></div>
            <?php } else { ?>
            <div class="wap_member_no">暂无兼职<div><a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'part'),$_smarty_tpl);?>
">重新搜索</a></div></div>
            <?php }?>
            <?php } else { ?>
            <div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
            <?php }?>         
      </div>
  </div>
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
   <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/js/search.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/js/demo.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> 
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/demo.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/publictwo.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
