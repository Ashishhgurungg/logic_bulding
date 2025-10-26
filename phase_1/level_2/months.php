<?php

//Take a month number (1–12) and print the number of days in that month (ignore leap years). 

$month = 0;

if ($month == 1) {
    echo "it is January and it has 31 days";
}
elseif ($month == 2) {
    echo "it is February and it has 28 days";
}
elseif ($month == 3) {
    echo "it is March and it has 31 days";
}
elseif ($month == 4) {
    echo "it is April and it has 30 days";
}
elseif ($month == 5) {
    echo "it is May and it has 31 days";
}
elseif ($month == 6) {
    echo "it is June and it has 30 days";
}
elseif ($month == 7) {
    echo "it is July and it has 31 days";
}
elseif ($month == 8) {
    echo "it is August and it has 31 days";
}
elseif ($month == 9) {
    echo "it is September and it has 30 days";
}
elseif ($month == 10) {
    echo "it is October and it has 31 days";
}
elseif ($month == 11) {
    echo "it is November and it has 30 days";
}
elseif ($month == 12) {
    echo "it is December and it has 31 days";
}
else {
    echo "Invalid month number";
}