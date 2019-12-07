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
	  include 'Class/conf_global.php';
	  include 'Class/function.php';

	//=====================================================	

	  $subject = "$lang[pass_subject_title]"; 
	  $from = "From: $config[domain]\r\n";
	  $msg = "$lang[pass1]"
	  . "$lang[pass2] $config[sitename]\r\n\r\n"
	  . "$lang[pass3] $random_password\r\n"
	  . "$lang[pass4].\r\n"
	  . " $config[domain]\r\n"
	  . "$config[sitename].\r\n";
      $send = mail($to, $subject, $msg, $from);
	  if (!$send)
	  {
	  $error_msg = "$lang[pass4]";
	  }
	  $ib4arab->assign('text',$lang[send_table_Refresh]);
	  $ib4arab->assign('text2',$lang[send_table_browser]);
	  $ib4arab->assign("url",index.".php");
	  $ib4arab->display("redirect.tpl"); 
?>