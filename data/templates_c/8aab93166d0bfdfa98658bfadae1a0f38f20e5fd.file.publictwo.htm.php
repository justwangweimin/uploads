<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-24 20:31:16
         compiled from "D:\xampp\htdocs\uploads\\app\template\wap\publictwo.htm" */ ?>
<?php /*%%SmartyHeaderCode:827241565a915b14ce4f88-21857274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8aab93166d0bfdfa98658bfadae1a0f38f20e5fd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\\\app\\template\\wap\\publictwo.htm',
      1 => 1517908182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '827241565a915b14ce4f88-21857274',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'job_index' => 0,
    'v' => 0,
    'job_name' => 0,
    'city_index' => 0,
    'city_name' => 0,
    'userdata' => 0,
    'userclass_name' => 0,
    'config_wapdomain' => 0,
    'industry_name' => 0,
    'uptime' => 0,
    'industry_index' => 0,
    'key' => 0,
    'comdata' => 0,
    'comclass_name' => 0,
    'partdata' => 0,
    'partclass_name' => 0,
    'subject_index' => 0,
    'subject_name' => 0,
    'subject_type_index' => 0,
    'subject_type_name' => 0,
    'ltdata' => 0,
    'ltclass_name' => 0,
    'lthy_index' => 0,
    'lthy_name' => 0,
    'ltjob_index' => 0,
    'ltjob_name' => 0,
    'lthy_type' => 0,
    'val' => 0,
    'ltjob_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a915b156f0c84_77306024',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a915b156f0c84_77306024')) {function content_5a915b156f0c84_77306024($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.searchurl.php';
if (!is_callable('smarty_function_url')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.url.php';
?><?php echo '<script'; ?>
>
	$(document).ready(function(){
		$("#resume").submit(function(e){
			var min = $("#minresume").val();
			var max = $("#maxresume").val();
			if(min && max && parseInt(max) < parseInt(min)){
				$("#minresume").val(max);
				$("#maxresume").val(min);
			}
		});
	});
	$(document).ready(function(){
		$("#job").submit(function(e){
			var min = $("#minjob").val();
			var max = $("#maxjob").val();
			if(min && max && parseInt(max) < parseInt(min)){
				$("#minjob").val(max);
				$("#maxjob").val(min);
			}
		});
	});
	$(document).ready(function(){
		$("#lietou").submit(function(e){
			var min = $("#minlt").val();
			var max = $("#maxlt").val();
			if(min && max && parseInt(max) < parseInt(min)){
				$("#minlt").val(max);
				$("#maxlt").val(min);
			}
		});
	});
<?php echo '</script'; ?>
>
<!-- Category职位类别 -->
<div class="Category-eject">
    <ul class="Category-w" id="jobone">
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <li class="qc<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" onclick="Categorytw('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
','jobone')"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
     <?php } ?> 
    </ul>
    <ul class="Category-t" id="jobone_son">                
    </ul>
    <ul class="Category-s" id="job_post">           
    </ul>
</div>
<!-- End Category -->

<!-- grade 城市类别-->
<div class="grade-eject">
    <ul class="grade-w" id="provinceid">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <li class="qc<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" onclick="grade1('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
','provinceid')"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
        <?php } ?> 
    </ul>
    <ul class="grade-t" id="cityid"> 
          
    </ul>
      <ul class="grade-s" id="three_cityid">
          
    </ul>
  
</div>
<!-- End schoolcity -->
<!-- schoolcity 城市类别-->
<div class="schoolcity-eject">
    <ul class="schoolcity-w" id="provinceid">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <li class="qc<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" onclick="schoolcity1('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
','provinceid')"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
        <?php } ?> 
    </ul>
    <ul class="schoolcity-t" id="cityidid">  
    </ul>
</div>
<!-- End grade -->

 <!-- Sortexp 找人才工作经验-->
 <div class="Sortexp-eject Sortexp-height">
    <ul class="Sortexp-Sortexp" id="Sortexp-Sortexp">   
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <li><a <?php if ($_GET['c']=="ltresume") {?>href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'ltresume','exp'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'exp'),$_smarty_tpl);?>
"<?php } else { ?>href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'resume','exp'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'exp'),$_smarty_tpl);?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a></li>
        <?php } ?>
    </ul>
</div>
<!-- End Sortexp -->

<!-- gengduos 找人才更多-->
 <div class="Gengduos-eject">
    <form action="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/index.php" method="get" id="resume">
	<input type="hidden" name="c" value="<?php if ($_GET['c']) {
echo $_GET['c'];
} else { ?>resume<?php }?>"/>
    <ul class="Gengduos-w" id="Gengduos">   
       <li tab_name="Gengduohyt"><a href="javascript:void(0);">行业类别<em id="gdshy">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_GET['hy']];?>
</em></a></li>
       <li tab_name="Gengduoedut"><a href="javascript:void(0);">学历要求<em id="gdsedu">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_GET['edu']];?>
</em></a></li>
       <li tab_name="Gengduoreportt"><a href="javascript:void(0);">到岗时间<em id="gdsreport">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_GET['report']];?>
</em></a></li>
       <li tab_name="Gengduouptimet"><a href="javascript:void(0);">更新日期<em id="gdsuptime">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['uptime']->value[$_GET['uptime']];?>
</em></a></li>
       <li tab_name="Gengduotagt"><a href="javascript:void(0);">个人标签<em id="gdstag">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_GET['tag']];?>
</em></a></li>
	   <li>薪资待遇：
       		<input type="text" size="5" name="minsalary" id="minresume" placeholder="1999" value="<?php echo $_GET['minsalary'];?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="salary_text">
       		<span> - </span>
       		<input type="text" size="5" name="maxsalary" id="maxresume" placeholder="2999" value="<?php echo $_GET['maxsalary'];?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="salary_text">
       </li> 
      <li class="search_bth_box">
			<input type="hidden" name="hy" id="gdshyi" value="<?php echo $_GET['hy'];?>
"/>
			<input type="hidden" name="edu" id="gdsedui" value="<?php echo $_GET['edu'];?>
"/>
			<input type="hidden" name="report" id="gdsreporti" value="<?php echo $_GET['report'];?>
"/>
			<input type="hidden" name="uptime" id="gdsuptimei" value="<?php echo $_GET['uptime'];?>
"/>
			<input type="hidden" name="tag" id="gdstagi" value="<?php echo $_GET['tag'];?>
"/>
       		<input type="submit" value="确定" class="search_bth"><input type="button" onclick="lihide('Gengduos-eject')" value="取消" class="search_bthqx">
       </li> 	 
    </ul>
	</form>
     <ul class="Gengduos-t" id="Gengduohyt" style="display:block;">
      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>				
        <li tab_name="gdshy" data="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
 </li>
       <?php } ?>
    </ul>
	<ul class="Gengduos-t" id="Gengduoedut" style="display:none;">
     <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>			
        <li tab_name="gdsedu" data="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
       <?php } ?>
    </ul>
     <ul class="Gengduos-t" id="Gengduoreportt" style="display:none;">
     <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>			
        <li tab_name="gdsreport" data="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
       <?php } ?>
    </ul>
     <ul class="Gengduos-t" id="Gengduouptimet" style="display:none;">
     <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['uptime']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>		
        <li tab_name="gdsuptime" data="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
       <?php } ?>
    </ul>
     <ul class="Gengduos-t" id="Gengduotagt" style="display:none;">
     <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_tag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>			
        <li tab_name="gdstag" data="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
       <?php } ?>
    </ul>    	
</div>
<!-- End gengduos -->

<!-- Sort 找工作工资经验-->
 <div class="Sort-eject Sort-height">
    <ul class="Sort-Sort" id="Sort-Sort">   
       <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_exp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <li><a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'job','exp'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'exp'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a></li>
        <?php } ?>
    </ul>
</div>
<!-- End Sort -->


<!-- Gengduoj 找工作更多-->
 <div class="Gengduoj-eject">
   <form action="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/index.php" method="get" id="job">
    <input type="hidden" name="c" value="job"/>
    <ul class="Gengduoj-w" id="Gengduoj">   
    <div class="job_list_chlose ">
    <span <?php if ($_GET['urgent']==''&&$_GET['rec']=='') {?>class="job_list_chlose_a "<?php }?> ><a  href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job'),$_smarty_tpl);?>
" ><i class="job_list_chlose_c">所有职位</i></a></span>
          <span <?php if ($_GET['urgent']) {?>class="job_list_chlose_a "<?php }?> >
          <a class="search_icon" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','urgent'=>1),$_smarty_tpl);?>
"><i class="job_list_chlose_c">紧急职位</i></a>
     </span>
          <span <?php if ($_GET['rec']) {?>class="job_list_chlose_a "<?php }?> >
          <a class="search_icon" href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'job','rec'=>1),$_smarty_tpl);
$_smarty_tpl->createLocalArrayVariable('v', null, 0);
$_smarty_tpl->tpl_vars['v']->value['rec'] = 1;?>"><i class="job_list_chlose_c">推荐职位</i></a>
          </span>
		<input type="hidden" value="1" id="search"/>
		</div>

       <li tab_name="Gengduohy"><a href="javascript:void(0);">行业类别<em id="gdjhy">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_GET['hy']];?>
</em></a></li>
       <li tab_name="Gengduopr"><a href="javascript:void(0);">公司性质<em id="gdjpr">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_GET['pr']];?>
</em></a></li>
       <li tab_name="Gengduonum"><a href="javascript:void(0);">公司规模<em id="gdjnum">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_GET['num']];?>
</em></a></li>
       <li tab_name="Gengduoedu"><a href="javascript:void(0);">学历要求<em id="gdjedu">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_GET['edu']];?>
</em></a></li>    
       <li tab_name="Gengduouptime"><a href="javascript:void(0);">更新日期<em id="gdjuptime">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['uptime']->value[$_GET['uptime']];?>
</em></a></li>      
       <li>薪资待遇：
       		<input type="text" size="5" name="minsalary" id="minjob" placeholder="1999" value="<?php echo $_GET['minsalary'];?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="salary_text">
       		<span> - </span>
       		<input type="text" size="5" name="maxsalary" id="maxjob" placeholder="2999" value="<?php echo $_GET['maxsalary'];?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="salary_text">
       </li> 
       <li class="search_bth_box">
			<input type="hidden" name="hy" id="gdjhyi" value="<?php echo $_GET['hy'];?>
"/>
			<input type="hidden" name="pr" id="gdjpri" value="<?php echo $_GET['pr'];?>
"/>
			<input type="hidden" name="num" id="gdjnumi" value="<?php echo $_GET['num'];?>
"/>
			<input type="hidden" name="edu" id="gdjedui" value="<?php echo $_GET['edu'];?>
"/>
			<input type="hidden" name="uptime" id="gdjuptimei" value="<?php echo $_GET['uptime'];?>
"/>
       		<input type="submit" value="确定" class="search_bth"><input type="button" onclick="lihide('Gengduoj-eject')" value="取消" class="search_bthqx">
       </li> 	   
    </ul>
	</form>
     <ul class="Gengduoj-t" id="Gengduohy" style="display:block;">
     <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>				
        <li tab_name="gdjhy" data="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
       <?php } ?>
    </ul>
    <ul class="Gengduoj-t" id="Gengduopr" style="display:none;">
     <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_pr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>				
        <li tab_name="gdjpr" data="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
       <?php } ?>
    </ul>
      <ul class="Gengduoj-t" id="Gengduonum" style="display:none;">
     <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_mun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>			
        <li tab_name="gdjnum" data="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
       <?php } ?>
    </ul>
     <ul class="Gengduoj-t" id="Gengduoedu" style="display:none;">
     <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>			
        <li tab_name="gdjedu" data="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
       <?php } ?>
    </ul>
     <ul class="Gengduoj-t" id="Gengduouptime" style="display:none;">
     <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['uptime']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>		
        <li tab_name="gdjuptime" data="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
       <?php } ?>
    </ul> 
</div>
<!-- End Gengduoj -->

<!-- Sorthy 行业弹出框-->
    <div class="Sorthy-eject Sorthy-height">
    <ul class="Sorthy-Sorthy" id="Sorthy-Sorthy">   
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
    <li><a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'company','hy'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'hy'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a></li>
    <?php } ?>
    </ul>
    </div>
    <!-- End Sorthy -->
    
   
     <!-- Sortpr 企业性质弹出框-->
    <div class="Sortpr-eject Sortpr-height">
    <ul class="Sortpr-Sortpr" id="Sortpr-Sortpr">   
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_pr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
    <li><a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'company','pr'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'pr'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a></li>
    <?php } ?>
    </ul>
    </div>
    <!-- End Sortpr -->
   
     <!-- Sortmun 企业规模弹出框-->
    <div class="Sortmun-eject Sortmun-height">
    <ul class="Sortmun-Sortmun" id="Sortmun-Sortmun">   
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_mun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
    <li><a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'company','mun'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'mun'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a></li>
    <?php } ?>
    </ul>
    </div>
    <!-- End Sortmun -->
    
    <!-- Sorttype 兼职类型弹出框-->
    <div class="Sorttype-eject Sorttype-height">
    <ul class="Sorttype-Sorttype" id="Sorttype-Sorttype">   
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['partdata']->value['part_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
    <li><a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'part','type'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'type'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['partclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a></li>
    <?php } ?>
    </ul>
    </div>
    <!-- End Sorttype -->    
    <!-- Sortcycle 结算周期弹出框-->
    <div class="Sortcycle-eject Sortcycle-height">
    <ul class="Sortcycle-Sortcycle" id="Sortcycle-Sortcycle">   
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['partdata']->value['part_billing_cycle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
    <li><a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'part','cycle'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'cycle'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['partclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a></li>
    <?php } ?>
    </ul>
    </div>
    <!-- End Sortcycle -->
    
    
    <!-- Sortfl 课程分类弹出框-->
    <div class="Sortfl-eject Sortfl-height">
    <ul class="Sortfl-Sortfl" id="Sortfl-Sortfl">   
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subject_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
    <li><a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'train','nid'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'nid'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['subject_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a></li>
    <?php } ?>
    </ul>
    </div>
    <!-- End Sortfl -->
    
    <!-- Sortsj 上课时间弹出框-->
    <div class="Sortsj-eject Sortsj-height">
    <ul class="Sortsj-Sortsj" id="Sortsj-Sortsj">   
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subject_type_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	<li><a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'train','type'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'type'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['subject_type_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a></li>
    <?php } ?>
    </ul>
    </div>
    <!-- End Sortsj -->
    
     <!-- Sortly 领域弹出框-->
    <div class="Sortly-eject Sortly-height">
    <ul class="Sortly-Sortly" id="Sortly-Sortly">   
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subject_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
    <li><a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'train','a'=>'teacher','sid'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'sid,a'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['subject_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a></li>
    <?php } ?>
    </ul>
    </div>
    <!-- End Sortly -->
    
    <!-- Sorthys 行业弹出框-->
    <div class="Sorthys-eject Sorthys-height">
    <ul class="Sorthys-Sorthys" id="Sorthys-Sorthys">   
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
     <li><a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'train','a'=>'teacher','hy'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'hy,a'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a></li>
    <?php } ?>
    </ul>
    </div>
    <!-- End Sorthys -->

    <!-- Sortprs 性质弹出框-->
    <div class="Sortprs-eject Sortprs-height">
    <ul class="Sortprs-Sortprs" id="Sortprs-Sortprs">   
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_pr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	 <li><a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'train','a'=>'agency','pr'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'pr'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a></li>
    <?php } ?>
    </ul>
    </div>
    <!-- End Sortprs -->
     <!-- Sortfx 方向弹出框-->
    <div class="Sortfx-eject Sortfx-height">
    <ul class="Sortfx-Sortfx" id="Sortfx-Sortfx">   
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subject_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
    <li><a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'train','a'=>'agency','sid'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'sid'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['subject_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a></li>
    <?php } ?>
    </ul>
    </div>
    <!-- End Sortfx -->
     <!-- Sortmuns 规模弹出框-->
    <div class="Sortmuns-eject Sortmuns-height">
    <ul class="Sortmuns-Sortmuns" id="Sortmuns-Sortmuns">   
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_mun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
    <li><a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'train','a'=>'agency','mun'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'mun'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a></li>
    <?php } ?>
    </ul>
    </div>
    <!-- End Sortmuns -->
    
    <!-- Sortsalary 猎头年薪-->
 <div class="Sortsalary-eject Sortsalary-height">
    <ul class="Sortsalary-Sortsalary" id="Sortsalary-Sortsalary">   
       <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ltdata']->value['lt_exp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <li><a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'ltjob','exp'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'exp'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['ltclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a></li>
        <?php } ?>
    </ul>
</div>
<!-- End Sortsalary -->
    <!-- wap猎头前台行业-->
 <div class="lthy-eject">
    <ul class="lthy-w" id="lthyone">   
       <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lthy_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <li class="qc<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" onclick="lthyw('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['lthy_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
','lthyone')"><?php echo $_smarty_tpl->tpl_vars['lthy_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
        <?php } ?>
    </ul>
    <ul class="lthy-t" id="lthytwo">                
    </ul>
</div>
<!-- End  -->
    
    
    <!-- wap猎头前台职位类别 -->
<div class="lietou-eject">
    <ul class="lietou-w" id="jobone">
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ltjob_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <li class="qc<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" onclick="lietouw('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['ltjob_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
','jobone')"><?php echo $_smarty_tpl->tpl_vars['ltjob_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
     <?php } ?> 
    </ul>
    <ul class="lietou-t" id="jobtwo">                
    </ul>
    
</div>
<!-- End lietou -->
 <!-- gengduot 猎头更多-->
 <div class="Gengduot-eject">
    <form action="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/index.php" method="get" id="lietou">
	<input type="hidden" name="c" value="ltjob"/>
    <ul class="Gengduot-w" id="Gengduot">          
       <li tab_name="Gengduoprs"><a href="javascript:void(0);">公司性质<em id="gdtpr">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_GET['pr']];?>
</em></a></li>
       <li tab_name="Gengduohys"><a href="javascript:void(0);">所属行业<em id="gdthy">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_GET['hy']];?>
</em></a></li>
       <li tab_name="Gengduonums"><a href="javascript:void(0);">公司规模<em id="gdtnum">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_GET['num']];?>
</em></a></li>
       <li tab_name="Gengduoedus"><a href="javascript:void(0);">学历要求<em id="gdtedu">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['ltclass_name']->value[$_GET['edu']];?>
</em></a></li>  
       <li tab_name="Gengduouptimes"><a href="javascript:void(0);">更新日期<em id="gdtuptime">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['uptime']->value[$_GET['uptime']];?>
</em></a></li>
       <li>年薪待遇：
       		<input type="text" size="5" name="minsalary" id="minlt" value="<?php echo $_GET['minsalary'];?>
" placeholder="10" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="salary_text">
       		<span> - </span>
       		<input type="text" size="5" name="maxsalary" id="maxlt" value="<?php echo $_GET['maxsalary'];?>
" placeholder="30" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="salary_text">
       		<span> 万 </span>
       </li>  
      <li class="search_bth_box">
	        <input type="hidden" name="pr" id="gdtpri" value="<?php echo $_GET['pr'];?>
"/>
			<input type="hidden" name="hy" id="gdthyi" value="<?php echo $_GET['hy'];?>
"/>
			<input type="hidden" name="num" id="gdtnumi" value="<?php echo $_GET['num'];?>
"/>
			<input type="hidden" name="edu" id="gdtedui" value="<?php echo $_GET['edu'];?>
"/>
			<input type="hidden" name="uptime" id="gdtuptimei" value="<?php echo $_GET['uptime'];?>
"/>
       		<input type="submit" value="确定" class="search_bth"><input type="button" onclick="lihide('Gengduot-eject')" value="取消" class="search_bthqx">
       </li> 	   
    </ul>
    </form> 
    <ul class="Gengduot-t" id="Gengduoprs" style="display:block;">
     <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_pr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>				
        <li tab_name="gdtpr" data="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><a><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a> </li>
       <?php } ?>
    </ul>
    <ul class="Gengduot-t" id="Gengduohys" style="display:none;">
     <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>				
        <li tab_name="gdthy" data="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><a><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a> </li>
       <?php } ?>
    </ul>
      <ul class="Gengduot-t" id="Gengduonums" style="display:none;">
     <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_mun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>			
        <li tab_name="gdtnum" data="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><a><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a> </li>
       <?php } ?>
    </ul>
     <ul class="Gengduot-t" id="Gengduoedus" style="display:none;">
     <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ltdata']->value['lt_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>			
        <li tab_name="gdtedu" data="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><a><?php echo $_smarty_tpl->tpl_vars['ltclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a> </li>
       <?php } ?>
    </ul>
     <ul class="Gengduot-t" id="Gengduouptimes" style="display:none;">
     <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['uptime']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>		
        <li tab_name="gdtuptime" data="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><a><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a> </li>
       <?php } ?>
    </ul>    
    
</div>
<!-- End gengduot -->


<!-- wap猎头会员中心行业类别 -->
<div class="lietouhy-eject" id="lthylist">
<div class="lt_publictit"><span class="lt_publictit_name">选择擅长行业</span>
  <div class="lt_publictit_cz">
        <button  onclick="ltrealy('lthy');" class="lt_publictit_cz_bth">确定</button>
        <button  onclick="Closes('lthy')" class="lt_publictit_cz_bth lt_publictit_cz_bth_gb">关闭</button>
        <button  onclick="ltremoves('lthy');" class="lt_publictit_cz_bth lt_publictit_cz_bth_qc">清除</button> 
		<input type="hidden" id="checknum" value="">
        </div>	</div>
    <ul class="lietouhy-w">	  
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lthy_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <li class="qc<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" onclick="lietouhy('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
')"><?php echo $_smarty_tpl->tpl_vars['lthy_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
        <?php } ?> 
      
    </ul>
    <ul class="lietouhy-t">
	    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lthy_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
			<li class="none hytwo two<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><input id="r<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" data="<?php echo $_smarty_tpl->tpl_vars['lthy_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" name="lthyclass" onclick="ltchecked_input('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','lthy');"><label for="r<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
">全部</label></li>
			<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lthy_type']->value[$_smarty_tpl->tpl_vars['v']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
			<li class="none hytwo two<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><input id="r<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" class="one<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" data="<?php echo $_smarty_tpl->tpl_vars['lthy_name']->value[$_smarty_tpl->tpl_vars['val']->value];?>
" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" class="one<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" name="lthyclassone" onclick="ltchecked_input('<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
','lthy');"><label for="r<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lthy_name']->value[$_smarty_tpl->tpl_vars['val']->value];?>
</label></li>
			<?php } ?>
        <?php } ?> 
	</ul>   
</div>
<!-- End lietou -->

 <!-- wap猎头会员中心职位类别 -->
<div class="lietoujobs-eject" id="ltjoblist">
<div class="lt_publictit"><span class="lt_publictit_name">选择擅长职位</span>
  <div class="lt_publictit_cz">
       <button onclick="ltrealy('ltjob');" class="lt_publictit_cz_bth">确定</button>
     <button onclick="Closes('ltjob');" class="lt_publictit_cz_bth lt_publictit_cz_bth_gb">关闭</button>
     <button onclick="ltremoves('ltjob');" class="lt_publictit_cz_bth lt_publictit_cz_bth_qc">清除</button> 
     </div>
  </div>
    <ul class="lietoujobs-w">
     <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ltjob_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
     <li class="qc<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" onclick="lietoujobs('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
')"><?php echo $_smarty_tpl->tpl_vars['ltjob_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
     <?php } ?> 

    </ul>
    <ul class="lietoujobs-t">
	    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ltjob_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
			<li class="none jobtwo jtwo<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><input id="j<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" data="<?php echo $_smarty_tpl->tpl_vars['ltjob_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" name="ltjobclass" onclick="ltchecked_input('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','ltjob');"><label for="j<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
">全部</label></li>
			<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ltjob_type']->value[$_smarty_tpl->tpl_vars['v']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
			<li class="none jobtwo jtwo<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><input id="j<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" class="jobone<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" data="<?php echo $_smarty_tpl->tpl_vars['ltjob_name']->value[$_smarty_tpl->tpl_vars['val']->value];?>
" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" class="jobone<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" name="ltjobclassone" onclick="ltchecked_input('<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
','ltjob');"><label for="j<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ltjob_name']->value[$_smarty_tpl->tpl_vars['val']->value];?>
</label></li>
			<?php } ?>
        <?php } ?> 
	</ul>  
</div>
<!-- End lietou --><?php }} ?>
