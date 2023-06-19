<?php

// Exercise 8)
// Write a PHP program to return the sum of digits of an integer number.

function sum($num){
  $str = "$num";
  $sum = 0;
  for($i = 0; $i < strlen($str); $i++){
    $sum += $str[$i];
  }
  echo "sum of digits of $num = $sum";
}
sum(15151);
