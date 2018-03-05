<?php
/**
 * Created by PhpStorm.
 * User: Urartu
 * Date: 03/03/2018
 * Time: 02:10
 */

?>
<a href="index.php?c=Main">Home</a>
<h1>New article</h1>
	<form method="post">
    Title:
		<br/>
		<input type="text" name="title" value="<?=$this->new_article_title?>" />
		<br/>
		<br/>
		Content:
		<br/>
		<textarea name="content"><?=$this->new_article_content?></textarea>
<br/>
<input type="submit"  value="Add" />
</form>