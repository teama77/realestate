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

	  if (empty( $search_q ) )
	  {
	  die(error_msg($lang['no_help_file']));
      }
	  $search_string = strtolower( str_replace( "*" , "%", $search_q ) );
	  $search_string = preg_replace( "/[<>\!\@£\$\^&\+\=\=\[\]\{\}\(\)\"':;\.,\/]/", "", $search_string );
	  if (!$result = $BO->query("SELECT * from ib4arab_clasif WHERE open = 1 AND LOWER(titl) LIKE '%$search_string%' or LOWER(description) LIKE '%$search_string%' ORDER BY titl ASC"))
	  {
	  return error($BO->error(), $lang['check_db_settings'] . "|" . $lang['check_db_on']);
	  }
	  while($row = $BO->fetch_array($result))
	  {
      $clas[] = $row;
	  $ib4arab->assign("clas",$clas);
	  }
	  $ib4arab->display('search_results.tpl');
?>