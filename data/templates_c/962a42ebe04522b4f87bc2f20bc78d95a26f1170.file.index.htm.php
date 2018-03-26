<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-21 16:28:20
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:1016770225a915b146a6198-79178323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '962a42ebe04522b4f87bc2f20bc78d95a26f1170' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\index.htm',
      1 => 1521620894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1016770225a915b146a6198-79178323',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a915b149ee805_47699540',
  'variables' => 
  array (
    'lunbo' => 0,
    'config_wapdomain' => 0,
    'config' => 0,
    'alist' => 0,
    'username' => 0,
    'adlist_74' => 0,
    'keylist' => 0,
    'job_list' => 0,
    'waflist' => 0,
    'comlist' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a915b149ee805_47699540')) {function content_5a915b149ee805_47699540($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php $alist=array();$time=time();eval('$paramer=array("limit"=>"4","item"=>"\'alist\'","t_len"=>"15","nocache"=>"")
;');
		global $db,$db_config,$config;
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where = 1;
		
		if($config['did']){
			$where.=" and `did`='".$config['did']."'";
		}else if($config['sy_web_site']=="1"){
			$where.=" and `did`='0'";
		}  
		if($paramer[limit]){
			$limit=" LIMIT ".$paramer[limit];
		}else{
			$limit=" LIMIT 20";
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"admin_announcement",$where,$Purl,"",0,$_smarty_tpl);
		}
	
		if($paramer[order]){
			$where.="  ORDER BY `".$paramer[order]."`";
		}else{
			$where.="  ORDER BY `datetime`";
		}
	
		if($paramer[sort]){
			$where.=" ".$paramer[sort];
		}else{
			$where.=" DESC";
		}
		
		$alist=$db->select_all("admin_announcement",$where.$limit);
		if(is_array($alist)){
			foreach($alist as $key=>$value){
			
				if($paramer[t_len]){
					$alist[$key][title_n] = mb_substr($value['title'],0,$paramer[t_len],"utf-8");
				}
				$alist[$key][time]=date("Y-m-d",$value[datetime]);
				$alist[$key][url] = Url("announcement",array("id"=>$value[id]),"1");
			}
		} ?>
