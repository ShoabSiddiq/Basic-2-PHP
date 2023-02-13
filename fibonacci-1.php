<?php 
function fibonacci($n) {
    $first = 0;
    $second = 1;
    $next = 0;
    
    echo "Fibonacci Series:\n";
    echo $first . " ";
    echo $second . " ";
    
    for ($i = 2; $i < $n; $i++) {
        $next = $first + $second;
        echo $next . " ";
        
        $first = $second;
        $second = $next;
    }
}

$n = 10;
fibonacci($n);