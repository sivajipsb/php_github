<?php
class Dishes
{
    function dosa()
    {
        echo "make dosa dish";
        echo "<br>";
    }

    function idly(){
        echo "make idly dish";
    }
}

class special extends Dishes{
  
    function dosa()
    {
        echo "make masala dosa";
    }
}

$dishes=new Dishes();
$dishes->dosa();

$special=new special();
$special->dosa()
?>