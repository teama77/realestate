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

    if (session_is_registered(ib4arabadmin)) {

	//=====================================================	

    if ($all == 1) {
    if(!isset($start))
    {
    $start = 0;
    }
    else
    {
    $start = intval( $_GET['start'] );
    }
    $perpage = 4;
    $page = intval( $_GET['page'] );
    $result = $BO->query( "SELECT * FROM ib4arab_users WHERE open='1' ORDER BY userid DESC LIMIT $start,$perpage");
    $page_result = $BO->query("SELECT * FROM ib4arab_users WHERE open='1' and userid='$userid'");
    $Page->SetPagerN($perpage,$BO->num_rows($page_result));
    while($row = $BO->fetch_array($result))
    {
    $row["signup_date"] = format_date($row["signup_date"]);
    $us[] = $row;
    $ib4arab->assign("us",$us);
    $ib4arab->assign("Page",$Page->PageNum());
    }
    $ib4arab->display('user.tpl');
}

	//=====================================================	

    if ($open == 1) {
    if(!isset($start))
    {
    $start = 0;
    }
    else
    {
    $start = intval( $_GET['start'] );
    }
    $perpage = 4;
    $page = intval( $_GET['page'] );
    $result = $BO->query( "SELECT * FROM ib4arab_users WHERE open='0' ORDER BY userid DESC LIMIT $start,$perpage");
    $page_result = $BO->query("SELECT * FROM ib4arab_users WHERE open='0' and userid='$userid'");
    $Page->SetPagerN($perpage,$BO->num_rows($page_result));
    while($row = $BO->fetch_array($result))
    {
    $row["signup_date"] = format_date($row["signup_date"]);
    $us[] = $row;
    $ib4arab->assign("us",$us);
    $ib4arab->assign("Page",$Page->PageNum());
    }
    $ib4arab->display('useropen.tpl');
}

	//=====================================================	

    if ($permi == 1) {
    $userid = intval($userid);
    $result = $BO->query("UPDATE ib4arab_users SET open='1' WHERE userid='$userid'");
	$ib4arab->assign('text',$lang[adm_upd_browser]);
	$ib4arab->assign('text2',$lang[adm_table_browser]);
	$ib4arab->assign("url",users.".php?all=1");
	$ib4arab->display("redirect.tpl"); 
}

	//=====================================================	

    if ($remove == 1) {
    $userid = intval($userid);
	$BO->query("DELETE FROM ib4arab_users WHERE userid='$userid'");
	$ib4arab->assign('text',$lang[adm_del_browser]);
	$ib4arab->assign('text2',$lang[adm_table_browser]);
	$ib4arab->assign("url",users.".php?all=1");
	$ib4arab->display("redirect.tpl"); 
}

	//=====================================================	

    if ($add == 1) {
	$ib4arab->display("useadd.tpl"); 
}

	//=====================================================	

    if ($doadd == 1) {

    if (empty($username) or empty($email_address)) {
    die(error_msg($lang[adm_register_er_empty]));
    }
    $Check = $BO->query("SELECT * FROM ib4arab_users WHERE username='$username'");
    $Check2 = $BO->query("SELECT * FROM ib4arab_users WHERE email_address='$email_address'");
    if ($BO->num_rows($Check) != 0)  { die(error_msg($lang[adm_register_er_name])); }
    if ($BO->num_rows($Check2) != 0) { die(error_msg($lang[adm_register_er_email])); }
    $time = time();
    $password = md5($random_password);
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
                                                     '$password',
                                                     '$admibcp',
                                                     '',
                                                     '$country',
                                                     '$url',
                                                     '$phone',
                                                     '$city',
                                                     '$job',
                                                     '$time',
                                                     '1')");
    if(!$result){
    $error_msg = "$lang[adm_add_c_er]";
    } else {
	$ib4arab->assign('text',$lang[adm_add_u_browser]);
	$ib4arab->assign('text2',$lang[adm_table_browser]);
	$ib4arab->assign("url",users.".php?all=1");
	$ib4arab->display("redirect.tpl"); 
    }
}


	//=====================================================	

    if ($edit == 1) {
    $userid = intval($userid);
    $result = $BO->query("SELECT * FROM ib4arab_users WHERE userid='$userid'");
    $row = $BO->fetch_array($result);
    $username      = $row[username];
    $userid        = $row[userid];
    $email_address = $row[email_address];
    $country       = $row[country];
    $url           = $row[url];
    $phone         = $row[phone];
    $city          = $row[city];
    $job           = $row[job];
    $password      = $row[password];
    $admibcp       = $row[admibcp];

    $ib4arab->assign("username",$row[username]);
    $ib4arab->assign("userid",$row[userid]);
    $ib4arab->assign("email_address",$row[email_address]);
    $ib4arab->assign("country",$row[country]);
    $ib4arab->assign("url",$row[url]);
    $ib4arab->assign("phone",$row[phone]);
    $ib4arab->assign("city",$row[city]);
    $ib4arab->assign("job",$row[job]);
    $ib4arab->assign("password",$row[password]);
    $ib4arab->assign("admibcp",$row[admibcp]);
    $ib4arab->display('useedit.tpl');
}

	//=====================================================	

    if ($doedit == 1) {
    $password = md5($random_password);
    $DoUpdate= $BO->query("update ib4arab_users set username='$username',
                                                    email_address='$email_address',
                                                    country='$country',
                                                    url='$url',
                                                    phone='$phone',
                                                    city='$city',
                                                    job='$job',
                                                    password='$password',
                                                    admibcp='$admibcp'
                                                    WHERE userid='$userid'");
    if(!$DoUpdate)
    {
    $error_msg = "$lang[Update_c_er]";
    }
    else
    {
	$ib4arab->assign('text',$lang[adm_use_edit_browser]);
	$ib4arab->assign('text2',$lang[adm_table_browser]);
	$ib4arab->assign("url",users.".php?all=1");
	$ib4arab->display("redirect.tpl"); 
    }
  }
}
?>