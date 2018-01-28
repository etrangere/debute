<?
include_once('new.php');






?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <title>PHP. ������� 2</title>
    <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
    <link rel="stylesheet" type="text/css" media="screen" href="theme/style.css" />
</head>
<body>
<h1>PHP. ������� 2</h1>
<br/>
<a href="index.php">�������</a> |
<a href="editor.php">������� ���������</a>
<hr/>
<h1>����� ������</h1>
<form method="post">
    ��������:
    <br/>
    <input type="text" name="title" value="<?=$title?>" />
    <br/>
    <br/>
    ����������:
    <br/>
    <textarea name="content"><?=$content?></textarea>
    <br/>
    <input type="submit" value="��������" />
</form>
<hr/>
<small><a href="http://prog-school.ru">����� ����������������</a> &copy;</small>
</body>
</html>
