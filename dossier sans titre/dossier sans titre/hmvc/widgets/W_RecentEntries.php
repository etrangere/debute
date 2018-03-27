<?php
include_once('widgets/W_Controller.php');
//
// Конттроллер страницы-примера.
//
class W_RecentEntries extends W_Controller 
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
    	
    	$this->content = $this->View('tpl_recentEntries.php', $vars);
    }
}