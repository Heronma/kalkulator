<?php

/*$operationType= readline('Say what you want to do Add/Substract/Multiply/Divide: ');

echo $operationType */

$operationType = array("Add"=>"+", "Substract"=>"-", "Multiply"=>"*", "Divide"=>"/");



function kalkulator(int $operationType, $a, $b) {
    echo $a, $operationType, $b, "=";
    
    if($operationType=="+"){echo $a+$b;} 
    elseif($operationType=="-"){echo $a-$b;} 
    elseif($operationType=="*"){echo $a*$b;}
    elseif($operationType=="/"){echo $a/$b;}
    else{echo "error";};

};

//kalkulator($operationType[''], 5, 6);

//var_dump($argv);

if (isset($argv[2])) {
    echo kalkulator($argv[0], $argv[1], $argv[2]) . PHP_EOL;
}

