<?php
//
// Controller base class.
//
abstract class Controller
{
	//
	// Constractor
	//
	private function __construct()
	{		
	}
	
	//
	// http query processing.
	//
	public function Request()
	{
		$this->OnInput();
		$this->OnOutput();
	}
	
	//
	// query virtual processing.
	//
	protected function OnInput()
	{
	}
	
	//
	// virtual generator HTML.
	//	
	protected function OnOutput()
	{
	}
	
	//
	// query method GET?
	//
	protected function IsGet()
	{
		return $_SERVER['REQUEST_METHOD'] == 'GET';
	}

	//
	// query method POST?
	//
	protected function IsPost()
	{
		return $_SERVER['REQUEST_METHOD'] == 'POST';
	}

	//
	// html template generation to line.
	//
	protected function Template($fileName, $vars = array())
	{
		// initialisation of template variables.
		foreach ($vars as $k => $v)
		{
			$$k = $v;
		}

		// html generation to line.
		ob_start();
		include $fileName;
		return ob_get_clean();	
	}	
}
