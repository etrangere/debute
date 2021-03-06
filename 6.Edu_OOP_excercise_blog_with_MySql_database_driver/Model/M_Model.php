<?php

class M_Model
{


   private  $mMysql;


   private static $instance;
    //
    //
    //

   public static function Instance()
   {
        if (self::$instance == null)
            self::$instance = new M_Model();

        return self::$instance;
   }



   public function __construct()
   {

       $this->mMysql = M_Mysql::Instance();
   }
//
// All articles
//
   public function articles_all(){
    // Query.



       $articles_desc = 'articles ORDER BY id_article DESC';

   return $this->mMysql->Select($articles_desc);

   }
//
// One article
//
    public function articles_get($id_article)
   {
   $table_where = 'articles WHERE id_article = '. $id_article;

    return $this->mMysql->Select($table_where);
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

       $query = sprintf(
        mysqli_real_escape_string(C_Base::$link,$title),
        mysqli_real_escape_string(C_Base::$link,$content),
        mysqli_real_escape_string(C_Base::$link,$intro));

       $object = array();
       $object['title']= $title;
       $object['content']= $content;
       $object['intro']= $intro;
       $table='articles';

       $this->mMysql->Insert($table,$object);
       header('Location: index.php?c=Editor');
   }

//
// Edit article
//

   public function articles_edit($id_article,$title,$content)
   {
    //

    $article = 'id_article =' . $id_article;
    $title = trim($title);
    $content = trim($content);
    $intro=trim($content);
    // Check.

    if ($title == ''){
        return false;
     }

       $object = array("title"=> $title,"content"=>$content,"intro"=>$intro);

       return $this->mMysql->Update('articles',$object,$article);

   }

//
// Delete article
//

   public function articles_delete($id_article)
   {

       $table='articles';
       $article = 'id_article = '. $id_article;


       $this->mMysql->Delete($table,$article);
   }

}