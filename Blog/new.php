
<?php
include_once('dbconfig.php');
include_once('model.php');



if (isset($_POST))
{
    if (articles_new($_POST['title'], $_POST['content']))
    {
        header('Location: editor.php');
        die();
    }

    $title = $_POST['title'];
    $content = $_POST['content'];
}
else
{
    $title = '';
    $content = '';
}


include('theme/new_article.php');
