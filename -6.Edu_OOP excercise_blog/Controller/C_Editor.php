<?php

class C_Editor extends C_Base

{
     public $article_title;
     //private  $mM_Model;

     public function __construct()
    {
       // $mM_Model = M_Model::Instance();
    }

     public function OnInput()
     {
     parent::OnInput();
     $this->page_title = $this->page_title . ' :: Edit articles';
     $this->page_content = M_Model::articles_all();
     }

     public function OnOutput()
     {
     $vars = array('title' => $this->page_title,'content' =>$this->page_content);
     $page = Controller::Template('view/v_editor.php',$vars);
     echo $page;
     }
}
