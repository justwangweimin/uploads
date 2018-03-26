<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-24 20:31:16
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\resume.htm" */ ?>
<?php /*%%SmartyHeaderCode:11673176715a915b146ee970-30071353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a330b39678dcad9c4b2f2f2441ccce38cef2ff0e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\resume.htm',
      1 => 1518069218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11673176715a915b146ee970-30071353',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'city_name' => 0,
    'jobname' => 0,
    'userclass_name' => 0,
    'searchurl' => 0,
    'user' => 0,
    'eid' => 0,
    'total' => 0,
    'pagenav' => 0,
    'userrec' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a915b14af5c69_43373883',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a915b14af5c69_43373883')) {function content_5a915b14af5c69_43373883($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php $user=array();global $db,$db_config,$config;
		if(is_array($_GET)){
			foreach($_GET as $key=>$value){
				if($value=='0'){
					unset($_GET[$key]);
				}
			}
		}
		eval('$paramer=array("limit"=>"20","edu"=>"\'auto.edu\'","exp"=>"\'auto.exp\'","sex"=>"\'auto.sex\'","uptime"=>"\'auto.uptime\'","keyword"=>"\'auto.keyword\'","hy"=>"\'auto.hy\'","minsalary"=>"\'auto.minsalary\'","maxsalary"=>"\'auto.maxsalary\'","report"=>"\'auto.report\'","three_cityid"=>"\'auto.three_cityid\'","provinceid"=>"\'auto.provinceid\'","cityid"=>"\'auto.cityid\'","jobin"=>"\'auto.jobin\'","type"=>"\'auto.type\'","tag"=>"\'auto.tag\'","order"=>"\'topdate\'","post_len"=>"14","ispage"=>"1","islt"=>"4","item"=>"\'user\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }

	    
		$cache_array = $db->cacheget();
		$userclass_name = $cache_array["user_classname"];
		$city_name      = $cache_array["city_name"];
		$job_name		= $cache_array["job_name"];
		$job_type		= $cache_array["job_type"];
		$industry_name	= $cache_array["industry_name"];
		$where = "status='1' and `r_status`='1'  and `open`='1' and `defaults`='1'";
		
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
		
		if($paramer[where_uid]){
			$where .=" AND `uid` in (".$paramer['where_uid'].")";
		}
	
		if($_COOKIE['uid']&&$_COOKIE['usertype']=="2"){
			$blacklist=$db->select_all("blacklist","`p_uid`='".$_COOKIE['uid']."'","c_uid");
			if(is_array($blacklist)&&$blacklist){
				foreach($blacklist as $v){
					$buid[]=$v['c_uid'];
				}
			$where .=" AND `uid` NOT IN (".@implode(",",$buid).")";
			}
		}
		
		if($paramer[topdate]){
			$where .=" AND `topdate`>'".time()."'";
		}
		
		
		if($paramer[idcard]){
			$where .=" AND `idcard_status`='1'";
		}
		
		if($paramer[height_status]){
			$where .=" AND height_status=".$paramer[height_status];
		}else{
			$where .=" AND height_status='0'";
		}
		
		if($paramer[rec]){
			$where .=" AND `rec`=1";
		}
	
		if($paramer[rec_resume]){
			$where .=" AND `rec_resume`=1";
		}
		
		if($paramer[work]){
			$show=$db->select_all("resume_show","1 group by eid","`eid`");
			if(is_array($show)){
				foreach($show as $v){
					$eid[]=$v['eid'];
				}
			}
			$where .=" AND id in (".@implode(",",$eid).")";
		}
		
		if($paramer[tag]){
		    $tagname=$userclass_name[$paramer[tag]];
			$tag=$db->select_all("resume","`def_job`>0 and `r_status`<>2 and `status`=1 and FIND_IN_SET('".$tagname."',`tag`)","`def_job`");
			if(is_array($tag)){
				foreach($tag as $v){
					$tagid[]=$v['def_job'];
				}
			}
			$where .=" AND id in (".@implode(",",$tagid).")";
		}
		
		if($paramer[cid]){
			$where .= " AND (cityid=$paramer[cid] or three_cityid=$paramer[cid])";
		}
		
		if($paramer[keyword]){

			$jobid = array();
			$where1[]="`name` LIKE '%$paramer[keyword]%'";
			$where1[]="`uname` LIKE '%$paramer[keyword]%'";
			foreach($job_name as $k=>$v){
				if(strpos($v,$paramer[keyword])!==false){
					$jobid[]=$k;
				}
			}
			if(!empty($jobid)){
				foreach($jobid as $value){
					$class[]="FIND_IN_SET('".$value."',job_classid)";
				}
				$where1[]=@implode(" or ",$class);
			}
			include_once  PLUS_PATH."/city.cache.php";
		    $cityid=array();
			foreach($city_name as $k=>$v){
				if(strpos($v,$paramer[keyword])!==false){
					$cityid[]=$k;
				}
			}
			if(!empty($cityid)){
				foreach($cityid as $value){
					$class[]= "(provinceid = '".$value."' or cityid = '".$value."')";
				}
				$where1[]=@implode(" or ",$class);
			}
			$where.=" AND (".@implode(" or ",$where1).")";
		}
		
		if($paramer[pic]=="0" || $paramer[pic]){
			$where .=" AND photo<>''";
			$where .=" AND phototype!=1";
		}
	
		if($paramer[name]=="0"){
			$where .=" AND uname<>''";
		}
		
		if($paramer[hy]=="0"){
			$where .=" AND hy<>''";
		}elseif($paramer[hy]!=""){
			$where .= " AND (`hy` IN (".$paramer['hy']."))";
		}
		
		$job_classid="";
		$joball=array();
		if($paramer[jobids]){
			$joball=explode(",",$paramer[jobids]);
			foreach(explode(",",$paramer[jobids]) as $v){
				if($job_type[$v]){
					$joball[]=@implode(",",$job_type[$v]);
				}
			}
			$job_classid=implode(",",$joball);
		}
		if($paramer[jobin]){
			$joball=explode(",",$paramer[jobin]);
			foreach(explode(",",$paramer[jobin]) as $v){
				if($job_type[$v]){
					$joball[]=@implode(",",$job_type[$v]);
				}
			}
			$job_classid=implode(",",$joball);
		}
		if($paramer[job1]){
			$joball=$job_type[$paramer[job1]];
			foreach($job_type[$paramer[job1]] as $v){
				$joball[]=@implode(",",$job_type[$v]);
			}
			$job_classid=@implode(",",$joball);
		}
		if($paramer[job1_son]){
			$joball=$job_type[$paramer[job1_son]];
			foreach($job_type[$paramer[job1_son]] as $v){
				$joball[]=@implode(",",$v);
			}
			$job_classid=@implode(",",$joball);
		}
		if(!empty($job_classid)){
			$classid=@explode(",",$job_classid);
		    $jobclass=array();
			foreach($classid as $value){
				$jobclass[]="FIND_IN_SET('".$value."',job_classid)";
			}
			$classid=@implode(" or ",$jobclass);
			$where .= " AND ($classid)";
		}
		if($paramer[job_post]){
			$where .=" AND FIND_IN_SET('".$paramer[job_post]."',job_classid)";
		}
		
		if($paramer[provinceid]){
			$where .= " AND provinceid = $paramer[provinceid]";
		}
		
		if($paramer[cityid]){
			$where .= " AND (`cityid` IN ($paramer[cityid]))";
		}
	
		if($paramer[three_cityid]){
			$where .= " AND (`three_cityid` IN ($paramer[three_cityid]))";
		}
		
		if($paramer[cityin]){
			$where .= " AND(provinceid IN ($paramer[cityin]) OR cityid IN ($paramer[cityin]) OR three_cityid IN ($paramer[cityin]))";
		}
	
		if($paramer[exp]){
			$where .=" AND exp=$paramer[exp]";
		}
	
		if($paramer[edu]){
			$where .=" AND edu=$paramer[edu]";
		}
		
		if($paramer[sex]){
			$where .=" AND sex=$paramer[sex]";
		}
		
		if($paramer[report]){
			$where .=" AND report=$paramer[report]";
		}
	
		if($paramer[salary]){
			$where .=" AND salary=$paramer[salary]";
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
		
	
		if($paramer[type]){
			$where .= " AND type=$paramer[type]";
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
	
		if($paramer[adtime]){
			$time=time();
			$adtime = $time-($paramer[adtime]*86400);
			$where.=" AND status_time>$adtime";
		}
		
     
		
		if($paramer[order] && $paramer[order]!="lastdate"){
			if($paramer[order]=='topdate'){
				$nowtime=time();
				$order = " ORDER BY if(topdate>$nowtime,topdate,lastupdate)";
			}else{
				$order = " ORDER BY `".str_replace("'","",$paramer[order])."`";
			}
		}else{
			$order = " ORDER BY lastupdate ";
		}
		
	
		$sort = $paramer[sort]?$paramer[sort]:'DESC';
		
		if($paramer[limit]){
			$limit=" LIMIT ".$paramer[limit];
		}

		
		if($paramer[where]){
			$where = $paramer[where];
		}
		if($paramer[ispage]){
			if($paramer["height_status"]){
				$limit = PageNav($paramer,$_GET,"resume_expect",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"3",$_smarty_tpl);
			}else{
				
				$limit = PageNav($paramer,$_GET,"resume_expect",$where,$Purl,"",'0',$_smarty_tpl);
			}
		}
		$where.=$order.$sort;
 		$user=$db->select_all("resume_expect",$where.$limit,"*,uname as username");
        include(CONFIG_PATH."db.data.php");		
		if($user && is_array($user)){
			
			
			if($paramer['top']){
				$uids=$m_name=array();
				foreach($user as $k=>$v){
					$uids[]=$v[uid];
				}

				$member=$db->select_all($db_config[def]."member","`uid` in(".@implode(',',$uids).")","uid,username");
				foreach($member as $val){
					$m_name[$val[uid]]=$val['username'];
				}
			}
			foreach($user as $key=>$value){
				$uid[] = $value['uid'];
				$eid[] = $value['id'];
			}
			$eids = @implode(',',$eid);
			$uids = @implode(',',$uid);
            $resume=$db->select_all("resume","`uid` in(".$uids.")","uid,name,nametype,tag,sex,edu,exp,photo,phototype,birthday");
			if($paramer[topdate]){
				$noids=array();
			}	
			foreach($user as $k=>$v){
				if($paramer[topdate]){
					$noids[] = $v[id];
				}
				
				if($paramer[noid]=='1' && !empty($noids) && in_array($v['id'],$noids)){
					unset($user[$k]);
					continue;
				}
			    foreach($resume as $val){
			        if($v['uid']==$val['uid']){
			    		$user[$k]['edu_n']=$userclass_name[$val['edu']];
				        $user[$k]['exp_n']=$userclass_name[$val['exp']];
			            if($val['birthday']){
							$year = date("Y",strtotime($val['birthday']));
							$user[$k]['age'] =date("Y")-$year;
						}
						if($val['sex']==152){
							$val['sex']='1';
						}elseif ($val['sex']==153){
							$val['sex']='2';
						}
						$user[$k]['sex'] =$arr_data[sex][$val['sex']];
		                $user[$k]['phototype']=$val[phototype];
						if($config['user_pic']==1 || !$config['user_pic']){
		                if($val['photo'] && $val['phototype']!=1&&(file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['photo']))||file_exists(str_replace($config['sy_weburl'],APP_PATH,$val['photo'])))){
            				$user[$k]['photo']=str_replace("./",$config['sy_weburl']."/",$val['photo']);
            			}else{
            				if($val['sex']==1||$val['sex']==152){
            					$user[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_icon'];
            				}else{
            					$user[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_iconv'];
            				}
            			}
						}elseif($config['user_pic']==2){
							if($val['photo']&&(file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['photo']))||file_exists(str_replace($config['sy_weburl'],APP_PATH,$val['photo'])))){
								$user[$k]['photo']=str_replace("./",$config['sy_weburl']."/",$val['photo']);
							}else{
								if($val['sex']==1||$val['sex']==152){
									$user[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_icon'];
								}else{
									$user[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_iconv'];
								}
							}
						}elseif($config['user_pic']==3){
							if($val['sex']==1||$val['sex']==152){
								$user[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_icon'];
							}else{
								$user[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_iconv'];
							}
						}
						if($val['tag']){
                            $user[$k]['tag']=explode(',',$val['tag']);
	                    }
                        $user[$k]['nametype']=$val[nametype];
                       
						if($config['user_name']==1 || !$config['user_name']){
						if($val['nametype']==3){
						    if($val['sex']==1){
						        $user[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
						    }else{
						        $user[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
						    }
						}elseif($val['nametype']==2){
						    $user[$k]['username_n'] = "NO.".$v['id'];
						}else{
							$user[$k]['username_n'] = $val['name'];
						}
						}elseif($config['user_name']==3){
							if($val['sex']==1||$val['sex']==152){
								$user[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
							}else{
								$user[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
							}
						}elseif($config['user_name']==2){
							$user[$k]['username_n'] = "NO.".$v['id'];
						}elseif($config['user_name']==4){
							$user[$k]['username_n'] = $val['name'];
						}
                    }
                }
				
				
				$time=$v['lastupdate'];
				
				$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
				
				$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
			
				$week=strtotime(date("Y-m-d",strtotime("-1 week")));
				if($time>$week && $time<$beginYesterday){
					$user[$k]['time'] = "一周内";
				}elseif($time>$beginYesterday && $time<$beginToday){
					$user[$k]['time'] = "昨天";
				}elseif($time>$beginToday){
					$user[$k]['time'] = date("H:i",$v['lastupdate']);
					$user[$k]['redtime'] =1;
				}else{
					$user[$k]['time'] = date("Y-m-d",$v['lastupdate']);
				} 
				
				
				$user[$k]['user_jobstatus_n']=$userclass_name[$v['jobstatus']];
				$user[$k]['job_city_one']=$city_name[$v['provinceid']];
				$user[$k]['job_city_two']=$city_name[$v['cityid']];
				$user[$k]['job_city_three']=$city_name[$v['three_cityid']];
				if($v['minsalary']&&$v['maxsalary']){
					$user[$k]["salary_n"] = "￥".$v['minsalary']."-".$v['maxsalary'];    
                }else if($v['minsalary']){
                    $user[$k]["salary_n"] = "￥".$v['minsalary']."以上";  
                }else{
    				$user[$k]["salary_n"] = "面议";
    			}
				$user[$k]['report_n']=$userclass_name[$v['report']];
				$user[$k]['type_n']=$userclass_name[$v['type']];
				$user[$k]['lastupdate']=date("Y-m-d",$v['lastupdate']);
					
				$user[$k]['user_url']=Url("resume",array("c"=>"show","id"=>$v['id']),"1");
				$user[$k]["hy_info"]=$industry_name[$v['hy']];
				if($paramer['top']){
					$user[$k]['m_name']=$m_name[$v['uid']];
					$user[$k]['user_url']=Url("ask",array("c"=>"friend","a"=>"myquestion","uid"=>$v['uid']));
				}
				$kjob_classid=@explode(",",$v['job_classid']);
				$kjob_classid=array_unique($kjob_classid);	
				$jobname=array();
				if(is_array($kjob_classid)){
					foreach($kjob_classid as $val){
					    if($val!=''){
					        if($paramer['keyword']){
                               $jobname[]=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$job_name[$val]);
                            }else{
                               $jobname[]=$job_name[$val];
                            }
                        }
					}
				}
				$user[$k]['job_post']=@implode(",",$jobname);
				$user[$k]['expectjob']=$jobname;
				
				if($paramer['post_len']){
					$postname[$k]=@implode(",",$jobname);
					$user[$k]['job_post_n']=mb_substr($postname[$k],0,$paramer[post_len],"utf-8");
				}
			}
			foreach($user as $k=>$v){
               if($paramer['keyword']){
					$user[$k]['username_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$v['username_n']);
					$user[$k]['job_post']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$user[$k]['job_post']);
					$user[$k]['job_post_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$user[$k]['job_post_n']);
					$user[$k]['job_city_one']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$city_name[$v['provinceid']]);
					$user[$k]['job_city_two']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$city_name[$v['cityid']]);
				}
            }
			if($paramer['keyword']!=""&&!empty($user)){
				addkeywords('5',$paramer['keyword']);
			}
		} ?>
<?php $userrec=array();global $db,$db_config,$config;
		if(is_array($_GET)){
			foreach($_GET as $key=>$value){
				if($value=='0'){
					unset($_GET[$key]);
				}
			}
		}
		eval('$paramer=array("limit"=>"3","post_len"=>"18","rec_resume"=>"1","item"=>"\'userrec\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }

	    
		$cache_array = $db->cacheget();
		$userclass_name = $cache_array["user_classname"];
		$city_name      = $cache_array["city_name"];
		$job_name		= $cache_array["job_name"];
		$job_type		= $cache_array["job_type"];
		$industry_name	= $cache_array["industry_name"];
		$where = "status='1' and `r_status`='1'  and `open`='1' and `defaults`='1'";
		
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
		
		if($paramer[where_uid]){
			$where .=" AND `uid` in (".$paramer['where_uid'].")";
		}
	
		if($_COOKIE['uid']&&$_COOKIE['usertype']=="2"){
			$blacklist=$db->select_all("blacklist","`p_uid`='".$_COOKIE['uid']."'","c_uid");
			if(is_array($blacklist)&&$blacklist){
				foreach($blacklist as $v){
					$buid[]=$v['c_uid'];
				}
			$where .=" AND `uid` NOT IN (".@implode(",",$buid).")";
			}
		}
		
		if($paramer[topdate]){
			$where .=" AND `topdate`>'".time()."'";
		}
		
		
		if($paramer[idcard]){
			$where .=" AND `idcard_status`='1'";
		}
		
		if($paramer[height_status]){
			$where .=" AND height_status=".$paramer[height_status];
		}else{
			$where .=" AND height_status='0'";
		}
		
		if($paramer[rec]){
			$where .=" AND `rec`=1";
		}
	
		if($paramer[rec_resume]){
			$where .=" AND `rec_resume`=1";
		}
		
		if($paramer[work]){
			$show=$db->select_all("resume_show","1 group by eid","`eid`");
			if(is_array($show)){
				foreach($show as $v){
					$eid[]=$v['eid'];
				}
			}
			$where .=" AND id in (".@implode(",",$eid).")";
		}
		
		if($paramer[tag]){
		    $tagname=$userclass_name[$paramer[tag]];
			$tag=$db->select_all("resume","`def_job`>0 and `r_status`<>2 and `status`=1 and FIND_IN_SET('".$tagname."',`tag`)","`def_job`");
			if(is_array($tag)){
				foreach($tag as $v){
					$tagid[]=$v['def_job'];
				}
			}
			$where .=" AND id in (".@implode(",",$tagid).")";
		}
		
		if($paramer[cid]){
			$where .= " AND (cityid=$paramer[cid] or three_cityid=$paramer[cid])";
		}
		
		if($paramer[keyword]){

			$jobid = array();
			$where1[]="`name` LIKE '%$paramer[keyword]%'";
			$where1[]="`uname` LIKE '%$paramer[keyword]%'";
			foreach($job_name as $k=>$v){
				if(strpos($v,$paramer[keyword])!==false){
					$jobid[]=$k;
				}
			}
			if(!empty($jobid)){
				foreach($jobid as $value){
					$class[]="FIND_IN_SET('".$value."',job_classid)";
				}
				$where1[]=@implode(" or ",$class);
			}
			include_once  PLUS_PATH."/city.cache.php";
		    $cityid=array();
			foreach($city_name as $k=>$v){
				if(strpos($v,$paramer[keyword])!==false){
					$cityid[]=$k;
				}
			}
			if(!empty($cityid)){
				foreach($cityid as $value){
					$class[]= "(provinceid = '".$value."' or cityid = '".$value."')";
				}
				$where1[]=@implode(" or ",$class);
			}
			$where.=" AND (".@implode(" or ",$where1).")";
		}
		
		if($paramer[pic]=="0" || $paramer[pic]){
			$where .=" AND photo<>''";
			$where .=" AND phototype!=1";
		}
	
		if($paramer[name]=="0"){
			$where .=" AND uname<>''";
		}
		
		if($paramer[hy]=="0"){
			$where .=" AND hy<>''";
		}elseif($paramer[hy]!=""){
			$where .= " AND (`hy` IN (".$paramer['hy']."))";
		}
		
		$job_classid="";
		$joball=array();
		if($paramer[jobids]){
			$joball=explode(",",$paramer[jobids]);
			foreach(explode(",",$paramer[jobids]) as $v){
				if($job_type[$v]){
					$joball[]=@implode(",",$job_type[$v]);
				}
			}
			$job_classid=implode(",",$joball);
		}
		if($paramer[jobin]){
			$joball=explode(",",$paramer[jobin]);
			foreach(explode(",",$paramer[jobin]) as $v){
				if($job_type[$v]){
					$joball[]=@implode(",",$job_type[$v]);
				}
			}
			$job_classid=implode(",",$joball);
		}
		if($paramer[job1]){
			$joball=$job_type[$paramer[job1]];
			foreach($job_type[$paramer[job1]] as $v){
				$joball[]=@implode(",",$job_type[$v]);
			}
			$job_classid=@implode(",",$joball);
		}
		if($paramer[job1_son]){
			$joball=$job_type[$paramer[job1_son]];
			foreach($job_type[$paramer[job1_son]] as $v){
				$joball[]=@implode(",",$v);
			}
			$job_classid=@implode(",",$joball);
		}
		if(!empty($job_classid)){
			$classid=@explode(",",$job_classid);
		    $jobclass=array();
			foreach($classid as $value){
				$jobclass[]="FIND_IN_SET('".$value."',job_classid)";
			}
			$classid=@implode(" or ",$jobclass);
			$where .= " AND ($classid)";
		}
		if($paramer[job_post]){
			$where .=" AND FIND_IN_SET('".$paramer[job_post]."',job_classid)";
		}
		
		if($paramer[provinceid]){
			$where .= " AND provinceid = $paramer[provinceid]";
		}
		
		if($paramer[cityid]){
			$where .= " AND (`cityid` IN ($paramer[cityid]))";
		}
	
		if($paramer[three_cityid]){
			$where .= " AND (`three_cityid` IN ($paramer[three_cityid]))";
		}
		
		if($paramer[cityin]){
			$where .= " AND(provinceid IN ($paramer[cityin]) OR cityid IN ($paramer[cityin]) OR three_cityid IN ($paramer[cityin]))";
		}
	
		if($paramer[exp]){
			$where .=" AND exp=$paramer[exp]";
		}
	
		if($paramer[edu]){
			$where .=" AND edu=$paramer[edu]";
		}
		
		if($paramer[sex]){
			$where .=" AND sex=$paramer[sex]";
		}
		
		if($paramer[report]){
			$where .=" AND report=$paramer[report]";
		}
	
		if($paramer[salary]){
			$where .=" AND salary=$paramer[salary]";
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
		
	
		if($paramer[type]){
			$where .= " AND type=$paramer[type]";
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
	
		if($paramer[adtime]){
			$time=time();
			$adtime = $time-($paramer[adtime]*86400);
			$where.=" AND status_time>$adtime";
		}
		
     
		
		if($paramer[order] && $paramer[order]!="lastdate"){
			if($paramer[order]=='topdate'){
				$nowtime=time();
				$order = " ORDER BY if(topdate>$nowtime,topdate,lastupdate)";
			}else{
				$order = " ORDER BY `".str_replace("'","",$paramer[order])."`";
			}
		}else{
			$order = " ORDER BY lastupdate ";
		}
		
	
		$sort = $paramer[sort]?$paramer[sort]:'DESC';
		
		if($paramer[limit]){
			$limit=" LIMIT ".$paramer[limit];
		}

		
		if($paramer[where]){
			$where = $paramer[where];
		}
		if($paramer[ispage]){
			if($paramer["height_status"]){
				$limit = PageNav($paramer,$_GET,"resume_expect",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"3",$_smarty_tpl);
			}else{
				
				$limit = PageNav($paramer,$_GET,"resume_expect",$where,$Purl,"",'0',$_smarty_tpl);
			}
		}
		$where.=$order.$sort;
 		$userrec=$db->select_all("resume_expect",$where.$limit,"*,uname as username");
        include(CONFIG_PATH."db.data.php");		
		if($userrec && is_array($userrec)){
			
			
			if($paramer['top']){
				$uids=$m_name=array();
				foreach($userrec as $k=>$v){
					$uids[]=$v[uid];
				}

				$member=$db->select_all($db_config[def]."member","`uid` in(".@implode(',',$uids).")","uid,username");
				foreach($member as $val){
					$m_name[$val[uid]]=$val['username'];
				}
			}
			foreach($userrec as $key=>$value){
				$uid[] = $value['uid'];
				$eid[] = $value['id'];
			}
			$eids = @implode(',',$eid);
			$uids = @implode(',',$uid);
            $resume=$db->select_all("resume","`uid` in(".$uids.")","uid,name,nametype,tag,sex,edu,exp,photo,phototype,birthday");
			if($paramer[topdate]){
				$noids=array();
			}	
			foreach($userrec as $k=>$v){
				if($paramer[topdate]){
					$noids[] = $v[id];
				}
				
				if($paramer[noid]=='1' && !empty($noids) && in_array($v['id'],$noids)){
					unset($userrec[$k]);
					continue;
				}
			    foreach($resume as $val){
			        if($v['uid']==$val['uid']){
			    		$userrec[$k]['edu_n']=$userclass_name[$val['edu']];
				        $userrec[$k]['exp_n']=$userclass_name[$val['exp']];
			            if($val['birthday']){
							$year = date("Y",strtotime($val['birthday']));
							$userrec[$k]['age'] =date("Y")-$year;
						}
						if($val['sex']==152){
							$val['sex']='1';
						}elseif ($val['sex']==153){
							$val['sex']='2';
						}
						$userrec[$k]['sex'] =$arr_data[sex][$val['sex']];
		                $userrec[$k]['phototype']=$val[phototype];
						if($config['user_pic']==1 || !$config['user_pic']){
		                if($val['photo'] && $val['phototype']!=1&&(file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['photo']))||file_exists(str_replace($config['sy_weburl'],APP_PATH,$val['photo'])))){
            				$userrec[$k]['photo']=str_replace("./",$config['sy_weburl']."/",$val['photo']);
            			}else{
            				if($val['sex']==1||$val['sex']==152){
            					$userrec[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_icon'];
            				}else{
            					$userrec[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_iconv'];
            				}
            			}
						}elseif($config['user_pic']==2){
							if($val['photo']&&(file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['photo']))||file_exists(str_replace($config['sy_weburl'],APP_PATH,$val['photo'])))){
								$userrec[$k]['photo']=str_replace("./",$config['sy_weburl']."/",$val['photo']);
							}else{
								if($val['sex']==1||$val['sex']==152){
									$userrec[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_icon'];
								}else{
									$userrec[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_iconv'];
								}
							}
						}elseif($config['user_pic']==3){
							if($val['sex']==1||$val['sex']==152){
								$userrec[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_icon'];
							}else{
								$userrec[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_iconv'];
							}
						}
						if($val['tag']){
                            $userrec[$k]['tag']=explode(',',$val['tag']);
	                    }
                        $userrec[$k]['nametype']=$val[nametype];
                       
						if($config['user_name']==1 || !$config['user_name']){
						if($val['nametype']==3){
						    if($val['sex']==1){
						        $userrec[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
						    }else{
						        $userrec[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
						    }
						}elseif($val['nametype']==2){
						    $userrec[$k]['username_n'] = "NO.".$v['id'];
						}else{
							$userrec[$k]['username_n'] = $val['name'];
						}
						}elseif($config['user_name']==3){
							if($val['sex']==1||$val['sex']==152){
								$userrec[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
							}else{
								$userrec[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
							}
						}elseif($config['user_name']==2){
							$userrec[$k]['username_n'] = "NO.".$v['id'];
						}elseif($config['user_name']==4){
							$userrec[$k]['username_n'] = $val['name'];
						}
                    }
                }
				
				
				$time=$v['lastupdate'];
				
				$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
				
				$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
			
				$week=strtotime(date("Y-m-d",strtotime("-1 week")));
				if($time>$week && $time<$beginYesterday){
					$userrec[$k]['time'] = "一周内";
				}elseif($time>$beginYesterday && $time<$beginToday){
					$userrec[$k]['time'] = "昨天";
				}elseif($time>$beginToday){
					$userrec[$k]['time'] = date("H:i",$v['lastupdate']);
					$userrec[$k]['redtime'] =1;
				}else{
					$userrec[$k]['time'] = date("Y-m-d",$v['lastupdate']);
				} 
				
				
				$userrec[$k]['user_jobstatus_n']=$userclass_name[$v['jobstatus']];
				$userrec[$k]['job_city_one']=$city_name[$v['provinceid']];
				$userrec[$k]['job_city_two']=$city_name[$v['cityid']];
				$userrec[$k]['job_city_three']=$city_name[$v['three_cityid']];
				if($v['minsalary']&&$v['maxsalary']){
					$userrec[$k]["salary_n"] = "￥".$v['minsalary']."-".$v['maxsalary'];    
                }else if($v['minsalary']){
                    $userrec[$k]["salary_n"] = "￥".$v['minsalary']."以上";  
                }else{
    				$userrec[$k]["salary_n"] = "面议";
    			}
				$userrec[$k]['report_n']=$userclass_name[$v['report']];
				$userrec[$k]['type_n']=$userclass_name[$v['type']];
				$userrec[$k]['lastupdate']=date("Y-m-d",$v['lastupdate']);
					
				$userrec[$k]['user_url']=Url("resume",array("c"=>"show","id"=>$v['id']),"1");
				$userrec[$k]["hy_info"]=$industry_name[$v['hy']];
				if($paramer['top']){
					$userrec[$k]['m_name']=$m_name[$v['uid']];
					$userrec[$k]['user_url']=Url("ask",array("c"=>"friend","a"=>"myquestion","uid"=>$v['uid']));
				}
				$kjob_classid=@explode(",",$v['job_classid']);
				$kjob_classid=array_unique($kjob_classid);	
				$jobname=array();
				if(is_array($kjob_classid)){
					foreach($kjob_classid as $val){
					    if($val!=''){
					        if($paramer['keyword']){
                               $jobname[]=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$job_name[$val]);
                            }else{
                               $jobname[]=$job_name[$val];
                            }
                        }
					}
				}
				$userrec[$k]['job_post']=@implode(",",$jobname);
				$userrec[$k]['expectjob']=$jobname;
				
				if($paramer['post_len']){
					$postname[$k]=@implode(",",$jobname);
					$userrec[$k]['job_post_n']=mb_substr($postname[$k],0,$paramer[post_len],"utf-8");
				}
			}
			foreach($userrec as $k=>$v){
               if($paramer['keyword']){
					$userrec[$k]['username_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$v['username_n']);
					$userrec[$k]['job_post']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$userrec[$k]['job_post']);
					$userrec[$k]['job_post_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$userrec[$k]['job_post_n']);
					$userrec[$k]['job_city_one']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$city_name[$v['provinceid']]);
					$userrec[$k]['job_city_two']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$city_name[$v['cityid']]);
				}
            }
			if($paramer['keyword']!=""&&!empty($userrec)){
				addkeywords('5',$paramer['keyword']);
			}
		} ?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/demo.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/wap_tck.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
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
} else { ?>意向<?php }?></span><i class="searchOptions_icon"></i></a></li>
      <li class="Sortexp popup" data-pop="Sortexp"><a href="javascript:void(0);" class="searchOptions_list_a"><span class="job_ov"><?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_GET['exp']]) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_GET['exp']];
} else { ?>经验<?php }?></span><i class="searchOptions_icon"></i></a></li>
      <li class="Gengduos popup" data-pop="Gengduos" style="border:none"><a href="javascript:void(0);" class="searchOptions_list_a">更多<i class="searchOptions_icon"></i></a></li>
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
		<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
$user = $user; if (!is_array($user) && !is_object($user)) { settype($user, 'array');}
foreach ($user as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
			<div class="user_list_cont" style="margin-top:0px;border-bottom:1px solid #eee"> <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume','a'=>'show','id'=>$_smarty_tpl->tpl_vars['user']->value['id']),$_smarty_tpl);?>
" class="user_list_b">
				<div class="user_list">
					<aside class="user_tj_photo"> 
						<?php if ($_smarty_tpl->tpl_vars['user']->value['photo']!='') {?> 
							<img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['photo'];?>
"> 
						<?php } else { ?> 
							<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
"> 
						<?php }?> 
					</aside>

					<span class="<?php if ($_smarty_tpl->tpl_vars['user']->value['sex']=='女') {?>user_tj_xg<?php } else { ?>user_tj_xb<?php }?>"></span>
					<h3><span class="c288"><?php if (in_array($_smarty_tpl->tpl_vars['user']->value['id'],$_smarty_tpl->tpl_vars['eid']->value)) {
echo $_smarty_tpl->tpl_vars['user']->value['uname'];
} else {
echo $_smarty_tpl->tpl_vars['user']->value['username_n'];
}?></span>
						<?php if ($_smarty_tpl->tpl_vars['user']->value['topdate']>time()) {?><i class="user_icon_zd">置顶</i> <?php }?>        
						<span class="resume_t_date">        
							<?php if ($_smarty_tpl->tpl_vars['user']->value['redtime']==1||$_smarty_tpl->tpl_vars['user']->value['time']=='昨天') {?>
								<span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['user']->value['time'];?>
</span>
							<?php } else { ?>
								<?php echo $_smarty_tpl->tpl_vars['user']->value['time'];?>

							<?php }?>
						</span>        
					</h3>

					<aside class="user_list_p">
						<span class="user_list_info"><?php if ($_smarty_tpl->tpl_vars['user']->value['age']==0) {?>保密<?php } else {
echo $_smarty_tpl->tpl_vars['user']->value['age'];?>
岁<?php }?></span>
						<span class="user_list_info"><?php echo $_smarty_tpl->tpl_vars['user']->value['exp_n'];?>
经验</span>
						<span class="user_list_info"><?php echo $_smarty_tpl->tpl_vars['user']->value['edu_n'];?>
学历</span>
					</aside> 

					<aside class="user_list_pyxjob"> 
						<em class="user_p_ov"><span class=""><?php echo $_smarty_tpl->tpl_vars['user']->value['job_post'];?>
</span></em> 
						<i class="user_list_p_line">|</i><?php echo $_smarty_tpl->tpl_vars['user']->value['salary_n'];?>
 
					</aside>   
                    <div class="user_list_want">想找 <span class="user_list_yxjob"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</span> 工作</div>   
				</div>
			</a> 
		</div>
	<?php } ?> 
</div>

  <?php if ($_smarty_tpl->tpl_vars['total']->value<=0) {?>
  <?php if ($_GET['keyword']!='') {?>
  <div class="wap_member_no">没有搜索到人才<div><a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume'),$_smarty_tpl);?>
">重新搜索</a></div></div>
  <?php } else { ?>
  <div class="wap_member_no">暂无人才<div><a class="wap_mb_no_sr" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume'),$_smarty_tpl);?>
">重新搜索</a></div></div>
  <?php }?>
  <?php } else { ?> 
  <div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div> 
  <?php }?> 
  </div>
  </section>
 <?php if ($_smarty_tpl->tpl_vars['total']->value<=0) {?>
<section>
<div class="index_wap_tit" style="margin-top:0px;"><i class="index_wap_tit_icon"></i><span class="index_wap_tit_s">为你推荐</span></div>
<?php  $_smarty_tpl->tpl_vars['userrec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['userrec']->_loop = false;
$userrec = $userrec; if (!is_array($userrec) && !is_object($userrec)) { settype($userrec, 'array');}
foreach ($userrec as $_smarty_tpl->tpl_vars['userrec']->key => $_smarty_tpl->tpl_vars['userrec']->value) {
$_smarty_tpl->tpl_vars['userrec']->_loop = true;
?>
<div class="user_list_cont" style="margin-top:0px; margin-bottom:10px;"> 
<div class="user_list">
<aside class="user_tj_photo">  
<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'resume','a'=>'show','id'=>$_smarty_tpl->tpl_vars['userrec']->value['id']),$_smarty_tpl);?>
" class="user_list_b">
<img src="<?php echo $_smarty_tpl->tpl_vars['userrec']->value['photo'];?>
" width="80" height="100" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);"/></a>
</aside>
        <h3><span class="c288"><a href="<?php echo $_smarty_tpl->tpl_vars['userrec']->value['user_url'];?>
"><?php if (in_array($_smarty_tpl->tpl_vars['userrec']->value['id'],$_smarty_tpl->tpl_vars['eid']->value)) {
echo $_smarty_tpl->tpl_vars['userrec']->value['uname'];
} else {
echo $_smarty_tpl->tpl_vars['userrec']->value['username_n'];
}?></a></span>            
        <span class="resume_t_date">        
        <?php if ($_smarty_tpl->tpl_vars['userrec']->value['redtime']==1||$_smarty_tpl->tpl_vars['userrec']->value['time']=='昨天') {?>
        	<span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['userrec']->value['time'];?>
</span>
        <?php } else { ?>
        	<?php echo $_smarty_tpl->tpl_vars['userrec']->value['time'];?>

        <?php }?>
         </span>        
        </h3>
       <aside class="user_list_p">   
       <span class="user_city_n"><?php echo $_smarty_tpl->tpl_vars['userrec']->value['job_city_one'];?>
-<?php echo $_smarty_tpl->tpl_vars['userrec']->value['job_city_two'];?>
</span>
       <i class="user_list_p_line">|</i>
       <span class="user_list_jy_p"><?php echo $_smarty_tpl->tpl_vars['userrec']->value['exp_n'];?>
</span>
       <i class="user_list_p_line">|</i>
       <?php echo $_smarty_tpl->tpl_vars['userrec']->value['edu_n'];?>
学历
       </aside> 
       <aside class="user_list_pyxjob"> <em class="user_p_ov"><span class="user_list_j">意向职位：</span>
       <span class="user_list_yxjob"><?php echo $_smarty_tpl->tpl_vars['userrec']->value['job_post_n'];?>
</span></em> </aside>      
     </div>
 </div>
<?php } ?>
</section>
<?php }?>
<style>
.user_tj_xg{ display:inline-block;width:20px;height:20px; background:#ee7e56;border-radius:50%;border:2px solid #fff; position:absolute;left:50px;bottom:20px;}
.user_tj_xg:after{width:14px;height:14px; background:url(<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/images/yun_g.png) no-repeat;content:""; position:absolute;left:3px;top:5px;background-size:100% }
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
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/js/demo.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/publictwo.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
