<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title><?=$this->page_title?></title>
	<meta content="text/html; charset=Windows-1251" http-equiv="content-type">	
	<link rel="stylesheet" type="text/css" media="screen" href="View/style.css" />
</head>
<body>
	<div id="header">
		<h1><?=$this->page_title?></h1>
	</div>
    <div id="menu">
		<a href="index.php?c=Main">Home</a>
        <br><hr>
	</div>
    <div id="content">

        <h1>Login</h1>

        <form method="post">
            E-mail: <input type="text" name="login" /><br/>
            Password: <input type="password" name="password" /><br/>
            <input type="checkbox" name="remember" />Remember<br/>
            <input type="submit" name="submit_login"  value="Login"/>
        </form>
        <br/>
        <?=$this->ok_login?>
        <hr>
        <h1>Registration</h1>

        <form method="post">
            First name:<input type="text" name="f_name" /><br/>
            Last name:<input type="text" name="l_name" /><br/>
            E-mail: <input type="text" name="e_mail" /><br/>
            Password: <input type="password" name="password_1" /><br/>
            Retype Password: <input type="password" name="password_2" /><br/>
            Your access rights code: <input type="password" name="id_role" /><br/>
            <input type="submit" name="submit_register" value="Register"/>
        </form>

        <?=$this->ok_registration?>

	</div>
    <div id="footer">
		All right reserved.Tel.Adress.
	</div>
</body>
</html>