<?php global $db,$db_config,$config;
		$time = time();
		
		
		
        eval('$paramer=array("limit"=>"5","rec"=>"1","item"=>"\'job_list\'","nocache"=>"")
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
<?php global $db,$db_config,$config;eval('$paramer=array("rec"=>"1","item"=>"\'comlist\'","limit"=>"5","nocache"=>"")
;');$comlist=array();
		
		$time = time();
		
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr['arr'];
		$Purl =  $ParamerArr['purl'];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
	
		if($config['sy_web_site']=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config['cityid']>0 && $config['cityid']!=""){
				$paramer['cityid']=$config['cityid'];
			}
			if($config['three_cityid']>0 && $config['three_cityid']!=""){
				$paramer['three_cityid']=$config['three_cityid'];
			}
			if($config['hyclass']>0 && $config['hyclass']!=""){
				$paramer['hy']=$config['hyclass'];
			}
		} 
		$where="`name`<>'' and `hy`<>''"; 
       
		
		
		
		if($paramer['keyword']){
			$where.=" AND `name` LIKE '%".$paramer['keyword']."%'";
		}				
		
		if($paramer['hy']){
			$where .= " AND `hy` = '".$paramer['hy']."'";
		}
		
		if($paramer['pr']){
			$where .= " AND `pr` = '".$paramer['pr']."'";
		}
		
		if($paramer['mun']){
			$where .= " AND `mun` = '".$paramer['mun']."'";
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
		
		if($paramer['provinceid']){
			$where .= " AND `provinceid` = '".$paramer['provinceid']."'";
		}
		
		if($paramer['cityid']){
			$where .= " AND (`provinceid` = '".$paramer['cityid']."' OR `cityid` = '".$paramer['cityid']."')";
		}
		
		if($paramer['three_cityid']){
			$where .= " AND (`provinceid` = '".$paramer['three_cityid']."' OR `three_cityid` = '".$paramer['three_cityid']."')";
		}
	
		if($paramer['cityin']){
			$where .= " AND (`provinceid` in(".$paramer['cityin'].") OR `cityid` in(".$paramer['cityin'].") or `three_cityid` in(".$paramer['cityin']."))";
		}
		
		if($paramer['linkman']){
			$where .= " AND `linkman`<>''";
		}
		
		if($paramer['linktel']){
			$where .= " AND `linktel`<>''";
		}
	
		if($paramer['linkmail']){
			$where .= " AND `linkmail`<>''";
		}
		
		if($paramer['logo']){
			$where .= " AND `logo`<>''";
		}
		
		if($paramer['r_status']){
			$where .= " AND `r_status`='".$paramer['r_status']."'";
		}else{
			$where .= " AND `r_status`<>'2'";
		}
		
		if($paramer['cert']){
			$where .= " AND `yyzz_status`='1'";
		}
		
		if($paramer['uptime']){
			$uptime = $time-$paramer['uptime']*3600;
			$where.=" AND `lastupdate`>'".$uptime."'";
		}
		if($paramer['jobtime']){
			$where.=" AND `jobtime`<>''";
		}
		
		
		if($paramer['rec']){
			$Purl["rec"]='1';
			$where.=" AND `rec`='1' AND `hottime`>'".time()."'";
		}
		
       
		
		if($paramer['limit']){
			$limit=" limit ".$paramer['limit'];
		}
		
		
		if($paramer['where']){
			$where = $paramer['where'];
		}
	
		$cache_array = $db->cacheget();
		if($paramer['ispage']){ 
			if($paramer['rec']==1&&$Purl["m"]=="lietou"){
				$limit = PageNav($paramer,$_GET,"company",$where,$Purl,"","1",$_smarty_tpl);
			}else{
				$limit = PageNav($paramer,$_GET,"company",$where,$Purl,"","0",$_smarty_tpl);
			}
		}
		
		if($paramer['order']){
			if($paramer['order']=="lastＵpdate"){
				$paramer['order']="lastupdate";
			}
			$order = " ORDER BY `".$paramer['order']."`  ";
		}else{
			$order = " ORDER BY `jobtime` ";
		}
		
		if($paramer['sort']){
			$sort = $paramer['sort'];
		}else{
			$sort = " DESC";
		}
		$where.=$order.$sort;
		
		$Query = $db->query("SELECT * FROM $db_config[def]company where ".$where.$limit);
		$ListId=array();
		$comlist=array();
		while($rs = $db->fetch_array($Query)){
			$comlist[] = $db->array_action($rs,$cache_array);
			$ListId[] = $rs['uid'];
		}  
		
		include_once  PLUS_PATH."/comrating.cache.php";
		if(!empty($ListId)){
		$statis = $db->select_all("company_statis","`uid` in (".@implode(",",$ListId).")","`uid`,`rating`");
		foreach($ListId as $key=>$value){
		       foreach($statis as $v){
		               foreach($comrat as $val){
			                if($value==$v['uid'] && $val['id']==$v['rating']){						
							$comlist[$key]['color'] = $val['com_color'];
							if($val['com_pic']&&file_exists(APP_PATH.$val['com_pic'])){
								$comlist[$key]['ratlogo'] = $val['com_pic'];
    						}
							$comlist[$key]['ratname'] = $val['name'];
						    }
					  }
				}
			}
		}
	
		if($paramer['ismsg']){
			$Msgid = @implode(",",$ListId);
			$msglist = $db->select_alls("company_msg","resume","a.`cuid` in ($Msgid) and a.`uid`=b.`uid` order by a.`id` desc","a.cuid,a.content,b.name,b.photo,b.def_job");
			if(is_array($ListId) && is_array($msglist)){
				foreach($comlist as $key=>$value){
					foreach($msglist as $k=>$v){
						if($value['uid']==$v['cuid']){
							$comlist[$key]['msg'][$k]['content'] = $v['content'];
							$comlist[$key]['msg'][$k]['name'] = $v['name'];
							$comlist[$key]['msg'][$k]['photo'] = $v['photo'];
							$comlist[$key]['msg'][$k]['eid'] = $v['def_job'];
						}
					}
				}
			}
		}
		
		if($paramer['isjob']){
			
			$JobId = @implode(",",$ListId);
			$JobList=$db->select_all("company_job","`uid` IN ($JobId) and `edate`>'".mktime()."' and r_status<>'2' and status<>'1' and state=1  order by `lastupdate` desc","`id`,`uid`,`status`,`name`");
			if(is_array($ListId) && is_array($JobList)){
				foreach($comlist as $key=>$value){
					$comlist[$key]['jobnum'] = 0;
					foreach($JobList as $k=>$v){
						if($value['uid']==$v['uid']){
							$id = $v['id'];
							$comlist[$key]['newsjob'] = $v['name'];
							$comlist[$key]['newsjob_status'] = $v['status'];
							$comlist[$key]['r_status'] = $v['r_status'];

							$v = $db->array_action($value,$cache_array);
							$v['job_url'] = Url("job",array("c"=>"comapply","id"=>$JobList[$k]['id']),"1");
							$v['id']= $id;
							$v['name'] = $comlist[$key]['newsjob'];
							$comlist[$key]['joblist'][] = $v;
							$comlist[$key]['jobnum'] = $comlist[$key]['jobnum']+1;
						}
					}
					/*
					foreach($comrat as $k=>$v){
						if($value['rating']==$v['id']){
							$comlist[$key]['color'] = $v['com_color'];
							$comlist[$key]['ratlogo'] = $v['com_pic'];
						}
					}*/
				}
			}
		}
		
		if($paramer['isnews']){
			
			$JobId = @implode(",",$ListId);
			$NewsList=$db->select_all("company_news","`uid` IN ($JobId) and status=1  order by `id` desc");
			if(is_array($ListId) && is_array($NewsList)){
				foreach($comlist as $key=>$value){
					$comlist[$key]['newsnum'] = 0;
					foreach($NewsList as $k=>$v){
						if($value['uid']==$v['uid']){
							$comlist[$key]['newslist'][] = $v;
							$comlist[$key]['newsnum'] = $comlist[$key]['newsnum']+1;
						}
					}
				}
			}
		}
		
		if($paramer['isshow']){
			
			$JobId = @implode(",",$ListId);
			$ShowList=$db->select_all("company_show","`uid` IN ($JobId) order by `id` desc");
			if(is_array($ListId) && is_array($ShowList)){
				foreach($comlist as $key=>$value){
					$comlist[$key]['shownum'] = 0;
					foreach($ShowList as $k=>$v){
						if($value['uid']==$v['uid']){
							$comlist[$key]['showlist'][] = $v;
							$comlist[$key]['shownum'] = $comlist[$key]['shownum']+1;
						}
					}
				}
			}
		}
		if($paramer['ltjob']){
		
			$JobId = @implode(",",$ListId);
			$JobList=$db->select_all("lt_job","`uid` IN ($JobId) and `edate`>'".mktime()."' and status=1  order by `id` desc");
			if(is_array($ListId) && is_array($JobList)){
				foreach($comlist as $key=>$value){
					$jobname="";
                    $comlist[$key]['ltjobnum'] = 0;
					foreach($JobList as $k=>$v){
						if($comlist[$key]['ltjobnum']>=$paramer['ltjob']){continue;}
						if($value['uid']==$v['uid']){
							$url = Url("lietou",array("c"=>"jobcomshow","id"=>$v['id']));
							$v['job_url'] = $url;
							$jobname[] = "<a href='".$url."'>".$v['job_name']."</a>";
                            $comlist[$key]['ltjoblist'][] = $v;
                            $comlist[$key]['ltjobnum'] = $comlist[$key]['ltjobnum']+1;
						}
					}
					$comlist[$key]['ltjob'] = @implode(",",$jobname);
				}
			}
		}
		
		if($paramer['firm']){
			if($_COOKIE[uid]){$atnlist = $db->select_all("atn","`uid`='$_COOKIE[uid]'");}
			if(is_array($comlist)){
				foreach($comlist as $key=>$value){
					if(!empty($atnlist)){
						foreach($atnlist as $v){
							if($value['uid'] == $v['sc_uid']){
								$comlist[$key]['atn'] = "取消关注";
                                $comlist[$key]['atnstatus'] = "1";
								break;
							}else{
								$comlist[$key]['atn'] = "关注";
							}
						}
					}else{
						$comlist[$key]['atn'] = "关注";
					}
				}
			}
		}
		if(is_array($comlist)){
			foreach($comlist as $key=>$value){
				if($value['shortname']){
    				$comlist[$key]['name']=$value['shortname'];
    			}
				$comlist[$key]['com_url'] = Url("company",array("c"=>"show","id"=>$value['uid']));
				$comlist[$key]['joball_url'] = Url("company",array("c"=>"show","id"=>$value['uid'],"tp"=>"post")); 
				if(!$value['logo'] || !file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$value['logo']))){
				    $comlist[$key]['logo'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
				}else{
					$comlist[$key]['logo'] = str_replace("./",$config['sy_weburl']."/",$value['logo']);
				} 
				
				if(is_array($comlist[$key]['welfare'])&&$comlist[$key]['welfare']){
					foreach($comlist[$key]['welfare'] as $val){
						$comlist[$key]['welfarename'][]=$val;
					}
				}
			}
			if($paramer['keyword']!=""&&!empty($comlist)){
				addkeywords('4',$paramer['keyword']);
			}
		} ?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<style>
  .tips{display:none;}
</style>
<div class="clear"></div>
<section>
  <div class="swiper_banner">
    <div class="swiper-container" id="imgswiper">
      <div class="swiper-wrapper">
        <?php  $_smarty_tpl->tpl_vars["lunbo"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["lunbo"]->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[50];if(is_array($add_arr) && !empty($add_arr)){
				$i=0;$limit = 0;$length = 0;
				foreach($add_arr as $key=>$value){
					if(($value['did']==$config['did'] ||$value['did']=='0')&&$value['start']<time()&&$value['end']>time()){
						if($i>0 && $limit==$i){
							break;
						}
						if($length>0){
							$value['name'] = mb_substr($value['name'],0,$length);
						}
						if($paramer['type']!=""){
							if($paramer['type'] == $value['type']){
								$AdArr[] = $value;
							}
						}else{
							$AdArr[] = $value;
						}
						$i++;
					}
				}
			}$AdArr = $AdArr; if (!is_array($AdArr) && !is_object($AdArr)) { settype($AdArr, 'array');}
foreach ($AdArr as $_smarty_tpl->tpl_vars["lunbo"]->key => $_smarty_tpl->tpl_vars["lunbo"]->value) {
$_smarty_tpl->tpl_vars["lunbo"]->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars["lunbo"]->key;
?>
        <div class="swiper-slide">
          <a href="<?php echo $_smarty_tpl->tpl_vars['lunbo']->value['src'];?>
" ><img src="<?php echo $_smarty_tpl->tpl_vars['lunbo']->value['pic'];?>
" width='100%' height="100%"/></a>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
<div class="clear"></div>
<section>   
  <div class="index_search_cont">
    <form method="get" action="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/index.php">
      <input type="hidden" name="c" value="job" />
      <div class="index_formFiled">
        <input type="text" value="" name="keyword" class="index_input_search" placeholder="请输入职位关键字，如：会计...">
        <input type="submit" value="搜职位" class="index_input_btn">
        <i class="index_input_btn_icon iconfont_index_search"></i>
      </div>
    </form>
  </div>
  <div class="index_nav_content">
    <div class="swiper-container" style="height:100px" id="navswiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
<!--          <dl class="nav_list">
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job'),$_smarty_tpl);?>
">
              <dt class="cor_1"><i class="nav_icon iconfont_job "></i></dt>
              <dd>找工作</dd>
            </a>
          </dl>-->
<!--          <dl class="nav_list">
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume'),$_smarty_tpl);?>
">
              <dt class="cor_2"><i class="nav_icon iconfontuser "></i></dt>
              <dd>找人才</dd>
            </a>
          </dl> -->
<!--          <dl class="nav_list">
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'part'),$_smarty_tpl);?>
">
              <dt class="cor_4"><i class="nav_icon iconfont_part"></i></dt>
              <dd>找兼职</dd>
            </a>
          </dl>-->
          <dl class="nav_list">
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company'),$_smarty_tpl);?>
">
              <dt class="cor_3"><i class="nav_icon iconfont_comp "></i></dt>
              <dd>找企业</dd>
            </a>
          </dl>
          <dl class="nav_list">
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'zph'),$_smarty_tpl);?>
">
              <dt class="cor_2"><i class="nav_icon iconfont_zph"></i></dt>
              <dd>招聘会</dd>
            </a>
          </dl>
          <dl class="nav_list">
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'special'),$_smarty_tpl);?>
">
              <dt class="cor_zt"><i class="nav_icon iconfont_zt"></i></dt>
              <dd>专题招聘</dd>
            </a>
          </dl>          
          <dl class="nav_list">
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'article','type'=>'tj'),$_smarty_tpl);?>
">
              <dt class="cor_8"><i class="nav_icon iconfont_news"></i></dt>
              <dd>周边资讯</dd>
            </a>
          </dl>	
