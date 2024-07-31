<?php
// sorted array
echo "<h3>sort array</h3>";
$array =array(5, 3, 8, 1, 2);
sort($array);
echo "<PRE>";
print_r($array);
echo "</PRE>";
echo "<br>";


// Define the associative array with mixed case keys
echo "<h3> change key case</h3>";
$associativeArray = array(
    "FirstName" => "John",
    "LastName" => "Doe",
    "Email" => "john.doe@example.com",
    "PhoneNumber" => "123-456-7890"
);
// Print the array with lowercase keys
echo "<pre>";
print_r(array_change_key_case($associativeArray,CASE_LOWER));
echo "</pre>";
echo "<br>";
echo "<br>";


// chunk array
echo "<h3> chunk array</h3>";
$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
// Print the chunked array
echo "<pre>";
print_r(array_chunk($array,3));
echo "</pre>";
echo "<br>";
echo "<br>";


// merged array 
echo "<h3> merged array</h3>";
$array1 = array("a", "b", "c");
$array2 = array("d", "e", "f");
// Print the merged array
echo "<pre>";
print_r(array_merge($array1,$array2));
echo "</pre>";

echo "<br>";
echo "<br>";


// pop array

echo "<h3> pop array</h3>";
$array = array("apple", "banana", "cherry", "date");

// Remove and return the last element
$lastElement = array_pop($array);

// Print the last element
echo "The last element was: " . $lastElement . "\n";

// Print the array after removing the last element
echo "<pre>";
print_r($array);
echo "</pre>";
echo "<br>";
echo "<br>"; 

 
    // array push 
    echo "<h3>push array </h3>";
     $ele = array("Rolex", "Fastrack", "Titan");  
     array_push($ele, "Fossil", "Omega"); 
     echo "<pre>"; 
     print_r($ele);
     echo "</pre>"; 
     echo "<br>";
     echo "<br>";

     //search array
     echo "<h3>search array</h3>";  
     $season=array("summer","winter","spring","autumn");    
     $key=array_search("spring",$season);  
     echo $key;    
echo "<br>";
echo "<br>";


// splice array
echo "<h3>splice array</h3>";
$array = array("apple", "banana", "cherry", "date", "elderberry");
$array2 = array("fig", "grape");
// Remove 2 elements starting from index 1, and replace with the new elements
array_splice($array, 1, 2, $array2);

// Print the modified array
echo "<pre>";
print_r($array);
echo "</pre>";
echo "<br>";

//define array values
echo "<h3> value array</h3>";
$associativeArray=array(
   "Name"=>"Peter",
    "Age"=>"41",
   "Country"=>"USA"
);
//print array values
echo "<pre>";
print_r(array_values($associativeArray));
echo "</pre>";
echo "<br>";

//define array reduce
echo "<h3> array reduce</h3>";
function myfunction($v1,$v2)
{
return $v1+$v2;
}
$a=array(10,15,20);
print_r(array_reduce($a,"myfunction",5));
echo "<br>";

//define array flip key
echo "<h3> flip key</h3>"; 
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result=array_flip($a1);
echo "<pre>";
print_r($result);
echo "</pre>";
echo "<br>";

//define array diff
echo "<h3> array diff</h3>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result);
echo "<br>";

//define array combine
echo "<h3> array combine</h3>"; 
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");
$c=array_combine($fname,$age);
echo "<pre>";
print_r($c);
echo "</pre>";

