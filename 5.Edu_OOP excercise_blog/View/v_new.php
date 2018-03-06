<h1>New article</h1><br>
<a href="index.php?c=Main">Home</a><br><hr>

	<form method="post">
    Title:
		<br/>
		<input type="text" name="title" value="<?=$this->new_article_title?>" size="50"/>
		<br/>
		<br/>
		Content:
		<br/>
		<textarea name="content" rows="40" cols="120"><?=$this->new_article_content?></textarea>
<br/>
<input type="submit"  value="Add" />
</form>