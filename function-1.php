<?php 
/* 
Determines if the argument is evev or odd */

 /*function isEven($n){ //parameter

   if($n%2 == 0){
    return true;
   }
   return false;
}
*/
function factorial($n)
{
    $result=1;
    for($i=$n;$i>1;$i--){
        $result *=$i;
    }
    return $result;
}

$x=5;

echo "Factorial of {$x} is ".factorial($x);