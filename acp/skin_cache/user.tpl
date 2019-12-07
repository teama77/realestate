<link rel="stylesheet" type="text/css" href="css/index.css" />
{$Page}
<br />
{include file="user_header.tpl"}
{section name=idx loop=$us}
<tr>
	<td class='row1' align="center">{$us[idx].username}</td>
	<td class='row2' align="center">{$us[idx].ip_address}</td>
	<td class='row1' align="center">{$us[idx].signup_date}</td>
	<td class='row1' align="center"><a href="users.php?edit=1&userid={$us[idx].userid}">{$lang.adm_m_tabl_6}</a></td>
	<td class='row1' align="center"><a href="users.php?remove=1&userid={$us[idx].userid}">{$lang.adm_m_tabl_7}</a></td>
</tr>
{/section}
{include file="all_footer.tpl"}
{include file="footer.tpl"}