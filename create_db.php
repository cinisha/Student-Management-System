<?php
$sql1 ="CREATE DATABASE IF NOT EXISTS Teacher";
if($conn->query($sql1)){
    echo "Database BCA Created Successfully";
}else{
    echo "Error creating database:" . $conn->error;
}