<?php

if (!isset($_SESSION['username']) && isset($_COOKIE['username']))
$_SESSION['username'] = $_COOKIE['username'];

$username = $_SESSION['username'];

if ($username == null)
{
header("Location: ./login.php");


}

echo '<h1>Adminka</h1>';

$server='localhost';
$username='root';
$password='';
$dbname='car';

$link=mysql_connect($server,$username,$password) or die('Error,connection failed');
mysql_select_db($dbname);


/*
SELECT make.title , model.title
FROM make
INNER JOIN model,
ON make.id=model.id;
 */   
$result1=mysql_query('SELECT id,title FROM make');

while ($row1 = mysql_fetch_assoc($result1)) {
          echo '<li>';
          print_r($row1);
          echo '</li>';
}


/*
echo "<form action=''>";


 echo "<select name='car_list'>";
while ($row1 = mysql_fetch_array($result1)) {
   
   echo '<option value="'.$row1['make'].'">'.$row1['make'].'</option>';
}
echo "<input type='submit' value='Submit'>";
echo "</select>";

 echo"</form>";
    


 //   <option value=<?php print_r($row1);
 



mysql_close($link);


<form action="/admin.php">
  <select name="cars">
    <option value="volvo"></option>
    <option value="saab">Saab 95</option>
    <option value="mercedes">Mercedes SLK</option>
    <option value="audi">Audi TT</option>
  </select>
  <input type="submit" value="Submit">
</form>
*/




?>
<html>

<head>
</head>
<body>
<h1>Adminka</h1>


</body>
</html>
