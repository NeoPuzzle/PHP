<?php declare(strict_types=1);

echo "Hola, PHP \n";

$my_string = "Esto es una cadena de texto";
$my_string = "Aqui cambio la cadena de texto";
echo $my_string . "\n";
echo gettype($my_string) . "\n";

$my_string = 6;
echo $my_string ."\n";
echo gettype($my_string) . "\n";

$my_string = "Esto es una cadena de texto";

$my_int = 7;
$my_int = $my_int + 4;
echo $my_int ."\n";
echo $my_int - 1 ."\n";
echo $my_int ."\n";
echo gettype($my_int) ."\n";

$my_double = 6.5;
echo gettype($my_double) ."\n";
echo $my_int + $my_double ."\n";

$my_bool = false;
echo $my_bool ."\n";
echo gettype($my_bool) ."\n";
$my_bool = true;
echo $my_bool ."\n";
echo gettype($my_bool) ."\n";

echo "El valor de mi integer es $my_int y el de mi boolean es $my_bool" ."\n";


//constantes
const MY_CONSTANT = "Valor de la constante";
echo MY_CONSTANT . "\n";


//listas

$my_array = [$my_string, $my_int, $my_double, $my_bool];
echo gettype($my_array) ."\n";
echo $my_array[0] ."\n";
array_push($my_array, $my_bool);
print_r($my_array);

echo phpversion();


$color = "red";
echo "My car is " . $color . "<br>" ."\n";
// echo "My house is " . $COLOR . "<br>";
// echo "My boat is " . $coLOR . "<br>";

// This is a single-line comment
# This is also a single-line comment
/* This is a
multi-line comment */

$x = 5 /* + 15 */ + 5;
echo $x ."\n";
$x = 5;
$y = "John" ."\n";
var_dump($x);

echo "++++++++++++" ."\n";
var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);


echo "++++++++++++" ."\n";
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
    // echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>" ."\n";


$x = 5;
$y = 10;


echo "++++++++++++" ."\n";
function myTesting() {
    // $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    global $x, $y;
    $y = $x + $y;
}

myTesting();
echo $y ."\n"; // outputs 1

echo "++++++++++++" ."\n";

function myTestx() {
    static $x = 0;
    echo $x;
    $x++;
}

myTestx();
myTestx();
myTestx();


echo "++++++++++++" ."\n";
echo "Hello" ."\n";
//same as:
echo("Hello") ."\n";


echo "<h2>PHP is Fun!</h2>" ."\n";
echo "Hello world!<br>" ."\n";
echo "I'm about to learn PHP!<br>" ."\n";
echo "This ", "string ", "was ", "made ", "with multiple parameters." ."\n";
print "<h2>PHP is Fun!</h2>" ."\n";
print "Hello world!<br>" ."\n";
print "I'm about to learn PHP!" ."\n";


$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

echo '<h2>' . $txt1 . '</h2>' ."\n";
echo '<p>Study PHP at ' . $txt2 . '</p>' ."\n";
print '<h2>' . $txt1 . '</h2>' ."\n";
print '<p>Study PHP at ' . $txt2 . '</p>' ."\n";

echo "++++++++++++" ."\n";

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this -> color = $color;
        $this -> model = $model;
    }

    public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
    
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);



echo "++++++++++++" ."\n";

echo "Hello";
echo 'Hello'."\n";

echo strlen("Hello world!")."\n";
echo str_word_count("Hello world!")."\n";
echo strpos("Hello world!", "world");


echo "++++++++++++" ."\n";

$x = " Hello World! ";
echo strtoupper($x);
echo strtolower($x) ."\n";
echo str_replace("World", "Dolly", $x);
echo strrev($x) ."\n";
echo trim($x);

$y = explode(" ", $x);

//Use the print_r() function to display the result:
print_r($y);

/*
Result:
Array ( [0] => Hello [1] => World! )
*/


echo "++++++++++++" ."\n";
$x = "Hello World!";
echo substr($x, 6, 5) ."\n";
echo substr($x, 6) ."\n";
echo substr($x, -5, 3) ."\n";

$x = "Hi, how are you?";
echo substr($x, 5, -3)."\n";

echo "++++++++++++" ."\n";

$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));

$x = 10.365;
var_dump(is_float($x));

$x = 1.9e411;
var_dump($x);

$x = acos(8);
var_dump($x);


$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));
$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));

echo "++++++Numerical strings++++++" ."\n";

$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));
$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));

echo "++++++Cast Integers++++++" ."\n";

// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
var_dump($int_cast);
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
var_dump($int_cast);
echo $int_cast;

