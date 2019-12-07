{include file="header.tpl"}
 <tr class="tableborder">
  <td><table cellpadding=0 cellspacing=0 border=0 width="100%">
   <tr>
    <td><p align="center" class="tableborder"><a href="index.php">{$lang.ind_title}</a> » {$lang.usercp_cp} {$username}</p>

   </tr>
  </table></td>
 </tr>
</table><br>
<table cellpadding=4 cellspacing=1 border=0 width="100%">
 <tr class="bitTitle">
  <td colspan=3><b>{$lang.usercp_menu}</b></font></td>
 </tr>
 <tr>
  <td class="tableborder" align="center" width="33%">

   <b><a href="usercp.php?action=add">{$lang.usercp_add}</a></b></font><br>
   {$lang.usercp_info}</font></td>
  <td class="tableborder" align="center" width="33%">

   <b><a href="usercp.php?action=edit">{$lang.usercp_edit}</a></b></font><br>
   {$lang.usercp_info2}</font></td>

 </tr>
</table>
{include file="footer.tpl"}