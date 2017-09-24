

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


Title:<br>
<input type="text" name="title"  style="width: 300px;"><br>

<form action="/dbconnect.php">

Content: <br>
<input type="text" name="content" style="width: 1000px; height: 300px;"><br>

  
<input type="submit" value="Save" name="save">
<input type="submit" name= "delete" value="Delete">
</form>

<hr>

&copy; 2016 Все права защищены Щкола програмирования

</body>
</html>