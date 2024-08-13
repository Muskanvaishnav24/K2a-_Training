<?php
interface animal{
    public function makesound();
}
class dog implements animal{
    public function makesound(){
        echo "bark";

    }
    
}
$animal=new dog();
$animal->makesound();
echo "<br>";
echo "<br>";
interface animal{
    public function makesound();

}
class cat implements animal{
    public function _construct(){

    }

public function makesound(){
    echo "meow";
}
}
$animal=new cat();
$animal->makesound();
?>