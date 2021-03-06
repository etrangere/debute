<?php

function __autoload($class_name)
{
    //class directories
    $directorys = array('Controller/', 'Model/');

    //for each directory
    foreach($directorys as $directory)
    {
        //see if the file exsists
        if(file_exists($directory.$class_name . '.php'))
        {
            require_once($directory.$class_name . '.php');
            //only require the class once, so quit after to save effort (if you got more, then name them something else
            return;
        }
    }
}


C_Base::Startup();


switch ( $_GET['c'])
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





