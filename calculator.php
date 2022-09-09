<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculator.php" method="post">

    firstnumber:<input type="number" name="num1" />
    <br>
    symbol: <input type="text" name ="symbol" />
    <br>
    secondnumber:<input type="number" name="num2" />

  
    <br>
    <input type="submit" />
    </form>

    <?php
    error_reporting (E_ALL ^ E_NOTICE);
    //  echo $_POST["num1"]$_POST["symbol"]$_POST["num2"];
     

   $num1=$_POST["num1"];
   $num2= $_POST["num2"];
   $symbol=$_POST["symbol"];

   if($symbol=="+")
   {
    echo $num1+$num2;
   }
   else if($symbol=="-")
   {
    echo $num1+$num2;
   }
   else if($symbol=="*")
   {
    echo $num1*$num2;
   }
   else if($symbol=="/"){
    echo $num1/$num2;
   }
    
    ?>
</body>
</html>