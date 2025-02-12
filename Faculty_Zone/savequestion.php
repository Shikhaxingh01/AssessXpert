<?php 
include "db.php";
//require_once("Question.php") ;

class Question{

public $sub_id;
public $topic_id;
public $questionImg;
public $questionDetails;
public $option1;
public $option2;
public $option3;
public $option4;
public $answer;
public $level;
}

$sub_id=$_POST['subject'];
echo "$sub_id";
$topic_id=$_POST['topic_id'];
$file=$_FILES['fileupload']['name'];
$ques=$_POST['question'];
$op1=$_POST['A'];
$op2=$_POST['B'];
$op3=$_POST['C'];
$op4=$_POST['D'];
$answer=$_POST['answer'];
$level=$_POST['level'];

$question = new Question();
$question->sub_id=$sub_id;
$question->topic_id=$topic_id;
$question->questionDetails=$ques;
$question->option1=$op1;
$question->option2=$op2;
$question->option3=$op3;
$question->option4=$op4;
$question->answer=$answer;
$question->level=$level;
$query1="insert into questions(sub_id,topic_id,fileupload,question,op1,op2,op3,op4,q_level) 
values('$question->sub_id','$question->topic_id','$file','$question->questionDetails','$question->option1','$question->option2','$question->option3','$question->option4','$question->level')";
mysqli_query($con,$query1);
$q_id=$con->insert_id;
$query2="insert into answers(q_id,answer) values('$q_id','$question->answer')";
mysqli_query($con,$query2);
?>
<script>
alert("record inserted Successfully");
window.location="questionDetails.php";
</script>




