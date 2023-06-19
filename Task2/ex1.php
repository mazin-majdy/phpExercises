<?php

// Exercise 1)
// Write a PHP function that accepts an array of integers and return a new array after removing odd numbers.
function removeOdd($arr)
{
  $newArr = array_filter($arr, function ($i) {
    return $i % 2 !== 0;
  });
  return $newArr;
};

$array1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo "<pre>";
var_dump(removeOdd($array1));
