<?php

Echo 'Welcome to #1 exercise '.PHP_EOL;
$num1 = readline('Enter first number: ').PHP_EOL;
$num2 = readline('Enter second number: ').PHP_EOL;

$num1 = (int)$num1;
$num2 = (int)$num2;

function magic15(int $number1,int $number2):bool
{
   if ($number1 === 15 || $number2 === 15 || $number1+$number2 === 15 || abs($number1-$number2) === 15)
    {
        return True;
    }
   else
   {
       return False;
   }
}

echo magic15($num1,$num2).PHP_EOL;