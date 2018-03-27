<div id = "left">
	<h2>Свежие записи:</h2>
	<? foreach($articles as $article):?>
		<p><a href = "index.php?c=article.php&id=<?=$article['id_article']?>"><?=$article['title']?></a></p>
	<? endforeach ?>
</div>
<div id = "content">
	<h2>Welcome</h2>
</div>
