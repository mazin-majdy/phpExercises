<?php

// Exercise 4
// Write a function to calculate the factorial of a number (a non-negative integer). The function accepts the number as an argument.

function fact($n)
{
  if ($n > 0) {
    $result = 1;
    for ($i = $n; $i > 0; $i--) {
      $result *= $i;
    }
    echo "Factorial of $n = $result <br>";
    return $result;
  } else {
    echo 'Negative numbers are invalid <br>';
  }
}

fact(4);
fact(-2);

// Second Solution With Recursive Function.
function factorial($n)
{
  if ($n < 0)
    return -1; 
  if ($n == 0)
    return 1; 
  return ($n * factorial($n - 1));
}

echo factorial(4);
