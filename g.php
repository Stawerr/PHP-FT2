<?php
$sale= readline("Please insert your salary ");
$newSale=0;
$role= readline("Please insert your role | 101- Manager | 102- Engineer | 103- Technician ");

if($role==101){
    $newSale= $sale*1.25;
    echo "Your old salary is ". $sale." ";
    echo "the new salary is ".$newSale." and the difference is ";
    echo $newSale - $sale;
}elseif ($role==102){
    $newSale= $sale*1.20;
    echo "Your old salary is ". $sale." ";
    echo "the new salary is ".$newSale." and the difference is ";
    echo $newSale - $sale;
}else{
    $newSale= $sale*1.15;
    echo "Your old salary is ". $sale." ";
    echo "the new salary is ".$newSale." and the difference is ";
    echo $newSale - $sale;
}