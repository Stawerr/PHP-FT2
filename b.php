<?php
$written = readline("Please insert your written note ");
$oral =readline("Please insert your oral note ");

$final = $written*0.7+$oral*0.3;

echo $final = ($final >= 10) ? "Approved" :  "Disapproved";


