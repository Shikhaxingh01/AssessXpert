
<?php 

include 'common/header.php';
include 'common/link.php';
include 'connection.php';
?>



<style>
  .box{
     border:1px solid black;
     padding-top:40px;
     padding-bottom:40px;
     background:cornflowerblue;
     text-align:center;
     font-size:20px;
     font-weight:bold;
     margin-left:100px;
    
     border-radius:9% 0% 9% 0%;
  }
  .link{
    color:white;
    text-decoration:none;
  }
  </style> 







   <!-- Page content-->
   <div class="container-fluid">
         <div>
            
             <h1 class="mt-4" style="text-align:center;color:blue;margin-left:10px">"SELECT SUBJECT"</h1>
              <hr style="border: dark black ;height:2px; width:100%">

        </div>

        <div class="container-fluid">

        <div class="row" style="margin:0px; padding:0px;">
<div class="col-sm-1"></div>
           <div class="col-sm-10 box">

           <div class="row">
        <div class="col-sm-5">

        <h4  >SCHEDULE EXAM</h4>
      
      
      
      <?php


       $res=mysqli_query($conn,"select tblsubject.subject_name,exam.sub_id,exam.duration,exam.exam_id,exam.total_ques FROM tblsubject,exam WHERE tblsubject.sub_id=exam.sub_id;");
     // $res=mysqli_query($conn,"select subject_name from tblsubject ");
        while($row=mysqli_fetch_assoc($res)){ 
            ?>
          
             
<input type="submit" 
value=" <?php echo $row['sub_id']?>" 
style="margin-top:10px; height:50px;width:200px; background-color:green;color:white; float:left;" onclick="set_exam_type_session(this.value);"/>
 <?php
echo "<br>";
        }
         ?> 






    </div>  
    
    
    <div class="col-sm-5">

    <h4 style="margin-left:50px ">DURATION</h4>
       
       
       
       <?php
       $res=mysqli_query($conn,"select tblsubject.subject_name,exam.sub_id,exam.duration,exam.exam_id,exam.total_ques FROM tblsubject,exam WHERE tblsubject.sub_id=exam.sub_id;");
     // $res=mysqli_query($conn,"select subject_name from tblsubject ");
        while($row=mysqli_fetch_assoc($res)){ 
            ?>
          
               
<input type="submit" 
value=" <?php echo $row['duration']?>" 
style="margin-top:10px; height:50px;width:200px; background-color:green;color:white; float:right;"/>
 <?php
echo "<br>";
        }
         ?> 
         </div>
    </div>       
</div>
    </div>


<script type="text/javascript" >
   
function set_exam_type_session(sub_id){
    var x=new XMLHttpRequest();
   

    x.onreadystatechange=function(){
      
        if(x.readyState==4 && x.status==200){
         window.location="term_condition.php";

        }
       
    };
   x.open("GET","forajax/set_exam_type_session.php?sub_id="+sub_id,true);
   x.send();
}


</script>  



    </div>
</div>
        
          
 
 
        
<div class="col-sm-1`"></div>       
        </div>
         

</div>
<br>
<br>
        <div class="navbar-light bg-light border-bottom">
  <div class="container-fluid">
  <div class="row" style="text-align:center; padding:7px;">
  <div class="col-sm-6">All Rights Reversed &copy; 2021</div>
  <div class="col-sm-6">Developed by: Er. Persuing</div>
  </div>
  </div>
  
  <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>








