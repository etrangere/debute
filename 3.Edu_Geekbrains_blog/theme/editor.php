<?phpinclude_once('./startup.php');include_once('./model.php');articles_all();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head>	<title>PHP</title>	<meta content="text/html; charset=UTF-8" http-equiv="content-type">	<link rel="stylesheet" type="text/css" media="screen" href="theme/style.css" /> </head><body>	<h1>PHP</h1>	<br/>	<a href="index.php">Home</a> |	<b>Editor console</b>	<hr/>	<ul>		<li>			<b><a href="new.php">New article</a></b>		</li>			<? foreach ($articles as $article): ?>			<li>				<a href="edit.php?id=<?=$article['id_article']?>">					<?=$article['title']?>				</a>			</li>		<? endforeach ?>	</ul>	<hr/>    <small><a href="http://google.com">All rights reserved</a> &copy;</small></body></html>