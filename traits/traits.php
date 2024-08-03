<?php
trait message1{
    public function msg1(){
        echo " PHP is server side scripting language ";
    }
}
class myclass {
    use message1;
}
$obj=new myclass();
$obj->msg1();
?>