<?php
include ('test.php');

$g= new TextBoxSimple();
$g->display();

$g= new TextBoxSpecial("textboxspecial");
$g->display();

$g= new TextBox("textbox");
$g->edit(3333333);
$g->display();

$rr = new Text("text");
$rr->edit(222222);
$rr->display();




$f = new T("tt");
$f->edit(111111);
$f->display();

//$f ->make_header();



?>