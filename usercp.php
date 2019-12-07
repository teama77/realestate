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
	  include 'Class/security.php';

	//=====================================================	

	  if($action=="")
	  {
	  if (CheckSecurity())
	  {
	  $userid = Getuserid();
	  $result = $BO->query("SELECT * FROM ib4arab_users WHERE open='1' and userid='$userid'");
	  $row = $BO->fetch_array($result);
	  $username     = $row[username];
	  $userid       = $row[userid];
	  $email_addres = $row[email_addres];
	  $ib4arab->assign("username",$row[username]);
	  $ib4arab->display('usercp.tpl');
	  }
}

	//=====================================================	

	  else if ($action=="add")
	  {
	  if (CheckSecurity())
	  {
	  $userid = Getuserid();
	  $result = $BO->query("SELECT catid,name FROM ib4arab_categories");
	  $catid	=	"";
	  while($info = $BO->fetch_array($result))
	  {
	  $catid .= "<option value='$info[catid]'>$info[name]</option>";
	  }
	  $ib4arab->assign("catid",$catid);
	  $ib4arab->display('add.tpl');
	  }
}

	//=====================================================	

	  else if ($action=="doadd")
	  {
	  if (CheckSecurity())
	  {
	  $userid = Getuserid();
      if (empty($Price) or empty($titl) or empty($description)) {
	  die(error_msg($lang[add_c_empty]));
	  }
	  $result = $BO->query("SELECT * FROM ib4arab_users WHERE userid='$userid'");
	  $row = $BO->fetch_array($result);
	  $time = time();
	  $result = $BO->query("INSERT INTO ib4arab_clasif (userid,
                                                        username,
                                                        url,
                                                        phone,
                                                        email_address,
                                                        country,
                                                        dateline,
                                                        catid,
                                                        titl,
                                                        description,
                                                        open,
                                                        demo,
                                                        expire_days,
                                                        Price,
                                                        Year) 
                                                        VALUES (
                                                        '$row[userid]',
                                                        '$row[username]',
                                                        '$url',
                                                        '$phone',
                                                        '$row[email_address]',
                                                        '$country',
                                                        '$time',
                                                        '$catid',
                                                        '$titl',
                                                        '$description',
                                                        '0',
                                                        '$demo',
                                                        '$expire_days',
                                                        '$Price',
                                                        '$Year')");
	  if(!$result){
	  $error_msg = "$lang[add_c_er]";
	  } else {
	  $ib4arab->assign('text',$lang[add_c_Refresh]);
	  $ib4arab->assign('text2',$lang[add_c_browser]);
	  $ib4arab->assign("url",usercp.".php");
	  $ib4arab->display("redirect.tpl"); 
	  }
   }
}

	//=====================================================	

	  else if ($action=="edit")
	  {
	  if (CheckSecurity())
	  {
	  $userid = Getuserid();
	  $result = $BO->query("SELECT * FROM ib4arab_users WHERE userid='$userid'");
	  $row = $BO->fetch_array($result);
	  $username       = $row[username];
	  $userid         = $row[userid];
	  $email_address  = $row[email_address];
	  $country        = $row[country];
	  $url            = $row[url];
	  $phone          = $row[phone];
	  $city           = $row[city];
	  $job            = $row[job];

	  $ib4arab->assign("username",$row[username]);
	  $ib4arab->assign("userid",$row[userid]);
	  $ib4arab->assign("email_address",$row[email_address]);
	  $ib4arab->assign("country",$row[country]);
	  $ib4arab->assign("url",$row[url]);
	  $ib4arab->assign("phone",$row[phone]);
	  $ib4arab->assign("city",$row[city]);
	  $ib4arab->assign("job",$row[job]);
	  $ib4arab->display('edit.tpl');
	  }
}

	//=====================================================	

	  else if ($action=="doedit")
	  {
	  if (CheckSecurity())
	  {
	  $userid = Getuserid();
      $DoUpdate= $BO->query("update ib4arab_users set country='$country',
                                                      email_address='$email_address',
                                                      url='$url',
                                                      phone='$phone',
                                                      city='$city',
                                                      job='$job'");
	  if(!$DoUpdate)
	  {
	  $error_msg = "$lang[Update_c_er]";
	  }
	  else
	  {
	  $ib4arab->assign('text',$lang[edit_c_Refresh]);
	  $ib4arab->assign('text2',$lang[edit_c_browser]);
	  $ib4arab->assign("url",usercp.".php");
	  $ib4arab->display("redirect.tpl"); 
	  }
   }
}
?>