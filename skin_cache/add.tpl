{include file="header.tpl"}
<p align="center" class="tableborder"><a href="index.php">{$lang.ind_title}</a> -> <a href="usercp.php">{$lang.admin_table_cpanel}</a></p>
  <form name="add" method="post" action="usercp.php?action=doadd" enctype='multipart/form-data'>

<table width="100%" border="0" cellspacing="1" cellpadding="4" align="center">
  <tr>
    <td	width="100%" class='bitTitle'>{$lang.add_c_add}</td>
  </tr>
  </table>
  <table width="100%" border="0" cellspacing="1" cellpadding="2" align="center">
    <tr>
      <td width="30%" valign="top" class="row1">{$lang.add_c_name}</td>
      <td width="70%" valign="top" class="row2"><input name="titl" type="text" id="titl"></td>
    </tr>
    <tr>
      <td valign="top" width="30%" class="row1">{$lang.add_c_url}<br>{$lang.add_c_url_n}</td>
      <td valign="top" width="70%" class="row2"><input name="url" type="text" id="url"></td>
    </tr>
    <tr>
      <td valign="top" width="30%" class="row1">{$lang.add_c_phone}<br>{$lang.add_c_phone_n}</td>
      <td valign="top" width="70%" class="row2"><input name="phone" type="text" id="phone"></td>
    </tr>
    <tr>
      <td valign="top" width="30%" class="row1">{$lang.add_c_country}<br>{$lang.add_c_country_n}</td>
      <td valign="top" width="70%" class="row2"><input name="country" type="text" id="country"></td>
    </tr>
    <tr>
      <td valign="top" width="30%" class="row1">{$lang.add_c_demo}<br>{$lang.add_c_demo_n}</td>
      <td valign="top" width="70%" class="row2"><input name="demo" type="text" id="demo"></td>
    </tr>
    <tr>
      <td valign="top" width="30%" class="row1">{$lang.add_c_expire_days}<br>{$lang.add_c_expire_days_n}</td>
      <td valign="top" width="70%" class="row2"><input name="expire_days" type="text" id="expire_days"></td>
    </tr>
    <tr>
      <td valign="top" width="30%" class="row1">{$lang.add_c_Price}</td>
      <td valign="top" width="70%" class="row2"><input name="Price" type="text" id="Price"></td>
    </tr>
    <tr>
      <td valign="top" width="30%" class="row1">{$lang.add_c_Year}</td>
      <td valign="top" width="70%" class="row2"><input name="Year" type="text" id="Year"></td>
    </tr>

    <tr>
      <td valign="top" width="30%" class="row1">{$lang.add_c_cat}</td>
      <td valign="top" width="70%" class="row2"><select name="catid">
      	  <option value='0' selected>{$lang.add_c_choose}</option>
          {$catid}
        </select></td>
    </tr>

    <tr>
      <td valign="top" width="30%" class="row1">{$lang.add_c_desc}</td>
    <td valign="top" width="70%" class="row2"><textarea name="description" cols="40" rows="5"></textarea></td>
    </tr>
    </tr>


<table width="100%" border="0" cellspacing="1" cellpadding="4" align="center">
  <tr>
    <td	width="100%" class='bitTitle'><input type="submit" value="{$lang.add_c_add_d}"></td>
  </tr>
  </table>
  </form>
{include file="footer.tpl"}