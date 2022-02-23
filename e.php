<?php
$number = readline("Please insert a number between 1 and 7 ");
if ($number<1 || $number>7){
    do{
        $number =readline("Please insert a number between 1 and 7 ");
    }while ($number<1 || $number>7);
}
switch ($number){
    case 1:
        echo "Sunday";
        break;
    case 2:
        echo "Monday";
        break;
    case 3:
        echo "Tuesday";
        break;
    case 4:
        echo "Wednesday";
        break;
    case 5:
        echo "Thursday";
        break;
    case 6:
        echo "Friday";
        break;
    case 7:
        echo "Saturday";
        break;
}