<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 15:42:46
         compiled from "D:\xampp\htdocs\uploads\app\template\wap\member\com\info.htm" */ ?>
<?php /*%%SmartyHeaderCode:14799244115ab0bb76a87bb6-56904229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c04e1b8fffe0dff986220234f9b2db24a98712c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\wap\\member\\com\\info.htm',
      1 => 1517900585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14799244115ab0bb76a87bb6-56904229',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wap_style' => 0,
    'config' => 0,
    'config_wapdomain' => 0,
    'row' => 0,
    'industry_name' => 0,
    'industry_index' => 0,
    'v' => 0,
    'comclass_name' => 0,
    'comdata' => 0,
    'city_index' => 0,
    'city_name' => 0,
    'city_type' => 0,
    'tv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0bb76eac5d7_25298327',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0bb76eac5d7_25298327')) {function content_5ab0bb76eac5d7_25298327($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/member/cheader.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/jobadd.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
>var weburl='<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
';<?php echo '</script'; ?>
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
 language="javascript"> 
function ckcom(type){
	var val=$("#"+type).find("option:selected").text();
	$('.'+type).html(val);
}
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
		endYear: currYear //结束年份
	};
	$("#sdate").mobiscroll('setDate', $("#sdate").val(), true).date(opt);  
});
<?php echo '</script'; ?>
>
<section class="wap_member">
  <div class="wap_member_comp_h1" style="position:relative"><span>完善基本资料</span><em class="wap_member_comp_em">以下<font color="#ff0000">*</font> 号为必填项</em></div>
  <div class="yun_wap_addresume_box">
    <form method="post" action="" onsubmit="return checkinfo(this);" enctype="multipart/form-data">
      <div class="yun_wap_addresume_box_group">
        <div class="yun_wap_addresume_box_label"> 企业全称 <span class="resume-cont_wate_bj">*</span> </div>
        <div class="yun_wap_addresume_box_control">
          <?php if ($_smarty_tpl->tpl_vars['row']->value['yyzz_status']==1) {?>
 		<input type="text"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" placeholder="请填写企业全称" class="yun_wap_addresume_text"  disabled="disabled">
		<input type="hidden" name="name" id='name' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" >
		<?php } else { ?>
		<input type="text" name="name" id='name' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" placeholder="请填写企业全称" class="yun_wap_addresume_text">
		<?php }?>

		</div>
      </div>
      <div class="yun_wap_addresume_box_group">
        <div class="yun_wap_addresume_box_label"> 简称</div>
        <div class="yun_wap_addresume_box_control">
          <input type="text" name="shortname" id='shortname' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['shortname'];?>
" placeholder="请填写企业简称" class="yun_wap_addresume_text">
        </div>
      </div>
      <div class="yun_wap_addresume_box_group">
        <div class="yun_wap_addresume_box_label"> 从事行业 <span class="resume-cont_wate_bj">*</span> </div>
        <div class="yun_wap_addresume_box_control">
          <div class="select"> <span class="txt hy"><?php if ($_smarty_tpl->tpl_vars['row']->value['hy']) {
echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['row']->value['hy']];
} else { ?>请选择<?php }?></span>
            <select name="hy" id='hy' class="textval" onchange="ckcom('hy')">
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
        <div class="yun_wap_addresume_box_label"> 企业性质 <span class="resume-cont_wate_bj">*</span> </div>
        <div class="yun_wap_addresume_box_control">
          <div class="select"> <span class="txt pr"><?php if ($_smarty_tpl->tpl_vars['row']->value['pr']) {
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['pr']];
} else { ?>请选择<?php }?></span>
            <select name="pr" id='pr' class="textval" onchange="ckcom('pr')">
			<option value="">请选择</option>
			  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_pr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['pr']==$_smarty_tpl->tpl_vars['v']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
              <?php } ?>
            </select>
          </div>
        </div>
      </div>
      <div class="yun_wap_addresume_box_group">
        <div class="yun_wap_addresume_box_label"> 企业规模 <span class="resume-cont_wate_bj">*</span> </div>
        <div class="yun_wap_addresume_box_control">
          <div class="select"> <span class="txt mun"><?php if ($_smarty_tpl->tpl_vars['row']->value['mun']) {
echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['row']->value['mun']];
} else { ?>请选择<?php }?></span>
            <select name="mun" id="mun" class="textval" onchange="ckcom('mun')">
			<option value="">请选择</option>
			  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_mun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['mun']==$_smarty_tpl->tpl_vars['v']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</option>
              <?php } ?>
            </select>
          </div>
        </div>
      </div>
      <div class="yun_wap_addresume_box_group">
        <div class="yun_wap_addresume_box_label">所在城市 <span class="resume-cont_wate_bj">*</span> </div>
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
          <div class="selectOption none" style="width:31%;<?php if ($_smarty_tpl->tpl_vars['row']->value['three_cityid']<1) {?>display:none;<?php }?>"  id="cityshowth">
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
        <div class="yun_wap_addresume_box_label"> 企业地址 <span class="resume-cont_wate_bj">*</span> </div>
        <div class="yun_wap_addresume_box_control">
          <input type="text" name="address" id='address' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
" placeholder="请填写企业地址" class="yun_wap_addresume_text">
        </div>
      </div>
      <div class="yun_wap_addresume_box_group">
        <div class="yun_wap_addresume_box_label"> 联&nbsp;&nbsp;系&nbsp; 人 <span class="resume-cont_wate_bj">*</span> </div>
        <div class="yun_wap_addresume_box_control">
          <input type="text" name="linkman" id="linkman" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linkman'];?>
" placeholder="请填写" class="yun_wap_addresume_text">
        </div>
      </div>
      
      <div class="yun_wap_addresume_box_group">
        <div class="yun_wap_addresume_box_label"> 联系手机 <span class="resume-cont_wate_bj">*</span> </div>
        <div class="yun_wap_addresume_box_control"> <?php if ($_smarty_tpl->tpl_vars['row']->value['moblie_status']==1) {?>
          <?php echo $_smarty_tpl->tpl_vars['row']->value['linktel'];?>
 <a href="index.php?c=binding" style="color:red;">重新认证</a>
          <input type="hidden" name="linktel" id="linktel" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linktel'];?>
">
          <?php } else { ?>
          <input type="text" name="linktel" id="linktel" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linktel'];?>
" class="yun_wap_addresume_text" placeholder="联系手机">
          <?php }?> </div>
      </div>
	  <div class="yun_wap_addresume_box_group">
        <div class="yun_wap_addresume_box_label"> 联系电话 </div>
        <div class="yun_wap_addresume_box_control">
          <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['phone'];?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" name="phone" id="phone" placeholder="区号" class="yun_wap_addtel_a">
          <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['phonetwo'];?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" name="phonetwo" id="phonetwo" placeholder="座机号" class="yun_wap_addtel_b">
          <input type="text"  name="phonethree" id='phonethree' onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['phonethree'];?>
" placeholder="分机号" class="yun_wap_addtel_c">
        </div>
      </div>
      <div class="yun_wap_addresume_box_group">
        <div class="yun_wap_addresume_box_label"> 企业邮箱 <span class="resume-cont_wate_bj">*</span> </div>
        <div class="yun_wap_addresume_box_control"> <?php if ($_smarty_tpl->tpl_vars['row']->value['email_status']==1) {?>
          <?php echo $_smarty_tpl->tpl_vars['row']->value['linkmail'];?>
<a href="index.php?c=binding" style="color:red;">重新认证</a>
          <input type="hidden" name="linkmail" id="linkmail" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linkmail'];?>
">
          <?php } else { ?>
          <input type="text" name="linkmail" id='linkmail' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linkmail'];?>
" class="yun_wap_addresume_text" placeholder="企业邮箱">
          <?php }?> </div>
      </div>
      <div class="yun_wap_addresume_box_group">
        <div class="yun_wap_addresume_box_label"> 企业简介 <span class="resume-cont_wate_bj">*</span> </div>
        <div class="yun_wap_addresume_box_control">
          <textarea class="textAreaMsg tip" id="content" name="content" placeholder="请输入企业简介描述500字以内"><?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
</textarea>
        </div>
      </div>
      <div class="info-table-value"><a class="iconfont form-show-btn" href="javascript:void(0)" id="showInfo" onclick="showInfo()">展开选填信息</a></div>
      <div class="yun_wap_xtbox" style="display:none">
      <input type="hidden" id="shownum" value="1">
		 <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label">创办日期</div>
          <div class="yun_wap_addresume_box_control">
            <input type="text" id="sdate" name="sdate" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['sdate'];?>
" class="yun_wap_addresume_text" placeholder="请选择"> </div>
        </div>
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label">注册资金</div>
          <div class="yun_wap_addresume_box_control">

          <div class="selectOption" style="width:60px;">
			<select name='moneytype' onchange="checkmoneytype(this.value)">

				<option value='1' <?php if ($_smarty_tpl->tpl_vars['row']->value['moneytype']==1) {?>selected<?php }?>>人民币</option>
				<option value='2' <?php if ($_smarty_tpl->tpl_vars['row']->value['moneytype']==2) {?>selected<?php }?>>美元</option> 
			  </select>
              </div>
            <input type="text" id="money" name="money" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['money'];?>
" class="yun_wap_addtel_a"  onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" placeholder="注册资金">
            <span class="moneyname"><?php if ($_smarty_tpl->tpl_vars['row']->value['moneytype']==1) {?>万元<?php } else { ?>万美元<?php }?></span> </div>
        </div>
      
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label">联系人职称</div>
          <div class="yun_wap_addresume_box_control">
            <input type="text" id="linkjob" name="linkjob" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linkjob'];?>
" class="yun_wap_addresume_text" placeholder="例如：经理/主任">
          </div>
        </div>
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label">联 系 QQ</div>
          <div class="yun_wap_addresume_box_control">
            <input type="text" id="linkqq" name="linkqq" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['linkqq'];?>
" class="yun_wap_addresume_text" maxlength='12' onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" placeholder="联系QQ">
          </div>
        </div>
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label">企业网址</div>
          <div class="yun_wap_addresume_box_control">
            <input type="text" id="website" name="website" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['website'];?>
" class="yun_wap_addresume_text" placeholder="企业网址">
          </div>
        </div>
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label">公交站点</div>
          <div class="yun_wap_addresume_box_control">
            <textarea class="textAreaMsg tip" id="busstops" name="busstops" placeholder="公交站点" style="height:80px;border:1px solid #ddd"><?php echo $_smarty_tpl->tpl_vars['row']->value['busstops'];?>
</textarea>
          </div>
        </div>
        <div class="yun_wap_addresume_box_group">
        <div class="yun_wap_addresume_box_label"> 联系方式  </div>
        <div class="yun_wap_addresume_box_control">
          <div class="select"> <span class="txt infostatus"><?php if ($_smarty_tpl->tpl_vars['row']->value['infostatus']==1) {?>公开<?php } elseif ($_smarty_tpl->tpl_vars['row']->value['infostatus']==2) {?>不公开<?php } else { ?>请选择<?php }?></span>
            <select name="infostatus" id="infostatus" class="textval" onchange="ckcom('infostatus')">
              <option value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['infostatus']==1) {?>selected="selected"<?php }?>>公开</option>
              <option value="2" <?php if ($_smarty_tpl->tpl_vars['row']->value['infostatus']==2) {?>selected="selected"<?php }?>>不公开</option>
            </select>
          </div>
        </div>
      </div>
      <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label">公司二维码</div>
          <div class="yun_wap_addresume_box_control">
           <div class="yun_wap_addresume_box_ewm">
         <i class="user_ewm_photo_img"></i>
          <span class="user_ewm_photo_b"> 公司二维码</span>
          
            <input type="file" id="comqcode" name="comqcode"   class="user_ewm_photo_b_file" accept="image/*">
          </div>        </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['row']->value['comqcode']) {?>
        <div class="yun_wap_addresume_box_group">
          <div class="yun_wap_addresume_box_label"></div>
          <div class="yun_wap_addresume_box_control">
            <img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['comqcode'];?>
" width="100" height="100">
          </div>
        </div>
        <?php }?>
        <div class="yun_wap_addresume_box_group" style=" padding:10px 15px 10px 10px">
          <div  style="color:#999">  福利待遇</div>
            <span class="" id="addwelfarelist">
 		         <?php  $_smarty_tpl->tpl_vars['tv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value['arraywelfare']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tv']->key => $_smarty_tpl->tpl_vars['tv']->value) {
$_smarty_tpl->tpl_vars['tv']->_loop = true;
?>
		         <label class="jobadd_span changewelfare" for="welfare_<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
"  data-tag="<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
" style="width:46%;">
              <input type="checkbox" class="changewelfare" name="welfare[]" value="<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
"  data-tag="<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
" id="welfare_<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['arraywelfare']&&in_array($_smarty_tpl->tpl_vars['tv']->value,$_smarty_tpl->tpl_vars['row']->value['arraywelfare'])) {?>checked<?php }?>>
              <?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
 </label>
		        <?php } ?>
		        </span>
		        
 		          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_welfare']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
 		          <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
<?php $_tmp1=ob_get_clean();?><?php if (!in_array($_tmp1,$_smarty_tpl->tpl_vars['row']->value['arraywelfare'])) {?>
 		           <label class="jobadd_span changewelfare" for="welfare_<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
"  data-tag="<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" style="width:46%;">
              		<input type="checkbox" class="changewelfare" name="welfare[]" value="<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" data-tag="<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" id="welfare_<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['arraywelfare']&&in_array($_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value],$_smarty_tpl->tpl_vars['row']->value['arraywelfare'])) {?>checked<?php }?>>
              		<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
 </label>
		        <?php }?>
				 <?php } ?>
            
             <div class="yun_resume_tjbq_bth"><input class="yun_resume_tjbq_text" type="text" tabindex="1000" id="addwelfare" ><a class="yun_resume_tjbq_text_bt addwelfarebox">添加福利</a></div>
        </div>
       </div>
      </div>
      <div class="yun_wap_addresume_box_group" style="background: transparent; border: none;">
        <input type="submit" name="submit" value="保存" class="reinputText2">
      </div>
    </form>
  </div>
</section>
</div>
<div class="clear"></div>
<?php echo '<script'; ?>
 type="text/javascript">
var ue = UE.getEditor('content',{
	toolbars: false,elementPathEnabled:false,wordCount:false,autoHeightEnabled:false
}); 
function showInfo(){
	shownum=$("#shownum").val();
	if(shownum=='1'){
		$('.yun_wap_xtbox').toggle();
		$("#showInfo").html('收起选填信息');
		$("#shownum").val('2');
	}else if(shownum=='2'){
		$('.yun_wap_xtbox').toggle();
		$("#showInfo").html('展开选填信息');
		$("#shownum").val('1');
	}
}
function zhankaiShouqi(control){
	$(control).parent().find('.jobadd_span:gt(5)').slideToggle(1000);
	if($(control).html()=='更多'){
		$(control).html('收起');
	}else{
		$(control).html('更多');
	}
}
//添加福利
$('.addwelfarebox').click(function(){
	var welfare = $('#addwelfare').val();
	var error=0;
	if(welfare.length>=2 && welfare.length<=8){
		//判断信息是否已经存在 
		$('.changewelfare').each(function(){
			var otag = $(this).attr('data-tag');
			if(welfare == otag){
				layermsg('相同福利已存在，请选择或重新填写！');
				error = 1;
			}
		});
		if(error==0){
			$('#addwelfarelist').append('<label class="jobadd_span changewelfare" for="welfare_'+welfare+'" style="width:46%;"><input type="checkbox" class="changewelfare" name="welfare[]" value="'+welfare+'" id="welfare_'+welfare+'" checked >'+welfare+' </label>');
		}
		$('#addwelfare').val('');
	}else{
		layermsg('请输入2-8个福利字符！');
	}
});
function checkmoneytype(id){
	if(id==1){
		$(".moneyname").html('万元');
	}else{
		$(".moneyname").html('万美元');
	}
}
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
