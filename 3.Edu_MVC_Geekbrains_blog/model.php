<?php
//
// All articles list.
//
function articles_all()
{
	// Query.

	$query = "SELECT * FROM articles ORDER BY id_article DESC";
	$result = mysql_query($query);
							
	if (!$result)
		die(mysql_error());
	
	// Extract from DB.

	$n = mysql_num_rows($result);
	$articles = array();

	for ($i = 0; $i < $n; $i++)
	{
		$row = mysql_fetch_assoc($result);
		$articles[] = $row;
	}

	return $articles;

}

//
// One article
//

function articles_get($id_article)
{
    $query = "SELECT title,content FROM articles WHERE id_article = $id_article";
    $result = mysql_query($query);

    if (!$result)
        die(mysql_error());

    $n = mysql_num_rows($result);
    $id_article = array();

    for ($i = 0; $i < $n; $i++)
    {
        $row = mysql_fetch_assoc($result);
        $id_article[] = $row;
    }

	return $id_article;
}

//
// Add article.
//
function articles_new($title, $content)
{
	// Prepare.
	$title = trim($title);
	$content = trim($content);

	// Check.
	if ($title == '')
		return false;
	
	// Query.

	$t = "INSERT INTO articles (title, content) VALUES ('%s', '%s')";
	
	$query = sprintf($t, 
	    mysql_real_escape_string($title),
	    mysql_real_escape_string($content));
	
	$result = mysql_query($query);
							
	if (!$result)
		die(mysql_error());
		return true;
}

//
// Edit article
//

function articles_edit($id_article,$title, $content){


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

    $query = sprintf($t,
        ($id_article),
        mysql_real_escape_string($title),
        mysql_real_escape_string($content));

    $result = mysql_query($query);

    if (!$result)
        die(mysql_error());

    return true;



}

//
// Delete article
//
function articles_delete($id_article)
{


    $sql = "DELETE FROM articles WHERE id_article = '$id_article'";

    mysql_query($sql);



}

//
// Article short description
//
function articles_intro($article){

   $intro = substr($article['content'],0,350);
   return $intro;

}

?>

