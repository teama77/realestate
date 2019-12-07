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

    $result = $BO->query( "SELECT * FROM ib4arab_clasif WHERE open='1' ORDER BY id DESC LIMIT $start,$perpage");

    $page_result = $BO->query("SELECT * FROM ib4arab_clasif WHERE open='1' and id='$id'");
    $Page->SetPagerN($perpage,$BO->num_rows($page_result));
    while($row = $BO->fetch_array($result))
    {
    $row["dateline"] = format_date($row["dateline"]);
    $clas[] = $row;

    $ib4arab->assign("clas",$clas);
    $ib4arab->assign("Page",$Page->PageNum());
    }
    $result = $BO->query( "SELECT * FROM ib4arab_categories WHERE catid='$row[catid]'");
    while($row = $BO->fetch_array($result))
    {
    $clas[] = $row;
    $ib4arab->assign("clas",$clas);
    }
    $ib4arab->display('userclas.tpl');
}

	//=====================================================	

    if ($open == 1) {
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
    $result = $BO->query( "SELECT * FROM ib4arab_clasif WHERE open='0' ORDER BY id DESC LIMIT $start,$perpage");
    $page_result = $BO->query("SELECT * FROM ib4arab_clasif WHERE open='0' and id='$id'");
    $Page->SetPagerN($perpage,$BO->num_rows($page_result));
    while($row = $BO->fetch_array($result))
    {
    $row["dateline"] = format_date($row["dateline"]);
    $clas[] = $row;
    $ib4arab->assign("clas",$clas);
    $ib4arab->assign("Page",$Page->PageNum());
    }
    $result = $BO->query( "SELECT * FROM ib4arab_categories WHERE catid='$row[catid]'");
    while($row = $BO->fetch_array($result))
    {
    $clas[] = $row;
    $ib4arab->assign("clas",$clas);
    }
    $ib4arab->display('openuserclas.tpl');
}

	//=====================================================	

    if ($permi == 1) {
    $id = intval($id);
    $result = $BO->query("UPDATE ib4arab_clasif SET open='1' WHERE id='$id'");
	$ib4arab->assign('text',$lang[adm_upd_browser]);
	$ib4arab->assign('text2',$lang[adm_table_browser]);
	$ib4arab->assign("url",show.".php?all=1");
	$ib4arab->display("redirect.tpl"); 
}

	//=====================================================	

    if ($remove == 1) {
    $id = intval($id);
	$BO->query("DELETE FROM ib4arab_clasif WHERE id='$id'");
	$ib4arab->assign('text',$lang[adm_del_browser]);
	$ib4arab->assign('text2',$lang[adm_table_browser]);
	$ib4arab->assign("url",show.".php?all=1");
	$ib4arab->display("redirect.tpl"); 
}

	//=====================================================	

    if ($edit == 1) {
    $id = intval($id);
    $result = $BO->query("SELECT * FROM ib4arab_clasif WHERE id='$id'");
    $row = $BO->fetch_array($result);
    $id               = $row[id];
    $cname            = $row[username];
    $phone            = $row[phone];
    $email_address    = $row[email_address];
    $country          = $row[country];
    $titl             = $row[titl];
    $description      = $row[description];
    $demo             = $row[demo];
    $expire_days      = $row[expire_days];
    $Price            = $row[Price];
    $Year             = $row[Year];
    $catid            = $row[catid];
    $url              = $row[url];

	$ib4arab->assign("url",$row[url]);
	$ib4arab->assign("cat",$row[catid]);
	$ib4arab->assign("id",$row[id]);
   	$ib4arab->assign("cname",$row[username]);
    $ib4arab->assign("phone",$row[phone]);
    $ib4arab->assign("email_address",$row[email_address]);
   	$ib4arab->assign("country",$row[country]);
    $ib4arab->assign("titl",$row[titl]);
   	$ib4arab->assign("description",$row[description]);
    $ib4arab->assign("demo",$row[demo]);
   	$ib4arab->assign("expire_days",$row[expire_days]);
    $ib4arab->assign("Price",$row[Price]);
    $ib4arab->assign("Year",$row[Year]);
    $result = $BO->query("SELECT catid,name FROM ib4arab_categories");
    $catid	=	"";
    while($info = $BO->fetch_array($result))
    {
    $catid .= "<option value='$info[catid]'>$info[name]</option>";
    }
   	$ib4arab->assign("catid",$catid);
    $ib4arab->display('clasedit.tpl');
}

	//=====================================================	

    if ($doedit == 1) {
    $DoUpdate= $BO->query("update ib4arab_clasif set catid='$catid',
                                                     url='$url',
                                                     phone='$phone',
                                                     url='$url',
                                                     phone='$phone',
                                                     email_address='$email_address',
                                                     country='$country',
                                                     titl='$titl',
                                                     description='$description',
                                                     demo='$demo',
                                                     expire_days='$expire_days',
                                                     Price='$Price',
                                                     Year='$Year'
                                                     WHERE id='$id'");
    if(!$DoUpdate)
    {
    $error_msg = "$lang[Update_c_er]";
    }
    else
    {
	$ib4arab->assign('text',$lang[adm_c_edit_browser]);
	$ib4arab->assign('text2',$lang[adm_table_browser]);
	$ib4arab->assign("url",show.".php?all=1");
	$ib4arab->display("redirect.tpl"); 
    }
  }
}
?>