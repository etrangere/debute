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

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        form {border: 3px solid #f1f1f1;}

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 10%;
            border-radius: 20%;
        }

        .container {
            padding: 50px;

        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<h2>Login to the gallery to edit your photos </h2>
<font color="red"><h5>(You can use any <b>login</b> and <b>Password</b> to enter.)</h5></font>

<form action="" method="post">
    <div class="imgcontainer">
        <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="psw"><b>Password</b></label>
        <input type="text" placeholder="Enter Password" name="password" required>

        <button type="submit" name="login">Login</button>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
</form>

</body>
</html>



