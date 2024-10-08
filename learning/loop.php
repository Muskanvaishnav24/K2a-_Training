<?php
//while loop
$a=1;
while($a<6){
echo $a;
$a++;
}
echo "<br>";

//do while loop
$num=10;
do{
    echo $num;
    $num--;
echo "<br>";
}while($num>=1);
echo "<br>";

//for loop 
$number=3;
echo"multiplication table of ".$number;
echo "<br>";
for($i=1;$i<=10;$i++){
  echo $number."x".$i."=".($number*$i);
  echo "<br>";
}
echo "<br>";

for($i=0;$i<=10;$i++)
echo "$i-";
echo "<br>";
?>

