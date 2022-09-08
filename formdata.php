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
<head>
    <meta charset="UTF-8">
    <title>GFG User Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
        th{
            color:red;
            background:blue;
        }
    </style>
</head>

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