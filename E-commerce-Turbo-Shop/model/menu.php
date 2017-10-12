<?php
    



mysql_query($query) or die('Error,query failed'); 



$result=mysql_query('SELECT * FROM id_image');

while ($row = mysql_fetch_assoc($result)) {
    
    echo'<li>';

    print_r($row);

    echo'</li>';

}

mysql_close($link);



?>
