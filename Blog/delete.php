<?php  

include_once ('db.config.php');




if ($_GET['id']!= '' ) {

     $file_path = $folder_path.$_GET['id'];
     unlink ($file_path);

}
$id = $_GET['id'];


$result = mysql_query('SELECT * FROM messages');
if(!$result) die ('connection error' . mysql_error());


//$sql = "DELETE FROM messages WHERE article_name = 'Hello blog'";

$result=mysql_query($sql);







?>