<?php

function startup(){
	// DB connection config.
	$hostname = 'localhost'; 
	$username = 'root'; 
	$password = '';
	$dbName = 'blog1';
	

	// Connect to db.
	mysql_connect($hostname, $username, $password) or die('No connect with data base');
	mysql_query('SET NAMES cp1251');
	mysql_select_db($dbName) or die('No data base');

	// Session start.
	session_start();
		
}