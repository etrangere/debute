<?php


include_once('model.php');

$id_article = $_GET['id'];

$id_article = articles_get($id_article,$con);

foreach($id_article as $one_article){

    $x =  $one_article['title'];
    $y =  $one_article['content'];

}
include('theme/v_article.php');
?>





