<?php
// call by refernce
// $x = 10;
// $y = 15;
// $z = 0;

// echo "x ={$x} , y= {$y} ,z ={$z} <br>";

// $x = & $z ;
// echo "x ={$x} , y= {$y} ,z ={$z}  <br>";

// $z = 20;
// echo "x ={$x} , y= {$y} ,z ={$z}  <br>";

//call by value.....
$x = 10;
$y = 15;
$z = 0;

echo "x ={$x} , y= {$y} ,z ={$z} <br>";

$x = $z ;
echo "x ={$x} , y= {$y} ,z ={$z}  <br>";

$z = 20;
echo "x ={$x} , y= {$y} ,z ={$z}  <br>";