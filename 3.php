<?php

$upper_bound = 100;
$lower_bound = 1;
$sum = 0;

$sum = array_sum(range($lower_bound,$upper_bound));
//for ($i = $lower_bound; $i<=$upper_bound;$i++)
//{
//    $sum += $i;
//}
$average = $sum/($upper_bound-$lower_bound+1);

echo 'The sum of '.$lower_bound.' to '.$upper_bound.' is '.$sum.PHP_EOL;
echo 'The average is '.$average.PHP_EOL;