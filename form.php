<?php
//var_dump($_POST);

include "db.php";

if($_SERVER['REQUEST_METHOD']=="POST"){
$firstname=$_POST['fname']; 
$lastname=$_POST['lname']; 
$birthdate=$_POST['dob']; 

$conn->query("INSERT INTO students values(NULL,'$firstname','$lastname','$birthdate')");
echo"New student registered";
}
//echo "hello" ,$firstname,$lastname;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="post">
    <center>
        <h1>Register new student</h1>
        <label for="">firstname</label>
        <br>
        <input name="fname" type="text"  placeholder="EX:annet">
        <br><br>
        <label for="">lastname</label>
        <br>
        <input name="lname" type="text" placeholder="EX:deborah">
        <br><br>
        <label for="">date of birth</label>
        <br>
        <input name="dob" type="Date">
        <br><br>
        <button>save</button>


        
        <a href="read.php">all students</a>
</center>
</form>
</body>
</html>