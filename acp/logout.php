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

	session_start();
	setcookie('ib4arabadmin_cookie' , '');
	session_unregister(ib4arabadmin);
	session_destroy();
	include("function.php");	
	$BO->query("DELETE FROM ib4arab_admin_sessions WHERE session_member_name='$ib4arabadmin'");
	$ib4arab->assign('text',$lang[adm_logout_Refresh]);
	$ib4arab->assign('text2',$lang[adm_table_browser]);
	$ib4arab->assign("url",index.".php");
	$ib4arab->display("redirect.tpl"); 
?>