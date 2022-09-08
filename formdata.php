<!DOCTYPE html>
<html lang="en">

<body>
    <form action="formdata" method="get">
        <input type="text" name="fname" placeholder="Enter First Name"/>
        <br>
        <br>
        <input type ="text" name="lname" placeholder="Enter last Name"/>
        <br>
        <br>
        <input type="date" name="dob" placeholder="Enter Date of birth"/>
        <br>
        <br>
        <input type="email" name="email" placeholder="Enter Email"/>
        <br>
        <br>
        <input type="submit"/>
</form>
<hr>
<?php  
error_reporting (E_ALL ^ E_NOTICE);

$conn=new mysqli("localhost","root","","first") or die("unable to connect");
if($conn)
{
    echo "connected sucessfulyy";
    echo "<br>";
}
echo $_GET["fname"];
echo "<br>";
echo $_GET["lname"];
echo"<br>";
echo $_GET["dob"];
echo "<br>";
echo $_GET["email"];


 ?>
</body>
</html>