<!--          <dl class="nav_list">
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask'),$_smarty_tpl);?>
">
              <dt class="cor_wd"><i class="nav_icon iconfont_ask"></i></dt>
              <dd>互动问答</dd>
            </a>
          </dl>-->
        </div>
<!--        <div class="swiper-slide">
          <dl class="nav_list">
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'redeem'),$_smarty_tpl);?>
">
              <dt class="cor_jf"><i class="nav_icon iconfont_jf"></i></dt>
              <dd><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
商城</dd>
            </a>
          </dl>
          <dl class="nav_list">
            <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'advice'),$_smarty_tpl);?>
">
              <dt class="cor_yj"><i class="nav_icon iconfont_yj"></i></dt>
              <dd>意见反馈</dd>
            </a>
          </dl>   
        </div>-->
      </div>	
      <!-- 如果需要分页器 -->
<!--      <div class="swiper-pagination"></div>-->
    </div></div>
</section>
<div class="clear"></div>
<div class="index_nav_yd">
  <div class="index_nav_yd_left">
    <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'map'),$_smarty_tpl);?>
">
      <div class="index_nav_yd_left_tit">周边工作</div>
      <div class="index_nav_yd_left_icon"></div>
      <div class="index_nav_yd_left_job">好工作，其实就在你身边</div>
    </a>
  </div>
  <div class="index_nav_yd_right">
    <div class="index_nav_yd_right_t">
      <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'tiny'),$_smarty_tpl);?>
