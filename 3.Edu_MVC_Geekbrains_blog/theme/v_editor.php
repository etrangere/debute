
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>PHP</title>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <link rel="stylesheet" type="text/css" media="screen" href="theme/style.css">
</head>
<body>
	<h1>EDITOR</h1>
	<br/>
   <center> <a href="index.php">Home</a> |
    <a href="editor.php">Editor console</a></center>
	<hr/>
	<ul>
		<li>
			<b><a href="new.php">New article</a></b>
		</li>	
		<?php foreach ($articles as $article): ?>
			<li>
				<a href="edit.php?id=<?=$article['id_article']?>">
					<?=$article['title']?>
				</a>
			</li>
		<?php endforeach ?>
	</ul>
	<hr/>
    <small><a href="http://google.com">All rights reserved</a> &copy;</small>
</body>
</html>
