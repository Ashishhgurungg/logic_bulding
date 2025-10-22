<?php

//Check if one of two given numbers is a multiple of the other. 

$x = 10;
$y = 5;

if ($x % $y == 0 || $y % $x == 0) {
    echo "One of them is the multiple of other";
}
else{
    echo"They are not multiple of eachother";
}