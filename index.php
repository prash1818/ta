<?php require_once("connect.php");
include("header.php"); 


?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Details</title>
<link rel="stylesheet" type="text/css" href="link.css">

</head>


<body>

<div class="container">
<form action="submit.php" method="post" enctype="multipart/form-data">

<div >
	<label style="margin-left: 500px;">Student Name:</label>
<input style = "margin-left: 20px;" type="text" name="Name" required>

<div>
	<label style="margin-left: 500px;">Age:</label>
<input style = "margin-left: 85px; margin-top: 10px;" type="integer" name="Age" required>
</div>

<div>
	<label style="margin-left: 500px;" >Branch:</label>
<input  style="margin-left: 65px;margin-top: 10px;"    type="text" name="Branch" required>
</div>

<div>
	<label style="margin-left: 500px;" >Year:</label>
<input  style = "margin-left: 82px; margin-top: 10px;" type="integer" name="Year" required>
</div>

<div>
	<label style="margin-left: 500px;">Semester:</label>
<input style="margin-left: 52px; margin-top: 10px;" type="integer" name="Semester" required>
</div>

<div>
	<label style="margin-left: 500px;">Prev. Sem Score</label>
<input style = "margin-top: 10px; margin-left: 10px;" type="float" name="Previous_sem" required>
</div>

<button  style = "margin-left: 600px; margin-top: 20px;" onclick="action.php">Submit</button>	

</form>
</div>
</body>
</html>