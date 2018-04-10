<?php
include_once('startup.php');
include_once('model.php');

// Setting parameters, connection to db, session start.
startup();

// Online form processing.

if (isset($_POST['title'], $_POST['content'])){
    if (articles_new($_POST['title'], $_POST['content'])){
        header('Location: v_editor.php');
        die();
    }

    $title = $_POST['title'];
    $content = $_POST['content'];
}
else
{
    $title = '';
    $content = '';
}


// Extract to View.
include('theme/v_new.php');
