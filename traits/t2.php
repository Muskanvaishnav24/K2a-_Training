<?php
trait message1{
    public function msg1 (){
        echo " PHP is scripting language";
        echo "<br>";
}
}

trait message2{
    public function msg2(){
        echo " laravel is framework of php";
    }
}
class myclass{
    use message1;
}
    class myclass2{
        use message2;
    }

$obj=new myclass;
$obj->msg1();
$obj=new myclass2;
$obj->msg2();
?>