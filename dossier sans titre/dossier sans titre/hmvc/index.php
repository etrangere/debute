<?php
include_once('model/startup.php');
include_once('controller/C_Page.php');
include_once('controller/C_OtherPage.php');
include_once('controller/C_Welcome.php');

// Инициализация.
startup();

// Выбор контроллера.
switch ($_GET['c'])
{
	case 'some_page':
		$controller = new C_Page();
		break;
	case 'other_page':
		$controller = new C_OtherPage();
		break;
	default:
		$controller = new C_Welcome();
}

// Обработка запроса.
$controller->Request();
