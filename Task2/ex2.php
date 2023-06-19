<?php


// Exercise 2)
// Write a PHP function that accepts an array of strings and return the longest string found in the array, the function should have a 2nd argument that will hold the index of the item that have the longest string in the input array.

function checkLongest($arr, &$index)
{
  $maxLength = 0;
  $longestString = '';
  $index = -1;

  foreach ($arr as $key => $string) {
    $length = strlen($string);
    if ($length > $maxLength) {
      $maxLength = $length;
      $longestString = $string;
      $index = $key;
    }
  }

  return $longestString;
}
$index = -1;
$longestString = checkLongest(['mazin', 'hasan', 'mohammed', 'Hello World'], $index);

echo "Longest string: $longestString <br>Index: $index ";
