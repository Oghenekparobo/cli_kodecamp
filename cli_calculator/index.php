<?php

print_r("Arithmetic Calclator \n");

print_r('input your numbers');

$value_one= readline("first-number");


$operator = readline("enter operator \n");

switch($operator){ 

        case in_array($operator , ["/", "*" , "+" , "-" ]):
            break;

            default:
            print_r("operator not found \n");
            break;

}

$value_two = readline("second-number \n");

if($operator == '/'){
    $result = $firstvalue / $secondvalue;
}

if($operator == '+'){
    $result = $firstvalue * $secondvalue;
}

if($operator == '+'){
    $result = $firstvalue + $secondvalue;
}

if($operator == '-'){
    $result = $firstvalue - $secondvalue;
}
$result =" $value_one {$operator} $value_two";

print_r("total = $result \n");





?>