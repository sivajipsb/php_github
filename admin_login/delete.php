<?php 
// error_reporting (E_ALL ^ E_NOTICE);
$conn= new mysqli("localhost","root","","adminlogin");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else{
    //   echo "Connected Succesfully";
  }
  $id=$_GET["deleteid"];
  echo $id;
if(isset($_GET["deleteid"]))
{
    $id=$_GET["deleteid"];
    $sql="delete from `userinformation` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        // echo "deleted sucessfully";
        header("location:adminhome.php");
    }
    else{
       
            die(mysqli_error($conn));
         
    }
}


?>