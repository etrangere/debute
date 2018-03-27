<?php
if(!defined('BASECONROL'))
	die();
	
function __autoload($classname){
	$parts = explode('_', $classname);
	
	unset($parts[count($parts) - 1]);
	$path = implode('/', $parts) . '/' . $classname . '.php';
	
	if(!file_exists($path))
		die();
		
	include_once($path);
}