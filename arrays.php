<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="arrays.php" method="post">
    <input type="text" name="cricket"/>
    <input type="submit"/>
</form>
    <?php
    error_reporting (E_ALL ^ E_NOTICE);
    
    $cricket = array("dhoni"=>"183","ganguly"=>"183","sachin"=>"200","kohli"=>"122");

    // echo 
    echo $cricket[$_POST["cricket"]];

    
    
    ?>
</body>
</html>