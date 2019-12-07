<link rel="stylesheet" type="text/css" href="css/index.css" />
  <form name="add" method="post" action="show.php?doedit=1" enctype='multipart/form-data'>
  <input type="hidden" name="id" value="{$id}" />
<table width="100%" border="0" cellspacing="1" cellpadding="4" align="center">
  <tr>
    <td	width="100%" class='bitTitle'>{$lang.adm_c_edit} {$titl}  {$lang.adm_c_by}{$cname}</td>
  </tr>
  </table>
  <table width="100%" border="0" cellspacing="1" cellpadding="2" align="center">
    <tr>
      <td width="30%" valign="top" class="row1">{$lang.adm_falid_url}</td>
      <td width="70%" valign="top" class="row2"><input name="url" type="text" value="{$url}"></td>
    </tr>
    <tr>
      <td width="30%" valign="top" class="row1">{$lang.adm_falid_phone}</td>
      <td width="70%" valign="top" class="row2"><input name="phone" type="text" value="{$phone}"></td>
    </tr>
    <tr>
      <td valign="top" width="30%" class="row1">{$lang.adm_falid_email_address}</td>
      <td valign="top" width="70%" class="row2"><input name="email_address" type="text" value="{$email_address}"></td>
    </tr>
    <tr>
      <td valign="top" width="30%" class="row1">{$lang.adm_falid_country}</td>
      <td valign="top" width="70%" class="row2"><input name="country" type="text" value="{$country}"></td>
    </tr>
    <tr>
      <td valign="top" width="30%" class="row1">{$lang.adm_falid_titl}</td>
      <td valign="top" width="70%" class="row2"><input name="titl" type="text" value="{$titl}"></td>
    </tr>
    <tr>
      <td valign="top" width="30%" class="row1">{$lang.adm_falid_demo}</td>
      <td valign="top" width="70%" class="row2"><input name="demo" type="text" value="{$demo}"></td>
    </tr>
    <tr>
      <td valign="top" width="30%" class="row1">{$lang.adm_falid_expire_days}</td>
      <td valign="top" width="70%" class="row2"><input name="expire_days" type="text" value="{$expire_days}"></td>
    </tr>
    <tr>
      <td valign="top" width="30%" class="row1">{$lang.adm_falid_Price}</td>
      <td valign="top" width="70%" class="row2"><input name="Price" type="text" value="{$Price}"></td>
    </tr>
    <tr>
      <td valign="top" width="30%" class="row1">{$lang.adm_falid_Year} </td>
      <td valign="top" width="70%" class="row2"><input name="Year" type="text" value="{$Year}"></td>
    </tr>
  <tr>
      <td valign="top" width="30%" class="row1">{$lang.adm_falid_cat}**<br>{$lang.adm_falid_cate} : {$cat}</td>
      <td valign="top" width="70%" class="row2"><select name="catid">
          <option value="">{$lang.adm_falid_choose}</option>
          {$catid}
        </select></td>
  </tr>
    <tr>
      <td valign="top" width="30%" class="row1">{$lang.adm_falid_description}</td>
      <td valign="top" width="70%" class="row2"><textarea style="width:100%" name="description" rows="10" cols="60">{$description}</textarea></td>
    </tr>


<table width="100%" border="0" cellspacing="1" cellpadding="4" align="center">
  <tr>
    <td	width="100%" class='bitTitle'><input type="submit" value="{$lang.adm_falid_submit}"></td>
  </tr>
  </table>
  </form>
{include file="footer.tpl"}