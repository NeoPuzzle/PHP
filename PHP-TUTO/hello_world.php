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
echo substr($x, 5, -3);