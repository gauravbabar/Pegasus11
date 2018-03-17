<?php

$servername  = "localhost";
$username= "root";
$password = "";
$database = "faculty_details";

$conn = new mysqli($servername,$username,$password,$database);
if($conn->connect_error)
    echo "error in connection";


?>