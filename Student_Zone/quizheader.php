<?php 

include 'common/link.php';?>
<html>
<div class="row" style="background-color:blue;">
    <div class="col-sm-10"></div>
<div id="countdowntimer" class="col-sm-2" style="background-color:pink;color:white;min-height:50px;display:block;"></div>
</div>
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
</html>