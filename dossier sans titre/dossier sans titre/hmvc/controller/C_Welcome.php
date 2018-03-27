<?php
include_once('controller/C_Base.php');
include_once('widgets/W_RecentEntries.php');
//
// ����������� ��������-�������.
//
class C_Welcome extends C_Base 
{	
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
		
		$recent_entries = new W_RecentEntries();
		$this->widgets[] = $recent_entries->Request();				
    }

    //
    // ����������� ��������� HTML.
    //
    protected function OnOutput() 
    {   	
        // ��������� ����������� �������� Welcome.
    	$vars = array();
    	
    	$this->content = $this->View('tpl_welcome.php', $vars);

		// C_Base.
        parent::OnOutput();
    }
}