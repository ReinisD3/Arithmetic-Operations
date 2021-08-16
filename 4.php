<?php


function factorial(int $number): int
{
    $factorial =1;
    for ($i = 1; $i <= $number; $i++)
    {
        $factorial = $factorial*$i;
    }

    return $factorial;
}

$input = readline('Please insert number to calculate factorial:').PHP_EOL;
$input = (int) $input;
$result = factorial($input);
echo "Factorial from {$input} = {$result}".PHP_EOL;