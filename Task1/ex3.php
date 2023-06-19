<?php

// Exercise 3)
// Write a PHP program to check if a given positive number is a multiple of 3 or a multiple of 7.

function check($num)
{
  if ($num > 0) {

    if ($num % 3 == 0 and $num % 7 == 0) {
      echo 'Number is a multiple of 3 or a multiple of 7.';
    } else {
      echo 'Not Multiple';
    }
  } else {
    echo 'Number Is Negative.';
  }
}
check(42);