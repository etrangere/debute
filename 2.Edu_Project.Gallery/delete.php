<?php  

include_once ('db.config.php');

$folder_path = 'uploads/';


if ($_GET['id']!= '' ) {

     $file_path = $folder_path.$_GET['id'];
     unlink ($file_path);

}
$id = $_GET['id'];

//$sql = "DELETE FROM images_table WHERE file_name = '$id'";

$result=mysqli_query($link,"DELETE FROM images_table WHERE file_name = '$id'");



header("Location:server.php");



?>