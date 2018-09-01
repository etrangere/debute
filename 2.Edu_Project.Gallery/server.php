<?php

require_once ('db.config.php');

$dest_upload='uploads/';

$folder_path = 'uploads/';//images upload folder path

$folder = opendir($folder_path);


if(isset($_FILES["fileToUpload"]["name"])){

    $uploaded_file= $dest_upload . basename($_FILES["fileToUpload"]["name"]);

    $uploadok= 1;

    $imageFileType = pathinfo($uploaded_file, PATHINFO_EXTENSION);



    if ($_FILES["fileToUpload"]["size"] > 2097152) {
        echo "Sorry, your file is too large.";
        $uploadok= 0;
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadok= 0;
    }

    if (file_exists($uploaded_file)) {
        echo "Sorry, file already exists.";
        $uploadok= 0;
    }

    if ($uploadok == 0) {
        echo "Sorry, your file was not uploaded.";

    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $uploaded_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded to the server.";'<br/>';

        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }


//database connection--> in db.config.php

    $fileName = $_FILES["fileToUpload"]["name"];
    $tmpName  = $_FILES["fileToUpload"]['tmp_name'];
    $fileSize = $_FILES["fileToUpload"]['size'];
    $fileType = $_FILES["fileToUpload"]['type'];


    mysqli_query($link,"INSERT INTO images_table(id_file,file_name,file_type,file_size)".
        "VALUES('','$fileName','$fileType','$fileSize')");

    if ($fileName == ''){
        echo"<br>Choose file to uploaded to server!<br>";
    }

}


//for debug
/*

$result=mysqli_query($link,'SELECT * FROM images_table');

while ($row = mysqli_fetch_assoc($result)) {

    echo'<ul>';
    echo($row ['id_file']);
    echo($row ['file_name']);
    echo($row ['file_type']);
    echo($row ['file_size']);
    echo'</ul>';

}

*/

mysqli_close($link);

?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Gallery</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
<style>

    img {

        width: 200px;
        height: 200px;
        max-height: 200px;
        object-fit: contain;
    }

    .thumbnail {
        width: 265px;
        height: 270px;
        object-fit: contain;

    }

    .container {
        padding: 50px;

    }
</style>

</head>
<body>

<h1><center>My Image Gallery</center></h1>

<a href="index.php" style="padding-left: 54px"><b>Login</b></a><hr>

<div class="container" style="border:double;">


<?php
while(false != ($file = readdir($folder))) {

    if ($file == ".." || $file == "." || $file == ".DS_Store") {
        continue;
    }

    $file_path = $folder_path.$file;
    ?>



    <div class="row" style="float: left" >

        <div class="col-md-12">

            <div class="thumbnail">
                <center>
                <form action="delete.php?id=<?php echo $file; ?>" method="post" >
                    <a href="<?php echo $file_path;?>"><img src="<?php echo $file_path;?>" ></a>
                </br>
                    <input  class="btn btn-primary" type="submit" name="" value="Delete">
                </form>
                </center>
            </div>
        </div>
    </div>

    <?php

}

closedir($folder);

?>
    </div>
<div>
    <form action="" method = "post" enctype="multipart/form-data" style="padding-left: 54px">
        </br>
        <input type = "file"  name="fileToUpload" value="Upload file"></br>
        <input type = "submit" name="choose" value="Submit"></br>
    </form>
</div>


<div class="footer">
    <hr>
    &copy; 2016 Allrights reserved
</div>


<script src="js/3.2.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>







