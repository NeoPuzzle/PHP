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