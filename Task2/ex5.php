<?php
// Exercise 5
// Write a function to check whether a number is prime or not.
function isPrime($number)
{
  if ($number < 2) {
    return "$number Is Not Prime";
  } else {
    for ($i = 2; $i <= sqrt($number); $i++) {
      if (($number % $i) == 0) {
        return "$number Is Not Prime";
      }
    }
    return "$number Is Prime";
  }
}

echo isPrime(5);
echo "<hr>";
echo isPrime(7);
echo "<hr>";
echo isPrime(25);
