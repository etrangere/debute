<?php

class C_Main extends C_Base
{
    public $articles;

	//
	// constractor.
	//
	function __construct()
	{
    }

    //
	// query virtual processing.
	//

	protected function OnInput()
	{

    parent::OnInput();
    $this->page_title = $this->page_title . ' :: Read articles';
    $this->page_content= Model::articles_all();
       // var_dump($this);
    }

	//
	// html virtual generator.
	//

	protected function OnOutput()
    {
    parent::OnOutput();
    }

}






