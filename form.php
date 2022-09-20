<!DOCTYPE html>
<html lang="en">
<head>
   
</head>
<body>
    
<form action="form.php" method="get">
    <input type="text" name="name" placeholder="enter name"/>
    <br>
    <br>
    <input type="text" name="surname" placeholder="enter surname"/>
    <br>
    <br>
    <input type="submit" />
</form>

<?php echo $_GET["name"];
     echo $_GET["surname"];

?>
<br>
<?php 
     echo $_GET["surname"];

?>

</body>
</html>