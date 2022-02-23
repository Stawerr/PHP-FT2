<?php
$hoursWorked = readline("How many hour do you work this week? ");
$priceHour=7.5;
$hoursExtra=10;
$salary=0;
if ($hoursWorked<=36){
    $salary=$priceHour*$hoursWorked;
}else{
    $salary=$priceHour*36+(($hoursWorked-36)*$hoursExtra);
}
echo "your salary is ".$salary;