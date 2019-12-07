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

	include("function.php");

    if ($start == 1) {
	//-------------------------------------------------------
	// Remove all out of date sessions, like a good boy. Woof.
	//-------------------------------------------------------
	
	$cut_off_stamp = time() - 60*60*2;
	
	$BO->query("DELETE FROM ib4arab_admin_sessions WHERE session_log_in_time < $cut_off_stamp");
	
	//+------------------------------------------------------
	
     $password = md5($password);
     $result = $BO->query("SELECT * FROM ib4arab_users WHERE username='$username' AND password='$password' AND admibcp='1'");
     $num   = $BO->num_rows($result);

     if ($num != 0) {
      $ib4arabadmin = $username;
      session_register(ib4arabadmin);
      setcookie('ib4arabadmin_cookie' , ''.$username.'');
       $time = time();
       $ip = $_SERVER["REMOTE_ADDR"];
	   $sess_id = md5( uniqid( microtime() ) );
       $BO->query("INSERT INTO ib4arab_admin_sessions (session_id,
                                                   session_ip_address,
                                                   session_member_name,
                                                   session_log_in_time) 
                                                   VALUES (
                                                   '$sess_id',
                                                   '$ip',
                                                   '$ib4arabadmin',
                                                   '$time')");
	  $ib4arab->assign('text',$lang[adm_table_Refresh]);
	  $ib4arab->assign('text2',$lang[adm_table_browser]);
	  $ib4arab->assign("url",index.".php");
   	  $ib4arab->display("redirect.tpl");     
      }
     else 
      {
     die(error_msg($lang['err_lag']));
     }
    }


?>