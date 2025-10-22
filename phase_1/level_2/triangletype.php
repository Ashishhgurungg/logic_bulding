<?php

// 2. If the sides form a valid triangle, determine whether it is equilateral, isosceles, or scalene

$a = 5;
$b = 10;
$c = 14;

if ($a + $b > $c && $b + $c > $a && $a + $c > $b){

    //  using ternary operator and php_sapi or use php_sapi_name()

    echo (PHP_SAPI == 'cli') ? "It is valid \n" : "It is valid<br>";
    if($a == $b && $b == $c){
        echo "equilateral triangle";
    }
    elseif ($a == $b || $b == $c || $c == $a) {
        echo "isosceles triangle";
    }
    else {
        echo "scalene triangle";
    }
}
else {
    echo "Not a valid triangle";
}