{include file="header.tpl"}
<p align="center" class="tableborder"><a href="index.php">{$lang.ind_title}</a> -> <a href="register.php">{$lang.register}</a></p>

<table width="100%" border="0" class="tableborder" cellpadding="3">

  <tr>

    <td width="150" valign="top">
 <table width="100%" class="tableborder" cellspacing="5">
        <tr>
          <td>
            <b>


{include file="menu.tpl"}	

{if $smarty.session.logged_in != 0}	
{include file="member_box.tpl"}
{/if}

{if $smarty.session.logged_in != 1}
{include file="Guests_box.tpl"}
{/if}



<br />
<div class='tableborder'>
 <div class='bitTitle'><img src="style_images/nav_m.gif">{$lang.all_cats}</div>
 <div class='maintitle'>
{include file="categ_box.tpl"}
</div>
</div>



{if $smarty.session.logged_in != 1} 
{include file="login.tpl"}
{/if}
</b><br /><br />
          </td>
        </tr>



      </table>
    </td>
                              
    <td align="left" valign="top">
      <table border="0" width="100%" class="tableborder">
        <tr>
          <td align="center" valign="top" colspan="4">

          </td>
        </tr>



  <form name="add" method="post" action="register.php?start=1" enctype='multipart/form-data'>

<table width="100%" border="0" cellspacing="1" cellpadding="4" align="center">
  <tr>
    <td	width="100%" class='bitTitle'>{$lang.register}</td>
  </tr>
  </table>
  <table width="100%" border="0" cellspacing="1" cellpadding="2" align="center">
    <tr>
      <td width="30%" valign="top" class="row1">{$lang.register_falid_table_username}</td>
      <td width="70%" valign="top" class="row2"><input name="username" type="text" id="username"></td>
    </tr>
    <tr>
      <td valign="top" width="30%" class="row1">{$lang.register_falid_table_email}</td>
      <td valign="top" width="70%" class="row2"><input name="email_address" type="text" id="email_address"></td>
    </tr>
    <tr>
      <td valign="top" width="30%" class="row1">{$lang.register_falid_table_country}</td>
      <td valign="top" width="70%" class="row2"><input name="country" type="text" id="country"></td>
    </tr>
    <tr>
      <td valign="top" width="30%" class="row1">{$lang.register_falid_table_url}</td>
      <td valign="top" width="70%" class="row2"><input name="url" type="text" id="url"></td>
    </tr>
    <tr>
      <td valign="top" width="30%" class="row1">{$lang.register_falid_table_phone}</td>
      <td valign="top" width="70%" class="row2"><input name="phone" type="text" id="phone"></td>
    </tr>
    <tr>
      <td valign="top" width="30%" class="row1">{$lang.register_falid_table_city}</td>
      <td valign="top" width="70%" class="row2"><input name="city" type="text" id="city"></td>
    </tr>
    <tr>
      <td valign="top" width="30%" class="row1">{$lang.register_falid_table_info}</td>
      <td valign="top" width="70%" class="row2"><input name="job" type="text" id="job"></td>
    </tr>
<table width="100%" border="0" cellspacing="1" cellpadding="4" align="center">
  <tr>
    <td	width="100%" class='bitTitle'><input type="submit" value="{$lang.do_register}"></td>
  </tr>
  </table>
  </form>





<br />
    </td>
  </tr>
</table>
{include file="footer.tpl"}
