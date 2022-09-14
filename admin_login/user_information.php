<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="margin:center">
    <form action="#" method="post">
    <input type ="text" name="name" placeholder="Enter Name" required="true" value=""/>
    <br>
    <input type ="number" name="phone" placeholder="Enter Phone Number" required="true" value=""/>
    <br>
    <input type ="email" name="email" placeholder="Enter Email" required="true" value="" />
    <br>
    <input type ="text" name="tech" placeholder ="Enter Tech Stack" required="true" value="" />
    <br>
    <input type="submit"/>
    </form>
<a href="admin_login.php"  style="color:red; text-decoration: none;">AdminLogin? ClickHere  </a>
</body>
</html>

<?php 
error_reporting (E_ALL ^ E_NOTICE);
$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$tech=$_POST["tech"];

// echo $name."    ".$phone."    ".$email."    ".$tech;


//connecting with database

$conn = new mysqli("localhost","root","","adminlogin");
if ($conn->connect_error) {
    // die("Connection failed: " . $conn->connect_error);
  }
  else{
    //   echo "Connected Succesfully";
  }


  $sql = "INSERT INTO userinformation(name,phone,email,tech) VALUES ('".$name."','".$phone."','".$email."','".$tech."')";
//   $conn->query($sql);
  if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
  } else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
  }


?>