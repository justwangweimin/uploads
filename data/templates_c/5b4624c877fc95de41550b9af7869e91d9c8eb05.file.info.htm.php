<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 17:03:43
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\member\user\info.htm" */ ?>
<?php /*%%SmartyHeaderCode:876498455ab0ce6fc51a05-69405827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b4624c877fc95de41550b9af7869e91d9c8eb05' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\member\\user\\info.htm',
      1 => 1517992305,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '876498455ab0ce6fc51a05-69405827',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wap_style' => 0,
    'config' => 0,
    'resume' => 0,
    'arr_data1' => 0,
    'arr_data' => 0,
    'j' => 0,
    'v' => 0,
    'userclass_name' => 0,
    'userdata' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0ce6fe49824_32139315',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0ce6fe49824_32139315')) {function content_5ab0ce6fe49824_32139315($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
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
$(function () {
	var currYear = (new Date()).getFullYear();
	var opt = {
		preset: 'date', //日期
		theme: 'android-ics light', //皮肤样式
		display: 'modal', //显示方式 
		mode: 'scroller', //日期选择模式
		dateFormat: 'yy-mm-dd', // 日期格式
		setText: '确定', //确认按钮名称
		cancelText: '取消',//取消按钮名籍我
		dateOrder: 'yyyymmdd', //面板中日期排列式
		dayText: '日', monthText: '月', yearText: '年',
		startYear: currYear - 100, //开始年份
		endYear: currYear-14 //结束年份
	};
	$("#birthday").mobiscroll('setDate', $("#birthday").val(), true).date(opt); 
});
<?php echo '</script'; ?>
> 

 

<form id="resumeInfo" action="index.php?c=info" method="post" onsubmit="return checkinfo(this);" enctype="multipart/form-data" >
  <div class="main_member_cot_box">
    <div class="wap_member_comp_h1"><span>基本信息</span></div>
    <div class="yun_wap_addresume_box">
      <div class="yun_wap_addresume_box_group">
        <div class="yun_wap_addresume_box_label"> 姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名 <span class="resume-cont_wate_bj">*</span> </div>
        <div class="yun_wap_addresume_box_control">
          <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['name'];?>
" placeholder="请填写真实姓名" class="yun_wap_addresume_text" style="width:100px">
			 <span class="info_bh"> 
             <em class="info_bh_box">
             <select name='nametype' class="info_selectname" >
				<option value='1' <?php if ($_smarty_tpl->tpl_vars['resume']->value['nametype']==1) {?>selected<?php }?>>完全公开</option>
				<option value='2' <?php if ($_smarty_tpl->tpl_vars['resume']->value['nametype']==2) {?>selected<?php }?>>显示编号</option>
				<option value='3' <?php if ($_smarty_tpl->tpl_vars['resume']->value['nametype']==3) {?>selected<?php }?>>隐藏名字</option>
			  </select>
              </em>
              </span>
        </div>
      </div>
      <div class="yun_wap_addresume_box_group">
        <div class="yun_wap_addresume_box_label"> 性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别 <span class="resume-cont_wate_bj">*</span> </div>
        <div class="yun_wap_addresume_box_control">
          <div class="select"><span class="txt sex">
          
          
          <?php if ($_smarty_tpl->tpl_vars['resume']->value['sex']==1) {
echo $_smarty_tpl->tpl_vars['arr_data1']->value;
} elseif ($_smarty_tpl->tpl_vars['resume']->value['sex']==2) {
echo $_smarty_tpl->tpl_vars['arr_data1']->value;
} else { ?>请选择性别<?php }?></span>
        <select id="sex" name="sex" class="textval" onchange="ckresume('sex')">    
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
			<input id="birthday" class="yun_wap_addresume_text" onfocus="this.blur();"  type="text" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['birthday'];?>
" name="birthday" placeholder="请选择出生日期" >  
        </div>
      </div>
      <div class="yun_wap_addresume_box_group">
        <div class="yun_wap_addresume_box_label"> 最高学历 <span class="resume-cont_wate_bj">*</span> </div>
        <div class="yun_wap_addresume_box_control">
          <div class="select"><span class="txt edu">
          <?php if ($_smarty_tpl->tpl_vars['resume']->value['edu']) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['resume']->value['edu']];
} else { ?>请选择最高学历<?php }?></span>
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
          <div class="select"> <span class="txt exp"><?php if ($_smarty_tpl->tpl_vars['resume']->value['exp']) {
echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['resume']->value['exp']];
} else { ?>请选择工作经验<?php }?></span>
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
          <input type="hidden" id="telphone" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['telphone'];?>
">
          <?php } else { ?>
          <input type="text" name="telphone" id="telphone" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['telphone'];?>
" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')" class="yun_wap_addresume_text"placeholder="请填写手机号码" >
          <?php }?> </div>
      </div>
      <div class="yun_wap_addresume_box_group">
        <div class="yun_wap_addresume_box_label"> 联系邮箱 </div>
        <div class="yun_wap_addresume_box_control"> <?php if ($_smarty_tpl->tpl_vars['resume']->value['email_status']==1) {?>
          <?php echo $_smarty_tpl->tpl_vars['resume']->value['email'];?>
<a href="index.php?c=binding" style="color:red;">重新认证</a>
          <input type="hidden" id="email" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['email'];?>
">
          <?php } else { ?>
          <input type="text" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['email'];?>
" class="yun_wap_addresume_text" placeholder="请填写联系邮箱" >
          <?php }?> </div>
      </div>
      <div class="yun_wap_addresume_box_group">
        <div class="yun_wap_addresume_box_label"> 现居住地 <span class="resume-cont_wate_bj">*</span> </div>
        <div class="yun_wap_addresume_box_control">
          <input type="text" name="living" id="living" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['living'];?>
"  placeholder="比如：苏州-沧浪区" class="yun_wap_addresume_text">
        </div>
      </div>
      <div class="yun_wap_addresume_box_group">
        <div class="yun_wap_addresume_box_label"> QQ </div>
        <div class="yun_wap_addresume_box_control">
          <input type="text" name="qq" id="qq" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['qq'];?>
"  placeholder="输入你的QQ号码" class="yun_wap_addresume_text">
        </div>
      </div>
      <div class="yun_wap_addresume_box_group">
        <div class="yun_wap_addresume_box_label">个人二维码</div>
        <div class="yun_wap_addresume_box_control">
                <div class="yun_wap_addresume_box_ewm">
         <i class="user_ewm_photo_img"></i>
          <span class="user_ewm_photo_b"> 个人二维码</span>
          <input type="file" name="wxewm" id="wxewm" accept="image/*" class="user_ewm_photo_b_file">
          </div>
        </div>
		  <div class="yun_wap_addresume_box_label"></div>
        <div class="yun_wap_addresume_box_control">
          <?php if ($_smarty_tpl->tpl_vars['resume']->value['wxewm']) {?>
              <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['resume']->value['wxewm'];?>
"  width="100" height="100" />
              <?php }?>
        </div>
      </div>
     
      <div class="yun_wap_addresume_box_group" style="background: transparent; border: none;">
        <input type="submit" name="submit" value="保存" class="reinputText2">
      </div>
    </div>
  </div>
</form>
 </div> </div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
