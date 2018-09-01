<?php

include_once('model.php');

// Online form processing.

if (isset($_POST['title'], $_POST['content'],$con)){
    if (articles_new($_POST['title'], $_POST['content'],$con)){
        header('Location:editor.php');
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
