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

    else if ($action=="doadd")
    {
    if (empty($title) or empty($content)) {
    die(error_msg($lang[add_c_empty]));
    }
    $time = time();
    $result = $BO->query("INSERT INTO ib4arab_news (id,
                                                   name,
                                                   date,
                                                   title,
                                                   content) 
                                                   VALUES (
                                                   '',
                                                   '$ib4arabadmin',
                                                   '$time',
                                                   '$title',
                                                   '$content')");
    if(!$result){
    $error_msg = "$lang[add_c_er]";
    } else {
	$ib4arab->assign('text',$lang[adm_add_browser]);
	$ib4arab->assign('text2',$lang[adm_table_browser]);
	$ib4arab->assign("url",postnews.".php?action=edit");
	$ib4arab->display("redirect.tpl"); 
    }
}

	//=====================================================	

    else if ($action=="edit")
    {
    $result = $BO->query("SELECT * FROM ib4arab_news ORDER BY id DESC");
    while($news = $BO->fetch_array($result))
    {
    $news["date"] = format_date($news["date"]);
    $new[] = $news;
    $ib4arab->assign("new",$new);
    }
    $ib4arab->display('edit.tpl');
    }
}
?>