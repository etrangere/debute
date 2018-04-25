<?/*
Шаблон авторизации пользователя
===============================
$input					- текст для преобразования
$result					- результат
$canUseSecretFunctions	- можно ли делать секретное преобразование
*/?>
<h1>Hello!</h1>
<form method="post">
	Text for convertion:
	<br/>
	<input name="input" type="text" value="<?=$input?>"/>
	<br/>
	<? if ($result != null): ?>
		Result: <b><?=$result?></b>
		<br/>
	<? endif ?>
	<input type="submit" name="normal" value="Ordinary convertion"/>
	<br/>
	<? if ($canUseSecretFunctions): ?>
		<input type="submit" name="secret" value="Secret convertion"/>
	<? else: ?>
		<input type="submit" value="Secret convertion" disabled="disabled" />
		<em>not available for everyone</em>
	<? endif ?>
	<br/>
	<br/>
	<a href="index.php?c=login">Authorisation form</a>
</form>
