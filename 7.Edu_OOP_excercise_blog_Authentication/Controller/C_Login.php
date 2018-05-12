<?php


class C_Login extends C_Base

{
    protected $mUsers;


// ���������.

public function __construct(){




}

public function onInput()

{
    $mUsers = M_Users::Instance();
    $this->page_title = $this->page_title . ' :: Authentication';

    // ������� ������ ������.
    $mUsers->ClearSessions();
// �����.
    $mUsers->Logout();

    // ��������� �������� �����.
    if (!empty($_POST))
    {
        if ($mUsers->Login($_POST['login'], $_POST['password'], isset($_POST['remember'])))
        {
            header('Location: index.php?c=Editor');
            die();
        }
    }



}


    public function OnOutput()
    {
        $vars = array('title' => $this->page_title);
        $page = Controller::Template('view/v_login.php',$vars);
        echo $page;
    }

}