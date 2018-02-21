<?php

$server='localhost';
$username='root';
$password='';
$dbname='images';

$link=mysql_connect($server,$username,$password) or die('Error,connection failed');
mysql_select_db($dbname);





?>