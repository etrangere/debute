<?php

class C_Edit extends C_Base
{
    protected $article_title; //new added article title
    public $id; //article id
    protected $article_content; //new added article text
    protected $id_article;//new added article
	private $error;	//
	//
	// constractor.
	//

	function __construct()
	{
	    $id_article = $_GET['id'];
        $db_article = Model::articles_get($id_article);

        foreach($db_article as $one_article){
        $this->article_title = $one_article['title'];
        $this->article_content = $one_article['content'];
        }
	}

    //
	// query virtual processing.
	//

	protected function OnInput()
    {
        parent::OnInput();

        $this->page_title = $this->page_title . ' :: This article edit';
        $this->article_title;
        $this->article_content;

        if (isset($_POST['Save'])) {

        Model::articles_edit($_GET['id'], $_POST['article_title'], $_POST['article_content']);
        header('Location: index.php?c=Editor');

        }

        if(isset($_POST['Delete'])) {

        Model::articles_delete($_GET['id']);
        header('Location: index.php?c=Editor');
        }
    }

    //
	// html virtual generator.
	//	

    protected function OnOutput()
	{
		$vars = array('page_title'=> $this->page_title, 'article_title'=>$this->article_title,
            'article_content'=>$this->article_content,'error' => $this->error);
		$page = Controller::Template('View/v_edit.php', $vars);
        echo $page;
	}	
}


