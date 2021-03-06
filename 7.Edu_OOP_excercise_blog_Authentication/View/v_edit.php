

<?php

// Managers.
$mUsers = M_Users::Instance();

// Clean old sessions.
$mUsers->ClearSessions();

// Logged user.
$user = $mUsers->Get();

// If user not registered  -  redirect to registration page.
if ($user == null)
{
    header("Location: login.php");
    die();
}

// Have the user rights to see contacts?
if (!$mUsers->Can('VIEW_EDIT'))
{

    echo '<a href="index.php?c=Editor">Back to edit</a><br/>';
    die('Access denied');
}

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <title><?=$this->page_title?></title>
    <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
    <link rel="stylesheet" type="text/css" media="screen" href="View/style.css" />
</head>

<div id="header">
    <h1><?=$this->page_title?></h1>
</div>
<div id="menu">
    <a href="index.php?c=Main">Home</a>
    <a href="index.php?c=Main">Log out</a>
    <br><hr>
</div>

<form method="post" id="content">
    <h3>Title:</h3>
    <input type="text" name="article_title" value="<?=$this->article_title?>" size="100"/>
    <br/>
    <h3>E-mail:</h3>
    <input type="text" name="article_mail" value="<?=$this->article_mail?>" size="100"/>
    <br/>
    <h3>Article:</h3>
	<textarea name="article_content" rows="40" cols="120"><?=$this->article_content?></textarea>
	<br/>
	<input type="submit" name="Save"  value="Save" />
    <input type="submit" name="Delete"  value="Delete" />
</form>

<div id="footer">
    All right reserved.Tel.Adress.
</div>

