<?php

class Model extends Controller
{
  public function articles_all(){
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

   public function articles_get($id_article)
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
// Text field validation and error check.
//
   public function Validation()
   {

   }

//
// Add article.
//

   public function articles_new($article_title,$content,$content)
   {
    // Prepare.
    $title = trim($article_title);
    $content = trim($content);
    $intro = trim($content);
    // Check.
    if ($title == '')
        return false;

    // Query.

    $t = "INSERT INTO articles (title, content ,intro) VALUES ('%s', '%s','%s')";

    $query = sprintf($t,
        mysql_real_escape_string($title),
        mysql_real_escape_string($content),
        mysql_real_escape_string($intro));

    $result = mysql_query($query);

    if (!$result)
        die(mysql_error());
    return true;
   }

//
// Edit article
//

   public function articles_edit($id_article,$title,$content)
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

   public function articles_delete($id_article)
   {

    $sql = "DELETE FROM articles WHERE id_article = '$id_article'";

    mysql_query($sql);

   }

}