<?php
function __autoload($classname){
    include_once('Controller/' . $classname . '.php');
}

//include_once ('Controller/C_Main.php');

C_Base::Startup();





switch ($_GET['c'])
{
    case "Main":
        $controller = new C_Main();
        break;
    case"Article":
        $controller = new C_Article();
        break;
    case "Edit":
        $controller = new C_Edit();
        break;
    case "Editor":
        $controller = new C_Editor();
        break;
    case "New":
        $controller = new C_New();
        break;
      default:
        header('Location: index.php?c=Main');

}

$controller->Request();






