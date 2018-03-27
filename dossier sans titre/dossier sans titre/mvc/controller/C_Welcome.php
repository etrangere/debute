<?php
include_once('controller/C_Base.php');
include_once('model/M_Articles.php');
//
// ����������� ��������-�������.
//
class C_Welcome extends C_Base 
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
		
		$mArticles = M_Articles::Instance();
		$this->articles = $mArticles->All();
    }

    //
    // ����������� ��������� HTML.
    //
    protected function OnOutput() 
    {   	
        // ��������� ����������� �������� Welcome.
    	$vars = array(
			'articles' => $this->articles);
    	
    	$this->content = $this->View('tpl_welcome.php', $vars);

		// C_Base.
        parent::OnOutput();
    }
}