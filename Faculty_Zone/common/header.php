
<?php
//Start the session 
session_start();
//check if user is not logged in , then redirect the user to login page 
if(!isset($_SESSION["email"]) && $_SESSION["password"]!==true && $_SESSION["account_type"] !==true)
{
    header("location:../login.php");
    exit;
}
?>

<!--<style>
body{margin-top:20px;
 color: #bcd0f7;
     background: #1A233A;
 }
 .account-settings .user-profile {
     margin: 0 0 1rem 0;
     padding-bottom: 1rem;
     text-align: center;
 }
 .account-settings .user-profile .user-avatar {
     margin: 0 0 1rem 0;
 }
 .account-settings .user-profile .user-avatar img {
     width: 90px;
     height: 90px;
     -webkit-border-radius: 100px;
     -moz-border-radius: 100px;
     border-radius: 100px;
 }
 .account-settings .user-profile h5.user-name {
     margin: 0 0 0.5rem 0;
 }
 .account-settings .user-profile h6.user-email {
     margin: 0;
     font-size: 0.8rem;
     font-weight: 400;
 }
 .account-settings .about {
     margin: 1rem 0 0 0;
     font-size: 0.8rem;
     text-align: center;
 }
 .card {
     background: #272E48;
     -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
     border-radius: 5px;
     border: 0;
     margin-bottom: 1rem;
 }
 .form-control {
     border: 1px solid #596280;
     -webkit-border-radius: 2px;
     -moz-border-radius: 2px;
     border-radius: 2px;
     font-size: .825rem;
     background: #1A233A;
     color: #bcd0f7;
 }
</style>
*/

-->






















<!DOCTYPE html>
<html>
<head>
<style>

.box{
border:2px solid black;

background-color:#2f3e52;
padding-top: 40px;
padding-bottom: 40px;
font-weight: bold;
text-align: center;
font-size: 15px;
margin:10px;
width:30px;
border-radius: 10%;

/*border-radius: 9% 0% 9% 8%;*/

}
.box2{
    background:green;
    border:2px solid black;

padding-top: 40px;
padding-bottom: 40px;
font-weight: bold;
text-align: center;
font-size: 15px;
margin:10px;
width:30px;
border-radius: 10%;
}

.box3{
    background:teal;
    border:2px solid black;

padding-top: 40px;
padding-bottom: 40px;
font-weight: bold;
text-align: center;
font-size: 15px;
margin:10px;
width:30px;
border-radius: 10%;
}

.box4{
    background:#eab676;
    border:2px solid black;

padding-top: 40px;
padding-bottom: 40px;
font-weight: bold;
text-align: center;
font-size: 15px;
text-color:white;
margin:10px;
width:30px;
border-radius: 10%;
}

.box5{
    background:gray;
    border:2px solid black;

padding-top: 40px;
padding-bottom: 40px;
font-weight: bold;
text-align: center;
font-size: 15px;
margin:10px;
width:30px;
border-radius: 10%;
}
.box6{
    background:blue;
    border:2px solid black;

padding-top: 40px;
padding-bottom: 40px;
font-weight: bold;
text-align: center;
font-size: 15px;
margin:10px;
width:30px;
border-radius: 10%;
}


.row
{
display:flex;
flex-wrap: none;
}
.link{
text-decoration: none;
color:white;

}
.link:hover
{
color:black;
}</style>





<meta charset="ISO-8859-1">
<title>Faculty Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="../content/script/scripts.js"></script>
<link href="../content/style/styles.css" rel="styLesheet"/>
</head>
<body>
   <div class="d-flex" id="wrapper">
      <!-- Sidebar-->
      <div class="border-end bg-white" id="sidebar-wrapper" >


      


     <div class="sidebar-heading border-bottom bg-light" >
     <i class="fa fa-tachometer fa-2x"></i>
      Faculty Dashboard</div>
     <div class="list-group list-group-flush" style="background:gray;">
               <!-- <a class="list-group-item list-group-item-action list-group-item-light p-3" href="adminDashboard.jsp">Dashbord</a>-->
                <a aria-hidden="true" class="list-group-item list-group-item-action   list-group-item-light p-3" href="" style="font: size 18px;"> <i class="fa fa-users fa-2x" aria-hidden="true"></i>
                &nbsp;<b>Student Management</b></a>
                
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="" style="font: size 18px;"><i class="fa fa-user-plus fa-2x" aria-hidden="true"></i>

               &nbsp;&nbsp;<b>Faculty Management</b></a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="status.php" style="font: size 18px;"><i class="fa fa-upload fa-2x" aria-hidden="true"></i>
                &nbsp;&nbsp;&nbsp;<b>Manage upload</b></a>
                 <a class="list-group-item list-group-item-action list-group-item-light p-3" href=""style="font: size 18px;"><i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>
                 &nbsp;&nbsp;&nbsp;<b>User Registration</b></a>
               
             
              <a class="list-group-item list-group-item-action list-group-item-light p-3"  href="../common/logout.php" style="font-size:18px;"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;Logout</a>
                 
                </div>
            </div>
            <!-- Page content wrapper-->


            
            <div id="page-content-wrapper" style="bg-color:blue;">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-gray bg-light border-bottom" style="width:100%; margin:0px;padding:0px;">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle" > >>Toggle Menu</button><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome To Faculty Panel</h3>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                               
                                <li class="nav-item dropdown">
                                
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-user-circle fa-2x" aria-hidden="true"  class="link" style="color:black;"></i><b>Faculty</b>
                                   
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href=""><i class="fa fa-user" aria-hidden="true"></i>
&nbsp;Profile</a>
                                        <div class="dropdown-divider"></div>

                                        <a class="dropdown-item" href=""><i class="fa fa-cog" aria-hidden="true"></i>
&nbsp;Setting</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="../common/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>
&nbsp;Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
           </nav>
           </body>
</html>