"><div class="index_nav_yd_right_t_name">普工专区</div>
        <div class="index_nav_yd_right_t_p">普工.技工.一线员工</div><i class="index_nav_yd_right_icon"></i>
      </a>
    </div>
    <div class="index_nav_yd_right_b">
      <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'once'),$_smarty_tpl);?>
">
        <div class="index_nav_yd_right_bname">店铺招聘</div><div class="index_nav_yd_right_bp">钱多事少，火速入职</div><i class="index_nav_yd_right_bicon"></i>
      </a></div>
  </div>
</div>
<div class="clear"></div>
<section>
  <div class="yun_wap_notice sxl"><span class="yun_wap_notice_tit"><i class="yun_wap_notice_tit_s"></i></span>
    <ul class="yun_wap_notice_list sxlist">
      <?php  $_smarty_tpl->tpl_vars['alist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alist']->_loop = false;
$alist = $alist; if (!is_array($alist) && !is_object($alist)) { settype($alist, 'array');}
foreach ($alist as $_smarty_tpl->tpl_vars['alist']->key => $_smarty_tpl->tpl_vars['alist']->value) {
$_smarty_tpl->tpl_vars['alist']->_loop = true;
?>
      <li><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'announcement','id'=>$_smarty_tpl->tpl_vars['alist']->value['id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['alist']->value['title_n'];?>
</a></li>
      <?php } ?>
    </ul></div>
</section>
<?php if (!$_smarty_tpl->tpl_vars['username']->value) {?> 
<section>
  <div class="index_warp_content mt10">
    <div class="index_login">
      <div class="index_login_p">您尚未登录，马上登录轻松管理信息</div>
      <div class="index_logoin_sub"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);?>
" class="index_logoin_bth">登录</a>      
        <a href="javascript:void(0);" id="reg_mune_boxs" class="index_logoin_bth index_reg_bth">注册</a>            
      </div>
    </div>
  </div>
</section>
<?php }?>
<div class="clear"></div>
<section>
  <div class="yun_companyList">
    <ul class="clearfix">
      <?php  $_smarty_tpl->tpl_vars['adlist_74'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adlist_74']->_loop = false;
$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[74];if(is_array($add_arr) && !empty($add_arr)){
				$i=0;$limit = 12;$length = 0;
				foreach($add_arr as $key=>$value){
					if(($value['did']==$config['did'] ||$value['did']=='0')&&$value['start']<time()&&$value['end']>time()){
						if($i>0 && $limit==$i){
							break;
						}
						if($length>0){
							$value['name'] = mb_substr($value['name'],0,$length);
						}
						if($paramer['type']!=""){
							if($paramer['type'] == $value['type']){
								$AdArr[] = $value;
							}
						}else{
							$AdArr[] = $value;
						}
						$i++;
					}
				}
			}$AdArr = $AdArr; if (!is_array($AdArr) && !is_object($AdArr)) { settype($AdArr, 'array');}
foreach ($AdArr as $_smarty_tpl->tpl_vars['adlist_74']->key => $_smarty_tpl->tpl_vars['adlist_74']->value) {
$_smarty_tpl->tpl_vars['adlist_74']->_loop = true;
?>
      <li><?php echo $_smarty_tpl->tpl_vars['adlist_74']->value['html'];?>
</li>
      <?php } ?>
    </ul>
  </div>
</section>
<div class="clear"></div>
<section>
  <div class="index_wap_tit"><i class="index_wap_tit_icon"></i><span class="index_wap_tit_s">热门职位</span><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','rec'=>1),$_smarty_tpl);?>
" class="index_wap_titmore">更多>></a></div>
  <div class="index_wap_hotjob ">
    <div class="clear"></div>
    <ul  class="index_hotlist"> <?php  $_smarty_tpl->tpl_vars['keylist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['keylist']->_loop = false;
global $config;eval('$paramer=array("limit"=>"5","type"=>"3","recom"=>"1","item"=>"\'keylist\'","iswap"=>"1","nocache"=>"")
;');$list=array();
        
        $ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		
		if($paramer[recom]){
			$tuijian = 1;
		}
		
		if($paramer[type]){
			$type = $paramer[type];
		}
		
		if($paramer[limit]){
			$limit=$paramer[limit];
		}else{
			$limit=5;
		}
		include PLUS_PATH."/keyword.cache.php";
		if($paramer[iswap]){
			$wap = "/wap";
		}else{
			$index =1;
		}
		if(is_array($keyword)){
			if($paramer[iswap]){
				$i=0;
				foreach($keyword as $k=>$v){
					if($tuijian && $v[tuijian]!=1){
						continue;
					}
					if($type && $v[type]!=$type){
						continue;
					}

					$i++;
					if($v[type]=="1"){
						$v[url] = Url("wap",array("c"=>"once","keyword"=>$v['key_name']));
						$v[type_name]='店铺招聘';
					}elseif($v['type']=="13"){
						$v['url'] = Url("wap",array("c"=>"tiny","keyword"=>$v['key_name']));
						$v['type_name']='普工简历';
					}elseif($v[type]=="3"){
						$v[url] = Url("wap",array("c"=>"job","keyword"=>$v['key_name']));
						$v[type_name]='职位';
					}elseif($v['type']=="4"){
						$v['url'] = Url("wap",array("c"=>"company","keyword"=>$v['key_name']));
						$v['type_name']='公司';
					}elseif($v['type']=="5"){
						$v['url'] = Url("wap",array("c"=>"resume","keyword"=>$v['key_name']));
						$v['type_name']='人才';
					}
					$v['key_title']=$v['key_name'];
					if($v['color']){
						$v['key_name']="<font color=\"".$v['color']."\">".$v['key_name']."</font>";
					}
					$list[] = $v;
					if($i==$limit){
						break;
					}
				}
			}else{
				$i=0;
				foreach($keyword as $k=>$v){
					if($tuijian && $v['tuijian']!=1){
						continue;
					}
					if($type && $v['type']!=$type){
						continue;
					}
					$i++;
					if($v['type']=="1"){
						$v['url'] = Url("once",array("keyword"=>$v['key_name']));
						$v['type_name']='店铺招聘';
					}elseif($v['type']=="2"){
						$v['url'] = Url("part",array("keyword"=>$v['key_name']));
						$v['type_name']='兼职';
					}elseif($v['type']=="13"){
						$v['url'] = Url("tiny",array("keyword"=>$v['key_name']));
						$v['type_name']='普工简历';
					}elseif($v['type']=="3"){
						$v['url'] = Url("job",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='职位';
					}elseif($v['type']=="4"){
						$v['url'] = Url("company",array("keyword"=>$v['key_name']));
						$v['type_name']='公司';
					}elseif($v['type']=="5"){
						$v['url'] = Url("resume",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='人才';
					}elseif($v['type']=="6"){
						$v['url'] = Url("lietou",array("c"=>"service","keyword"=>$v['key_name']));
						$v['type_name']='猎头';
					}elseif($v['type']=="7"){
						$v['url'] = Url("lietou",array("c"=>"post","keyword"=>$v['key_name']));
						$v['type_name']='猎头职位';
					}else if($v['type']=="12"){
						$v['url'] = Url("ask",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='问答';
					}
					$v['key_title']=$v['key_name'];
					if($v['color']){
						$v['key_name']="<font color=\"".$v['color']."\">".$v['key_name']."</font>";
					}

					$list[] = $v;
					if($i==$limit){
						break;
					}
				}
			}
		}$list = $list; if (!is_array($list) && !is_object($list)) { settype($list, 'array');}
foreach ($list as $_smarty_tpl->tpl_vars['keylist']->key => $_smarty_tpl->tpl_vars['keylist']->value) {
$_smarty_tpl->tpl_vars['keylist']->_loop = true;
?>
      <li> <a href="<?php echo $_smarty_tpl->tpl_vars['keylist']->value['url'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['keylist']->value['key_name'];?>
</span></a></li><?php } ?> </ul>  <div class="clear"></div>
  </div>
  <div class="clear"></div>
</section>
<section>
  <div class="index_wap_tit"><i class="index_wap_tit_icon"></i><span class="index_wap_tit_s">推荐职位</span><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','rec'=>1),$_smarty_tpl);?>
" class="index_wap_titmore">更多>></a></div>
  <div class="index_warp_jobcontent">
    <?php  $_smarty_tpl->tpl_vars['job_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job_list']->_loop = false;
$job_list = $job_list; if (!is_array($job_list) && !is_object($job_list)) { settype($job_list, 'array');}
foreach ($job_list as $_smarty_tpl->tpl_vars['job_list']->key => $_smarty_tpl->tpl_vars['job_list']->value) {
$_smarty_tpl->tpl_vars['job_list']->_loop = true;
?>
    <div class="index_wap_joblist">
      <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','a'=>'view','id'=>$_smarty_tpl->tpl_vars['job_list']->value['id']),$_smarty_tpl);?>
">
        <h3>
          <?php echo mb_substr($_smarty_tpl->tpl_vars['job_list']->value['name'],0,12,'utf-8');?>

          <?php if ($_smarty_tpl->tpl_vars['job_list']->value['urgent_time']>time()) {?><i class="urgent">急招</i><?php }?>
        </h3>
        <div class="index_wap_joblist_comname">
          <span class="index_wap_joblist_comname_p">
            <?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_city_one'];
echo $_smarty_tpl->tpl_vars['job_list']->value['job_city_two'];?>
-<?php echo mb_substr($_smarty_tpl->tpl_vars['job_list']->value['com_name'],0,22,'utf-8');?>
</span>
          <?php if ($_smarty_tpl->tpl_vars['job_list']->value['yyzz_status']=='1') {?>
          <i class="job_qy_rz_icon"></i>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['job_list']->value['ratlogo']!=''&&$_smarty_tpl->tpl_vars['job_list']->value['ratlogo']!="0") {?> 
          <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['job_list']->value['ratlogo'];?>
" /> 
          <?php }?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['job_list']->value['welfarename']) {?>
        <div class="index_wap_joblist_comcity">
          <?php  $_smarty_tpl->tpl_vars['waflist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['waflist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_list']->value['welfarename']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['waflist']->key => $_smarty_tpl->tpl_vars['waflist']->value) {
$_smarty_tpl->tpl_vars['waflist']->_loop = true;
?>
          <span class="index_wap_joblist_fl"><?php echo $_smarty_tpl->tpl_vars['waflist']->value;?>
</span>
          <?php } ?></div>
        <?php }?>
        <div class="index_wap_joblist_xz">
          ￥<?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_salary'];?>

        </div>
        <div class="index_wap_joblist_time"><?php if ($_smarty_tpl->tpl_vars['job_list']->value['time']=='今天'||$_smarty_tpl->tpl_vars['job_list']->value['time']=='昨天'||$_smarty_tpl->tpl_vars['job_list']->value['redtime']=='1') {?>
          <?php echo $_smarty_tpl->tpl_vars['job_list']->value['time'];?>

          <?php } else { ?>
          <?php echo $_smarty_tpl->tpl_vars['job_list']->value['time'];?>

          <?php }?></div>
      </a>
    </div>
    <?php } ?> </div>
</section>
<div class="clear"></div>
<section>
  <div class="index_wap_tit"><i class="index_wap_tit_icon"></i><span class="index_wap_tit_s">名企招聘</span><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','rec'=>1),$_smarty_tpl);?>
" class="index_wap_titmore">更多>></a></div>
  <div class="index_warp_jobcontent">
    <?php  $_smarty_tpl->tpl_vars['comlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comlist']->_loop = false;
$comlist = $comlist; if (!is_array($comlist) && !is_object($comlist)) { settype($comlist, 'array');}
foreach ($comlist as $_smarty_tpl->tpl_vars['comlist']->key => $_smarty_tpl->tpl_vars['comlist']->value) {
$_smarty_tpl->tpl_vars['comlist']->_loop = true;
?>
    <div class="indexcom_list_box"> 
      <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'company','a'=>'show','id'=>$_smarty_tpl->tpl_vars['comlist']->value['uid']),$_smarty_tpl);?>
"  class="">
        <div class="indexcom_list_t_box">
          <div class="indexcom_list_logo_box"><img src="<?php if ($_smarty_tpl->tpl_vars['comlist']->value['logo']) {
echo $_smarty_tpl->tpl_vars['comlist']->value['logo'];
} else {
echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];
}?>"  onerror="if($(this).attr('load')!='1'){$(this).attr('load',1);this.src='<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
';}"></div>
          <div class="indexcom_list_box_c">
            <h3><?php echo mb_substr($_smarty_tpl->tpl_vars['comlist']->value['name'],0,22,'utf-8');?>
 </h3>
          </div>
          <div class="indexcom_list_box_js">
            <span class="indexcom_list_box_js_s indexcom_list_box_js_s_hy"><i class="indexcom_list_box_js_icon indexcom_list_box_js_icon_hy"></i><?php echo $_smarty_tpl->tpl_vars['comlist']->value['job_hy'];?>
</span> 
            <span class="indexcom_list_box_js_s"><i class="indexcom_list_box_js_icon indexcom_list_box_js_icon_map"></i><?php echo $_smarty_tpl->tpl_vars['comlist']->value['job_city_one'];
if ($_smarty_tpl->tpl_vars['comlist']->value['job_city_two']) {?>-<?php echo $_smarty_tpl->tpl_vars['comlist']->value['job_city_two'];
}?></span>
          </div>
        </div>
      </a> 
    </div>
    <?php } ?> </div>
</section> 
<style>
  .swiper-container {
    width: 100%;
    height: 190px;
  } 
</style>
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
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/swiper/swiper.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/swiper/swiper.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
  $(function(){
    var myimgswiper=new Swiper('#imgswiper',{
      direction:'horizontal'
      ,autoplay:true
      ,loop:true
    });
    var mySwiper=new Swiper('#navswiper',{
      direction:'horizontal'
      ,pagination:{
        el:'.swiper-pagination',
      }
    });
  });
  marquee("2000",".sxl .sxlist");
  function marquee(time,id){
    $(function(){
      var _wrap=$(id);
      var _interval=time;
      var _moving;
      _wrap.hover(function(){
        clearInterval(_moving);
      },function(){
        _moving=setInterval(function(){
          var _field=_wrap.find('li:first');
          var _h=_field.height();
          _field.animate({marginTop:-_h+'px'},800,function(){
            _field.css('marginTop',0).appendTo(_wrap);
          })
        },_interval)
      }).trigger('mouseleave');
    });
  }
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
