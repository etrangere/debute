<?php
include_once('controller/Controller.php');

//
// ������� ���������� �����.
//
abstract class C_Base extends Controller
{
	//
	// �����������.
	//
	function __construct()
	{
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
		$vars = array('content' => $this->content);			
		$page = $this->View('tpl_main.php', $vars);

		// ����� HTML.
        echo $page;
	}
}
