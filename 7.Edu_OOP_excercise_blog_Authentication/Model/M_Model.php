<?php
//
// Model
//
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
   public function articles_all()
   {
       $id_article = '';
       $t = "SELECT * FROM articles ORDER BY id_article DESC ";
       $query = sprintf($t, mysqli_real_escape_string(C_Base::$link,$id_article));

       return $this->mMysql->Select($query);

   }
//
// One article
//
    public function articles_get($id_article)
   {
       $t = "SELECT * FROM articles WHERE id_article = $id_article";
       $query = sprintf($t, mysqli_real_escape_string(C_Base::$link,$id_article));

       return $this->mMysql->Select($query);
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

   public function articles_new($article_title,$content,$mail)
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
       $object['mail']= $mail;

       $table='articles';

       $this->mMysql->Insert($table,$object);
       header('Location: index.php?c=Editor');
   }

//
// Edit article
//

   public function articles_edit($id_article,$title,$content,$mail)
   {
    //

    $article = 'id_article =' . $id_article;
    $title = trim($title);
    $content = trim($content);
    $intro = trim($content);
    $mail= trim($mail);
    // Check.

    if ($title == ''){
        return false;
     }

      $object = array("title"=> $title,"content"=>$content,"intro"=>$intro,"mail"=>$mail);
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