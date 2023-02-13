<?php 

$name="Earth";
function doSome(){
    global $name;
    echo $name;
}

doSome();
echo "\n";

$name="Earth";
function dofew(){
    echo $GLOBALS['name']; //this is good practise
}
dofew();
echo "\n";

function doKisu(){
    $name="Earth"; // local scope
}
doKisu();
echo $name;
