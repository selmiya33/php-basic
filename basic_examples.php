<?php
// // var_dump

//------------------1------------------------
$str = "moath momo";

$first = substr($str,0,2);
$second = substr($str,-2,2);

if($first == $second)
 echo "it's simailer";
else
 echo "it's various";

 ///-----------------------2------------------------
 echo "<br>";

 $given_str = "GO TO school";

if (strtoupper(substr($given_str ,0,2)) === strtoupper("Go"))
    echo "It's starts with Go";
else
    echo "It isn't start with Go";
 

///------------------------3---------------------------
echo "<br>";

$numb = 15;
if($numb % 3 === 0 || $numb % 7 === 0){
    echo "Yes, The number $numb is multiple by";
    if ($numb % 3 === 0) {
        echo "3";
    }elseif($numb % 7 === 0){
        echo "7";
    }
}

///------------------------4---------------------------
echo "<br>";
$numbers = array(5,15,8);
$max_num = max($numbers);
echo "The largest number is $max_num";

///------------------------5---------------------------
echo "<br>";

$num1 =22;
$num2 = 120;
if (($num1 > $num2) && ($num1 <=100)) {
        echo"$num1 is nearst to 100";  
}elseif($num1 === $num2){
    return 0;
}elseif (($num1 < $num2) && ($num2 <=100)) {
    echo"$num2 is nearst to 100";
}else{
    echo 'these numbers alrgest 100';
}

///------------------------6---------------------------
echo "<br>";
$numbers0 = [16,25];
$max_num0 = max($numbers0);
if($max_num0 >= 20 and $max_num0 <= 30){
    echo "The number {$max_num0} in the range between 20--30";
}else{
    echo 0;
}

///------------------------7---------------------------
echo "<br>";

$str0 = "10mo55ath9";
preg_match_all('!\d+!', $str0, $matches);
print_r($matches);//array
echo '<br>';
$number = implode('', $matches[0]) ;//string
echo $number.'<br>';
$numbers_arr = str_split($number);//array
print_r($numbers_arr);
echo '<br>';
var_dump(count($numbers_arr));

///------------------------8---------------------------
echo "<br>";
$arr_numbers = [5,100,200,300,400];
echo array_sum($arr_numbers);

///------------------------9---------------------------
echo "<br>";
$str = "my name is moath abu selmiya??";

// // echo strrev($str);
// // echo'<br>';

$rev_string ='';
for ($i=1; $i < strlen($str) + 1; $i++) { 
    $char = $str[strlen($str) - $i];
    $rev_string .= $char;
}
echo $rev_string;

$a = /*false*/ true or die('hello');
echo $a;

