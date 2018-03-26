<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-25 12:09:14
         compiled from "D:\xampp\htdocs\uploads\app\template\admin\admin_evaluate_examup.htm" */ ?>
<?php /*%%SmartyHeaderCode:18618634005a9236ead60314-34250415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e152023c02347ee4ff832a52504cbcb7d6c05a4f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\admin\\admin_evaluate_examup.htm',
      1 => 1518061120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18618634005a9236ead60314-34250415',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'info' => 0,
    'group_all' => 0,
    'v' => 0,
    'ask' => 0,
    'fullscore' => 0,
    'key' => 0,
    'pytoken' => 0,
    'value' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a9236eb00c3d4_43287105',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9236eb00c3d4_43287105')) {function content_5a9236eb00c3d4_43287105($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
> var weburl = '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
';<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript" type="text/javascript"><?php echo '</script'; ?>
> 
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>

<title>后台管理</title>
</head>
<body class="body_ifm">

<div class="infoboxp">

<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">该页面展示了网站添加测评试卷，可添加测评试卷操作。</div>
</div>
</div>
<div class="admin_new_search_box"> 
 <a href="index.php?m=admin_evaluate" class="admin_new_cz_tj" style=" margin-left:0px;">测评列表</a>
   <a href="index.php?m=admin_evaluate&c=group" class="admin_new_cz_tj">+ 类别管理</a>
  </div>
  <div class="clear"></div>
  <div class="admin_table_border">
    <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"> </iframe>
   <form id="cpform" name="myform" target="supportiframe" action="index.php?m=admin_evaluate&c=examupsave" method="post" encType="multipart/form-data" class="layui-form"> 
      <table class="table_form" width="100%">
		<tr>
			<th width="120">缩略图：</th>
			<td colspan="3"> 
			<button type="button" class="yun_bth_pic adminupload" lay-data="{name: 'pic',imgid: 'imgicon',parentid: 'imgparent'}">上传图片</button>
			<input type="hidden" id="layupload_type" value="2"/>
			<input type="hidden" id="upload_path" value="evaluate"/>
			<input type="hidden" name="pic" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['pic'];?>
"/>
			</td>
		</tr>		
		<tr id="imgparent" <?php if (!$_smarty_tpl->tpl_vars['info']->value['pic']) {?>class="none"<?php }?>>
			<th width="120">现使用图片：</th>
			<td colspan="3">  
				<img id="imgicon" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['pic'];?>
" width='200' height='100'/>
			</td>
		</tr>  
        <tr>
          <th width="120">测评试卷分组：</th>
          <td colspan="3">
          <div class="layui-input-inline">
		      <select name="selectgroup" id="selectgroup">
			    <?php if ($_smarty_tpl->tpl_vars['info']->value['keyid']) {?>
		 		  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group_all']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	                    <?php if ($_smarty_tpl->tpl_vars['v']->value['id']==$_smarty_tpl->tpl_vars['info']->value['keyid']) {?>
	                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
	                    <?php } else { ?>
	                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
	                    <?php }?>
	                <?php } ?>
	            <?php } else { ?>
	                <option value="">请选择</option>
	            <?php }?>
		        
		        <?php if (!$_smarty_tpl->tpl_vars['info']->value['keyid']) {?>
			        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group_all']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	                	<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
	                <?php } ?>
                <?php }?>
                
		      </select>
		    </div>
			<?php if (!$_smarty_tpl->tpl_vars['group_all']->value) {?><span style="font-size:20px; color:red; display:inline-block; line-height:34px;">请先添加测评类别</span><?php }?>
          </td>
        </tr> 
      	<tr>
        	<th width="120">测评试卷名称：</th>
            <td colspan="4">
            
          <div class="layui-form-item">
            <div class="layui-input-block">
              <input type="text" name="examtitle" id="examtitle"  lay-verify="required" placeholder="请输入测评试卷名称" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
"  autocomplete="off" class="input-text" style="display:inline;">
              <label style="font-size:20px; color:red;">共<?php echo count($_smarty_tpl->tpl_vars['ask']->value);?>
道题，<?php echo $_smarty_tpl->tpl_vars['fullscore']->value;?>
分</label>
            </div>
          </div>
            
            </td>
        </tr>  
		<tr>
			<th width="120">试卷排序：</th>
			<td colspan="3"> 
				<div class="layui-form-item">
		            <div class="layui-input-block">
		              <input type="text" name="sort" id="sort"  lay-verify="required" placeholder="请输入试卷排序" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['sort'];?>
" size="5"  autocomplete="off" class="input-text">
		            </div>
	          	</div>
			</td>
		</tr> 
		<tr>
			<th width="120">试卷属性：</th>
			<td colspan="3">
			<div class="layui-form-item">
		        <div class="layui-input-block">
		          <input name="top" title="首页幻灯" value="1" <?php if ($_smarty_tpl->tpl_vars['info']->value['top']=='1') {?>checked="checked"<?php }?> type="checkbox">
		        <input name="hot" title="头条" value="1" <?php if ($_smarty_tpl->tpl_vars['info']->value['hot']=='1') {?>checked="checked"<?php }?> type="checkbox">
		        <input name="recommend" title="推荐" value="1" <?php if ($_smarty_tpl->tpl_vars['info']->value['recommend']=='1') {?>checked="checked"<?php }?> type="checkbox">
		        </div>
		      </div>
			</td> 
		</tr> 
          <tr>
              <th  width="120">描　　述：</th>
              <td colspan="3">
            <div class="layui-form-item">
			  <div class="layui-input-block">
				<textarea name="description" id='description' cols="100" rows="3" placeholder="请输入描述"   lay-verify="required" class="layui-input input-text"  style="display:inline;width:452px;padding-left:5px;" autocomplete="off"><?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
</textarea>
			  </div>
			</div>    
              
              </td>
          </tr>
		  <tr><td colspan="4"> 
            <div class='table_form' style="padding: 10px 0 10px 0px;background: #f1f1f1 none repeat scroll 0 0;float:left;width:100%">
			<span style="float:left; padding-left:10px;"><font style="color:#3a6ea5;line-height:35px;">评语管理</font> </span>
			<span style="float:left;margin-left:20px;">
			<a class="admin_infoboxp_nav admin_infoboxp_tj newcommentbtn" href="javascript:void(0)">添加评语</a> 
			<?php if ($_smarty_tpl->tpl_vars['info']->value['id']) {?><a class="admin_infoboxp_nav admin_infoboxp_sc delcommentbtn" href="javascript:void(0)">删除评语</a> <?php }?> 
			</span>
		</div>  
		  </td></tr> 
      <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value['fromscore']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
	  <tr>
		  <th width="120">成绩：</th>
		  <td>
			  <input type="text" class="input-text" size='4' name="fromscore[]" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['fromscore'][$_smarty_tpl->tpl_vars['key']->value];?>
" style="width:80px;"/> 分到 <input type="text" name="toscore[]" class="input-text" size='4' value="<?php echo $_smarty_tpl->tpl_vars['info']->value['toscore'][$_smarty_tpl->tpl_vars['key']->value];?>
" style="width:80px;"/> 分
		   </td>
		   <td>评语：</td>
		  <td>
			<textarea name="comment[]" cols="80" rows="3" placeholder=" 请输入评语"  class="web_compl_textarea"><?php echo $_smarty_tpl->tpl_vars['info']->value['comment'][$_smarty_tpl->tpl_vars['key']->value];?>
</textarea>
			
		  </td>
	  </tr> 
      <?php } ?>
		<tr id="newCommentTr"> 
		  <td colspan='3'></td>
			  <td>
				  <input type="button" value="<?php if ($_smarty_tpl->tpl_vars['info']->value['id']) {?>保存<?php } else { ?>下一步<?php }?>" onclick="checkform()" class="layui-btn layui-btn-normal"/> 
			  </td>
		</tr>
      </table>    
      <input id="pytoken" type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
      <input type="hidden" name="examid" id="examid" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
">      
	</form>   
	<?php if ($_smarty_tpl->tpl_vars['info']->value['id']) {?>
		<div class='table_form' style="padding: 10px 0 10px 0px;background: #f1f1f1 none repeat scroll 0 0;float:left;width:100%">
			<span style="float:left; padding-left:10px;"><font style="color:#3a6ea5;height:31px;line-height:31px;">题目管理</font> </span>
			<span style="float:left;margin-left:20px;">
			<a class="admin_infoboxp_nav admin_infoboxp_tj showAddQuestionBtn" style="margin-top:6px;" href="javascript:void(0)">添加题目</a>   
			</span>
		</div>     
      <!--浏览问题 区域-->
      <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ask']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<table id="lookQuestion[<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
]" name="lookQuestion[<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
]" class="table_form" width="100%" >
      		<tr>
            	<th width="120">问题　<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
：</th>

                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['question'];?>
 </td>
                <td width="240"><input class="layui-btn layui-btn-normal" type="button" value="修改该题" onClick="editquestion(<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
)"/></td>
            </tr>
            <!--选项和分值-->
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value['option']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <tr style="display:none;" >
            	<th>选项<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
：</th>
                <td><?php echo $_smarty_tpl->tpl_vars['ask']->value[$_smarty_tpl->tpl_vars['key']->value]['option'][$_smarty_tpl->tpl_vars['k']->value];?>
</td>
                <td>分值：(<?php echo $_smarty_tpl->tpl_vars['ask']->value[$_smarty_tpl->tpl_vars['key']->value]['score'][$_smarty_tpl->tpl_vars['k']->value];?>
分)</td>
            </tr>
            <?php } ?>
		</table>
   
      <!--修改问题-->
		<table id="tQuestion[<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
]" name="tQuestion[<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
]" class="table_form hidden" width="100%" style=" border:1px solid; display:none;">
      		<tr>
            	<th width="120" name="th_que_id">问题　<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
：</th>
                <td >
                	<textarea id="textarea<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" placeholder=" 请输入问题" style="display:inline;width:255px;" name="question[<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
]" ><?php echo $_smarty_tpl->tpl_vars['value']->value['question'];?>
</textarea>
                    <input id="createOption<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" type="button" name="createOption<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" value="添加选项" class="layui-btn layui-btn-normal" onclick="createOption(<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
)"/>
                	<input id="delOption<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" type="button" name="delOption<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" value="删除选项" class="layui-btn layui-btn-normal" onclick="delOption(<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
)"/>
                    <input id="delQuestion<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" type="button" name="delQuestion<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" value="删除该题" class="layui-btn layui-btn-normal" onclick="layer_del('确定要删除？', 'index.php?m=admin_evaluate&c=delquestion&qid=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
');" />
                    <input id="saveQuestion<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" type="button" name="saveQuestion<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" value="更新该题" class="layui-btn layui-btn-normal" onclick="saveQuestion(<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
)"/>
                    <input id="abandonSave<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" type="button" name="abandonSave<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" value="放弃修改" class="layui-btn layui-btn-normal" onclick="abandonSave(<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
)"/>
                </td>
            </tr>
            <!--选项和分值-->
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value['option']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <tr>
            	<th>选项<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
：</th>
                <td><input type="text"  class="input-text" placeholder=" 请输入选项" name="option[<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
][]" value="<?php echo $_smarty_tpl->tpl_vars['ask']->value[$_smarty_tpl->tpl_vars['key']->value]['option'][$_smarty_tpl->tpl_vars['k']->value];?>
" size="50"/>分值：<input type="text" name="score[<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
][]" placeholder=" 请输入分值" value="<?php echo $_smarty_tpl->tpl_vars['ask']->value[$_smarty_tpl->tpl_vars['key']->value]['score'][$_smarty_tpl->tpl_vars['k']->value];?>
" size='5' class="input-text"/>
				</td>
            </tr>
            <?php } ?>
            <tr id="actionTr<?php echo $_smarty_tpl->tpl_vars['ask']->value[$_smarty_tpl->tpl_vars['key']->value]['id'];?>
"></tr>
      </table>
      <?php } ?> 
      <div id="divSeparat"></div>
      <table  class="table_form" width="100%"  height="50px" >
			<tr >
          		<td colspan="2" align="center">
                </td>
        	</tr>
      </table>
	<?php }?>
   </div>
</div> 
<div id="divExamInfo" style="position: fixed; _position:absolute; text-align: center; bottom: 15px; cursor: pointer; right: 40px; border: 1px solid #1178c3;background-color: white; width:84px;">
<div style="width:100%;height:28px; line-height:28px; background: #1178c3;color:#fff; font-weight:bold;font-size: 12px; ">问题/总分</div>
<div style="padding:0px 5px; font-size:12px; line-height:25px;">
    <table>
    	<tr><td>问题：</td><td><?php echo count($_smarty_tpl->tpl_vars['ask']->value);?>
道</td></tr>
        <tr><td>总分：</td><td><?php echo $_smarty_tpl->tpl_vars['fullscore']->value;?>
分</td></tr>
    </table>
    </div>
</div>
<style>
.layui-form-item {
    margin-bottom: 0px;
    clear: both;
}
</style>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui.upload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type='text/javascript'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" type="text/javascript">
  layui.use(['layer', 'form','element'], function(){
    var layer = layui.layer
    ,form = layui.form
	,element = layui.element
    ,$ = layui.$;

  });

//添加选项 按钮
function createOption(tableNameId){
	//先获取该题已有选项的个数
	var optionArray = $("input[name='option["+tableNameId+"][]']");
	var optionId = Number(optionArray.length)+1;
	var oTr=
		'<tr>'
			+'<th>选项'+optionId+'：</th>'
			+'<td><input type="text" name="option['+tableNameId+'][]" placeholder=" 请输入选项" size="50" class="input-text"/>分值：<input type="text" placeholder=" 请输入分值" name="score['+tableNameId+'][]" class="input-text" size="5"/></td>'
		+'</tr>'
	$("#actionTr"+tableNameId).before(oTr);
	$("#delOption"+tableNameId).css({opacity: "1",filter: "alpha(opacity=100)"});
}

//删除选项 按钮
function delOption(tableNameId){
	var optionArray = $("input[name='option["+tableNameId+"][]']");
	var scoreArray = $("input[name='score["+tableNameId+"][]']");
	if(Number(optionArray.length)==Number(scoreArray.length) && Number(optionArray.length) > 1){
		$("#actionTr"+tableNameId).prev().remove();
	}else{
		$("#delOption"+tableNameId).css({opacity: "0.4",filter: "alpha(opacity=40)"});
	}
}

//删除该题 按钮
//在客户端添加问题后，删除该新问题
function delQuestion(tableNameId){
	$("table[name='tQuestion["+tableNameId+"]']").remove();
	$(".showAddQuestionBtn").show();
}

$(document).ready(function() {
	/*点击 添加问题*/
    $(".showAddQuestionBtn").click(function(){
	    var examid = $("#examid").val();
		if(!examid){
		    layer.msg("请先完成上面的试卷添加操作",2,8);return false;
		}
		if($("#divSeparat").prev().attr("name")){
		    var tableNameId=Number(($("#divSeparat").prev().attr("name")).match(/\d+/g))+1; 
		}else{
		    var tableNameId=1;
		}
		var quesId = Number($("table[name^='tQuestion']").length)+1;
		var tpl=
		'<table name="tQuestion['+tableNameId+']" class="table_form" width="100%" border="1px solid #000;">'
      		+'<tr>'
            	+'<th width="120" name="th_que_id">问题 '+quesId+'：</th>'
                +'<td>'
                	+'<textarea name="question['+tableNameId+']" placeholder=" 请输入问题" style="display:inline;width:255px;" rows="2" cols="100" class="web_compl_textarea"></textarea> '
                    +'<input id="createOption'+tableNameId+'" type="button" name="createOption'+tableNameId+'" value="添加选项" class="layui-btn layui-btn-normal" onclick="createOption('+tableNameId+')"/> '
                	+'<input id="delOption'+tableNameId+'" type="button" name="delOption'+tableNameId+'" value="删除选项" class="layui-btn layui-btn-normal" onclick="delOption('+tableNameId+')"/> '
                    +'<input id="delQuestion'+tableNameId+'" type="button" name="delQuestion'+tableNameId+'" value="删除该题" class="layui-btn layui-btn-normal" onclick="delQuestion('+tableNameId+')"/> '
					+'<input id="saveNewQuestion'+tableNameId+'" type="button" name="saveNewQuestion'+tableNameId+'" value="保存该题" class="layui-btn layui-btn-normal" onclick="saveNewQuestion('+tableNameId+')"/> '
                +'</td>'
            +'</tr>'
            +'<tr>'
            	+'<th>选项1：</th>'
                +'<td><input type="text" name="option['+tableNameId+'][]" placeholder=" 请输入选项" size="50" class="input-text"/>分值：<input type="text" name="score['+tableNameId+'][]" placeholder=" 请输入分值" class="input-text" size="5"/></td>'
            +'</tr>'
             +'<tr>'
            	+'<th>选项2：</th>'
                +'<td><input type="text" name="option['+tableNameId+'][]" placeholder=" 请输入选项" size="50" class="input-text"/>分值：<input type="text" name="score['+tableNameId+'][]" placeholder=" 请输入分值" class="input-text" size="5"/></td>'
            +'</tr>'
            +'<tr id="actionTr'+tableNameId+'">'
        	+'</tr>'
         +'</table>';
		 
		 $("#divSeparat").before(tpl);		
		 $(".showAddQuestionBtn").hide();

	}); 
	
	/*限制 分值 为数字*/
	$("input[name^='score']").live("keyup",function(){
		//this.value = this.value.replace(/([\D]+)|^([0].+)|(^[^1][\d]{2,})|(^[1][^0][^0])|(^[1][0][^0])|(^[1][^0][0])|([\d]{4,})/igm,"");
		setNumber(this);
	});
	 
	/*添加评语*/
	$(".newcommentbtn").click(function(){
		var newtr = '<tr>'
				+'<th>成绩：</th>'
				+'<td>'
            	+'<input type="text" size="4" class="input-text" name="fromscore[]" style="width:80px;"/> 分到'
                +'<input type="text" size="4" name="toscore[]" class="input-text"/style="width:80px;"> 分'
				+'</td>'
            	+'<td>评语：</td>'
            	+'<td><textarea name="comment[]" cols="80" rows="3" placeholder=" 请输入评语" class="web_compl_textarea"></textarea></td></tr>';
		$("#newCommentTr").before(newtr);
		$("input[name='delcomment']").css({opacity: "1",filter: "alpha(opacity=100)"});
	});
	
	/*删除评语*/
	$(".delcommentbtn").click(function(){
		var commentSet=$("input[name='fromscore[]']");
		if(commentSet.length<=2){
			parent.layer.msg('再删就没有啦！',2,8);return false;
			//$(".delcommentbtn").css({opacity: "0.4",filter: "alpha(opacity=40)"});
		}else{
			$("#newCommentTr").prev().remove();
		}
	});
	/*限制 分数、排序 为数字*/
	$("input[name='fromscore[]']").live("keyup",function(){setNumber(this);});
	$("input[name='toscore[]']").live("keyup",function(){setNumber(this);	});
	$("input[name='sort']").live("keyup",function(){ this.value = this.value.replace(/([\D]+)|^([0].+)/igm,"");});
	
}); 
 
