<?php include "link2.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script>
      $(document).ready(function(){
     $('#sel option[value='3']').attr("selected","selected")
      });
      </script>
    <title>Document</title>

<style>
.swal{
  background-color:gray;
  border:2px solid black;
}


</style>

</head>
<body>




<?php 
include "db.php";
include "link2.php";

$q_id=$_GET["q_id"];
$subject_id=" ";
$topic_id=" ";
$ques=" ";
$op1=" ";
$op2=" ";
$op3=" ";
$op4=" ";
$answer="";
$level="";

$res=mysqli_query($con,"SELECT questions.topic_id,questions.q_id,questions.question,questions.op1,questions.op2,questions.op3, questions.op4,answers.answer,questions.q_level FROM questions,answers WHERE questions.q_id=answers.q_id ORDER BY questions.q_id=$q_id");
while($row=mysqli_fetch_array($res))
{
$topic_id=$row["topic_id"];
$q_id=$row["q_id"];
$ques=$row["question"];
$op1=$row["op1"];
$op2=$row["op2"];
$op3=$row["op3"];
$op4=$row["op4"];
$answer=$row["answer"];
$level=$row["q_level"];

}
?>
    <div class="row">
    <div class=col-sm-3></div>
    <div class=col-sm-6>
    <center><h1 style="background-color:maroon;color:gold";> Edit Question Paper</h1><center>
    <div class="modal-body" style="font-size:20px;border:2px solid  #adb5bd;background:gray">
    <form  method="post"style="background-color:pink";>
    <div class="form-group">
    <div class="col-sm-12 form-group">

          <label>Topic_id</label>
            <select name="topic_id" id="sel" value="<?= $topic_id?>">
           <?php
            for($i=1;$i<20;$i++)
            {?>
              <option value="<?=$i?>"
              <?php
              if($topic_id==$i)
              {
                echo "selected";
              }
              ?>
              
            ><?=$i?></option> <br>
           <?php }?>
             
            </select>
            
            </div>
            <div class="col-sm-12 form-group">
            <label>Question</label>
            <textarea  name="question"  class="form-control"><?=$ques?>
            </textarea>
            </div>
            <div class="col-sm-12 form-group">
            <label> option A</label>
            <input type="text" name="op1" class="form-control" value="<?= $op1?>""/>
            </div>
            <div class="col-sm-12 form-group">
            <label> option B</label>
            <input type="text" name="op2"  class="form-control" value="<?= $op2?>"/>
            </div>
            <div class="col-sm-12 form-group">
            <label> option C</label>
            <input type="text" name="op3"  class="form-control" value="<?= $op3?>"/>
            </div>
           <div class="col-sm-12 form-group">
            <label>option D</label>
            <input type="text" name="op4"  class="form-control" value="<?= $op4 ?>"/>
            </div>
            <div class="col-sm-12 form-group">
            <label>Answer</label>
            <?php
            if($answer=='A')
            {?>
            <input type="radio" value="A" name="answer" checked value="<?= $answer?>"/>A
             <input type="radio" value="B" name="answer" value="<?= $answer?>"/>B
              <input type="radio" value="C" name="answer" value="<?= $answer?>"/>C
              <input type="radio" value="D" name="answer"value="<?= $answer?>" />D
           <?php 
            }
            else{
              if($answer=='B')
              {
                ?>
                <input type="radio" value="A" name="answer"  value="<?= $answer?>"/>A
                <input type="radio" value="B" name="answer" checked value="<?= $answer?>"/>B
                 <input type="radio" value="C" name="answer" value="<?= $answer?>"/>C
                 <input type="radio" value="D" name="answer"value="<?= $answer?>" />D
                 
              <?php
               }
              else{
                 if($answer=='C')
                  {?>
                <input type="radio" value="A" name="answer"  value="<?= $answer?>"/>A
                <input type="radio" value="B" name="answer" value="<?= $answer?>"/>B
                 <input type="radio" value="C" name="answer" checked value="<?= $answer?>"/>C
                 <input type="radio" value="D" name="answer"value="<?= $answer?>" />D
               <?php }
                else{
                  ?>
                  <input type="radio" value="A" name="answer"  value="<?= $answer?>"/>A
                  <input type="radio" value="B" name="answer" checked value="<?= $answer?>"/>B
                   <input type="radio" value="C" name="answer" value="<?= $answer?>"/>C
                   <input type="radio" value="D" checked name="answer"value="<?= $answer?>" />D
               <?php   
                }
              }


            }
            ?>
            </div>
            
            <div class="col-sm-12 form-group">
            <label>Level</label>
            <select name="level" value="<?= $level ?>">
              <option>Select One</option>
              <option 
              <?php
              if($level=="Beginners")
              {
                echo "selected";
              }
              ?>
              >Beginners</option>
              <option
              <?php
              if($level=="Intermediate")
              {
                echo "selected";
              }
              ?>
             
              >Intermediate</option>
              <option
              <?php
              if($level=="Advance")
              {
                echo "selected";
              }
              ?>
             
              >Advance</option>
            </select>

             </div>
            
          
           
           <div class="row">
              <div class="col-sm-12 text-center form-group" style="padding-top:10px;padding-bottom:10px;"><br>
            <button type="submit" name="update" class="form-control btn btn-success btn-block btn-lg">update</button>
            </div>
          
      
</form>   
</div>    <div>
              <div class=col-sm-3></div>
              <div>
               

</body>
<?php
if(isset($_POST["update"]))
{
$topic_id=$_POST["topic_id"];
$ques=$_POST["question"];
$op1=$_POST["op1"];
$op2=$_POST["op2"];
$op3=$_POST["op3"];
$op4=$_POST["op4"];
$answer=$_POST["answer"];
$level=$_POST["level"];
$query="update questions q,answers a set q.topic_id='$topic_id', q.question='$ques', q.op1='$op1', q.op2='$op2', q.op3='$op3', q.op4='$op4', q.q_level='$level' ,a.answer='$answer' where q.q_id=a.q_id AND q.q_id='$q_id'";
$state=mysqli_query($con,$query); 
if($state)
{
     ?>
    <script>
swal({
    title: "Table updated Successfully",
    text: "Great!",
    type: "success"

}).then(function() {
    window.location = "questionDetails.php";
});


    /*alert("Table updated successfully");
    window.location.href="questionDetails.php";*/
    </script>
<?php

/*$_SESSION['status'] ="Table updated Successfully";
$_SESSION['status_code']= "success";
header(location:'edit.php');*/





}
else
{

 /* $_SESSION['status'] ="Table not  updated Successfully";
  $_SESSION['status_code']= "error";
  header(location:'edit.php');*/


?>
<script type="text/javascript">

swal({
    title: "Table not updated Successfully",
    text: "Opps!",
    type: "error"
}).then( function () {
    window.location = "edit.php";
});


  /*alert("Table not updated,please Try Again....");
     window.location.href="edit.php";*/
    </script>
<?php
}
}
?>
</html>