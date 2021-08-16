<?php

echo 'Welcome to BMI calculator!'.PHP_EOL;
$weight_kg = readline('Enter your body weight in kg: ').PHP_EOL;
$height_m = readline("Enter your body height in metric: ").PHP_EOL;

$weight_lb = (int)$weight_kg*2.2046;
$height_inch = (float)$height_m*39.3700787;

$bmi = $weight_lb*703/pow($height_inch,2);

if ($bmi<18.5)
    {
        echo 'You are underweight with BMI result '.$bmi.PHP_EOL;
    }
elseif ($bmi > 25)
    {
        echo 'You are overweight considering BMI result of '.$bmi.PHP_EOL;
    }
else
{
    echo 'Your weight is optimal considering BMI of '.$bmi.PHP_EOL;

}

