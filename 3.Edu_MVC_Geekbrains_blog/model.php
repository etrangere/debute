<?php

//
// All articles list.
//
// Setting parameters, connection to db, session start.
///////////////////////
///////////////////////
// DB connection config.
$hostname = 'localhost';
$username = 'root';
$password = 'Smdilia2012@';
$dbName = '3.blog';

// Connect to db.
$con= mysqli_connect($hostname, $username, $password,$dbName) or die('No connect with data base');

// Session start.
session_start();
////////////////////////
////////////////////////

function articles_all($con)
{
	// Query.


	$result = mysqli_query($con,"SELECT * FROM articles ORDER BY id_article DESC");
							
	if (!$result)
		die(mysqli_error($con));
	
	// Extract from DB.

	$n = mysqli_num_rows($result);
	$articles = array();

	for ($i = 0; $i < $n; $i++)
	{
		$row = mysqli_fetch_assoc($result);
		$articles[] = $row;
	}

	return $articles;

}

//
// One article
//

function articles_get($id_article,$con)
{

    $result = mysqli_query($con,"SELECT title,content FROM articles WHERE id_article = $id_article");

    if (!$result)
        die(mysqli_error($con));

    $n = mysqli_num_rows($result);
    $id_article = array();

    for ($i = 0; $i < $n; $i++)
    {
        $row = mysqli_fetch_assoc($result);
        $id_article[] = $row;
    }

	return $id_article;
}

//
// Add article.
//
function articles_new($title, $content,$con)
{
	// Prepare.
	$title = trim($title);
	$content = trim($content);

	// Check.
	if ($title == '')
		return false;
	
	// Query.

	$t = "INSERT INTO articles (title, content) VALUES ('%s', '%s')";
	

	
	$result = mysqli_query($con,sprintf($t,
        mysqli_real_escape_string($con,$title),
        mysqli_real_escape_string($con,$content)));
							
	if (!$result)
		die(mysqli_error($con));
		return true;
}

//
// Edit article
//

function articles_edit($id_article,$title, $content,$con)

{


    // Prepare.

    $title = trim($title);
    $content = trim($content);

    // Check.

    if ($title == ''){
       return false;
    }

    // Query.

    $t="UPDATE articles
    SET title = '$title', content = '$content'
    WHERE id_article = '$id_article'";



    $result = mysqli_query($con,sprintf($t,
        ($id_article),
        mysqli_real_escape_string($con,$title),
        mysqli_real_escape_string($con,$content)));

    if (!$result)
        die(mysqli_error($con));

    return true;



}

//
// Delete article
//
function articles_delete($id_article,$con)
{




    mysqli_query($con,"DELETE FROM articles WHERE id_article = '$id_article'");



}

//
// Article short description
//
function articles_intro($article){

   $intro = substr($article['content'],0,350);
   return $intro;

}

?>

