<?php
interface animal{
    public function makesound();

}
class cat implements animal{
    public function makesound(){
        echo "meow";
    }
}
class dog implements animal{
    public function makesound(){
        echo "bark";
    }
    
}
$animal=new cat();
$animal->makesound();
echo "<br>";
$animal=new dog();
$animal->makesound();
?>