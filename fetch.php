<?php
include_once 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div id="header">

</div>
<div id="body">

    <?php
 $sql="SELECT * FROM student";
 $result_set=mysqli_query($conn, $sql);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row['Name'] ?></td>
        <td><?php echo $row['Age'] ?></td>
        <td><?php echo $row['Branch'] ?></td>
        <td><?php echo $row['Year'];?></td>
        <td><?php echo $row['Semester']?></td>
        <td><?php echo $row['Previous Sem']?></td>
        
        </tr>
        <?php
 }
 ?>
    
</div>
</body>
</html>