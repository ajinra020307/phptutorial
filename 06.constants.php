<?php
//declare a constant variable
define('cvar','hello world');
print(cvar);

//declare a constant which is case insensitive
define('c','hello',true);
print(C);

//declare constant array

define('a',[
    'car',
    'bike',
    'bus'
]);
print(a[2]);
?>