<?php
include_once('Controller/model.php');
include_once('Model/model.php');



// Setting parameters, connection to db, session start.
// Online form processing.

class C_New extends C_Base
{

    function __construct()
    {
        parent::Startup();



    if (isset($_POST['title'], $_POST['content'])){
    if (Model::articles_new($_POST['title'], $_POST['content'])){
    header('Location: v_editor.php');
    die();
    }

    $this->title = $_POST['title'];
    $this->content = $_POST['content'];
    }
    else
    {
        $this->title = '';
        $this->content = '';
    }

    }






}

