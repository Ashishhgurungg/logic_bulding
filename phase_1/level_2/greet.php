<?php
//Take the hour of the day (0–23) and print “Good Morning”, “Good Afternoon”, “Good Evening”, or “Good Night”.

$time = 12;

switch (True) {
    case ($time>=0 and $time <=12):
        echo "Good morning";
        break;
    case ($time>12 and $time <=17):
        echo "good afternoon";
        break;
    case ($time>17 and $time <20):
        echo"Good evening";
        break;
    case ($time>=20 and $time<24):
        echo"Good night";
        break;
    default:
        echo "invalid time";
        break;
}