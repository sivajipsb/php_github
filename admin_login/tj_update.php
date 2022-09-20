<?php 
// php error_reporting (E_ALL ^ E_NOTICE);
require("User_Connection.php");
$id = $_GET['updateid'];
echo "$id";
$sql = "Select * from userinformation where id = $id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

    $name =$row['name'];
    $phone = $row['phone'];
    $email = $row['email'];
    $tech = $row['tech'];

if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $tech = $_POST['tech'];

    $sql = "update userinformation set id=$id, name= '$name', phone = '$phone', email = '$email', tech = '$tech'
     where id='$id'";
    
    $result = mysqli_query($conn,$sql);

    if($result){
        // echo "Updated Successfully !!!";
        // header("Location: display.php");
        header("location:adminhome.php");
    }
    else{
        die(mysqli_error($conn));
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
    <input type ="text" name="name" placeholder="Enter Name" required="true" value=<?php echo $name;?> />
    <br>
    <input type ="number" name="phone" placeholder="Enter Phone Number" required="true" value=<?php echo $phone;?> />
    <br>
    <input type ="email" name="email" placeholder="Enter Email" required="true" value=<?php echo $email;?> />
    <br>
    <input type ="text" name="tech" placeholder ="Enter tech stack" required="true"  value=<?php echo $tech;?>/>
    <br>
    <input type="submit" name="submit"/>
    </form>
<!-- <a href="admin_login.php">adminlogin</a> -->
</body>
</html>