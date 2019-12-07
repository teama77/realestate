{include file="header.tpl"}
<p align="center" class="tableborder"><a href="index.php">{$lang.ind_title}</a> -> {$title}</p>

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

<form method="POST" action="send.php">
  <p>&nbsp;</p>
  <div align="center">
    <center>
    <table class="box" cellspacing="0" cellpadding="0">
     <tr>
      <td align="center">

         <table width="100%" border="0" cellspacing="1" cellpadding="3">
          <tr>
          <td class="bitTitle" align="center">
          {$lang.c_send}  ( {$titl} )
          </td>
          </tr>
         </table>

       <table class='tableborder' border="0" cellpadding="1" cellspacing="1" width="100%" align="center">
        <tr>
         <td class="maintitle" align="right">
          {$lang.c_send_from}:
         </td>
         <td class="bitBody">
          <input type="text" name="from" size="40" />
         </td>
        </tr>
        <tr>
         <td class="maintitle" align="right">
          {$lang.c_send_to}:
         </td>
         <td class="maintitle">
          <input type="text" name="to" size="40" />
         </td>
        </tr>
        <tr>
         <td align="center" colspan="2">
          <input type="hidden" name="id" value="{$id}" />
          <input type="submit" value="{$lang.c_send_submit}" />
         </td>
        </tr>
       </table>

     </td>
    </tr>
   </table>
    </center>
  </div>
</form>



<br />
    </td>
  </tr>
</table>
{include file="footer.tpl"}
