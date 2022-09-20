<?php


$conn= new mysqli("localhost","root","","adminlogin");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else{
    //   echo "Connected Succesfully";
  }
?>