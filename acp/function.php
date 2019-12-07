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

/*-----------------------------------------------
  Import $INFO
 ------------------------------------------------*/

     define("SubFile",1);
     include '../Class/conf_global.php';
     include '../Class/function.php';
     include '../Class/security.php';
     function startTimer()
     {
     global $starttime;
     $mtime = microtime ();
     $mtime = explode (' ', $mtime);
     $mtime = $mtime[1] + $mtime[0];
     $starttime = $mtime;
     }
     function endTimer()
     {
     global $starttime;
     $mtime = microtime ();
     $mtime = explode (' ', $mtime);
     $mtime = $mtime[1] + $mtime[0];
     $endtime = $mtime;
     $totaltime = round (($endtime - $starttime), 5);
     return $totaltime;
     }
     if((file_exists($config["ClassiFiedspath"]."/install.php")))
     {
     die(error_msg($lang['error_deleteinstall']));
     exit();
}
?>