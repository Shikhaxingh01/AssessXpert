<?php
        include('common/link.php');
        ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

  </head>
<body>
<div class="container-fluid" style="  margin:0px; padding:0px;">
    <div  class="row" style=" margin:0px; padding:0px;">
    <div class="col-sm-12 btn btn-success">


        <div class="row" style="margin:0px; padding:0px;">
           <div  class="col-sm-3">
              <span class="text-white"><i class="fa fa-user-circle fa-3x"  style="margin-top:10px;" aria-hidden="true"></i></span>
              <span style="font-size:20px; margin-left:20px;">Name<br>Enrollment No.</span>
           </div>
           <div  class="col-sm-7"><h3 class="panel-heading panel-primary" style="margin-top:5px;">Govt. Girls Polytechnic Amethi</h3>
              <h4><u>Online Test on Web Development Using PHP</u></h4>
           </div>
           <div  class="col-sm-2">
              <h3 class="panel-heading panel-primary" style="margin-top:5px;">Branch</h3>
              <h3>Semester</h3> 
           </div>
        </div>
    </div>
    </div>



    <div class="row" style="width:100% ; margin:0px; padding:0px;">
        <div class="col-sm-3" style="margin:0px; padding:0px; "> 

        <ul class="nav nav-tabs nav-justified nav-pills">
                     <li class="nav-item active">
                       <a class="nav-link active " data-toggle="tab" href="#tab1">Section-1</a>
                     </li>

                     
                     <!--   this section commented beacuse tis time no use of this section but in future,
                     we can use this section 


                     <li class="nav-item">
                       <a class="nav-link" data-toggle="tab"  href="#tab2" >Section-2</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab"  href="#tab3">Section-3</a>
                     </li>
                    -->
        </ul>
            <div class="tab-content">
                <div class="tab-pane container active" id="tab1">

                <ul class="nav nav-tabs nav-justified nav-pills active">  
                <?php
                $x=25;
                for($x=1; $x<=25; $x++){
                    ?>
                     <li class="nav-item">
                        <a class="nav-link " data-toggle="tab"><?= $x ?></a>
                     </li>
                    <?php
                }
                ?> 
               
            </ul>
        </div>
        <!--
        <div class="tab-pane container" id="tab2">
                <ul class="nav nav-tabs nav-justified nav-pills">   
                <?php
                $y=25;
                for($y=1; $y<=25; $y++){
                    ?>
                     <li class="nav-item">
                        <a class="nav-link " data-toggle="tab"><?= $y ?></a>
                     </li>
                    <?php
                }
                ?> 
               
            </ul>

    
                </div>
                <div class="tab-pane container" id="tab3">
                <ul class="nav nav-tabs nav-justified nav-pills">   
                <?php
                $z=25;
                for($z=1; $z<=25; $z++){
                    ?>
                     <li class="nav-item">
                        <a class="nav-link " data-toggle="tab"><?= $z ?></a>
                     </li>
                    <?php
                }
                ?> 
               
            </ul>
            </div>
            -->  
            </div>
           
     
    

    <div class="row" style="margin:0px; padding:0px;">
        <div class="col-sm-12" style="margin-top:50px; margin-left:10px;">
           <h3><u>Instructions:-</u></h3>
           <span class="text-success" style="margin-left:10px;"><i class="fa fa-circle fa-3x" aria-hidden="true"></i></span>
           <span style="font-size:25px;color:green;">Visited</span><br>
           <span class="text-secondary" style="margin-left:10px;"><i class="fa fa-circle fa-3x" aria-hidden="true"></i></span>
           <span style="font-size:25px;color:gray;">No-Visited</span><br>
           <span class="text-warning" style="margin-left:10px;"><i class="fa fa-circle fa-3x" aria-hidden="true"></i></span>
           <span style="font-size:25px;color:yellow;">Not-Attempted</span>
        </div>
    </div>
</div>   
       

 <div class="col-sm-9"  style="width:100%">

    <div class="row" style="margin:0px; padding:0px;">
         <div class="col-sm-10" style="">
         <span id="current_que" style="float:left; font-size:20px;">0</span>
           <span  style="float:left; font-size:20px;">/</span> 
           <span id="total_que" style="float:left; font-size:20px;">0</span>
         </div>
         <div class="col-sm-2 btn btn-warning" style="align:center; font-size:30px; margin-top:10px;" id="countdowntimer"> 
        </div>
         <hr style="border:1px solid gray; width:100%;"> 
    </div>
   
    <div class="row" style="margin:0px; padding:0px;">
       <div class="col-sm-12"  style="margin:0px; padding:0px;">
       <form action="" method="">
        
        <div class="row"  style="margin:0px; padding:0px;"> 
            <div class="col-sm-7"  style="margin:0px; padding:0px;" id="load_questions">

        
            </div>
            <div class="col-sm-5"  style="margin:0px; padding:0px;" >
            <img src="../content/images/coading.PNG" style="width:100%; margin:0px; padding:0px;">
            </div>
        </div>
         <br>
         
        
    </div></form>
    </div>


    <div class="row" style="margin:0px; padding:0px;">
       <div class="col-sm-12 text-center form-group" style="margin-top:50px;">
        <input type="button" style="height: 40px; width:120px; background: green; float:left; margin-left:15px; color:white; " value="Previous" onclick="load_previous();"/>
        <input type="button" style="height: 40px; width:120px; background: green; float:right; color:white;  "value="Next" onclick="load_next();"/>
       
       </div>
    </div>
 </div>
</div>
</div>
</body>
</html>

<!-- timer code-->
<script type="text/javascript">
                setInterval(function(){
                   console.log("started");
                    timer();
                    
                }, 1000);
 
 function timer(){
     var x=new XMLHttpRequest();
     x.onreadystatechange=function(){
         if(x.readyState==4 && x.status==200){
             if(x.responseText=="00:00:01"){
                 window.location="result.php";
             }
             document.getElementById("countdowntimer").innerHTML=x.responseText;
             }
     };
    x.open("GET","forajax/load_timer.php",true);
    x.send();
 }
</script>
<!-- end timer-->

<script type="text/javascript">
    function load_total_que(){
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function(){
            if(xmlhttp.readyState==4 && xmlhttp.status==200){
               document.getElementById("total_que").innerHTML=xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "forajax/load_total_que.php", true);
        xmlhttp.send(null);
    }
    var questionno="1";
    load_questions(questionno);
    function load_questions(questionno){
        document.getElementById("current_que").innerHTML=questionno;
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function(){
            if(xmlhttp.readyState==4 && xmlhttp.status==200){
                if(xmlhttp.responseText=="over")
                {
                    window.location="result.php";
                }
                else{
                    document.getElementById("load_questions").innerHTML=xmlhttp.responseText;
                    load_total_que();
                }
            }
        };
        xmlhttp.open("GET", "forajax/load_questions.php?questionno="+questionno, true);
        xmlhttp.send(null);
    }

  function radioclick(radiovalue,questionno){


    var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function(){
            if(xmlhttp.readyState==4 && xmlhttp.status==200){
              
            }
        };
        xmlhttp.open("GET", "forajax/save_answer_in_session.php?questionno="+questionno+" $value1="+radiovalue, true);
        xmlhttp.send(null);

  }
    function load_previous(){
       if(questionno=="1"){
           load_questions(questionno);
       }
       else{
           questionno=eval(questionno)-1;
           load_questions(questionno);
       }
    }
    function load_next(){
      
           questionno=eval(questionno)+1;
           load_questions(questionno);
       
    }

</script>