echo "++++++Cast to string++++++" ."\n";


$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

echo "++++++Cast to Integers++++++" ."\n";

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;

echo "++++++Cast to Floats++++++" ."\n";

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (float) $a;
$b = (float) $b;
$c = (float) $c;
$d = (float) $d;
$e = (float) $e;
$f = (float) $f;
$g = (float) $g;

echo "++++++Cast to Boolean++++++" ."\n";

$a = 5;       // Integer
$b = 5.34;    // Float
$c = 0;       // Integer
$d = -1;      // Integer
$e = 0.1;     // Float
$f = "hello"; // String
$g = "";      // String
$h = true;    // Boolean
$i = NULL;    // NULL

$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e;
$f = (bool) $f;
$g = (bool) $g;
$h = (bool) $h;
$i = (bool) $i;

echo "++++++Cast to Array++++++" ."\n";

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (array) $a;
$b = (array) $b;
$c = (array) $c;
$d = (array) $d;
$e = (array) $e;

echo "++++++Converting Objects into Arrays:++++++" ."\n";


class CarCast {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    public function message() {
        return "My car is a " . $this->color . " " .$this->model . "!";
    }
}

$myCarCast = new CarCast("red", "Volvo");

$myCarCast = (array) $myCarCast;
var_dump($myCarCast);



$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (object) $a;
$b = (object) $b;
$c = (object) $c;
$d = (object) $d;
$e = (object) $e;


$a = array("Volvo", "BMW", "Toyota"); // indexed array
$b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // associative array

$a = (object) $a;
$b = (object) $b;

echo "+++++Math+++++++" ."\n";

// echo(pi());

echo(min(0, 150, 30, 20, -8, -200))."\n";
echo(max(0, 150, 30, 20, -8, -200))."\n";

echo(abs(-6.7)) ."\n";

echo(sqrt(64)) ."\n";

echo(round(0.60)) ."\n";
echo(round(0.49)) ."\n";

echo(rand())."\n";

echo(rand(10, 100))."\n";


echo "+++++Constans+++++++" ."\n";

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

// define("GREETING", "Welcome to W3Schools.com!", true);
// echo greeting;

const MYCAR = "Volvo";
echo MYCAR;

echo "++++++++++++" ."\n";



define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
    ]);
echo cars[0];


echo "++++++++++++" ."\n";


define("GREETINGG", "Welcome to W3Schools.com!@#$%");

function myTestt() {
    echo GREETINGG;
}

myTestt();


echo "++++++Conditional++++++" ."\n";



if (5 > 3) {
    echo "Have a good day!";
}


$t = 14;

if ($t < 20) {
  echo "Have a good dayyyy!";
}


$t = 14;

if ($t == 14) {
  echo "Have a good dayyy!";
}


$a = 200;
$b = 33;
$c = 500;

if ($a > $b && $a < $c ) {
  echo "Both conditions are true";
}


$a = 5;

if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
  echo "$a is a number between 2 and 7" ."\n";
}


$t = date("H");

if ($t < "20") {
  echo "Have a good day!!!" ."\n";
} else {
  echo "Have a good nighttt!" ."\n";
}


$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}


$a = 13;

$b = $a < 10 ? "Hello" : "Good Bye";

echo $b;

$ab = 13;

if ($ab > 10) {
  echo "Above 10";
  if ($ab > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}

echo "++++++Switch++++++" ."\n";

$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}



$favicolor = "red";

switch ($favicolor) {
  case "red":
    echo "Your favorite color is red!";
  case "blue":
    "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}



$d = 4;

switch ($d) {
  case 6:
    echo "Today is Saturday";
    break;
  case 0:
    echo "Today is Sunday";
    break;
  default:
    echo "Looking forward to the Weekend";
}

$d = 3;

switch ($d) {
  case 1:
  case 2:
  case 3:
  case 4:
  case 5:  
    echo "The weeks feels so long!";
    break;
  case 6:
  case 0:
    echo "Weekends are the best!";
    break;
  default:
    echo "Something went wrong"."\n";
}



echo "++++++Loops++++++" ."\n";

$i = 1;
while ($i < 6) {
  if ($i == 3) break;
  echo $i;
  $i++;
}

echo " **" ."\n";

$i = 0;
while ($i < 6) {
  $i++;
  if ($i == 3) continue;
  echo $i;
}
echo " **" ."\n";

$i = 1;
while ($i < 6):
  echo $i;
  $i++;
endwhile;

echo " **" ."\n";
$i = 0;
while ($i < 100) {
  $i+=10;
  echo $i ;
}

echo " **" ."\n";

$i = 1;

do {
  echo $i;
  $i++;
} while ($i < 6);

echo " **" ."\n";

$i = 8;

do {
  echo $i;
  $i++;
} while ($i < 6);

echo " **" ."\n";

$i = 1;

do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);

