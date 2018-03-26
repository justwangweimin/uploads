<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 16:37:54
         compiled from "D:\xampp\htdocs\uploads\app\template\admin\admin_question_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:18219854815ab0c8623a2e50-69277191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bf3930b3aff225ef2ada6ce8a29c67541d0f0b1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\uploads\\app\\template\\admin\\admin_question_list.htm',
      1 => 1517041899,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18219854815ab0c8623a2e50-69277191',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'question' => 0,
    'key' => 0,
    'v' => 0,
    'pagenav' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0c86299d8f0_72983060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0c86299d8f0_72983060')) {function content_5ab0c86299d8f0_72983060($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.searchurl.php';
if (!is_callable('smarty_function_url')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\function.url.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\uploads\\app\\include\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
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
<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
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
<div class="admin_new_tip_list">该页面展示了网站所有的公司问答信息，可对问答进行审核删除操作。</div>
<div class="admin_new_tip_list">可输入名称关键字进行搜索，也可进行详细的高级搜索。</div>
</div>
</div>

<div class="clear"></div>

<div class="admin_new_search_box"> 
 <form action="index.php" name="myform" method="get">
      <input name="m" value="admin_question" type="hidden"/>
      	<div class="admin_new_search_name">搜索类型：</div>
   <div class="admin_Filter_text formselect" did='dtype'>
          <input type="button" value="<?php if ($_GET['type']=='1'||$_GET['type']=='') {?>标题 <?php } elseif ($_GET['type']=='2') {?>提问者昵称<?php }?>" class="admin_Filter_but" id="btype">
         <input type="hidden" name="type" id="type" value="<?php if ($_GET['type']) {
echo $_GET['type'];
} else { ?>1<?php }?>"/>
          <div class="admin_Filter_text_box" style="display:none" id='dtype'>
            <ul> 
              <li><a href="javascript:void(0)" onClick="formselect('1','type','标题')">标题</a></li>
			  <li><a href="javascript:void(0)" onClick="formselect('2','type','提问者昵称')">提问者昵称</a></li>
            </ul>
          </div>
        </div>
        <input type="text" placeholder="输入你要搜索的关键字" value="<?php echo $_GET['keyword'];?>
" name='keyword' class="admin_Filter_search">
        <input type="submit" value="搜索" class="admin_Filter_bth">
	<a  href="javascript:void(0)" onclick="$('.admin_screenlist_box').toggle();"   class="admin_new_search_gj">高级搜索</a></form>
    <?php echo $_smarty_tpl->getSubTemplate ("admin/admin_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </div>
<div class="clear"></div> 


  <div class="table-list">
    <div class="admin_table_border">
      <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
      <form action="index.php" name="myform" method="get" target="supportiframe" id='myform'>
        <input name="m" value="admin_question" type="hidden"/>
        <input name="c" value="del" type="hidden"/>
        <table width="100%">
          <thead>
            <tr class="admin_table_top">
              <th style="width:20px;"><label for="chkall">
                  <input type="checkbox" id='chkAll'  onclick='CheckAll(this.form)'/>
                </label></th>
              
              <th style="width:60px;">
			  <?php if ($_GET['t']=="id"&&$_GET['order']=="asc") {?>
			  <a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'id','m'=>'admin_question','untype'=>'order,t'),$_smarty_tpl);?>
">编号<img src="images/sanj.jpg"/></a>
              <?php } else { ?>
              <a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'id','m'=>'admin_question','untype'=>'order,t'),$_smarty_tpl);?>
">编号<img src="images/sanj2.jpg"/></a>
              <?php }?>
			  </th>
              <th align="left" style="width:250px;">标题</th>
              <th align="left">问题类别</th>
              <th align="left">提问者昵称</th>
              <th>
			  <?php if ($_GET['t']=="answer_num"&&$_GET['order']=="asc") {?>
			  <a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'answer_num','m'=>'admin_question','untype'=>'order,t'),$_smarty_tpl);?>
">回答数<img src="images/sanj.jpg"/></a>
              <?php } else { ?>
              <a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'answer_num','m'=>'admin_question','untype'=>'order,t'),$_smarty_tpl);?>
