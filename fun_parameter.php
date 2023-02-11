<?php 

function serve($foodtype,$NoofFood="1 piece"){
    echo "{$NoofFood} of {$foodtype} has been served";
}

serve("Pizza");

echo PHP_EOL;

function sum(int $x,int $y,int $z):int { //:int describe the return type
    return $x+$y+$z;
}

echo sum(1,2,3);

echo PHP_EOL;

$a=12;
$b=1;
$result=2;

$sum=$a+$b;
$result +=$sum;
echo $result;