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
	$ib4arab->display('postnews.tpl');
	}

	//=====================================================	

	else if ($action=="do")
	{
	$time = time();
	$DoUpdate= $BO->query("update ib4arab_news set name='$ib4arabadmin',
                                                   date='$time',
                                                   title='$title',
                                                   content='$content'");
	if(!$DoUpdate)
	{
	$error_msg = "$lang[Update_c_er]";
	}
	else
	{
	$ib4arab->assign('text',$lang[adm_edit_browser]);
	$ib4arab->assign('text2',$lang[adm_table_browser]);
	$ib4arab->assign("url",postnews.".php?action=edit");
	$ib4arab->display("redirect.tpl"); 
	}
}

	//=====================================================	

	else if ($action=="boedit")
	{
    $id = intval($id);
	$result = $BO->query("SELECT * FROM ib4arab_news WHERE id='$id'");
    $info   = $BO->fetch_array($result);
    $id               = $info[id];
    $name             = $info[name];
    $title            = $info[title];
    $content          = $info[content];

   	$ib4arab->assign("id",$info[id]);
   	$ib4arab->assign("name",$info[name]);
    $ib4arab->assign("title",$info[title]);
   	$ib4arab->assign("content",$info[content]);
	$ib4arab->display('boedit.tpl');
}

	//=====================================================	

	else if ($action=="remove")
	{
    $id = intval($id);

	$BO->query("DELETE FROM ib4arab_news WHERE id='$id'");
	$ib4arab->assign('text',$lang[adm_remove_browser]);
	$ib4arab->assign('text2',$lang[adm_table_browser]);
	$ib4arab->assign("url",postnews.".php?action=edit");
	$ib4arab->display("redirect.tpl"); 
   }
}
?>