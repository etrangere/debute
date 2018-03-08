<?php


class C_Article extends C_Base
{

    protected $article_title;
    protected $article_content;

    function __construct()
    {
    }

    public function OnInput()
    {
        $id_article = $_GET['id'];
        $id_article = Model::articles_get($id_article);

        foreach ($id_article as $one_article)
        {

        $this->article_title = $one_article['title'];
        $this->article_content = $one_article['content'];
        }
    }

    public function OnOutput()
    {
    $vars = array('content' =>$this->article_content,'article_title' => $this->article_title);
    $page = Controller::Template('view/v_article.php',$vars);
    echo $page;
    }
}
