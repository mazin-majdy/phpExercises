<?php

// Exercise 3
// Write a function that accepts 2 arrays and return a new array that holds the value of multiplying each item in the first array by the corresponding item in the second array.



function multi($arr1, $arr2)
{
  $count1 = count($arr1);
  $count2 = count($arr2);

  if ($count1 === $count2) {
    for ($i = 0; $i < $count1; $i++) {
      $result[] = $arr1[$i] * $arr2[$i];
    }
  } else if ($count1 > $count2) {
    for ($i = 0; $i < $count1; $i++) {
      if ($i < $count2) {
        $result[] = $arr1[$i] * $arr2[$i];
      } else {
        $result[] = $arr1[$i];
      }
    }
  } else if ($count2 > $count1) {
    for ($i = 0; $i < $count2; $i++) {
      if ($i < $count1) {
        $result[] = $arr1[$i] * $arr2[$i];
      } else {
        $result[] = $arr2[$i];
      }
    }
  }

  return $result;
}

$arr1 = [1, 5, 5, 7, 8, 9];
$arr2 = [2, 3, 4, 2, 2, 2, 5, 5, 5];
echo "<pre>";
var_dump(multi($arr1, $arr2));
