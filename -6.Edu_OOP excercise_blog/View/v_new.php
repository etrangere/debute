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
<a href="index.php?c=Main">Home</a><br><hr>
</div>
<div id="content">
	<form method="post">
    Title:
		<br/>
		<input type="text" name="title" value="<?=$this->new_article_title?>" size="100"/>
		<br/>
		<br/>
		Content:
		<br/>
		<textarea name="content"><?=$this->new_article_content?></textarea>
<br/>

<input type="submit"  value="Add" />
</form>
</div>
<div id="footer">
    All right reserved.Tel.Adress.
</div>

</body>
</html>