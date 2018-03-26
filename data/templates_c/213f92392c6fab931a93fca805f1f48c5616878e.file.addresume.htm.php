<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-02 01:54:49
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\member\user\addresume.htm" */ ?>
<?php /*%%SmartyHeaderCode:4456551675a983e69156514-79170286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '213f92392c6fab931a93fca805f1f48c5616878e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\member\\user\\addresume.htm',
      1 => 1519566925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4456551675a983e69156514-79170286',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'wap_style' => 0,
    'industry_index' => 0,
    'v' => 0,
    'industry_name' => 0,
    'job_index' => 0,
    'job_name' => 0,
    'job_type' => 0,
    'v1' => 0,
    'v2' => 0,
    'city_index' => 0,
    'city_name' => 0,
    'row' => 0,
    'city_type' => 0,
    'userdata' => 0,
    'userclass_name' => 0,
    'resume' => 0,
    'arr_data1' => 0,
    'arr_data' => 0,
    'j' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a983e69772011_04944518',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a983e69772011_04944518')) {function content_5a983e69772011_04944518($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/wap_tck.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/resume.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mobiscroll/mobiscroll_002.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mobiscroll/mobiscroll.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mobiscroll/mobiscroll_003.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mobiscroll/css/animate.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mobiscroll/css/mobiscroll.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"> 
<?php echo '<script'; ?>
>
    $(function(){
        var currYear=(new Date()).getFullYear();
        var opt={
            preset:'date',//日期
            theme:'android-ics light',//皮肤样式
            display:'modal',//显示方式 
            mode:'scroller',//日期选择模式
            dateFormat:'yy-mm-dd',// 日期格式
            setText:'确定',//确认按钮名称
            cancelText:'取消',//取消按钮名籍我
            dateOrder:'yyyymmdd',//面板中日期排列式
            dayText:'日',monthText:'月',yearText:'年',
            startYear:currYear-100,//开始年份
            endYear:currYear-14 //结束年份
        };
        var optresume={
            preset:'date',//日期
            theme:'android-ics light',//皮肤样式
            display:'modal',//显示方式 
            mode:'scroller',//日期选择模式
            dateFormat:'yy-mm',// 日期格式
            setText:'确定',//确认按钮名称
            cancelText:'取消',//取消按钮名籍我
            dateOrder:'yyyymm',//面板中日期排列式
            dayText:'日',monthText:'月',yearText:'年',
            startYear:currYear-100,//开始年份
            endYear:currYear //结束年份
        };
        $("#birthday").mobiscroll('setDate',$("#birthday").val(),true).date(opt);
        $("#worksdate").mobiscroll('setDate',$("#worksdate").val(),true).date(optresume);
        $("#workedate").mobiscroll('setDate',$("#workedate").val(),true).date(optresume);
        $("#edusdate").mobiscroll('setDate',$("#edusdate").val(),true).date(optresume);
        $("#eduedate").mobiscroll('setDate',$("#eduedate").val(),true).date(optresume);
        $("#prosdate").mobiscroll('setDate',$("#prosdate").val(),true).date(optresume);
        $("#proedate").mobiscroll('setDate',$("#proedate").val(),true).date(optresume);
    });
<?php echo '</script'; ?>
> 
<div class="main_member_cot_box">
    <div class="wap_member_comp_h1"><span>创建简历</span></div>
    <div class="yun_wap_addresume_box">
        <div class="yun_wap_addresume_box_group">
            <div class="yun_wap_addresume_box_label"> 期望岗位 <span class="resume-cont_wate_bj">*</span> </div>
            <div class="yun_wap_addresume_box_control">
                <input type="text" name="name" value=""  placeholder="比如：销售总监,销售经理" class="yun_wap_addresume_text">
            </div>
        </div>
        <div class="yun_wap_addresume_box_group">
            <div class="yun_wap_addresume_box_label"> 从事行业 <span class="resume-cont_wate_bj">*</span> </div>
            <div class="yun_wap_addresume_box_control">
                <div class="select"> <span class="txt hy">请选择</span>
                    <select id="hy" name="hy" class="textval" onchange="ckresume('hy')">
                        <option value="">请选择</option>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="yun_wap_addresume_box_group">
            <div class="yun_wap_addresume_box_label"> 期望职位 <span class="resume-cont_wate_bj">*</span> </div>
            <div class="yun_wap_addresume_box_control yun_wap_addresume_box_control_after">
                <input type="hidden" id="job_classid" name="job_classid" class="yun_wap_addresume_text" >
                <input type="button" id="jobclassbutton" value="请选择" class="yun_wap_addresume_text yun_wap_addresume_text_but" onclick="checkshowjob('job');"/>
                <div class="job_search_box_jobclass" style="display:none; float:left;width:100%;height:auto; z-index:100; position:absolute; background-color:#FFF;">
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <li style="width:auto;float:left;display:none; list-style-type:none; margin:5px 10px 5px 10px;" class="jobsearchjobclass 0" jobclassid="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" parentid="0"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
                        <?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_type']->value[$_smarty_tpl->tpl_vars['v']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value) {
$_smarty_tpl->tpl_vars['v1']->_loop = true;
?>
                        <li style="width:auto;float:left;display:none; list-style-type:none; margin:5px 10px 5px 10px;" class="jobsearchjobclass1 <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" jobclassid="<?php echo $_smarty_tpl->tpl_vars['v1']->value;?>
" parentid="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v1']->value];?>
</li>
                        <?php  $_smarty_tpl->tpl_vars['v2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_type']->value[$_smarty_tpl->tpl_vars['v1']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v2']->key => $_smarty_tpl->tpl_vars['v2']->value) {
$_smarty_tpl->tpl_vars['v2']->_loop = true;
?>
                        <li style="width:auto;float:left;display:none; list-style-type:none; margin:5px 10px 5px 10px;" class="jobsearchjobclass2 <?php echo $_smarty_tpl->tpl_vars['v1']->value;?>
" jobclassid="<?php echo $_smarty_tpl->tpl_vars['v2']->value;?>
" parentid="<?php echo $_smarty_tpl->tpl_vars['v1']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v2']->value];?>
</li>
                        <?php } ?>
                        <?php } ?>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="yun_wap_addresume_box_group">
            <div class="yun_wap_addresume_box_label"> 期望薪资 <span class="resume-cont_wate_bj">*</span> </div>
            <div class="yun_wap_addresume_box_control">
                <div>
                    <span class="txt salary">
                        <input type="text" id="minsalary" name="minsalary" size="5" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" placeholder="例如：5000" class="yun_wap_addresume_xz">
                        <span> - </span>
                        <input type="text" id="maxsalary" name="maxsalary" size="5" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" placeholder="8000" class="yun_wap_addresume_xz">
                        <span> </span>
                    </span>
                </div>
            </div>
        </div>
        <div class="yun_wap_addresume_box_group">
            <div class="yun_wap_addresume_box_label"> 期望城市 <span class="resume-cont_wate_bj">*</span> </div>
            <div class="yun_wap_addresume_box_control">
                <div class="selectOption" style="width:31%">
                    <select id="provinceid" name="provinceid" onchange="checkcity(this.value,'1');" class="sel_txt sw1 ">
                        <option value="">请选择</option>                   
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>          
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>          
                        <?php } ?>        
                    </select>
                </div>
                <div class="selectOption" style="width:31%">
                    <select  id="cityid" name="cityid" onchange="checkcity(this.value,'2');" class="sel_txt sw1 ">
                        <option value="">请选择</option>          
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['row']->value['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
                        <?php } ?>              
                    </select>
                </div>
                <div class="selectOption"  style="width:31%;<?php if (!$_smarty_tpl->tpl_vars['row']->value['three_cityid']) {?>display:none;<?php }?>"  id="cityshowth">
                    <select id="three_cityid" name="three_cityid" class="sel_txt sw1 ">
                        <option value="">请选择</option>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['row']->value['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>         
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>          
                        <?php } ?>        
                    </select>
                </div>
            </div>
        </div>
        <div class="yun_wap_addresume_box_group">
            <div class="yun_wap_addresume_box_label"> 工作性质 <span class="resume-cont_wate_bj">*</span> </div>
            <div class="yun_wap_addresume_box_control">
                <div class="select"> <span class="txt type">请选择</span>
                    <select id="type" name="type" class="textval" onchange="ckresume('type')"> 
                        <option value="">请选择</option>        
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>         
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
                        <?php } ?>        
                    </select>
                </div>
            </div>
        </div>
        <div class="yun_wap_addresume_box_group">
            <div class="yun_wap_addresume_box_label"> 到岗时间 <span class="resume-cont_wate_bj">*</span> </div>
            <div class="yun_wap_addresume_box_control">
                <div class="select"> <span class="txt report">请选择</span>
                    <select id="report" name="report" class="textval" onchange="ckresume('report')">
                        <option value="">请选择</option>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="yun_wap_addresume_box_group">
            <div class="yun_wap_addresume_box_label"> 求职状态 <span class="resume-cont_wate_bj">*</span> </div>
            <div class="yun_wap_addresume_box_control">
                <div class="select"> <span class="txt jobstatus">请选择</span>
                    <select id="jobstatus" name="jobstatus" class="textval" onchange="ckresume('jobstatus')"> 
                        <option value="">请选择</option>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_jobstatus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
                        <?php } ?>        
                    </select>
                </div>
            </div>
        </div>
        <div class="yun_wap_addresume_box_group">
            <div class="yun_wap_addresume_box_label"> 真实姓名 <span class="resume-cont_wate_bj">*</span> </div>
            <div class="yun_wap_addresume_box_control">
                <input type="text" name="uname" id="uname" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['name'];?>
"  placeholder="请填写真实姓名" class="yun_wap_addresume_text">
            </div>
        </div>
        <div class="yun_wap_addresume_box_group">
            <div class="yun_wap_addresume_box_label"> 性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别 <span class="resume-cont_wate_bj">*</span> </div>
            <div class="yun_wap_addresume_box_control">
                <div class="select"> <span class="txt sex">
                        <?php if ($_smarty_tpl->tpl_vars['resume']->value['sex']==1) {
echo $_smarty_tpl->tpl_vars['arr_data1']->value;
} elseif ($_smarty_tpl->tpl_vars['resume']->value['sex']==2) {
echo $_smarty_tpl->tpl_vars['arr_data1']->value;
} elseif ($_smarty_tpl->tpl_vars['resume']->value['sex']==3) {
echo $_smarty_tpl->tpl_vars['arr_data1']->value;
} else { ?>请选择<?php }?></span>
                    <select name="sex" class="textval" id="sex" onchange="ckresume('sex');">
                        <option value="">请选择</option>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_data']->value['sex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['v']->key;
?>    
                        <option value="<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['resume']->value['sex']==$_smarty_tpl->tpl_vars['j']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
                        <?php } ?>         

                    </select>
                </div>
            </div>
        </div>
        <div class="yun_wap_addresume_box_group">
            <div class="yun_wap_addresume_box_label"> 出生年月 <span class="resume-cont_wate_bj">*</span> </div>
            <div class="yun_wap_addresume_box_control">
                <input id="birthday" class="yun_wap_addresume_text" type="text" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['birthday'];?>
" name="birthday"> 
            </div>
        </div>
        <div class="yun_wap_addresume_box_group">
            <div class="yun_wap_addresume_box_label"> 最高学历 <span class="resume-cont_wate_bj">*</span> </div>
            <div class="yun_wap_addresume_box_control">
                <div class="select"> <span class="txt edu"><?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['resume']->value['edu']]) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['resume']->value['edu']];
} else { ?>请选择<?php }?></span>
                    <select id="edu" name="edu" class="textval" onchange="ckresume('edu')">
                        <option value="">请选择</option>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['resume']->value['edu']==$_smarty_tpl->tpl_vars['v']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="yun_wap_addresume_box_group">
            <div class="yun_wap_addresume_box_label"> 工作经验 <span class="resume-cont_wate_bj">*</span> </div>
            <div class="yun_wap_addresume_box_control">
                <div class="select"> <span class="txt exp"><?php if ($_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['resume']->value['exp']]) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['resume']->value['exp']];
} else { ?>请选择<?php }?></span>
                    <select id="exp" name="exp" class="textval" onchange="ckresume('exp')">
                        <option value="">请选择</option>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['resume']->value['exp']==$_smarty_tpl->tpl_vars['v']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="yun_wap_addresume_box_group">
            <div class="yun_wap_addresume_box_label"> 手机号码 <span class="resume-cont_wate_bj">*</span> </div>
            <div class="yun_wap_addresume_box_control"> <?php if ($_smarty_tpl->tpl_vars['resume']->value['moblie_status']==1) {?>
                <?php echo $_smarty_tpl->tpl_vars['resume']->value['telphone'];?>
 <a href="index.php?c=binding" style="color:red;">重新认证</a>
                <input type="hidden" name="telphone" id="telphone" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['telphone'];?>
">
                <?php } else { ?>
                <input type="text" name="telphone" id="telphone" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['telphone'];?>
" class="yun_wap_addresume_text">
                <?php }?> </div>
        </div>
        <div class="yun_wap_addresume_box_group">
            <div class="yun_wap_addresume_box_label"> 联系邮箱 </div>
            <div class="yun_wap_addresume_box_control"> <?php if ($_smarty_tpl->tpl_vars['resume']->value['email_status']==1) {?>
                <?php echo $_smarty_tpl->tpl_vars['resume']->value['email'];?>
<a href="index.php?c=binding" style="color:red;">重新认证</a>
                <input type="hidden" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['email'];?>
">
                <?php } else { ?>
                <input type="text" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['email'];?>
"   class="yun_wap_addresume_text">
                <?php }?> </div>
        </div>
        <div class="yun_wap_addresume_box_group">
            <div class="yun_wap_addresume_box_label"> 现居住地 <span class="resume-cont_wate_bj">*</span> </div>
            <div class="yun_wap_addresume_box_control">
                <input type="text" name="living" id="living" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['living'];?>
"  placeholder="比如：苏州-沧浪区" class="yun_wap_addresume_text">
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_exp']=='1') {?>
        <!----工作经历---->
        <div class="wap_member_comp_h1"><span>最近一份工作</span></div>
        <div class="yun_wap_addresume_box">
            <div class="yun_wap_addresume_box_group">
                <div class="yun_wap_addresume_box_label">单位名称 <span class="resume-cont_wate_bj">*</span> </div>
                <div class="yun_wap_addresume_box_control">
                    <input type="text" id="workname" name="workname" value="" class="yun_wap_addresume_text" placeholder="请填写单位名称">
                </div>
            </div>
            <div class="yun_wap_addresume_box_group">
                <div class="yun_wap_addresume_box_label">入职时间 <span class="resume-cont_wate_bj">*</span> </div>
                <div class="yun_wap_addresume_box_control">
                    <input id="worksdate" name="worksdate" class="yun_wap_addresume_text_tm" type="text" value=""> 
                </div>
            </div>
            <div class="yun_wap_addresume_box_group">
                <div class="yun_wap_addresume_box_label">离职时间 <span class="resume-cont_wate_bj">*</span> </div>
                <div class="yun_wap_addresume_box_control">
                    <div style="position:relative;width:120px;display:inline-block;">
                        <input id="workedate" name="workedate" class="yun_wap_addresume_text_tt" type="text" value="">  
                    </div>
                    <input name='workckendday' id='workckendday' onclick="workckenddays('workedate')" value='1' type='checkbox'/>至今
                </div>
            </div>       
            <div style="clear:both"></div>
            <div class="yun_wap_addresume_box_group">
                <div class="yun_wap_addresume_box_label">担任职位 <span class="resume-cont_wate_bj">*</span></div>
                <div class="yun_wap_addresume_box_control">
                    <input type="text" name="worktitle" id="worktitle" value="" class="yun_wap_addresume_text" placeholder="请填写担任职位">
                </div>
            </div>

            <div class="yun_wap_addresume_box_group">
                <div class="yun_wap_addresume_box_label">工作描述</div>
                <div class="yun_wap_addresume_box_control">
                    <div class="yun_wap_addresume_box_control_text">
                        <textarea name="workcontent" id="workcontent" class="yun_wap_addresume_texttextAreaMsg"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <!----END------->
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_edu']=='1') {?>
        <!----教育经历--->
        <div class="wap_member_comp_h1"><span>最高学历教育</span></div>
        <div class="yun_wap_addresume_box">
            <div class="yun_wap_addresume_box_group">
                <div class="yun_wap_addresume_box_label"> 学校名称 <span class="resume-cont_wate_bj">*</span> </div>
                <div class="yun_wap_addresume_box_control">
                    <input type="text" id="eduname" name="eduname" value=""  placeholder="请填写学校名称" class="yun_wap_addresume_text">
                </div>
            </div>
            <div class="yun_wap_addresume_box_group">
                <div class="yun_wap_addresume_box_label">入学时间 <span class="resume-cont_wate_bj">*</span> </div>
                <div class="yun_wap_addresume_box_control">
                    <i class="yun_wap_addresume_box_control_date"></i>
                    <input id="edusdate" name="edusdate" class="yun_wap_addresume_text" type="text" value=""> 
                </div>
            </div>
            <div class="yun_wap_addresume_box_group">
                <div class="yun_wap_addresume_box_label">离校时间 <span class="resume-cont_wate_bj">*</span> </div>
                <div class="yun_wap_addresume_box_control">
                    <i class="yun_wap_addresume_box_control_date"></i>
                    <input id="eduedate" name="eduedate" class="yun_wap_addresume_text" type="text" value=""> 
                </div>
            </div>
            <div class="yun_wap_addresume_box_group">
                <div class="yun_wap_addresume_box_label">所学专业<span class="resume-cont_wate_bj">*</span></div>
                <div class="yun_wap_addresume_box_control">
                    <input type="text" id="eduspec" name="eduspec" value="" placeholder="请填写所学专业" class="yun_wap_addresume_text">
                </div>
            </div> 
            <div class="yun_wap_addresume_box_group">
                <div class="yun_wap_addresume_box_label"> 最高学历 <span class="resume-cont_wate_bj">*</span></div>
                <div class="yun_wap_addresume_box_control">
                    <div class="select"> <span class="txt education">
                            请选择</span>
                        <select id="education" name="education" class="textval" onchange="ckresume('education')">
                            <option value="">请选择</option>
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <!-----END------->
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['config']->value['resume_create_project']=='1') {?>
        <!----项目经历--->
        <div class="wap_member_comp_h1"><span>近期参与项目</span></div>
        <div class="yun_wap_addresume_box">
            <div class="yun_wap_addresume_box_group">
                <div class="yun_wap_addresume_box_label"> 项目名称 <span class="resume-cont_wate_bj">*</span> </div>
                <div class="yun_wap_addresume_box_control">
                    <input type="text" name="proname" id="proname" value="" placeholder="请填写项目名称" class="yun_wap_addresume_text">
                </div>
            </div>
            <div class="yun_wap_addresume_box_group">
                <div class="yun_wap_addresume_box_label">开始时间 <span class="resume-cont_wate_bj">*</span> </div>
                <div class="yun_wap_addresume_box_control">
                    <i class="yun_wap_addresume_box_control_date"></i>
                    <input id="prosdate" name="prosdate" class="yun_wap_addresume_text" type="text" value="">  
                </div>
            </div>
            <div class="yun_wap_addresume_box_group">
                <div class="yun_wap_addresume_box_label">结束时间 <span class="resume-cont_wate_bj">*</span> </div>
                <div class="yun_wap_addresume_box_control">
                    <i class="yun_wap_addresume_box_control_date"></i>
                    <input id="proedate" name="proedate" class="yun_wap_addresume_text" type="text" value="">  
                </div>
            </div>       
            <div class="yun_wap_addresume_box_group">
                <div class="yun_wap_addresume_box_label"> 担任职位 <span class="resume-cont_wate_bj">*</span></div>
                <div class="yun_wap_addresume_box_control">
                    <input type="text" name="protitle" id="protitle" value=""  placeholder="请填写担任职位" class="yun_wap_addresume_text">
                </div>
            </div>
            <div class="yun_wap_addresume_box_group">
                <div class="yun_wap_addresume_box_label"> 项目内容</div>
                <div class="yun_wap_addresume_box_control">
                    <div class="yun_wap_addresume_box_control_text">  <textarea name="procontent" id="procontent" class="yun_wap_addresume_texttextAreaMsg"></textarea></div>
                </div>
            </div>
        </div>
        <!-----END------->
        <?php }?>
        <div class="yun_wap_addresume_box_group" style="background: transparent; border: none;">
            <input type="submit" onclick="kresume();" value="保存" class="reinputText2">
        </div>
    </div>
</div>
</div>
</div>
<input type='hidden' id='resume_edu' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['resume_create_edu'];?>
'>
<input type='hidden' id='resume_exp' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['resume_create_exp'];?>
'>
<input type='hidden' id='resume_pro' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['resume_create_project'];?>
'>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/public.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
