<?php
$sale =readline("Please insert your average sale ");

$credit=0;
if ($sale<=0){
    do{
        $sale =readline("Please insert your average sale again ");
    }while ($sale<=0);
}

if ($sale >0 && $sale<=200){
    echo "No credit evaluable";
}else if ($sale<400){
    $credit=$sale*0.20;
    echo "Your average sale is ".$sale. " and your credit evaluable is ".$credit;
}else if ($sale<600){
    $credit=$sale*0.30;
    echo "Your average sale is ".$sale. " and your credit evaluable is ".$credit;
}else{
    $credit=$sale*0.40;
    echo "Your average sale is ".$sale. " and your credit evaluable is ".$credit;
}