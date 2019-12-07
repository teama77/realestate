 

<form method="POST" action="login.php">
<div class='tableborder'>
 <div class='bitTitle'>{$lang.Guest_table_login}</div>
 <div class='maintitle'>
 	<p align="center">
 	<br /><span class='desc'>{$lang.Guest_username_login}</span>
 	<br /><input type='text' size='15' name='username' />
 	<br /><span class='desc'>{$lang.Guest_password_login}</span>
 	<br /><input type='password' size='15' name='password' />
 	<br /><a href="login.php?action=lp">{$lang.Guest_lost_login}</a>
 	<br /><input type="SUBMIT" value="{$lang.Guest_SUBMIT_login}" name="Login">
 </div>
</div>
</form>
