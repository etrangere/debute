<?php

include ('dbconfig.php');

$id_article = $_POST['id'];
$article_name = $_POST['title'];
$article_text = $_POST['content'];
$author_email = $_POST['email'];

var_dump($id_article);
var_dump($article_name);
var_dump($article_text);
var_dump($author_email);


$query = "INSERT INTO messages (id_article,article_name,article_text,author_email)
VALUES('','$article_name','$article_text','$author_email')"   or die ('Error,query failed');


mysql_query($query);

