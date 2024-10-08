<?php
$num= $_POST["num"];
$op = $_POST["operator"];
echo "$op";

if ($op == 'square') {
    echo  ($num * $num);
} elseif ($op == 'cube') {
    echo ($num * $num * $num);
}elseif($op=='quad'){
    echo  ($num * $num * $num * $num);
}
?>

