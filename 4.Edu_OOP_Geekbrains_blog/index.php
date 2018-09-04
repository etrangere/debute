<?php
include_once('startup.php');
include_once('model/model.php');

// Setting parameters, connection to db, session start.
Connect::startup();

// Extracting articles.

$articles = Article ::articles_all();

include('view/v_index.php');
?>























