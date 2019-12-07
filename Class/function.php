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
if (SubFile == 1) {
require_once("../Class/conf_global.php");
}
if (SubFile != 1) {
require_once("Class/conf_global.php");
}

function Getuserid()
{
	global $BO;
	session_start();

	$username = $_SESSION['username'];
    $result = $BO->query("SELECT userid, username FROM ib4arab_users WHERE username='$username'");
    $rows =	$BO->fetch_array($result);
	$userid = $rows['userid'];
	$username = $rows['username'];
	return $userid;
}


function error_msg($error_msg) 
{
	global $ib4arab;
	$ib4arab->assign("title","BO - Error");
	$ib4arab->assign("error_back","ÇáÑÌæÚ Çáì ÇáÕÝÍÉ");
	$ib4arab->assign("error_msg",$error_msg);
	$ib4arab->display("errormsg.tpl");
}


function format_text($input, $html=0, $urlparse=0, $bbcode=1)
{
  global $BO, $config, $ib4arab, $lang;
  if($html == 0)
  {
    $input = htmlspecialchars($input);
    $input = str_replace("'", "&apos;" ,$input);
    $input = str_replace("\"", "&#34;" ,$input);
  }
  return $input;
}


function format_date($timestamp)
{
  global $BO, $config, $ib4arab, $lang;
  $new_time = strftime($config["time_format_big"], $timestamp);
  return $new_time;
}


function makeRandomPassword() {
  $salt = "abchefghjkmnpqrstuvwxyz0123456789";
  srand((double)microtime()*1000000);
  $i = 0;
  while ($i <= 7) {
  $num = rand() % 33;
  $tmp = substr($salt, $num, 1);
  $pass = $pass . $tmp;
  $i++;
  	}
	return $pass;
}


function ShowLoginForm($err=NULL)
{
	global $ib4arab; 
	$ib4arab->assign("err",$err);
	$ib4arab->assign("logged_in",false);
	$ib4arab->assign("title","BO - Login");
	$ib4arab->display("login.tpl");
	exit();
}


function ShowRegisterForm()
{
	global $ib4arab;
	$ib4arab->assign("title","BO - Login");
	$ib4arab->display("register.tpl");
}


function ShowLostPasswordForm()
{
	global $ib4arab;
	$ib4arab->assign("title","BO Lost Password");
	$ib4arab->display("lost_password.tpl");
}


function ShowredirectForm()
{
	global $ib4arab;
	$ib4arab->assign('text',"ÔßÑÇ Êã ÊÓÌíá ÎÑæÌß");
	$ib4arab->assign('text2',"ÇÖÛØ åäÇ ÇÐÇ áÇ ÊæÏ ÇáÇäÊÙÇÑ");
	$ib4arab->assign("url",index.".php");
	$ib4arab->display("redirect.tpl");
}


function ShowErrorForm()
{
	global $ib4arab;
	$ib4arab->assign("title","BO Error");
	$ib4arab->display("error.tpl");
}

$timeoutseconds = 300; 
$timestamp = time(); 
$timeout = $timestamp-$timeoutseconds; 
$insert = $BO->query("INSERT INTO ib4arab_online VALUES 
('$insertid','$timestamp','$REMOTE_ADDR','$PHP_SELF')"); 
if(!($insert)) { 
print "online Insert Failed > "; 
} 
$delete = $BO->query("DELETE FROM ib4arab_online WHERE timestamp<$timeout"); 
if(!($delete)) { 
print "online Delete Failed > "; 
} 
$result = $BO->query("SELECT DISTINCT ip FROM ib4arab_online WHERE file='$PHP_SELF'"); 
if(!($result)) { 
print "ib4arab_online Select Error > "; 
} 
$user = $BO->num_rows($result);
if($user == 1) {
$ib4arab->assign("user2",$user);
} else {
$ib4arab->assign("user2",$user);
}
session_start();
if (session_is_registered(username)) {
$ib4arab->assign('username', $_SESSION['username']);
}
if (!session_is_registered(username)) {
$ib4arab->assign('username', $lang[Guest_table_Hello]);
}

$result = $BO->query("SELECT DISTINCT userid FROM ib4arab_users"); 
$com = $BO->num_rows($result);
$ib4arab->assign('com', $com);

$result = $BO->query("SELECT DISTINCT id FROM ib4arab_clasif WHERE open='1'"); 
$cla = $BO->num_rows($result);
$ib4arab->assign('cla', $cla);

$result = $BO->query("SELECT DISTINCT catid FROM ib4arab_categories"); 
$cat = $BO->num_rows($result);

$ib4arab->assign('cat', $cat);
if(isset($_SESSION['username'])) 
{ 
$_SESSION['logged_in'] = 1; 
} else { 
$_SESSION['logged_in'] = 0; 
} 
if (!$result = $BO->query( "SELECT * from ib4arab_categories ORDER BY catid DESC"))
{
return error($BO->error(), $lang['check_db_settings'] . "|" . $lang['check_db_on']);
}
while($row = $BO->fetch_array($result))
{
$catlast[] = $row;
$ib4arab->assign("catlast",$catlast);
}
$ib4arab->assign('version', $config["version"]);
$ib4arab->assign('encode', $config["encode"]);
$ib4arab->assign('title', $config["sitename"]);
$ib4arab->assign('lang', $lang);
?>