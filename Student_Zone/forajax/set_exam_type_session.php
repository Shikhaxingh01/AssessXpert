<?php
session_start();
include '../connection.php';
@$sub_id=$_GET["sub_id"];
$_SESSION["sub_id"]=$sub_id;
echo $sub_id;

$res=mysqli_query($conn,"select * from exam where sub_id='$sub_id'");

echo $sub_id;
while($row=mysqli_fetch_array($res)){
    $_SESSION["exam_time"]=$row["duration"];
    $_SESSION["exam_id"]=$row["exam_id"];
    echo $_SESSION["exam_time"];
}
$date=date("Y-m-d H:i:s");
echo $date;
$_SESSION["end_time"]=date("Y-m-d H:i:s",strtotime($date."+$_SESSION[exam_time]  minutes"));
echo  $_SESSION["end_time"];
$_SESSION['exam_start']="yes";
?>