<?php
// Exercise 4)
// Write a PHP program to check the largest number among three given numbers.

function checkLargest($num1, $num2, $num3){
  $largest = $num1;
  if($largest < $num2){
    $largest = $num2;
  };

  if($largest < $num3){
    $largest = $num3;
  };
  echo "The Largest Number Is $largest";
}
checkLargest(155,101,101);