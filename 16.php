<?php
//Null Coalescing Operator

$defaultColor = "red";
$userColor = "blue";
// if (isset($userColor)) {
//     $color = $userColor;
// } else {
//     $color = $defaultColor;
// }
// echo $color;

$color = $userColor ?? $defaultColor;
echo $color;

