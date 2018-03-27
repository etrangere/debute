<?php
include_once('widgets/W_Controller.php');
//
// ����������� ��������-�������.
//
class W_RecentEntries extends W_Controller 
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
    	
    	$this->content = $this->View('tpl_recentEntries.php', $vars);
    }
}