<?php

$employeesData = [
    ['Employee' => 'Employee 1','BasePay' => 7.5,'HoursWorked'=>35],
    ['Employee' => 'Employee 2','BasePay' => 10,'HoursWorked'=>41],
    ['Employee' => 'Employee 3','BasePay' => 10,'HoursWorked'=>73],
];


class WeeklyWages
{

    public static function weeklyPayCalculator(float $basePay,int $hoursWorked):string
    {
        if ($hoursWorked > 60)
        {
            return ' Error - worked over 60 hours'.PHP_EOL;

        }
        elseif ($basePay < 8)
        {
            return '  Error - base pay under 8$'.PHP_EOL;

        }
        else
        {
            $overtimeExtraPay = ($hoursWorked>40)?($hoursWorked-40)*0.5*$basePay : 0;
            return 'earned :'.($basePay*$hoursWorked+$overtimeExtraPay).' this week'.PHP_EOL;
        }
    }
    public static function employeePay(array $data):void
    {
        foreach ($data as $employee)
        {
            echo $employee['Employee'].PHP_EOL;
            echo WeeklyWages::weeklyPayCalculator($employee['BasePay'],$employee['HoursWorked']);
        }
    }


}

WeeklyWages::employeePay($employeesData);
