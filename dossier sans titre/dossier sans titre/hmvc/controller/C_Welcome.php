<?php
include_once('controller/C_Base.php');
include_once('widgets/W_RecentEntries.php');
//
// Конттроллер страницы-примера.
//
class C_Welcome extends C_Base 
{	
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
		
		$recent_entries = new W_RecentEntries();
		$this->widgets[] = $recent_entries->Request();				
    }

    //
    // Виртуальный генератор HTML.
    //
    protected function OnOutput() 
    {   	
        // Генерация содержимого страницы Welcome.
    	$vars = array();
    	
    	$this->content = $this->View('tpl_welcome.php', $vars);

		// C_Base.
        parent::OnOutput();
    }
}