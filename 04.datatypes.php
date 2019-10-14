<?php
$x=20;
$a=array(2,2,2,2,2);
$f=3.3;
$b=true;
$n=null;
//returns data type and value of the variable;
var_dump($x);

//creating objects

class Car{
    function Car($color,$name){
         $this->name=$name;
         $this->color=$color;
    }
}
$bmw=new Car('red','BMW');
print($bmw->name)
?>

