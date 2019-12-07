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

	  if ($show == 1) {
	  $id = intval($id);
	  $result = $BO->query("SELECT * FROM ib4arab_clasif WHERE open='1' and id='$id'");
	  $info   = $BO->fetch_array($result);
	  $id	   	   	    = $info[id];
	  $username	   	    = $info[username];
	  $phone	   	    = $info[phone];
	  $email_address    = $info[email_address];
	  $country          = $info[country];
	  $dateline         = $info[dateline];
	  $titl             = $info[titl];
	  $description      = $info[description];
	  $views            = $info[views];
	  $demo             = $info[demo];
	  $expire_days      = $info[expire_days];
	  $Price            = $info[Price];
	  $Year             = $info[Year];

   	  $ib4arab->assign("id",$info[id]);
   	  $ib4arab->assign("username",$info[username]);
   	  $ib4arab->assign("phone",$info[phone]);
   	  $ib4arab->assign("email_address",$info[email_address]);
   	  $ib4arab->assign("country",$info[country]);
   	  $ib4arab->assign("dateline",$info[dateline]);
   	  $ib4arab->assign("titl",$info[titl]);
   	  $ib4arab->assign("description",$info[description]);
   	  $ib4arab->assign("views",$info[views]);
   	  $ib4arab->assign("demo",$info[demo]);
   	  $ib4arab->assign("expire_days",$info[expire_days]);
   	  $ib4arab->assign("Price",$info[Price]);
   	  $ib4arab->assign("Year",$info[Year]);
   	  $ib4arab->assign('domain', $config["domain"]);
   	  $ib4arab->display('print.tpl');
}  
?>