<?php
include_once('startup.php');
include_once('model.php');

// ����������� � ��.
startup();

// ��������� �������� �����.
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	// ��������� ��������� ����������.
	$name = $_POST['name'];
	$text = $_POST['text'];
	
	// ���������� ���������.
	msg_insert($name, $text);
	
	// ��������.
	header('Location: index.php');
	die();
}

// ������ ���������.
$messages = msg_select();

// ����������� ������� ��������.
include('tpl.php');
?>
