<?php
include 'common/link.php';
include 'db.php';
$id=$_GET['exam_id'];
$res=mysqli_query($con,"Select * from exam where exam_id=$id");
while($row=mysqli_fetch_assoc($res)){
    $subject=$row['sub_id'];
    $starttime=$row['start_time'];
    $duration=$row['duration'];
    $endtime=$row['end_time'];
    $date=$row['date_time'];
    $totalques=$row['total_ques'];
    

}

?>

<h2> Add Exam</h2>
  <form action="" method="POST">
      <div class="row" >
          <div class="col-sm-6">
  <div class="modal-body"  style="font-size:18px;border:2px solid  #adb5bd;background:silver text-center">
  

  
           
           <div class="col-sm-12 form-group">
           <label>Subjectid</label>
           <select name="subject">
         <?php
   $sql='select id,subject_name from tblsubject';
    $data=mysqli_query($con,$sql);
    ?>
       <option>Select subject...</option>
   <?php while($row=mysqli_fetch_array($data)){
  
   ?>
       <option value="<?php echo $row['id'];?>"><?php echo $row['subject_name'];?></option>
       <?php
     if($row['id']=$row['subject_name'])
     {
       echo "selected";
     }?>
        <?php } ?> 
     </select>
           
           </div>
           <div class="col-sm-12 form-group">
           <label>Start time</label>
           <input type="time" value="<?php echo $starttime?>" name="starttime"/> 
           </div>
           <div class="col-sm-12 form-group">
           <label>Duration</label>
           <input type="number"value="<?php echo $duration?>" name="duration"/> 
           </div>
           <div class="col-sm-12 form-group">
           <label>End time</label>
           <input type="time"  value="<?php echo $endtime?>"name="endtime"/> 
           </div>
           <div class="col-sm-12 form-group">
           <label>Date_time</label>
           <input type="date" value="<?php echo $date?>"name="date"/> 
           </div>
           <div class="col-sm-12 form-group">
           <label>Total no. of Questions</label>
           <input type="number" value="<?php echo $totalques?>" name="totalques"/> 
           </div>
           <div class="row">
              <div class=" text-center form-group" style="padding-top:10px;padding-bottom:10px;"><br>
            <button type="submit" name="submit1" class="form-control btn btn-success btn-block btn-lg">Submit</button>
             </div>
             </div>      

           </div> 
   </div>
  </form>
<?php
if(isset($_POST['submit1'])){
    mysqli_query($con,"update exam set  sub_id='$_POST[subject]',start_time='$_POST[starttime]',duration='$_POST[duration]',end_time='$_POST[endtime]',date_time='$_POST[date]',total_ques='$_POST[totalques]' where exam_id=$id");  
    ?>
    <script>alert("exam added successfully");
    window.location="schedule.php";
    </script>
    <?php 
}

?>