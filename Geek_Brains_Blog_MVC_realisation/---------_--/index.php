<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		// ��������� ��������� ����������.
		$name = $_POST['name'];
		$text = $_POST['text'];
		$dt = date('Y.m.d H:i:s');
		
		// �������� ��������.
		if ($name == '' || $text == '')
		{
			header('Location: index.php');
			die();
		}
		
		// ����������� � ��.
		$hostname = 'localhost'; 
		$username = 'root'; 
		$password = '';
		$dbName = 'test';
		setlocale(LC_ALL, 'ru_RU.CP1251');	
		mysql_connect($hostname, $username, $password) or die('No connect with data base'); 
		mysql_query('SET NAMES cp1251');
		mysql_select_db($dbName) or die('No data base');
		
		// ������� ������ ��������� � �������.
		$query = "INSERT INTO messages (dt, name, text) VALUES ('$dt', '$name', '$text');";
		$result = mysql_query($query);
								
		if (!$result)
			die(mysql_error());
		
		// ��������.
		header('Location: index.php');
		die();
	}
?>

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
	<?php
		// ����������� � ��.
		$hostname = 'localhost'; 
		$username = 'root'; 
		$password = '';
		$dbName = 'test';
		setlocale(LC_ALL, 'ru_RU.CP1251');	
		mysql_connect($hostname, $username, $password) or die('No connect with data base'); 
		mysql_query('SET NAMES cp1251');
		mysql_select_db($dbName) or die('No data base');
		
		// ������ ���������.
		$query = "SELECT * FROM messages ORDER BY dt DESC";
		$result = mysql_query($query);
								
		if (!$result)
			die(mysql_error());
		
		// ���������� ��������� �� ��.
		$n = mysql_num_rows($result);
		$messages = array();
	
		for($i = 0; $i < $n; $i++)
		{
			$row = mysql_fetch_assoc($result);		
			$messages[] = $row;
		}

		// ����� ���������.
		foreach ($messages as $msg)
			echo "<b>{$msg['name']}</b> {$msg['dt']}<br/>{$msg['text']}<hr/>";
	?>
</body>
</html>
