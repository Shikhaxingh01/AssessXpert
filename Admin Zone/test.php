<?php
include "connection.php";
error_reporting(0);

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

    var_dump($_FILES);
    $fileName = $_FILES['file']['name'];
    $fileSize = $_FILES['file']['size'];
   
    $dateprefix = new DateTime();
    $result = $dateprefix->format('Ymdhis');
    echo $result;

    $serverFileName=$result."-".$_FILES['file']['name'];

    $tem_file_loc = $_FILES['file']['tmp_name'];
    $serverFolder ="uploads/";
    $file_destination = $folder.$serverFileName;


    echo "Current Loc".$file_loc;
    echo $serverFolder;

    echo "Destination : ".$file_destination;


     move_uploaded_file($tem_file_loc,$serverFolder.$file_destination);
     

}
/*if($data){
    echo "Inserted Succesfully";
}
else{
    echo "Inserted failed";
}*/

?>


    
</body>
</html>


