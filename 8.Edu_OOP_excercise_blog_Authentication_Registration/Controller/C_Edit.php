<?php

class C_Edit extends C_Base
{
    protected $article_title; //new added article title
    public $id; //article id
    protected $article_content; //new added article text
    protected $article_mail;
    public $id_article;
	private $error;
    protected $table;
    protected $mModel;
	//
	// constractor.
	//

	function __construct()
	{
        $this->mModel= M_Model::Instance();
	}

    //
	// query virtual processing.
	//

	protected function OnInput()
    {
        parent::OnInput();

        $this->id_article=$_GET['id'];
        $db_article = $this->mModel->articles_get($this->id_article);

        foreach($db_article as $one_article){
            $this->article_title = $one_article['title'];
            $this->article_content = $one_article['content'];
            $this->article_mail = $one_article['mail'];

        }
        $this->page_title = $this->page_title . ' :: This article edit';


        if (isset($_POST['Save']))
        {
        $this->mModel->articles_edit($_GET['id'], $_POST['article_title'], $_POST['article_content'],$_POST['article_mail']);
        header('Location: index.php?c=Editor');

        }

        if(isset($_POST['Delete']))
        {
        $this->mModel->articles_delete($_GET['id']);
        header('Location: index.php?c=Editor');
        }
    }

    //
	// html virtual generator.
	//	

    protected function OnOutput()
	{
		$vars = array('page_title'=> $this->page_title, 'article_title'=>$this->article_title,
            'article_content'=>$this->article_content,'article_mail'=>$this->article_mail,'error' => $this->error);
		$page = Controller::Template('View/v_edit.php', $vars);
        echo $page;
	}	
}


