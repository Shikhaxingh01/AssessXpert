<style>
#brandname
{
  text-align:center;
  font-size:45px;
   margin-top:35px;
   color:blue;
}


.enq{
    transform:rotate(90deg);
    z-index:999;
    float:left;
    margin-left:-20px;
    top:350px;
    position:fixed;
}
.nav-link{
		
			width: 90px;
			display: block;
      text-decoration: none;
	    color:black;
      font-weight: bold;
      font-size:20px;
           
           
        
		}
   
</style>
<!--	<style>
		
		
		
		#menu{

		    height:60px;
		    background:#32b6b5;
		    padding-right: 60px;
		    padding-left: 60px;   
		}
		#box{
            height: 55px;
           
		}
		.boxItem{
			height:60px;
			width: 140px;
			display: block;
			float: left;
			color: white;
            font-weight: bold;
            text-decoration: none;
            text-align: center;
            padding-top: 17px;
		}
    .enq{
    transform:rotate(90deg);
    z-index:999;
    float:left;
    margin-left:-20px;
    top:350px;
    position:fixed;
}
		.boxItem:hover{
			background-color:#6e6e6e;
			border-radius: 8px; 
		}
	</style>
  -->






<div class="row navbar-expand-sm navbar-light bg-light " style="margin:0px; padding:0px; width:100%;" >
 
 <div class="col-sm-2">
   <center>
 <img src="content/images/logoquiz.png" alt="" style="">
  </center>
 </div>
 <div class="col-sm-7" style="" >
  <h1 id="brandname" style="font-size:50px;">Online Examination System</h1>
  </div>
  <div class="col-sm-3">
    
  <nav class="navbar  bg-lightnavbar-expand-lg navbar-light" style="">
  <a class="navbar-brand" href="#" ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> 

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
         <a class="nav-link" href="contact.php">Contact</a>
      </li>
      
       <li class="nav-item">
         <a class="nav-link" href="about.php">About</a>
      </li>
    </ul>
   
  </div>
</nav>
  </div>

</div>
<!-- nav start  
<nav class="navbar navbar-expand-lg navbar-light green" style=" background:#32b6b5;">
  <a class="navbar-brand" href="#" ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> 

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="boxItem" href="index.php" style="color:white">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
         <a class="boxItem" href="contact.php" style="color:white">Contact</a>
      </li>
      <li class="nav-item">
        <a class="boxItem" href="login.php" style="color:white">Login</a>
      </li>
    </ul>
   
  </div>
</nav>
   nav end-->

<!--	<div class="row"  style="margin:0px; padding:0px;">
    <div class="col-sm-12">
   	<div id="menu">
	   <div id="box">
	   	<a href="index.php" class="boxItem">Home </a> 
	   	<a href="registration.php" class="boxItem">Registration</a>
	   	<a href="login.php" class="boxItem">Login</a>
  </div>
	   </div>
    </div>
  </div>
  -->
            <!-- Enquiery Start -->
            
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary enq" data-toggle="modal" data-target="#exampleModal">
  Enquiry
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="color:#9a4421;">Fill up form for Enquiry </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="saveEnq.php" method="post">
           <div class="row">
             <div class="col-sm-6 form-group">
                <lable>Name</lable>
                <input type="text" name="name" placeholder="Enter name here.." class="form-control">
             </div>
            
             <div class="col-sm-6 form-group">
                <lable>Mobile</lable>
                <input type="number" name="mobno" placeholder="Enter Contact number here.." class="form-control">
             </div>
             
             <div class="col-sm-6 form-group">
                <lable>Email</lable>
                <input type="email" name="email" placeholder="xyz@example.com" class="form-control">
             </div>
             
             <div class="col-sm-6 form-group">
                <lable>Topic</lable>
                <input type="text" name="topic" placeholder="Enter Enquiry topic.." class="form-control">
             </div>
             
             <div class="col-sm-12 form-group">
                <lable>Message</lable>
                <textarea type="text" name="message" placeholder="Enter Enquiry topic.." class="form-control"></textarea>
             </div>
             <div class="col-sm-6" style="padding-top:10px; padding-bottom:10px;">
                <button type="submit" class="btn btn-success btn-block">Enquiry</button>
             </div>
             <div class="col-sm-6" style="padding-top:10px; padding-bottom:10px;">
                <button type="reset" class="btn btn-primary btn-block">Close All</button>
             </div>
             
           </div>
        
        </form>
      </div>
     
    </div>
  </div>
</div>  

            
               <!-- Enquiery End -->
         

















