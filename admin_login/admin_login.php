<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  action="#" method="post"> 
    <input type="text" name="username" placeholder="enter username"/>
    <br>
    <input type="password" name="password" placeholder="enter password"/>
    <br>
    <input type="submit"/>
    </form>
</body>
</html>


<?php  
error_reporting (E_ALL ^ E_NOTICE);

  
$conn= new mysqli("localhost","root","","adminlogin");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else{
    //   echo "Connected Succesfully";
  }
//  if($_SERVER["REQUEST_METHOD"]=="POST")
//  {
//     $username = $_POST["username"];
//     $password = $_POST["password"];
//     // $sql = "select * from adminuser";
//     $stmt=$conn->prepare("SELECT * FROM adminuser");
//     $stmt->execute();
//     $stmt = $stmt->get_result();
//     $users = $stmt->fetch_all();

//  }

if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $username = $_POST["username"];
    $password= $_POST["password"];

    $sql= "select * from adminuser where username =  '".$username."' AND password='".$password."' ";

    $result= mysqli_query($conn,$sql);

    $row=mysqli_fetch_array($result);

    // if($row["usertype"]=="user")
    // {
    //     $_SESSION["username"]=$username;
    //     // echo "user";
    //     header("location:userhome.php");
    // }
    if($row["username"]=="admin")
    {
        // $_SESSION["username"]=$username;
        // echo "admin";
        header("location:adminhome.php");
    }
    else{
        echo "username or password in correct";
        // header("location:adminhome.php");
    }
  }
?>