<?php

class C_Editor extends C_Base

{
     public $article_title;
     protected $mModel;


     public function __construct()
    {
        $this->mModel= M_Model::Instance();
    }

     public function OnInput()
     {
     parent::OnInput();
     $this->page_title = $this->page_title . ' :: Edit articles';
     $this->page_content = $this->mModel->articles_all();
     }

     public function OnOutput()
     {
     $vars = array('title' => $this->page_title,'content' =>$this->page_content);
     $page = Controller::Template('View/v_editor.php',$vars);
     echo $page;
     }
}
