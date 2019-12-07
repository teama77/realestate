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
	  if (!$result = $BO->query( "SELECT * from ib4arab_categories ORDER BY catid DESC LIMIT $start,$perpage"))
	  {
	  return error($BO->error(), $lang['check_db_settings'] . "|" . $lang['check_db_on']);
	  }
	  $page_result = mysql_query("SELECT * FROM ib4arab_categories");
	  $Page->SetPagerN($perpage,mysql_num_rows($page_result));
	  while($row = $BO->fetch_array($result))
	  {
	  $pic[] = $row;
	  $ib4arab->assign("pic",$pic);
	  $ib4arab->assign("Page",$Page->PageNum());
	  }
      $ib4arab->assign('scripturl', $config["domain"]);
	  $ib4arab->display('categories.tpl');
?>