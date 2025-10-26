<?php

// Take two numbers and determine whether both are even, both are odd, or one is 
// even and one is odd.

$num1 = 7;
$num2 = 9;

if ($num1 % 2 == 0 or $num2 % 2 == 0) {
    if ($num1 % 2 == 0 && $num2 % 2 == 0) {
        echo "Both are even";
    }
    else {
        echo "One is even and other is odd";
    }
}
else {
    echo "Both are odd";
}