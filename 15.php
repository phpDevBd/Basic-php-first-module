<?php
//break & Continue

for ($i = 1; $i <= 100; $i++) {
    if ($i % 13 == 0) {
        echo $i;
        echo PHP_EOL;
        if($i==65){
            break;
        }
    }
}
echo PHP_EOL;

// continue
for($i=10;$i<=30;$i++){
   
    if($i<25){
        continue;
    }
    echo $i;
    echo PHP_EOL;
}
