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
	  
	  if ($start == 1) {
      if (empty($username) or empty($email_address) or empty($country)) {
	  die(error_msg($lang[register_er_empty]));
      }
      $Check = mysql_query("SELECT * FROM ib4arab_users WHERE username='$username'");
      $Check2 = mysql_query("SELECT * FROM ib4arab_users WHERE email_address='$email_address'");
	  if (mysql_num_rows($Check) != 0)  { die(error_msg($lang[register_er_name])); }
	  if (mysql_num_rows($Check2) != 0) { die(error_msg($lang[register_er_email])); }
	  $time = time();
	  $random_password = makeRandomPassword();
	  $db_password = md5($random_password);
	  $ip = $_SERVER["REMOTE_ADDR"];
	  $result = $BO->query("INSERT INTO ib4arab_users (email_address,
                                                       username,
                                                       password,
                                                       admibcp,
                                                       ip_address,
                                                       country,
                                                       url,
                                                       phone,
                                                       city,
                                                       job,
                                                       signup_date,
                                                       open) 
                                                       VALUES (
                                                       '$email_address',
                                                       '$username',
                                                       '$db_password',
                                                       '0',
                                                       '$ip',
                                                       '$country',
                                                       '$url',
                                                       '$phone',
                                                       '$city',
                                                       '$job',
                                                       '$time',
                                                       '0')");
	  if(!$result){
	  $error_msg = "$lang[register_er_reg]";
	  } else {
	  $userid = mysql_insert_id();
	  $activatepath = "activate.php?id=$userid";
	  $subject = "$lang[register_subject_title]"; 
	  $from = "From: $config[sitename] <$config[admin_email]>\r\n";
	  $msg = "$lang[register_dear]"
	  . "$lang[register_mess]: $config[domain]/$activatepath\r\n\r\n"
	  . "$lang[register_account]:\r\n"
	  . "$username\r\n"
	  . "$random_password\r\n"
	  . "$lang[register_thanks]:\r\n"
	  . "$config[domain]\r\n"
	  . "$config[sitename]\r\n";
	  if (!mail("$email_address", "$subject", $msg, $from))
	  {
	  $error_msg = "$lang[pass4]";
	  }
	  $ib4arab->assign('text',$lang[register_table_Refresh]);
	  $ib4arab->assign('text2',$lang[indx_table_browser]);
	  $ib4arab->assign("url",index.".php");
	  $ib4arab->display("redirect.tpl"); 
	  }
}
?>