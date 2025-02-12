<?php
include "db.php";
$q_id=$_GET["q_id"];
echo "q_id";
$query="delete questions.*,answers.* FROM questions INNER JOIN answers ON questions.q_id=answers.q_id where questions.q_id=$q_id;";
$del=mysqli_query($con,$query);
if($del)
{
?>
  <script type="text/javascript">
    alert("record deleted successfully");
     window.location="questionDetails.php";
   </script>
<?php
}
else
{
?>
  <script type="text/javascript">
     alert(" record not deleted,please try again");
     window.location="questionDetails.php";
  </script>
<?php
}
?>
