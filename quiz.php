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

    <script>
        
    jQuery(document).ready(function(){
  jQuery(function() {
        jQuery(this).bind("contextmenu", function(event) {
            event.preventDefault();
            
        });
    });
});
	//define your time in second
		var c=2400;
        var t;
        timedCount();

        function timedCount()
		{

        	var hours = parseInt( c / 3600 ) % 24;
        	var minutes = parseInt( c / 60 ) % 60;
        	var seconds = c % 60;

        	var result = (hours < 10 ?  hours : hours) + ":" + (minutes < 60 ?  minutes : minutes) + ":" + (seconds  < 10 ? seconds : seconds);

            
        	$('#timer').html(result);
            if(c == 0 )
			{
            	//setConfirmUnload(false);
                //$("#quiz_form").submit();
				window.location="quiz.php";
			}
            c = c - 1;
            t = setTimeout(function()
			{
			 timedCount()
			},
			1000);
        }
        
        
	</script>
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
         <div class="col-sm-10" style=""></div>
         <div class="col-sm-2 btn btn-warning" style="align:center; font-size:35px; margin-top:10px;" id="timer"></div>
         <hr style="border:1px solid gray; width:100%;"> 
    </div>
   
    <div class="row" style="margin:0px; padding:0px;">
       <div class="col-sm-12"  style="margin:0px; padding:0px;"><form action="" method="">
         <h1 style=" margin-left:15px;">Question :-</h1>
        <div class="row"  style="margin:0px; padding:0px;"> 
            <div class="col-sm-7"  style="margin:0px; padding:0px;">

            jasdhflisnyflovyub liuny cowfiyco lwf liu;no cniyrfls linryc;osiour ibicubrylorycwrouc;np lirb y;owyvlor lijrn ;ciwr
            </div>
            <div class="col-sm-5"  style="margin:0px; padding:0px;">
            <img src="content/images/coading.PNG" style="width:100%; margin:0px; padding:0px;">
            </div>
        </div>
         <br>
         
         <span  style="font-size:21px; margin-left:20px;"><input type="radio" value="A" name="">&nbsp;Answer1</span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
         <span  style="font-size:21px; margin-left:20px;"><input type="radio" value="B" name="">&nbsp;Answer2</span><br><br>    
         <span  style="font-size:21px; margin-left:20px;"><input type="radio" value="C" name="">&nbsp;Answer3</span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
         <span  style="font-size:21px; margin-left:20px;"><input type="radio" value="D" name="">&nbsp;Answer4</span>
    </div></form>
    </div>


    <div class="row" style="margin:0px; padding:0px;">
       <div class="col-sm-12 text-center form-group" style="margin-top:50px;">
        <button type="submit" style="height: 40px; width:120px; background: green; float:left; margin-left:15px; color:white;">Privous</button>
        <button type="submit" style="height: 40px; width:120px; background: green; float:right; color:white;">Next</button>
       
       </div>
    </div>
 </div>
</div>
</div>
</body>
</html>