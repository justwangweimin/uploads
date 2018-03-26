<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-07 11:40:19
         compiled from "D:\xampp\htdocs\uploads\app\template\default\tiny\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:5368792445a9f5f23b297d0-88679972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26469a698608b645e7918370f0a99bb73daeccc5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\default\\tiny\\index.htm',
      1 => 1517640112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5368792445a9f5f23b297d0-88679972',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'style' => 0,
    'config' => 0,
    'num' => 0,
    'add_time' => 0,
    'getinfo' => 0,
    'key' => 0,
    'v' => 0,
    'keylist' => 0,
    'wres' => 0,
    'uid' => 0,
    'total' => 0,
    'pagenav' => 0,
    'arr_data' => 0,
    'j' => 0,
    'userdata' => 0,
    'userclass_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a9f5f23d9f6f8_75684902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9f5f23d9f6f8_75684902')) {function content_5a9f5f23d9f6f8_75684902($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php global $db,$db_config,$config;eval('$paramer=array("add_time"=>"\'auto.add_time\'","item"=>"\'wres\'","ispage"=>"1","limit"=>"21","keyword"=>"\'auto.keyword\'","nocache"=>"")
;');$wres=array();
		include PLUS_PATH."/user.cache.php";
	
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where = "status='1' ";
		
	
		if($paramer[keyword]){
			$where.=" AND `username` LIKE '%".$paramer[keyword]."%' or `job` LIKE '%".$paramer[keyword]."%'";
		}
		if($config[did]){
			$where.=" AND `did`='".$config['did']."'";
		}
		if($paramer['add_time']>0){
			$time=time()-$paramer['add_time']*86400;
			$where.=" and `lastupdate`>".$time;
		}
		if($paramer['delid']){
			$where.=" AND `id`<>'".$paramer['delid']."'";
		}
	
		if($paramer['order']){
			$order = " ORDER BY `".str_replace("'","",$paramer[order])."`";
		}else{
			$order = " ORDER BY lastupdate ";
		}
		
		if($paramer['sort']){
			$sort = $paramer['sort'];
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
			$limit = PageNav($paramer,$_GET,"resume_tiny",$where,$Purl,'','0',$_smarty_tpl);
		}
		$where.=$order.$sort.$limit;
		$wres=$db->select_all("resume_tiny",$where);
		include(CONFIG_PATH."db.data.php");		
		if(is_array($wres)){
			foreach($wres as $key=>$value){				
				$time=$value['lastupdate'];
				
				$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
				
				$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
				
				$week=strtotime(date("Y-m-d",strtotime("-1 week")));
				if($time>$week && $time<$beginYesterday){
					$wres[$key]['lastupdate'] = "一周内";
				}elseif($time>$beginYesterday && $time<$beginToday){
					$wres[$key]['lastupdate'] = "昨天";
				}elseif($time>$beginToday){
					$wres[$key]['lastupdate'] = "今天";
					$wres[$key]['redtime'] =1;
				}else{
					$wres[$key]['lastupdate'] = date("Y-m-d",$value['lastupdate']);					
				}
				$wres[$key]['sex'] =$arr_data['sex'][$value['sex']];
				$wres[$key]['exp_name'] =$userclass_name[$value['exp']];
			}
		}
		if(is_array($wres)){
			if($paramer[keyword]!=""&&!empty($wres)){
				addkeywords('1',$paramer[keyword]);
			}
		} ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"/>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/microresume.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
</head>
<body class="once_bg">
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/index_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="clear"></div>
<div class="tiny_banner">
<div class="once_banner_cont">
 <div class="once_banner_cont_cur">您当前的位置：<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
">首页</a> > <a href="<?php echo smarty_function_url(array('m'=>'tiny'),$_smarty_tpl);?>
">普工专区</a></div>
  <div class="once_banner_cont_b"><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/resume_banner.jpg" width="1200" height="213px"/> </div>
        <div class="resume_con">
          <div class="resume_con_tit yun_text_color"><b>普工简历</b>求职<b>新风尚</b>，让我们一起躁动起来</div>
          <div class="resume_con_fb"> <a href='javascript:void(0);' <?php if ($_smarty_tpl->tpl_vars['num']->value>0||$_smarty_tpl->tpl_vars['config']->value['sy_tiny']==0) {?>onclick="showfabu1()"<?php } else { ?>onclick="layer.msg('每个IP每天最多可发布<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_tiny'];?>
份普工简历！',2,8)"<?php }?> title="发布普工简历" class="res_con_fb" style="margin-left:80px;">发布普工简历</a> 
           </div>
        </div>

        
  </div>
 </div>
 
<div class="micro_resume_bg">
  <div class="micro_resume">
    <div class="micro_resume_cont">
   

      <div class="res_search">
       <div class="tiny_s_box">
          <form action="<?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_tinydir']) {?>index.php<?php } else {
echo smarty_function_url(array('m'=>'tiny'),$_smarty_tpl);
}?>"   method="get" onsubmit="return search_keyword(this,'请输入普工简历的关键字');">
            <div class="res_time ">
              <div class="res_time_con"> <span id="add_times"><?php if ($_GET['add_time']) {
echo $_smarty_tpl->tpl_vars['add_time']->value[$_GET['add_time']];
} else { ?>不限<?php }?></span> <i></i> </div>
              <?php if (!$_smarty_tpl->tpl_vars['config']->value['sy_tinydir']) {?>
              <input type="hidden" value="tiny" name="m" />
              <?php }?>
              <input type="hidden" name="add_time" id="add_time" value="<?php echo $_smarty_tpl->tpl_vars['getinfo']->value['val'];?>
" />
              <ul class="none" id="res_menu">
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['add_time']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <li onclick="selecttiny('<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
');"><a href="javascript:;"> <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a></li>
                <?php } ?>
              </ul>
            </div>
            <div class="res_key">
              <input id="key_word" class="res_key_txt" type="text" value="<?php if ($_GET['keyword']) {
echo $_GET['keyword'];
} else { ?>请输入普工简历的关键字<?php }?>"  name="keyword" onclick="if(this.value=='请输入普工简历的关键字'){this.value=''}" placeholder="请输入普工简历的关键字" onblur="if(this.value==''){this.value='请输入普工简历的关键字'}"/>
              <input type="submit"  value="搜索" id="search_button" class="res_key_btn yun_bg_color"/>
            </div>
          </form> 
          <div class="res_hot" > 热门搜索：
            <?php  $_smarty_tpl->tpl_vars['keylist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['keylist']->_loop = false;
global $config;eval('$paramer=array("limit"=>"8","type"=>"13","item"=>"\'keylist\'","nocache"=>"")
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
?> <a href="<?php echo $_smarty_tpl->tpl_vars['keylist']->value['url'];?>
"> <?php echo $_smarty_tpl->tpl_vars['keylist']->value['key_name'];?>
</a> <?php } ?> </div> 
        
           </div>            </div>

      <div class="decline">
       <?php  $_smarty_tpl->tpl_vars['wres'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wres']->_loop = false;
$wres = $wres; if (!is_array($wres) && !is_object($wres)) { settype($wres, 'array');}
foreach ($wres as $_smarty_tpl->tpl_vars['wres']->key => $_smarty_tpl->tpl_vars['wres']->value) {
$_smarty_tpl->tpl_vars['wres']->_loop = true;
?>
       
          <div class="dec_det">
            <div class="dec_det_con">    
              <div class="mini_tit"> <span class="mini_tit_h1"> <a href="<?php echo smarty_function_url(array('m'=>'tiny','c'=>'show','id'=>$_smarty_tpl->tpl_vars['wres']->value['id']),$_smarty_tpl);?>
" > <?php echo mb_substr($_smarty_tpl->tpl_vars['wres']->value['job'],0,30,'utf-8');?>
</a></span> <span class="mini_tit_time"> 更新于<?php if ($_smarty_tpl->tpl_vars['wres']->value['redtime']==1||$_smarty_tpl->tpl_vars['wres']->value['lastupdate']=='昨天') {?> <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['wres']->value['lastupdate'];?>
</span> <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['wres']->value['lastupdate'];?>

                <?php }?></span> </div>
              <div class="mini_det"> <?php echo $_smarty_tpl->tpl_vars['wres']->value['username'];?>
 <i>|</i><?php echo $_smarty_tpl->tpl_vars['wres']->value['sex'];?>
<i>|</i> <?php echo $_smarty_tpl->tpl_vars['wres']->value['exp_name'];?>
 <i>|</i> <?php if ($_smarty_tpl->tpl_vars['config']->value['user_wjl_link']==1&&$_smarty_tpl->tpl_vars['uid']->value<=0) {?> <span>登录查看更多信息<a href="javascript:void(0);" onclick="showlogin('');" class="tiny_login">登录</a></span> <?php } else { ?>
                <span class="tiny_tel"><?php echo $_smarty_tpl->tpl_vars['wres']->value['mobile'];?>
</span>
                <?php }?> </div>
              <div class="mini_con"><?php echo mb_substr($_smarty_tpl->tpl_vars['wres']->value['production'],0,100,'utf-8');?>
</div>
            </div>
        
          </a>
        </div>
        <?php } ?> </div>
      <div class="clear"></div>
      <?php if ($_smarty_tpl->tpl_vars['total']->value!=0) {?>
      <div class="pages"> <?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['total']->value==0) {?>
      <div class="onceseachno">
            <div class="onceseachno_left"> <img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/search-no.gif"/></div>
            <div class="onceseachno_content"> <strong>很抱歉，没有找到满足条件的简历</strong><br/>
          <span> 建议您：<br/>
          1、适当减少已选择的条件<br/>
          2、适当删减或更改搜索关键字<br/>
          </span> </div>
      </div>
      <?php }?> </div>
  </div>
</div>
<div class="none" id="fabufast1">
  <div >
    
    <form  method="post" action="<?php echo smarty_function_url(array('m'=>'tiny'),$_smarty_tpl);?>
" onSubmit="return check_resume_tiny()" target="supportiframe" class="layui-form">
      <ul class="micro_resume_release_list">
        <li><span class="once_fb_list_span"><font color="#FF3300">*</font> 姓名：</span>
          <input  type="text" value="" name="username" id="username" class="micro_resume_release_text"/>
        </li>
        <li><span class="once_fb_list_span"><font color="#FF3300">*</font>性别：</span> 
          <!--      yun_info_sex_cur 控制他的状态-->
           <input type="hidden" id="sex" name="sex" value="" />
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_data']->value['sex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
             <span class="yun_info_sex" id="sex<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
" onclick="checksex('<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
')"><i class="usericon_sex usericon_sex<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
"></i><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span> 
          <?php } ?>   
        </li>
        <li><span  class="once_fb_list_span"><font color="#FF3300">*</font> 联系手机：</span>
          <input type="text" name="mobile" id="mobile" value="" class="once_input_simple once_input_simple_w240" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </li>
        <li><span class="once_fb_list_span"><font color="#FF3300">*</font> 工作年限：</span>
        <div class="tiny_exp_text">
            <select id="expid" name="exp">
              <option value=''>请选择</option>
              <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
              <option value='<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
              <?php } ?>
            </select>
        </div>
       
        </li>
        <li><span class="once_fb_list_span"><font color="#FF3300">*</font> 想找什么工作？：</span>
          <input type="text" id="job" name="job" value="" class="once_input_simple once_input_simple_w240"/>
          <span class="once_fb_list_tip"> 如：服装厂操作工</span> </li>
        <li><span class="once_fb_list_span">自我介绍：</span>
          <textarea id="production" name="production" class="once_simplew_textarea"placeholder="请输入你擅长的技能，例如：电机熟练工，能吃苦耐劳"></textarea>
        </li>
        <li class="add"><span class="once_fb_list_span"><font color="#FF3300">*</font>设置密码：</span>
          <input type="password" name="password" id="password" value="" class="micro_resume_release_text" style='width:100px' onkeyup="this.value=this.value.replace(/^ +| +$/g,'')"/>
          <em style="line-height:35px; display:inline-block; margin-left:5px;">密码可用于刷新/修改/删除信息！</em> </li>
        <?php if (strpos($_smarty_tpl->tpl_vars['config']->value['code_web'],"店铺招聘")!==false) {?>
			

			<?php if ($_smarty_tpl->tpl_vars['config']->value['code_kind']==3) {?>	
		
            <li class="add"><span class="once_fb_list_span"><font color="#FF3300">*</font> 验证：</span>
            <div class="tiny_verification">
			<div id="popup-captcha" data-id='botton' data-type='click'></div>
			<input type='hidden' id="popup-submit">
           
            </div>
            </li>
			<?php } else { ?>
			
			<li class="add"><span class="once_fb_list_span"><font color="#FF3300">*</font> 验证码：</span>
			  <input type="text" id="authcode" name="authcode" class="micro_resume_release_text micro_resume_release_text2" maxlength="4"/>
			  <a><img id="vcodeimgs" onclick="checkCode('vcodeimgs');" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php"/></a> 
			</li>
		
			  <?php }?>
			 
		 <?php } else { ?>
			<input id="authcode" type="hidden" value="12345" maxlength="4" name="authcode"/>
        <?php }?>
		
        <li><span class="once_fb_list_span">&nbsp; </span>
          <input type="hidden" name="id" id="id" value=""/>
          <input class="uesr_submit once_fast_submit" type="submit" value="发布" id="botton" name="submit" />
        </li>
      </ul>
    </form>
  </div>
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" /><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/lazyload.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/fast.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/index.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/geetest/gt.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/geetest/pc.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<!--[if IE 6]>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
DD_belatedPNG.fix('.png');
<?php echo '</script'; ?>
>
<![endif]-->
<?php echo '<script'; ?>
 type="text/javascript">
function checksex(id){
	$('.yun_info_sex_cur').removeClass('yun_info_sex_cur');
	$("#sex"+id).addClass('yun_info_sex_cur');
	$("#sex").val(id);	
}
$(function(){
	$(".res_time").hover(function(){
		$(this).addClass("res_time_det");
		$(this).find("#res_menu").show();
		
	},function(){
		$(this).removeClass("res_time_det");
		$(this).find("#res_menu").hide();		
	});
});
function selecttiny(val,name){
	$("#add_time").val(val);	
	$('#add_times').html(name)
	$("#res_menu").hide();
}
function selects(id,type,name){
	$("#job_"+type).hide();
	$("#"+type).val(name);
	$("#"+type+"id").val(id);
} 
function check_exp(id){
	$("#"+id).show();
}
function selectexp(id,type,name){
	$("#"+type).val(name);
	$("#"+type+"id").val(id);
	$("#job_"+type).hide();
}

layui.use(['form'],function(){});
<?php echo '</script'; ?>
>
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" class="none"></iframe>
<div class="clear"></div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/login.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
