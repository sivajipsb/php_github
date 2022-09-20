
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello world</h1>
<?php 
echo "hello world";

$txt="hello sivaji";

echo "$txt";

$x=100;
$y=200;
echo $x+$y;

//global and local variable
$x=50;





$x = 5;
$y = 10;

function myTest() {
    static $x = 0;
    echo $x;
    $x++;
  }
  
  myTest();
  myTest();
  myTest();

  print "hello panda <br>";

  print "hello sivaji <br>";
  $x = 5985;
  var_dump($x);

  echo "<br>";

  echo "given break";
  
  $x = 10.365;
var_dump($x);
  
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

echo "<br>";

//strings
echo "hello:".strlen("hello");
echo "<br>";
echo str_word_count("hello indus net technology");
echo "<br>";
echo strrev("hello sivaji");
echo "<br>";
echo strpos("hello sivaji","hello");
echo "<br>";
echo str_replace("hello", "panda", "hello sivaji");
echo "<br>";
//numbers
$x = 5985777777777777777;
var_dump(is_int($x));
echo strlen($x);

echo "<br>";

//convert one date type to another

$xx=546.45;
echo (int)$xx;

echo "<br>";

//mathfunctions

echo (int)pi();
echo "<br>";
$min_value=array(100,200,300,400,500);
echo (min($min_value));
echo "<br>";
echo (max($min_value));

echo "<br>";

echo (sqrt(100));

echo "<br>";
echo ((rand(1,6)));

//constant keyword
echo "<br>";

define("hello","welcome to indusnet technology");
echo hello;

//constant arrays
echo "<br>";

define("cars",["bmw","maruthi","tata"]);

echo cars[0];
echo "<br>";
$assignment=2000;
$assignment=200000;
echo $assignment;

echo "<br>";
echo 10*5;

//conditional
echo "<br>";
$condition=10;
if($condition>2)
{
    echo "condition is agreeed";
}
echo "<br>";
$con2=200;
if($con2<100)
{
    echo "condition is true";
}
else{
    echo "condition is false";
}


//switch
echo "<br>";
$output="reds";
switch($output)
{
    case "red":
        echo "hello red";
        break;
        case "green":
            echo "hello red"; 
            break;
          default:echo "switch case" ; 
}

//whileloop
$xyz=5;
while($xyz<10)
{
    echo "the number is $xyz";
    echo "<br>";
   $xyz++;
}

for($xyz=0;$xyz<5;$xyz++)
{
    echo "thr number is $xyz";
    echo "<br>";
}

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
echo "<br>";
function add($a,$b)
{
    return $a+$b;
}

echo add(5,10);
echo "<br>";

$india=array("rohitsharma","kohli","surya");

for($i=0;$i<count($india);$i++)
{
    echo $india[$i];
    echo "<br>";
}
//echo $india[0];
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>
</body>
</html>