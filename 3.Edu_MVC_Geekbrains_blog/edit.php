<?php

include_once('model.php');


$id_article = $_GET['id'];

articles_get($id_article,$con);

$db_article = articles_get($id_article,$con);

foreach($db_article as $one_article){

    $x = $one_article['title'];
    $y = $one_article['content'];
}


if (isset($_POST['edit'])){

    articles_edit($_GET['id'],$_POST['title'],$_POST['content'],$con);
    header('Location: editor.php');

}

if(isset($_POST['delete'])){

    articles_delete($id_article,$con);
    header('Location: editor.php');
    die();
}

include('theme/v_edit.php');
?>

?>
