<?php
$host="localhost";
$user= "root";
$password="";
$db="Student_Management_System";

$conn= mysqli_connect($host, $user, $password, $db);
if($conn){
    echo "Database connected successfully";
}
else{
    echo "Connection failed";
}
mysqli_close($conn);