<?php

$num = readline('Enter number to check: ').PHP_EOL;

$num =(int)$num;

function CheckOddEven(int $int):string
{
    if($int%2 === 0){
        return 'Even Number';
    }else {
        return 'Odd Number';
    }

}

echo CheckOddEven($num).PHP_EOL;
echo 'Bye!'.PHP_EOL;