<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <title><?=$this->page_title?></title>
    <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
    <link rel="stylesheet" type="text/css" media="screen" href="View/style.css" />
</head>
<body>
<div id="header">
    <h1><?=$this->page_title?></h1>
</div>

<div id="menu">
    <a href="index.php?c=Main">Home</a>
    <a href="index.php?c=New">New article</a><br>
    </a><hr>
</div>

<div>
    <ul>
    <?php foreach($this->page_content as $article): ?>
    <a href="index.php?c=Edit&id=<?=$article['id_article']?>">
    <b><?=$article['title']?></b><br/>
    </a>
    <?php endforeach ?>
    </ul>
</div>

<div id="footer">
    All right reserved.Tel.Adress.
</div>

</body>
</html>