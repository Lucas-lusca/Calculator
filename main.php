<?php

echo("INICIOU, DIGITE OS NUMEROS!!\n");

$numbers = array();

array_push($numbers,(int) fgets(STDIN),(int) fgets(STDIN));

//print_r($numbers);

$num1 = $numbers[0];

$num2 = $numbers[1];

$sum = $num1 + $num2;
$multiplication = $num1 * $num2;
$subtraction = $num1 - $num2;
$divison = $num1 % $num2;

echo("O resultado é: $sum");

//php -S localhost:8000

?>

