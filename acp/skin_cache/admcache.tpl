<link rel="stylesheet" type="text/css" href="css/index.css" />
<form method="post" action="{$PHP_SELF}">
<table width="100%" border="0" cellspacing="1" cellpadding="4" align="center">
<tr>
<td	width="100%" class='bitTitle'>{$lang.cache_template} </td>
</tr>
</table>
<table class='maintitle' width="100%" border="0" cellspacing="1" cellpadding="2" align="center">
{if $sub eq template}
{if $cleaned eq 1}
<tr>
<td>
<div class="row1">{$lang.cache_filesdeleted}:</div>
</td>
</tr>
<tr>
<td class="row2">
{foreach from=$file item=new_file}
{$new_file}
{/foreach}
</td>
</tr>
{else}
<tr>
<td class="row2">
{foreach from=$dir item=new_dir}
{$new_dir}
{/foreach}
</td>
</tr>
<tr>
<td class="row1">
{$lang.cache_size}: {$filesize} kbyte
</td>
</tr>
<table width="100%" border="0" cellspacing="1" cellpadding="4" align="center">
<tr>
<td	width="100%" class='bitTitle'><input type="submit" name="clean"value="{$lang.cache_makeempty}"></td>
</tr>
{/if}
{/if}
</table>
</form>