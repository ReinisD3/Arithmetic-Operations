<?php


for ($i = 1; $i <= 110; $i++)
{
//    if(($i-1) % 11 === 0)
//    {
//        echo PHP_EOL;
//    }
    switch ($i)
    {
        case ($i-1) %11 === 0 :
            echo PHP_EOL;
        case $i % 15 === 0 :
            echo 'CozaLoza ';
            break;
        case $i % 3 === 0 :
            echo 'Coza ';
            break;
        case $i % 5 === 0 :
            echo 'Loza ';
            break;
        case $i % 7 ===0:
            echo 'Woza ';
            break;
        default :
            echo $i.' ';
            break;
    }
}
echo PHP_EOL;