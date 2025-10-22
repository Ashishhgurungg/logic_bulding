<?php

$marks = 0;

//Whichever case is true will be executed

switch (True) {
    case ($marks >= 90 && $marks <= 100):
        echo "A";
        break;
    case ($marks >= 80 && $marks < 90):
        echo "B";
        break;
    case ($marks >= 70 && $marks < 80):
        echo "C";
        break;
    case ($marks >= 60 && $marks < 70):
        echo "D";
        break;
    case ($marks < 60):
        echo "F";
        break;
}

//Explaination
// This code assigns a letter grade based on the value of the variable $marks.
// It uses a switch statement with the condition set to True, allowing each case to evaluate a boolean expression.
// Depending on the range in which $marks falls, it will print the corresponding letter grade.
// when marks is 0 then in first case its false, second case false, third case false, fourth case false and fifth case true so it will print F.
?>