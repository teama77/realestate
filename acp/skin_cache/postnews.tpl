<link rel="stylesheet" type="text/css" href="css/index.css" />
  <form name="add" method="post" action="postnews.php?action=doadd" enctype='multipart/form-data'>

<table width="100%" border="0" cellspacing="1" cellpadding="4" align="center">
  <tr>
    <td	width="100%" class='bitTitle'>{$lang.adm_news_topic_new}</td>
  </tr>
  </table>
  <table width="100%" border="0" cellspacing="1" cellpadding="2" align="center">
    <tr>
      <td width="30%" valign="top" class="row1">{$lang.adm_news_title}</td>
      <td width="70%" valign="top" class="row2"><input name="title" type="text" id="title"></td>
    </tr>

    <tr>
      <td valign="top" width="30%" class="row1">{$lang.adm_news_text}</td>
    <td valign="top" width="70%" class="row2"><textarea style="width:100%" name="content" rows="10" cols="60"></textarea></td>
    </tr>
    </tr>
<table width="100%" border="0" cellspacing="1" cellpadding="4" align="center">
  <tr>
    <td	width="100%" class='bitTitle'><input type="submit" value="{$lang.adm_news_submit_new}"></td>
  </tr>
  </table>
  </form>
{include file="footer.tpl"}