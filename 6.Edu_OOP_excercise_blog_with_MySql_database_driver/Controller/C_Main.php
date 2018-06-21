<?php

class C_Main extends C_Base
{
   // public $articles;
    protected  $mModel;

	//
	// constractor.
	//
	function __construct()
	{
       $this->mModel= M_Model::instance();
    }

    //
	// query virtual processing.
	//

	protected function OnInput()
	{
    parent::OnInput();

    $this->page_title = $this->page_title . ' :: Read articles';
    $this->page_content= $this->mModel->articles_all();
    }

	//
	// html virtual generator.
	//

	protected function OnOutput()
    {
    parent::OnOutput();
    }
}






