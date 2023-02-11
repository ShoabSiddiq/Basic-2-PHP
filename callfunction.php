<?php 

include_once "function.php"; // here call previous function with name

$x=14;
if(isEven($x)){ //call parameter =argument
    echo "{$x} is an even number";
} else {
    echo "{$x} is an odd number";
}