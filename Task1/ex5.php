<?php

// Exercise 5)
// Write a PHP program to check which number nearest to the value 100 among two given integers. Return 0 if the two numbers are equal.

function checkNearest($num1, $num2){
  if($num1 == $num2){
    echo "$num1 Is Equal $num2";
  } else {
    $diff1 = abs($num1 - 100);
    $diff2 = abs($num2 - 100);

    if ($diff1 < $diff2) {
        echo "$num1 Is Nearest To The Value 100";
    } else {
      echo "$num2 Is Nearest To The Value 100";
    }
  }
}
checkNearest(100.2, 100.5);