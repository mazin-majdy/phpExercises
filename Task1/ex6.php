<?php

// Exercise 6)
// Write a PHP program to find the larger value from two positive integer values that is in the range 20-30 inclusive or return 0 if neither is in that range.

function check($num1, $num2)
{
  if ((20 < $num1 && $num1< 30) && (20 < $num2 && $num2 < 30)) {
    $largest = $num1;
    if ($largest < $num2) {
      $largest = $num2;
    }
    echo "The Largest Number Is $largest";
  } else {
    echo 'Not In Range 20 - 30';
  }
}

check(25,30);