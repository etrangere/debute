<?phpinclude_once('startup.php');include_once('model.php');// Setting parameters, connection to db, session start.startup();// Extracting articles.$articles = articles_all();header('Content-type: text/html; charset=windows-1251');?><center><h1>HOME!</h1></center><center><a href="editor.php">Editor console</a></center><ul>    <li>        <b><a href="new.php">New article</a></b><hr>    </li>    <? foreach ($articles as $article): ?>        <li>            <a href="article.php?id=<?=$article['id_article']?>">                <b><?=$article['title']?></b><br/>                <?=substr($article['content'],0,350)?>               </a><hr>        </li>    <? endforeach ?></ul>