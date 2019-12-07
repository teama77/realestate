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
    $result = $BO->query( "SELECT * FROM ib4arab_categories ORDER BY catid DESC LIMIT $start,$perpage");
    $page_result = $BO->query("SELECT * FROM ib4arab_categories WHERE catid='$catid'");
    $Page->SetPagerN($perpage,$BO->num_rows($page_result));
    while($row = $BO->fetch_array($result))
    {
    $row["signup_date"] = format_date($row["signup_date"]);
    $ca[] = $row;
    $ib4arab->assign("ca",$ca);
    $ib4arab->assign("Page",$Page->PageNum());
    }
    $ib4arab->display('cat.tpl');
    }

	//=====================================================	

    if ($remove == 1) {
    $catid = intval($catid);
	$BO->query("DELETE FROM ib4arab_categories WHERE catid='$catid'");
	$ib4arab->assign('text',$lang[adm_cat_del_browser]);
	$ib4arab->assign('text2',$lang[adm_table_browser]);
	$ib4arab->assign("url",categories.".php?all=1");
	$ib4arab->display("redirect.tpl"); 
    }

	//=====================================================	

    if ($add == 1) {
    $ib4arab->display('categories.tpl');
    }

	//=====================================================	

    if ($doadd == 1) {
    if (empty($name) or empty($description)) {
    die(error_msg($lang[adm_register_er_empty]));
    }
    $Check = $BO->query("SELECT * FROM ib4arab_categories WHERE name='$name'");
    if ($BO->num_rows($Check) != 0)  { die(error_msg($lang[adm_cat_er_name])); }
    $result = $BO->query("INSERT INTO ib4arab_categories (name,
                                                          description,
                                                          nb,
                                                          image,
                                                          views) 
                                                          VALUES (
                                                          '$name',
                                                          '$description',
                                                          '0',
                                                          '$image',
                                                          '')");
    if(!$result){
    $error_msg = "$lang[adm_add_c_er]";
    } else {
	$ib4arab->assign('text',$lang[adm_add_u_browser]);
	$ib4arab->assign('text2',$lang[adm_table_browser]);
	$ib4arab->assign("url",categories.".php?all=1");
	$ib4arab->display("redirect.tpl"); 
    }
    }

	//=====================================================	

    if ($edit == 1) {
    $userid = intval($userid);
    $result = $BO->query("SELECT * FROM ib4arab_categories WHERE catid='$catid'");
    $row = $BO->fetch_array($result);
    $catid        = $row[catid];
    $name         = $row[name];
    $description  = $row[description];
    $nb           = $row[nb];
    $image        = $row[image];
    $views        = $row[views];

    $ib4arab->assign("catid",$row[catid]);
	$ib4arab->assign("name",$row[name]);
    $ib4arab->assign("description",$row[description]);
    $ib4arab->assign("nb",$row[nb]);
	$ib4arab->assign("image",$row[image]);
	$ib4arab->assign("views",$row[views]);
    $ib4arab->display('catedit.tpl');
    }

	//=====================================================	

    if ($doedit == 1) {
    $DoUpdate= $BO->query("update ib4arab_categories set catid='$catid',
                                                         name='$name',
                                                         description='$description',
                                                         nb='$nb',
                                                         image='$image',
                                                         views='$views'
                                                         WHERE catid='$catid'");

    if(!$DoUpdate)
    {
	$error_msg = "$lang[Update_c_er]";
    }
    else
    {
	$ib4arab->assign('text',$lang[adm_cat_edit_browser]);
	$ib4arab->assign('text2',$lang[adm_table_browser]);
	$ib4arab->assign("url",categories.".php?all=1");
	$ib4arab->display("redirect.tpl"); 
    }
  }
}
?>