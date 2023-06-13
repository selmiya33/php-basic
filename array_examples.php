
<?php
///-----------------------1---------------------------
echo "<br>";
$numbers = [1,2,3,4,5,6,7,8,9,15,20];
$odd_numbers =[];
foreach ($numbers as $value) {
    if($value % 2 != 0){
        array_push($odd_numbers,$value);
    }
}
echo '<pre>';
var_dump($odd_numbers);

///------------------------2--------------------------
echo "<br>";
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

///------------------------3---------------------------
echo "<br>";

$a = [3,2,4];
$b = [2,5,6,7];
$loop = count($a) >count($b)?$a:$b;

foreach ($loop as $key => $value) {
    $multi[] = ($a[$key] ?? 0) * ($b[$key] ??0);
}
print_r($multi);

///------------------------4--------------------------
echo "<br>";
function factorial(int $num){
    if($num <= 1)
        return 1;
    else 
        return $num * factorial($num -1);
}
$number = 8;
echo "The Factorial for $number is : " . factorial($number);


///------------------------5--------------------------
echo "<br>";
function is_prime($number) {
    if ($number < 2) {  // Numbers less than 2 are not prime
        echo "{$number} is not Prime";
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            echo "{$number} is not Prime";
        }
    }
    echo "{$number} is Prime";
}

$num = 55;
echo is_prime($num);
