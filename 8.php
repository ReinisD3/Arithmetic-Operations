<?php

$arr_of_employees = [
    ['Employee' => 'Employee 1','BasePay' => 7.5,'HoursWorked'=>35],
    ['Employee' => 'Employee 2','BasePay' => 8.2,'HoursWorked'=>47],
    ['Employee' => 'Employee 3','BasePay' => 10,'HoursWorked'=>73],
];


class WeeklyWages
{

    public static function weekly_pay_calculator(int $base_pay,int $hours_worked):string
    {
        if ($hours_worked > 60)
        {
            return ': Error - worked over 60 hours'.PHP_EOL;
        }
        elseif ($base_pay < 8)
        {
            return ' : Error - base pay under 8$'.PHP_EOL;
        }
        else
        {
            $salary = $base_pay*$hours_worked+($hours_worked-40)*0.5*$base_pay;
            return ' earned '.$salary.' this week'.PHP_EOL;
        }
    }
    public static function employee_pay(array $data):void
    {
        foreach ($data as $employee)
        {
            echo $employee['Employee'].PHP_EOL;
            echo WeeklyWages::weekly_pay_calculator($employee['BasePay'],$employee['HoursWorked']);
        }
    }


}

WeeklyWages::employee_pay($arr_of_employees);