echo " **" ."\n";



$i = 0;

do {
  $i++;
  if ($i == 3) continue;
  echo $i;
} while ($i < 6);

echo " **" ."\n";

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  }

  echo " **" ."\n";

  for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) break;
    echo "The number is: $x <br>";
  }
  echo " **" ."\n";

  for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) continue;
    echo "The number is: $x <br>";
  }
  echo " **" ."\n";

  for ($x = 0; $x <= 100; $x+=10) {
    echo "The number is: $x <br>";
  }
  echo " **" ."\n";
  $colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>";
}
  echo " **" ."\n";

  $members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  echo "$x : $y <br>";
}
  echo " **" ."\n";

  class CarIt {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
}

$myCarIt = new CarIt("red", "volvo");

foreach($myCarIt as $x => $y) {
    echo "$x: $y ";
}
  echo " **" ."\n";

  $colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") break;
  echo "$x <br>";
}
  echo " **" ."\n";
  $colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") continue;
  echo "$x <br>";
}
  echo " **" ."\n";
  $colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") $x = "pink";
  echo "$x <br>";
}

var_dump($colors);
  echo " **" ."\n";
  $colors = array("red", "green", "blue", "yellow");

foreach ($colors as &$x) {
  if ($x == "blue") $x = "pink";
}

var_dump($colors);
  echo " **" ."\n";
  $colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) :
  echo "$x <br>";
endforeach;
  echo " **" ."\n";
  function myMessage() {
    echo "Hello world!";
  }

  myMessage();
  echo " **" ."\n";

  function familyName($fname) {
    echo "$fname Refsnes ";
  }
  
  familyName("Jani");
  familyName("Hege");
  familyName("Stale");
  familyName("Kai Jim");
  familyName("Borge");
  echo " **" ."\n";

  function familyNames($fname, $year) {
    echo "$fname Refsnes. Born in $year <br> ";
  }
  
  familyNames("Hege", "1975");
  familyNames("Stale", "1978");
  familyNames("Kai Jim", "1983");
  echo " **" ."\n";
  function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
  }
  
  setHeight(350);
  setHeight(); // will use the default value of 50
  setHeight(135);
  setHeight(80);
  echo " **" ."\n";

  function sum($x, $y) {
    $z = $x + $y;
    return $z;
  }
  
  echo "5 + 10 = " . sum(5, 10) . "<br>";
  echo "7 + 13 = " . sum(7, 13) . "<br>";
  echo "2 + 4 = " . sum(2, 4);
  echo " **" ."\n";
  function add_five(&$value) {
    $value += 5;
  }
  
  $num = 2;
  add_five($num);
  echo $num;
  echo " **" ."\n";

  function sumMyNumbers(...$x) {
    $n = 0;
    $len = count($x);
    for($i = 0; $i < $len; $i++) {
      $n += $x[$i];
    }
    return $n;
  }
  
  $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
  echo $a;
  echo " **" ."\n";

  function myFamily($lastname, ...$firstname) {
    $txt = "";
    $len = count($firstname);
    for($i = 0; $i < $len; $i++) {
      $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
    }
    return $txt;
  }
  
  $a = myFamily("Doe", "Jane", "John", "Joey");
  echo $a;
  echo " **" ."\n";
//   function addNumbers(int $a, int $b) {
//     return $a + $b;
//   }
//   echo addNumbers(5, "5 days");
  // since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
  echo " **" ."\n";
  function addNumbers(float $a, float $b) : float {
  return $a + $b;
}
echo addNumbers(1.2, 5.2);
  echo " **" ."\n";

  function addNumberss(float $a, float $b) : int {
    return (int)($a + $b);
  }
  echo addNumberss(1.2, 5.2);
  echo " ****PHP ARRAYS*****" ."\n";

  $cars = array("Volvo", "BMW", "Toyota");
  
  var_dump($cars);
  echo count($cars)."\n";
  echo $cars[0]."\n";
  $cars[1] = "Ford"."\n";
 var_dump($cars)."\n";
 foreach ($cars as $x) {
    echo "$x";
  }

  array_push($cars, "Nissan");
var_dump($cars);

$cars[5] = "Scania";
$cars[7] = "Subaru";
$cars[14] = "Fiat";
array_push($cars, "Mercedez");
var_dump($cars);

