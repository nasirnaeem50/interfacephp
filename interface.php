<?php
interface A {
    function sum ($a,$b);
}
interface C{
    function sub($a,$b);
}
class B implements A , C{
    public function sum($a,$b){
        echo $a+$b;
    }
    public function sub($a,$b){
        echo $a-$b;
    }

}
$result=new B();
$result->sub(5,3);
$result->sum(6,7);
?>