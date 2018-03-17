<?php
include("dbconn.php");

$first=$_POST['fname'];
$last=$_POST['lname'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$pwd=$_POST['psw'];
$sql = "INSERT INTO faculty (First,Last,Email,Contact,Password) VALUES (\"$first\",\"$last\",\"$email\",\"$contact\",\"$pwd\")";
$result= $conn->query($sql);
?>