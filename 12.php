<?php

$n = 13;
$r = $n % 2;
// if($r == 0){
//     echo "Even Number";
// }else{
//     echo "odd Number";
// }

switch ($r) {
    case 0:
        echo "Even Number \n";
        break;
    default:
        echo "odd Number";
}
echo PHP_EOL;
$favFruit = "apple";
switch ($favFruit) {
    case "apple":
        echo $favFruit . " isn't my favorite fruit.";
        break;
    case "orange":
        echo $favFruit . " is my sister's favorite fruit.";
        break;
    case "banana":
        echo "$favFruit is my favorite fruit.";
        break;
    default:
        echo "I don't like fruit";
}

