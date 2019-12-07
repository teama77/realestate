{include file="header.tpl"}
<p align="center" class="tableborder"><a href="index.php">{$lang.ind_title}</a> -> <a href="categories.php">{$lang.all_cats}</a> -> {$titl}</p>

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


     <a href="show.php?show=3&id={$id}"><img style="vertical-align:bottom" src="style_images/email.gif" width="22" height="22" border="0" alt="{$lang.lang.c_send}" /></a>
		<a href="print.php?show=1&id={$id}"><img style="vertical-align:bottom" src="style_images/print.gif" width="22" height="22" border="0" alt="{$lang.lang.c_print}" /></a>

<div align="center">
  <center>
  <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="376" height="310" id="AutoNumber1">

    <tr>
      <td class="tableborder" width="376" height="11" colspan="2" align="center">
      <p align="center" class="tableborder">{$titl}</td>
    </tr>
    <tr>
      <td class="row1" width="188" height="17" align="center">
      <p dir="rtl">{$name}</p>
      </td>
      <td class="row2" width="182" height="17" align="center">
      <p dir="rtl">{$lang.c_username}</p>
      </td>
    </tr>
    <tr>
      <td class="row1" width="188" height="16" align="center">
      <p dir="rtl"><a href="misc.php?license=1&id={$l_id}" target="_blank">{$email_address}</a></p>
      </td>
      <td class="row2" width="182" height="16" align="center">
      <p dir="rtl">{$lang.c_email}</p>
      </td>
    </tr>
    <tr>
      <td class="row1" width="188" height="19" align="center">
      <p dir="rtl">{$country}</p>
      </td>
      <td class="row2" width="182" height="19" align="center">
      <p dir="rtl">{$lang.c_country}</p>
      </td>
    </tr>
    <tr>
      <td class="row1" width="188" height="16" align="center">
      <p dir="rtl">{$dateline}</p>
      </td>
      <td class="row2" width="182" height="16" align="center">
      <p dir="rtl">{$lang.c_dateline}</p>
      </td>
    </tr>
    <tr>
      <td class="row1" width="188" height="17" align="center">
      <p dir="rtl">{$views}</p>
      </td>
      <td class="row2" width="182" height="17" align="center">
      <p dir="rtl">{$lang.c_views}</p>
      </td>
    </tr>

    <tr>
      <td class="row1" width="188" height="17" align="center">
      <p dir="rtl">{$expire_days}</p>
      </td>
      <td class="row2" width="182" height="17" align="center">
      <p dir="rtl">{$lang.c_expire_days}</p>
      </td>
    </tr>
    <tr>
      <td class="row1" width="188" height="17" align="center">
      <p dir="rtl">{$Price}</p>
      </td>
      <td class="row2" width="182" height="17" align="center">
      <p dir="rtl">{$lang.c_Price}</p>
      </td>
    </tr>
    <tr>
      <td class="row1" width="188" height="17" align="center">
      <p dir="rtl">{$Year}</p>
      </td>
      <td class="row2" width="182" height="17" align="center">
      <p dir="rtl">{$lang.c_Year}</p>
      </td>
    </tr>
    <tr>
      <td class="row1" width="376" height="177" colspan="2" align="center">
      <p dir="rtl">{$description}<br /> <a href="{$demo}"><img src="{$demo}" width="90" height="90" border="0" alt="{$titl}" /></a></p></td>
    </tr>
  </table>
  </center>
</div>
<br />
    </td>
  </tr>
</table>
{include file="footer.tpl"}