<?php

// Exercise 7)
// Write a PHP program to count the number of occurrences of any digit in a string.

function countDigit($str) {
  $digitCount = 0;

  for ($i = 0; $i < strlen($str); $i++) {
    if(is_numeric($str[$i]))
      $digitCount++;
  }

  echo "Digit Count Is $digitCount";
}

countDigit("Hello m23azin 05 sddesd 4548");