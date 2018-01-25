<?php

include ('dbconfig.php');



$query = "UPDATE messages SET article_name = 'hovo' ,article_text = 'debilutyun'
WHERE id_article = '18' ";


mysql_query($query);

