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

echo "<HTML DIR=rtl LANG=AR-SA>
<head>
<meta http-equiv=Content-Type content=text/html; charset=windows-1256>
<meta http-equiv=Content-Language content=ar-sa>
<title>تركيب البرنامج لاول مرى</title>
<link rel='stylesheet' type='text/css' href='css/index.css' />
</head>
<body style='background-color: #ece9d8'>";
include 'Class/conf_global.php';
//---------------------------------------
if($action=="")
{	
echo "<body bgcolor='#ece9d8'>
<table width='80%' border='0' cellpadding='0' cellspacing='0' align='center'>
							<tr>
							 <td valign='top'>
								<img border='0' src='style_images/bo.gif' width='90' height='67'></td>
							 <td width='514'>
								<blockquote>
									<blockquote>
										<blockquote>
											<p align='center'>&nbsp;<br />
											<font color='#000000'>اهلا بكم في 
											برنامج </font>BO ClassiFieds<font color='#000000'><br>
											<span lang='ar-ae'>للعقارات<br>
											قبل البدا في تنصيب البرنامج يجب ان 
											تعطي تصاريح لمجلدات ال<br>
											</span></font>
											<span lang='ar-ae'>
											<font color='#FF0000'>skin_cache</font><font color='#000000'> 
											&amp;&nbsp; </font>
											<font color='#FF0000'>skin_cache_c</font></span><font color='#000000'>&nbsp; 
											&amp; </font><font color='#FF0000'>
											acp/skin_cache</font><font color='#000000'>&nbsp; 
											&amp; </font><font color='#FF0000'>acp/skin_cache_c</font><font color='#000000'><br>
											تصاريح<br>
											</font><font color='#FF0000'>777</font><font color='#000000'><br>
&nbsp;<span lang='ar-ae'>ومن ثم توكل على الله واضغط على استمرار</span></font><br />
											<br /><br /><b align='center'>
											<a href='install.php?action=create'>استمرار</a></b>
                             </div>
                             </div>
										</blockquote>
									</blockquote>
								</blockquote>

							   ";
}
else if ($action=="create")
{
$query = $BO->query("DROP TABLE IF EXISTS ib4arab_users");
$query = $BO->query("CREATE TABLE IF NOT EXISTS `ib4arab_users` (
  userid int(10) default NULL auto_increment,
  email_address varchar(100) NOT NULL default '',
  username varchar(100) NOT NULL default '',
  password varchar(255) NOT NULL default '',
  admibcp int(1) NOT NULL default '0',
  ip_address varchar(16) NOT NULL default '',
  country varchar(100) NOT NULL default '',
  url varchar(100) NOT NULL default '',
  phone varchar(100) NOT NULL default '',
  city varchar(100) NOT NULL default '',
  job varchar(100) NOT NULL default '',
  signup_date int(11) NOT NULL default '0',
  open int(1) NOT NULL default '0',
  PRIMARY KEY  (userid)
      )");
 if($query) echo "[&nbsp;<span class=\"okay\">تم زرع الجدول</span>&nbsp;]   ib4arab_users<br />";

$query = $BO->query("DROP TABLE IF EXISTS ib4arab_news");
$query = $BO->query("CREATE TABLE IF NOT EXISTS `ib4arab_news` (
    `id` int(11) NOT NULL auto_increment,
    `name` varchar(128) NOT NULL default '',
    `date` int(11) NOT NULL default '0',
    `title` varchar(100) NOT NULL default '',
    `content` mediumtext NOT NULL,
  PRIMARY KEY  (`id`)
      )");
if($query) echo "[&nbsp;<span class=\"okay\">تم زرع الجدول</span>&nbsp;]   ib4arab_news<br />";



$query = $BO->query("DROP TABLE IF EXISTS ib4arab_categories");
$query = $BO->query("CREATE TABLE IF NOT EXISTS `ib4arab_categories` (
      `catid` int(4) NOT NULL auto_increment,
      `name` varchar(50) NOT NULL default '',
      `description` mediumtext NOT NULL,
      `nb` int(5) NOT NULL default '0',
      `image` varchar(100) NOT NULL default '',
      `views` smallint(6) NOT NULL default '0',
      PRIMARY KEY  (`catid`)
      )");
if($query) echo "[&nbsp;<span class=\"okay\">تم زرع الجدول</span>&nbsp;]   ib4arab_categories<br />";


$query = $BO->query("DROP TABLE IF EXISTS ib4arab_upgrade_history");
$query = $BO->query("CREATE TABLE IF NOT EXISTS `ib4arab_upgrade_history` (
  upgrade_id int(10) NOT NULL auto_increment,
  upgrade_version varchar(200) NOT NULL default '',
  upgrade_date int(10) NOT NULL default '0',
  PRIMARY KEY  (upgrade_id)
      )");
 if($query) echo "[&nbsp;<span class=\"okay\">تم زرع الجدول</span>&nbsp;]   ib4arab_upgrade_history<br />";


$query = $BO->query("DROP TABLE IF EXISTS ib4arab_clasif");
$query = $BO->query("CREATE TABLE IF NOT EXISTS `ib4arab_clasif` (
  `id` int(10) NOT NULL auto_increment,
  `userid` int(10) NOT NULL default '0',
  `username` varchar(50) NOT NULL default '',
  `url` varchar(64) NOT NULL default '',
  `phone` varchar(20) NOT NULL default '',
  `email_address` varchar(25) NOT NULL default '',
  `country` varchar(100) NOT NULL default '',
  `dateline` int(10) NOT NULL default '0',
  `catid` int(4) NOT NULL default '0',
  `titl` varchar(100) NOT NULL default '',
  `description` mediumtext NOT NULL,
  `open` tinyint(1) NOT NULL default '0',
  `views` smallint(6) NOT NULL default '0',
  `demo` varchar(60) NOT NULL default '',
  `expire_days` varchar(100) NOT NULL default '',
  `Price` varchar(100) NOT NULL default '',
  `Year` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`)
)");
if($query) echo "[&nbsp;<span class=\"okay\">تم زرع الجدول</span>&nbsp;]   ib4arab_clasif<br />";

$query = $BO->query("DROP TABLE IF EXISTS ib4arab_admin_sessions");
$query = $BO->query("CREATE TABLE IF NOT EXISTS `ib4arab_admin_sessions` (
  session_id varchar(32) NOT NULL default '',
  session_ip_address varchar(32) NOT NULL default '',
  session_member_name varchar(250) NOT NULL default '',
  session_log_in_time int(10) NOT NULL default '0',
  PRIMARY KEY  (session_id)
)");
if($query) echo "[&nbsp;<span class=\"okay\">تم زرع الجدول</span>&nbsp;]   ib4arab_admin_sessions<br />";

$query = $BO->query("DROP TABLE IF EXISTS ib4arab_online");
$query = $BO->query("CREATE TABLE IF NOT EXISTS `ib4arab_online` (
  `id` int(10) NOT NULL auto_increment,
  `timestamp` int(15) NOT NULL default '0',
  `ip` varchar(40) NOT NULL default '',
  `FILE` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`)
)");
if($query) echo "[&nbsp;<span class=\"okay\">تم زرع الجدول</span>&nbsp;]   ib4arab_online<br />";

	$name   = "فلل";
	$description = "فلل للايجار";
	$BO->query("INSERT INTO ib4arab_categories VALUES ('', '$name', '$description', '2', 'style_images/1.gif', '1')");
	$name2   = "ابراج وعمارات";
	$description2 = "ابراج وعمارات للبيع او الايجار";
	$BO->query("INSERT INTO ib4arab_categories VALUES ('', '$name2', '$description2', '0', 'style_images/2.gif' , '1')");
	$name3   = "الهواتف";
	$description3 = "جميع انواع الهواتف للبيع";
	$BO->query("INSERT INTO ib4arab_categories VALUES ('', '$name3', '$description3', '0', 'style_images/3.gif' , '1')");
	$name4   = "سيارات";
	$description4 = "سيارات للايجار او للبيع";
	$BO->query("INSERT INTO ib4arab_categories VALUES ('', '$name4', '$description4', '0', 'style_images/4.gif' , '1')");
	$name5   = "اجهزة الحاسوب";
	$description5 = "كمبيورترات للبيع او البيع بالقصاد";
	$BO->query("INSERT INTO ib4arab_categories VALUES ('', '$name5', '$description5', '0', 'style_images/5.gif' , '1')");
	$name6   = "شقق";
	$description6 = "شقق مفروشه او غير مفروشه للايجار او البيع";
	$BO->query("INSERT INTO ib4arab_categories VALUES ('', '$name6', '$description6', '0', 'style_images/6.gif' , '1')");
	$name7   = "قوارب واجهزة بحريه";
	$description7 = "قوارب وجيمع الاجهزة البحريه للبيع او الايجار";
	$BO->query("INSERT INTO ib4arab_categories VALUES ('', '$name7', '$description7', '0', 'style_images/7.gif' , '1')");



