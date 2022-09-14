<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
    <input type ="text" name="name" placeholder="Enter Name" required="true"  />
    <br>
    <input type ="number" name="phone" placeholder="Enter Phone Number" required="true"  />
    <br>
    <input type ="email" name="email" placeholder="Enter Email" required="true"  />
    <br>
    <input type ="text" name="tech" placeholder ="Enter tech stack" required="true"  />
    <br>
    <input type="submit"/>
    </form>
<!-- <a href="admin_login.php">adminlogin</a> -->
</body>
</html>
<?php 
// error_reporting (E_ALL ^ E_NOTICE);
$conn = new mysqli("localhost","root","","adminlogin");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else{
      echo "Connected Succesfully";
  }
$id=$_GET["updateid"];

// $sql="select * from userinfromation where id=$id";
// $result=mysqli_query($conn,$sql);
// $row=mysqli_fetch_assoc($result);
// $name=$row["name"];
// $phone=$row["phone"];
// $email=$row["email"];
// $tech=$row["tech"];
// $name=$row["name"];


if(isset($_POST["submit"])){


$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$tech=$_POST["tech"];

// echo $name."    ".$phone."    ".$email."    ".$tech;


//connecting with database




//   $sql = "INSERT INTO userinformation(name,phone,email,tech) VALUES ('".$name."','".$phone."','".$email."','".$tech."')";
  $sql = "update  userinformation set id =$id,name='$name',phone='$phone',email='$email',tech='$tech'";
//   $conn->query($sql);
$result=mysqli_query($conn,$sql);
if($result)
{
    echo "updatedted sucessfully";
    // header("location:adminhome.php");
}
else{
   
        die(mysqli_error($conn));
     
}


}
?>