// $myArr = array("Volvo", 15, ["apples", "bananas"], myFunction);
  echo " *******Associative Arrays" ."\n";
  $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);
echo $car["model"];
$car["year"] = 2024;
var_dump($car);
foreach ($car as $x => $y) {
    echo "$x: $y <br>";
  }
  echo " ******Create Arrays" ."\n";
  $cars = array("Volvo", "BMW", "Toyota");
  var_dump($cars);
  $cars = ["Volvo", "BMW", "Toyota"];
  $cars = [
    "Volvo",
    "BMW",
    "Toyota"
  ];
  $cars = [
    0 => "Volvo",
    1 => "BMW",
    2 =>"Toyota"
  ];
  var_dump($cars);
  $cars = [];
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";
$myCar = [];
$myCar["brand"] = "Ford";
$myCar["model"] = "Mustang";
$myCar["year"] = 1964;
foreach($myCar as $x=>$y){
    echo "$x:  $y ";
}
$myArr = [];
$myArr[0] = "apples";
$myArr[1] = "bananas";
$myArr["fruit"] = "cherries";
var_dump($myArr);
  echo " ******Access Arrays*********" ."\n";
  $cars = array("Volvo", "BMW", "Toyota");
echo $cars[2];
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
echo $cars["year"];
echo $cars["model"];
echo $cars['model'] ."\n";
$myFunction = function() {
    echo "I come from a function";
};

$myArri = array("volvo", 15, $myFunction);
$myArri[2]();

$myFunctionn = function() {
    echo "I come from a function";
};
  
  $myArr = array("car" => "Volvo", "age" => 15, "message" => $myFunctionn);
  
  $myArr["message"]();

  $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}

$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x) {
  echo "$x <br>";
}
  echo " *******Update Array Item*********" ."\n";
  $cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$cars["year"] = 2024;
var_dump($cars) ."\n";

$cars = array("Volvo", "BMW", "Toyota");
foreach($cars as &$x) {
    $x = "Ford";
}
unset($x);
var_dump($cars);

// $cars = array("Volvo", "BMW", "Toyota");
// foreach ($cars as &$x) {
//   $x = "Ford";
// }

// $x = "ice cream";
// var_dump($cars);
  echo " *******Add Array Items*********" ."\n";
  $fruits = array("Apple", "Banana", "Cherry");
$fruits[] = "Orange";
var_dump($fruits);
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars["color"] = "Red";
var_dump($cars);
$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "Orange", "Kiwi", "Lemon");
var_dump($fruits);
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["color" => "red", "year" => 1964];
var_dump($cars);
  echo " ********Delete Array Items**********" ."\n";
  $cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);
var_dump($cars);
$cars = array("Volvo", "BMW", "Toyota");
unset($cars[1]);
var_dump($cars);
$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 2);
var_dump($cars);
$cars = array("Volvo", "BMW", "Toyota");
unset($cars[0], $cars[1]);
var_dump($cars);
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars["model"]);
var_dump($cars);
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$newarray = array_diff($cars, ["Mustang", 1964]);
var_dump($newarray);
$cars = array("Volvo", "BMW", "Toyota");
array_pop($cars);
var_dump($cars);
$cars = array("Volvo", "BMW", "Toyota");
array_shift($cars);
var_dump($cars);
  echo " ************Multidimensional Arrays*******************" ."\n";
  $cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
  var_dump($cars);

  echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>" ."\n";

for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
  echo "</ul>";
}
  echo " **********Superglobals************" ."\n";

  $x = 75;
  
function myfunction() {
  // echo $x;
  // global $x;
  // echo $x;
  echo $GLOBALS['x'];
}

myfunction();

echo $_SERVER['PHP_SELF'];
echo $_SERVER['SERVER_NAME'];
echo $_SERVER['HTTP_HOST'];
echo $_SERVER['HTTP_REFERER'];
echo $_SERVER['HTTP_USER_AGENT'];
echo $_SERVER['SCRIPT_NAME'];



$_REQUEST['firstname'];

$name = $_REQUEST['fname'];
echo $name;

/*<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_REQUEST['fname']);
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

</body>
</html>*/


/*function myfunction() {
  const xhttp = new XMLHttpRequest();
  xhttp.open("POST", "demo_phpfile.php");
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.onload = function() {
    document.getElementById("demo").innerHTML = this.responseText;
  }
  xhttp.send("fname=Mary");
  }
}*/
  echo " **************RegEx**************" ."\n";
  $str = "Visit Microsoft!";
  $pattern = "/microsoft/i";
  echo preg_replace($pattern, "W3Schools", $str);
  echo " **" ."\n";

  ?>