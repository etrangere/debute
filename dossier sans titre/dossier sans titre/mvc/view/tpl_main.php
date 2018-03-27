<!DOCTYPE html>
<html>
	<head>
		<meta content="text/html; charset=Windows-1251" http-equiv="content-type"/>
		<link rel="stylesheet" href="view/styles.css" media="screen" />		
		<title><?=$title?></title>
	</head>
	<body>
		<div id = "main">
			<div id = "header">
				<h1>Company name</h1>
			</div>
			<div id = "top_menu">
				<ul>
					<li>
						<a href = "index.php">�������</a>
					</li>
					<li>
						<a href = "index.php?c=some_page">���������</a>
					</li>
					<li>
						<a href = "index.php?c=other_page">��� ���������</a>
					</li>
				</ul>
			</div>
			<div id = "under_content">
				<?=$content?>
			</div>
			<div id = "footer">
			</div>
		</div>
	</body>
</html>