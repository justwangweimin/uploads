<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 15:44:40
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\member\com\jobadd.htm" */ ?>
<?php /*%%SmartyHeaderCode:9406357445ab0bbe83e3f42-38927498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c532792778d4510f47a953c7c5ce2e5555cc138d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\member\\com\\jobadd.htm',
      1 => 1517915494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9406357445ab0bbe83e3f42-38927498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wap_style' => 0,
    'config' => 0,
    'config_wapdomain' => 0,
    'row' => 0,
    'job_index' => 0,
    'v' => 0,
    'job_name' => 0,
    'job_type' => 0,
    'city_index' => 0,
    'city_name' => 0,
    'city_type' => 0,
    'company' => 0,
    'job_link' => 0,
    'industry_name' => 0,
    'industry_index' => 0,
    'comclass_name' => 0,
    'comdata' => 0,
    'arr_data1' => 0,
    'arr_data' => 0,
    'j' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0bbe88fe502_29634084',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0bbe88fe502_29634084')) {function content_5ab0bbe88fe502_29634084($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/cheader.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
  
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/jobadd.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/part.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>  
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/ueditor/ueditor.config.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/ueditor/ueditor.all.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
> 
 <?php echo '<script'; ?>
 type="text/javascript">
 var weburl='<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
';
var ue = UE.getEditor('description',{
	toolbars: false,elementPathEnabled:false,wordCount:false,autoHeightEnabled:false 
}); 
function change_salary_type(){
	if($("#salary_type").attr('checked')=='checked'){
		$("#minsalary").attr("disabled","disabled");
		$("#maxsalary").attr("disabled","disabled");
		$("#minsalary").val(0);$("#maxsalary").val(0);
	}else{
		$("#minsalary").removeAttr("disabled","disabled");
		$("#maxsalary").removeAttr("disabled","disabled");
		$("#minsalary").val('<?php echo $_smarty_tpl->tpl_vars['row']->value['minsalary'];?>
');
		$("#maxsalary").val('<?php echo $_smarty_tpl->tpl_vars['row']->value['maxsalary'];?>
');
	}
}
<?php echo '</script'; ?>
>
<section class="wap_member">
  <div class="wap_member_comp_h1" style="position:relative"><span>新增职位</span>
  <em class="wap_member_comp_em">以下<font color="#ff0000">*</font> 号为必填项</em></div>
  
  <div class="yun_wap_addresume_box">
    <form action="" method="post" onsubmit="return checkfrom();">
      <div class="yun_wap_addresume_box_group">
        <div class="yun_wap_addresume_box_label"> 职位名称 <span class="resume-cont_wate_bj">*</span> </div>
        <div class="yun_wap_addresume_box_control">
          <input type="text" name="name" id='name' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
"  placeholder="请填写职位名称" class="yun_wap_addresume_text">
        </div>
      </div>
      <div class="yun_wap_addresume_box_group">
        <div class="yun_wap_addresume_box_label">职位类别 <span class="resume-cont_wate_bj">*</span> </div>
        <div class="yun_wap_addresume_box_control">
          <div class="selectOption" style="width:31%">
            <select name="job1" onchange="checkjob(this.value,'1');">
              <option value="">请选择</option>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['job1']==$_smarty_tpl->tpl_vars['v']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
                <?php } ?>
              
            </select>
          </div>
          <div class="selectOption" style="width:31%">
            <select name="job1_son" id="job1_son" onchange="checkjob(this.value,'2');">
              <option value="">请选择</option>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_type']->value[$_smarty_tpl->tpl_vars['row']->value['job1']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['job1_son']==$_smarty_tpl->tpl_vars['v']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
                <?php } ?>
            </select>
          </div>
          <div class="selectOption" style="width:31%">
            <select name="job_post" id="job_post">
              <option value="">请选择</option>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_type']->value[$_smarty_tpl->tpl_vars['row']->value['job1_son']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['job_post']==$_smarty_tpl->tpl_vars['v']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
                <?php } ?>
            </select>
          </div>
        </div>
      </div>
      <div class="yun_wap_addresume_box_group">
        <div class="yun_wap_addresume_box_label">工作地点 <span class="resume-cont_wate_bj">*</span> </div>
        <div class="yun_wap_addresume_box_control">
          <div class="selectOption" style="width:31%">
            <select name="provinceid" id="provinceid" onchange="checkcity(this.value,'1');">
              <option value="">请选择</option>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>                
              <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['provinceid']==$_smarty_tpl->tpl_vars['v']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>              
                <?php } ?>              
            </select>
          </div>
          <div class="selectOption" style="width:31%">
            <select name="cityid" id="cityid" onchange="checkcity(this.value,'2');">
              <option value="">请选择</option>              
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['row']->value['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>                
              <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['cityid']==$_smarty_tpl->tpl_vars['v']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>             
                <?php } ?>              
            </select>
          </div>
          <div class="selectOption"  style="width:31%;<?php if (!$_smarty_tpl->tpl_vars['row']->value['three_cityid']) {?>display:none;<?php }?>"  id="cityshowth">
            <select name="three_cityid" id="three_cityid">
              <option value="">请选择</option>              
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['row']->value['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>                
              <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['three_cityid']==$_smarty_tpl->tpl_vars['v']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>              
                <?php } ?>           
            </select>
          </div>
        </div>
      </div>
      <div class="yun_wap_addresume_box_group">
        <div class="yun_wap_addresume_box_label"> 薪水待遇 <span class="resume-cont_wate_bj">*</span> </div>
        <div class="yun_wap_addresume_box_control">
          <input type="text" class="xz_text_job" name="minsalary" id='minsalary' placeholder="最低薪资" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['minsalary']) {
echo $_smarty_tpl->tpl_vars['row']->value['minsalary'];
}?>" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"<?php if (!$_smarty_tpl->tpl_vars['row']->value['minsalary']&&!$_smarty_tpl->tpl_vars['row']->value['maxsalary']&&$_smarty_tpl->tpl_vars['row']->value['id']) {?> disabled="disabled"<?php }?> />
          <span>-</span>
          <input type="text" class="xz_text_job" name="maxsalary" id='maxsalary' placeholder="最高薪资" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['maxsalary']) {
echo $_smarty_tpl->tpl_vars['row']->value['maxsalary'];
}?>"  onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"<?php if (!$_smarty_tpl->tpl_vars['row']->value['minsalary']&&!$_smarty_tpl->tpl_vars['row']->value['maxsalary']&&$_smarty_tpl->tpl_vars['row']->value['id']) {?> disabled="disabled"<?php }?> />
          <span style="color:#666;"><label><input type="checkbox" id="salary_type" name="salary_type" value="1" onclick="change_salary_type()"<?php if (!$_smarty_tpl->tpl_vars['row']->value['minsalary']&&!$_smarty_tpl->tpl_vars['row']->value['maxsalary']&&$_smarty_tpl->tpl_vars['row']->value['id']) {?> checked="checked"<?php }?>/> 面议</label></span>
        </div>
      </div>
      <div class="yun_wap_addresume_box_group">
        <div class="yun_wap_addresume_box_label"> 招聘天数 <span class="resume-cont_wate_bj">*</span> </div>
        <div class="yun_wap_addresume_box_control">
          <input type="text" name="days" id='days' value="<?php if ($_smarty_tpl->tpl_vars['row']->value['days']) {
echo $_smarty_tpl->tpl_vars['row']->value['days'];
} else { ?>30<?php }?>" class="yun_wap_addresume_text"  onkeyup="this.value=this.value.replace(/[^0-9]/g,'')">
        </div>
      </div>
      <div class="yun_wap_addresume_box_group">
        <div class="yun_wap_addresume_box_label"> 职位描述 <span class="resume-cont_wate_bj">*</span> </div>
        <div class="yun_wap_addresume_box_control">
          <textarea class="textAreaMsg tip" style="height:200px" name="description" id="description" placeholder="请输入职位描述500字以内"><?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
</textarea>
        </div>
      </div>
		
            
           
       <div class="yun_wap_addresume_box_group" style=" padding:10px 15px 10px 10px">
          <div class="yun_wap_addresume_box_label">联系方式</div>
          <div class="yun_wap_add_hm">
		    <input type="hidden" name="islink" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['islink']) {
echo $_smarty_tpl->tpl_vars['row']->value['islink'];
} else { ?>1<?php }?>" />
                <div class="admin_job_js_list_rt">
                     <span class="admin_job_style <?php if ($_smarty_tpl->tpl_vars['row']->value['islink']==1||$_smarty_tpl->tpl_vars['row']->value['islink']=='') {?>admin_job_style_n<?php }?>" onclick="choice('1','link')" id="islink1">使用企业联系方式( <?php echo $_smarty_tpl->tpl_vars['company']->value['linkman'];?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['company']->value['linktel']) {
echo $_smarty_tpl->tpl_vars['company']->value['linktel'];
} else {
echo $_smarty_tpl->tpl_vars['company']->value['linkphone'];
}?> )</span>
                     </div>
                     <div class="admin_job_js_list_rt">
                          <span class="admin_job_style <?php if ($_smarty_tpl->tpl_vars['row']->value['islink']==2) {?>admin_job_style_n<?php }?>" onclick="choice('2','link')" id="islink2">使用新联系方式</span>
                     </div>                     
				    <div class="admin_job_js" id="newlink"  style="padding:10px 10px 10px 0px; <?php if ($_smarty_tpl->tpl_vars['row']->value['islink']!=2) {?>display:none;<?php }?>" >
                         <div class="job_touch_other">
                               <div class="job_touch_other_tit">使用新联系方式</div>
				               <input type="text"  class="payment_fp_touch_text payment_fp_touch_text_p" <?php if ($_smarty_tpl->tpl_vars['job_link']->value['link_man']&&$_smarty_tpl->tpl_vars['row']->value['islink']=='2') {?>value="<?php echo $_smarty_tpl->tpl_vars['job_link']->value['link_man'];?>
"<?php }?> id="link_man" name="link_man" placeholder="请输入联系人"> 
			    				
			    	           <input type="text"  <?php if ($_smarty_tpl->tpl_vars['job_link']->value['link_moblie']&&$_smarty_tpl->tpl_vars['row']->value['islink']=='2') {?>value="<?php echo $_smarty_tpl->tpl_vars['job_link']->value['link_moblie'];?>
"<?php }?> id="link_moblie" name="link_moblie" placeholder="请输入联系电话" class="payment_fp_touch_text">
                               <div class="">   <input type="checkbox"  id="tblink" name="tblink" value="1">同步到所有职位</div>
				         </div>
                         </div>
                <div class="admin_job_style <?php if ($_smarty_tpl->tpl_vars['row']->value['islink']==3) {?>admin_job_style_n<?php }?>" onclick="choice('3','link')" id="islink3">不向求职者展示联系方式（不想受到骚扰）</div>  
				</div>                          
          </div>
          
        <div class="yun_wap_addresume_box_group" style=" padding:10px 15px 10px 10px">
          <div class="yun_wap_addresume_box_label" style="width:100px;">接收简历的邮箱</div>
          <div class="yun_wap_add_hm">
		  <input type="hidden" name="isemail" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['isemail']) {
echo $_smarty_tpl->tpl_vars['row']->value['isemail'];
} else {
if ($_smarty_tpl->tpl_vars['company']->value['linkmail']) {?>1<?php } else { ?>0<?php }
}?>" />
                     <div class="admin_job_js_list_rt">
                          <?php if ($_smarty_tpl->tpl_vars['company']->value['linkmail']) {?><span class="admin_job_style <?php if ($_smarty_tpl->tpl_vars['row']->value['isemail']==1||!$_smarty_tpl->tpl_vars['row']->value['isemail']) {?>admin_job_style_n<?php }?>" onclick="choice('1','email')" id="isemail1">使用企业邮箱( <?php echo $_smarty_tpl->tpl_vars['company']->value['linkmail'];?>
 )</span><?php }?>
                     </div>
                    <div class="admin_job_js_list_rt">
                          <span class="admin_job_style <?php if ($_smarty_tpl->tpl_vars['row']->value['isemail']==2) {?>admin_job_style_n<?php }?>" onclick="choice('2','email')" id="isemail2">使用新邮箱</span>
                     </div>                     
				    <div class="admin_job_js" id="newemail" style="padding:10px 10px 10px 0px;<?php if ($_smarty_tpl->tpl_vars['row']->value['isemail']!=2) {?>display:none;<?php }?>" >
                         <div class="job_touch_other">
                               <div class="job_touch_other_tit">使用新邮箱</div>
			    	           <input type="text"  id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['job_link']->value['email'];?>
" placeholder="请填写新邮箱" class="payment_fp_touch_text">
				         </div>
                         </div>
                <div class="admin_job_style <?php if ($_smarty_tpl->tpl_vars['row']->value['isemail']==3) {?>admin_job_style_n<?php }?>" onclick="choice('3','email')" id="isemail3">不需要将收到的简历发送到邮箱</div>  
			</div>                          
          </div>
      <div class="info-table-value"><a class="iconfont form-show-btn" href="javascript:void(0)" onclick="$('#jobother').toggle();">展开选填信息</a></div>
      <div class="yun_wap_xtbox" id="jobother" style="display:none">
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label"> 从事行业 </div>
          <div class="yun_wap_addresume_box_control">
            <div class="select"> <span class="txt hy">
            <?php if ($_smarty_tpl->tpl_vars['row']->value['hy']) {?>
            <?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['row']->value['hy']];
} else { ?>请选择<?php }?>
            </span>
              <select name="hy" class="textval" id="hyid" onchange="ckpartjob('hy');">
				<option value="">请选择</option>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['hy']==$_smarty_tpl->tpl_vars['v']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
                
                <?php } ?>
              
              </select>
            </div>
          </div>
        </div>
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label"> 招聘人数</div>
          <div class="yun_wap_addresume_box_control">
            <div class="select"> <span class="txt number"><?php if ($_smarty_tpl->tpl_vars['row']->value['number']) {
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['number']];
} else { ?>请选择<?php }?></span>
              <select name="number" id="numberid" onchange="ckpartjob('number');">
                <option value="">请选择</option>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['number']==$_smarty_tpl->tpl_vars['v']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
                
                <?php } ?>
              
              </select>
            </div>
          </div>
        </div>
                <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label"> 工作经验 </div>
          <div class="yun_wap_addresume_box_control">
            <div class="select"> <span class="txt exp"><?php if ($_smarty_tpl->tpl_vars['row']->value['exp']) {
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['exp']];
} else { ?>请选择<?php }?></span>
              <select name="exp" class="textval" id="expid" onchange="ckpartjob('exp');">
			   <option value="">请选择</option>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_exp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['exp']==$_smarty_tpl->tpl_vars['v']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
                
                <?php } ?>
              
              </select>
            </div>
          </div>
        </div>
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label"> 到岗时间 </div>
          <div class="yun_wap_addresume_box_control">
            <div class="select"> <span class="txt report"><?php if ($_smarty_tpl->tpl_vars['row']->value['report']) {
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['report']];
} else { ?>请选择<?php }?></span>
              <select name="report" class="textval" id="reportid" onchange="ckpartjob('report');">
			   <option value="">请选择</option>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['report']==$_smarty_tpl->tpl_vars['v']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
                
                <?php } ?>
              
              </select>
            </div>
          </div>
        </div>
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label"> 年龄要求 </div>
          <div class="yun_wap_addresume_box_control">
            <div class="select"> <span class="txt age"><?php if ($_smarty_tpl->tpl_vars['row']->value['age']) {
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['age']];
} else { ?>请选择<?php }?></span>  
              <select name="age" class="textval" id="ageid" onchange="ckpartjob('age');">
			  <option value="">请选择</option>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_age']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['age']==$_smarty_tpl->tpl_vars['v']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
                
                <?php } ?>
              
              </select>
            </div>
          </div>
        </div>
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label"> 性别要求 </div>
          <div class="yun_wap_addresume_box_control">
            <div class="select"> <span class="txt sex"><?php if ($_smarty_tpl->tpl_vars['row']->value['sex']==1) {
echo $_smarty_tpl->tpl_vars['arr_data1']->value;
} elseif ($_smarty_tpl->tpl_vars['row']->value['sex']==2) {
echo $_smarty_tpl->tpl_vars['arr_data1']->value;
} elseif ($_smarty_tpl->tpl_vars['row']->value['sex']==3) {
echo $_smarty_tpl->tpl_vars['arr_data1']->value;
} else { ?>请选择<?php }?></span>
              <select name="sex" class="textval" id="sexid" onchange="ckpartjob('sex');">
			  <option value="">请选择</option>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_data']->value['sex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>    
                <option value="<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['row']->value['sex']==$_smarty_tpl->tpl_vars['j']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
                <?php } ?>         
              
              </select>
            </div>
          </div>
        </div>
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label"> 教育程度 </div>
          <div class="yun_wap_addresume_box_control">
            <div class="select"> <span class="txt edu"><?php if ($_smarty_tpl->tpl_vars['row']->value['edu']) {
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['edu']];
} else { ?>请选择<?php }?></span> 
              <select name="edu" class="textval" id="eduid" onchange="ckpartjob('edu');">
                <option value="">请选择</option>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['edu']==$_smarty_tpl->tpl_vars['v']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
                
                <?php } ?>
              
              </select>
            </div>
          </div>
        </div>
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label"> 婚姻状况 </div>
          <div class="yun_wap_addresume_box_control">
            <div class="select"> <span class="txt marriage"><?php if ($_smarty_tpl->tpl_vars['row']->value['marriage']) {
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['marriage']];
} else { ?>请选择<?php }?></span>
              <select name="marriage" class="textval" id="marriageid" onchange="ckpartjob('marriage');">
                 <option value="">请选择</option>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_marriage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['marriage']==$_smarty_tpl->tpl_vars['v']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
                
                <?php } ?>
              
              </select>
            </div>
          </div>
        </div>
        <div class="yun_wap_addresume_box_group" style=" padding:10px 15px 10px 10px">
        
          <div  style="color:#999"> 语言要求 </div>
          <div class="jobadd_zk" onclick="zhankaiShouqi(this);"><?php if (!$_smarty_tpl->tpl_vars['row']->value['id']) {?>更多<?php } else { ?>收起<?php }?></div>
           <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <label class="jobadd_span" for="lang_<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" style="width:46%;<?php if ($_smarty_tpl->tpl_vars['j']->value>5&&!$_smarty_tpl->tpl_vars['row']->value['id']) {?>display:none<?php }?>">
              <input type="checkbox" name="lang[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" id="lang_<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['lang']&&in_array($_smarty_tpl->tpl_vars['v']->value,$_smarty_tpl->tpl_vars['row']->value['lang'])) {?>checked<?php }?>>
              <?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
 </label>
            <?php } ?>
        </div>
</div> 
      <div class="yun_wap_addresume_box_group" style="background: transparent; border: none;">
        <input name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" type="hidden"/>
        <input name="state" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['state'];?>
" type="hidden"/>
        <input type="submit" name="submit" value="提交操作" class="reinputText2">
      </div>
    </form>
  </div>
</section>
</div>
<?php echo '<script'; ?>
>
function zhankaiShouqi(control){
	$(control).parent().find('.jobadd_span:gt(5)').slideToggle(1000);
	if($(control).html()=='更多'){
		$(control).html('收起');
	}else{
		$(control).html('更多');
	}
}
function choice(id,type){
	if(type=='link'||type=='email'){
		if(id==1){
			$("#is"+type+"3").removeClass('admin_job_style_n');
			$("#is"+type+"2").removeClass('admin_job_style_n');
			$("#is"+type+id).addClass('admin_job_style_n');
			$("input[name='is"+type+"']").val(id);
			$("#new"+type).hide();
		}else if(id==2){
			$("#is"+type+"3").removeClass('admin_job_style_n');
			$("#is"+type+"1").removeClass('admin_job_style_n');
			$("#is"+type+id).addClass('admin_job_style_n');
			$("input[name='is"+type+"']").val(id);
			$("#new"+type).show();
		}else if(id==3){
			$("#is"+type+"1").removeClass('admin_job_style_n');
			$("#is"+type+"2").removeClass('admin_job_style_n');
			$("#is"+type+id).addClass('admin_job_style_n');
			$("input[name='is"+type+"']").val(id);
			$("#new"+type).hide();
		}
	}
}
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
