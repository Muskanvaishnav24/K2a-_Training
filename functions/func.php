<?php
//define a function
function message(){
    echo "Hello World!!";
}
//calling function
message();
echo "<br>";
echo "<br>";
//define function by return statement
   function addFunction($num1, $num2) {
      $sum = $num1 + $num2;
      return $sum;
   }
   $x = 10;
   $y = 20;
   $num = addFunction($x, $y);
   echo "Sum of the two numbers is : $num";
echo "<br>";
echo "<br>";
//recursive function
function factorial($n) {
    
    if ($n == 0) {
        return 1;
    }
    
    else {
        return $n * factorial($n - 1);
    }
}

// Testing the factorial function
$number = 5;
$result = factorial($number);
echo "The factorial of $number is $result.";


?>