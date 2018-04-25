<?/*
Шаблон авторизации пользователя
===============================
$login - логин пользователя

*/?>
<h1>Authentication</h1>
<form method="post">
	Login:
	<br/>
	<input name="login" type="text" value="<?=$login?>"/>
	<br/>
	Password:
	<br/> 
	<input name="password" type="password"/>
	<br/>
	<input type="checkbox" name="remember" /> remember me
	<br/>	
	<input type="submit" value="Login"/>
	<br/>
	<br/>	
	<a href="index.php">Home page</a>
</form>
