 {include file="header.tpl"}
<br />
<br />
<br />
<div class='tableborder'>
 <div class='bitTitle'>ÇåáÇ Èß ãÏíÑ ÇáãæŞÚ</div>
 <div class='maintitle'>
äÑÍÈ Èß ÇÎí  / ÇÎÊí <br>
ãÈÑãÌ ÇáÈÑäÇãÌ <a href="http://ib4arab.com/forums/index.php?showuser=2" target="_blank">ÈæÎáíİå</a><br>
İÑíŞ ÇáÊÕãíã <a href="http://ib4arab.com/forums/index.php?showuser=1380" target="_blank">ÚÈÏÇááå</a><br>
İÑíŞ ÇáÊÚÑíÈ <a href="http://ib4arab.com/forums/index.php?showuser=586" target="_blank">åæÇÌÓ</a><br>
áãÚÑİÉ ÌÏíÏ ÇáÈÑäÇãÌ <a href="http://ib4arab.com/forums/index.php?showforum=67" target="_blank">ÇÖÛØ åäÇ</a><br>
 </div>
</div>

<br />
{include file="online_header.tpl"}
{section name=idx loop=$onl}

<tr>
	<td class='row1' align="center">{$onl[idx].session_member_name}</td>
	<td class='row2' align="center">{$onl[idx].session_ip_address}</td>
	<td class='row1' align="center">{$onl[idx].session_log_in_time}</td>
</tr>
{/section}
{include file="all_footer.tpl"}


<br />
{include file="version_header.tpl"}
{section name=idx loop=$clas}

<tr>
	<td class='row1' align="center">{$clas[idx].upgrade_version}</td>
	<td class='row2' align="center">{$clas[idx].upgrade_date}</td>
</tr>
{/section}
{include file="all_footer.tpl"}
	{include file="footer.tpl"}