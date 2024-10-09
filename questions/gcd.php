<?php
$number1 = 56;
$number2 = 98;
while ($number1 != $number2) {
    if ($number1 > $number2) {
        $number1 = $number1 - $number2;
    } else {
        $number2 = $number2 - $number1;
    }
}


echo "The GCD is: " . $number1;
?>

