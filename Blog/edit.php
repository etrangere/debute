
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

?>



<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
</head>
<body>
<center><h1>BLOG WEB GURU</h1></center>

<a href="index.php">Home</a>
<a href="editor.php">Editor console</a>


<hr>

<h1>New article</h1>

<form action="dbconfig.php">

Title:<br>
<input type="text" name="title"  style="width: 300px;"><br>

Content: <br>
<input type="text" name="content" style="width: 1000px; height: 300px;"><br>
<input type="submit" name="save"  value="Save" >
<input type="submit" name= "delete" value="Delete">
</form>

<hr>

&copy; 2016 All rights reserved

</body>
</html>