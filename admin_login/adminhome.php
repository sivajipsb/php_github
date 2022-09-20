


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>User Information Details </h1>

<button style="color:red"><a href="user_information.php"  style="color:red; text-decoration: none;">Add User  </a></button>
<br>
<br>

<table>
    <thead>
        <tr>
            <th >Id</th>
            <th >Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Techstack</th>
            <th>opeartions</th>


        </tr>
    </thead>
<!-- </table> -->
<tbody>
<?php 
$conn= new mysqli("localhost","root","","adminlogin");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else{
    //   echo "Connected Succesfully";
  }
$sql = "SELECT * FROM userinformation ";
// $result = $conn->query($sql);
$result=mysqli_query($conn,$sql);

if ($result) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    // echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["phone"]."  " . $row["email"]." ". $row["tech"]."    <button>delete</button> <br>";
    // echo "<br>";
    $id=$row['id'];
    $name=$row['name'];
    $phone=$row['phone'];
    $email=$row['email'];
    $tech=$row['tech'];

    echo "
    <tr>
    <th>$id</th> 
    <td>$name</td>
    <td>$phone</td>
    <td>$email</td>
    <td>$tech</td>
    <td>
     <button > <a href = delete.php?deleteid=$id  style= color:red;text-decoration: none;>Delete</a></button>
    
    
    
</td>
<td> <button > <a href = tj_update.php?updateid=$id style=color:red; text-decoration: none; >Edit</a></button></td>
    </tr>
    
    ";
  }
} else {
  echo "0 results";
}

// $sql="DELETE  FROM userdetails where fname="" ";
$conn->query($sql);



?>

<!-- <td>
    <button>edit</button>
    <button>delete</button>
</td> -->
<tbody>
</table>
</body>
</html>

