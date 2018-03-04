<?php
include_once('C_Base.php');
include_once('model.php');




class C_Editor extends C_Base

{
     public $text;

     public $content;

    public function __construct()
    {
        parent::Startup();

    }


     public function OnInput()
     {
         parent::OnInput();
         $this->text = Model::articles_all();
         var_dump($this->text);
     }


     public function OnOutput()
     {


         $vars = array('text' =>$this->text,'title' => $this->title);

         $page = Controller::Template('v_editor.php',$vars);
         echo $page;
         var_dump($this->text);
     }




}
echo '454';