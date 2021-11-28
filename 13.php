<?php
// Looping in php

for ($i = 0; $i <= 30; $i +=5) {
    echo $i;
    echo PHP_EOL;
}
echo "__________" . PHP_EOL;
$n = 1;
while ($n <= 10) {
    echo $n;
    echo "\n";
    $n++;
}
echo "__________" . PHP_EOL;
// do while
$x = 1;
do {
    echo $x;
    $x++;
    echo PHP_EOL;
} while ($x <= 10);

