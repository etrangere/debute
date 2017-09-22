<?php  

include_once ('db.config.php');

$folder_path = '/Applications/XAMPP/xamppfiles/htdocs/DZ6/uploads/';


if ($_GET['id']!= '' ) {

     $file_path = $folder_path.$_GET['id'];
     unlink ($file_path);

}
$id = $_GET['id'];

$sql = "DELETE FROM images_table WHERE file_name = '$id'";

$result=mysql_query($sql);



header("Location:server.php");



?>