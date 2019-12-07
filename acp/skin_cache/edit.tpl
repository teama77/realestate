<link rel="stylesheet" type="text/css" href="css/index.css" />
{include file="news_header.tpl"}
{section name=idx loop=$new}

<tr>
	<td class='row1' align="center">{$new[idx].title}</td>
	<td class='row2' align="center">{$new[idx].date}</td>
	<td class='row1' align="center">{$new[idx].name}</td>
	<td class='row2' align="center"><a href="news.php?action=boedit&id={$new[idx].id}">{$lang.adm_news_5}</a></td>
	<td class='row1' align="center"><a href="news.php?action=remove&id={$new[idx].id}">{$lang.adm_news_6}</a></td>
</tr>
{/section}
{include file="all_footer.tpl"}
{include file="footer.tpl"}