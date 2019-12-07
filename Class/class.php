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
|   > Module written by MaaSTaaR
|
|	> Module Version Number: 1.1 BETA 1
+--------------------------------------------------------------------------
*/

class BOSQL {
var $host="localhost";
var $db_username="";
var $db_password="";
var $db_name="";

function setinfo($host,$db_username,$db_password,$db_name) {
  $this->host        = $host;
  $this->db_username = $db_username;
  $this->db_password = $db_password;
  $this->db_name     = $db_name;
}

function connect() {
  $this->connect=mysql_connect($this->host,$this->db_username,$this->db_password) or die($this->error_msg("·„ Ì „ﬂ‰ „‰ «·« ’«·"));
}

function selectdb() {
  $this->select=mysql_select_db($this->db_name) or die($this->error_msg("Œÿ√ ›Ì «Œ Ì«— ﬁ«⁄œ… «·»Ì«‰« "));
}

function close() {
  $this->close=mysql_close() or die($this->error_msg("·„ Ì „ﬂ‰ „‰ «€·«ﬁ «·« ’«·"));
}

function query($query) {
  $result = mysql_query($query) or die($this->error_msg("Œÿ√ ›Ì «·«” ⁄·«„"));
  return $result;

}

function fetch_array($result) {
  $out = mysql_fetch_array($result);
  return $out;
}

function result($result){
  $out = @mysql_result($result,0);
  return $out;
  }


function num_rows($result) {
  $out = mysql_num_rows($result);
  return $out;
    }

function fetch_row($result) {
  $out = @mysql_fetch_row($result);
  return $out;
}

function get_insert_id()
{
return  mysql_insert_id($this->connect);
}

function error_msg($msg) {
  $error_no = mysql_errno();
  $error_msg = mysql_error();

  $this->style();
  echo "<html><head><title>Œÿ√ ›Ì ﬁÊ«⁄œ «·»Ì«‰« </title><body>";
  echo '<div align="center">';
  echo "«·„⁄–—Â Â‰«ﬂ „‘ﬂ·Â ›Ì ﬁÊ«⁄œ «·»Ì«‰«  Ê ”»»Â« : ";
  echo $msg;
  echo '<br>';
  echo $error_msg;
  echo '<br>';
  echo '</div>';
  exit();
}
function style() {
  echo "<style>BODY{FONT-FAMILY:tahoma;FONT-SIZE:12px;}</style>";
}
}
?>