
<?php 
error_reporting (E_ALL ^ E_NOTICE);
$conn = new mysqli("localhost","root","","adminlogin");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else{
    //   echo "Connected Succesfully";
  }
$id=$_GET["updateid"];
echo $id;
echo "<br>";

$sql="select * from userinformation where id=$id";

$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);

$names=$row['name'];
$phones=$row["phone"];
$emails=$row["email"];
$techs=$row["tech"];



if(isset($_POST["submit"])){


$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$tech=$_POST["tech"];

// echo $name."    ".$phone."    ".$email."    ".$tech;


//connecting with database




//   $sql = "INSERT INTO userinformation(name,phone,email,tech) VALUES ('".$name."','".$phone."','".$email."','".$tech."')";
  $sql = "update  userinformation set id =$id,name='$name',phone='$phone',email='$email',tech='$tech'where id=$id";
//   $conn->query($sql);
$result=mysqli_query($conn,$sql);
if($result)
{
    // echo "updatedted sucessfully";
    header("location:adminhome.php");
}
else{
   
        // die(mysqli_error($conn));
     
}

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
    <input type ="text" name="name" placeholder="Enter Name" required="true" value=<?php echo $names;?> />
    <br>
    <input type ="number" name="phone" placeholder="Enter Phone Number" required="true" value=<?php echo $phones;?> />
    <br>
    <input type ="email" name="email" placeholder="Enter Email" required="true" value=<?php echo $emails;?> />
    <br>
    <input type ="text" name="tech" placeholder ="Enter tech stack" required="true"  value=<?php echo $techs;?>/>
    <br>
    <input type="submit" name="submit"/>
    </form>
<!-- <a href="admin_login.php">adminlogin</a> -->
</body>
</html>









