<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-07 16:01:58
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\spe_index.htm" */ ?>
<?php /*%%SmartyHeaderCode:1112306685a9f9c76c0c371-30512881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcf148d4a5213443bbf817b1bd124882ed013465' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\spe_index.htm',
      1 => 1517392231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1112306685a9f9c76c0c371-30512881',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a9f9c76c9ed03_46570758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9f9c76c9ed03_46570758')) {function content_5a9f9c76c9ed03_46570758($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><?php global $db,$db_config,$config;eval('$paramer=array("limit"=>"10","item"=>"\'row\'","nocache"=>"")
;');$row=array();
		//处理传入参数，并且构造分页参数
		$ParamerArr = GetSmarty($paramer,$_GET);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where = "display='1' ";
		
		if($paramer['ctime']>0){
			$time=time()-$paramer['ctime']*86400;
			$where.=" and `ctime`>".$time;
		}
		if($paramer['delid']){
			$where.=" AND `id`<>'".$paramer['delid']."'";
		}
		
		//查询条数
		if($paramer[limit]){
			$limit=" LIMIT ".$paramer[limit];
		}else{
			$limit=" LIMIT 20";
		}
		//自定义查询条件，默认取代上面任何参数直接使用该语句
		if($paramer[where]){
			$where = $paramer[where];
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"special",$where,$Purl,'','0',$_smarty_tpl);
		}
		//排序字段默认为更新时间
		if($paramer['order']){
			$order = " ORDER BY `".str_replace("'","",$paramer[order])."`";
		}else{
			$order = " ORDER BY sort ";
		}
		//排序规则 默认为倒序
		if($paramer['sort']){
			$sort = $paramer['sort'];
		}else{
			$sort = " DESC";
		}
		$where.=$order.$sort.$limit;
		$row=$db->select_all("special",$where);
		if(is_array($row)){
			foreach($row as $key=>$value){
				$row[$key]['url'] = Url("special",array("c"=>"show","id"=>$value[id]));
			}
		} ?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="special_indexbox">
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
$row = $row; if (!is_array($row) && !is_object($row)) { settype($row, 'array');}
foreach ($row as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<div class="pic-txt">
<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'special','a'=>'show','id'=>'`$row.id`'),$_smarty_tpl);?>
">
<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
"/> </a>
<div class="txt">
<div class="tit"><a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'special','a'=>'show','id'=>'`$row.id`'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></div>
<div class="special_box_info">
<span class="special_box_time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['etime'],'%Y-%m-%d');?>
</span>

</div>
</div>
</div>
 <?php }
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>
<div class="wap_member_no">抱歉，还没有专题招聘的相关信息</div>
 <?php } ?>
 </div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
