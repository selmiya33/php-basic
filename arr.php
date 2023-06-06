
<?php
// $array = array(
//     1 => 'a',
//     '1' => 'b', // the value "a" will be overwritten by "b"
//     1.5 => 'c', // the value "b" will be overwritten by "c"
//     -1 => 'd',
//     '01' => 'e', // as this is not an integer string it will NOT override the key for 1
//     '1.5' => 'f', // as this is not an integer string it will NOT override the key for 1
//     true => 'g', // the value "c" will be overwritten by "g"
//     false => 'h',
//     '' => 'i',
//     null => 'j', // the value "i" will be overwritten by "j"
//     'k', // value "k" is assigned the key 2. This is because the largest integer key before that was 1
//     2 => 'l', // the value "k" will be overwritten by "l"
//     );
// echo '<pre>';
// var_dump($array);

// ex1
// $numbers = [1,2,3,4,5,6,7,8,9,15,20];
// $odd_numbers =[];
// foreach ($numbers as $value) {
//     if($value % 2 != 0){
//         array_push($odd_numbers,$value);
//     }
// }
// echo '<pre>';
// var_dump($odd_numbers);

// ex2
$strings = [
    'moath mohammed abu selmiya',
    'mohammed alsafadi',
    'ali ahmead hsdhsdfhsdfhsdfhsdfhsdfh',
];
echo '<pre>';
print_r($strings);

$max_str ='';
foreach ($strings as $value) {
    if(strlen($max_str) < strlen($value)){
        $max_str = $value;
    }
} 
echo $max_str;
// exit;

// ex3

$a = [3,2,4];
$b = [2,5,6,7];
$loop = count($a) >count($b)?$a:$b;

foreach ($loop as $key => $value) {
    $multi[] = ($a[$key] ?? 0) * ($b[$key] ??0);
}
print_r($multi);
