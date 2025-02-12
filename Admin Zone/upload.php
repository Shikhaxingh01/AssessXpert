<?php
include "connection.php";
error_reporting(0);
include "common/link.php";

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
<?php
if(isset($_POST['submit'])){
  //var_dump($_FILES);
    echo "<br><br>";
    $file=$_FILES['file']['name'];
    $file_loc=$_FILES['file']['tmp_name'];
    $file_size=$_FILES['file']['size'];
    $file_type =$_FILES['file']['type'];
    $fileExtension=explode(".",$file);
    if($fileExtension[1]=="csv"){
        $folder="uploads/pending/";
        move_uploaded_file($file_loc,$folder.$file);
        $status='pending';
        $query="insert into tbl_uploads (file_name,file_size,file_type,status) values('$file','$file_size','$file_type','$status')";
        $data=mysqli_query($conn,$query);
          if($data){
          ?>
          <script>alert("upload Sucessfully");
           window.location.href="status.php";
          </script>
   
           <?php
          }
    }
   else{
       ?>
      <script>alert("this file format does not support,please choose another file");
        window.location.href="status.php";
       </script>

        <?php
   } 


}
    ?>
    
</body>
</html>


