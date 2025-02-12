<?php 
include "connection.php";
error_reporting(0);
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
    <form method="post" action="upload.php" enctype="multipart/form-data">
        <div align="center">
            <h1>Admin Dashboard</h1>
            <p><input type="file" name="file"></p>
            <p><input type="submit" name="submit"style="background-color:green;" value="Upload"</p>
        </div>


    <?php
    include "common/link.php";
    
    ?>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">File Name</th>
      <th scope="col">File Size</th>
      <th scope="col">File Type</th>
      <th scope="col">Date Time</th>
      <th scope="col">Delete</th>
      <th scope="col">Process</th>
      
    </tr>
  </thead>
  <tbody>
<?php
$query="select * from tbl_uploads where status='pending' ";
$result=mysqli_query($conn,$query);
$total=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result))
{
  ?>
  <tr>
  <td><?php echo $row['id'];?></td>
  <td><?php echo $row['file_name'];?></td>
  <td><?php echo $row['file_size'];?></td>
  <td><?php echo $row['file_type'];?></td>
  <td><?php echo $row['date_time'];?></td>
  <td><a href="del.php?id=<?php echo $row['id'];?>&fileName=<?=$row['file_name']?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
  
  <td><a href="process.php?fileName=<?=$row['file_name']?>&id=<?=$row['id']?>"><button  type="button" class="btn btn-success" >Process</button></a></td>
 
  
  </tr>
  <?php
  
}


?>
</tbody>
</table>
</form>
    
    
</body>
</html>
