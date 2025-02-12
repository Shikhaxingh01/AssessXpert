<?php
session_start();
include "../connection.php";
include '../common/link.php';
$total_que=0;
$query="select q_id from quizquestion where stu_id='$_SESSION[email]' && exam_id='$_SESSION[exam_id]'";
$res=mysqli_query($conn,$query);
$total_que=mysqli_num_rows($res);
echo $total_que;


?>