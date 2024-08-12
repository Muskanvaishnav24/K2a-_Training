
<?php
 echo " i am php code";

$number=2;
$i=1;
echo "multiplication table of ".$number;
while($i<=10){
    echo $number ."X". $i ."=".($number*$i);
    echo "<br>";
    $i++;

}

$number=5;
echo "multiplication table of ".$number;
echo "<br>";
for($i=1;$i<=10;$i++){
    echo $number."x".$i."=".($number*$i);
    echo "<br>";

}

$number=3;
$i=1;
echo "multiplication table of ".$number;
echo "<br>";
do{
    echo $number."x".$i."=".($number*$i);
    echo"<br>";
    $i++;
}
    while($i<=10);

  $number=3;
  echo"multiplication table of ".$number;
  echo "<br>";
  for($i=1;$i<=10;$i++){
    echo $number."x".$i."=".($number*$i);
    echo "<br>";
  }

  $number=$_GET["n"];
  echo "multiplication table of ".$number;
  echo "<br>";
  
  for($i=1;$i<=10;$i++){
    echo $number."x".$i."=".($number*$i);
    echo"<br>";
  }

  ?>




