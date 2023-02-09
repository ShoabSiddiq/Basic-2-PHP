<?php 

for($i=10;$i>0;$i--){
    echo $i.":".(11-$i); //multiple stepping in one condition 
    echo PHP_EOL;
}

echo PHP_EOL;

for($i=10,$j=1;$i>0;$i--,$j++){
    echo $i.":".$j;
    echo PHP_EOL;
}
