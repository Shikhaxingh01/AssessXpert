<?php
session_start();
include "../connection.php";
include '../common/link.php';
$question_no="";
$question="";
$op1="";
$op2="";
$op3="";
$op4="";
$answer="";
$count=0;
$ans="";


$queno=$_GET["questionno"];
if(isset($_SESSION["answer"] [$queno])){
    $ans=$_SESSION["answer"][$queno];
}

$res=mysqli_query($conn,"select questions.question,questions.op1,questions.op2,questions.op3,questions.op4,quizquestion.id
 from questions,quizquestion 
 where stu_id='$_SESSION[email]' && id='$_GET[questionno]' && exam_id='$_SESSION[exam_id]' && quizquestion.q_id=questions.q_id
  order by quizquestion.id");
$count=mysqli_num_rows($res);

if($count==0){
    echo "over";
}
else{
    while($row=mysqli_fetch_array($res)){
        $question_no=$row["id"];
        $question=$row["question"];
        $op1=$row["op1"];
        $op2=$row["op2"];
        $op3=$row["op3"];
        $op4=$row["op4"];

    }

    ?>
    <br>
    <table style="margin-left=20px"> 
        <tr> 
            <td  style="font-size:20px; margin-left:10px;">&nbsp;
               <?php echo "( ".$question_no.")".$question; ?>
            </td>
        </tr>
    </table>
    
               <input type="radio" name="r1" id="r1" value="<?php echo $op1; ?>" style="font-size:21px; margin-left:20px;  margin-top:15px;"  onclick()="radioclick(this.value,<?php echo $question_no ?>)"
               <?php 
                  if($ans==$op1){
                      echo "checked";
                  }
               ?>>

                <?php 
                  if(strpos($op1,'images/')!=false){
                      ?>
                      <img src="admin/<?php echo $op1; ?>" height="30" width="30">
                      <?php 
                    }
                       else{
                           echo $op1;
                       }
          ?>
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
               <input type="radio" name="r1" id="r1" value="<?php echo $op2; ?>"  style="font-size:21px; margin-left:20px;  margin-top:15px;" onclick()="radioclick(this.value,<?php echo $question_no ?>)"
               <?php 
                  if($ans==$op2){
                      echo "checked";
                  }
               ?>>
          
          
                <?php 
                  if(strpos($op2,'images/')!=false){
                      ?>
                      <img src="admin/<?php echo $op2; ?>" height="30" width="30">
                      <?php 
                     }
                       else{
                           echo $op2;
                       }
                      ?>
                <br><br>
               <input type="radio" name="r1" id="r1" value="<?php echo $op3; ?>"  style="font-size:21px; margin-left:20px;  margin-top:15px;"  onclick()="radioclick(this.value,<?php echo $question_no ?>)"
               <?php 
                  if($ans==$op3){
                      echo "checked";
                  }
               ?>>
          
                <?php 
                  if(strpos($op3,'images/')!=false){
                      ?>
                      <img src="admin/<?php echo $op3; ?>" height="30" width="30">
                      <?php 
                      }
                       else{
                           echo $op3;
                       }
                      ?>
             &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
               <input type="radio" name="r1" id="r1" value="<?php echo $op4; ?>"  style="font-size:21px; margin-left:20px;  margin-top:15px;"  onclick()="radioclick(this.value,<?php echo $question_no ?>)"
               <?php 
                  if($ans==$op4){
                      echo "checked";
                  }
               ?>>
           
                <?php 
                  if(strpos($op4,'images/')!=false){
                      ?>
                      <img src="admin/<?php echo $op4; ?>" height="30" width="30">
                      <?php 
                     }
                       else{
                           echo $op4;
                       }
                      ?>
           
    <?php
      }
?>