<?xml version="1.0" encoding="{$encode}"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="rtl" xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title>{$title}</title>
<link rel="stylesheet" type="text/css" href="css/index.css" />
</head>
<body>
<p align="center">{$title}</p>
<div align="center" dir="rtl">
  <center>
  <table border="1" cellpadding="0" cellspacing="0" width="407" height="1">
    <tr>
      <td class="row1" width="145" height="1" align="center"><a href="index.php">{$lang.ind_title}</a></td>
      <td class="row2" width="139" height="1" align="center"><a href="categories.php">{$lang.all_cats}</a></td>
{if $smarty.session.logged_in != 0}
      <td class="row1" width="115" height="1" align="center"><a href="usercp.php">{$lang.admin_table_cpanel}</a></td>
{/if}
    </tr>
  </table>
  </center>
</div>