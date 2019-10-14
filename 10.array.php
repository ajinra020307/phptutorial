<?php
$a=array(1,2,3,4,5);
print count($a);
$length=count($a);
for($i=0;$i<$length;$i++){
    print $a[$i];
}
//associaltive array

$aa=array('ajin'=>21,'a'=>22);
print($aa['ajin']);

foreach($aa as $key=>$value){
    print("key is $key an value is $value");
}

//sorting
// sort() - sort arrays in ascending order
// rsort() - sort arrays in descending order
// asort() - sort associative arrays in ascending order, according to the value
// ksort() - sort associative arrays in ascending order, according to the key
// arsort() - sort associative arrays in descending order, according to the value
// krsort() - sort associative arrays in descending order, according to the key
?>