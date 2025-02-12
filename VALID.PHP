<?php


require_once "config.php";



$login=false;
$showerror=false;

if($_SERVER["REQUEST_METHOD"]=="POST"){
  

    $username=$_POST["emai"];

   
    $password=$_POST["pass"];
  
    $user=$_POST["user"];
  


    $sql="Select * from tbl_login Where  email='$username' AND password='$password' AND account_type='$user'";


    $result=mysqli_query($db,$sql);
   
   
    
    $num=mysqli_num_rows($result);
   
   
 
    if($num==1){
        $login=true;
        session_start();
        $_SESSION["account_type"]=$user;
        $_SESSION["email"]=$username;
       



        if($_SESSION["account_type"]=="admin"){
            header("location:Admin Zone/admindashbord.php");


        }
        else if($_SESSION["account_type"]=="faculty"){
            header("location:Faculty_Zone/facultydashboard.php");

        }else{

            header("location:Student_Zone/studentdashbord.php");
        }
       
    }
    else{

        
        header("Location:login.php?error=Incorrect username or Password .");
    }






}











?>