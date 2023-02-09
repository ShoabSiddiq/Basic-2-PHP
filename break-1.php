<?php 

for($i=20;$i<50;$i++){

    echo $i;
    echo PHP_EOL;
    if($i%13==0){
        break;
    }
}

echo PHP_EOL;

for($i=20;$i<50;$i++){
    if($i%13==0){
        echo $i;
        // echo PHP_EOL;
        break;
    }
}