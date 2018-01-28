<?php



$server='localhost';
$username='root';
$password='Smdilia2012@';
$dbname='blog_base';

$link=mysql_connect($server,$username,$password) or die('Error,server connection failed');
mysql_select_db($dbname) or die('Error,db connection failed');


session_start();


?>