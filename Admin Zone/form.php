<?php

include "connection.php";
if(isset($_POST["issubmit"]))
{
   if($_FILES['file']['name']){
         $filename=explode(".",$_FILES['file']['name']);
         if($filename[1]=="csv"){
             $handel=fopen($_FILES['file']['tmp_name'],"r");
             while($data=fgetcsv($handel)){
                 $item1=mysqli_real_escape_string($conn,$data[0]);
                 $item2=mysqli_real_escape_string($conn,$data[1]);
                 $item3=mysqli_real_escape_string($conn,$data[2]);
                 $item4=mysqli_real_escape_string($conn,$data[3]);
                 $item5=mysqli_real_escape_string($conn,$data[4]);

                 $query="insert into csvnew(name,gender,email,mobno,address) values('$item1','$item2','$item3','$item4','$item5')";
                 mysqli_query($conn,$query);
             }
             fclose($handel);
             ?>
             <script>
                 alert("imported Successfully");
                 
             </script>
             <?php
         }

   }
}



?>


<!DOCTYPE html>
<html>
<head>
    </head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
        <div align="center">
            <p>Upload CSV File<input type="file" name="file"></p>
            <p><input type="submit" name="issubmit" value="import"</p>
        </div>

    </form>
</body>
</html>