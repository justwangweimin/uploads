<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/***
define('APP_PATH',dirname(__FILE__).'/'); 
define('LIB_PATH',APP_PATH.'/app/include/'); 
define('CONFIG_PATH',APP_PATH.'/config/');
define('DATA_PATH',APP_PATH.'/data/');
define('LIB_PATH',APP_PATH.'/app/include/'); 
define('TPL_PATH',APP_PATH.'/app/template/');
define('MODEL_PATH',APP_PATH.'/model/');
define('PLUS_PATH',DATA_PATH.'/plus/');
define('ALL_PS','conn'); 
include_once(LIB_PATH."mysqli.class.php");
include_once(LIB_PATH.'public.function.php');
include(LIB_PATH.'public.url.php');
include_once(LIB_PATH.'libs/Smarty.class.php');
$phpyun = new Smarty;
$phpyun->debugging      = false;
$phpyun->caching        = false;
$phpyun->force_cache    = false;
$phpyun->template_dir   = TPL_PATH;
$phpyun->compile_dir    = DATA_PATH.'/templates_c/';
$phpyun->cache_dir      = DATA_PATH.'/cache/';
$phpyun->left_delimiter = '{yun:}';
$phpyun->right_delimiter= '{/yun}';
$phpyun->display("test.htm");
// */
function ArrayToString($obj,$withKey=true,$two=false){
    if(empty($obj))
        return "";
    $objType=gettype($obj);
    if($objType=='array'){
        $objstring="array(";
        foreach($obj as $objkey=> $objv){
            if($withKey)
                $objstring.="\"$objkey\"=>";
            $vtype=gettype($objv);
            if($vtype=='integer'){
                $objstring.="$objv,";
            }else if($vtype=='double'){
                $objstring.="$objv,";
            }else if($vtype=='string'){
                $objv=str_replace('"',"\\\"",$objv);
                $objstring.="\"".$objv."\",";
            }else if($vtype=='array'){
                $objstring.="".ArrayToString($objv,$withKey,$two).",";
            }else if($vtype=='object'){
                $objstring.="".ArrayToString($objv,$withKey,$two).",";
            }else{
                $objstring.="\"".$objv."\",";
            }
        }
        $objstring=substr($objstring,0,-1)."";
        return $objstring.")\n";
    }
}
echo ArrayToString(null);
echo "<br>";
$obj["xx"]="xxx";
echo ArrayToString($obj);
echo "<br>";
echo ArrayToString(["x"=>"xx","y"=>"zz"]);

?>
