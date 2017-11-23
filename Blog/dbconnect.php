<?php

$server='localhost';
$username='root';
$password='';
$dbname='blog_base';

$link=mysql_connect($server,$username,$password) or die('Error,connection failed');
mysql_select_db($dbname);





?>