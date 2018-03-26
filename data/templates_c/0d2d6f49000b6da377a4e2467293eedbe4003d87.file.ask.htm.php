<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 15:41:20
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\ask.htm" */ ?>
<?php /*%%SmartyHeaderCode:8155004805ab0bb20bc8fc3-39421346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d2d6f49000b6da377a4e2467293eedbe4003d87' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\ask.htm',
      1 => 1517640119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8155004805ab0bb20bc8fc3-39421346',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'qindex' => 0,
    'config' => 0,
    'uid' => 0,
    'list' => 0,
    'my_atten' => 0,
    'pagenav' => 0,
    'wap_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0bb20d66758_48750867',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0bb20d66758_48750867')) {function content_5ab0bb20d66758_48750867($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_function_ad')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.ad.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php global $db,$db_config,$config;eval('$paramer=array("limit"=>"6","son"=>"1","item"=>"\'qindex\'","nocache"=>"")
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
<?php global $db,$db_config,$config;eval('$paramer=array("item"=>"\'list\'","name"=>"\'list\'","keyword"=>"\'auto.keyword\'","ispage"=>"1","t_len"=>"20","limit"=>"10","nocache"=>"")
;');$list=array();
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
         
        if($paramer[state]){
           $where=1;
        }else{
           $where = "`state`=1 ";
        }
		
		
		if($_COOKIE['uid']&&$paramer['friend']){
			$atn=$db->select_all("atn","`uid`='".$_COOKIE['uid']."'","`sc_uid`");
			$friend=array();
			foreach($atn as $val){
				$friend[]=$val['sc_uid'];
			}
			$where.=" and `id` in(".@implode(',',$friend).")";
			unset($friend);
		} 
		if($paramer[hot]){
			$time=strtotime("-".(int)$paramer[hot]." day");
			$where.=" and `add_time`>'".$time."'";
		}
		if($paramer[noid]){
			$where.=" and `id`<>'".$paramer[noid]."'";
		}
		if($paramer[keyword]){
			$where.=" and `title` like '%".$paramer['keyword']."%'";
		}
		if($paramer[nonum]){
			$where.=" and `answer_num`='0'";
		}
		if($paramer[yesnum]){
			$where.=" and `answer_num`>0";
		}
		
		if($paramer[order]){ 
			if($paramer[order]=="addtime"){
				$paramer[order]="add_time";
			}
			if($paramer[order]=="answernum"){
				$paramer[order]="answer_num";
			}
			$order = " ORDER BY `".$paramer[order]."`  desc";
		}else{
			$order = " ORDER BY `add_time` desc";
		}
		if($paramer[cid]){
			$where .=" and `cid`='".$paramer[cid]."'";
		}
		if($paramer[uid]){
			$where .=" and `uid`='".$paramer[uid]."'";
		}
		if($paramer[is_recom]){
			$where .=" and `is_recom`='1'";
		}
		
		
		if($paramer[limit]){
			$limit=" limit ".$paramer[limit];
		}
		
		if($paramer['ispage']){
			$limit = PageNav($paramer,$_GET,"question",$where,$Purl,"","6",$_smarty_tpl);
		}
		$list = $db->select_all("question",$where.$order.$limit);  
		if(count($list)){
			foreach($list as $key=>$val){
				if(intval($paramer[t_len])>0){
					$len = intval($paramer[t_len]);
					$list[$key][title]  = mb_substr($val[title],0,$len,"utf-8");
				}
				if($paramer['keyword']){ 
					$list[$key][title] =str_replace($paramer[keyword],"<font color='#FF6600' >".$paramer[keyword]."</font>",$list[$key][title]);
				}
				if($val['pic']&&file_exists(str_replace($config['sy_weburl'],APP_PATH,".".$val['pic']))){
					$list[$key]['pic']=$config["sy_weburl"]."/".$val['pic'];
				}else{
					$list[$key]['pic']=$config["sy_weburl"]."/".$config['sy_friend_icon'];
				}
				
				$list[$key][url] = Url("ask",array("c"=>"content","id"=>$val[id]));
				$list[$key][userurl] = Url("ask",array("c"=>"friend","a"=>"myquestion","uid"=>$val[uid]));
				if(in_array($val[uid],$ListId)==false){$ListId[] =  $val[uid];} 
				$Qclass[]=$val[cid];
			}
			
			$uids=@implode(",",$ListId);
			$_GET["total"]=1;  
			foreach($list as $r_k=>$r_v){
				if($r_v['uid']==$_COOKIE['uid']){
					$list[$r_k]['isatn']='2';
				} 
			}	
		} ?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
  <!--搜索-->
  <div class="ask_header_bg">
    <div class="ask_search_box">
      <div class="ask_search_ct">
        <form name="myform" method="get" action="index.php">
          <input type="hidden" name="c" value="ask"/>          
          <input type="hidden" name="a" value="list"/>          
          <input type="text" value="<?php echo $_GET['keyword'];?>
" name="keyword" id="keyword" class="ask_search_text" placeholder="请输入问题关键字">
          <input type="submit" value="" class="ask_search_bth">
                 <i class="ask_btn_icon"></i>
        </form>
        </div>
    </div>
  </div>
  <!--msg-->
  <div class="ask_msg">
    <ul class="ask_msg_up">
      <?php  $_smarty_tpl->tpl_vars['qindex'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['qindex']->_loop = false;
$qindex = $qindex; if (!is_array($qindex) && !is_object($qindex)) { settype($qindex, 'array');}
foreach ($qindex as $_smarty_tpl->tpl_vars['qindex']->key => $_smarty_tpl->tpl_vars['qindex']->value) {
$_smarty_tpl->tpl_vars['qindex']->_loop = true;
?>
      <li> <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'topic','pid'=>'`$qindex.id`'),$_smarty_tpl);?>
">
        <h3><?php echo $_smarty_tpl->tpl_vars['qindex']->value['name'];?>
</h3>
        <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['qindex']->value['pic'];?>
" /></a></li>
      <?php } ?>
    </ul>
  </div>
  <!--nav-->
<div class="ask_nav_bg" style="border-bottom:1px solid #ccc;margin-top:10px;">
    <div class="ask_nav_ht fl"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'topic'),$_smarty_tpl);?>
">话题</a></div>
    <div class="ask_nav_rd fl"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'hotweek'),$_smarty_tpl);?>
">一周热点</a></div>
</div>
<div class="ask_nav_bg">
    <div class="ask_nav_ht fl"><a href="<?php if ($_smarty_tpl->tpl_vars['uid']->value) {
echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'myquestion','uid'=>$_smarty_tpl->tpl_vars['uid']->value),$_smarty_tpl);
} else {
echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);
}?>">我的主页</a></div>
    <div class="ask_nav_rd fl"><a href="<?php if ($_smarty_tpl->tpl_vars['uid']->value) {
echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'addquestion'),$_smarty_tpl);
} else {
echo smarty_function_url(array('m'=>'wap','c'=>'login'),$_smarty_tpl);
}?>">我要提问</a></div>
</div>
  <div class="ask_banner"><?php echo smarty_function_ad(array('cid'=>69,'id'=>253),$_smarty_tpl);?>
</div>
  <!--banner-->
<div class="ask_ct" id="fontshow">
    <div class="ask_ct_top" id="answer">
      <div class="ask_ct_top_icon"></div>
      <div class="ask_ct_top_ft" >最新问题</div>
      <div class="ask_ct_top_rt"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'list'),$_smarty_tpl);?>
">更多 &gt;&gt;</a></div>
    </div>
 
    <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
$list = $list; if (!is_array($list) && !is_object($list)) { settype($list, 'array');}
foreach ($list as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
    <div class="ask_ct_list" >
      <div class="ask_ct_list_tit">
        <div class="ask_ct_list_tit_ft"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'content','id'=>'`$list.id`'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a></div>
        <?php if ($_smarty_tpl->tpl_vars['list']->value['isatn']!='2') {?>
        <div class="ask_ct_list_tit_rt">
          <?php if (in_array($_smarty_tpl->tpl_vars['list']->value['id'],$_smarty_tpl->tpl_vars['my_atten']->value)) {?> <a href="javascript:void(0);"  onclick="attention('<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
','1','<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'attention'),$_smarty_tpl);?>
');" class="watch_qxgz">取消关注</a> <?php } else { ?>
          <?php if ($_smarty_tpl->tpl_vars['uid']->value) {?> <a href="javascript:void(0);" onclick="attention('<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
','1','<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'attention'),$_smarty_tpl);?>
');" class="watch_gz png" title="关注">+ 关注</a> <?php } else { ?> <a href="javascript:void(0);" onclick="showlogins('1');" class="watch_gz png" title="关注">关注</a> <?php }?> 
          <?php }?> 
          </div>
          <?php }?>
      </div>
      <div class="ask_ct_list_peo">
        <dl>
          <dt><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['pic'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_friend_icon'];?>
',2);" /> </dt>
          <dd class="ask_i_name"><?php echo mb_substr(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['list']->value['content']),0,36,'utf-8');?>
&nbsp;</dd>
          <dd><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'ask','a'=>'myquestion','uid'=>'`$list.uid`'),$_smarty_tpl);?>
"><i><?php echo mb_substr($_smarty_tpl->tpl_vars['list']->value['nickname'],0,8,'utf-8');?>
</i></a>
           发起了话题</dd>
          <dd class="ask_ct_list_peo_js"><?php echo $_smarty_tpl->tpl_vars['list']->value['atnnum'];?>
 人关注 · <?php echo $_smarty_tpl->tpl_vars['list']->value['answer_num'];?>
 个回答 · <?php echo $_smarty_tpl->tpl_vars['list']->value['visit'];?>
次浏览</dd>
          <dd><em><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['add_time'],"%Y-%m-%d %H:%M");?>
</em></dd>
        </dl>
      </div>
    </div>
    <?php }
if (!$_smarty_tpl->tpl_vars['list']->_loop) {
?> 
     <div class="wap_notip">暂无问题</div>
    <?php } ?> 
    <div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div></div>
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