/*设置分值为三位数纯数字*/
function setNumber(obj){obj.value=obj.value.replace(/([\D]+)|^([0].+)|([\d]{4,})/igm,"");};

/*点击问题，编辑修改*/
function editquestion(id){
	$("table[name='lookQuestion["+id+"]']").hide();
	$("table[name='tQuestion["+id+"]']").show();
}
/*放弃修改问题*/
function abandonSave(id){
	$("table[name='lookQuestion["+id+"]']").show();
	$("table[name='tQuestion["+id+"]']").hide();
}

/*更新该题*/
function saveQuestion(id){
	var questid = id;
	var question = $("textarea[name='question["+id+"]']").val();
	var option_arr = $("input[name='option["+id+"][]']");
	var option=new Array();
	var score_arr = $("input[name='score["+id+"][]']");
	var score=new Array();
	for(var i=0; i<option_arr.length; i++){
		if(option_arr[i].value){
			option[i] = option_arr[i].value;
		}
		if(score_arr[i].value){
			score[i] = score_arr[i].value;
		} 
	}
	if(question==''||option==''||score==''){
		layer.msg("问题、选项、分值都不能为空！！",2,8);return false;
	} 
	var url="index.php?m=admin_evaluate&c=ajaxsave";
	var sendinfo={
		questid:questid,
		question:question,
		option:option,
		score:score,
		status:"up",
		pytoken:$("#pytoken").val()
	};
	loadlayer();
	$.post(url,sendinfo,function(data){
		parent.layer.closeAll();
		if(data!=1){config_msg(data);}else{location.reload();}
	});
}
  
