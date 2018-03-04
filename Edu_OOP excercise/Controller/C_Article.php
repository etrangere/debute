<?php
include_once('C_Base.php');
include_once('model.php');



class C_Article extends C_Base
{

    function __construct()
    {
        parent::Startup();


    }




    protected function OnInput()
    {
        parent::OnInput();
        $id_article = $_GET['id'];


        $id_article = Model::articles_get($id_article);


        foreach ($id_article as $one_article)
        {

            $x = $one_article['title'];
            $y = $one_article['content'];


        }
    }

}
