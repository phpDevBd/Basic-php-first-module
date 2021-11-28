<?php
$number = 12;
if ($number % 2 == 0) {
    echo "Even Number";
} else {
    echo "odd Number";
}
echo "===" . PHP_EOL;
$result = ($number % 2 == 0) ? "Even Number T" : "odd Number T";
echo $result;

