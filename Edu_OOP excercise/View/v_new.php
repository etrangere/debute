<?php
/**
 * Created by PhpStorm.
 * User: Urartu
 * Date: 03/03/2018
 * Time: 02:10
 */

?>

<h1>New article</h1>
	<form method="post">
    Title:
		<br/>
		<input type="text" name="title" value="<?=$title?>" />
		<br/>
		<br/>
		Content:
		<br/>
		<textarea name="content"><?=$text?></textarea>
<br/>
<input type="submit" value="Add" />
</form>