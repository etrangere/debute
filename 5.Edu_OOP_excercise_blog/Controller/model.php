<?php

class Model extends Controller
{
  public function articles_all(){
    // Query.

    $query = "SELECT * FROM articles ORDER BY id_article DESC";
    $result = mysqli_query(C_Base::$link,$query);

    if (!$result)
        die(mysqli_error(C_Base::$link));

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

   public function articles_get($id_article)
   {
    $query = "SELECT title,content FROM articles WHERE id_article = $id_article";
    $result = mysqli_query(C_Base::$link,$query);

    if (!$result)
        die(mysqli_error(C_Base::$link));

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
// Text field validation and error check.
//
   public function Validation()
   {

   }

//
// Add article.
//

   public function articles_new($article_title,$content)
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
        mysqli_real_escape_string(C_Base::getObject(),$title),
        mysqli_real_escape_string(C_Base::getObject(),$content),
        mysqli_real_escape_string(C_Base::getObject(),$intro));

    $result = mysqli_query(C_Base::$link,$query);

    if (!$result)
        die(mysqli_error(C_Base::$link));
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
        mysqli_real_escape_string(C_Base::$link,$title),
        mysqli_real_escape_string(C_Base::$link,$content));

    $result = mysqli_query(C_Base::$link,$query);

    if (!$result)
        die(mysqli_error(C_Base::$link));

    return true;

   }

//
// Delete article
//

   public function articles_delete($id_article)
   {

    $sql = "DELETE FROM articles WHERE id_article = '$id_article'";

    mysqli_query(C_Base::$link,$sql);

   }

}