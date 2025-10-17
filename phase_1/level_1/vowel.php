<?php

#Take a character and check if it’s a vowel or consonant. 

$char = 'z';

if (in_array(strtolower($char), ['a', 'e', 'i', 'o','u'])) {
    echo "It is a vowel";
}
else {
    echo "it is not a vowel";
}