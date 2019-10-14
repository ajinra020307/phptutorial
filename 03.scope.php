
<?php
//globalscope
$x=22;
$y=23;

function test(){
    //access global variables in local
    global $x;
    echo("x is $x");
    //PHP stores all global variables in an array $GLOBALS
    //access global variables from $GLOBAL array
    echo($GLOBALS['y']);
}
test();
//static variables
//When a function completed executing php deletes all the local variables in 
//function in order to use the variable for future use we use static keyword

function test2(){
   static $x=1;
    $x++;
    echo('static');
    echo($x);
}
test2();
test2();
?>