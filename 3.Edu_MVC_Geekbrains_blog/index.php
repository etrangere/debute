<?php
include_once('startup.php');
include_once('model.php');

// Setting parameters, connection to db, session start.
startup();

// Extracting articles.
$articles = articles_all();

include('theme/v_index.php');
?>























