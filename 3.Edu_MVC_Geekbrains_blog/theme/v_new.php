<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>PHP</title>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <link rel="stylesheet" type="text/css" media="screen" href="theme/style.css">
</head>
<body>
	<br/>
    <center><a href="index.php">Home</a>|
        <a href="editor.php">Editor console</a></center>
	<hr/>
	<h1>New article</h1>
	<form method="post">
		Title:
		<br/>
		<input type="text" name="title" value="<?=$title?>" />
		<br/>
		<br/>
		Content:
		<br/>
		<textarea name="content"><?=$content?></textarea>
		<br/>
		<input type="submit" value="Add" />
	</form>
	<hr/>
    <small><a href="http://google.com">All rights reserved</a> &copy;</small>
</body>
</html>
