<?php

// $arr = ['aa','bb','cc'];

// function addnumber($str){
//     $str.=5;
//     return $str;
// }
// // $new = array_map('strtoupper',$arr);
// $new = array_map('addnumber',$arr);

// print_r($new);


// $sum = fn($x,$y)=>$x+$y;
// echo $sum(5,10);

//ex5

function func($n) :int{
    $factorial = 1;
    if($n >= 1){
        for ($i=1; $i <= $n; $i++) { 
            $factorial = $factorial * $i;
        }
    }
   return $factorial;
}

echo func(4);