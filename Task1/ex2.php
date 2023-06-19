<?php

// Exercise 2)
// Write a PHP program to check if a given string starts with 'Go' or not. (Don't use "str_starts_with" function)

function check($str)
{

    if(($str[0] == 'G') && ($str[1] == 'o')) {
      echo "Yes it's Identical";
    } else {
      echo "Doesn't Identical";
    }
}
check("Gomaz");