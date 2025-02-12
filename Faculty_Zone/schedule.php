<?php include "db.php";
 include 'common/header.php';
?>
<?php include "link2.php";

?>

<?php include "style.php";

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

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


  <title>Document</title>
  <body style="background-color:gray"><br>
  <h2 >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u> Add Exam</u></h2>
  <form action="saveschedule.php" method="POST"style="margin-left:30px;">


  
      <div class="row">
          <div class="col-sm-6 ">
            
  <!--<div class="modal-body"  style="font-size:18px;background-color:gray;border:2px solid  #adb5bd; text-center;height:390px;width:500px;">-->
  

  
           <div class="row">
           <div class="col-sm-6 form-group">
             
           <label>Subject</label>
           <select name="subject"class="form-control">
             <option>---Select subject---</option>
         <?php
   $sql='select sub_id,subject_name from tblsubject';
    $data=mysqli_query($con,$sql);
    ?>

   <?php while($row=mysqli_fetch_array($data)){
  
   ?>
       <option value="<?php echo $row['sub_id'];?>"><?php echo $row['subject_name'];?></option>
     
        <?php } ?> 
     </select>
           
   </div>
           <div class="col-sm-6 form-group">
           <label>Date</label>

           <input type="date" name="date" class="form-control"/> 
           </div></div>
   <div class="row">
           <div class="col-sm-6 form-group">
           <label>Start time</label>
           <input type="time" name="starttime"class="form-control"/> 
           </div>
           <div class="col-sm-6 form-group">
           <label>Duration</label>
           <input type="number" name="duration" min="0" class="form-control"/>
           </div>
           <div class="col-sm-6 form-group">
           <label>End time</label>
           <input type="time" name="endtime" class="form-control"/> 
           </div>
           
           <div class="col-sm-6 form-group">
           <label>Total no. of Questions</label>
           <input type="number" name="totalques" min="0" class="form-control"/> 
           </div></div>
           <div class="row">
              <div class=" text-center form-group" style="padding-top:10px;padding-bottom:10px;">&nbsp;
            
              <button type="submit" name="submit1" class="form-control btn btn-success btn-block btn-lg">Submit</button>
    </div>
             </div>      

           </div> 
   </div>
  </form>
  
  <br><br><br>
  <div class="container"><br><br><br>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    
                    <div class="col-sm-8"><h2><b>&nbsp;&nbsp;&nbsp;&nbsp;Schdule Exam</b></h2></div>
                    <div class="col-sm-4">
                     <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>                    </div>
                </div>
            </div>



<!--<div class="col-sm-6">

<div style="height:50px;width:100%;">
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u>Exam Categories</u></h2>
</div> </div>-->
<table class="table  table-bordered">
  <thead >
    <tr>
      <th scope="col">SN No.</th>
      <th scope="col" >Exam ID</th>
      <th scope="col">Subject ID</th>
      <th scope="col">Start Time</th>
      <th scope="col">Duration</th>
      <th scope="col">End Time</th>
      <th scope="col">Total Questions</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
   <?php
   $count=0;
   $res=mysqli_query($con,"select * from exam");
   while($row=mysqli_fetch_assoc($res)){
       $count=$count+1;
       ?>
       <tr >
      <th scope="row"><?php echo $count?></th>
      <td><?php echo $row['exam_id'];?></td>
      <td ><?php echo $row['sub_id'];?></td>
      <td><?php echo $row['start_time'];?></td>
      <td><?php echo $row['duration'];?></td>
      <td><?php echo $row['end_time'];?></td>
      <td><?php echo $row['total_ques'];?></td>
      <td ><a href="exedit.php?exam_id=<?php echo $row['exam_id'];?>"><!--<i class="fa fa-edit" aria-hidden="true"></i>-->

      
      <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
      <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                        </td>



   </a>
    </td>
      <td ><a href="exdelete.php?exam_id=<?php echo $row['exam_id'];?>"><!--<i class="fa fa-trash" aria-hidden="true"></i>-->
    
    
      <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
      <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>




    
    </a></td>
    </tr>
    <?php
}
?>
</tbody>
</table>
</div>
</div>

   </body>
</div>

</html>