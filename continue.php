<?php 

for($i=20;$i<30;$i++){
    if($i<27){
        continue;
    }
    echo $i;
    echo PHP_EOL;

    
}

echo "*************";
echo PHP_EOL;
for($i=20;$i<30;$i++){

    if($i<27){
        echo $i;
        echo PHP_EOL;
        break;
    }
   
}
echo "***********\n";

