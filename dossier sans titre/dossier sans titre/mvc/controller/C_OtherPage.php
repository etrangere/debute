<?php
include_once('controller/C_Base.php');
include_once('model/M_Articles.php');
//
// Конттроллер страницы-примера.
//
class C_OtherPage extends C_Base 
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
    }

    //
    // Виртуальный генератор HTML.
    //
    protected function OnOutput() 
    {   	
        // Генерация содержимого страницы Welcome.
    	$vars = array();
    	
    	$this->content = $this->View('tpl_otherpage.php', $vars);

		// C_Base.
        parent::OnOutput();
    }
}