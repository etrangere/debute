<?php

class C_New extends C_Base
{
     protected $new_article_title;
     protected $new_article_content;
     protected $new_article_mail;
     protected $mModel;

    function __construct()
    {
      $this->mModel = M_Model::Instance();
    }

    public function OnInput()
    {
        parent::OnInput();
        $this->page_title =$this->page_title .' :: New article';


        if (isset($_POST['title'], $_POST['content'],$_POST['mail']))
        {
                if ($this->mModel->articles_new($_POST['title'], $_POST['content'],$_POST['mail'])) {
                    header('Location: index.php?c=Editor');
                    die();
                }

        $this->new_article_title = $_POST['title'];
        $this->new_article_content = $_POST['content'];
        $this->new_article_mail = $_POST['mail'];
        }
        else
        {
        $this->new_article_title = '';
        $this->new_article_content = '';
        $this->new_article_mail = '';
        }
    }

     public function OnOutput()
     {
         $vars = array('page_title'=>$this->page_title,'title'=>$this->new_article_title,'content'=>$this->new_article_content,'mail'=>$this->new_article_mail);
         $page = Controller::Template('View/v_new.php',$vars);
         echo $page;
     }
}

