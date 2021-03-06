<?php

class C_Editor extends C_Base

{
     public $article_title;

     public function __construct()
    {
    }

     public function OnInput()
     {
     parent::OnInput();
     $this->page_title = $this->page_title . ' :: Edit articles';
     $this->page_content = Model::articles_all();
     }

     public function OnOutput()
     {
     $vars = array('title' => $this->page_title,'content' =>$this->page_content);
     $page = Controller::Template('View/v_editor.php',$vars);
     echo $page;
     }
}
