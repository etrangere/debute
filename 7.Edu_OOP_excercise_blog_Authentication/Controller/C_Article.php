<?php

class C_Article extends C_Base
{

    protected $article_title;
    protected $article_content;
    protected $mModel;

    function __construct()
    {
      $this->mModel= M_Model::Instance();
    }

    public function OnInput()
    {

        $this->page_title = $this->page_title . ' :: This article';


        $id_article = $_GET['id'];
        $article_id = $this->mModel->articles_get($id_article);
        foreach ($article_id as $one_article)
        {
        $this->article_title = $one_article['title'];
        $this->article_content = $one_article['content'];
        }
    }

    public function OnOutput()
    {
    $vars = array('page_title'=> $this->page_title,'content' =>$this->article_content,'article_title' => $this->article_title);
    $page = Controller::Template('view/v_article.php',$vars);
    echo $page;
    }
}
