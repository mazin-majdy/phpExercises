<?php

// Exercise 1)
// Write a PHP program to check whether the first two characters and last two characters of a give string are same.

function check($str)
{

    if(($str[strlen($str) - 1] == $str[1]) && ($str[strlen($str) - 2] == $str[0])) {
      echo "Yes it's Identical <br>";
    } else {
      echo "Doesn't Identical <br>";
    }
}

check("miami");
check("miamim");