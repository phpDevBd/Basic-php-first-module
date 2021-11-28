<?php
$number = 11;

if (10 == $number) {
    echo "Ten";
} else {
    echo "We don't Know.";
}
echo PHP_EOL;
$n = 5;
if ($n >= 5) {
    echo "$n is greater than 5.";
} else {
    echo "$n is not greater than 5.";
}
echo PHP_EOL;
$user = "Hasan";
$city = "Dhak";
$pass = "abc";

if ($user) {
    if ("Hasan" == $user || "Dhaka" == $city) {
        echo "You can login here.";
    } else {
        echo "At first you have to register here.";
    }
} else {
    echo "User Not Found";
}

