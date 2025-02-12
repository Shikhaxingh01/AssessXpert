<?php
include 'db.php';
$id=$_GET['exam_id'];
mysqli_query($con,"delete from exam where exam_id=$id");
?>
<script>
    alert("category deleted succesfully");
    window.location="schedule.php";
    </script>

