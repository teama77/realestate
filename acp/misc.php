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

	if($action=="")
	{


	}

	//=====================================================	

	else if ($action=="menue")
	{


	$ib4arab->display('menue.tpl');


	}

	//=====================================================	

	else if ($action=="logo")
	{

	$ib4arab->display('logoadmin.tpl');

	}

	//=====================================================	

	else if ($action=="top")
	{

	$ib4arab->display('heaadmin.tpl');
	}

	//=====================================================	

	else if ($action=="welcome")
	{
	$result = $BO->query( "SELECT * from ib4arab_upgrade_history ORDER BY upgrade_id DESC");

	while($row = $BO->fetch_array($result))
	{
	$row["upgrade_date"] = format_date($row["upgrade_date"]);

	$clas[] = $row;

	$ib4arab->assign("clas",$clas);
	}

	$result = $BO->query( "SELECT * from ib4arab_admin_sessions ORDER BY session_id DESC");

	while($row = $BO->fetch_array($result))
	{
	$row["session_log_in_time"] = format_date($row["session_log_in_time"]);

	$onl[] = $row;

	$ib4arab->assign("onl",$onl);
	}

	$ib4arab->display('welcome.tpl');
	}

	//=====================================================	

	else if ($action=="slice")
	{

	$ib4arab->display('slice.tpl');
   }
}
?>