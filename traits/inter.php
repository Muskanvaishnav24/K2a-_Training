<?php
interface animal{
    public function makesound();

}
// using constructor 
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