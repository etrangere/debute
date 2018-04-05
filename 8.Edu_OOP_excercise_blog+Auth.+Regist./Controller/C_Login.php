<?php


class C_Login extends C_Base

{
    protected $mUsers;
    protected $ok_reg;

// Менеджеры.

public function __construct()

{


}

public function onInput()

{
    $mUsers = M_Users::Instance();
    $this->page_title = $this->page_title . ' :: Authentication';

    // Очистка старых сессий.
    $mUsers->ClearSessions();
    // Выход.
    $mUsers->Logout();

    // Form login

    if (isset($_POST['submit_login']))
    {
        if ($mUsers->Login($_POST['login'], $_POST['password'], isset($_POST['remember'])))
        {
            header('Location: index.php?c=Editor');
            die();
        }
    }

    // Form registration

    if(isset($_POST['submit_register']))
    {
        if ($_POST['f_name'] == "" || $_POST['l_name'] == "" || $_POST['e_mail'] == "" || $_POST['password_1'] == "" ||
            $_POST['password_2'] == "" || $_POST['id_role'] == "") {

            $this->ok_reg =  "Error: all fields are required";

        } else {


        if ($mUsers->Registration($_POST['f_name'], $_POST['l_name'],$_POST['e_mail'],
            $_POST['password_1'],$_POST['password_2'],$_POST['id_role']))
        {
           $this->ok_reg = ' You have successfully registered and you can login with your credentials!';

        }
        }
    }

     //var_dump($this->ok_reg);

}


    public function OnOutput()
    {
        $vars = array('title' => $this->page_title);
        $page = Controller::Template('view/v_login.php',$vars);
        echo $page;
    }

}