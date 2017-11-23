<?php 

include ('dbconnect.php');


$article_name = $_GET['title'];
$article_text = $_GET['content'];
$author_email = $_GET['email'];


$query = "INSERT INTO messages (id_article,article_name,article_text,author_email)
VALUES('','$article_name','$article_text','$author_email')"   or die ('Error,query failed');

var_dump($_GET['title']);




//header("Location:new.php");

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
<form method = "post">

Title:<br>
<input type="text" name="title"  style="width: 300px;"><br>


Content: <br>
<input type="text" name="content" style="width: 1000px; height: 300px;"><br>
  Email: <br>
<input type="text" name="email" size="35"><br>
  
<input type="submit" value="Submit">
</form>






<hr>

&copy; 2016 Все права защищены Щкола програмирования

</body>
</html>