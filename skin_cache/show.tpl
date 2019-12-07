{include file="header.tpl"}
<p align="center" class="tableborder"><a href="index.php">{$lang.ind_title}</a> -> <a href="categories.php">{$lang.all_cats}</a></p>

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



{$Page}
{include file="clas_header.tpl"}
{section name=idx loop=$clas}
<tr>
	<td class='row1' align="center"><strong><a href="show.php?show=2&id={$clas[idx].id}">{$clas[idx].titl}</a></strong></td>
	<td class='row2' align="center">{$clas[idx].username}</td>
	<td class='row1' align="center">{$clas[idx].country}</td>
	<td class="row2" align="center">{$clas[idx].dateline}</td>
	<td class="row1" align="center">{$clas[idx].views}</td>
	<td class="row2" align="center">{$clas[idx].Price}</td>
</tr>
{/section}






<br />
    </td>
  </tr>
</table>
{include file="footer.tpl"}
