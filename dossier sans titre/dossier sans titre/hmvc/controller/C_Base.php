<?php
include_once('controller/Controller.php');

//
// ������� ���������� �����.
//
abstract class C_Base extends Controller
{
	protected $widgets;
	//
	// �����������.
	//
	function __construct()
	{
		$widgets = array();
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
	    // �������� ������ ���� �������.
		$vars = array('widgets' => $this->widgets ,'content' => $this->content);			
		$page = $this->View('tpl_main.php', $vars);

		// ����� HTML.
        echo $page;
	}
}
