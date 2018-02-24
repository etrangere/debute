<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>

    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <link rel="stylesheet" type="text/css" media="screen" href="view/style.css">
</head>
<body>

<h1>HOME!</h1>
<center><a href="index.php">Home</a>|
<a href="editor.php">Editor console</a></center>


<ul>
    <li>
        <b><a href="new.php">New article</a></b><hr>
    </li>
    <?php foreach ($articles as $article): ?>
        <li>
            <a href="article.php?id=<?=$article['id_article']?>">
                <b><?=$article['title']?></b><br/>
            </a><?=substr($article['content'],0,350)?><hr>
        </li>
    <?php endforeach ?>
</ul>
<hr/>
<small><a href="http://google.com">All rights reserved</a> &copy;</small>
</body>
</html>