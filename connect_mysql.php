<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="connect_mysql.php" method="post">
    <input type="text"  name="fname"/>
    <br>
    <input type="text" name="lname"/>
    <br>
    <input type="email" name="email"/>
    <br>
    <input type="submit"/>
    </form>
</body>
</html>






<?php
error_reporting (E_ALL ^ E_NOTICE);
// Create connection
// $servername = "localhost";
// $username = "root";
// $password = "";
// $conn = new mysqli($servername, $username, $password);
// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// else{
//     // echo "Connected Succesfully";
// }

// create a database
echo "<br>";

// $sql="CREATE DATABASE second";
// if($conn->query($sql)===TRUE)
// {
//     echo "Database Created Succesfully";
// }
// else{
//     "Error creating database:".$conn->error;
// }
// $conn->close();



// create a table in database

// create a connection first

$conn= new mysqli("localhost","root","","second");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else{
    //   echo "Connected Succesfully";
  }
//   sql to create a table

$sql="CREATE TABLE userdetails(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(255),
    lname VARCHAR(255),
    email VARCHAR(255)

)";
//  $conn->close();
if ($conn->query($sql) === TRUE) {
    // echo "Table user detials created successfully";
  } else {
    // echo "Error creating table: " . $conn->error;
  }
//   $conn->close();
//   Insert Data Into MySQL Using MySQLi 

$sql="INSERT INTO userdetails(fname,lname,email) VALUES ('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["email"]."')";
// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }
$conn->query($sql);
//   $conn->close();
// The following example selects the id, firstname 
// and lastname columns from the MyGuests table and displays it on the page:

$sql = "SELECT * FROM userdetails WHERE fname='sehsas'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["fname"]. " " . $row["lname"]."  " . $row["email"]. " <br>";
  }
} else {
  echo "0 results";
}
$conn->close();

?>

