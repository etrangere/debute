<?php

include_once('model.php');

// Extracting articles.
$articles = articles_all($con);



// Extract to View.
include('theme/v_editor.php');
?>



