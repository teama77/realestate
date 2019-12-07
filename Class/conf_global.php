<?php
/*
+--------------------------------------------------------------------------
|   BO ClassiFieds V 1.1 BETA 1
|   ========================================
|   by Bokhalifa
|   (c) 2004 - 2005 ib4arab.com
|   http://www.ib4arab.com
|   ========================================
|   Web: http://www.ib4arab.com
|   Time: Thu, 24 09 2004 04:57:42 uae
|   Email: bo@ib4arab.com
|   Licence Info: http://www.invisionboard.com/?license
+---------------------------------------------------------------------------
|
|   > Module written by Bokhalifa
|   > Date started: 24 09 2004
|
|	> Module Version Number: 1.1 BETA 1
+--------------------------------------------------------------------------
*/
//-----------------------------------------------
// уксцуЧЪ Чсуцок
//-----------------------------------------------

$config = array(

        "admin_email"      => "bo@cf.ae",

        "domain"           => "www.ib.com/ClassiFieds",
 
        "ClassiFiedspath"  => "/home/ib/public_html/ClassiFieds",  

        "sitename"         => "BO ClassiFieds",

        "default_pub_lang" => "Arabic",

        "encode"           => "windows-1256",

        "time_format_big"  => "%Y-%m-%d",

        "version"          => "v1.1 bo 1",

        "language"         => "arabic", 
);

//-----------------------------------------------
// уксцуЧЪ оцЧкЯ ЧсШэЧфЧЪ
//-----------------------------------------------

$db_server   = "localhost";
$db_username = "ib";
$db_password = "ib";
$db_name     = "ib";




//-----------------------------------------------
// сЧ Ъоу ШЧсЪкЯэс ШЧэ гиб уф хфЧ
//-----------------------------------------------
if (SubFile == 1) {
define('Class_DIR','../Class/');
include(Class_DIR . "class.php");
}
if (SubFile != 1) {
define('Class_DIR','Class/');
include(Class_DIR . "class.php");
}
if (SubFile == 1) {
define('Smarty_DIR','../Class/libs/');
include(Smarty_DIR . "Smarty.class.php");
}
if (SubFile != 1) {
define('Smarty_DIR','Class/libs/');
include(Smarty_DIR . "Smarty.class.php");
}
if (SubFile == 1) {
define('Class_DIR','../Class/');
include(Class_DIR . "pager.php");
}
if (SubFile != 1) {
define('Class_DIR','Class/');
include(Class_DIR . "pager.php");
}
if (SubFile == 1) {
include("../acp/lang/".$config["language"].".php");
}
if (SubFile != 1) {
include("./lang/".$config["language"].".php");
}
$BO = new BOSQL;
$ib4arab = new Smarty;
$Page = new Pager($start,$page);
$BO->setinfo($db_server,$db_username,$db_password,$db_name);
$BO->connect();
$BO->selectdb();
?>