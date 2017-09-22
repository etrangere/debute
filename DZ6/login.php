<?php

function Login($username,$remember){
    if(trim($username == '')){
        return false;
    }
    $_SESSION['username'] = $username;

    if ($remember) {
        setcookie('username',$username,time()+3600*24*7);

        return true;
    }
}

/*function check_login_password()
{
    $login = $_GET['login'];
    $password = $_GET['password'];
    // Work with $login and $password
}
function check_login_password($login, $password)
{

*/
function Logout(){
    setcookie('username','',time()-1);
    unset($_SESSION['username']);
}

session_start();

$enter_site = "";

Logout();

if(count($_POST)>0){

    $enter_site = Login($_POST['username'],$_POST['password'],$_POST['remember']=='on');


}

if($enter_site){
    header("Location: server.php");
    exit;
}





?>

<html>

<head>
</head>
<body>

<form action = "" method="POST">
    <input type = "text" name="username"></br>
    <input type = "text" name="password"></br>
    <input type = "submit" name="login"></br>
    <input type = "checkbox" name="remember"> Zapomnit
</form>
</body>
</html>

<?php











/*$f=fopen('visits.txt','a+');
fwrite($f,date('Y-m-d H:i:s')."\n");
fwrite($f,$_SERVER['REMOTE_ADDR'] ."\n");
fwrite($f,$_SERVER['HTTP_REFERER'] ."\n");
fclose($f);

$lists = file('visits.txt');


*/



?>



