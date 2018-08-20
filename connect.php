<?php
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'tech';
mysql_connect( $db_host, $db_username, $db_password, $db_name) or die(mysql_error());

if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['Name'];
$age = $_POST['Age'];
$branch = $_POST['Branch'];
$year = $_POST['Year'];
$semester = $_POST['Semester'];
$Previous_sem = $_POST['Previous_sem'];

if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysql_query("Insert into student(Name,Age,Branch,Year,Semester,Previous_sem) values ('$name', '$age', '$branch', '$year', '$semester', '$Previous_sem')");


mysqli_query($conn,$query);

echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>
 