<?php
$name = $_POST["name"];
$class = $_POST["course"];
$op = $_POST["operator"];
echo "$op";

if ($op == 'sum') {
    echo $name + $class;
} elseif ($op == 'mul') {
    echo $name * $class;
}elseif($op=='div'){
    echo $name / $class;
} 
     
        

?>
