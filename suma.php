<?php
$n1=6;
$n2=7;

addTwoNumbers($n1,$n2);
function addTwoNumbers(int $n1,int $n2)
{
    $numeros = ['number1' =>$n1, 'number2' => $n2];
    $obj = (object) $numeros;
    $num1 = $obj->number1;
    $num2 = $obj->number2;
    $suma=$num1+$num2;

    echo "la suma entre ".$obj->number1." y ".$obj->number2." es ".$suma;

}
