 {include file="header.tpl"}
<br /><br />
<form action="login.php?start=1" method="post">
 <table class="tableborder" align="center" cellspacing="0" cellpadding="0">
  <tr>
   <td>

		  <table align="center" class="tableborder" cellpadding="0" cellspacing="3" width="350">
		 <tr>
		  <td class="bitTitle" colspan="2" align="center">
		   {$lang.adm_table_w}
		  </td>
		 </tr>
		 <tr>
		  <td class="row2">
		    {$lang.adm_table_username}
		  </td>
		  <td class="row2">
		    <input type="text" size="50" name="username" />
		  </td>
		 </tr>
		 <tr>
		  <td class="row2">
		    {$lang.adm_table_password}
		  </td>
		  <td class="row2">
		    <input type="password" size="50" name="password" />
		  </td>
		 </tr>
		 <tr>
		  <td colspan="2" align="center">
		    <input type="submit" value="{$lang.adm_table_do}" />
		  </td>
		 </tr>
		</table>


   </td>
  </tr>
 </table>
</form>
{include file="footer.tpl"}