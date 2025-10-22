<?php

//1. Take three sides and check if they form a valid triangle.

$a = 5;
$b = 10;
$c = 15;

if ($a + $b > $c && $b + $c > $a && $a + $c > $b){
    echo"It is valid";
}
else {
    echo "Not a valid triangle";
}