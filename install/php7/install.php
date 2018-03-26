<?php
/*
 * @作者：王卫民
 * @官网： www.just.edu.cn
 * @版权：2018-2028 王卫民所有，并保留所有权利。
 * @软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
 */
if(@include (APP_PATH."/data/just.lock")){
    show_view('<div class="centent"><div class="step"><div class="server"><table width="100%"><tbody><tr><td class="td1" width="100">提示信息</td><td class="td1" width="200">&nbsp;</td><td class="td1">&nbsp;</td></tr><tr><td colspan="3" style="width:100%;">你已经安装JUST系统，请删除just.lock文件再安装！</td></tr></tbody></table></div></div></div>');
    exit();
}
if(empty($_GET['step'])){
    $_GET['step']='start';
}
if($_GET['step']=='start'){
    show_view('
<div class="main">
    <textarea class="pact" readonly="readonly">
        安装协议：本软件受中华人民共和国著作权法和有关著作权国际公约和其它知识产权相关法律及国际公约的保护，其所有知识产权，包括但不限于著作权，归王卫民所有。
    </textarea>
</div>
<div class="bottom">
    <form action="" autocomplete="off" method="get">
        <input name="step" value="checkset" type="hidden">
        <input type="submit" value="我同意" name="" class="submit">
        <input type="button" value="我不同意" onclick="window.close();" name="exit"class="submit">
    </form>
</div>');
    exit();
}
if($_GET['step']=='checkset'){
    function_check($func_items);
    env_check($env_items);
    dirfile_check($dirfile_items);
    echo(show_env_result($env_items,$dirfile_items,$func_items));
    exit();    
}
if($_GET['step']=='sql'){
    $protocol=((isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS']=='on')||(isset($_SERVER['HTTP_X_FORWARDED_PROTO'])&&$_SERVER['HTTP_X_FORWARDED_PROTO']=='https'))?'https://':'http://';
    $url_this=$protocol.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
    $url_this=explode('/install/',$url_this);
    $url_this=$url_this[0];
    $form_str='<div class="step">
    <ul>
        <li class="on">
            <em>
                1
            </em>
            检测环境
        </li>
        <li class="current">
            <em>
                2
            </em>
            创建数据
        </li>
        <li>
            <em>
                3
            </em>
            完成安装
        </li>
    </ul>
    <div class="server">
        <form id="install" method="post" name="frm_sql" action="index.php?step=data"onsubmit="return checkweb();">
            <table width="100%">
                <tbody>
                    <tr>
                        <td class="td1" width="100">
                            数据库信息
                        </td>
                        <td class="td1" width="200">
                            &nbsp;
                        </td>
                        <td class="td1">
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td class="tar">
                            网站地址：
                        </td>
                        <td>
                            <input class="input" type="text" value="'.$url_this.'" name="weburl">
                        </td>
                        <td>
                            <span class="gray" id="weburl_msg">
                                站点的url
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="tar">
                            数据库服务器：
                        </td>
                        <td>
                            <input class="input" name="dbhost" type="text" value="localhost">
                        </td>
                        <td>
                            <span class="gray" id="dbhost_msg">
                                数据库服务器地址，一般为localhost
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="tar">
                            数据库用户名：
                        </td>
                        <td>
                            <input class="input" name="dbuser" type="text" value="root">
                        </td>
                        <td>
                            <span class="gray" id="dbuser_msg">
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="tar">
                            数据库密码：
                        </td>
                        <td>
                            <input class="input" name="dbpwd" type="text" value="">
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td class="tar">
                            数据库名：
                        </td>
                        <td>
                            <input class="input" name="dbname" type="text" value="just">
                        </td>
                        <td>
                            <span class="gray" id="dbname_msg">
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="tar">
                            数据库表前缀：
                        </td>
                        <td>
                            <input class="input" name="tablepre" type="text" value="just_">
                        </td>
                        <td>
                            <span class="gray" id="tablepre_msg">
                                同一数据库运行多个系统时，请修改前缀
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table width="100%">
                <tbody>
                    <tr>
                        <td class="td1" width="100">
                            创始人信息
                        </td>
                        <td class="td1" width="200">
                            &nbsp;
                        </td>
                        <td class="td1">
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td class="tar">
                            管理员帐号：
                        </td>
                        <td>
                            <input class="input" name="username" type="text" value="admin">
                        </td>
                        <td>
                            <span class="gray" id="username_msg">
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="tar">
                            密码：
                        </td>
                        <td>
                            <input class="input" type="password" name="password" value="admin">
                        </td>
                        <td>
                            <span class="gray" id="password_msg">
                                默认密码：admin
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="tar">
                            重复密码：
                        </td>
                        <td>
                            <input class="input" name="password2" type="password" value="admin">
                        </td>
                        <td>
                            <span class="gray" id="password2_msg">
                                默认密码：admin
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="tar">
                            Email：
                        </td>
                        <td>
                            <input class="input" type="text" value="admin@admin.com" name="manager_email">
                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
    </div>
</div>
<div class="bottom">
    <input type="submit" value="确定" name="setup_sql" class="submit">
    <input type="button" value="返回" onclick="history.back()" name="exit" class="submit">
    </form>
</div>';
    show_header();
    echo ($form_str);
    show_footer();
    exit();
}
if($_GET['step']=='data'){
    if($_POST[setup_sql]){
        $manager_email=$_POST['manager_email'];
        $weburl=$_POST['weburl'];
        $dbhost=$_POST['dbhost'];
        $dbname=$_POST['dbname'];
        $dbuser=$_POST['dbuser'];
        $dbpwd=$_POST['dbpwd'];
        $username=$_POST[username];
        $name=$_POST[name];
        $password=md5($_POST[password]);
        $password2=md5($_POST[password2]);
        if(empty($dbhost)||empty($dbname)||empty($dbuser)){
            show_view('<div class="centent"><div class="step"><div class="server"><table width="100%"><tbody><tr><td class="td1" width="100">提示信息</td><td class="td1" width="200">&nbsp;</td><td class="td1">&nbsp;</td></tr><tr><td colspan="3" style="width:100%;">你填写的服务器配置资料不完整！<a href="javascript:history.back();">点击返回</a></td></tr></tbody></table></div></div></div>');
        }else{
            $conn=@mysqli_connect($dbhost,$dbuser,$dbpwd);
            if($conn==false){
                show_view('<div class="centent"><div class="step"><div class="server"><table width="100%"><tbody><tr><td class="td1" width="100">提示信息</td><td class="td1" width="200">&nbsp;</td><td class="td1">&nbsp;</td></tr><tr><td colspan="3" style="width:100%;">服务器的用户名或者密码错误！<a href="javascript:history.back();">点击返回</a></td></tr></tbody></table></div></div></div>');
                exit();
            }
        }
        $dbname_states="连接";
        if(@mysqli_select_db($conn,$dbname)==false){
            if(mysqli_get_server_info($conn)>'4.1'){
                mysqli_query($conn,"CREATE DATABASE `$dbname` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");
                $dbsql=@mysqli_select_db($conn,$dbname);
                $dbname_states="建立";
            }else{
                show_view('<div class="centent"><div class="step"><div class="server"><table width="100%"><tbody><tr><td class="td1" width="100">提示信息</td><td class="td1" width="200">&nbsp;</td><td class="td1">&nbsp;</td></tr><tr><td colspan="3" style="width:100%;">您的数据库版本太低,请高于4.1以上！<a href="javascript:history.back();">点击返回</a></td></tr></tbody></table></div></div></div>');
                exit();
            }
        }
    }
    mysqli_query($conn,"set names 'utf8'");
    echo(show_sql_result($env_items,$dirfile_items,$func_items));
    echo Encode('<script>document.getElementById("kays").innerHTML+="<dd>'.$dbname_states.'数据库 '.$dbname.'...成功</dd>";document.getElementById("kays").scrollTop+='.(30).';</script>','utf8_general_ci');
    sleep(1);
    header('Content-Type: text/html; charset=utf-8');
    ob_start();
    $tablepre=$_POST[tablepre];
    $fp=@file_get_contents(S_ROOT."data/just.sql");
    $fp=str_replace("just_",$tablepre,$fp);
    preg_match_all("/CREATE(.*);/Uis",$fp,$arrdata);
    $preg="/CREATE TABLE `(.*)` \(/Uis";
    foreach($arrdata[0] as $k=> $v){
        $sql=str_replace("\r\n","",$v);
        preg_match_all($preg,$sql,$tablearr);
        if(mysqli_num_rows(mysqli_query($conn,"SHOW TABLES LIKE '".$tablearr[1][0]."'"))==1){
            mysqli_query($conn,"DROP TABLE `".$tablearr[1][0]."`;");
        }
        mysqli_query($conn,$sql);
        $error=mysqli_error($conn);
        if($error){
            echo Encode('<script>document.getElementById("kays").innerHTML+="<div>正在建表'.$tablearr[1][0].'...失败：'.$error.'</div>";document.getElementById("kays").scrollTop+='.(30).';</script>','utf-8');
        }else{
            echo Encode('<script>document.getElementById("kays").innerHTML+="<div>正在建表'.$tablearr[1][0].'...成功</div>";document.getElementById("kays").scrollTop+='.(30).';</script>','utf-8');
        }
        ob_flush();
        flush();
        ob_end_clean();
    }
    //导入数据内容
    $fpp=@file_get_contents(S_ROOT."data/just_data.sql");
    $fpp=str_replace("just_",$tablepre,$fpp);
    preg_match_all("/INSERT(.*)\);/Uis",$fpp,$data);
    foreach($data[0] as $k=> $v){
        echo Encode('<script>document.getElementById("kays").innerHTML+="<div>正在导入数据'.$k.'的第'.($k+1).'条记录</div>";document.getElementById("kays").scrollTop+='.(30).';</script>','utf-8');
        ob_flush();
        flush();
        ob_end_clean();
        $sql=str_replace("\r\n","",$v);
        mysqli_query($conn,$sql);
        $error=mysqli_error($conn);
        if($error){
            Encode('<script>document.getElementById("kays").innerHTML+="<div>导入数据'.$k.'的第'.($k+1).'条记录失败：'.$error.'</div>";document.getElementById("kays").scrollTop+='.(30).';</script>','utf-8');
        }
    }
    //添加管理员帐户
    $table_user=$tablepre."admin_user";
    $table_config=$tablepre."admin_config";
    mysqli_query($conn,"INSERT INTO $table_user SET `m_id`='1',`username`='".$username."',`password`='".$password."',`name`='超级管理员',`did`='0',`lasttime`='".time()."'");
    mysqli_query($conn,"update $table_config set `config`='$weburl' where `name`='sy_weburl'");
    $str='';
    $strPol="ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz.!@#%^&*";
    $max=strlen($strPol)-1;
    for($i=0; $i<10; $i++){
        $str.=$strPol[rand(0,$max)];
    }
    mysqli_query($conn,"update $table_config set `config`='$str' where `name`='sy_safekey'");
    mysqli_query($conn,"update $table_config set `config`='$manager_email' where `name`='sy_webemail'");
    echo Encode('<script>document.getElementById("kays").innerHTML+="<div>添加管理员...成功</div>";document.getElementById("kays").scrollTop+='.(30).';</script>','utf-8');
    $coding=md5($weburl.$name.mktime());
    $config=@fopen("../config/db.config.php","w+");
    if($config){
        $db="<?php \r\n";
        $db.="  \$db_config = array(\r\n";
        $db.="      'dbtype'=>'mysql',\r\n";
        $db.="      'dbhost'=>'$dbhost',\r\n";
        $db.="      'dbuser'=>'$dbuser',\r\n";
        $db.="      'dbpass'=>'$dbpwd',\r\n";
        $db.="      'dbname'=>'$dbname',\r\n";
        $db.="      'def'=>'$tablepre',\r\n";
        $db.="      'charset'=>'utf8',\r\n";
        $db.="      'timezone'=>'PRC',\r\n";
        $db.="      'coding'=>'$coding', //生成cookie加密\r\n";
        $db.="    );\r\n";
        $db.="    \r\n?>";
    }
    fwrite($config,$db);
    fclose($config);
    mysqli_close($conn);
    echo Encode('<script>document.getElementById("kays").innerHTML+="<div>生成系统文件...成功</div>";document.getElementById("kays").scrollTop+='.(30).';</script>','utf-8');
    echo Encode('<script>document.getElementById("kays").innerHTML+="<div>初始化数据...成功</div>";document.getElementById("kays").scrollTop+='.(30).';</script>','utf-8');
    echo Encode('<script>document.getElementById("kays").innerHTML+="<div>更新网站缓存...成功</div>";document.getElementById("kays").scrollTop+='.(30).';</script>','utf-8');    
    echo "<script>setTimeout('location.href=\"index.php?step=finish\"',2000);</script>";
    exit();
}
if($_GET['step']=='finish'){
    @fopen("../data/just.lock","w+");
    $url_this='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
    $url_this=explode('/install/',$url_this);
    $url_this=$url_this[0];
    //清除之前的SESSION数据
    unset($_SESSION["authcode"]);
    unset($_SESSION["auid"]);
    unset($_SESSION["ausername"]);
    unset($_SESSION["ashell"]);
    unset($_SESSION["md"]);
    unset($_SESSION["tooken"]);
    show_view('<div class="step">
    <ol>
        <li class="on">
            检测环境
        </li>
        <li class="on">
            创建数据
        </li>
        <li class="current">
            完成安装
        </li>
    </ol>
    <div class="server_2">
        <div class="info">
            <p class="t">
                安装成功，欢迎使用JUST系统！
            </p>
            <center>
                <input type="button" value="浏览首页" class="submit" onclick="location.href=\'../index.php\'">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="button" value="后台管理" class="submit" onclick="location.href=\'../admin/index.php\'">
            </center>
            <script type="text/javascript" src="'.$url_this.'/admin"></script>
        </div>
    </div>
</div>');
    echo "<div style=\"display:none\"><script src='".$url_this."/index.php'></script></div>";
    exit();
}
function Encode($string,$charset){
    $InputCoding=strtolower(mb_detect_encoding($string,array('utf-8','gbk')));
    if($charset==$InputCoding){
        return $string;
    }else{
        return mb_convert_encoding($string,$charset,$InputCoding);
    }
}
?>