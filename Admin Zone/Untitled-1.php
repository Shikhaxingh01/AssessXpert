<?php
include "connection.php";
error_reporting(0);
include "common/link.php";

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


if(isset($_POST['submit'])){

    //var_dump($_FILES);
    echo "<br><br>";
    $file=rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc=$_FILES['file']['tmp_name'];
    $file_size=$_FILES['file']['size'];
    $file_type =$_FILES['file']['type'];
    $folder="uploads/";
    move_uploaded_file($file_loc,$folder.$file);
    $query="insert into tbl_uploads (file_name,file_size,file_type) values('$file','$file_size','$file_type')";
  
    $data=mysqli_query($conn,$query);
   }
    ?>
    
</body>
</html>


