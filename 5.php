<?php

echo PHP_EOL."I'm thinking of a number between 1-100.  Try to guess it.".PHP_EOL;
$input = readline('<').PHP_EOL.PHP_EOL;
$input = (int) $input;

function guess_the_random(int $guess):void
    {
        $random_number = rand(1,100);

        switch ($guess)
        {
            case $random_number:
                echo 'You guessed it!  What are the odds?!?'.PHP_EOL;
                break;
            case $guess >$random_number:
                echo 'Sorry, you are too high.  I was thinking of '.$random_number.'.'.PHP_EOL;
                break;
            case $guess < $random_number :
                echo 'Sorry, you are too low.  I was thinking of '.$random_number.'.'.PHP_EOL;
                break;

        }

    }


guess_the_random($input);