/*保存新题*/
function saveNewQuestion(tableNameId){
	var examid = $("#examid").val();
	var question = $.trim($("textarea[name='question["+tableNameId+"]']").val());
	var option_arr = $("input[name='option["+tableNameId+"][]']");
	var score_arr = $("input[name='score["+tableNameId+"][]']");
	var option = new Array();
	var score = new Array();
	for(var i=0; i<option_arr.length; i++){
		option[i] = option_arr[i].value;
		score[i] = score_arr[i].value;
	};
	if(question==''||option==''||score==''){
		layer.msg("问题、选项、分值都不能为空！！",2,8);return false;
	}
	var url="index.php?m=admin_evaluate&c=ajaxsave";
	var sendinfo={
		examid:examid,
		question:question,
		option:option,
		score:score,
		status:"savenewquestion",
		pytoken:$("#pytoken").val()
	};
	loadlayer();
	$.post(url,sendinfo,function(data){
		parent.layer.closeAll();
		if(data!=1){config_msg(data);}else{location.reload();}
	});
} 
function checkform(){
	var examtitle=$.trim($("#examtitle").val());
 	var selectgroup=$.trim($("#selectgroup").val());
	var description=$.trim($("#description").val());
	parent.layer.closeAll();
	if(selectgroup==''){
		layer.msg('请选择测评分组！',2,8);return false;
	}
	if(examtitle==''){
		layer.msg('请填写测评名称！',2,8);return false;
	}
	var mtype='';
	$("input[name='fromscore[]']").each(function(){  
		if($(this).val()==''){
			mtype=1;
		}
	});
	$("input[name='toscore[]']").each(function(){  
		if($(this).val()==''){
			mtype=1; 
		}
	});
	$("textarea[name='comment[]']").each(function(){  
		if($(this).val()==''){
			mtype=1; 
		}
	});
	if(mtype!=''){
		layer.msg('请完善评语管理！',2,8);return false;
	}
	$("#cpform").submit();
}
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
