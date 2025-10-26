<?php

//Take an alphabet character and check if it lies between ‘a’ and ‘m’ or ‘n’ and ‘z’. 

$alphabet = "a";

if (strtolower($alphabet) >= 'a' && strtolower($alphabet) <= "m") {
    echo "It lies between a and m";
}
elseif (strtolower($alphabet) > 'm' && strtolower($alphabet) <= 'z') {
    echo "It lies between n and z";
}
else {
    echo "enter a valid alphabet";
}