<?php

class C_New extends C_Base
{
     protected $new_article_title;
     protected $new_article_content;

    function __construct()
    {
    }

    public function OnInput()
    {
        parent::OnInput();
        $this->page_title =$this->page_title .' :: New article';


        if (isset($_POST['title'], $_POST['content'], $_POST['content']))
        {
        if (Model::articles_new($_POST['title'], $_POST['content'], $_POST['content'])){
        header('Location: index.php?c=Editor');
        die();
        }
        $this->new_article_title = $_POST['title'];
        $this->new_article_content = $_POST['content'];
        }
        else
        {
        $this->new_article_title = '';
        $this->new_article_content= '';
        }



    }

     public function OnOutput()
     {
         $vars = array('page_title'=>$this->page_title,'title'=>$this->new_article_title,'content'=>$this->new_article_content);
         $page = Controller::Template('view/v_new.php',$vars);
         echo $page;
     }
}

