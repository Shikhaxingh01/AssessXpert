<?php include "db.php";
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

  <title>Document</title>
</head>
<body>
    <Center><h1>Question Details</h1></center>
     
        <!-- TABLE START ..... -->
               <br><br>
              
        <table class="table table-bordered">
  <thead>
  <tr>
<th>#</th>   
<!-- <th>Subject_id</th> -->
<th>topic_id</th>
<th>Q_id</th>
<!-- <th>Question_img</th> -->
<th>Question</th>
<th>Option1</th>
<th>Option2</th>
<th>Option3</th>
<th>Option4</th>
<th>Answer</th>
<th>Level</th>
<th>Update</th>   
<th>Delete</th>
</tr>
<thead>
<tbody>
   <?php
  
$query="SELECT questions.topic_id,questions.q_id,questions.question,questions.op1,questions.op2,questions.op3, questions.op4,answers.answer,questions.q_level FROM questions,answers WHERE questions.q_id=answers.q_id ORDER BY questions.q_id";
$count=0;
  $res=mysqli_query($con,$query);
  
 while($row=mysqli_fetch_array($res))
   {
   $count++;
     echo "<tr>";
    
     echo "<td>"; echo $count ;  echo "</td>";
     echo "<td>"; echo $row["topic_id"];  echo "</td>";
     echo "<td>"; echo $row["q_id"];  echo "</td>";
     //echo "<td>"; echo $row['fileupload'] ; echo "</td>";
     echo "<td>"; echo $row["question"];  echo "</td>";
     echo "<td>"; echo $row["op1"];  echo "</td>";
     echo "<td>"; echo $row["op2"];  echo "</td>";
     echo "<td>"; echo $row["op3"];  echo "</td>";
     echo "<td>"; echo $row["op4"];  echo "</td>";
     echo "<td>"; echo $row["answer"];  echo "</td>";
     echo "<td>"; echo $row["q_level"];  echo "</td>";
     echo "<td>"; ?> <a href="edit.php?q_id=<?php echo $row["q_id"]; ?>" > <button type="button" class="btn btn-success">Edit</button></a> <?php echo "</td>";
     echo "<td>";  ?> <a href="delete.php?q_id=<?php echo $row["q_id"]; ?>" > <button type="button" class="btn btn-danger">Delete</button></a> <?php   echo "</td>";
     echo "</tr>";
  }
  ?>
</tbody>
</table>
</body>
</html>

