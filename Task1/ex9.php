<?php

// Exercise 9)
// Write a PHP program to reverse any string. (Don't use "strrev" function.)

function rev($str)
{
  $revStr = '';
  for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $revStr .= $str[$i];
  }
  echo "Plain Text Is ( $str ) And It's Reverse Is ( $revStr )";
}
rev('Mazin Majdy Almaswaby');
