<?php 
 // recursion means function nijei nijeke call kore

 function printN($i){
    if($i>=10){
        return;
    }
    echo $i."\n";
    $i++;
    printN($i);
 }

 printN(1);
echo "********\n";
function printNumber($count,$end){ //declare start and end point also
    if($count>$end){
        return;
    }
    echo $count."\n";
    $count++;
    printNumber($count,$end);
 }

 printNumber(1,10);
