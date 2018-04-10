<?php
include_once('startup.php');
include_once('model\model.php');


// Setting parameters, connection to db, session start.
startup();

$articles = ARTIC_all::articles_all();


// Extract to View.
include('view/v_editor.php');
?>



