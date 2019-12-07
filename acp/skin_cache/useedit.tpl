<link rel="stylesheet" type="text/css" href="css/index.css" />
  <form name="add" method="post" action="users.php?doedit=1" enctype='multipart/form-data'>
  <input type="hidden" name="userid" value="{$userid}" />
<table width="100%" border="0" cellspacing="1" cellpadding="4" align="center">
  <tr>
    <td	width="100%" class='bitTitle'>{$lang.edit_c_edit} {$username}</td>
  </tr>
  </table>
  <table width="100%" border="0" cellspacing="1" cellpadding="2" align="center">
    <tr>
      <td width="30%" valign="top" class="row1">{$lang.register_falid_table_username}</td>
      <td width="70%" valign="top" class="row2"><input name="username" type="text" value="{$username}"></td>
    </tr>
    <tr>
      <td width="30%" valign="top" class="row1">{$lang.register_falid_table_email}</td>
      <td width="70%" valign="top" class="row2"><input name="email_address" type="text" value="{$email_address}"></td>
    </tr>
    <tr>
      <td valign="top" width="30%" class="row1">{$lang.register_falid_table_country}</td>
      <td valign="top" width="70%" class="row2"><input name="country" type="text" value="{$country}"></td>
    </tr>
    <tr>
      <td valign="top" width="30%" class="row1">{$lang.register_falid_table_url}</td>
      <td valign="top" width="70%" class="row2"><input name="url" type="text" value="{$url}"></td>
    </tr>
    <tr>
      <td valign="top" width="30%" class="row1">{$lang.register_falid_table_phone}</td>
      <td valign="top" width="70%" class="row2"><input name="phone" type="text" value="{$phone}"></td>
    </tr>
    <tr>
      <td valign="top" width="30%" class="row1">{$lang.register_falid_table_city}</td>
      <td valign="top" width="70%" class="row2"><input name="city" type="text" value="{$city}"></td>
    </tr>
    <tr>
      <td valign="top" width="30%" class="row1">{$lang.register_falid_table_info}</td>
      <td valign="top" width="70%" class="row2"><input name="job" type="text" value="{$job}"></td>
    </tr>
    <tr>
      <td valign="top" width="30%" class="row1">{$lang.register_falid_table_password}<br /> (md5-encrypted): </td>
      <td valign="top" width="70%" class="row2"><input name="password" type="text" value=""></td>
    </tr>
    <tr>
      <td valign="top" width="30%" class="row1">{$lang.register_falid_table_admibcp}<br /> {$lang.adm_desc}<br />{$lang.adm_desc_0}<br />{$lang.adm_desc_1}<br /> </td>
      <td valign="top" width="70%" class="row2"><input name="admibcp" type="text" value="{$admibcp}"></td>
    </tr>

<table width="100%" border="0" cellspacing="1" cellpadding="4" align="center">
  <tr>
    <td	width="100%" class='bitTitle'><input type="submit" value="{$lang.do_register}"></td>
  </tr>
  </table>
  </form>
{include file="footer.tpl"}