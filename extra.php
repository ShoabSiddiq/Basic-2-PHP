/*
1 n0 = 7
9 n0=func_num_args()
10 n0 = 11
7 n0= both A and 
8 n0=olleh
6 n0=9
4 n0=??? 
5 n0=12345
2 n0=??
3 n0="Void" is used to indicate that a function or method does not return a value. and "null" is used to indicate that a function or method returns a null value.

*/

<?php 

$numbers=array(1,2,3,4,5);
$i=0;
do{
    echo $numbers[$i];
    $i++;
}while ($i<count($numbers));