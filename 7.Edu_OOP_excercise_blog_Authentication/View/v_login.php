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
            <input type="submit" />
        </form>


	</div>
    <div id="footer">
		All right reserved.Tel.Adress.
	</div>
</body>
</html>
