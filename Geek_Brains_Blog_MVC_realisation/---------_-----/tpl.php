<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>���</title>
	<meta content="text/html; charset=Windows-1251" http-equiv="content-type">		
</head>
<body>
	<h1>���</h1>
	<hr/>
	<form method="post">
		���:
		<input name="name" />
		�����:
		<input name="text" />		
		<input type="submit" />
		<a href="index.php">��������</a>
	</form>
	<hr/>
	<?php foreach ($messages as $msg): ?>
		<b><?=$msg['name']?></b>
		<?=$msg['dt']?>
		<br/>
		<?=$msg['text']?>
		<hr/>
	<?php endforeach ?>
</body>
</html>
