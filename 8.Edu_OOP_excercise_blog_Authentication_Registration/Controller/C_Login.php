<?php


class C_Login extends C_Base

{
    protected $mUsers;
    protected $ok_registration;
    protected $ok_login;
    protected $email; // e-mail check



public function __construct()

{

}

public function onInput()

{
    $mUsers = M_Users::Instance();
    $this->page_title = $this->page_title . ' :: Authentication';

    // clean old sessions

    $mUsers->ClearSessions();

    // logout user
    $mUsers->Logout();

    // Form login

    if (isset($_POST['submit_login']))
    {

        $this->email = $_POST['login'];

        if ($_POST['login'] == "" || $_POST['password'] == "")
        {
            $this->ok_login =  "Error: Login all fields are required";
        }
        elseif (!preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $this->email))
        {
            $this->ok_login =  "Error: please add valid e-mail adress";
        }
        else
        {
            if ($mUsers->Login($_POST['login'], $_POST['password'], isset($_POST['remember'])))
            {
                header('Location: index.php?c=Editor');
                die();
            }
            else
            {
                $this->ok_login =  "Error: login or password not correct";
            }

        }
    }

    // Form registration

    if(isset($_POST['submit_register']))
    {
        $this->email = $_POST['e_mail'];


        if ($_POST['f_name'] == "" || $_POST['l_name'] == "" || $_POST['e_mail'] == "" || $_POST['password_1'] == "" ||
            $_POST['password_2'] == "" || $_POST['id_role'] == "" ) {

            $this->ok_registration =  "Error: all fields are required";

        }
        elseif(!preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $this->email))
        {
                $this->ok_registration =  "Error: please add valid e-mail adress";
        }
        else
        {
            if ($mUsers->Registration($_POST['f_name'], $_POST['l_name'],$_POST['e_mail'],
            $_POST['password_1'],$_POST['password_2'],$_POST['id_role']))
            {
               $this->ok_registration = ' You have successfully registered and you can login with your credentials!';

            }
        }
    }



}


    public function OnOutput()
    {
        $vars = array('title' => $this->page_title);
        $page = Controller::Template('View/v_login.php',$vars);
        echo $page;
    }

}