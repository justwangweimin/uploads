<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-24 20:31:16
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\job.htm" */ ?>
<?php /*%%SmartyHeaderCode:7303942995a915b146c79e5-69640803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55cfba614a309a89400cb399e0bbf25b4bb42b4f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\job.htm',
      1 => 1517901846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7303942995a915b146c79e5-69640803',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'city_name' => 0,
    'config' => 0,
    'jobname' => 0,
    'comclass_name' => 0,
    'searchurl' => 0,
    'total' => 0,
    'zd_list' => 0,
    'waflist' => 0,
    'job_list' => 0,
    'pagenav' => 0,
    'blist' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a915b14bda521_82032980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a915b14bda521_82032980')) {function content_5a915b14bda521_82032980($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php global $db,$db_config,$config;
		$time = time();
		
		
		
        eval('$paramer=array("namelen"=>"10","comlen"=>"30","report"=>"\'auto.report\'","hy"=>"\'auto.hy\'","job1"=>"\'auto.job1\'","job1_son"=>"\'auto.job1_son\'","job_post"=>"\'auto.job_post\'","jobids"=>"\'auto.jobids\'","pr"=>"\'auto.pr\'","mun"=>"\'auto.mun\'","provinceid"=>"\'auto.provinceid\'","cityid"=>"\'auto.cityid\'","three_cityid"=>"\'auto.three_cityid\'","type"=>"\'auto.type\'","edu"=>"\'auto.edu\'","exp"=>"\'auto.exp\'","sex"=>"\'auto.sex\'","minsalary"=>"\'auto.minsalary\'","maxsalary"=>"\'auto.maxsalary\'","keyword"=>"\'auto.keyword\'","cert"=>"\'auto.cert\'","urgent"=>"\'auto.urgent\'","bid"=>"1","uptime"=>"\'auto.uptime\'","key"=>"\'key\'","limit"=>"5","item"=>"\'zd_list\'","name"=>"\'zdlist1\'","nocache"=>"")
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
		 
		$zd_list = $db->select_all("company_job",$where.$limit);
		if(is_array($zd_list)){
		
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($zd_list as $key=>$value){
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
			foreach($zd_list as $key=>$value){

				if($paramer[bid]){
					$noids[] = $value[id];
				}
				
				if($paramer[noids]==1 && !empty($noids) && in_array($value['id'],$noids)){
					unset($zd_list[$key]);
					continue;
				}else{
					$zd_list[$key] = $db->array_action($value,$cache_array);
					$zd_list[$key][stime] = date("Y-m-d",$value[sdate]);
					$zd_list[$key][etime] = date("Y-m-d",$value[edate]);
					if($arr_data['sex'][$value['sex']]){
						$zd_list[$key][sex_n]=$arr_data['sex'][$value['sex']];
					}
					$zd_list[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
					if($value[minsalary]&&$value[maxsalary]){
						$zd_list[$key][job_salary] =$value[minsalary]."-".$value[maxsalary];
					}elseif($value[minsalary]){
						$zd_list[$key][job_salary] =$value[minsalary]."以上";
					}else{
						$zd_list[$key][job_salary] ="面议";
					}
					if($r_uid[$value['uid']][shortname]){
						$zd_list[$key][com_name] =$r_uid[$value['uid']][shortname];
					}
					$zd_list[$key][yyzz_status] =$r_uid[$value['uid']][yyzz_status];
					$zd_list[$key][logo] =$r_uid[$value['uid']][logo];
					$zd_list[$key][pr_n] =$r_uid[$value['uid']][pr_n];
					$zd_list[$key][hy_n] =$r_uid[$value['uid']][hy_n];
					$zd_list[$key][mun_n] =$r_uid[$value['uid']][mun_n];
					$time=$value['lastupdate'];
					
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
					
					$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
					
					$week=strtotime(date("Y-m-d",strtotime("-1 week")));
					if($time>$week && $time<$beginYesterday){
						$zd_list[$key]['time'] ="一周内";
					}elseif($time>$beginYesterday && $time<$beginToday){
						$zd_list[$key]['time'] ="昨天";
					}elseif($time>$beginToday){	
						$zd_list[$key]['time'] = date("H:i",$value['lastupdate']);
						$zd_list[$key]['redtime'] =1;
					}else{
						$zd_list[$key]['time'] = date("Y-m-d",$value['lastupdate']);
					}
					
					if(is_array($zd_list[$key]['welfare'])&&$zd_list[$key]['welfare']){
						foreach($zd_list[$key]['welfare'] as $val){
							//$zd_list[$key]['welfarename'][]=$cache_array['comclass_name'][$val];
							$zd_list[$key]['welfarename'][]=$val;
						}
					}
					
					if($paramer[comlen]){
						if($r_uid[$value['uid']][shortname]){
							$zd_list[$key][com_n] = mb_substr($r_uid[$value['uid']][shortname],0,$paramer[comlen],"utf-8");
						}else{
							$zd_list[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"utf-8");
						}
					}
					
					if($paramer[namelen]){
						if($value['rec_time']>time()){
							$zd_list[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"utf-8")."</font>";
						}else{
							$zd_list[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
						}
					}else{
						if($value['rec_time']>time()){
							$zd_list[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
						}
					}
					
					$zd_list[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
					
					$zd_list[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
					foreach($comrat as $k=>$v){
						if($value[rating]==$v[id]){
							$zd_list[$key][color] = str_replace("#","",$v[com_color]);
							$zd_list[$key][ratlogo] = $v[com_pic];
							$zd_list[$key][ratname] = $v[name];
						}
					}
					if($paramer[keyword]){
						$zd_list[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
						$zd_list[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
						$zd_list[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$zd_list[$key][name_n]);
						$zd_list[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$zd_list[$key][com_n]);
						$zd_list[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
						$zd_list[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
					}
				}
			}

			if(is_array($zd_list)){
				if($paramer[keyword]!=""&&!empty($zd_list)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		} ?>
<?php global $db,$db_config,$config;
		$time = time();
		
		
		
        eval('$paramer=array("noids"=>"1","namelen"=>"10","comlen"=>"15","ispage"=>"1","jobin"=>"\'auto.jobin\'","hy"=>"\'auto.hy\'","pr"=>"\'auto.pr\'","mun"=>"\'auto.mun\'","provinceid"=>"\'auto.provinceid\'","three_cityid"=>"\'auto.three_cityid\'","cityid"=>"\'auto.cityid\'","type"=>"\'auto.type\'","edu"=>"\'auto.edu\'","exp"=>"\'auto.exp\'","sex"=>"\'auto.sex\'","minsalary"=>"\'auto.minsalary\'","maxsalary"=>"\'auto.maxsalary\'","keyword"=>"\'auto.keyword\'","rec"=>"\'auto.rec\'","urgent"=>"\'auto.urgent\'","limit"=>"20","item"=>"\'job_list\'","islt"=>"4","nocache"=>"")
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
		 
		$job_list = $db->select_all("company_job",$where.$limit);
		if(is_array($job_list)){
		
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($job_list as $key=>$value){
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
			foreach($job_list as $key=>$value){

				if($paramer[bid]){
					$noids[] = $value[id];
				}
				
				if($paramer[noids]==1 && !empty($noids) && in_array($value['id'],$noids)){
					unset($job_list[$key]);
					continue;
				}else{
					$job_list[$key] = $db->array_action($value,$cache_array);
					$job_list[$key][stime] = date("Y-m-d",$value[sdate]);
					$job_list[$key][etime] = date("Y-m-d",$value[edate]);
					if($arr_data['sex'][$value['sex']]){
						$job_list[$key][sex_n]=$arr_data['sex'][$value['sex']];
					}
					$job_list[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
					if($value[minsalary]&&$value[maxsalary]){
						$job_list[$key][job_salary] =$value[minsalary]."-".$value[maxsalary];
					}elseif($value[minsalary]){
						$job_list[$key][job_salary] =$value[minsalary]."以上";
					}else{
						$job_list[$key][job_salary] ="面议";
					}
					if($r_uid[$value['uid']][shortname]){
						$job_list[$key][com_name] =$r_uid[$value['uid']][shortname];
					}
					$job_list[$key][yyzz_status] =$r_uid[$value['uid']][yyzz_status];
					$job_list[$key][logo] =$r_uid[$value['uid']][logo];
					$job_list[$key][pr_n] =$r_uid[$value['uid']][pr_n];
					$job_list[$key][hy_n] =$r_uid[$value['uid']][hy_n];
					$job_list[$key][mun_n] =$r_uid[$value['uid']][mun_n];
					$time=$value['lastupdate'];
					
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
					
					$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
					
					$week=strtotime(date("Y-m-d",strtotime("-1 week")));
					if($time>$week && $time<$beginYesterday){
						$job_list[$key]['time'] ="一周内";
					}elseif($time>$beginYesterday && $time<$beginToday){
						$job_list[$key]['time'] ="昨天";
					}elseif($time>$beginToday){	
						$job_list[$key]['time'] = date("H:i",$value['lastupdate']);
						$job_list[$key]['redtime'] =1;
					}else{
						$job_list[$key]['time'] = date("Y-m-d",$value['lastupdate']);
					}
					
					if(is_array($job_list[$key]['welfare'])&&$job_list[$key]['welfare']){
						foreach($job_list[$key]['welfare'] as $val){
							//$job_list[$key]['welfarename'][]=$cache_array['comclass_name'][$val];
							$job_list[$key]['welfarename'][]=$val;
						}
					}
					
					if($paramer[comlen]){
						if($r_uid[$value['uid']][shortname]){
							$job_list[$key][com_n] = mb_substr($r_uid[$value['uid']][shortname],0,$paramer[comlen],"utf-8");
						}else{
							$job_list[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"utf-8");
						}
					}
					
					if($paramer[namelen]){
						if($value['rec_time']>time()){
							$job_list[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"utf-8")."</font>";
						}else{
							$job_list[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
						}
					}else{
						if($value['rec_time']>time()){
							$job_list[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
						}
					}
					
					$job_list[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
					
					$job_list[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
					foreach($comrat as $k=>$v){
						if($value[rating]==$v[id]){
							$job_list[$key][color] = str_replace("#","",$v[com_color]);
							$job_list[$key][ratlogo] = $v[com_pic];
							$job_list[$key][ratname] = $v[name];
						}
					}
					if($paramer[keyword]){
						$job_list[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
						$job_list[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
						$job_list[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job_list[$key][name_n]);
						$job_list[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job_list[$key][com_n]);
						$job_list[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
						$job_list[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
					}
				}
			}

			if(is_array($job_list)){
				if($paramer[keyword]!=""&&!empty($job_list)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		} ?>
<?php global $db,$db_config,$config;
		$time = time();
		
		
		
        eval('$paramer=array("namelen"=>"15","comlen"=>"19","rec"=>"1","limit"=>"3","item"=>"\'blist\'","nocache"=>"")
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
		 
		$blist = $db->select_all("company_job",$where.$limit);
		if(is_array($blist)){
		
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($blist as $key=>$value){
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
			foreach($blist as $key=>$value){

				if($paramer[bid]){
					$noids[] = $value[id];
				}
				
				if($paramer[noids]==1 && !empty($noids) && in_array($value['id'],$noids)){
					unset($blist[$key]);
					continue;
				}else{
					$blist[$key] = $db->array_action($value,$cache_array);
					$blist[$key][stime] = date("Y-m-d",$value[sdate]);
					$blist[$key][etime] = date("Y-m-d",$value[edate]);
					if($arr_data['sex'][$value['sex']]){
						$blist[$key][sex_n]=$arr_data['sex'][$value['sex']];
					}
					$blist[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
					if($value[minsalary]&&$value[maxsalary]){
						$blist[$key][job_salary] =$value[minsalary]."-".$value[maxsalary];
					}elseif($value[minsalary]){
						$blist[$key][job_salary] =$value[minsalary]."以上";
					}else{
						$blist[$key][job_salary] ="面议";
					}
					if($r_uid[$value['uid']][shortname]){
						$blist[$key][com_name] =$r_uid[$value['uid']][shortname];
					}
					$blist[$key][yyzz_status] =$r_uid[$value['uid']][yyzz_status];
					$blist[$key][logo] =$r_uid[$value['uid']][logo];
					$blist[$key][pr_n] =$r_uid[$value['uid']][pr_n];
					$blist[$key][hy_n] =$r_uid[$value['uid']][hy_n];
					$blist[$key][mun_n] =$r_uid[$value['uid']][mun_n];
					$time=$value['lastupdate'];
					
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
					
					$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
					
					$week=strtotime(date("Y-m-d",strtotime("-1 week")));
					if($time>$week && $time<$beginYesterday){
						$blist[$key]['time'] ="一周内";
					}elseif($time>$beginYesterday && $time<$beginToday){
						$blist[$key]['time'] ="昨天";
					}elseif($time>$beginToday){	
						$blist[$key]['time'] = date("H:i",$value['lastupdate']);
						$blist[$key]['redtime'] =1;
					}else{
						$blist[$key]['time'] = date("Y-m-d",$value['lastupdate']);
					}
					
					if(is_array($blist[$key]['welfare'])&&$blist[$key]['welfare']){
						foreach($blist[$key]['welfare'] as $val){
							//$blist[$key]['welfarename'][]=$cache_array['comclass_name'][$val];
							$blist[$key]['welfarename'][]=$val;
						}
					}
					
					if($paramer[comlen]){
						if($r_uid[$value['uid']][shortname]){
							$blist[$key][com_n] = mb_substr($r_uid[$value['uid']][shortname],0,$paramer[comlen],"utf-8");
						}else{
							$blist[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"utf-8");
						}
					}
					
					if($paramer[namelen]){
						if($value['rec_time']>time()){
							$blist[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"utf-8")."</font>";
						}else{
							$blist[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
						}
					}else{
						if($value['rec_time']>time()){
							$blist[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
						}
					}
					
					$blist[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
					
					$blist[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
					foreach($comrat as $k=>$v){
						if($value[rating]==$v[id]){
							$blist[$key][color] = str_replace("#","",$v[com_color]);
							$blist[$key][ratlogo] = $v[com_pic];
							$blist[$key][ratname] = $v[name];
						}
					}
					if($paramer[keyword]){
						$blist[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
						$blist[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
						$blist[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$blist[$key][name_n]);
						$blist[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$blist[$key][com_n]);
						$blist[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
						$blist[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
					}
				}
			}

			if(is_array($blist)){
				if($paramer[keyword]!=""&&!empty($blist)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		} ?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section>
  <div class="searchOptions clearfix">
    <ul class="searchOptions_list">
      <li class="grade popup" data-pop="grade"><a href="javascript:void(0);" class="searchOptions_list_a"><span class="job_ov"><?php if ($_smarty_tpl->tpl_vars['city_name']->value[$_GET['cityid']]||$_smarty_tpl->tpl_vars['city_name']->value[$_GET['provinceid']]) {
echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['cityid']];
echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['provinceid']];
} elseif ($_smarty_tpl->tpl_vars['city_name']->value[$_GET['three_cityid']]) {
echo $_smarty_tpl->tpl_vars['city_name']->value[$_GET['three_cityid']];
} elseif ($_smarty_tpl->tpl_vars['config']->value['cityid']&&$_smarty_tpl->tpl_vars['config']->value['sy_web_site']=='1') {
echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['config']->value['cityid']];
} else { ?>区域<?php }?></span><i class="searchOptions_icon"></i></a></li>
      <li class="Category popup" data-pop="Category"><a href="javascript:void(0);" class="searchOptions_list_a"><span class="job_ov"><?php if ($_smarty_tpl->tpl_vars['jobname']->value) {
echo $_smarty_tpl->tpl_vars['jobname']->value;
} else { ?>职能<?php }?></span><i class="searchOptions_icon  "></i></a></li>
      <li class="Sort popup" data-pop="Sort"><a href="javascript:void(0);" class="searchOptions_list_a"><span class="job_ov"><?php if ($_smarty_tpl->tpl_vars['comclass_name']->value[$_GET['exp']]) {
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_GET['exp']];
} else { ?>经验<?php }?></span><i class="searchOptions_icon  "></i></a></li>
      <li class="Gengduoj popup" data-pop="Gengduoj" style="border:none"><a href="javascript:void(0);" class="searchOptions_list_a">更多<i class="searchOptions_icon"></i></a></li>
      <input type="hidden" id="searchurl" value="<?php echo $_smarty_tpl->tpl_vars['searchurl']->value;?>
" />
      <input type="hidden" id="waptype" value="1" />
    </ul>
	</div>
</section>
 <div class="clear"></div>
<section>
  <div class="warp_content clear">


<!-----竞价置顶---------->

<?php if ($_smarty_tpl->tpl_vars['total']->value>0) {?>
 <?php  $_smarty_tpl->tpl_vars['zd_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zd_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$zd_list = $zd_list; if (!is_array($zd_list) && !is_object($zd_list)) { settype($zd_list, 'array');}
foreach ($zd_list as $_smarty_tpl->tpl_vars['zd_list']->key => $_smarty_tpl->tpl_vars['zd_list']->value) {
$_smarty_tpl->tpl_vars['zd_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['zd_list']->key;
?> 
      <div class="job_list_box">
     <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'view','id'=>$_smarty_tpl->tpl_vars['zd_list']->value['id']),$_smarty_tpl);?>
">
   <h3><?php echo $_smarty_tpl->tpl_vars['zd_list']->value['name_n'];?>
 <?php if ($_smarty_tpl->tpl_vars['zd_list']->value['urgent_time']>time()) {?><i class="urgent">急招</i><?php }?>      </h3>
   <div class="index_wap_joblist_comname" style="padding:8px 0">
   <span class="index_wap_joblist_comname_p"><?php echo mb_substr(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['zd_list']->value['com_name']),0,20,'utf-8');?>

        
        <?php if ($_smarty_tpl->tpl_vars['zd_list']->value['ratlogo']!=''&&$_smarty_tpl->tpl_vars['zd_list']->value['ratlogo']!="0") {?>
           <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['zd_list']->value['ratlogo'];?>
"  style="vertical-align:middle" />
         <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['zd_list']->value['yyzz_status']=='1') {?>
         <i class="job_qy_rz_icon"></i>
         <?php }?>
          
        </span>
      
      </div> <?php if ($_smarty_tpl->tpl_vars['zd_list']->value['rec']=='1'&&$_smarty_tpl->tpl_vars['zd_list']->value['rec_time']>time()) {?>
        <i class="job_list_box_jobtj"></i>
        <?php }?>
      <div class="index_wap_joblist_yq_p">
      <span class="index_wap_joblist_yq_s"><i class="index_wap_joblist_yq_sicon"></i><?php echo $_smarty_tpl->tpl_vars['zd_list']->value['job_city_one'];?>
-<?php echo $_smarty_tpl->tpl_vars['zd_list']->value['job_city_two'];?>

      </span>
      <?php if ($_smarty_tpl->tpl_vars['zd_list']->value['job_exp']) {?><span class="index_wap_joblist_yq_s"><i class="index_wap_joblist_yq_jyicon"></i><?php echo $_smarty_tpl->tpl_vars['zd_list']->value['job_exp'];?>
经验</span><?php }?>
      <?php if ($_smarty_tpl->tpl_vars['zd_list']->value['job_edu']) {?><span class="index_wap_joblist_yq_s"><i class="index_wap_joblist_yq_xlicon"></i><?php echo $_smarty_tpl->tpl_vars['zd_list']->value['job_edu'];?>
学历</span><?php }?></div>
       <?php if ($_smarty_tpl->tpl_vars['zd_list']->value['welfarename']) {?>
      <div class="index_wap_joblist_flbox">
      <?php  $_smarty_tpl->tpl_vars['waflist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['waflist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zd_list']->value['welfarename']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['waflist']->key => $_smarty_tpl->tpl_vars['waflist']->value) {
$_smarty_tpl->tpl_vars['waflist']->_loop = true;
?>
      <span class="index_wap_joblist_fl"><?php echo $_smarty_tpl->tpl_vars['waflist']->value;?>
</span><?php } ?></div><?php }?>
    <div class="index_wap_joblist_xz">￥<?php echo $_smarty_tpl->tpl_vars['zd_list']->value['job_salary'];?>
</div>
          <div class="index_wap_joblist_time">   置顶
          </div>
          </a>
 </div>
<?php } ?>
<?php }?>

<!-----竞价置顶end---------->


    <div class="job_list_content"> <?php  $_smarty_tpl->tpl_vars['job_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job_list']->_loop = false;
$job_list = $job_list; if (!is_array($job_list) && !is_object($job_list)) { settype($job_list, 'array');}
foreach ($job_list as $_smarty_tpl->tpl_vars['job_list']->key => $_smarty_tpl->tpl_vars['job_list']->value) {
$_smarty_tpl->tpl_vars['job_list']->_loop = true;
?>
      <div class="job_list_box">
   
     <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'view','id'=>$_smarty_tpl->tpl_vars['job_list']->value['id']),$_smarty_tpl);?>
">
   <h3><?php echo $_smarty_tpl->tpl_vars['job_list']->value['name_n'];?>
 <?php if ($_smarty_tpl->tpl_vars['job_list']->value['urgent_time']>time()) {?><i class="urgent">急招</i><?php }?>      </h3>
   <div class="index_wap_joblist_comname" style="padding:8px 0">
   <span class="index_wap_joblist_comname_p"><?php echo mb_substr(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['job_list']->value['com_name']),0,20,'utf-8');?>


       <?php if ($_smarty_tpl->tpl_vars['job_list']->value['ratlogo']!=''&&$_smarty_tpl->tpl_vars['job_list']->value['ratlogo']!="0") {?>
           <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['job_list']->value['ratlogo'];?>
"  style="vertical-align:middle" />
         <?php }?> 
          <?php if ($_smarty_tpl->tpl_vars['job_list']->value['yyzz_status']=='1') {?>
         <i class="job_qy_rz_icon"></i>
         <?php }?>
        </span>
      
      </div> <?php if ($_smarty_tpl->tpl_vars['job_list']->value['rec']=='1'&&$_smarty_tpl->tpl_vars['job_list']->value['rec_time']>time()) {?>
        <i class="job_list_box_jobtj"></i>
        <?php }?>
      <div class="index_wap_joblist_yq_p">
      <span class="index_wap_joblist_yq_s"><i class="index_wap_joblist_yq_sicon"></i><?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_city_one'];?>
-<?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_city_two'];?>

      </span>
      <?php if ($_smarty_tpl->tpl_vars['job_list']->value['job_exp']) {?><span class="index_wap_joblist_yq_s"><i class="index_wap_joblist_yq_jyicon"></i><?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_exp'];?>
经验</span><?php }?>
      <?php if ($_smarty_tpl->tpl_vars['job_list']->value['job_edu']) {?><span class="index_wap_joblist_yq_s"><i class="index_wap_joblist_yq_xlicon"></i><?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_edu'];?>
学历</span><?php }?></div>
       <?php if ($_smarty_tpl->tpl_vars['job_list']->value['welfarename']) {?>
      <div class="index_wap_joblist_flbox">
      <?php  $_smarty_tpl->tpl_vars['waflist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['waflist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_list']->value['welfarename']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['waflist']->key => $_smarty_tpl->tpl_vars['waflist']->value) {
$_smarty_tpl->tpl_vars['waflist']->_loop = true;
?>
      <span class="index_wap_joblist_fl"><?php echo $_smarty_tpl->tpl_vars['waflist']->value;?>
</span><?php } ?></div><?php }?>
    <div class="index_wap_joblist_xz">￥<?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_salary'];?>
</div>
          <div class="index_wap_joblist_time">    <?php if ($_smarty_tpl->tpl_vars['job_list']->value['time']=='今天'||$_smarty_tpl->tpl_vars['job_list']->value['time']=='昨天'||$_smarty_tpl->tpl_vars['job_list']->value['redtime']=='1') {?>
          <?php echo $_smarty_tpl->tpl_vars['job_list']->value['time'];?>

          <?php } else { ?>
          <?php echo $_smarty_tpl->tpl_vars['job_list']->value['time'];?>

          <?php }?>
          </div>
          </a>
 </div>
      <?php } ?>
      <?php if ($_smarty_tpl->tpl_vars['total']->value<=0) {?>
      <?php if ($_GET['keyword']!='') {?>
      <div class="wap_member_no">没有搜索到职位<div><a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job'),$_smarty_tpl);?>
">重新搜索</a></div></div>
      <?php } else { ?>
      <div class="wap_member_no">暂无职位<div><a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job'),$_smarty_tpl);?>
">重新搜索</a></div></div>
      <?php }?>
      <?php } else { ?>
      <div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
      <?php }?> </div>
  </div>
</section>

<?php if ($_smarty_tpl->tpl_vars['total']->value<=0) {?>
<section>
<div class="index_wap_tit" style="margin-top:0px;"><i class="index_wap_tit_icon"></i><span class="index_wap_tit_s">为你推荐</span></div>
 <?php  $_smarty_tpl->tpl_vars['blist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blist']->_loop = false;
$blist = $blist; if (!is_array($blist) && !is_object($blist)) { settype($blist, 'array');}
foreach ($blist as $_smarty_tpl->tpl_vars['blist']->key => $_smarty_tpl->tpl_vars['blist']->value) {
$_smarty_tpl->tpl_vars['blist']->_loop = true;
?>
<div class="jobtj_list_box">
     <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'view','id'=>$_smarty_tpl->tpl_vars['blist']->value['id']),$_smarty_tpl);?>
">
   <h3><?php echo $_smarty_tpl->tpl_vars['blist']->value['name_n'];?>
</h3>
   <div class="index_wap_joblist_comname" style="padding:8px 0">
   <span class="index_wap_joblist_comname_p"><?php echo $_smarty_tpl->tpl_vars['blist']->value['com_n'];?>
</span>
   </div>
   <div class="index_wap_joblist_yq_p">
      <span class="index_wap_joblist_yq_s"><i class="index_wap_joblist_yq_sicon"></i><?php echo $_smarty_tpl->tpl_vars['blist']->value['job_city_two'];?>
 <?php echo $_smarty_tpl->tpl_vars['blist']->value['job_city_three'];?>

      </span>
      <span class="index_wap_joblist_yq_s"><i class="index_wap_joblist_yq_jyicon"></i><?php echo $_smarty_tpl->tpl_vars['blist']->value['job_exp'];?>
经验</span>
      <span class="index_wap_joblist_yq_s"><i class="index_wap_joblist_yq_xlicon"></i><?php echo $_smarty_tpl->tpl_vars['blist']->value['job_edu'];?>
学历</span></div>
      <div class="index_wap_joblist_flbox">
        <?php  $_smarty_tpl->tpl_vars['waflist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['waflist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blist']->value['welfarename']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['waflist']->key => $_smarty_tpl->tpl_vars['waflist']->value) {
$_smarty_tpl->tpl_vars['waflist']->_loop = true;
?>
      <span class="index_wap_joblist_fl"><?php echo $_smarty_tpl->tpl_vars['waflist']->value;?>
</span><?php } ?>
      </div>
    <div class="index_wap_joblist_xz"><?php if ($_smarty_tpl->tpl_vars['blist']->value['job_salary']!='面议') {?>￥<?php }
echo $_smarty_tpl->tpl_vars['blist']->value['job_salary'];?>
</div>
    <div class="index_wap_joblist_time">
    	  <?php if ($_smarty_tpl->tpl_vars['job_list']->value['time']=='今天'||$_smarty_tpl->tpl_vars['job_list']->value['time']=='昨天'||$_smarty_tpl->tpl_vars['job_list']->value['redtime']=='1') {?>
          <?php echo $_smarty_tpl->tpl_vars['job_list']->value['time'];?>

          <?php } else { ?>
          <?php echo $_smarty_tpl->tpl_vars['job_list']->value['time'];?>

          <?php }?></div>
    </a>
 </div>
</section>
<?php } ?>
<?php }?>
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
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/js/search.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/wap_tck.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/js/demo.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> 
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/demo.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
<?php echo '<script'; ?>
>
$(document).ready(function(){
	$("#search").val();
	$(".searchOptions_list li a").removeClass("search_h1_box_cur_list");
});
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/publictwo.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
