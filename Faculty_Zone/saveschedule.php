<?php
include "db.php";
if (isset($_POST['submit1'])){
    $query="insert into exam values(NULL,'$_POST[subject]','$_POST[starttime]','$_POST[duration]','$_POST[endtime]','$_POST[date]','$_POST[totalques]')";
    $result=mysqli_query($con,$query);
    if( $result){
        ?>
        <script>alert("Added Succesfully");
        window.location="schedule.php";
    </script>
        <?php
    }
    else{
       echo  die(mysqli_query_error($con)); 
    }
}



?>