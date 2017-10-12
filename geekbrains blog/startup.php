<?php

function startup()
{
	// Настройки подключения к БД.
	$hostname = 'localhost'; 
	$username = 'root'; 
	$password = '';
	$dbName = 'blog';
	
	// Языковая настройка.
	setlocale(LC_ALL, 'ru_RU.CP1251');	
	
	// Подключение к БД.
	mysqli_connect($hostname, $username, $password) or die('No connect with data base');
	mysqli_query('SET NAMES cp1251');
	mysqli_select_db($dbName) or die('No data base');

	// Открытие сессии.
	session_start();
		
}
