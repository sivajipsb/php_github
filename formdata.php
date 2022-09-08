<?php  
error_reporting (E_ALL ^ E_NOTICE);

$conn=new mysqli("localhost","root","","first") or die("unable to connect");
if($conn)
{
    // echo "connected sucessfulyy";
    echo "<br>";
}


$sql="INSERT INTO first_database(fname,lname,dob,email) VALUES ('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["dob"]."','".$_POST["email"]."')";
$conn->query($sql);

$sql="SELECT * FROM first_database";
$result=$conn->query($sql);
$conn->close();

// echo $_POST["fname"];
// echo "<br>";
// echo $_POST["lname"];
// echo"<br>";
// echo $_POST["dob"];
// echo "<br>";
// echo $_POST["email"];


 ?>



<!DOCTYPE html>
<html lang="en">

<body>
    <form action="formdata" method="post">
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

<table>
            <tr>
                <th>first_name</th>
                <th>last_name</th>
                <th>dob</th>
                <th>email</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['fname'];?></td>
                <td><?php echo $rows['lname'];?></td>
                <td><?php echo $rows['dob'];?></td>
                <td><?php echo $rows['email'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>

</body>
</html>