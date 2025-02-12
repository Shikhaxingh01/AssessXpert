<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">File Name</th>
      <th scope="col">File Size</th>
      <th scope="col">File Type</th>
      <th scope="col">Date Time</th>
      <th scope="col">View</th>
      
      
    </tr>
  </thead>
  <tbody>
<?php
$query="select * from tbl_uploads";
$result=mysqli_query($query,$conn);
while($row=mysqli_fetch_assoc($result))
{
  ?>
  <tr>
  <td><?php echo $row['id']?></td>
  <td><?php echo $row['file_name']?></td>
  <td><?php echo $row['file_size']?></td>
  <td><?php echo $row['file_type']?></td>
  <td><?php echo $row['date_time']?></td>
 
  <td><a href="uploads/<?php echo $row['file_name']?>" target="_blank">View File</a></td>
  </tr>
  <?php
  
}


?>
</tbody>
</table>