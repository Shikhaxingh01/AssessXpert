<?php
include "connection.php";
    //Get the file name from request
    $fileName = $_GET['fileName'];
    $id= $_GET['id'];
    //echo "$id";
     // Get the file for corresponding name from pending folder
    $pendingfolder="uploads/pending/";
    $processedfolder="uploads/processed/";
    $fileExtension=explode(".",$fileName);
    
    if($fileExtension[1]=="csv"){
         
        
         //read the file line by line and insert the record in table
       echo  "befor";
       $handel=fopen($pendingfolder.$fileName,"r");
       echo  "after";

        while($data=fgetcsv($handel)){
            $item1=mysqli_real_escape_string($conn,$data[0]);
            $item2=mysqli_real_escape_string($conn,$data[1]);
            $item3=mysqli_real_escape_string($conn,$data[2]);
            $item4=mysqli_real_escape_string($conn,$data[3]);
            $item5=mysqli_real_escape_string($conn,$data[4]);

            $query="insert into students(enrollment,name,email,branch,semester) values('$item1','$item2','$item3','$item4','$item5')";
            mysqli_query($conn,$query);
            
            $pass=password_hash($item1,PASSWORD_BCRYPT);
            //echo $pass;

            $query="insert into tbl_login(email,password,status,account_type) values('$item3','$pass','created','student')";
            mysqli_query($conn,$query);
           

            
        }
        fclose($handel);
        ?>
        <script>
            alert("imported Sucessfully");
        </script>
        <?php

        //echo "imported Sucessfully";
        
    include "common/link.php";
    
    ?>
     <h1 align="center">Students Details</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Entrollment No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Branch</th>
      <th scope="col">Semester</th>
     </tr>
  </thead>
  <tbody>
<?php
$query="select * from students";
$result=mysqli_query($conn,$query);
$total=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result))
{
  ?>
  <tr>
  <td><?php echo $row['enrollment'];?></td>
  <td><?php echo $row['name'];?></td>
  <td><?php echo $row['email'];?></td>
  <td><?php echo $row['branch'];?></td>
  <td><?php echo $row['semester'];?></td>
  
  
  
 
  
  </tr>
  <?php
  
}


?>
</tbody>
</table>
<?php
        
            //echo $data[0];
    }
    else{
        echo "Does not uploaded";
    }
    // Move the file from pending folder to processed folder    
    rename( $pendingfolder.$fileName ,$processedfolder.$fileName);
    // Update the status in tbl_uploads table from pending to processed
    
        $query="update tbl_uploads set status='processed' where id=$id";
        $result=mysqli_query($conn,$query);
        if($result){
            echo "updated sucessfully";

        }
        else{
            echo "NOt updated sucessfully";
        }
    

    

    


    //

 

?>