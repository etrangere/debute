<?php
include_once('controller/C_Base.php');
include_once('model/M_Articles.php');
//
// Конттроллер страницы-примера.
//
class C_Page extends C_Base 
{
	private $articles;
	
	//
    // Конструктор.
    //
    function __construct() 
    {
    	parent::__construct();
    }

    //
    // Виртуальный обработчик запроса.
    //
    protected function OnInput() 
    {
		// C_Base.
		parent::OnInput();
		
		$mArticles = M_Articles::Instance();
		$this->articles = $mArticles->All();
    }

    //
    // Виртуальный генератор HTML.
    //
    protected function OnOutput() 
    {   	
        // Генерация содержимого страницы Welcome.
    	$vars = array(
			'articles' => $this->articles);
    	
    	$this->content = $this->View('tpl_page.php', $vars);

		// C_Base.
        parent::OnOutput();
    }
}