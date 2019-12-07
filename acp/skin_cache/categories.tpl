<link rel="stylesheet" type="text/css" href="css/index.css" />
  <form name="add" method="post" action="categories.php?doadd=1" enctype='multipart/form-data'>

<table width="100%" border="0" cellspacing="1" cellpadding="4" align="center">
  <tr>
    <td	width="100%" class='bitTitle'>{$lang.adm_cat_new}</td>
  </tr>
  </table>
  <table width="100%" border="0" cellspacing="1" cellpadding="2" align="center">
    <tr>
      <td width="30%" valign="top" class="row1">{$lang.cat_name}</td>
      <td width="70%" valign="top" class="row2"><input name="name" type="text" value="{$name}"></td>
    </tr>
    <tr>
      <td width="30%" valign="top" class="row1">{$lang.cat_image}</td>
      <td width="70%" valign="top" class="row2"><input name="image" type="text" value="{$image}"></td>
    </tr>
    <tr>
      <td valign="top" width="30%" class="row1">{$lang.adm_cat_text}</td>
    <td valign="top" width="70%" class="row2"><textarea style="width:100%" name="description" rows="10" cols="60"></textarea></td>
    </tr>

    </tr>
<table width="100%" border="0" cellspacing="1" cellpadding="4" align="center">
  <tr>
    <td	width="100%" class='bitTitle'><input type="submit" value="{$lang.adm_cat_new}"></td>
  </tr>
  </table>
  </form>
{include file="footer.tpl"}