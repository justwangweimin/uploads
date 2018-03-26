<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 15:48:02
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\job_show.htm" */ ?>
<?php /*%%SmartyHeaderCode:5454771075ab0bcb25638d9-60755419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b6923309cc23fc2e69d083dcd9c3c7580d7111d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\job_show.htm',
      1 => 1518429686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5454771075ab0bcb25638d9-60755419',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'job' => 0,
    'usertypemsg' => 0,
    'city_name' => 0,
    'comclass_name' => 0,
    'company' => 0,
    'comrat' => 0,
    'industry_name' => 0,
    'wlist' => 0,
    'wlists' => 0,
    'look_msg' => 0,
    'usertype' => 0,
    'Info' => 0,
    'pre' => 0,
    'uid' => 0,
    'job_jia' => 0,
    'wap_style' => 0,
    'title' => 0,
    'description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0bcb2b5bb66_06445055',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0bcb2b5bb66_06445055')) {function content_5ab0bcb2b5bb66_06445055($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php global $db,$db_config,$config;
		$time = time();
		
		
		
        eval('$paramer=array("limit"=>"4","order"=>"\'rec\'","noid"=>"\'@job.id\'","jobids"=>"\'@job.job1\'","namelen"=>"15","item"=>"\'job_jia\'","key"=>"\'key\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
        $Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		include_once  PLUS_PATH."/comrating.cache.php";
		include(CONFIG_PATH."db.data.php"); 
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
			if($config[hyclass]>0 && $config[hyclass]!=""){
				$paramer[hy]=$config[hyclass];
			}
		}
		if($paramer[sdate]){
			$where = "`sdate`>".strtotime("-".intval($paramer[sdate])." day",time())." and `edate`>'$time' and `state`=1";
		}else{
			$where = "`state`=1 and `edate`>'$time'";
		}
        
		
		if($paramer[uid]){
			$where .= " AND `uid` = '$paramer[uid]'";
		}
		
		if($paramer[rec]){
			
			$where.=" AND `rec_time`>=".time();
			
		}
		
		if($paramer['cert']){
			$job_uid=array();
			$company=$db->select_all("company","`yyzz_status`=1","`uid`");
			if(is_array($company)){
				foreach($company as $v){
					$job_uid[]=$v['uid'];
				}
			}
			$where.=" and `uid` in (".@implode(",",$job_uid).")";
		}
		
		if($paramer[noid]){
			$where.= " and `id`<>$paramer[noid]";
		}
		
		if($paramer[r_status]){
			$where.= " and `r_status`=2";
		}else{
			$where.= " and `r_status`=1";
		}
		
		if($paramer[status]){
			$where.= " and `status`='1'";
		}else{
			$where.= " and `status`='0'";
		}
		
		if($paramer[pr]){
			$where .= " AND `pr` =$paramer[pr]";
		}
		
		if($paramer['hy']){
			$where .= " AND `hy` = $paramer[hy]";
		} 
		
		if($paramer[mun]){
			$where .= " AND `mun` = $paramer[mun]";
		}
	
		if($paramer[job1]){
			$where .= " AND `job1` = $paramer[job1]";
		}
		
		if($paramer[job1_son]){
			$where .= " AND `job1_son` = $paramer[job1_son]";
		}
		
		if($paramer[job_post]){
			$where .= " AND (`job_post` IN ($paramer[job_post]))";
		}
		
		if($paramer['jobwhere']){
			$where .=" and ".$paramer['jobwhere'];
		}
		
		if($paramer['jobids']){
			$where.= " AND (`job1` = $paramer[jobids] OR `job1_son`=$paramer[jobids] OR `job_post`=$paramer[jobids])";
		}
		
		if($paramer['jobin']){
			$where .= " AND (`job1` IN ($paramer[jobin]) OR `job1_son` IN ($paramer[jobin]) OR `job_post` IN ($paramer[jobin]))";
		}
		
		if($paramer[provinceid]){
			$where .= " AND `provinceid` = $paramer[provinceid]";
		}
	
		if($paramer['cityid']){
			$where .= " AND (`cityid` IN ($paramer[cityid]))";
		}
	
		if($paramer['three_cityid']){
			$where .= " AND (`three_cityid` IN ($paramer[three_cityid]))";
		}
		if($paramer['cityin']){
			$where .= " AND `three_cityid` IN ($paramer[cityin])";
		}
		
		if($paramer[edu]){
			$where .= " AND `edu` = $paramer[edu]";
		}
		
		if($paramer[exp]){
			$where .= " AND `exp` = $paramer[exp]";
		}
		
		if($paramer[report]){
			$where .= " AND `report` = $paramer[report]";
		}
		
		if($paramer[type]){
			$where .= " AND `type` = $paramer[type]";
		}
	
		if($paramer[sex]){
			$where .= " AND `sex` = $paramer[sex]";
		}
		
		
		if($paramer[mun]){
			$where .= " AND `mun` = $paramer[mun]";
		}
		if($paramer[minsalary]&&$paramer[maxsalary]){
			$where.= " AND ((`minsalary`<=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
						or (`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`>=".intval($paramer[maxsalary])."))";
			
    	}elseif($paramer[minsalary]&&!$paramer[maxsalary]){
			$where.= " AND ((`minsalary`<=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
						or (`minsalary`>=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
						or (`minsalary`!=0 and  `maxsalary`=0))";
			
		}elseif(!$paramer[minsalary]&&$paramer[maxsalary]){
			$where.= " AND ((`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`>=".intval($paramer[maxsalary]).") 
						or (`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`<=".intval($paramer[maxsalary]).") 
						or (`minsalary`<=".intval($paramer[maxsalary])." and maxsalary=0) 
						or (`minsalary`=0 and  `maxsalary`!=0)
						)";
			
		}
       
        $cache_array = $db->cacheget();
		$comclass_name = $cache_array["comclass_name"];
		if($paramer[welfare]){
		    $welfarename=$comclass_name[$paramer[welfare]];
			$welfare=$db->select_all("company","`name`<>'' and `hy`<>'' and FIND_IN_SET('".$welfarename."',`welfare`)","`uid`");
			if(is_array($welfare)){
				foreach($welfare as $v){
					$welfareid[]=$v['uid'];
				}
			}
			$where .=" AND uid in (".@implode(",",$welfareid).")";
		}
		
		if($paramer[cityin]){
			$where .= " AND (`provinceid` IN ($paramer[cityin]) OR `cityid` IN ($paramer[cityin]) OR `three_cityid` IN ($paramer[cityin]))";
		}
		
		if($paramer[urgent]){
			$where.=" AND `urgent_time`>".time();
		}
		
		if($paramer[uptime]){
			if($paramer[uptime]==1){
				$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
    			$where.=" AND lastupdate>$beginToday";
    		}else{
    			$time=time();
				$uptime = $time-($paramer[uptime]*86400);
				$where.=" AND lastupdate>$uptime";
    		}
		}
		
		if($paramer[comname]){
			$where.=" AND `com_name` LIKE '%".$paramer[comname]."%'";
		}
		
		if($paramer[com_pro]){
			$where.=" AND `com_provinceid` ='".$paramer[com_pro]."'";
		}
	
		if($paramer[keyword]){
			$where1[]="`name` LIKE '%".$paramer[keyword]."%'";
			$where1[]="`com_name` LIKE '%".$paramer[keyword]."%'";
			include  PLUS_PATH."/city.cache.php";
			foreach($city_name as $k=>$v){
				if(strpos($v,$paramer[keyword])!==false){
					$cityid[]=$k;
				}
			}
			if(is_array($cityid)){
				foreach($cityid as $value){
					$class[]= "(provinceid = '".$value."' or cityid = '".$value."')";
				}
				$where1[]=@implode(" or ",$class);
			}
			$where.=" AND (".@implode(" or ",$where1).")";
		}
		
		if($paramer["job"]){
			$where.=" AND `job_post` in ($paramer[job])";
		}
		
		if($paramer[bid]){
			$where.="  and `xsdate`>'".time()."'";
		} 
		
		
		if($paramer[where]){
			$where = $paramer[where];
		}

		
		if($paramer[limit]){
			$limit = " limit ".$paramer[limit];
		}

		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);
          
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
		 
		$job_jia = $db->select_all("company_job",$where.$limit);
		if(is_array($job_jia)){
		
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($job_jia as $key=>$value){
				if(in_array($value['uid'],$comuid)==false){$comuid[] = $value['uid'];}
				if(in_array($value['id'],$jobid)==false){$jobid[] = $value['id'];} 
			}
			$comuids = @implode(',',$comuid);
			$jobids = @implode(',',$jobid);
			
			if($comuids){
				$r_uids=$db->select_all("company","`uid` IN (".$comuids.")","`uid`,`yyzz_status`,`logo`,`pr`,`hy`,`mun`,`shortname`");
				if(is_array($r_uids)){
					foreach($r_uids as $key=>$value){
						if($value[shortname]){
    						$value['shortname_n'] = $value[shortname];
    					}
						if(!$value['logo'] || !file_exists(str_replace($config['sy_weburl'],APP_PATH,$value['logo']))){
							$value['logo'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
						}else{
							$value['logo']= $config['sy_weburl']."/".$value['logo'];
						}
						$value['pr_n'] = $cache_array['comclass_name'][$value[pr]];
						$value['hy_n'] = $cache_array['industry_name'][$value[hy]];
						$value['mun_n'] = $cache_array['comclass_name'][$value[mun]];
						$r_uid[$value['uid']] = $value;
					}
				}
			}
			    
			
			if($paramer[bid]){
				$noids=array();
			}	
			foreach($job_jia as $key=>$value){

				if($paramer[bid]){
					$noids[] = $value[id];
				}
				
				if($paramer[noids]==1 && !empty($noids) && in_array($value['id'],$noids)){
					unset($job_jia[$key]);
					continue;
				}else{
					$job_jia[$key] = $db->array_action($value,$cache_array);
					$job_jia[$key][stime] = date("Y-m-d",$value[sdate]);
					$job_jia[$key][etime] = date("Y-m-d",$value[edate]);
					if($arr_data['sex'][$value['sex']]){
						$job_jia[$key][sex_n]=$arr_data['sex'][$value['sex']];
					}
					$job_jia[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
					if($value[minsalary]&&$value[maxsalary]){
						$job_jia[$key][job_salary] =$value[minsalary]."-".$value[maxsalary];
					}elseif($value[minsalary]){
						$job_jia[$key][job_salary] =$value[minsalary]."以上";
					}else{
						$job_jia[$key][job_salary] ="面议";
					}
					if($r_uid[$value['uid']][shortname]){
						$job_jia[$key][com_name] =$r_uid[$value['uid']][shortname];
					}
					$job_jia[$key][yyzz_status] =$r_uid[$value['uid']][yyzz_status];
					$job_jia[$key][logo] =$r_uid[$value['uid']][logo];
					$job_jia[$key][pr_n] =$r_uid[$value['uid']][pr_n];
					$job_jia[$key][hy_n] =$r_uid[$value['uid']][hy_n];
					$job_jia[$key][mun_n] =$r_uid[$value['uid']][mun_n];
					$time=$value['lastupdate'];
					
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
					
					$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
					
					$week=strtotime(date("Y-m-d",strtotime("-1 week")));
					if($time>$week && $time<$beginYesterday){
						$job_jia[$key]['time'] ="一周内";
					}elseif($time>$beginYesterday && $time<$beginToday){
						$job_jia[$key]['time'] ="昨天";
					}elseif($time>$beginToday){	
						$job_jia[$key]['time'] = date("H:i",$value['lastupdate']);
						$job_jia[$key]['redtime'] =1;
					}else{
						$job_jia[$key]['time'] = date("Y-m-d",$value['lastupdate']);
					}
					
					if(is_array($job_jia[$key]['welfare'])&&$job_jia[$key]['welfare']){
						foreach($job_jia[$key]['welfare'] as $val){
							//$job_jia[$key]['welfarename'][]=$cache_array['comclass_name'][$val];
							$job_jia[$key]['welfarename'][]=$val;
						}
					}
					
					if($paramer[comlen]){
						if($r_uid[$value['uid']][shortname]){
							$job_jia[$key][com_n] = mb_substr($r_uid[$value['uid']][shortname],0,$paramer[comlen],"utf-8");
						}else{
							$job_jia[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"utf-8");
						}
					}
					
					if($paramer[namelen]){
						if($value['rec_time']>time()){
							$job_jia[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"utf-8")."</font>";
						}else{
							$job_jia[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
						}
					}else{
						if($value['rec_time']>time()){
							$job_jia[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
						}
					}
					
					$job_jia[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
					
					$job_jia[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
					foreach($comrat as $k=>$v){
						if($value[rating]==$v[id]){
							$job_jia[$key][color] = str_replace("#","",$v[com_color]);
							$job_jia[$key][ratlogo] = $v[com_pic];
							$job_jia[$key][ratname] = $v[name];
						}
					}
					if($paramer[keyword]){
						$job_jia[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
						$job_jia[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
						$job_jia[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job_jia[$key][name_n]);
						$job_jia[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job_jia[$key][com_n]);
						$job_jia[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
						$job_jia[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
					}
				}
			}

			if(is_array($job_jia)){
				if($paramer[keyword]!=""&&!empty($job_jia)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		} ?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<div class="header_navlist"><a href="javascript:void(0);" id="jobclick"><i class="naviconfont"></i></a></div>
<?php echo '<script'; ?>
>wapurl="<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
";<?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
>var weburl="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
"<?php echo '</script'; ?>
>
<section>
<div class="com_show_t1_box">
  <div class="com_show_t1">
        <h2><?php echo $_smarty_tpl->tpl_vars['job']->value['name'];?>
 
        <?php if ($_smarty_tpl->tpl_vars['job']->value['rec']=='1'&&$_smarty_tpl->tpl_vars['job']->value['rec_time']>time()) {?> <i class="job_list_tj">推荐</i><?php }?> 
        <?php if ($_smarty_tpl->tpl_vars['job']->value['urgent']=='1'&&$_smarty_tpl->tpl_vars['job']->value['urgent_time']>time()) {?><i class="urgent">急招</i><?php }?></h2>
       </div>
       <div class="com_shw_xz"><em class="com_show_xzcolor"><?php if ($_smarty_tpl->tpl_vars['job']->value['minsalary']&&$_smarty_tpl->tpl_vars['job']->value['maxsalary']) {
echo $_smarty_tpl->tpl_vars['job']->value['minsalary'];?>
-<?php echo $_smarty_tpl->tpl_vars['job']->value['maxsalary'];?>
元/月<?php } elseif ($_smarty_tpl->tpl_vars['job']->value['minsalary']) {
echo $_smarty_tpl->tpl_vars['job']->value['minsalary'];?>
以上 元/月<?php } else { ?>面议<?php }?></em></div>
              <div class="com_show_t2"> <span class="com_show_time">更新于：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value['lastupdate'],"%Y-%m-%d");?>
</span><span class="com_show_eye">浏览：<?php echo '<script'; ?>
 language="javascript" src="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'GetHits','id'=>'`$job.id`'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>人</span>  </div>
              
                        <div class="yun_job_collections "> 
          	<?php if ($_smarty_tpl->tpl_vars['job']->value['fav_job']) {?> 
	          	<span class="yun_job_footer_bth"><i class="iconfont_sc "></i>
	          		<span class="yun_job_footer_s yun_job_footer_fx_y">已收藏</span>
	          	</span> 
          	<?php } elseif ($_smarty_tpl->tpl_vars['usertypemsg']->value) {?>
          		<a href="javascript:void(0);" onclick="notuser();" class="yun_job_footer_bth">
          			<i class="iconfont_sc iconfont_ysc"></i> <span class="yun_job_collections_p ">收藏</span> 
          		</a> 
          	<?php } else { ?> 
          		<a href="javascript:jobfav('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');" class="yun_job_footer_bth">
          			<i class="iconfont_sc iconfont_ysc"></i> 
          			<span class="yun_job_collections_p ">收藏</span> 
          		</a> 
          	<?php }?>
			
			</div>
            
       </div>
      
       <div class="com_show_joblb">
       <ul >
        <li><i class="com_show_useryq_icon com_show_useryq_icon_city"></i><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['job']->value['provinceid']];?>
/<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['job']->value['cityid']];?>
</li>
            <?php if ($_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['job']->value['exp']]) {?><li><i class="com_show_useryq_icon com_show_useryq_icon_jy"></i><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['job']->value['exp']];?>
</li> <?php }?>
       <?php if ($_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['job']->value['edu']]) {?> 
       <li><i class="com_show_useryq_icon com_show_useryq_icon_xl"></i>
       <?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['job']->value['edu']];?>

       </li> <?php }?>
       </ul>        
   
       </div>
</section>

<section>
    <div class="user_contnet_box mt10"> 
    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'show','id'=>$_smarty_tpl->tpl_vars['job']->value['uid']),$_smarty_tpl);?>
" class="com_show_firm">
      <aside class="com_show_firm_name"><?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
 
        
        <?php if ($_smarty_tpl->tpl_vars['comrat']->value['com_pic']!="0"&&$_smarty_tpl->tpl_vars['comrat']->value['com_pic']!='') {?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['comrat']->value['com_pic'];?>
" /> 
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['company']->value['yyzz_status']=='1') {?>
        <i class="job_qy_rz_icon"></i>
        <?php }?>
        </aside>
        <aside class="com_show_firm_guim" style="color:#999">
      <?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['company']->value['pr']];?>
<span class="yun_jobline">|</span><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['company']->value['mun']];?>
  <span class="yun_jobline">|</span><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['company']->value['hy']];?>
</aside><i class="com_show_firm_icon"></i> 
      
    </a> 
      
      </div>
</section>

<?php if ($_smarty_tpl->tpl_vars['company']->value['address']) {?>
<div class="com_map">
	<?php if ($_smarty_tpl->tpl_vars['company']->value['x']&&$_smarty_tpl->tpl_vars['company']->value['y']) {?>
	 <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'job_map','comid'=>$_smarty_tpl->tpl_vars['job']->value['uid']),$_smarty_tpl);?>
"><span class="com_map_name">地址</span><?php echo $_smarty_tpl->tpl_vars['company']->value['address'];?>
<em id="distance"></em><i class="com_map_name_icon"></i></a>
	 <input type="hidden" id="map_x" value="0"/>
	 <input type="hidden" id="map_y" value="0"/>
	<?php } else { ?>
	<span class="com_map_name">地址</span><?php echo $_smarty_tpl->tpl_vars['company']->value['address'];?>

	<?php }?>
</div>
<?php }?>

 <?php if (count($_smarty_tpl->tpl_vars['job']->value['welfare'])>0) {?> 
 <div class="com_welfare ">
      <aside class="com_show_fl"> <?php  $_smarty_tpl->tpl_vars['wlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job']->value['welfare']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wlist']->key => $_smarty_tpl->tpl_vars['wlist']->value) {
$_smarty_tpl->tpl_vars['wlist']->_loop = true;
?>
       <span class="com_show_fl_s"><?php echo $_smarty_tpl->tpl_vars['wlist']->value;?>
</span> <?php } ?> </aside></div>
      <?php }?> 
      



       
      <div class="clear"></div>
<section>

    <div class="user_contnet_box  mt10">
      <div class="wap_title"><span class="">任职要求</span></div>
      <ul class="user_contnet_ul user_contnet_ul_wip4">
     
       
   <?php if ($_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['job']->value['number']]) {?> 
        <li> <span class="user_contnet_info_n">招聘：</span><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['job']->value['number']];?>
</li> <?php }?>
     
        <?php if ($_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['job']->value['report']]) {?><li><span class="user_contnet_info_n">到岗：</span><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['job']->value['report']];?>
</li> <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['job']->value['age']]) {?><li><span class="user_contnet_info_n">年龄：</span><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['job']->value['age']];?>
</li> <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['job']->value['sex']) {?> <li><span class="user_contnet_info_n">性别：</span><?php echo $_smarty_tpl->tpl_vars['job']->value['sex'];?>
</li> <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['job']->value['marriage']]) {?><li><span class="user_contnet_info_n">婚况：</span><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['job']->value['marriage']];?>
</li> <?php }?>           
        <?php if ($_smarty_tpl->tpl_vars['job']->value['lang']) {?>
			<li class="com_show_li"><span class="user_contnet_info_n">语言：</span><?php  $_smarty_tpl->tpl_vars['wlists'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wlists']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job']->value['lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wlists']->key => $_smarty_tpl->tpl_vars['wlists']->value) {
$_smarty_tpl->tpl_vars['wlists']->_loop = true;
?>  
            <span class="yun_com_fl_dy "><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['wlists']->value];?>
</span>
          
          <?php } ?> 
		  </li> 
		  <?php }?>
      </ul>

  </div>
</section><section>
  <div class="user_contnet_box mt10">
    <div class="wap_title"><span class="">联系方式</span></div>
    <?php if ($_smarty_tpl->tpl_vars['look_msg']->value=='4') {?>
    <div class="com_post_login"> <i class="com_post_tel iconfont"></i>企业没有开放联系信息，请直接申请职位！ </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['look_msg']->value=='2') {?>
    <div class="com_post_login"> <i class="com_post_tel iconfont"></i>您不是个人用户，不能查看联系方式 </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['look_msg']->value=='1') {?>
     <ul class="com_post_msg com_post_msg_touch com_post_msg_bot">
      <?php if ($_smarty_tpl->tpl_vars['job']->value['linkman']) {?><li><i class="com_post_msg_touch_icon iconfont_jobshow_teluser"></i>联&nbsp;系 &nbsp;人：<?php echo $_smarty_tpl->tpl_vars['job']->value['linkman'];?>
</li>  <?php }?>                 
      <?php if ($_smarty_tpl->tpl_vars['job']->value['linktel']) {?><li class="com_post_msg_tel"><i class="com_post_msg_touch_icon iconfont_jobshow_telip"></i>联系电话：<a href="tel:<?php echo $_smarty_tpl->tpl_vars['job']->value['linktel'];?>
" style="color:red;"><?php echo $_smarty_tpl->tpl_vars['job']->value['linktel'];?>
</a></li> <?php }?>           	  
	  </ul>

      <div class="com_post_login"> <i class="com_post_tel iconfont"></i>请登录后查看联系方式 <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login','job'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
" class="com_s_logoin">登录</a> <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'register'),$_smarty_tpl);?>
" class="com_s_reg">注册</a></div>
  
    <?php } elseif ($_smarty_tpl->tpl_vars['look_msg']->value=='3') {?>
    <div class="com_post_login"> <i class="com_post_tel iconfont"></i>发布简历查看联系方式 <a href="<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
/member/index.php?c=addresume" class="com_s_logoin">发布简历</a> </div>
    <?php } else { ?>

    <ul class="com_post_msg com_post_msg_touch com_post_msg_bot">
      <?php if ($_smarty_tpl->tpl_vars['job']->value['linkman']) {?><li><i class="com_post_msg_touch_icon iconfont_jobshow_teluser"></i>联&nbsp;系 &nbsp;人：<?php echo $_smarty_tpl->tpl_vars['job']->value['linkman'];?>
</li><?php }?>
      <?php if ($_smarty_tpl->tpl_vars['company']->value['linkphone']) {?><li class="com_post_msg_tel"><i class="com_post_msg_touch_icon iconfont_jobshow_tel"></i>联系电话：<a href="tel:<?php echo $_smarty_tpl->tpl_vars['company']->value['linkphone'];?>
" style="color:red;"><?php echo $_smarty_tpl->tpl_vars['company']->value['linkphone'];?>
<span class="com_post_tel_bd" style="color:grey"><i class="com_post_zx iconfont"style="color:#16DC34;"></i>
        <div class="com_post_tel_bd_p">拨打咨询</div>
        </span></a></li><?php }?>
      <?php if ($_smarty_tpl->tpl_vars['job']->value['linktel']) {?><li class="com_post_msg_tel"><i class="com_post_msg_touch_icon iconfont_jobshow_telip"></i>联系手机：<a href="tel:<?php echo $_smarty_tpl->tpl_vars['job']->value['linktel'];?>
"style="color:red;"><?php echo $_smarty_tpl->tpl_vars['job']->value['linktel'];?>
<span class="com_post_tel_bd" style="color:grey"><i class="com_post_zx iconfont"style="color:#16DC34;"></i>
        <div class="com_post_tel_bd_p">拨打咨询</div>
        </span></a></li><?php }?>
      <?php if ($_smarty_tpl->tpl_vars['company']->value['busstops']) {?><li><i class="com_post_msg_touch_icon iconfont_jobshow_bus"></i>公交站点：<?php echo $_smarty_tpl->tpl_vars['company']->value['busstops'];?>
</li><?php }?>
    </ul>
    <?php }?>
	 
</div>
</section>
<section>
    <div class="user_contnet_box  mt10">
  <div class="wap_title"><span class="">职位描述</span></div>
  <div class="jobshow_content"><?php echo $_smarty_tpl->tpl_vars['job']->value['description'];?>
 </div>
  <div class="jobshow_hr">
  <div class="job_hr_tit">职位发布者</div>
  <div class="job_hr_ly">
  <div class="job_hr_ly_hr">HR</div>

  你好！我是企业的HR<br>
想了解更多职位信息请留言给我  <?php if ($_smarty_tpl->tpl_vars['usertype']->value==1&&$_smarty_tpl->tpl_vars['config']->value['com_message']==1) {?>
  <a href="javascript:void(0);" onclick="zixun();" class="job_hr_left_ly">给我留言</a><?php }?>
</div>
<ul class="job_hr_zk">
<li><em class="job_hr_zk_n"><?php echo $_smarty_tpl->tpl_vars['Info']->value['snum'];?>
</em>简历投递</li>
<li><em class="job_hr_zk_n"><?php echo $_smarty_tpl->tpl_vars['pre']->value;?>
%</em>简历回复率</li>
<li><em class="job_hr_zk_n"><?php echo $_smarty_tpl->tpl_vars['Info']->value['operatime'];?>
</em>简历回复时长</li>
</ul>
  </div>
  </div>
</section>


      
<section>
    <div class="job_show_tip"> 
    <div class="job_show_tip_jb">
   
		   <?php if ($_smarty_tpl->tpl_vars['config']->value['user_report']==1) {?>
				<?php if ($_smarty_tpl->tpl_vars['usertype']->value=='1') {?>
					<a href="javascript:void(0)"  onclick="reportcom('<?php echo $_smarty_tpl->tpl_vars['usertype']->value;?>
');"><span class="job_show_tip_tip_i"></span>举报</a> 
				<?php } elseif ($_smarty_tpl->tpl_vars['uid']->value) {?>
					<a href="javascript:void(0)" onclick="notuser();"><span class="job_show_tip_tip_i"></span>举报</a> 
				<?php } else { ?>
					<a href="javascript:void(0)" onclick="layermsg('请登陆个人账号！')" ><span class="job_show_tip_tip_i"></span>举报</a>
				<?php }?>
			<?php }?>
     
     </div>
      <div class="job_show_tip_p">
        <div class="job_show_tip_p_t">如遇无效、虚假、诈骗信息，请立即举报</div>
        <div><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_shenming'];?>
</div>  
  </div>  </div>
</section>
<section  id="job">
    <div class="user_contnet_box  mt10">

      <div class="wap_title"><span class="">推荐职位</span></div>
      
       <?php  $_smarty_tpl->tpl_vars['job_jia'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job_jia']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$job_jia = $job_jia; if (!is_array($job_jia) && !is_object($job_jia)) { settype($job_jia, 'array');}
foreach ($job_jia as $_smarty_tpl->tpl_vars['job_jia']->key => $_smarty_tpl->tpl_vars['job_jia']->value) {
$_smarty_tpl->tpl_vars['job_jia']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['job_jia']->key;
?>
      <div class="job_list_similar"> 
      <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'view','id'=>$_smarty_tpl->tpl_vars['job_jia']->value['id']),$_smarty_tpl);?>
" class="job_list">
        <h3><?php echo $_smarty_tpl->tpl_vars['job_jia']->value['name_n'];?>
</h3>
        <aside class="job_list_similarcom_name"><?php echo $_smarty_tpl->tpl_vars['job_jia']->value['com_name'];
if ($_smarty_tpl->tpl_vars['job_jia']->value['ratlogo']!=''&&$_smarty_tpl->tpl_vars['job_jia']->value['ratlogo']!="0") {?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['job_jia']->value['ratlogo'];?>
" style="vertical-align:middle"/> 
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['job_jia']->value['yyzz_status']=='1') {?>
        <i class="job_qy_rz_icon"></i>
        <?php }?>
       </aside>
        <ul class="job_list_similar_bot">
        <li class="job_list_similar_bot_t  "><span class="job_list_similar_money"><i class="job_list_similar_money_icon"></i><?php echo $_smarty_tpl->tpl_vars['job_jia']->value['job_salary'];?>
</span></li>
       <li class="job_list_similar_bot_b">  <span class="job_list_similar_city"><i class="job_list_similar_city_icon"></i><?php echo $_smarty_tpl->tpl_vars['job_jia']->value['job_city_one'];?>
-<?php echo $_smarty_tpl->tpl_vars['job_jia']->value['job_city_two'];?>
 </span></li>
         <li><span class="job_list_similar_date"><i class="job_list_similar_date_icon"></i><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value['lastupdate'],"%Y-%m-%d");?>
</span> </li>
         </ul>
        </a> 
        </div>
       <?php } ?>        
  </div>
</section>
<section>
	<div class="yun_job_footer">
		<div class="yun_job_footer_fixed">
			<div class="yun_job_footer_bg">
				<div class="yun_job_footer_fx_left">

					<div class="yun_job_tel" > 
						<?php if ($_smarty_tpl->tpl_vars['look_msg']->value=='4') {?>
							<a><i class="iconfont_tel"></i> <span class="yun_job_footer_s">企业未开放联系信息</span></a>
						<?php } elseif ($_smarty_tpl->tpl_vars['look_msg']->value=='2') {?>
							<a><i class="iconfont_tel"></i> <span class="yun_job_footer_s">仅限个人用户查看</span></a>
						<?php } elseif ($_smarty_tpl->tpl_vars['look_msg']->value=='1') {?>
							<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login','job'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
"><i class="iconfont_tel"></i> <span class="yun_job_footer_s">拨打电话</span></a>
						<?php } elseif ($_smarty_tpl->tpl_vars['look_msg']->value=='3') {?>
							<a href="<?php echo smarty_function_url(array('m'=>'wap'),$_smarty_tpl);?>
/member/index.php?c=addresume"><i class="iconfont_tel"></i> <span class="yun_job_footer_s">请先发布简历</span></a> 
						<?php } elseif ($_smarty_tpl->tpl_vars['job']->value['linktel']) {?>
							<a href="tel:<?php echo $_smarty_tpl->tpl_vars['job']->value['linktel'];?>
"><i class="iconfont_tel"></i> <span class="yun_job_footer_s">拨打电话</span></a>
						<?php } elseif ($_smarty_tpl->tpl_vars['company']->value['linkphone']) {?>
							<a href="tel:<?php echo $_smarty_tpl->tpl_vars['company']->value['linkphone'];?>
"><i class="iconfont_tel"></i> <span class="yun_job_footer_s">拨打电话</span></a>
						<?php }?>
					</div>   
        <div class="yun_job_footer_fx"> <a href="javascript:void(0);" data-url='<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'share','id'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
' id="shareClick" class=""> <i class="iconfont_jobshare"></i> <span class="yun_job_footer_s">分享</span></a></div>
        
		</div>
        
        <div class="yun_job_footer_fx_right"> 
        	<?php if ($_smarty_tpl->tpl_vars['job']->value['userid_job']) {?> 
        		<span class="yun_job_footer_fx_right_ytd_bth">已投递简历</span>
        	<?php } elseif ($_smarty_tpl->tpl_vars['job']->value['invite_job']) {?>
        		<span class="yun_job_footer_fx_right_ytd_bth">已邀请面试</span>
        	<?php } elseif ($_smarty_tpl->tpl_vars['uid']->value=='') {?> 
				<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'applyjobuid','jobid'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
"  class="yun_job_footer_fx_right_bth">投递简历</a>
				
			<?php } elseif ($_smarty_tpl->tpl_vars['usertypemsg']->value) {?> 
				<a  href="javascript:void(0);" onclick="notuser();" class="yun_job_footer_fx_right_bth">投递简历</a>
			<?php } else { ?> 
				<a  href="javascript:jobapply('<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');"class="yun_job_footer_fx_right_bth">投递简历</a> 
			<?php }?> 
		</div>
      </div>
    </div>
  </div>
</section>

<!--弹出框-->
<div id="notuser" style="width:350px; display:none">
	<div class="job_user_box">
		<div class="job_user_name"><?php echo $_smarty_tpl->tpl_vars['usertypemsg']->value;?>
</div>
        <?php if ($_smarty_tpl->tpl_vars['usertype']->value!="1") {?>
		<div class="job_user_name_tip">请登录个人用户</div>
        <?php }?> 
		<div><a href="javascript:void(0)" onclick="layer.closeAll()" class="job_user_box_hn">忽略</a><a href="javascript:void(0)" onclick="switching('<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'jobout'),$_smarty_tpl);?>
','<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
')" class="job_user_box_qh">切换账户</a></div>
	</div>
</div>
<!--举报--> 

<div style=" background:#fff;border-radius:10px;display:none" id="reportcom">
<div class="report_box">
<div class="report_box_h1">举报此职位</div>
<div class="report_box_tit">举报原因：</div>
 <textarea class="report_box_textarea" id="r_reason"></textarea>
<div class="report_box_yz">
<span class="report_box_yz_name">验证码： </span> <input type="text" class="report_box_text" id="authcode" maxlength="4">
<img id="vcode_img" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wapdomain'];?>
/authcode.inc.php" class="report_box_yz_img"/> <a onclick="checkCode('vcode_img');">看不清?</a>
</div>
<div class="report_box_bth"> <input class="login_button_jb" type="button" value="举报"  onclick="reportSub();"/> <input class="login_button_qx" type="button" value="取消"  onclick="reportqx();"/></div>
</div>
</div> 

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
<?php echo '<script'; ?>
>
var config = {
		url:'<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'share','id'=>$_smarty_tpl->tpl_vars['job']->value['id']),$_smarty_tpl);?>
',
		title:'<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
',
		desc:'<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
',
		img:'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_sharelogo'];?>
',
		img_title:'<?php echo $_smarty_tpl->tpl_vars['job']->value['name'];?>
',
		from:'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webname'];?>
'
	};
var content=''; 
function reportcom(usertype){
	if(usertype==1){ 
		content=$("#reportcom").html();  
		$("#reportcom").html('');
		layer.open({
			type:1,
			shadeClose:false,
			content:content 
		});
	}else{
		layermsg('只有个人会员才能举报！'); return false;
	}
}
function reportqx(){
	$("#reportcom").html(content);
	layer.closeAll();
}
function reportSub(){ 
	var authcode=$("#authcode").val();
	var reason=$("#r_reason").val();
	if(reason==''){
		layermsg('请填写举报原因！'); return false;
	}
	if(authcode==''){
		layermsg('请填写验证码！'); return false;
	} 
	layer.closeAll(); 
	layer_load('执行中，请稍候...');
	$.post(wapurl+"?c=job&a=report",{id:'<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
',authcode:authcode,reason:reason},function(data){
		layer.closeAll();
		var data=eval('('+data+')');
		if(data.url){
			layermsg(data.msg,2,function(){location.href = data.url;});	
		}else{ 
			layermsg(data.msg,2,function(){location.reload();});	
		}
	});
}

function zixun(){
	layer.open({
		type : 1,
		title : '咨询',
		closeBtn : [0 , true], 
		border : [10 , 0.3 , '#000', true],
		area : ['300px','320px'],
		content : '<div class="report_box"><textarea class="report_box_textarea mt10" id="reasons"></textarea><input type="hidden" name="jobid" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['id'];?>
" /><input type="hidden" name="job_uid" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['uid'];?>
" /><input type="hidden" name="com_name" value="<?php echo $_smarty_tpl->tpl_vars['Info']->value['com_name'];?>
" /><input type="hidden" name="job_name" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['name'];?>
" /><div class="report_box_yz"><span class="report_box_yz_name">验证码： </span> <input type="text" class="report_box_text" id="authcodes" maxlength="4"><img id="vcode_imgs" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wapdomain'];?>
/authcode.inc.php" class="report_box_yz_img"/> <a onclick="checkCode(\'vcode_imgs\');">看不清?</a></div><div class="report_box_bth"><input class="login_button_jb" type="button" value="提交咨询"  onclick="zixunSubs();"/><input class="login_button_qx" type="button" value="取消"  onclick="zixunqxs();"/></div></div>'	
	});
}
function zixunqxs(){
	$("#zixuns").html();
	layer.closeAll();
}
function zixunSubs(){ 
	var authcode=$("#authcodes").val();
	var reason=$("#reasons").val();
	var jobid=$.trim($("input[name='jobid']").val());
	var job_uid=$.trim($("input[name='job_uid']").val());
	var com_name=$.trim($("input[name='com_name']").val());
	var job_name=$.trim($("input[name='job_name']").val());
	if(reason==''){
		layermsg('请填写咨询内容！'); return false;
	}
	if(authcode==''){
		layermsg('请填写验证码！'); return false;
	} 
	
	layer_load('执行中，请稍候...');
	$.post(wapurl+"?c=job&a=msg",{id:'<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
',authcode:authcode,reason:reason,jobid:jobid,job_uid:job_uid,com_name:com_name,job_name:job_name},function(data){
		layer.closeAll();
		var data=eval('('+data+')');
		if(data.url){
			layermsg(data.msg,2,function(){location.href = data.url;});	
		}else{ 
			layermsg(data.msg,2,function(){location.reload();});	
		}
	});
}
function jobapply(jobid){
	layer_load('执行中，请稍候...');
	$.get(wapurl+"?c=job&a=view&type=sq&id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
",function(data){
		layer.closeAll();
		var data=eval('('+data+')');
		if(data.url){
			if(data.url=='1'){url=location.href;}
			layermsg(data.msg,2,function(){location.href = data.url;});	
		}else{ 
			layermsg(data.msg,2);	
		}
	});
}
function jobfav(jobid){
	layer_load('执行中，请稍候...');
	$.get(wapurl+"?c=job&a=view&type=fav&id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
",function(data){
	layer.closeAll();
	var data=eval('('+data+')');
	if(data.url){
		if(data.url=='1'){url=location.href;}
		layermsg(data.msg,2,function(){location.href = data.url;});	
	}else{ 
		layermsg(data.msg,2,function(){location.reload();});	
	}
})};
function phone(data){
	if(data==1){
		layermsg("您还没登录!",2,function(){location.href='index.php?c=login';});	
	}else if(data==2){
		layermsg("您不是个人用户!",2);
	}
	else if(data==3){
		layermsg("您还没有简历!",2);
	}
}
function checkshenming(){
	$('#shenming').hide();
	$("#smtext").show();
}
function subsm(id){
	var shenming=$("#smname").val();
	$.post(wapurl+"?c=job&a=shenming",{id:id,shenming:shenming},function(data){
		if(data){
			location.reload();
		}
	});
}
<?php echo '</script'; ?>
> 
<?php if ($_smarty_tpl->tpl_vars['company']->value['x']&&$_smarty_tpl->tpl_vars['company']->value['y']) {?>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['mapurl'];?>
"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
>
//百度地图测距
function getdistance(){
	var map = new BMap.Map();
	var geolocation = new BMap.Geolocation();
	geolocation.getCurrentPosition(function(r){
		if(this.getStatus() == BMAP_STATUS_SUCCESS){
			$("#map_x").val(r.point.lng);
			$("#map_y").val(r.point.lat); 
		}
		else {
			alert('failed'+this.getStatus());
		}        
	},{enableHighAccuracy: true});
	var x='<?php echo $_smarty_tpl->tpl_vars['company']->value['x'];?>
',y='<?php echo $_smarty_tpl->tpl_vars['company']->value['y'];?>
',map_x=$("#map_x").val(),map_y=$("#map_y").val();
	if(map_x>0 && map_y>0){
		var pointA = new BMap.Point(x,y); 
		var pointB = new BMap.Point(map_x,map_y); 
		var distance = '('+(map.getDistance(pointA,pointB)/1000).toFixed(1)+'km)';
		$("#distance").html(distance);
	}else{
		setTimeout(function(){
			getdistance();
		},3000);
	}
}
$(function(){
	getdistance();
})
<?php echo '</script'; ?>
>
<?php }?>
<!--微信分享专用---->
<div style='margin:0 auto;width:0px;height:0px;overflow:hidden;'><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_sharelogo'];?>
"></div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
