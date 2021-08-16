<?php


class Geometry
{
   static public function circleArea(int $radius):string
   {
       if ($radius < 0)
       {
           return "Wrong input - circle radius can't be negative ".PHP_EOL;
       }else{
           return "circle Area of radius {$radius} is: ".pi()*pow($radius,2).PHP_EOL;
       }

   }
   static public function rectangleArea(int $length,int $width):string
   {
       if ($length < 0 || $width <0)
       {
           return "Wrong input - rectangle dimensions can't be negative ".PHP_EOL;
       }else{
           return 'rectangle Area is : '.$length*$width.PHP_EOL;
       }

   }
    static public function triangleArea(int $base,int $height):string
    {
        if ($base < 0 || $height < 0)
        {
            return "Wrong input - triangle base or height can't be negative ".PHP_EOL;
        }else{
            return 'triangle Area is: '.$base*$height*0.5.PHP_EOL;
        }

    }

}
while (true)
{
    echo PHP_EOL.'Geometry calculator:'.PHP_EOL.PHP_EOL;
    echo 'Calculate the Area of a Circle'.PHP_EOL;
    echo 'Calculate the Area of a Rectangle'.PHP_EOL;
    echo 'Calculate the Area of a Triangle'.PHP_EOL;
    echo 'Quit'.PHP_EOL;
    echo 'Enter your choice (1-4):'.PHP_EOL;
    $choice = readline().PHP_EOL;
    $choice = (int) $choice;

    switch ($choice)
    {
        case 1:
            $radius_input = readline('Enter circle radius to make calculations:').PHP_EOL;
            $radius_input =(int)$radius_input;
            echo Geometry::circleArea($radius_input);
            break;
        case  2:
            $len = readline('Enter rectangle length: ').PHP_EOL;
            $wid = readline('Enter rectangle width').PHP_EOL;
            $len = (int)$len;
            $wid = (int)$wid;
            echo Geometry::rectangleArea($len,$wid);
            break;
        case 3:
            $base = readline('Enter triangle base :').PHP_EOL;
            $hei = readline('Enter triangle height : ').PHP_EOL;
            $base =(int)$base;
            $hei = (int)$hei;
            echo Geometry::triangleArea($base,$hei);
            break;
        case 4:
            return false;
        default:
            echo 'Error - wrong input - choose from 1-4'.PHP_EOL;
    }
}

