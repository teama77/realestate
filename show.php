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

	  if ($show == 1) {
	  $catid = intval($catid);
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
	  $result = $BO->query("SELECT * FROM ib4arab_clasif WHERE open='1' and catid='$catid'");
	  if ($BO->num_rows($result) == 0 ) {
	  die(error_msg($lang['no_file']));
	  }
	  $result = $BO->query("UPDATE ib4arab_categories SET views=views+1 WHERE catid='$catid'");
	  if (!$result = $BO->query( "SELECT * from ib4arab_clasif WHERE open='1' and catid='$catid' ORDER BY id DESC LIMIT $start,$perpage"))
	  {
	  return error($BO->error(), $lang['check_db_settings'] . "|" . $lang['check_db_on']);
	  }
	  $page_result = mysql_query("SELECT * FROM ib4arab_clasif WHERE open='1' and catid='$catid'");
	  $Page->SetPagerN($perpage,mysql_num_rows($page_result));
	  while($row = $BO->fetch_array($result))
	  {
      $clas[] = $row;
	  $ib4arab->assign("clas",$clas);
	  $ib4arab->assign("Page",$Page->PageNum());
	  }
	  $ib4arab->display('show.tpl');
	  }

	//=====================================================	

	  if ($show == 2) {
	  $id = intval($id); ## id number should be integer


	  $result = $BO->query("UPDATE ib4arab_clasif SET views=views+1 WHERE id='$id'");

	  $result = $BO->query("SELECT * FROM ib4arab_clasif WHERE open='1' and id='$id'");
	  $info   = $BO->fetch_array($result);
	  $id               = $info[id];
	  $name             = $info[username];
	  $phone            = $info[phone];
	  $email_address    = $info[email_address];
	  $country          = $info[country];
      $info[dateline]   = format_date($info[dateline]);
	  $dateline         = $info[dateline];
	  $titl             = $info[titl];
	  $description      = $info[description];
	  $views            = $info[views];
	  $demo             = $info[demo];
	  $expire_days      = $info[expire_days];
	  $Price            = $info[Price];
	  $Features         = $info[Features];
	  $Year             = $info[Year];

	  $ib4arab->assign("id",$info[id]);
	  $ib4arab->assign("name",$info[username]);
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
	  $ib4arab->assign("Features",$info[Features]);
	  $ib4arab->assign("Year",$info[Year]);
	  $ib4arab->display('claslist.tpl');
}

	//=====================================================	

	  if ($show == 3) {
	  $id = intval($id); 
	  $result = $BO->query("SELECT * FROM ib4arab_clasif WHERE open='1' and id='$id'");
	  $info   = $BO->fetch_array($result);
	  $id               = $info[id];
	  $titl             = $info[titl];

	  $ib4arab->assign("id",$info[id]);
	  $ib4arab->assign("titl",$info[titl]);
	  $ib4arab->assign("title","BO - Send Mail");
	  $ib4arab->display("send.tpl");

}
?>