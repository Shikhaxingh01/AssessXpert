<?php include "db.php";
?>
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

  <title>Document</title>


</head>

<body>
<!--<div class="container-fluid" >
  <br>
  <center>
<h1 style="text-align:center;background-color:maroon; text-color:gold;width:988px;color:gold;"><i>Manage Question Paper</i></h1>
</center>   
<div class="row"><h1 class="mt-4"></h1></div>
    <div class="row" >
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        <form action="savequestion.php" method="post" enctype="multipart/form-data" style="background-color:gray;">
<div class="modal-body" style="font-size:18px;border:2px solid  #adb5bd;background:silver text-center">
   <div  class="">-->


   <div class="container-fluid"><br/>

   <center>
<h1 style="text-align:center;background-color:maroon; text-color:gold;width:988px;color:gold;"><i>Manage Question Paper</i></h1>
</center>   


    <div class="row"><h1 class="mt-4" style="text-align:center;"></h1></div>
    <div class="row" >
        <div class="col-sm-2"></div>
        <div class="col-sm-8" style="background-color:gray";>
        <form action="savequestion.php" method="post" enctype="multipart/form-data">
<div class="modal-body"  style="font-size:18px;border:2px solid  #adb5bd;background:silver text-center">
   <div  class="">



 
   <script>
       function managePopup(){
            	var enq_box=document.getElementById("enq_box");
            	var status=enq_box.style.display;
            	//alert(status);
            	if(status=="none")
            		{
            		enq_box.style.display="block";
            		
            		}else{
            			enq_box.style.display="none";
            		}
              }
            </script>
            

    
            <select name="subject">
         <?php
   $sql='select sub_id,subject_name from tblsubject';
    $data=mysqli_query($con,$sql);
    ?>
       <option>Select subject...</option>
   <?php while($row=mysqli_fetch_array($data)){

   ?>
       <option value="<?php echo $row['sub_id'];?>"><?php echo $row['subject_name'];?></option>
     
        <?php } ?> 
     </select>
          


            <div class="text-right">
            <br/><input type="button" class=" btn btn-success" value="+" onclick="managePopup()"></div>
            </div><br></br>

            
            <div class="row" id="enq_box" style="display:none;  background: #f8f9fa; margin:;">
          <br/>  
          <div class="col-sm-12 form-group">
          <label>Topic_id</label>
            <select name="topic_id">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
            
            </div>
            <div class="col-sm-12 form-group">
           <input type="file" name="fileupload"/> 
           </div>
            <div class="col-sm-12 form-group">
            <label>Question</label>
            <textarea  rows="" cols="" name="question" class="form-control">
            </textarea>
            </div>
            <div class="col-sm-12 form-group">
            <label> option A</label>
            <input type="text" name="A" class="form-control"/>
            </div>
            <div class="col-sm-12 form-group">
            <label> option B</label>
            <input type="text" name="B"  class="form-control"/>
            </div>
            <div class="col-sm-12 form-group">
            <label> option C</label>
            <input type="text" name="C"  class="form-control"/>
            </div>
           <div class="col-sm-12 form-group">
            <label>option D</label>
            <input type="text" name="D"  class="form-control"/>
            </div>
            <div class="col-sm-12 form-group">
            <label>Answer</label>
            <input type="radio" value="A" name="answer"/>A
             <input type="radio" value="B" name="answer"/>B
              <input type="radio" value="C" name="answer"/>C
              <input type="radio" value="D" name="answer"/>D
           
            </div>
            
            <div class="col-sm-12 form-group">
            <label>Level</label>
            <select name="level">
            <option>Select One</option>
              <option>Beginners</option>
              <option>Intermediate</option>
              <option>Advance</option>
            </select>

             </div>
            
          
           
           <div class="row">
              <div class="col-sm-12 text-center form-group" style="padding-top:10px;padding-bottom:10px;"><br>
            <button type="" class="form-control btn btn-secondary btn-block btn-lg" onclick="popup()">Submit</button>
             </div>
             </div>           
             </div> 
              </div>
              </div>
              </form>
              
<br><br>      
               <div class="col-sm-2"></div>
               <hr style="margin-top:40px;"/>
              <div class="row">             
             </div>
             <div class="col-sm-1"></div
            
            </div>
   </div>

</body>
</html> 