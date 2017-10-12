<?php

require_once ('db.config.php');

$dest_upload='uploads/';

$uploaded_file= $dest_upload . basename($_FILES["fileToUpload"]["name"]);

$uploadok= 1;

$imageFileType = pathinfo($uploaded_file, PATHINFO_EXTENSION);


if ($_FILES["fileToUpload"]["name"] > 2500000) {
    echo "Sorry, your file is too large.";
    $uploadok= 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadok= 0;
}

if (file_exists($imageFileType)) {
    echo "Sorry, file already exists.";
    $uploadok= 0;
}

if ($uploadok == 0) {
    echo "Sorry, your file was not uploaded.";

} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $uploaded_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";'<br/>';
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



$folder_path = 'uploads/';//images upload folder path

$folder = opendir($folder_path); 

?>

<!DOCTYPE html>
          <html>
          <head>
            <title>Gallery</title>
            <link rel="stylesheet" type="text/css" href="style.css">
            <link rel="stylesheet"  href="bootstrap.min.css">
</head>
<body>

  <center><h1>IMAGE GALLAERY</h1></center>


  

        <?php
           while(false != ($file = readdir($folder))) { 

            if ($file == ".." || $file == "." || $file == ".DS_Store") {
              continue;
             }
 
           $file_path = $folder_path.$file;
           ?>
           <div id = "gallery_product">
           <div class="col-sm-3">

           <form action="delete.php?id=<?php echo $file; ?>" method="post">
                 <a href="<?php echo $file_path;?>"><img src="<?php echo $file_path;?>"  height="250" width="300"></a>
          <input type="submit" name="" value="Delete">
          </form> 
          </div>
          </div>
        <?php 

        }
  
closedir($folder);

?>

<div id="upload_form">
   <form action="" method = "post" enctype="multipart/form-data">
   <input type = "file" name="fileToUpload" value="Upload file"></br>
   <input type = "submit" name="choose" value="Submit"></br>
   </form>
</div>
  <script src="js/bootstrap.min.js"></script>
  <div class="footer">
<hr>
&copy; 2016 Все права защищены 
</div>
 </body>
</html>
          
<?php

 

//databas connection--> in db.config.php

$fileName = $_FILES["fileToUpload"]["name"];
$tmpName  = $_FILES["fileToUpload"]['tmp_name'];
$fileSize = $_FILES["fileToUpload"]['size'];
$fileType = $_FILES["fileToUpload"]['type'];

$query = "INSERT INTO images_table(id_file,file_name,file_type,file_size)".
"VALUES('','$fileName','$fileType','$fileSize')";

if ($fileName == ''){
      echo"<br>Choose file to uploaded to server!<br>"; 
    }
else
     {
      echo"<br>File '$fileName' uploaded to server!<br>";
     }

/*
mysql_query($query) or die('Error,query failed'); 

$result=mysql_query('SELECT * FROM images_table');

while ($row = mysql_fetch_assoc($result)) {
    
    echo'<ul>';
    echo($row ['id_file']);
    echo($row ['file_name']);
    echo($row ['file_type']);
    echo($row ['file_size']);
    echo'</ul>';

}

*/
mysql_close($link);

?>









