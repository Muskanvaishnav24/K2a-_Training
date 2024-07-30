<?php
// Sample array
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
print_r($array);

// Initialize counters for odd and even numbers
$oddCount = 0;
$evenCount = 0;

// Loop through each element in the array
foreach ($array as $element) {
    // Check if the element is even
    if ($element % 2 == 0) {
        $evenCount++;
    } else { // The element is odd
        $oddCount++;
    }
}

// Display the counts of odd and even numbers
echo "Number of even elements: $evenCount<br>";
echo "Number of odd elements: $oddCount<br>";
?>
