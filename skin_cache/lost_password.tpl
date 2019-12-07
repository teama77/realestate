{include file="header.tpl"}
<p align="center" class="tableborder"><a href="index.php">{$lang.ind_title}</a></p>
  <form name="add" method="post" action="SendPassword.php?start=1" enctype='multipart/form-data'>

<table width="100%" border="0" cellspacing="1" cellpadding="4" align="center">
  <tr>
    <td	width="100%" class='bitTitle'>{$lang.Enter_userName}</td>
  </tr>
  </table>
  <table width="100%" border="0" cellspacing="1" cellpadding="2" align="center">
    <tr>
      <td width="30%" valign="top" class="row1">{$lang.s_userName}</td>
      <td width="70%" valign="top" class="row2"><input name="username" type="text" value=""></td>
    </tr>

<table width="100%" border="0" cellspacing="1" cellpadding="4" align="center">
  <tr>
    <td	width="100%" class='bitTitle'><input type="submit" value="{$lang.do_Send_Password}"></td>
  </tr>
  </table>
  </form>
{include file="footer.tpl"}