<!--TERM AND CONDITION --->
<html>
<!-- prevent back--count down--->

<script type = "text/javascript" >  

    function preventBack()
    {
    	window.history.forward(); 
    }  
    setTimeout("preventBack()", 0);  
</script> 

<div class="container-fluid">
<div class="row">
<h1 class="mt-4" style="text-align: center; font-size:40px;">&nbsp;&nbsp;<u>Term and Conditions</u></h1>
</div>
<div class="row" style="margin:0px; padding:0px;">
<div class="col-sm-2"></div>
<div class="col-sm-4">
      <div class="modal-body" style="font-size: 20px; border:1.5px solid black;background-color:E3F4FE;margin-left:50px; margin-right:50px; padding:40px;">
        <form action="quiz.php" method="post" enctype="multipart/form-data">
                1. this is sample rule.<br/>
				2. this is sample rule.<br/></br>
                <label><input type="checkbox" required="required"/> I agree with terms and conditions.</label>
                         
               <div class="col-sm-12 text-center form-group" style="padding-top:15px; ">
               <br/>
               <center> 
               
               <input type="submit" value="Start Quiz"class="form-control" name="start_quiz" style="font-size:20px;height:40px; width:240px; background-color:green; color:white"/>
               </center>
               </div>
               </div>
            
        </form>
	</div>
<div class="col-sm-2"></div>

</div>
</div><br/><br/>
              



<?php
session_start();
include 'connection.php';
if(isset($_POST['start_quiz']))
{
$exam_id=$_SESSION["exam_id"];
$sub_id=$_SESSION["sub_id"];
$std_id=$_SESSION["email"];
$status="started";

$status=mysqli_query($conn,"insert into stdquizstatus(stu_id,exam_id,status) values('$std_id','$exam_id','$status')");


$res=mysqli_query($conn,"select q_id from questions where sub_id='$sub_id'");
 while($row=mysqli_fetch_array($res))
{
   $data=$row["q_id"];
      $query="insert into quizquestion(exam_id,sub_id,stu_id,q_id) 
      values('$exam_id','$sub_id','$std_id','$data')";
      $result=mysqli_query($conn,$query);
//    if($result)
//  {  
     ?>
<!-- <script>
// alert("record inserted Successfully");
//  </script>
//   <?php 
//  }
//    else{
//      echo  die(mysqli_query_error($conn)); 

//  }
 }
//  $question=mysqli_query($conn,"select q_id from quizquestion where stu_id='$stu_id' && id=1");
//  while($row=mysqli_fetch_array($question))
// {
//    $q=$row["q_id"];
//    echo "$q";
// }
}
 ?>


</html>