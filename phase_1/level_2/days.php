<?php

// Take a day number (1–7) and print the corresponding day name.

$day = 8;

if ($day == 1) {
    echo "Sunday";
}
elseif ($day == 2) {
    echo "Monday";
}
elseif ($day == 3) {
    echo "Tuesday";
}
elseif ($day == 4) {
    echo "Wednesday";
}
elseif ($day == 5) {
    echo "Thursday";
}
elseif ($day == 6) {
    echo "Friday";
}
elseif ($day == 7) {
    echo "Saturday";
}
else {
    echo "Invalid number";
}