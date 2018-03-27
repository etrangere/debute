<?php
//
// ������� ����� �����������.
//
abstract class W_Controller
{
	protected $content;
	//
	// �����������.
	//
	function __construct()
	{		
		$this->content = '';
	}
	
	//
	// ������ ��������� HTTP �������.
	//
	public function Request()
	{
		$this->OnInput();
		$this->OnOutput();
		return $this->content;
	}
	
	//
	// ����������� ���������� �������.
	//
	protected function OnInput()
	{
	}
	
	//
	// ����������� ��������� HTML.
	//	
	protected function OnOutput()
	{
	}
	
	//
	// ��������� HTML ������� � ������.
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
