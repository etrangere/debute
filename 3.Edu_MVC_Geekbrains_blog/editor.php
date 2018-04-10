<?php
include_once('startup.php');
include_once('model.php');

// Setting parameters, connection to db, session start.
startup();

// Extracting articles.
$articles = articles_all();



// Extract to View.
include('theme/v_editor.php');
?>



