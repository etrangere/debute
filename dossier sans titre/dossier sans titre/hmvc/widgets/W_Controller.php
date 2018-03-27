<?php
//
// Базовый класс контроллера.
//
abstract class W_Controller
{
	protected $content;
	//
	// Конструктор.
	//
	function __construct()
	{		
		$this->content = '';
	}
	
	//
	// Полная обработка HTTP запроса.
	//
	public function Request()
	{
		$this->OnInput();
		$this->OnOutput();
		return $this->content;
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
	}
	
	//
	// Генерация HTML шаблона в строку.
	//
	protected function View($fileName, $vars = array())
	{
		foreach ($vars as $k => $v) 
		$$k = $v;
	
		ob_start(); 
		include "view/tpl_widgets/$fileName"; 
		return ob_get_clean(); 	
	}	
}
