<?php

$year = 1900;

if ($year % 400 == 0 || ($year % 4 == 0 && $year % 100 !=0)){
    echo "This is leap year";
}
else {
    echo "The year is not a leap year";
}