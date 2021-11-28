<?php

//Decrement 

for ($i = 100; $i > 0; $i--) {
    echo $i."\n";
}
echo "===".PHP_EOL;

for ($i = 1; $i <= 50; $i++) {

    if ($i % 2 == 1) {
        echo $i;
    }
    echo PHP_EOL;
}


//Nested For Loop
for ($i = 1; $i <= 10; $i++) {

    echo PHP_EOL;
    for ($j = 0; $j < $i; $j++) {
        echo "+";
    }
}

