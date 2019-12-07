<link rel="stylesheet" type="text/css" href="css/index.css" />
{$Page}
<br />
{include file="clas_header.tpl"}
{section name=idx loop=$clas}
<tr>
	<td class='row1' align="center">{$clas[idx].username}</td>
	<td class='row2' align="center">{$clas[idx].country}</td>
	<td class='row1' align="center">{$clas[idx].dateline}</td>
	<td class='row2' align="center">{$clas[idx].titl}</td>
	<td class='row1' align="center">{$clas[idx].Price}</td>
	<td class='row1' align="center"><a href="show.php?edit=1&id={$clas[idx].id}">{$lang.adm_m_tabl_6}</a></td>
	<td class='row1' align="center"><a href="show.php?remove=1&id={$clas[idx].id}">{$lang.adm_m_tabl_7}</a></td>
</tr>
{/section}
{include file="all_footer.tpl"}
{include file="footer.tpl"}