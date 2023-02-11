<?php 

function taskA(){
    echo "Hello A\n";
}
function taskB(){
    echo "Hello B\n";
}
function taskC(){
    echo "Hello C\n";
}

function BigTask(){
    taskA();
    taskB();
    taskC();
}

BigTask();