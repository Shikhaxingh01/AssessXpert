<?php
include "connection.php";
error_reporting(0);
$fileName = $_GET['fileName'];
$pendingfolder="uploads/pending/";

$deletedfolder="uploads/deleted/";
$id=$_GET['id'];
//echo $fileName;
echo "<br>";

//echo $pendingfolder.$fileName;
echo "<br>";
//echo $deletedfolder.$fileName;
echo "<br>";


rename($pendingfolder.$fileName ,$deletedfolder.$fileName);

$query="update tbl_uploads set status='deleted' where id=$id";
        $result=mysqli_query($conn,$query);
        if($result){
            echo "updated sucessfully";
        }
        else{
            echo "NOt updated sucessfully";
        }
    
?>