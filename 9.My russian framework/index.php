<?php
include_once('model/startup.php');
include_once('controller/C_Login.php');
include_once('controller/C_Welcome.php');

// Initialisation.
startup();

// Choose controller.
switch ($_GET['c'])
{
case 'login':
	$controller = new C_Login();
	break;
default:
	$controller = new C_Welcome();
}

// Request processing.
$controller->Request();
