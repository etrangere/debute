<?php

class Article{

//
// All articles list.
//
     function articles_all(){
        // Query.

        $query = "SELECT * FROM articles ORDER BY id_article DESC";
        $result = mysqli_query(Connect::getObject(),$query);

        if (!$result)
            die(mysqli_error(Connect::getObject()));

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
     function articles_get($id_article)
     {
        $query = "SELECT title,content FROM articles WHERE id_article = $id_article";
        $result = mysqli_query(Connect::getObject(),$query);

        if (!$result)
            die(mysqli_error(Connect::getObject()));

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
     function articles_new($title,$content)
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
            mysqli_real_escape_string(Connect::getObject(),$title),
            mysqli_real_escape_string(Connect::getObject(),$content));

        $result = mysqli_query(Connect::getObject(),$query);

        if (!$result)
            die(mysqli_error(Connect::getObject()));
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
            mysqli_real_escape_string(Connect::getObject(),$title),
            mysqli_real_escape_string(Connect::getObject(),$content));

        $result = mysqli_query(Connect::getObject(),$query);

        if (!$result)
            die(mysqli_error(Connect::getObject()));

        return true;

     }
//
// Delete article
//
     function articles_delete($id_article)
     {

         $sql = "DELETE FROM articles WHERE id_article = '$id_article'";

         mysqli_query(Connect::getObject(),$sql);

     }
}
?>
