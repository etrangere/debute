<?php
/**
 * Created by PhpStorm.
 * User: urartu
 * Date: 14/12/17
 * Time: 01:56
 */
include_once ('db.config.php');

$folder_path = 'uploads/';


if ($_POST['']!= '' ) {
connect("hostname","username","password")or die(mysql_error());
mysql_select_db("dbname")or die(my


}
$id = $_GET['id'];

$sql = "INSERT INTO images_table  WHERE file_like = '$id'";

$result=mysql_query($sql);



header("Location:server.php");



?>

<?PHP
mysql_sql_error());
if ($_POST['rateup'])
{
    mysql_query("UPDATE utube SET rating = rating + 1
                WHERE (id = $pageid)");} else if ($_POST['ratedown']) {
    mysql_query("UPDATE utube SET rating = rating - 1
                WHERE (id = $pageid)");}

?>