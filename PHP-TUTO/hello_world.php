<?php

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
  echo " **" ."\n";
  echo " **" ."\n";