echo "<body bgcolor='#ece9d8'>
<table width='80%' border='0' cellpadding='0' cellspacing='0' align='center'>
							<tr>
							 <td valign='top'>
								<img border='0' src='style_images/bo.gif' width='90' height='67'></td>
							 <td>
								<p align='center'>&nbsp;<br /><br />
							 	<font color='#000000'>تم تركيب قواعد البيانات بنجاح
							 	</font>
							 <br /><br /><br />                                      
                             <b align='center'><a href='install.php?action=install'>
								اضغط هنا للمواصله</a></b>
                             </div>
                             </div>
							   ";
}
else if ($action=="install")
{
	
echo "
<form name='add' method='post' action='install.php?action=finish' enctype='multipart/form-data'>
<table width='100%' border='0' cellspacing='1' cellpadding='4' align='center'>
  <tr>
    <td	width='100%' class='bitTitle'>معلومات مدير الموقع</td>
  </tr>
  </table>
  <table width='100%' border='0' cellspacing='1' cellpadding='2' align='center'>
    <tr>
      <td width='30%' valign='top' class='row1'>الاسم</td>
      <td width='70%' valign='top' class='row2'><input name='adminname' type='text' value=''></td>
    </tr>
    <tr>
      <td valign='top' width='30%' class='row1'>الرقم السري</td>
      <td valign='top' width='70%' class='row2'><input name='adminpassword' type='text' value=''></td>
    </tr>
    <tr>
      <td valign='top' width='30%' class='row1'>اعادة كتابة الرقم السري</td>
      <td valign='top' width='70%' class='row2'><input name='adminpassword2' type='text' value=''></td>
    </tr>
    <tr>
      <td valign='top' width='30%' class='row1'>البريد الالكتروني</td>
      <td valign='top' width='70%' class='row2'><input name='email' type='text' value=''></td>
    </tr>
<table width='100%' border='0' cellspacing='1' cellpadding='4' align='center'>
  <tr>
    <td	width='100%' class='bitTitle'><input type='submit' value='ارسل المعلومات'></td>
  </tr>
  </table>
  </form>";
						 

						 
}
else if ($action=="finish")
{

if((!$adminname) || (!$adminpassword) || (!$adminpassword2) || (!$email)){
	echo 'You did not submit the following required information! <br />';
	if(!$adminname){
		echo "Name is a required field. Please enter it below.<br />";
	}
	if(!$adminpassword){
		echo "Last Name is a required field. Please enter it below.<br />";
	}
	if(!$adminpassword2){
		echo "Email Address is a required field. Please enter it below.<br />";
	}
	if(!$email){
		echo "Desired Username is a required field. Please enter it below.<br />";
	}
	exit();
}
	

	
	// Insert the admin...
	$time = time(); 
	$passy = md5($adminpassword);
    $ip = $_SERVER["REMOTE_ADDR"];
	$BO->query("INSERT INTO ib4arab_users 
VALUES(
    '',
    '$email', 
    '$adminname', 
    '$passy', 
    1, 
    '$ip', 
    'uae', 
    'www.bokhalifa.com',
    '00971503492221', 
    'dubai',
    'مدير الموقع',
    '$time',
    1 
    )");
	$title   = "السلام عليكم ورحمة الله وبركاته";
	$content = "تم بحمدالله تركيب البرنامج بنجاح";
	$BO->query("INSERT INTO ib4arab_news VALUES('', '$adminname', '$time', '$title','$content')");

	$titl   = "فله للايجار";
	$des = "فله في دبي في منطقة محيصنة رقم 3 بسعر مغري";
    $expire_days   = "لا يوجد";
    $demo   = "style_images/1.gif";
	$BO->query("INSERT INTO ib4arab_clasif VALUES ('','1', '$adminname', 'www.ib4arab.com', '0503492221', 'bo@ib4arab.com', 'uae', '$time', '1', '$titl', '$des', '1', '1', '$demo','$expire_days', '3000', '2004')");	
    $titl2   = "هاتف";
	$des2 = "هاتف";
    $expire_days   = "لا يوجد";
    $demo2   = "style_images/1.gif";
	$BO->query("INSERT INTO ib4arab_clasif VALUES ('', '1', '$adminname', 'www.ib4arab.com', '0503492221', 'bo@ib4arab.com', 'uae', '$time', '1', '$titl2', '$des2', '1', '1',  '$demo2','$expire_days', '1000', '2004')");
	$time = time(); 
	$BO->query("INSERT INTO ib4arab_upgrade_history VALUES ('', '$config[version]', '$time')");

echo "<body bgcolor='#ece9d8'>
<table width='80%' border='0' cellpadding='0' cellspacing='0' align='center'>
							<tr>
							 <td valign='top'>
								<img border='0' src='style_images/bo.gif' width='90' height='67'></td>
							 <td>
								<p align='center'>&nbsp;<br /><br />
							 	<font color='#000000'>تم تركيب البرنامج
							 	</font>
							 <br /><br /><br />                                      
                             <b align='center'><a href='acp'>
								اضغط هنا للدخول الى لوحة التحكم</a><br /> لا تنسى حذف هذا الملف</b>
                             </div>
                             </div>
							   ";	
}
?>