



<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
</head>
<body>
<center><h1>BLOG WEB GURU</h1></center>
<hr>
<?php

?>
<hr>

<a href="index.php">Home</a>
<a href="console.php">Editor console</a>




<hr>

<?php

include ('dbconfig.php');

$result = mysql_query('SELECT * FROM messages ORDER BY id_article DESC LIMIT 5');
if(!$result) die ('connection error' . mysql_error());


while ($row = mysql_fetch_assoc($result))
{
//echo $row['id_article'] . '<br/>';
echo $row['article_name'] . '<br/>';
echo $row['article_text'] . '<br/><hr>';
}

mysql_close();

?>

<hr>

&copy; 2016 All rights reserved

</body>
</html>