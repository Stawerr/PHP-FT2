<?php
$age = readline("Please insert your age ");
$status= readline("Please insert your civil status | 0- Single | 1- Married ");

if ($status == 0 && $age <25){
    echo "Group 1";
}else if ($status == 0 && $age >=25){
    echo "Group 2";
}else if (($status == 1 && $age >34)){
    echo "Group 3";
}else{
    echo "Group 4";
}