">回答数<img src="images/sanj2.jpg"/></a>
              <?php }?>
			  </th>
              <th >是否推荐</th>
              <th>审核状态</th>
              <th>
			  <?php if ($_GET['t']=="add_time"&&$_GET['order']=="asc") {?>
			  <a href="<?php echo smarty_function_searchurl(array('order'=>'desc','t'=>'add_time','m'=>'admin_question','untype'=>'order,t'),$_smarty_tpl);?>
">提问时间<img src="images/sanj.jpg"/></a>
              <?php } else { ?>
              <a href="<?php echo smarty_function_searchurl(array('order'=>'asc','t'=>'add_time','m'=>'admin_question','untype'=>'order,t'),$_smarty_tpl);?>
">提问时间<img src="images/sanj2.jpg"/></a>
              <?php }?>
			  </th>
              <th class="admin_table_th_bg">操作</th>
            </tr>
          </thead>
          <tbody>
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['question']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
          <tr align="center"<?php if (($_smarty_tpl->tpl_vars['key']->value+1)%2=='0') {?>class="admin_com_td_bg"<?php }?> id="list<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
            <td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="check_all" name='del[]' onclick='unselectall()' rel="del_chk" /></td>
            <td align="left" class="td1" style="text-align:center;"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</span></td>
            <td class="od" align="left" style="width:250px;"><a href="<?php echo smarty_function_url(array('m'=>'ask','c'=>'content','id'=>$_smarty_tpl->tpl_vars['v']->value['id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
            </td>
            <td align="left"><?php if ($_smarty_tpl->tpl_vars['v']->value['classname']) {
echo $_smarty_tpl->tpl_vars['v']->value['classname'];
} else { ?><font color="red">类别已被删除</font><?php }?></td>
            <td align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
            <td>
            <?php if ($_smarty_tpl->tpl_vars['v']->value['answer_num']) {?><div style="color:#f00"><?php echo $_smarty_tpl->tpl_vars['v']->value['answer_num'];?>
</div>
            <a href="index.php?m=admin_question&c=getanswer&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" style="color:#0c74be">查看</a>
            <?php } else { ?>暂无<?php }?></td>
            <td id="is_recom<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
			<?php if ($_smarty_tpl->tpl_vars['v']->value['is_recom']==0) {?>
			<a onClick="rec_up('?m=admin_question&c=recommend','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','1','is_recom');" href="javascript:void(0);"><img src="../config/ajax_img/errorico.gif"></a>
			<?php } else { ?>
			<a onClick="rec_up('?m=admin_question&c=recommend','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','0','is_recom');" href="javascript:void(0);"><img src="../config/ajax_img/doneico.gif"></a>
			<?php }?>
			</td>
            <td>
              <?php if ($_smarty_tpl->tpl_vars['v']->value['state']==1) {?><span class="admin_com_Audited">已审核</span>
              <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['state']==0) {?><span class="admin_com_noAudited">未审核</span>
              <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['state']==2) {?><span class="admin_com_tg">未通过</span>
              <?php }?>
            </td>
            <td class="td"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['add_time'],"%Y-%m-%d %H:%S");?>
</td>
            <td>
            	<a href="javascript:;" class="status admin_new_c_bth admin_new_c_bthsh" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" status='<?php echo $_smarty_tpl->tpl_vars['v']->value['state'];?>
'>审核</a>
              <a href="index.php?m=admin_question&c=add&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="admin_new_c_bth admin_n_sc">修改</a> 
            	<a href="javascript:void(0)" onClick="layer_del('确定要删除？', 'index.php?m=admin_question&c=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="admin_new_c_bth admin_new_c_bth_sc">删除</a></td>
          </tr>
          <?php } ?>
          <tr style="background:#f1f1f1;">
          <td align="center"><input type="checkbox" id='chkAll2' onclick='CheckAll2(this.form)' /></td>
          <td colspan="3">
          <label for="chkAll2">全选</label>&nbsp;
            <input class="admin_button"   type="button" name="delsub" value="删除所选" onClick="return really('del[]')" />
            <input class="admin_button" type="button" name="delsub" value="批量审核" onClick="audall();" />
          </td>
            <td colspan="7" class="digg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</td>
          </tr>
            </tbody>
          
        </table>
		<input type="hidden" name="pytoken"  id='pytoken' value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
      </form>
    </div>
  </div>
</div>

<div id="status_div"  style="display:none; width: 360px; "> 
  <form action="index.php?m=admin_question&c=status" target="supportiframe" method="post" id="formstatus" name="myform"  class="layui-form">
  <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
    <table cellspacing='1' cellpadding='1' class="admin_examine_table">
  <tr>
    <th width="80">审核操作：</th>
      <td align="left">
        <div class="layui-form-item">
  
  		<div class="layui-input-block">
	        <input type="radio" name="status" id="status0" value="0" title="未审核" ><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><span>未审核</span></div>
	        <input type="radio" name="status" id="status1" value="1" title="正常"   ><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><span>正常</span></div>
	        <input type="radio" name="status" id="status2" value="2" title="未通过" ><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><span>未通过</span></div>
	    </div>
  
    </div>
    </td>
    </tr>
          
     <tr>
       <td colspan='2' align="center">
       <div class="admin_Operating_sub"> 
       <input name="pid" value="0" type="hidden">
       <input type="submit"  value='确认' class="admin_examine_bth"> 
       <input type="button" onClick="layer.closeAll();" class="admin_examine_bth_qx" value='取消'>
       </div>
       </td>
   </tr>
    </table>
  </form> 
</div>

<?php echo '<script'; ?>
 type="text/javascript">
layui.use(['form'], function(){form = layui.form;});
$(function(){
  $(".status").click(function(){
    var id=$(this).attr("pid");
    $("input[name=pid]").val($(this).attr("pid"));
    var status=$(this).attr("status");
    $("#status"+status).attr("checked",true);
    add_class('问答审核','380','160','#status_div','');
    layui.use(['form'], function(){form = layui.form;form.render();});
  });
});

function audall(){
  var codewebarr="";
  $(".check_all:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
    if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
  });
  if(codewebarr==""){
    parent.layer.msg("您还未选择任何信息！",2,8);return false;
  }else{
    $("input[name=pid]").val(codewebarr);
    $("input[name=status]").attr("checked",false);
    add_class('批量审核','380','230','#status_div','');
  }
}


<?php echo '</script'; ?>
>
<style>
.admin_new_c_bth {color:#999;font-size:12px;}
</style>
</body>
</html><?php }} ?>
