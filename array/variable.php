<?php
//define global variable
$x = 5; // global scope
 
function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: </p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";
echo "<br>";

// another example
$x = 5;
$y = 10;

function myfunc() {
  global $x, $y;
  $y = $x + $y;
} 

myfunc();  // run function
echo $y; // output the new value for variable $y
echo "<br>";


?>
