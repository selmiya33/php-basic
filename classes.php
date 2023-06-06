<?php
class Str 
{
    protected $value;

    public function __construct($string){
        $this->value =$string;
    }
    public function length(){
        $str_len = $this->value;
        return strlen($str_len);
    }
    public function equal($otherString){
        return $this->value === $otherString;
    }
    public static function getValue() {
        // return $this->value; //cant use this isn static 
    }

}



$str = new Str("moath mohammed");

$length = $str->length();
echo "Length of the string: {$length}\n";
echo '<br>';

$isEqual = $str->equal("moath mohammd");
echo "Strings are equal: " . ($isEqual ? "Yes" : "No") . "\n";
echo '<br>';

// $value = Str::getValue($str);
// echo "String value: $value\n";
echo '<br>';