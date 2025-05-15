<?php
include "db.php";
$data=$conn->query("SELECT * from students ");



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <center>
    
   <h1>all students</h1>
   
    
   <table border="1">
    <thead>
        <tr>
           
        <th>#</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>date of birth</th>
</tr>
</thead>
<tbody>
      <?php
       while($row= $data->fetch_object()){
      ?>
      <tr>
        <td><?php echo $row->id ?></td>
        <td><?php echo $row->firstname ?></td>
        <td><?php echo $row->lastname ?></td>
        <td><?php echo $row->DOB ?></td>
       </tr>
       <?php
       }
       ?>
</tbody>
    </table>
</center>
</body>
</html>