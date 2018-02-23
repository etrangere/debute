<?php

include_once('startup.php');
include_once('model/model.php');

startup();

$id_article = $_GET['id'];


$id_article = ARTIC_get::articles_get($id_article);


foreach($id_article as $one_article){

    $x =  $one_article['title'];
    $y =  $one_article['content'];

}
include('view/v_article.php');
?>





