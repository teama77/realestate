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
	  include 'Class/security.php';

	//=====================================================	

	  $action		= $_GET["action"];
	  $username 	= $_POST["username"];
	  $password 	= $_POST["password"];

	//=====================================================	

	  if (empty($action))
	  {
	  $action = $_POST["action"];
	  }
	  switch ($action)
	  {
	  case "reg":
	  $ib4arab->assign("logged_in",false);
	  if (empty($username) || empty($password))
	  {
	  ShowRegisterForm();
	  }
	  else
	  {
	  Register($username,$password,$email_address,$admibcp
	  ,$country,$url,$phone,$city,$job
	  ,$signup_date);
	  }
	  break;
	  case "lp":
      ShowLostPasswordForm();
	  break;
	  case "logout":
	  Logout();
	  break;
	  default:
	  if (Login($username,$password))
	  {
	  $ib4arab->assign('text',$lang[indx_table_Refresh]);
	  $ib4arab->assign('text2',$lang[indx_table_browser]);
	  $ib4arab->assign("url",index.".php");
	  $ib4arab->display("redirect.tpl"); 
	  }
	  else
	  {
	  Logout("Login Failed: Please verify your email address and password then try again");
	  }
	  break;
}
?>
