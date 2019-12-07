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

    $ib4arab->assign('PHP_SELF', $_SERVER["PHP_SELF"]."?sub=$sub");
    $ib4arab->assign('sub', $sub);

	//=====================================================	

    if($sub == "template")
    {
    $cachedir = $config["ClassiFiedspath"]."/acp/skin_cache_c";
    if($_POST["clean"] != "") //cleaning cache
    {
        $handle = opendir($cachedir);
        while (false !== ($file_1 = readdir($handle)))
        {
           //cache directory
           if($file_1 != "." && $file_1 != "..")
           {
            	if(is_dir($cachedir."/".$file_1))
                {
                 	$subdir_1 = opendir($cachedir."/".$file_1);
                    while (false !== ($file_2 = readdir($subdir_1)))
                    {
                        //first subdir
                        if($file_2 != "." && $file_2 != "..")
                        {
                         	if(is_dir($cachedir."/".$file_1."/".$file_2))
                            {
                                //second subdir
                                $subdir_2 = opendir($cachedir."/".$file_1."/".$file_2);
                                while (false !== ($file_3 = readdir($subdir_2)))
                                {
                                    if($file_3 != "." && $file_3 != "..")
                                    {
                                     	if(unlink($cachedir."/".$file_1."/".$file_2."/".$file_3)) $file[] = $cachedir."/".$file_1."/".$file_2."/".$file_3."<br />";;
                                    }//end if #3
                                }//end while #3
                                closedir($subdir_2);
                                if(rmdir($cachedir."/".$file_1."/".$file_2)) $dir[] = $cachedir."/".$file_1."/".$file_2."<br />";;
                            }else{
                                if(unlink($cachedir."/".$file_1."/".$file_2)) $file[] = $cachedir."/".$file_1."/".$file_2."<br />";;
                            }//end if/else #2
                        }//end if #2
                    }//end while #2
                    closedir($subdir_1);
                    if(rmdir($cachedir."/".$file_1)) $dir[] = $cachedir."/".$file_1."<br />";
                }else{
                    if(unlink($cachedir."/".$file_1)) $file[] = $cachedir."/".$file_1."<br />";;
                }//end if/else #1
           }//end if #1
        }//end while #1
        closedir($handle);
        $ib4arab->assign('cleaned', '1');
        $ib4arab->assign('dir', $dir);
        $ib4arab->assign('file', $file);

        }else{ //calculate space used by cache

	//=====================================================	

        $filesize = 0;
        $handle = opendir($cachedir);
        while (false !== ($file_1 = readdir($handle)))
        {
           //cache directory
           if($file_1 != "." && $file_1 != "..")
           {
                if(is_dir($cachedir."/".$file_1))
                {
                    $subdir_1 = opendir($cachedir."/".$file_1);
                    while (false !== ($file_2 = readdir($subdir_1)))
                    {
                        //first subdir
                        if($file_2 != "." && $file_2 != "..")
                        {
                            if(is_dir($cachedir."/".$file_1."/".$file_2))
                            {
                                //second subdir
                                $subdir_2 = opendir($cachedir."/".$file_1."/".$file_2);
                                while (false !== ($file_3 = readdir($subdir_2)))
                                {
                                    if($file_3 != "." && $file_3 != "..")
                                    {
                                     	$filesize += filesize($cachedir."/".$file_1."/".$file_2."/".$file_3);
                                    }//end if #3
                                }//end while #3
                                closedir($subdir_2);
                            }else{
                                $filesize += filesize($cachedir."/".$file_1."/".$file_2);
                            }//end if/else #2
                        }//end if #2
                    }//end while #2
                    closedir($subdir_1);
                }else{
                    $filesize += filesize($cachedir."/".$file_1);
                }//end if/else #1
           }//end if #1
        }//end while #1
        closedir($handle);
        $filesize = round($filesize / 1024, 1);
        $ib4arab->assign('filesize', $filesize);
        }
        }
        $ib4arab->display('admcache.tpl');
}
?>