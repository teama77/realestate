<?xml version="1.0" encoding="{$encode}"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="rtl" xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title>{$title}</title>
</head>
<body bgcolor='#ffffff' text='#000000'>

<b><a href="{$domain}">{$title}</a></b>
({$domain})
<br />
- <b><a href="{$domain}/show.php?show=2&id={$id}">{$titl}</a></b>
({$domain}/show.php?show=2&id={$id})
<br />><hr />
-- <b>{$lang.c_username}</b>
({$username})
<br />

<br />
-- <b>{$lang.c_country}</b>
({$country})
<br />
<br />
-- <b>{$lang.c_dateline}</b>
({$dateline})
<br />
<br />
-- <b>{$lang.c_Price}</b>
({$Price})
<br />
<br />
-- <b>{$lang.c_Year}</b>
({$Year})
<br />
<br />
-- <b>{$lang.c_description}</b>
({$description})
<br /><hr />

<br />
<div align="center"><input type="button" value="{$lang.c_print}" onclick="window.print()" /></div>
</body>
</html>
