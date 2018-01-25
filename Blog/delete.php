<?php  

include_once ('dbconfig.php');





$sql = "DELETE FROM messages WHERE id_article = '18'";

mysql_query($sql);







?>