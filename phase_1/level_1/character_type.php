<?php

$charc ='1';

if ($charc >= 'A' and $charc <= 'Z') {
    echo "$charc is Uppercase";
}
elseif ($charc >='a' and $charc <= 'z') {
    echo "$charc is lowercase";
}

elseif ($charc >= 0 and $charc <= 9) {
    echo "$charc is a number";
}

else {
    echo" $charc is a Special Character ";
}