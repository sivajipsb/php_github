<?php 

$conn = new mysqli("localhost","root","","grid");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else{
      // echo "Connected Succesfully";
  }
?>