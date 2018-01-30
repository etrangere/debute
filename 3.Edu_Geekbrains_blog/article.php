<html>

<body>
<a href="index.php">Home</a><br/>

</body>
</html>


<?php
include_once('startup.php');
include_once('model.php');


startup();

$id_article = $_GET['id'];

$id_article = articles_get($id_article);

foreach($id_article as $one_article){

   echo $one_article['title'];
   echo "<br/><hr>";
   echo $one_article['content'];

}


?>

