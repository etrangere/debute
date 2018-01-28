<?php

include_once('model.php');

include_once('dbconfig.php');


$articles = articles_all();

include('theme/editor.php');
