<?php
include_once('controller/Controller.php');

//
// Базовый контроллер сайта.
//
abstract class C_Base extends Controller
{
	//
	// Конструктор.
	//
	function __construct()
	{
	}
	
	//
	// Виртуальный обработчик запроса.
	//
	protected function OnInput()
	{
	}
	
	//
	// Виртуальный генератор HTML.
	//	
	protected function OnOutput()
	{
	    // Основной шаблон всех страниц.
		$vars = array('content' => $this->content);			
		$page = $this->View('tpl_main.php', $vars);

		// Вывод HTML.
        echo $page;
	}
}
