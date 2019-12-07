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

	  if (!$result = $BO->query("SELECT id,name,date,title ,content FROM ib4arab_news ORDER BY id DESC LIMIT 0, 1"))
	  {
	  return error($BO->error(), $lang['check_db_settings'] . "|" . $lang['check_db_on']);
	  }
	  while($news = $BO->fetch_array($result))
	  {
	  $tpl_news[] = $news;
	  $ib4arab->assign('tpl_news', $tpl_news);
	  }
	  if (!$result = $BO->query( "SELECT * from ib4arab_clasif WHERE open='1' ORDER BY id DESC LIMIT 0, 5"))
	  {
	  return error($BO->error(), $lang['check_db_settings'] . "|" . $lang['check_db_on']);
	  }
	  while($row = $BO->fetch_array($result))
	  {
      $row["dateline"] = format_date($row["dateline"]);
	  $clas[] = $row;
	  $ib4arab->assign("clas",$clas);
	  }
	  $ib4arab->display('index.tpl');
?>