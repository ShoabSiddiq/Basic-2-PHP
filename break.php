<?php 

for($i=0;$i<10;$i++){
    echo $i;
    echo PHP_EOL;

    if($i==6){
        break;
    }
}

echo "***********\n";
for($i=0;$i<10;$i++){

    if($i==4){
        
        break;
    }
    echo $i;
    echo PHP_EOL;
}

echo "***********\n";
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        break;
      }
      echo ("The value is:$x\n");
    }