<?php
include_once('Controller/C_Base.php');
include_once('Model/model.php');



class C_Article extends C_Base
{

    function __construct()
    {
        parent::Startup();



    $id_article = $_GET['id'];


    $id_article = ARTIC_all::articles_get($id_article);


    foreach ($id_article as $one_article)
    {

    $x = $one_article['title'];
    $y = $one_article['content'];

    }
    }
}
