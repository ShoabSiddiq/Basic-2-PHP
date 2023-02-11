<?php 
/* 
Determines if the argument is evev or odd */

function isEven($n){ //parameter

   if($n%2 == 0){
    return true;
   }
   return false;
}

$x=14;
if(isEven($x)){ //call parameter =argument
    echo "{$x} is an even number";
} else {
    echo "{$x} is an odd number";
}

echo PHP_EOL;


function sayHello(){  
echo "Hello PHP Function";  
}  
sayHello();//calling function  
  