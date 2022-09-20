<!DOCTYPE html>
<html lang="en">

<body>
    <form action="add.php" method="get">
        <input type="number" name="num1"/>
        <br>
        <input type ="number" name="num2"/>
        <br>
        <input type="submit"/>
        <br>
        value:  <?php 
        echo $_GET["num1"] +$_GET["num2"];
        ?>

</form>
</body>
</html>