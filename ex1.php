<?php
// // var_dump

// // ex1
// $num1 = 15;
// if($num1 % 3 === 0 || $num1 % 7 === 0){
//     echo "Yes, The number $num1 is multiple by";
//     if ($num1 % 3 === 0) {
//         echo "3";
//     }elseif($num1 % 7 === 0){
//         echo "7";
//     }
// }

// echo "<br>";

// // ex2
// $numbers = array(5,15,8);
// $max_num = max($numbers);
// echo "The largest number is $max_num";

// ex3
// $num1 =22;
// $num2 = 120;
// if (($num1 > $num2) && ($num1 <=100)) {
//         echo"$num1 is nearst to 100";  
// }elseif($num1 === $num2){
//     return 0;
// }elseif (($num1 < $num2) && ($num2 <=100)) {
//     echo"$num2 is nearst to 100";
// }else{
//     echo 'these numbers alrgest 100';
// }

// ex4
// $numbers = [16,25];
// $max_num = max($numbers);
// if($max_num >=20 and $max_num<=30){
//     echo "The number {$max_num} in the range between 20--30";
// }else{
//     echo 0;
// }

//ex5
// echo "<br>";
// $str = "10mo55ath9";
// preg_match_all('!\d+!', $str, $matches);
// print_r($matches);//array
// echo '<br>';
// $number = implode('', $matches[0]) ;//string
// echo $number.'<br>';
// $numbers_arr = str_split($number);//array
// print_r($numbers_arr);
// echo '<br>';
// var_dump(count($numbers_arr));

//ex5 
// $arr_numbers = [5,100,200,300,400];
// echo array_sum($arr_numbers);

//ex6
// $str = "my name is moath abu selmiya??";

// // // echo strrev($str);
// // // echo'<br>';

// $rev_string ='';
// for ($i=1; $i < strlen($str) + 1; $i++) { 
//     $char = $str[strlen($str) - $i];
//     $rev_string .= $char;
// }
// echo $rev_string;

// $a = /*false*/ true or die('hello');
// echo $a;

