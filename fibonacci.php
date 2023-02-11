<?php 

// 0 1 1 2 3 5 8 13 21 34 55 89 144 233
$very_old=0;
$old=1;
$new=1;


for($i=0;$i<20;$i++){
    echo $very_old." ";
    $old=$new;
    $new=$old+$very_old;
    $very_old=$old;
}


/*
initial
v=0
o=1
n=1

1st loop 
v=1
o=1
n=1

2nd loop 
v=1
o=1
n=2

3rd loop 
v=2
o=2
n=3 

*/