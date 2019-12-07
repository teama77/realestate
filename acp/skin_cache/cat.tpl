<link rel="stylesheet" type="text/css" href="css/index.css" />
{$Page}
<br />
{include file="cat_header.tpl"}
{section name=idx loop=$ca}
<tr>
	<td class='row1' align="center">{$ca[idx].name}</td>
	<td class='row2' align="center">{$ca[idx].description}</td>
	<td class='row1' align="center">{$ca[idx].nb}</td>
	<td class='row2' align="center">{$ca[idx].image}</td>
	<td class='row1' align="center">{$ca[idx].views}</td>
	<td class='row2' align="center"><a href="categories.php?edit=1&catid={$ca[idx].catid}">{$lang.adm_m_tabl_6}</a></td>
	<td class='row1' align="center"><a href="categories.php?remove=1&catid={$ca[idx].catid}">{$lang.adm_m_tabl_7}</a></td>
</tr>
{/section}
{include file="all_footer.tpl"}
{include file="footer.tpl"}