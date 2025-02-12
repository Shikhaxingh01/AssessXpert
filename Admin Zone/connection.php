<?php
$servername="localhost";
$username="root";
$password="";
$dbname="Online_Quiz";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn){
    echo "";
}
else{
    echo "Connection Failed";
}
?>