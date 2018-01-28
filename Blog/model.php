<?php
//
// Список всех статей
//
function articles_all()
{
// Запрос.
$query = "SELECT * FROM messages ORDER BY id_article DESC";
$result = mysql_query($query);

if (!$result) die(mysql_error());

// Извлечение из БД.
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
// Конкретная статья
//
function articles_get($id_article)
{
// TODO
}

//
// Добавить статью
//
function articles_new($article_name, $article_text)
{
// Подготовка.
$article_name = trim($article_name);
$article_text = trim($article_text);

// Проверка.
if ($article_name == '')
return false;

// Запрос.
$t = "INSERT INTO messages (article_name, article_text) VALUES ('%s', '%s')";

$query = sprintf($t,
mysql_real_escape_string($article_name),
mysql_real_escape_string($article_text));

$result = mysql_query($query);

if (!$result)
die(mysql_error());

return true;
}

//
// Изменить статью
//
function articles_edit($id_article, $title, $content)
{
// TODO
}

//
// Удалить статью
//
function articles_delete($id_article)
{
// TODO

    $sql = "DELETE FROM messages WHERE id_article = '18'";

    mysql_query($sql);

}

//
// Короткое описание статьи
//
function articles_intro($article)
{
// TODO
// $article - это ассоциативный массив, представляющий статью
}




/////

/*`
$query = "UPDATE messages SET article_name = 'hovo' ,article_text = 'debilutyun'
WHERE id_article = '18' ";

$id_article = $_POST['id'];
$article_name = $_POST['title'];
$article_text = $_POST['content'];
$author_email = $_POST['email'];



$query = "INSERT INTO messages (id_article,article_name,article_text,author_email)
VALUES('','$article_name','$article_text','$author_email')"   or die ('Error,query failed');

*/
?>