<?php
include_once('controller/C_Base.php');
include_once('model/M_Articles.php');
//
// ����������� ��������-�������.
//
class C_OtherPage extends C_Base 
{
	private $articles;
	
	//
    // �����������.
    //
    function __construct() 
    {
    	parent::__construct();
    }

    //
    // ����������� ���������� �������.
    //
    protected function OnInput() 
    {
		// C_Base.
		parent::OnInput();
    }

    //
    // ����������� ��������� HTML.
    //
    protected function OnOutput() 
    {   	
        // ��������� ����������� �������� Welcome.
    	$vars = array();
    	
    	$this->content = $this->View('tpl_otherpage.php', $vars);

		// C_Base.
        parent::OnOutput();
    }
}