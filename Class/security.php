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
if (SubFile == 1) {
require_once("../Class/function.php");
}
if (SubFile != 1) {
require_once("Class/function.php");
}


function CheckSecurity()
{
	session_start();
	if (isset($_SESSION['username']))
	{
		return true;
	}
	else
	{
		ShowErrorForm();
	}
}


function Login($username,$password)
{
	global $BO;
	session_start();
	if (empty($username) || empty($password))
	{
		Logout("Login Failed: You must supply both a username and a password, please try again");
	}
    $password = md5($password);
    $result = $BO->query("SELECT * FROM ib4arab_users WHERE username='$username' AND password='$password'");
	$matches = $BO->num_rows($result);
	if ($matches > 0)
	{
    	$rows =	$BO->fetch_array($result);
		$_SESSION['username'] = $rows['username'];
		return true;
	}
	else
	{
		Logout("Login Failed: Please verify your email address AND password then try again");
	}
}


function Logout($msg=NULL)
{
	session_start();
	unset($_SESSION['user_name']);
	session_destroy();
	ShowredirectForm();
}
?>