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


mysql_close($link);
*/
?>



<!DOCTYPE html>
          <html>
          <head>
            <title>Gallery</title>
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/bootstrap.css">
            
            



</head>
<body>
  


     <div class="btn btn-info">
        <ul><a href="login.php"> Login</a></ul>
     </div>

  
   <div class="container">
    
     <div class="row">
      
       
        <ul class="nav nav-pills" class="col-md-12">
        <li><a href="" class="active">Home</a></li>
        <li><a href="" >Upload your photos</a></li>
        <li><a href="" >Help</a></li>
        <li><a href="" >Contact us</a></li>
        </ul>
       
      </div>
  <div class="row">
    <div class="col-md-3">
      <div class="thumbnail">
      <?php
           while(false != ($file = readdir($folder))) { 

            if ($file == ".." || $file == "." || $file == ".DS_Store") {
              continue;
             }
 
           $file_path = $folder_path.$file;
           ?>
                       
                 <form action="delete.php?id=<?php echo $file; ?>" method="post">
                  <a href="<?php echo $file_path;?>"><img src="<?php echo $file_path;?>"  height="250" width="250"></a>
                   <input  class="btn btn-primary" type="submit" name="" value="Delete">
                    </form>
                   <button class="btn btn-primary" class="text-aligne-center">Like!</button> 
                  
              
                
               <?php 

               }
  
               closedir($folder);

       ?>
       </div> 
      </div>
     </div>
        <div>
             <form action="" method = "post" enctype="multipart/form-data">
             <input type = "file"  name="fileToUpload" value="Upload file"></br>
             <input type = "submit" name="choose" value="Submit"></br>
             </form>
        </div>
</div>
<div class="container">
  <h2>Image Gallery</h2>
  <p>The .thumbnail class can be used to display an image gallery.</p>
  <p>The .caption class adds proper padding and a dark grey color to text inside thumbnails.</p>
  <p>Click on the images to enlarge them.</p>
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/lights.jpg" target="_blank">
          <img src="/w3images/lights.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/nature.jpg" target="_blank">
          <img src="/w3images/nature.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/fjords.jpg" target="_blank">
          <img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/lights.jpg" target="_blank">
          <img src="/w3images/lights.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <button class="btn btn-primary">Like</button>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/nature.jpg" target="_blank">
          <img src="/w3images/nature.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/fjords.jpg" target="_blank">
          <img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>


<div class="footer">
 <hr>
 &copy; 2016 Все права защищены 
</div>


<script src="js/3.2.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
 </body>
</html>
          









