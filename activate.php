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
	  require_once("Class/conf_global.php");
	  include 'Class/function.php';
	  include 'Class/security.php';

	//=====================================================	

	  $userid = $_REQUEST['id'];
	  $result = mysql_query("UPDATE ib4arab_users SET open='1' WHERE userid='$userid'");
	  $ib4arab->assign('text',$lang[activated_table_Refresh]);
	  $ib4arab->assign('text2',$lang[indx_table_browser]);
	  $ib4arab->assign("url",index.".php");
	  $ib4arab->display("redirect.tpl");
?>